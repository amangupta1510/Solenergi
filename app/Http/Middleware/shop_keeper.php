<?php

namespace App\Http\Middleware;

use Closure;

class shop_keeper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('shop_keeper')->check()) {
            
                return redirect('/shop/dashboard');
            }

        return redirect('/shop');
    }