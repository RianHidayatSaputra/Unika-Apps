<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekBelumLogin
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
        // dd(!$request->session()->attributes['data']);]
        return print_r(session('data'));

        if(!\Session::has('data')) {
            return redirect('login');
        }
        return $next($request);
        
    }
}