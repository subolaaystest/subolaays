<?php

namespace App\Providers;

use App\Models\Ad;
use App\Models\Admin;
use App\Models\Currency;
use App\Models\DealOffer;
use App\Models\Language;
use App\Models\Setting;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
//        dd(Currency::withTranslation()->active()->get());

        Paginator::useBootstrap();

        Schema::defaultStringLength(191);
        view()->composer('*', function ($view)
        {


            $deals_offersCount = 0;

            if (auth()->guard('seller')->user()) {

                $deals_offersCount = DealOffer::where('seller_id', auth()->guard('seller')->user()->id)->count();

            }

           $view->with([
            'settings' => Setting::query()->first(),
            'ads' => Ad::active()->latest()->first(),
            'locales' => Language::all(),
            'admin' => Admin::first(),
            'contact' => 0,
            'currencies' => Currency::withTranslation()->active()->get(),
            'deals_offersCount' => $deals_offersCount,

        ]);
        });
    }



    public function register()
    {
        //
    }
}

