<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!is_null(auth()->user()))
        {
            if(auth()->user()->role == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/dashboard');
            }
        }
    }
}
