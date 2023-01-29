<?php

use App\Http\Controllers\Buyer\Order\OrderController;
use App\Http\Controllers\Website\Cart\AddOrRemoveQuantityToCartAction;
use App\Http\Controllers\Website\Cart\DeleteAllCartAction;
use App\Http\Controllers\Website\Coupon\CheckCouponAction;
use App\Http\Controllers\Website\Deal\DeleteProductFromDealAction;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\Order\AddNewOrderAction;
use App\Http\Controllers\Website\Order\SuccessOrderAction;
use App\Http\Controllers\Website\SearchController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\DealController;
use App\Http\Controllers\Website\Auth\LoginController;
use App\Http\Controllers\Website\Auth\RegisterController;
use App\Http\Controllers\Website\SetCurrencyAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\ProfileController;
use App\Http\Controllers\Website\Cart\CartController;



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
],
static function() {
    Route::name('home.')->group(function(){
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('/conditions',[HomeController::class,'getCoditions'])->name('conditions');
    });

    // auth routes
    Route::group([
        'middleware' => [ 'guest:buyer' ]
    ], function(){
        Route::get('/login',[LoginController::class,'formLogin'])->name('formLogin');
        Route::post('login',[LoginController::class,'login'])->name('login');
        Route::get('/otp_number',[LoginController::class,'formOtpCode'])->name('formOtpCode');
        Route::post('/otp_number',[LoginController::class,'otpCode'])->name('otpCode');
        Route::get('/register',[RegisterController::class,'formRegister'])->name('formRegister');
        Route::post('/register',[RegisterController::class,'register'])->name('register');
    });
   // logout route(auth user)
    Route::group([
        'middleware' => [ 'auth:buyer' ]
    ], function(){
        Route::get('/logout',[LoginController::class,'logout'])->name('buyer.logout');
        Route::prefix('products')->name('products.')->group(function(){
            Route::post('like',[ProductController::class,'likeProduct'])->name('like')->middleware('auth');
            Route::get('favorites',[ProductController::class,'getFavorites'])->name('favorites')->middleware('auth');
        });
        Route::prefix('buyer')->name('buyer.')->group(function(){
            Route::get('profile/{buyer}',[ProfileController::class,'profileForm'])->name('profileForm');
            Route::post('profile/{buyer}',[ProfileController::class,'profile'])->name('profile');

            Route::prefix('orders')->name('orders.')->group(function(){
                Route::get('',[OrderController::class,'index'])->name('index');
                Route::get('{model:order_number}',[OrderController::class,'show'])->name('show');
            });

        });
        Route::prefix('deals')->name('deals.')->group(function(){
            Route::get('create',[DealController::class,'create'])->name('create');
            Route::post('store',[DealController::class,'store'])->name('store');
            Route::delete('{product}/delete-product',DeleteProductFromDealAction::class)->name('delete.product');
        });
        Route::prefix('carts')->name('carts.')->group(function(){
            Route::delete('delete-all',DeleteAllCartAction::class)->name('delete.all');
            Route::get('index',[CartController::class,'index'])->name('index');
            Route::post('',[CartController::class,'store'])->name('store');
            Route::post('{type}',AddOrRemoveQuantityToCartAction::class)->name('add.or.remove');
            Route::delete('{model}',[CartController::class,'destroy'])->name('delete');
        });
        Route::prefix('orders')->name('orders.')->group(function () {
            Route::post('', AddNewOrderAction::class)->name('store');
            Route::get('success', SuccessOrderAction::class)->name('success');
        });
        Route::prefix('coupons')->name('coupons.')->group(function () {
            Route::post('check', CheckCouponAction::class)->name('check');
        });

     });

    // categories routes
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/main-categories/{main_category}', [CategoryController::class, 'show'])->name('main_categories.show');
    });
    // search routes
    Route::prefix('search')->name('search.')->group(function(){
        Route::get('/products', [SearchController::class, 'searchProducts'])->name('products');
    });
    // products routes
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/{product}',[ProductController::class,'show'])->name('show');
    });

    Route::get('/currencySession',SetCurrencyAction::class)->name('currencySession');

    Route::view('test','website.search.products');

    // deals routes
    Route::prefix('deals')->name('deals.')->group(function(){
        Route::get('index',[DealController::class,'index'])->name('index');
        Route::get('/{product}',[DealController::class,'show'])->name('show');
    });
});

