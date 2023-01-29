<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Buyer;
use App\Models\BuyerCategory;
use App\Models\BuyerMainCategory;
use App\Models\Code;
use App\Models\Language;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Image;
use Response;
use Session;


class SiteController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales, 'settings' => $this->settings]);
    }



    public function index()
    {
        $main_categories = MainCategory::active()->get();
        $categories_on_homepage  = MainCategory::active()->where('appear_on_homepage', 'yes')->take(2)->get();
        $main_ads  = Ad::active()->where('type', 'main')->get();
        $sub1_ads  = Ad::active()->where('type', 'sub1')->first();
        $sub2_ads  = Ad::active()->where('type', 'sub2')->first();
        $offers  = Product::active()->where('discount_percentage', '<>', null)->take(4)->get();
        return view('old_website.index', ['main_categories' => $main_categories,
                                      'categories_on_homepage' => $categories_on_homepage,
                                      'main_ads' => $main_ads,
                                      'sub1_ads' => $sub1_ads,
                                      'sub2_ads' => $sub2_ads,
                                      'offers' => $offers]);
    }


    public function getAllOffers()
    {
        $offers  = Product::active()->where('discount_percentage', '<>', null)->paginate(12);
        return view('old_website.pages.getAllOffers', ['offers' => $offers]);
    }


    public function getProductsByCategory($id)
    {
        $category = MainCategory::findOrFail($id);
        $products  = Product::active()->where('main_category_id', $id)->paginate(12);
        return view('old_website.pages.getProductsByCategory', ['category' => $category, 'products' => $products]);
    }


    public function getProductDetails($id)
    {
        $product  = Product::findOrFail($id);
        $category = MainCategory::where('id', $product->main_category_id)->first();
        $related_products  = Product::active()->where('main_category_id', $product->main_category_id)->where('id', '<>', $id)->take(8)->get();
        return view('old_website.pages.getProductDetails', ['product' => $product, 'category' => $category, 'related_products' => $related_products]);
    }


    public function LoginForm()
    {
        return view('old_website.account.login');
    }


    public function signInSite(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullNumber' => 'required|min:12',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $buyer = Buyer::where('mobile', $request->fullNumber)->first();

        if($buyer)  {
            // $code = rand(1000, 9999);
            $randomCode = 1111;
            $code = new Code();
            $code->user_id = $buyer->id;
            $code->user_type = 'buyer';
            $code->code = $randomCode;
            $code->save();
            return redirect()->route('checkSiteLoginForm', ['mobile' => $request->fullNumber]);
        }

        $msg = __('translate.MobileNumberNotAvailable');

        Session::flash("msg", "w: $msg ");
        return view('old_website.account.login');
    }


    public function signUpSiteForm()
    {
        return view('old_website.account.signUpSiteForm');
    }


    public function signUpSite(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullNumber' => 'required|min:12',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkUser = Buyer::where('mobile', $request->fullNumber)->first();

        if($checkUser)  {
            $msg = __('translate.MobileNumberNotAvailable');
            Session::flash("msg", "w: $msg ");
            return view('old_website.account.signUpSiteForm');
        }

        $item = new Buyer();
        $item->mobile = $request->fullNumber;
        $item->save();

        // $code = rand(1000, 9999);
        $randomCode = 1111;
        $code = new Code();
        $code->user_id = $item->id;
        $code->user_type = 'buyer';
        $code->code = $randomCode;
        $code->save();

        return redirect()->route('checkSiteSignUpForm', ['mobile' => $request->fullNumber]);
    }


    public function checkSiteLoginForm(Request $request)
    {
        return view('old_website.account.checkSiteLoginForm');
    }


    public function checkSiteLoginCode (Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required|min:12',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $checkBuyer = Buyer::where('mobile', $request->mobile)->first();

        if ($checkBuyer) {
            $code = $request->fullPin;
            $checkCode = Code::where(['user_id' => $checkBuyer->id, 'user_type' => 'buyer', 'code' => $code, 'used' => 0])->latest('id')->first();

            if ($checkCode) {
                Code::where('id', $checkCode->id)->update(['used' => 1]);
                $checkBuyer->status = "active";
                $checkBuyer->save();

                Auth::guard('buyer')->login($checkBuyer);


                if(auth()->guard('buyer')->user()->status == 'active'){
                    if(auth()->guard('buyer')->user()->buyer_category_id == null){
                        return redirect()->route('completeSiteProfle');
                    }
                    return redirect()->route('homeWebSite');
                }

                elseif (auth()->guard('buyer')->user()->status == 'not_active') {
                    Auth::logout();
                    $msg = __('translate.YourAccountNotActivate');

                    Session::flash("msg", "w: $msg ");
                    return view('old_website.account.login');
                }
            }
            else {
                $msg = __('translate.PleaseEnterTrueValidationCode');

                Session::flash("msg", "w: $msg ");
                return redirect()->back();
            }
        }
        $msg = __('translate.MobileNumberNotAvailable');

        Session::flash("msg", "w: $msg ");
        return view('old_website.account.login');
    }



    public function checkSiteSignUpForm (Request $request)
    {
        return view('old_website.account.checkSiteSignUpForm ');
    }


    public function checkSiteSignUpCode (Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullPin' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $checkBuyer = Buyer::where('mobile', $request->mobile)->first();

        if ($checkBuyer) {
            $code = $request->fullPin;
            $checkCode = Code::where(['user_id' => $checkBuyer->id, 'user_type' => 'buyer', 'code' => $code, 'used' => 0])->latest('id')->first();

            if ($checkCode) {
                Code::where('id', $checkCode->id)->update(['used' => 1]);
                $checkBuyer->status = "active";
                $checkBuyer->save();
                Auth::guard('buyer')->login($checkBuyer);
                return redirect()->route('completeSiteProfle');
            }
            else {
                $msg = __('translate.PleaseEnterTrueValidationCode');

                Session::flash("msg", "w: $msg ");
                return redirect()->back();
            }
        }
        return view('old_website.account.login');
    }


    public function completeSiteProfle(Request $request)
    {
        $buyers_categories = BuyerCategory::active()->where('approve', 1)->get();
        $main_categories = MainCategory::active()->get();
        return view('old_website.account.completeSiteProfle', ['buyers_categories' => $buyers_categories, 'main_categories' => $main_categories]);
    }


    public function storeSiteProfle(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $checkBuyer = Buyer::findOrFail(auth()->guard('buyer')->user()->id);
        $checkBuyer->buyer_category_id = $request->buyer_category_id;
        $checkBuyer->latitude = $request->latitude;
        $checkBuyer->longitude = $request->longitude;
        $checkBuyer->name = $request->name;
        $checkBuyer->email = $request->email;
        $checkBuyer->save();

        BuyerMainCategory::where('buyer_id', auth()->guard('buyer')->user()->id)->delete();

        if($request->main_categories) {
            foreach($request->main_categories as $one){
                $sellers_main_categories = new BuyerMainCategory();
                $sellers_main_categories->buyer_id = auth()->guard('buyer')->user()->id;
                $sellers_main_categories->main_category_id = $one;
                $sellers_main_categories->save();
            }
        }

        return redirect()->route('homeWebSite');
    }



    public function reSendSiteSignUpCode($mobile, Request $request)
    {
        $checkBuyer = Buyer::where('mobile', $mobile)->first();

        if ($checkBuyer) {

            Code::where(['user_id' => $checkBuyer->id, 'user_type' => 'seller'])->delete();

            $randomCode = 1111;
            $code = new Code();
            $code->user_id = $checkBuyer->id;
            $code->user_type = 'seller';
            $code->code = $randomCode;
            $code->save();
            $msg = __('translate.VerificationCodeHasBeenSentAgain');

            Session::flash("msg", "w: $msg ");
            return redirect()->route('checkSiteSignUpForm', ['mobile' => $mobile]);
        }

    }



    public function logOutSite(){
        auth()->guard('buyer')->logout();
        return redirect()->route('homeWebSite');
    }






}




