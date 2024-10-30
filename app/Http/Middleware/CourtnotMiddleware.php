<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CourtnotMiddleware
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

        if (!Auth::guard('driveradmin')->check()) {
            return redirect()->route('driverlogin');
        }
        if (Auth::guard('driveradmin')->user()->status != 1) {
            auth()->guard('driveradmin')->logout();
        
            return redirect()->route('driverlogin');
        }
        return $next($request);
    }
}
