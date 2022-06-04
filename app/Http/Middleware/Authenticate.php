<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use closure;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

//     public function handle($request, Closure $next)
// {
//     //check here if the user is authenticated
//     if ( ! Auth::user() )
//     {
//         // here you should redirect to login
//     }

//     return $next($request);
// }
}
