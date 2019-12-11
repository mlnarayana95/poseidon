<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //dd(\auth()->user()->toArray());
            if(\auth()->user()->user_type == 0) // Customer
                return redirect('/profile');
            else
                return redirect('/admin/dashboard');
        }

        return $next($request);
    }
}
