<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\ThrottleRequests as BaseThrottleRequests;
use Symfony\Component\HttpFoundation\Response;

class CustomThrottleRequests extends BaseThrottleRequests
{
    /**
     * Handle an incoming request and modify the rate-limit response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $response = parent::handle($request, $next);

        // If the rate limit is exceeded, customize the response
        if ($response->status() == Response::HTTP_TOO_MANY_REQUESTS) {
            return response()->json([
                'message' => 'Rate limit exceeded. Please try again later.',
                'status' => 'error',
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        return $response;
    }
}