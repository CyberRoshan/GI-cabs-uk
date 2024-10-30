<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CourtMiddleware
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
        if (Auth::guard('driveradmin')->check()) {
            return redirect('/driver-admin/dashboard');
        }
        return $next($request);
    }
}
