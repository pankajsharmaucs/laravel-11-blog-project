<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminCheck {
    /**
    * Handle an incoming request.
    *
    * @param  \Closure( \Illuminate\Http\Request ): ( \Symfony\Component\HttpFoundation\Response )  $next
    */

    public function handle( Request $request, Closure $next ): Response {
        // Check if the user is authenticated and is an admin
        if ( Auth::guard( 'admin' )->check() ) {
            return $next( $request );
        }

        return redirect( '/admin/login' )->with( 'error', 'You are not authorized to access this page.' );
    }
    
}
