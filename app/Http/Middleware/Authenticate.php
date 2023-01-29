<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            if($request->is('seller*')) {
                return route('seller.login');
            }

            return route('home.index', ['error' => trans('auth.you_must_login_first')]);
//            return route('login');
        }

        return response()->json(['message'=>'you must be logged in'],401);
    }
}
