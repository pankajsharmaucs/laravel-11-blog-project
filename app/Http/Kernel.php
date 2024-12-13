<?php


namespace App\Http;

use App\Http\Middleware\CustomThrottleRequests;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Other middlewares...
        'customThrottle' => CustomThrottleRequests::class,
    ];
}