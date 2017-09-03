<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Member
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

        if ( Auth::guest() ) {
            return redirect('/login');
        }

        if ( Auth::check() && Auth::user()->isMember() ) {
            return $next($request);
        }

        return redirect('/membership');
    }
}
