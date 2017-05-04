<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $redireccion="";
            switch (Auth::guard($guard)->user()->rol){
                case 'user':
                    $redireccion='/';
                    break;
                case 'admin':
                    $redireccion='register';
                    break;

                default:
                    return redirect()->route('auth.login');
            }
            return redirect()->route($redireccion);
        }

        return $next($request);
    }
}
