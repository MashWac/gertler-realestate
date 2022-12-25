<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adminonly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('logged')){
            return redirect('login')->with('status','You are not logged in please log in');
        }
        return $next($request);
    }
}
