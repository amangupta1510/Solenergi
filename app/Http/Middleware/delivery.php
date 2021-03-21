<?php

namespace App\Http\Middleware;

use Closure;

class delivery
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
      if (Auth::guard('delivery')->check()) {
            
                return redirect('/delivery/dashboard');
            }

        return redirect('/delivery/login');
    }

}
