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
        switch ($guard){

            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect('admin/home');
                }

            break;
           case 'seller':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('seller.index');
                }

            break;

            case 'subadmin':
                if (Auth::guard($guard)->check()) {
                    return redirect('subadmin/home');
                }

                break;



            default :

                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
            break;

        }

        return $next($request);
    }
}
