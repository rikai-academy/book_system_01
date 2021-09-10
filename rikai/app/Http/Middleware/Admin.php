<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check()) {
            if(Auth::user()->roles()->value('name') === 'admin' || Auth::user()->roles()->value('name') === 'booker' || Auth::user()->roles()->value('name') === 'manager' || Auth::user()->role === 'admin'){
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('admin.index');
            }
        }else{
            return redirect()->route('admin.index');
        }
    }
}
