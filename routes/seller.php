<?php

use App\Http\Controllers\Buyer\SiteController as BuyerSiteController;
use App\Http\Controllers\Seller\AuthControllers\AuthController;
use App\Http\Controllers\Seller\AuthControllers\LoginAction;
use App\Http\Controllers\Seller\AuthControllers\RegisterAction;
use App\Http\Controllers\SELLER\Order\OrderController;
use App\Http\Controllers\Seller\SellerController;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
//    'middleware' => [
//        'localeSessionRedirect',
//        'localizationRedirect',
//        'localeViewPath'
//    ]
],
    static function () {
        // seller routes
        Route::group(['prefix' => 'seller'], static function () {

            /** Auth Controller */
            Route::group(['middleware' => 'guest:seller'], static function () {

                Route::view('login', 'sellers.account.login')->name('seller.login');
                Route::post('login', LoginAction::class)->name('seller.doLogin');

                Route::view('register', 'sellers.account.register')->name('seller.register');
                Route::post('register', RegisterAction::class)->name('seller.doRegister');

                Route::get('checkSellerSignUpForm',
                    [AuthController::class, 'checkSellerSignUpForm'])->name('checkSellerSignUpForm');
                Route::post('checkSellerSignUpCode',
                    [AuthController::class, 'checkSellerSignUpCode'])->name('checkSellerSignUpCode');

                Route::get('checkSellerLoginForm',
                    [AuthController::class, 'checkSellerLoginForm'])->name('checkSellerLoginForm');
                Route::post('checkSellerLoginCode',
                    [AuthController::class, 'checkSellerLoginCode'])->name('checkSellerLoginCode');

                Route::get('reSendSellerSignUpCode/{mobile}',
                    [AuthController::class, 'reSendSellerSignUpCode'])->name('reSendSellerSignUpCode');
                Route::get('reSendSellerLoginCode/{mobile}',
                    [AuthController::class, 'reSendSellerLoginCode'])->name('reSendSellerLoginCode');
            });
            /** //AuthController// */


            Route::group(['middleware' => ['web', 'auth:seller']], static function () {
                Route::get('/', [SellerController::class, 'index'])->name('seller.index');

                Route::get('logout', [AuthController::class, 'logOutSeller'])->name('seller.logout');


                Route::get('getSellerCategories',
                    [SellerController::class, 'getSellerCategories'])->name('getSellerCategories');
                Route::post('activeSellerCategories',
                    [SellerController::class, 'activeSellerCategories'])->name('activeSellerCategories');
                Route::post('notActiveSellerCategories',
                    [SellerController::class, 'notActiveSellerCategories'])->name('notActiveSellerCategories');

                Route::get('addSellerCategory/{categoryName}',
                    [SellerController::class, 'addSellerCategory'])->name('addSellerCategory');
                Route::get('addMainCategory/{categoryName}',
                    [SellerController::class, 'addMainCategory'])->name('addMainCategory');

                Route::get('changeMainCategoryStatus/{id}',
                    [SellerController::class, 'changeMainCategoryStatus'])->name('changeMainCategoryStatus');
                Route::get('createSellerMainCategory',
                    [SellerController::class, 'createSellerMainCategory'])->name('createSellerMainCategory');
                Route::post('storeSellerMainCategory',
                    [SellerController::class, 'storeSellerMainCategory'])->name('storeSellerMainCategory');

                Route::get('getSellerShippingMethods',
                    [SellerController::class, 'getSellerShippingMethods'])->name('getSellerShippingMethods');
                Route::get('changeShippingMethodStatus/{id}',
                    [SellerController::class, 'changeShippingMethodStatus'])->name('changeShippingMethodStatus');

                Route::get('completeSellerProfle',
                    [SellerController::class, 'completeSellerProfle'])->name('completeSellerProfle');
                Route::post('storeSellerProfle',
                    [SellerController::class, 'storeSellerProfle'])->name('storeSellerProfle');

                Route::get('getSellerProfile', [SellerController::class, 'getSellerProfile'])->name('getSellerProfile');
                Route::get('/getSellerDashBoard',
                    [SellerController::class, 'getSellerDashBoard'])->name('getSellerDashBoard');
                Route::get('getSellerNotification',
                    [SellerController::class, 'getSellerNotification'])->name('getSellerNotification');

                Route::get('getSellerOrders', [OrderController::class, 'index'])->name('getSellerOrders');
//                Route::get('getSellerOrders', [SellerController::class, 'getSellerOrders'])->name('getSellerOrders');
                Route::get('sellerOrderDetails/{id}',
                    [SellerController::class, 'sellerOrderDetails'])->name('sellerOrderDetails');
                Route::get('createNewOrder', [SellerController::class, 'createNewOrder'])->name('createNewOrder');
                Route::get('getSellerReports', [SellerController::class, 'getSellerReports'])->name('getSellerReports');
                Route::post('exportSellerOrders',
                    [SellerController::class, 'exportSellerOrders'])->name('exportSellerOrders');
                Route::get('changeOrderStatus/{id}/{status}',
                    [SellerController::class, 'changeOrderStatus'])->name('changeOrderStatus');

                Route::get('getSellerProducts',
                    [SellerController::class, 'getSellerProducts'])->name('getSellerProducts');
                Route::post('exportSellerProducts',
                    [SellerController::class, 'exportSellerProducts'])->name('exportSellerProducts');
                Route::post('changeSellerProductsStatus',
                    [SellerController::class, 'changeSellerProductsStatus'])->name('changeSellerProductsStatus');
                Route::post('deleteSellerProducts',
                    [SellerController::class, 'deleteSellerProducts'])->name('deleteSellerProducts');
                Route::get('exportSellerProduct/{id}',
                    [SellerController::class, 'exportSellerProduct'])->name('exportSellerProduct');
                Route::get('sellerProductDetails/{id}',
                    [SellerController::class, 'sellerProductDetails'])->name('sellerProductDetails');
                Route::get('createSellerProduct',
                    [SellerController::class, 'createSellerProduct'])->name('createSellerProduct');
                Route::post('storeSellerProduct',
                    [SellerController::class, 'storeSellerProduct'])->name('storeSellerProduct');
                Route::get('editSellerProduct/{id}',
                    [SellerController::class, 'editSellerProduct'])->name('editSellerProduct');
                Route::post('updateSellerProduct',
                    [SellerController::class, 'updateSellerProduct'])->name('updateSellerProduct');
                Route::get('deleteSellerProduct/{id}',
                    [SellerController::class, 'deleteSellerProduct'])->name('deleteSellerProduct');
                Route::get('changeProductStatus/{id}',
                    [SellerController::class, 'changeProductStatus'])->name('changeProductStatus');

                Route::get('getSellerDeals', [SellerController::class, 'getSellerDeals'])->name('getSellerDeals');
                Route::get('getDealDetails/{id}', [SellerController::class, 'getDealDetails'])->name('getDealDetails');
                Route::get('createDealOffer/{id}',
                    [SellerController::class, 'createDealOffer'])->name('createDealOffer');

                Route::get('getAbandonedCarts',
                    [SellerController::class, 'getAbandonedCarts'])->name('getAbandonedCarts');
                Route::get('getabandonedCartDetails/{id}',
                    [SellerController::class, 'getabandonedCartDetails'])->name('getabandonedCartDetails');
                Route::post('sellerCreateReminder',
                    [SellerController::class, 'sellerCreateReminder'])->name('sellerCreateReminder');

                Route::get('getCoverPoints', [SellerController::class, 'getCoverPoints'])->name('getCoverPoints');
                Route::get('createCoverPoints',
                    [SellerController::class, 'createCoverPoints'])->name('createCoverPoints');
                Route::post('storeCoverPoints',
                    [SellerController::class, 'storeCoverPoints'])->name('storeCoverPoints');
                Route::get('changeCoverPointStatus/{id}',
                    [SellerController::class, 'changeCoverPointStatus'])->name('changeCoverPointStatus');

                Route::get('getSellerCoupons', [SellerController::class, 'getSellerCoupons'])->name('getSellerCoupons');
                Route::get('createSellerCoupon',
                    [SellerController::class, 'createSellerCoupon'])->name('createSellerCoupon');
                Route::post('storeSellerCoupon',
                    [SellerController::class, 'storeSellerCoupon'])->name('storeSellerCoupon');
                Route::get('editSellerCoupon', [SellerController::class, 'editSellerCoupon'])->name('editSellerCoupon');
                Route::post('updateSellerCoupon',
                    [SellerController::class, 'updateSellerCoupon'])->name('updateSellerCoupon');
                Route::get('deleteSellerCoupon/{id}',
                    [SellerController::class, 'deleteSellerCoupon'])->name('deleteSellerCoupon');
                Route::get('changeCouponStatus/{id}',
                    [SellerController::class, 'changeCouponStatus'])->name('changeCouponStatus');
                Route::post('exportSellerCoupons',
                    [SellerController::class, 'exportSellerCoupons'])->name('exportSellerCoupons');
                Route::post('activeSellerCoupons',
                    [SellerController::class, 'activeSellerCoupons'])->name('activeSellerCoupons');
                Route::post('notActiveSellerCoupons',
                    [SellerController::class, 'notActiveSellerCoupons'])->name('notActiveSellerCoupons');
                Route::post('deleteSellerCoupons',
                    [SellerController::class, 'deleteSellerCoupons'])->name('deleteSellerCoupons');

                Route::get('getSellerMsgCampaigns',
                    [SellerController::class, 'getSellerMsgCampaigns'])->name('getSellerMsgCampaigns');
                Route::get('createSellerMsgCampaigns',
                    [SellerController::class, 'createSellerMsgCampaigns'])->name('createSellerMsgCampaigns');
                Route::post('storeSellerMsgCampaigns',
                    [SellerController::class, 'storeSellerMsgCampaigns'])->name('storeSellerMsgCampaigns');
                Route::get('editSellerMsgCampaigns',
                    [SellerController::class, 'editSellerMsgCampaigns'])->name('editSellerMsgCampaigns');
                Route::post('updateSellerMsgCampaigns',
                    [SellerController::class, 'updateSellerMsgCampaigns'])->name('updateSellerMsgCampaigns');
                Route::get('deleteSellerMsgCampaigns',
                    [SellerController::class, 'deleteSellerMsgCampaigns'])->name('deleteSellerMsgCampaigns');

                Route::get('getSellerStory', [SellerController::class, 'getSellerStory'])->name('getSellerStory');
                Route::get('sellerStoryDetails/{id}',
                    [SellerController::class, 'sellerStoryDetails'])->name('sellerStoryDetails');
                Route::get('createSellerStory',
                    [SellerController::class, 'createSellerStory'])->name('createSellerStory');
                Route::post('storeSellerStory',
                    [SellerController::class, 'storeSellerStory'])->name('storeSellerStory');
                Route::get('editSellerStory', [SellerController::class, 'editSellerStory'])->name('editSellerStory');
                Route::post('updateSellerStory',
                    [SellerController::class, 'updateSellerStory'])->name('updateSellerStory');
                Route::get('deleteSellerStory/{id}',
                    [SellerController::class, 'deleteSellerStory'])->name('deleteSellerStory');

                Route::get('getSellerTaxs', [SellerController::class, 'getSellerTaxs'])->name('getSellerTaxs');
                Route::get('createSellerTaxs', [SellerController::class, 'createSellerTaxs'])->name('createSellerTaxs');
                Route::post('storeSellerTaxs', [SellerController::class, 'storeSellerTaxs'])->name('storeSellerTaxs');
                Route::get('deleteSellerTax/{id}',
                    [SellerController::class, 'deleteSellerTax'])->name('deleteSellerTax');
                Route::get('changeTaxStatus/{id}',
                    [SellerController::class, 'changeTaxStatus'])->name('changeTaxStatus');
                Route::post('activeSellerTaxs',
                    [SellerController::class, 'activeSellerTaxs'])->name('activeSellerTaxs');
                Route::post('notActiveSellerTaxs',
                    [SellerController::class, 'notActiveSellerTaxs'])->name('notActiveSellerTaxs');
                Route::post('notActiveSellerTaxs',
                    [SellerController::class, 'notActiveSellerTaxs'])->name('notActiveSellerTaxs');
                Route::post('deleteSellerTaxs',
                    [SellerController::class, 'deleteSellerTaxs'])->name('deleteSellerTaxs');

                Route::get('getSellerSettings',
                    [SellerController::class, 'getSellerSettings'])->name('getSellerSettings');
                Route::post('updateSelleSettings',
                    [SellerController::class, 'updateSelleSettings'])->name('updateSelleSettings');

                Route::get('getPaymentsMethods',
                    [SellerController::class, 'getPaymentsMethods'])->name('getPaymentsMethods');
                Route::get('addBankAccount', [SellerController::class, 'addBankAccount'])->name('addBankAccount');
                Route::post('storeBankAccount',
                    [SellerController::class, 'storeBankAccount'])->name('storeBankAccount');
                Route::get('changePaymentMethodStatus/{id}',
                    [SellerController::class, 'changePaymentMethodStatus'])->name('changePaymentMethodStatus');

                Route::get('getSellerTeam', [SellerController::class, 'getSellerTeam'])->name('getSellerTeam');
                Route::get('createSellerTeam', [SellerController::class, 'createSellerTeam'])->name('createSellerTeam');
                Route::post('storeSellerTeam', [SellerController::class, 'storeSellerTeam'])->name('storeSellerTeam');
                Route::get('changeTeamStatus/{id}',
                    [SellerController::class, 'changeTeamStatus'])->name('changeTeamStatus');
                Route::get('deleteSellerTeam/{id}',
                    [SellerController::class, 'deleteSellerTeam'])->name('deleteSellerTeam');
                Route::post('exportSellerTeam',
                    [SellerController::class, 'exportSellerTeam'])->name('exportSellerTeam');
                Route::post('activeSellerTeam',
                    [SellerController::class, 'activeSellerTeam'])->name('activeSellerTeam');
                Route::post('notActiveSellerTeam',
                    [SellerController::class, 'notActiveSellerTeam'])->name('notActiveSellerTeam');
                Route::post('deleteSellerTeam',
                    [SellerController::class, 'deleteSellerTeam'])->name('deleteSellerTeam');

                Route::get('getSellerStorages',
                    [SellerController::class, 'getSellerStorages'])->name('getSellerStorages');
                Route::get('createSellerStorage',
                    [SellerController::class, 'createSellerStorage'])->name('createSellerStorage');
                Route::post('storeSellerStorage',
                    [SellerController::class, 'storeSellerStorage'])->name('storeSellerStorage');
                Route::get('deleteSellerStorage/{id}',
                    [SellerController::class, 'deleteSellerStorage'])->name('deleteSellerStorage');
                Route::get('changeSellerStorageStatus/{id}',
                    [SellerController::class, 'changeSellerStorageStatus'])->name('changeSellerStorageStatus');
                Route::get('changeSellerStorageDefault/{id}',
                    [SellerController::class, 'changeSellerStorageDefault'])->name('changeSellerStorageDefault');

                Route::get('getSellerStocked', [SellerController::class, 'getSellerStocked'])->name('getSellerStocked');
                Route::post('updateSellerStocked',
                    [SellerController::class, 'updateSellerStocked'])->name('updateSellerStocked');

                Route::get('getSellerChats', [SellerController::class, 'getSellerChats'])->name('getSellerChats');

                Route::get('getSellerClients', [SellerController::class, 'getSellerClients'])->name('getSellerClients');
                Route::get('getClientOrders/{id}',
                    [SellerController::class, 'getClientOrders'])->name('getClientOrders');
                Route::post('exportSellerClients',
                    [SellerController::class, 'exportSellerClients'])->name('exportSellerClients');

                Route::get('getSubCategories/{id}',
                    'WEB\Admin\HomeController@getSubCategories')->name('getSubCategories');

            });



            /**
             * Todo: remove this route after testing
             * This is old routes of Website
             */
//            Route::get('/website/', [BuyerSiteController::class, 'index'])->name('homeWebSite');
//            Route::get('/website/getAllOffers', [BuyerSiteController::class, 'getAllOffers'])->name('getAllOffers');
//            Route::get('/website/getProductsByCategory/{id}',
//                [BuyerSiteController::class, 'getProductsByCategory'])->name('getProductsByCategory');
//            Route::get('/website/getProductDetails/{id}',
//                [BuyerSiteController::class, 'getProductDetails'])->name('getProductDetails');
//
//
//            Route::get('website/LoginForm', [BuyerSiteController::class, 'LoginForm'])->name('LoginForm');
//            Route::get('website/signUpSiteForm',
//                [BuyerSiteController::class, 'signUpSiteForm'])->name('signUpSiteForm');
//            Route::post('website/signUpSite', [BuyerSiteController::class, 'signUpSite'])->name('signUpSite');
//            Route::get('website/checkSiteSignUpForm',
//                [BuyerSiteController::class, 'checkSiteSignUpForm'])->name('checkSiteSignUpForm');
//            Route::post('website/checkSiteSignUpCode',
//                [BuyerSiteController::class, 'checkSiteSignUpCode'])->name('checkSiteSignUpCode');
//
//            Route::post('website/signInSite', [BuyerSiteController::class, 'signInSite'])->name('signInSite');
//            Route::get('website/checkSiteLoginForm',
//                [BuyerSiteController::class, 'checkSiteLoginForm'])->name('checkSiteLoginForm');
//            Route::post('website/checkSiteLoginCode',
//                [BuyerSiteController::class, 'checkSiteLoginCode'])->name('checkSiteLoginCode');
//
//            Route::get('website/reSendSiteSignUpCode/{mobile}',
//                [BuyerSiteController::class, 'reSendSiteSignUpCode'])->name('reSendSiteSignUpCode');
//            Route::get('website/reSendSiteLoginCode/{mobile}',
//                [BuyerSiteController::class, 'reSendSiteLoginCode'])->name('reSendSiteLoginCode');
//
//            Route::get('website/completeSiteProfle',
//                [BuyerSiteController::class, 'completeSiteProfle'])->name('completeSiteProfle');
//            Route::post('website/storeSiteProfle',
//                [BuyerSiteController::class, 'storeSiteProfle'])->name('storeSiteProfle');
//            Route::get('website/logOutSite', [BuyerSiteController::class, 'logOutSite'])->name('logOutSite');

        });
    });
