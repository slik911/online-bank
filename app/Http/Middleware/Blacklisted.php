<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Blacklisted
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
        if (Auth::user()->status == false) {

            // Alert::error('Account Suspended');
            Auth::logout();
            Alert::error('Account Suspended');
            return redirect()->route('login')->with('error','Sorry, this account has been suspended');
        }
        return $next($request);
    }
}
