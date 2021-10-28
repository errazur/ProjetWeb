<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubMid
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
            if(! $request->user()->clubUser){
                return redirect('/creation');
            }
        }
        return $next($request);
    }
}
