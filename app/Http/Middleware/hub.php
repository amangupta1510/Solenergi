<?php

namespace App\Http\Middleware;

use Closure;

class hub
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
      if (Auth::guard('hub')->check()) {
            
                return redirect('/hub/dashboard');
            }

        return redirect('/hub/login');
    }

}
