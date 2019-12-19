<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->route()->getName() == 'transactions.destroy' || $request->route()->getName() == 'transactions.show'){
            return $next($request);

        }
        if (auth()->user()->role == $role) {
            return $next($request);
            }
            return abort(403);
    }
}
