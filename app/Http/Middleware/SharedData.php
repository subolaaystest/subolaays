<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use LaravelLocalization;

class SharedData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        View::share('locales', LaravelLocalization::getSupportedLocales());
        View::share('currentLocale', LaravelLocalization::getCurrentLocale());
        // get the inverse current local from supported locales array (if current locale is 'en' then it will be 'ar' and so on)
        $invertLocale = array_first(array_keys(array_diff_key(LaravelLocalization::getSupportedLocales(), [
            LaravelLocalization::getCurrentLocale() => null
        ])));
        View::share('invertLocale', $invertLocale);

        return $next($request);
    }
}
