<?php

namespace App\Http\Middleware;

use Closure;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('user')->check()) {
            
                return redirect('/x4RtJ55nQ/user');
            }

        return redirect('/x4RtJ55nQ/user/login');
    }
}