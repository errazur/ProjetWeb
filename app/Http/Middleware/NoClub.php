<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoClub
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

        if($request->user()){
            if($request->user()->clubUser){
                return redirect('/Accueil');
            }
        }
        return $next($request);
    }
}
