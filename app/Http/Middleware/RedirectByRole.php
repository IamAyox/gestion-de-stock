<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RedirectByRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$role)
    {
        if(Auth::check()){
            if(Auth::user()->role == $role ){
                return $next($request);
            }
            else{
                abort(403);
            }
            // if(Auth::user()->role == "vendeur"){
            //     // return redirect('/vendeurDash');
            //     return $next($request);
            // }
            // elseif(Auth::user()->role == "gérant"){
            //     // return redirect('/gérantDash');
            //     return $next($request);
            // }
            // elseif(Auth::user()->role == "caissier"){
            //     // return redirect('/caissierDash');
            //     return $next($request);
            // }
        }else{
            return redirect('/login');
        }

    }
}
