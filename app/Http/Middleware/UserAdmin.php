<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//     public function handle(Request $request, Closure $next)
//     {
//         return $next($request);
//     }

    public function handle(Request $request, Closure $next)
    {
        switch( Auth::user()->rol){
            case ('admin'):
                return $next($request);
                break;
            case ('normal'):
                return redirect()->route('encuesta.home');// ruta debe ser la correcta
                break;
            case ('gad'):
                return redirect()->route('gad.home');
                break;
        }
    }
}
