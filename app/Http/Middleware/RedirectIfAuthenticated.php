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
        if (Auth::guard('student')->check()) {
                return redirect('/user/dashboard');
            }
            elseif (Auth::guard('teacher')->check()) {
                return redirect('/teacher/dashboard');
            }
             elseif (Auth::guard('admin')->check()) {
                return redirect('/admin/dashboard');
            }

        return $next($request);
    }
}
