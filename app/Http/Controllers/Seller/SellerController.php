<?php

namespace App\Http\Controllers\Seller;

use App\Exports\ExportSellerClients;
use App\Exports\ExportSellerCoupons;
use App\Exports\ExportSellerOrders;
use App\Exports\ExportSellerProduct;
use App\Exports\ExportSellerProducts;
use App\Exports\ExportSellerTeam;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Buyer;
use App\Models\Cart;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\City;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Deal;
use App\Models\Language;
use App\Models\MainCategory;
use App\Models\Notification;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductSmartPrice;
use App\Models\Seller;
use App\Models\SellerAreaPoint;
use App\Models\SellerBankAccount;
use App\Models\SellerCategory;
use App\Models\SellerMainCategory;
use App\Models\SellerPaymentMethod;
use App\Models\SellerShippingMethod;
use App\Models\SellerStorage;
use App\Models\SellerTeam;
use App\Models\Setting;
use App\Models\ShippingMethod;
use App\Models\Tax;
use App\Models\Trademark;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Image;
use Maatwebsite\Excel\Facades\Excel;
use Response;
use Session;


class SellerController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales, 'settings' => $this->settings]);
    }


    public function exportSellerProducts(Request $request)
    {
            return Excel::download(new ExportSellerProducts($request->products_ids), 'sellerProducts.xlsx');
    }


    public function activeSellerCategories(Request $request)
    {
        SellerMainCategory::whereIn('main_category_id', $request->categories_ids)->delete();

        if($request->categories_ids) {
            foreach($request->categories_ids as $one){
                $sellers_main_categories = new SellerMainCategory();
                $sellers_main_categories->seller_id = auth()->guard('seller')->user()->id;
                $sellers_main_categories->main_category_id = $one;
                $sellers_main_categories->save();
            }
        }


        return redirect()->route('getSellerCategories');
    }


    public function notActiveSellerCategories(Request $request)
    {
        SellerMainCategory::whereIn('main_category_id', $request->categories_ids)->delete();
        return redirect()->route('getSellerCategories');
    }



    public function activeSellerCoupons(Request $request)
    {
        Coupon::whereIn('id', $request->coupons_ids)->update(['status' => 'active']);
        return redirect()->route('getSellerCoupons');
    }

    public function notActiveSellerCoupons(Request $request)
    {
        Coupon::whereIn('id', $request->coupons_ids)->update(['status' => 'not_active']);
        return redirect()->route('getSellerCoupons');
    }

    public function deleteSellerCoupons(Request $request)
    {
        Coupon::whereIn('id', $request->coupons_ids)->delete();
        return redirect()->route('getSellerCoupons');
    }


    public function activeSellerTaxs(Request $request)
    {
        Tax::whereIn('id', $request->taxs_ids)->update(['status' => 'active']);
        return redirect()->route('getSellerTaxs');
    }

    public function notActiveSellerTaxs(Request $request)
    {
        Tax::whereIn('id', $request->taxs_ids)->update(['status' => 'not_active']);
        return redirect()->route('getSellerTaxs');
    }



    public function deleteSellerTaxs(Request $request)
    {
        Tax::whereIn('id', $request->taxs_ids)->delete();
        return redirect()->route('getSellerTaxs');
    }




    public function activeSellerTeam(Request $request)
    {
        SellerTeam::whereIn('id', $request->teams_ids)->update(['status' => 'active']);
        return redirect()->route('getSellerTeam');
    }

    public function notActiveSellerTeam(Request $request)
    {
        SellerTeam::whereIn('id', $request->teams_ids)->update(['status' => 'not_active']);
        return redirect()->route('getSellerTeam');
    }


    public function deleteSellerTeam(Request $request)
    {
        SellerTeam::whereIn('id', $request->teams_ids)->delete();
        return redirect()->route('getSellerTeam');
    }



    public function changeSellerProductsStatus(Request $request)
    {
        Product::whereIn('id', $request->products_ids)->update(['status' => $request->formAction]);
        return redirect()->route('getSellerProducts');
    }


    public function deleteSellerProducts(Request $request)
    {
        Product::whereIn('id', $request->products_ids)->delete();
        return redirect()->route('getSellerProducts');
    }


    public function exportSellerProduct($id)
    {
            return Excel::download(new ExportSellerProduct($id), 'sellerProduct.xlsx');
    }


    public function exportSellerOrders(Request $request)
    {
            return Excel::download(new ExportSellerOrders($request->orders_ids), 'sellerOrders.xlsx');
    }


    public function exportSellerCoupons(Request $request)
    {
            return Excel::download(new ExportSellerCoupons($request->coupons_ids), 'exportSellerCoupons.xlsx');
    }


    public function exportSellerClients(Request $request)
    {
            return Excel::download(new ExportSellerClients($request->clients_ids), 'sellerClients.xlsx');
    }


    public function exportSellerTeam(Request $request)
    {
            return Excel::download(new ExportSellerTeam($request->teams_ids), 'sellerTeam.xlsx');
    }



    public function index()
    {
        if(auth()->guard('seller')->user()->seller_category_id == null){
            return redirect()->route('completeSellerProfle');
        }
        $orders = Order::where('seller_id', auth()->guard('seller')->user()->id)->where('status', 'new')->latest('id')->take(10)->get();
        $productsMostSell = Product::where('seller_id', auth()->guard('seller')->user()->id)->where('type', 'offer_request')->orderBy('quantity_sell', 'desc')->paginate(20);
        $productsSolidOut = Product::where('seller_id', auth()->guard('seller')->user()->id)->where('type', 'offer_request')->orderBy('quantity_available', 'asc')->paginate(20);

        $ordersBuyerIDs = Order::where('seller_id', auth()->guard('seller')->user()->id)->pluck('buyer_id')->toArray();
        $mostPurchasedCustomers = Buyer::whereIn('id', $ordersBuyerIDs)->orderBy('orders_count', 'desc')->take(5)->get();
        return view('sellers.home', ['orders' => $orders,
                                     'productsMostSell' => $productsMostSell,
                                     'productsSolidOut' => $productsSolidOut,
                                    'mostPurchasedCustomers' => $mostPurchasedCustomers]);
    }



    public function getSellerProfile(Request $request)
    {
        if(Auth::check()){
        // redirect to profile page
        }
        // redirect to login form
    }


    public function completeSellerProfle(Request $request)
    {
        $sellers_categories = SellerCategory::active()->where('approve', 1)->get();
        $main_categories = MainCategory::active()->get();
        return view('sellers.account.completeSellerProfle', ['sellers_categories' => $sellers_categories, 'main_categories' => $main_categories]);
    }


    public function storeSellerProfle(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $checkSeller = Seller::findOrFail(auth()->guard('seller')->user()->id);
        $checkSeller->seller_category_id = $request->seller_category_id;
        $checkSeller->latitude = $request->latitude;
        $checkSeller->longitude = $request->longitude;
        $checkSeller->name = $request->name;
        $checkSeller->email = $request->email;
        $checkSeller->save();

        SellerMainCategory::where('seller_id', auth()->guard('seller')->user()->id)->delete();

        if($request->main_categories) {
            foreach($request->main_categories as $one){
                $sellers_main_categories = new SellerMainCategory();
                $sellers_main_categories->seller_id = auth()->guard('seller')->user()->id;
                $sellers_main_categories->main_category_id = $one;
                $sellers_main_categories->save();
            }
        }

        return redirect()->route('seller.login');
    }


    public function getSellerDashBoard(Request $request)
    {
        if(Auth::check()){
            // $notificationsNew =
            // $weeklyProfits =
            // $weeklyOrders =
            // $weeklyVisits =
            // $weeklyClients =
            // $moreClientsBuy =
            //$newOrders =
            // $moreProdcutsBuy
            // $outOfStockProducts


        // redirect to profile page
        }
        // redirect to login form
    }


    public function getSellerNotification(Request $request)
    {
        if(Auth::check()){
        $notifications = Notification::where(['user_id' => Auth::user()->id, 'user_type' => 'seller'])->latest('id')->paginate(20);
        // redirect to notification page
        }
        // redirect to login form
    }



    public function getSellerTaxs(Request $request)
    {
        $items = Tax::where(['seller_id' => auth()->guard('seller')->user()->id])->latest('id')->get();
        return view('sellers.taxs.index', ['items' => $items]);
    }


    public function createSellerTaxs()
    {
        $countries = Country::active()->get();
        return view('sellers.taxs.create', ['countries' => $countries]);
    }


    public function storeSellerTaxs(Request $request)
    {


        $item = new Tax();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->tax_percent = $request->tax_percent;
        $item->save();

        // if(isset($request->countries)){
        //     foreach($request->countries as $key => $one){
        //         $taxCountries = new TaxCountry();
        //         $taxCountries->tax_id = $item->id;
        //         $taxCountries->country_id = $one->id;
        //         $taxCountries->save();
        //     }
        // }

        return redirect()->route('getSellerTaxs');

    }


    public function deleteSellerTax($id)
    {
        Tax::findOrFail($id)->delete();
        return redirect()->route('getSellerTaxs');
    }


    public function getPaymentsMethods()
    {
        $payments_methods = PaymentMethod::active()->get();
        $banks = SellerBankAccount::where(['seller_id' => auth()->guard('seller')->user()->id])->latest('id')->get();
        return view('sellers.payments_methods.index', ['payments_methods' => $payments_methods, 'banks' => $banks]);
    }



    public function addBankAccount()
    {
        $banks = Bank::active()->get();
        // $banks = SellerBankAccount::where(['seller_id' => auth()->guard('seller')->user()->id])->latest('id')->get();
        return view('sellers.payments_methods.addBankAccount', ['banks' => $banks]);
    }




    public function storeBankAccount(Request $request)
    {

        $item = new SellerBankAccount();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->bank_id = $request->bank_id;
        $item->account_name = $request->account_name;
        $item->account_number = $request->account_number;
        $item->iban = $request->iban;
        $item->save();

        return redirect()->route('getPaymentsMethods');

    }


    public function getSellerCategories(Request $request)
    {
        // $categories = MainCategory::where('created_by', 0)->orWhere(['created_by' => auth()->guard('seller')->user()->id, 'status' => 'under_process'])->latest('id')->paginate(20);
        $categories = MainCategory::latest('id')->paginate(20);
        return view('sellers.categories.index', ['categories' => $categories]);
    }



    public function getSellerShippingMethods(Request $request)
    {
        $shipping_methods = ShippingMethod::latest('id')->paginate(20);
        return view('sellers.shipping_methods.index', ['shipping_methods' => $shipping_methods]);
    }




    public function getSellerTeam()
    {
        $items = SellerTeam::where(['seller_id' => auth()->guard('seller')->user()->id])->latest('id')->paginate(20);
        return view('sellers.team.index', ['items' => $items]);
    }


    public function createSellerTeam()
    {
        return view('sellers.team.create');
    }


    public function storeSellerTeam(Request $request)
    {

        $item = new SellerTeam();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->name = $request->name;
        $item->mobile = $request->mobile;
        $item->email = $request->email;
        $item->save();

        return redirect()->route('getSellerTeam');

    }


    public function changeMainCategoryStatus($id)
    {
        $sellerMainCategories = auth()->guard('seller')->user()->main_categories->pluck('main_category_id')->toArray();

        if(in_array($id, $sellerMainCategories)){
            SellerMainCategory::where('main_category_id', $id)->where('seller_id', auth()->guard('seller')->user()->id)->delete();
            Product::where('main_category_id', $id)->where('seller_id', auth()->guard('seller')->user()->id)->update(['status' => 'not_active']);
        }else{
            $item = new SellerMainCategory();
            $item->seller_id = auth()->guard('seller')->user()->id;
            $item->main_category_id = $id;
            $item->save();
        }

        return true;
    }




    public function changeShippingMethodStatus($id)
    {
        $sellerShippingMethods = auth()->guard('seller')->user()->shipping_methods->pluck('shipping_method_id')->toArray();

        if(in_array($id, $sellerShippingMethods)){
            SellerShippingMethod::where('shipping_method_id', $id)->where('seller_id', auth()->guard('seller')->user()->id)->delete();
        }else{
            $item = new SellerShippingMethod();
            $item->seller_id = auth()->guard('seller')->user()->id;
            $item->shipping_method_id = $id;
            $item->save();
        }

        return true;
    }





    public function changePaymentMethodStatus($id)
    {
        $sellerPaymentMethods = auth()->guard('seller')->user()->payments_methods->pluck('payment_method_id')->toArray();

        if(in_array($id, $sellerPaymentMethods)){
            SellerPaymentMethod::where('payment_method_id', $id)->where('seller_id', auth()->guard('seller')->user()->id)->delete();
            // Product::where('main_category_id', $id)->where('seller_id', auth()->guard('seller')->user()->id)->update(['status' => 'not_active']);
        }else{
            $item = new SellerPaymentMethod();
            $item->seller_id = auth()->guard('seller')->user()->id;
            $item->payment_method_id = $id;
            $item->save();
        }

        return true;
    }



    public function changeProductStatus($id)
    {
        $checkProduct = Product::findOrfail($id);

        if($checkProduct->status == 'not_active'){
            $checkProduct->status = 'active';
            $checkProduct->save();
        }else{
            $checkProduct->status = 'not_active';
            $checkProduct->save();
        }

        return $checkProduct;
    }



    public function changeCoverPointStatus($id)
    {
        $checkSellerAreaPoint = SellerAreaPoint::findOrfail($id);

        if($checkSellerAreaPoint->status == 'not_active'){
            $checkSellerAreaPoint->status = 'active';
            $checkSellerAreaPoint->save();
        }else{
            $checkSellerAreaPoint->status = 'not_active';
            $checkSellerAreaPoint->save();
        }

        return true;
    }


    public function changeTeamStatus($id)
    {
        $checkSellerTeam = SellerTeam::findOrfail($id);

        if($checkSellerTeam->status == 'not_active'){
            $checkSellerTeam->status = 'active';
            $checkSellerTeam->save();
        }else{
            $checkSellerTeam->status = 'not_active';
            $checkSellerTeam->save();
        }

        return true;
    }




    public function changeCouponStatus($id)
    {
        $checkCoupon = Coupon::findOrfail($id);

        if($checkCoupon->status == 'not_active'){
            $checkCoupon->status = 'active';
            $checkCoupon->save();
        }else{
            $checkCoupon->status = 'not_active';
            $checkCoupon->save();
        }
        return true;
    }



    public function changeSellerStorageStatus($id)
    {
        $checkSellerStorage = SellerStorage::findOrfail($id);

        if($checkSellerStorage->status == 'not_active'){
            $checkSellerStorage->status = 'active';
            $checkSellerStorage->save();
        }else{
            $checkSellerStorage->status = 'not_active';
            $checkSellerStorage->save();
        }
        return true;
    }


    public function changeSellerStorageDefault($id)
    {
        $checkSellerStorage = SellerStorage::findOrfail($id);

        if($checkSellerStorage->is_default == 0){
            $checkSellerStorage->is_default = 1;
            $checkSellerStorage->save();
        }else{
            $checkSellerStorage->is_default = 0;
            $checkSellerStorage->save();
        }
        return true;
    }



    public function changeTaxStatus($id)
    {
        $taxStorage = Tax::findOrfail($id);

        if($taxStorage->status == 'not_active'){
            $taxStorage->status = 'active';
            $taxStorage->save();
        }else{
            $taxStorage->status = 'not_active';
            $taxStorage->save();
        }
        return true;
    }




    public function createSellerMainCategory(Request $request)
    {
        return view('sellers.categories.create');
    }


    public function storeSellerMainCategory(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $item = new MainCategory();
        $item->created_by = auth()->guard('seller')->user()->id;
        $item->status = 'under_process';

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->save("uploads/main_categories/".$file_name);
            $item->image = $file_name;
        }

        $item->save();


        $sellers_main_categories = new SellerMainCategory();
        $sellers_main_categories->seller_id = auth()->guard('seller')->user()->id;
        $sellers_main_categories->main_category_id = $item->id;
        $sellers_main_categories->save();

        return redirect()->route('getSellerCategories');

    }



    public function storeSellerProduct(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $item = new Product();
        $item->type = 'offer_request';
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->main_category_id = $request->main_category_id;
        $item->sub_category_id = $request->sub_category_id;
        $item->price = $request->price;
        $item->discount_percentage = $request->discount_percentage;
        $item->offer_price = $request->offer_price;
        $item->sku = $request->sku;
        $item->quantity_available = $request->quantity_available;
        $item->count_alert = $request->count_alert;
        $item->minimum_order = $request->minimum_order;
        $item->taxable = $request->taxable;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $item->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        $item->save();

        if(isset($request->images)){
            foreach($request->images as $key => $one){

                $is_main = 0;
                if(isset($request->mian_images[$key])){
                    if($request->mian_images[$key] == 'on'){
                        $is_main = 1;
                    }
                }

                $image = $one;
                $extention = $image->getClientOriginalExtension();
                $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
                Image::make($image)->save("uploads/photos/".$file_name);

                $photo = new Photo();
                $photo->product_id = $item->id;
                $photo->image = $file_name;
                $photo->is_main = $is_main;
                $photo->save();
            }
        }


        if(isset($request->smartFromQuantity)){
            foreach($request->smartFromQuantity as $key => $value)
            {
                if(isset($request->smartFromQuantity[$key]) && isset($request->smartToQuantity[$key]) && isset($request->smartPrice[$key])){
                    $smartPrice = new ProductSmartPrice();
                    $smartPrice->product_id = $item->id;
                    $smartPrice->from_quantity = $request->smartFromQuantity[$key];
                    $smartPrice->to_quantity = $request->smartToQuantity[$key];
                    $smartPrice->price = $request->smartPrice[$key];
                    $smartPrice->save();
                }
            }
        }


        return redirect()->route('getSellerProducts');

    }




    public function updateSellerProduct(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $item = Product::findOrFail($request->item_id);
        $item->main_category_id = $request->main_category_id;
        $item->sub_category_id = $request->sub_category_id;
        $item->price = $request->price;
        $item->discount_percentage = $request->discount_percentage;
        $item->offer_price = $request->offer_price;
        $item->sku = $request->sku;
        $item->quantity_available = $request->quantity_available;
        $item->count_alert = $request->count_alert;
        $item->minimum_order = $request->minimum_order;
        $item->taxable = $request->taxable;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $item->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        $item->save();

        if(isset($request->images)){
            foreach($request->images as $key => $one){

                $is_main = 0;
                if(isset($request->mian_images[$key])){
                    if($request->mian_images[$key] == 'on'){
                        $is_main = 1;
                    }
                }

                $image = $one;
                $extention = $image->getClientOriginalExtension();
                $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
                Image::make($image)->save("uploads/photos/".$file_name);

                $photo = new Photo();
                $photo->product_id = $item->id;
                $photo->image = $file_name;
                $photo->is_main = $is_main;
                $photo->save();
            }
        }

        ProductSmartPrice::where('product_id', $request->item_id)->delete();

        if(isset($request->smartFromQuantity)){
            foreach($request->smartFromQuantity as $key => $value)
            {
                if(isset($request->smartFromQuantity[$key]) && isset($request->smartToQuantity[$key]) && isset($request->smartPrice[$key])){
                    $smartPrice = new ProductSmartPrice();
                    $smartPrice->product_id = $item->id;
                    $smartPrice->from_quantity = $request->smartFromQuantity[$key];
                    $smartPrice->to_quantity = $request->smartToQuantity[$key];
                    $smartPrice->price = $request->smartPrice[$key];
                    $smartPrice->save();
                }
            }
        }


        return redirect()->route('getSellerProducts');

    }




    public function getSellerOrders(Request $request)
    {

        $orders = Order::query();

        if(isset($request->txt)){
            $orders = $orders->where('order_number', $request->txt);
        }

        if(isset($request->status)){
            $orders = $orders->where('status', $request->status);
        }

        if(isset($request->from_date) && isset($request->to_date)){
            $orders = $orders->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        $checkSellerOrders = Order::where('seller_id', auth()->guard('seller')->user()->id)->get();
        $allOrders = count($checkSellerOrders);
        $newOrders = $checkSellerOrders->where('status', 'new')->count();
        $under_deliveryOrders = $checkSellerOrders->where('status', 'under_delivery')->count();
        $completedOrders = $checkSellerOrders->where('status', 'completed')->count();
        $canceledOrders = $checkSellerOrders->where('status', 'canceled')->count();

        $orders = $orders->where('seller_id', auth()->guard('seller')->user()->id)->latest('id')->paginate(20);
        return view('sellers.orders.index', ['orders' => $orders, 'allOrders' => $allOrders, 'newOrders' => $newOrders, 'under_deliveryOrders' => $under_deliveryOrders, 'completedOrders' => $completedOrders, 'canceledOrders' => $canceledOrders]);
    }


    public function createNewOrder(Request $request)
    {
        if(Auth::check()){
        // redirect to create new order page
        }
        // redirect to login form
    }


    public function getSellerReports(Request $request)
    {
        if(Auth::check()){
            // $weeklyProfits =
            // $weeklyOrders =
            // $weeklyDeals =
            // $weeklyStoriesVisits =
            // $moreClientsBuy =
            // $ordersCount =
            // $salesTotal =
            // $moreProdcutsBuy
            // $outOfStockProducts


        // redirect to seller reports page
        }
        // redirect to login form
    }


    public function sellerOrderDetails($id)
    {
        $order = Order::findOrFail($id);
        return view('sellers.orders.sellerOrderDetails', ['order' => $order]);
    }


    public function changeOrderStatus($id, $status)
    {
        $checkOrder = Order::findOrFail($id);
        $checkOrder->status = $status;
        $checkOrder->save();
        return true;
    }



    public function getSellerStocked(Request $request)
    {
        // $products = Product::where('seller_id', auth()->guard('seller')->user()->id)->where('type', 'offer_request')->latest('id')->paginate(20);

        $productsIds = [];


        if(isset($request->txt)){
            $productsIds =  Product::whereTranslationLike('name', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('name', '%' . $request->get('txt') . '%', 'ar')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'ar')->
                        where('type', 'offer_request')->pluck('id')->toArray();
        }


        if(isset($request->main_category_id)){
            if(isset($request->txt) && count($productsIds) > 0){
                $productsIds = Product::whereIn('id', $productsIds)->where('main_category_id', $request->main_category_id)->where('type', 'offer_request')->pluck('id')->toArray();
            }
            elseif(isset($request->txt) && count($productsIds) == 0){
                $productsIds = [];
            }
            else{
                $productsIds = Product::where('main_category_id', $request->main_category_id)->where('type', 'offer_request')->pluck('id')->toArray();
            }
        }

        $products = Product::query()->where('seller_id', auth()->guard('seller')->user()->id);

        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) > 0){
            $products = $products->whereIn('id', $productsIds);
        }


        if(isset($request->orderBy)){
            if($request->orderBy == 'latest'){
                $products = $products->latest('id')->paginate(20);
            }
            elseif($request->orderBy == 'oldest'){
                $products = $products->orderBy('id', 'asc')->paginate(20);
            }
        }else{
            $products = $products->latest('id')->paginate(20);
        }


        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) == 0){
            $products = [];
        }


         $main_categories = MainCategory::active()->get();

        return view('sellers.stocked.index', ['products' => $products, 'main_categories' => $main_categories,]);
    }



    public function updateSellerStocked(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'new_quantity' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkProduct = Product::findOrFail($request->product_id)->update(['quantity_available' => $request->new_quantity]);
        return redirect()->route('getSellerStocked');
    }






    public function getSellerChats(Request $request)
    {
        $seller_id = auth()->guard('seller')->user()->id;

        $usersOffersChat = [];
        $usersDealsChat = [];

        $chatsOffersIDs = Chat::where('seller_id', $seller_id)->where('type', 'offers')->pluck('id');
        $chatsDealsIDs = Chat::where('seller_id', $seller_id)->where('type', 'deals')->pluck('id');

        if(count($chatsOffersIDs) > 0){
            $usersOffersChat = ChatMessage::whereIn('chat_id', $chatsOffersIDs)->groupBy('chat_id')->latest()->get();
        }

        if(count($usersDealsChat) > 0){
            $usersDealsChat = ChatMessage::whereIn('chat_id', $chatsDealsIDs)->groupBy('chat_id')->latest()->get();
        }

        return view('sellers.chat.index', ['usersOffersChat' => $usersOffersChat, 'usersDealsChat' => $usersDealsChat]);
    }


    public function getSellerProducts(Request $request)
    {
        // $products = Product::where('seller_id', auth()->guard('seller')->user()->id)->where('type', 'offer_request')->latest('id')->paginate(20);

        $productsIds = [];


        if(isset($request->txt)){
            $productsIds =  Product::whereTranslationLike('name', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('name', '%' . $request->get('txt') . '%', 'ar')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'ar')->
                        where('type', 'offer_request')->pluck('id')->toArray();
        }


        if(isset($request->main_category_id)){
            if(isset($request->txt) && count($productsIds) > 0){
                $productsIds = Product::whereIn('id', $productsIds)->where('main_category_id', $request->main_category_id)->where('type', 'offer_request')->pluck('id')->toArray();
            }
            elseif(isset($request->txt) && count($productsIds) == 0){
                $productsIds = [];
            }
            else{
                $productsIds = Product::where('main_category_id', $request->main_category_id)->where('type', 'offer_request')->pluck('id')->toArray();
            }
        }

        $products = Product::query()->where('seller_id', auth()->guard('seller')->user()->id);

        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) > 0){
            $products = $products->whereIn('id', $productsIds);
        }


        if(isset($request->orderBy)){
            if($request->orderBy == 'latest'){
                $products = $products->latest('id')->paginate(20);
            }
            elseif($request->orderBy == 'oldest'){
                $products = $products->orderBy('id', 'asc')->paginate(20);
            }
        }else{
            $products = $products->latest('id')->paginate(20);
        }


        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) == 0){
            $products = [];
        }


        $checkSellerProducts = Product::where('seller_id', auth()->guard('seller')->user()->id)->get();
        $allProducts = count($checkSellerProducts);
        $activeProducts = $checkSellerProducts->where('status', 'active')->count();
        $waitingProducts = $checkSellerProducts->where('approve_status', 'waiting')->count();
        $rejectedProducts = $checkSellerProducts->where('approve_status', 'rejected')->count();

        $soldOutProducts = 0;

        foreach($checkSellerProducts as $one){
            if($one->quantity_available <= $one->count_alert){
                $soldOutProducts++;
            }
        }



        $main_categories = MainCategory::active()->get();
        return view('sellers.products.index', ['products' => $products,
                                               'main_categories' => $main_categories,
                                               'allProducts' => $allProducts,
                                               'activeProducts' => $activeProducts,
                                               'waitingProducts' => $waitingProducts,
                                               'soldOutProducts' => $soldOutProducts,
                                               'rejectedProducts' => $rejectedProducts
                                            ]);
    }



    public function sellerProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('sellers.products.sellerProductDetails', ['product' => $product]);
    }


    public function createSellerProduct(Request $request)
    {
        $sellerMainCategoriesIds = auth()->guard('seller')->user()->main_categories->pluck('main_category_id')->toArray();
        $main_categories = MainCategory::whereIn('id', $sellerMainCategoriesIds)->get();
        return view('sellers.products.create', ['main_categories' => $main_categories]);
    }





    public function editSellerProduct($id)
    {
        $item = Product::findOrFail($id);
        $sellerMainCategoriesIds = auth()->guard('seller')->user()->main_categories->pluck('main_category_id')->toArray();
        $main_categories = MainCategory::whereIn('id', $sellerMainCategoriesIds)->get();
        return view('sellers.products.edit', ['main_categories' => $main_categories, 'item' => $item]);
    }




    public function deleteSellerProduct($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('getSellerProducts');
    }


    public function getSellerDeals(Request $request)
    {

        $dealIds = [];


        if(isset($request->txt)){
            $dealIds =  Product::whereTranslationLike('name', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('name', '%' . $request->get('txt') . '%', 'ar')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'ar')->
                        where('type', 'deals')->groupBy('deal_id')->pluck('deal_id')->toArray();
        }


        if(isset($request->main_category_id)){
            if(isset($request->txt) && count($dealIds) > 0){
                $dealIds = Product::whereIn('deal_id', $dealIds)->where('main_category_id', $request->main_category_id)->where('type', 'deals')->groupBy('deal_id')->pluck('deal_id')->toArray();
            }
            elseif(isset($request->txt) && count($dealIds) == 0){
                $dealIds = [];
            }
            else{
                $dealIds = Product::where('main_category_id', $request->main_category_id)->where('type', 'deals')->groupBy('deal_id')->pluck('deal_id')->toArray();
            }
        }

        $deals = Deal::query();

        if((isset($request->main_category_id) || isset($request->txt)) && count($dealIds) > 0){
            $deals = $deals->whereIn('id', $dealIds);
        }


        if(isset($request->orderBy)){
            if($request->orderBy == 'latest'){
                $deals = $deals->latest('id')->paginate(20);
            }
            elseif($request->orderBy == 'oldest'){
                $deals = $deals->orderBy('id', 'asc')->paginate(20);
            }
        }else{
            $deals = $deals->latest('id')->paginate(20);
        }


        if((isset($request->main_category_id) || isset($request->txt)) && count($dealIds) == 0){
            $deals = [];
        }

        $main_categories = MainCategory::active()->get();

        $CurrentOffers = Deal::where('seller_id', 0)->count();
        $OffersTurnedToOrders = Deal::where('seller_id', '<>', 0)->count();

        return view('sellers.deals.index', ['deals' => $deals, 'main_categories' => $main_categories, 'CurrentOffers' => $CurrentOffers , 'OffersTurnedToOrders' => $OffersTurnedToOrders]);
    }


    public function getDealDetails($id)
    {
        $deal = Deal::findOrFail($id);
        return view('sellers.deals.getDealDetails', ['deal' => $deal]);
    }


    public function createDealOffer($id)
    {
        $deal = Deal::findOrFail($id);
        return view('sellers.deals.createDealOffer', ['deal' => $deal]);
    }



    public function getAbandonedCarts(Request $request)
    {
        $abandoned_carts = Cart::where('seller_id', auth()->guard('seller')->user()->id)->whereDate('created_at', '<', Carbon::now()->subDays(10))->latest('id')->paginate(20);
        return view('sellers.carts.getAbandonedCarts', ['abandoned_carts' => $abandoned_carts]);
    }


    public function getabandonedCartDetails($id)
    {
        $abandoned_cart = Cart::findOrFail($id);
        return view('sellers.carts.getabandonedCartDetails', ['abandoned_cart' => $abandoned_cart]);
    }


    public function sellerCreateReminder(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'cart_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $cartDetails = Cart::findOrFail($request->cart_id);

        // redirect to create reminder page
    }


    public function getSellerCoupons(Request $request)
    {
        // $sellerCoupons = Coupon::where('seller_id', auth()->guard('seller')->user()->id)->latest('id')->paginate(20);

        $couponsIds = [];

        if(isset($request->txt)){
            $couponsIds =  Coupon::where('name', 'like', '%' . $request->txt . '%')->pluck('id')->toArray();
        }


        if(isset($request->orderBy) && ($request->orderBy == 'active' || $request->orderBy == 'not_active')){
            if(isset($request->txt) && count($couponsIds) > 0){
                $couponsIds = Coupon::whereIn('id', $couponsIds)->where('status', $request->orderBy)->pluck('id')->toArray();
            }
            elseif(isset($request->txt) && count($couponsIds) == 0){
                $couponsIds = [];
            }
            else{
                $couponsIds = Coupon::where('status', $request->orderBy)->pluck('id')->toArray();
            }
        }


        $sellerCoupons = Coupon::query()->where('seller_id', auth()->guard('seller')->user()->id);

        if((isset($request->orderBy) || isset($request->txt)) && count($couponsIds) > 0){
            $sellerCoupons = $sellerCoupons->whereIn('id', $couponsIds);
        }


        if(isset($request->orderBy) && $request->orderBy == 'latest'){
            $sellerCoupons = $sellerCoupons->latest('id')->get();
        }else{
            $sellerCoupons = $sellerCoupons->latest('id')->get();
        }


        return view('sellers.coupons.index', ['sellerCoupons' => $sellerCoupons]);
    }


    public function createSellerCoupon(Request $request)
    {
        $paymentMethods = PaymentMethod::active()->get();
        $categories = MainCategory::active()->get();
        $products = Product::where('seller_id', auth()->guard('seller')->user()->id)->get();
        $trademarks = Trademark::active()->get();

        return view('sellers.coupons.create', ['paymentMethods' => $paymentMethods, 'categories' => $categories, 'products' => $products, 'trademarks' => $trademarks]);
    }


    public function storeSellerCoupon(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $item = new Coupon();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->name = $request->name;
        $item->start = carbon::now();
        $item->end = $request->end;
        $item->discount = $request->discount;
        $item->coupon_type = $request->coupon_type;
        $item->free_shipping = $request->free_shipping;
        $item->exclude_offer_products = $request->exclude_offer_products;
        $item->minimum_purchases = $request->minimum_purchases;
        $item->all_frequency_use = $request->all_frequency_use;
        $item->buyer_frequency_use = $request->buyer_frequency_use;
        $item->save();

        return redirect()->route('getSellerCoupons');
    }





    public function editSellerCoupon(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'coupon_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Coupon::findOrFail($request->coupon_id);
        // redirect to edit coupon form
    }


    public function updateSellerCoupon(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'coupon_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkCoupon = Coupon::findOrFail($request->coupon_id);
        // update coupon
    }


    public function deleteSellerCoupon($coupon_id)
    {
        Coupon::findOrFail($coupon_id)->delete();
        return redirect()->route('getSellerCoupons');
    }


    // public function deleteSellerTeam($coupon_id)
    // {
    //     SellerTeam::findOrFail($coupon_id)->delete();
    //     return redirect()->route('getSellerTeam');
    // }


    public function getSellerMsgCampaigns(Request $request)
    {
        $MessageCampaign = MessageCampaign::where('seller_id', Auth::user()->id)->latest('id')->paginate(20);
        // redirect to MessageCampaign page
    }


    public function createSellerMsgCampaigns(Request $request)
    {
        // redirect to create MessageCampaign form
    }


    public function storeSellerMsgCampaigns(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $item = new MessageCampaign();
        // store new MessageCampaign
    }


    public function editSellerMsgCampaigns(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'message_campaign_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        MessageCampaign::findOrFail($request->message_campaign_id);
        // redirect to edit MessageCampaign form
    }


    public function updateSellerMsgCampaigns(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'message_campaign_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkMessageCampaign = MessageCampaign::findOrFail($request->message_campaign_id);
        // update MessageCampaign
    }


    public function deleteSellerMsgCampaigns(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'message_campaign_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        MessageCampaign::findOrFail($request->message_campaign_id)->delete();
        // redirect to seller MessageCampaign
    }


    public function getCoverPoints(Request $request)
    {
        $areas = SellerAreaPoint::where('seller_id', auth()->guard('seller')->user()->id)->latest('id')->paginate(20);
        return view('sellers.areas_points.index', ['areas' => $areas]);
    }


    public function createCoverPoints()
    {
        $cities = City::active()->get();
        return view('sellers.areas_points.create', ['cities' => $cities]);
    }


    public function storeCoverPoints(Request $request)
    {

        $item = new SellerAreaPoint();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->address = $request->address;
        $item->zone_size = $request->zone_size;
        $item->city_id = $request->city_id;
        $item->district = $request->district;
        $item->postal_code = $request->postal_code;
        $item->latitude = $request->latitude;
        $item->longitude = $request->longitude;
        $item->save();


        return redirect()->route('getCoverPoints');

    }


    public function getSellerStory(Request $request)
    {
        $currentStories = Product::where('seller_id', auth()->guard('seller')->user()->id)->
                                  where('type', 'stories')->where('approve_time', '>=', carbon::now())->count();
        $finishedStories = Product::where('seller_id', auth()->guard('seller')->user()->id)->
                                   where('type', 'stories')->where('approve_time', '<', carbon::now())->count();

        $productsIds = [];


        if(isset($request->txt)){
            $productsIds =  Product::whereTranslationLike('name', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('name', '%' . $request->get('txt') . '%', 'ar')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'en')->
                        orWhereTranslationLike('description', '%' . $request->get('txt') . '%', 'ar')->
                        where('type', 'stories')->pluck('id')->toArray();
        }


        if(isset($request->main_category_id)){
            if(isset($request->txt) && count($productsIds) > 0){
                $productsIds = Product::whereIn('id', $productsIds)->where('main_category_id', $request->main_category_id)->where('type', 'stories')->pluck('id')->toArray();
            }
            elseif(isset($request->txt) && count($productsIds) == 0){
                $productsIds = [];
            }
            else{
                $productsIds = Product::where('main_category_id', $request->main_category_id)->where('type', 'stories')->pluck('id')->toArray();
            }
        }

        $products = Product::query()->where('seller_id', auth()->guard('seller')->user()->id)->where('type', 'stories');

        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) > 0){
            $products = $products->whereIn('id', $productsIds)->where('type', 'stories');
        }


        if(isset($request->orderBy)){
            if($request->orderBy == 'latest'){
                $products = $products->latest('id')->paginate(20);
            }
            elseif($request->orderBy == 'oldest'){
                $products = $products->orderBy('id', 'asc')->paginate(20);
            }
        }else{
            $products = $products->latest('id')->paginate(20);
        }


        if((isset($request->main_category_id) || isset($request->txt)) && count($productsIds) == 0){
            $products = [];
        }


        $main_categories = MainCategory::active()->get();


        return view('sellers.stories.index', ['products' => $products, 'main_categories' => $main_categories, 'currentStories' => $currentStories, 'finishedStories' => $finishedStories]);
    }


    public function sellerStoryDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('sellers.stories.show', ['product' => $product]);
    }


    public function createSellerStory(Request $request)
    {
        $main_categories = MainCategory::active()->get();
        return view('sellers.stories.create', ['main_categories' => $main_categories]);
    }


    public function storeSellerStory(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $item = new Product();
        $item->type = 'stories';
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->main_category_id = $request->main_category_id;
        $item->sub_category_id = $request->sub_category_id;
        $item->price = $request->price;
        $item->discount_percentage = $request->discount_percentage;
        $item->offer_price = $request->offer_price;
        $item->sku = $request->sku;
        $item->quantity_available = $request->quantity_available;
        $item->count_alert = $request->count_alert;
        $item->minimum_order = $request->minimum_order;


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $item->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        $item->save();

        if(isset($request->images)){
            foreach($request->images as $key => $one){

                $is_main = 1;

                $image = $one;
                $extention = $image->getClientOriginalExtension();
                $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
                Image::make($image)->save("uploads/photos/".$file_name);

                $photo = new Photo();
                $photo->product_id = $item->id;
                $photo->image = $file_name;
                $photo->is_main = $is_main;
                $photo->save();
            }
        }

        return redirect()->route('getSellerStory');

    }



    public function editSellerStory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'story_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Product::findOrFail($request->story_id);
        // redirect to edit story form
    }


    public function updateSellerStory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'story_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkStory = Product::findOrFail($request->story_id);
        // update story
    }


    public function deleteSellerStory($story_id)
    {
        Product::findOrFail($story_id)->delete();
        return redirect()->route('getSellerStory');
    }


    public function getSellerClients()
    {
        $buyerIDs = Order::where(['seller_id' => auth()->guard('seller')->user()->id])->pluck('buyer_id')->toArray();
        $items = Buyer::whereIn('id', $buyerIDs)->get();
        return view('sellers.clients.index', ['items' => $items]);
    }


    public function getClientOrders($id)
    {
        $orders = Order::where(['buyer_id' => $id])->latest('id')->get();
        $buyer = Buyer::where('id', $id)->first();
        return view('sellers.clients.orders', ['orders' => $orders, 'buyer' => $buyer]);
    }


    public function getSellerSettings()
    {
        $sellers_categories = SellerCategory::active()->where('approve', 1)->get();
        return view('sellers.settings.edit', ['sellers_categories' => $sellers_categories]);
    }


    public function updateSelleSettings(Request $request)
    {
        $checkSeller = Seller::findOrFail(auth()->guard('seller')->user()->id);
        $checkSeller->seller_category_id = $request->seller_category_id;
        $checkSeller->email = $request->email;
        $checkSeller->commercial_register_no = $request->commercial_register_no;
        $checkSeller->commercial_register_date = $request->commercial_register_date;
        $checkSeller->save();

        return redirect()->route('getSellerSettings');
    }




    public function getSellerStorages(Request $request)
    {
        $sellerStorage = SellerStorage::where('seller_id', auth()->guard('seller')->user()->id)->latest('id')->paginate(20);
        return view('sellers.storages.index', ['sellerStorage' => $sellerStorage]);
    }


    public function createSellerStorage(Request $request)
    {
        $cities = City::active()->get();
        return view('sellers.storages.create', ['cities' => $cities]);
    }


    public function storeSellerStorage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $item = new SellerStorage();
        $item->seller_id = auth()->guard('seller')->user()->id;
        $item->storage_type = $request->storage_type;
        $item->name = $request->name;
        $item->city_id = $request->city_id;
        $item->address = $request->address;
        $item->latitude = $request->latitude;
        $item->longitude = $request->longitude;
        $item->postal_code = $request->postal_code;
        $item->street = $request->street;
        $item->building = $request->building;
        $item->phone = $request->phone;
        $item->mobile = $request->mobile;
        $item->whatsapp = $request->whatsapp;
        $item->preparing_time = $request->preparing_time;
        $item->latitude = $request->latitude;
        $item->longitude = $request->longitude;
        $item->save();

        return redirect()->route('getSellerStorages');
    }



    public function deleteSellerStorage($id)
    {
        SellerStorage::findOrFail($id)->delete();
        return redirect()->route('getSellerStorages');
    }


    public function addSellerCategory($categoryName)
    {

        if($categoryName){
            $locales = Language::all()->pluck('lang');

            $item = new SellerCategory();
            $item->approve = 0;

            foreach ($locales as $locale)
            {
                $item->translateOrNew($locale)->name = $categoryName;
            }

            $item->save();
            return $item->id;
        }
    }


    public function addMainCategory($categoryName)
    {

        if($categoryName){
            $locales = Language::all()->pluck('lang');

            $item = new MainCategory();
            $item->status = 'under_process';

            foreach ($locales as $locale)
            {
                $item->translateOrNew($locale)->name = $categoryName;
            }

            $item->save();
            return $item->id;
        }
    }



}




