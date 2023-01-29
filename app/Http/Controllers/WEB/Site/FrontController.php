<?php

namespace App\Http\Controllers\SELLER;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

use App\Models\Language;
use App\Models\Setting;

use App\Models\Seller;
use App\Models\Code;
use App\Models\Notification;

use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales, 'settings' => $this->settings]);
    }


    public function index()
    {
        return 6;
        return view('website.home');
    }


    public function signUpSeller(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|unique:sellers,mobile,NULL,id,deleted_at,NULL',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 201, 'message' =>implode("\n",$validator->messages()->all())]);
        }

        $item = new Seller();
        $item->mobile = $request->mobile;
        $item->save();

        // $code = rand(1000, 9999);
        $randomCode = 1111;
        $code = new Code();
        $code->user_id = $item->id;
        $code->user_type = 'seller';
        $code->code = $randomCode;
        $code->save();

        // return view('website.home');
    }


    public function checkSellerCode(Request $request)
    {

        $rules = [
            'code' => 'required|min:4',
            'mobile' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
             return response()->json(['status' => false, 'code' => 200, 'message' =>implode("\n",$validator->messages()->all())]);
        }

        $checkSeller = Seller::where('mobile', $request->mobile)->first();

        if ($checkSeller) {
            $checkCode = Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller', 'code' => $request->code, 'used' => 0])->latest('id')->first();

            if ($checkCode) {
                Code::where('id', $checkCode->id)->update(['used' => 1]);
                Code::where('user_id', $checkUser->id)->delete();
                $checkSeller->status = "active";
                $checkSeller->save();
                // __('api.trueCode')
            }
            else {
                // __('api.not_valid_code');
            }
        }

    }


    public function reSendSellerCode(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'message' =>implode("\n",$validator->messages()->all())]);
        }

        $checkSeller = Seller::where('mobile', $request->mobile)->first();

        if ($checkSeller) {

            Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller'])->delete();

            $randomCode = 1111;
            $code = new Code();
            $code->user_id = $checkSeller->id;
            $code->user_type = 'seller';
            $code->code = $randomCode;
            $code->save();
            // __('api.ok')
        }

        // __('api.wrongMobile')
    }

    public function signInSeller(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Auth::attempt(['mobile' => $request->mobile, 'password' => bcrypt($request->password)], $request->remember);

        if(Auth::user()) {
            $user = Auth::user();
            if($user->status == 'active'){
                // return redirect('/');  //Go To Seller Dashboard
            }

            elseif ($user->status == 'not_active') {  //Account Not Active
                Auth::logout();
                return back()->withErrors(__('website.yourAccountNotActive'));
            }
            elseif ($user->verified == 0) {  //Account not verified
                Auth::logout();
                return back()->withErrors(__('website.yourAccountNotVerified'));
            }
            else{
                Auth::logout();
                return back()->withErrors(__('website.not_active_msg'));
            }
        }
        else{
            return back()->withErrors(__('website.error_login'));
        }
    }


    public function logOutSeller(){
        Auth::logout();
        return redirect('/');
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
        if(Auth::check()){
        // redirect to profile page
        }
        // redirect to login form
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
        $notifications = Notification::where(['user_id' => Auth::user()->id, 'user_type' => 'seller'])->latest('id')->paginate(10);
        // redirect to notification page
        }
        // redirect to login form
    }


    public function getSellerOrders(Request $request)
    {
        if(Auth::check()){
            // $ordersCount
            // $orderWaitingCount
            // $ordersInWayCount
            // $ordersDoneCount
            // $OrdersCanceledCount
            // $orders = Order::where('seller_id', Auth::user()->id)->latest('id')->paginate(10);
            //$newOrders =
            // $moreProdcutsBuy
            // $outOfStockProducts


        // redirect to profile page
        }
        // redirect to login form
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


    public function getOrdersDetails(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $orderDetails = Order::findOrFail($request->order_id);

        // redirect to order details
    }


    public function changeOrderStatus(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkOrder = Order::findOrFail($request->order_id);
        $checkOrder->status = $request->status;
        $checkOrder->save();

        // redirect to order details
    }


    public function getSellerProducts(Request $request)
    {
        if(Auth::check()){
            // $activeProductsCount =
            // $waitingProductsCount =
            // $outOfStockProducts =
            // $rejectProductsCount =
            // $products =
        // redirect to seller reports page
        }
        // redirect to login form
    }


    public function createSellerProduct(Request $request)
    {
        // redirect to create product form
    }


    public function storeSellerProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $item = new Product();
        // store new product
    }


    public function editSellerProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Product::findOrFail($request->product_id);
        // redirect to edit product form
    }


    public function updateSellerProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkProduct = Product::findOrFail($request->product_id);
        // update product
    }


    public function deleteSellerProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Product::findOrFail($request->product_id)->delete();
        // redirect to seller products
    }


    public function getSellerDeals(Request $request)
    {
        $deals = Deal::latest('id')->paginate(10);
        // redirect to deals page
    }


    public function getDealDetails(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'deal_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $dealDetails = Deal::findOrFail($request->deal_id);

        // redirect to deal details
    }


    public function getAbandonedCarts(Request $request)
    {
        $abandoned_carts = Cart::whereDate('created_at', '<', Carbon::now()->subDays(10))->latest('id')->paginate(10);
        // redirect to abandoned carts page
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
        $seller_coupons = Coupon::where('seller_id', Auth::user()->id)->latest('id')->paginate(10);
        // redirect to seller coupons page
    }


    public function createSellerCoupon(Request $request)
    {
        // redirect to create coupon form
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
        // store new coupon
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


    public function deleteSellerCoupon(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'coupon_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Coupon::findOrFail($request->coupon_id)->delete();
        // redirect to seller coupons
    }



    public function getSellerMsgCampaigns(Request $request)
    {
        $MessageCampaign = MessageCampaign::where('seller_id', Auth::user()->id)->latest('id')->paginate(10);
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




    public function getSellerStory(Request $request)
    {
        $stories = Prodcut::where(['seller_id' => Auth::user()->id, 'type' => 'stories'])->latest('id')->paginate(10);
        // redirect to stories page
    }


    public function createSellerStory(Request $request)
    {
        // redirect to create story form
    }


    public function storeSellerStory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $item = new Product();
        // store new story
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


    public function deleteSellerStory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'story_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        MessageCampaign::findOrFail($request->story_id)->delete();
        // redirect to seller stories
    }


    public function getSellerClients(Request $request)
    {
        // redirect to clients page
    }


}




