<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('user.signin');
        }
    }

    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard($guard)->guest()) {
    //         if ($request->ajax() || $request->wantsJson()) {
    //             return response('Unauthorized', 401);
    //         } else {
    //             return redirect()->guest('user.signin');
    //         }
    //     }

    //     return $next($request);
    // }

}
