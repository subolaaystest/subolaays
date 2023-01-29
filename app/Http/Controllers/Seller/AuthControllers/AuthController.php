<?php

namespace App\Http\Controllers\Seller\AuthControllers;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\Seller;
use App\Services\Seller\SellerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private SellerService $service;

    public function __construct(SellerService $service)
    {
        $this->service = $service;
    }





    public function checkSellerLoginForm(Request $request)
    {
        return view('sellers.account.checkSellerLoginForm');
    }


    public function checkSellerSignUpForm(Request $request)
    {
        return view('sellers.account.checkSellerSignUpForm');
    }



    public function checkSellerSignUpCode(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullPin' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $checkSeller = Seller::where('mobile', $request->mobile)->first();

        if ($checkSeller) {
            $code = $request->fullPin;
            $checkCode = Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller', 'code' => $code, 'used' => 0])->latest('id')->first();

            if ($checkCode) {
                Code::where('id', $checkCode->id)->update(['used' => 1]);
                $checkSeller->status = "active";
                $checkSeller->save();
                Auth::guard('seller')->login($checkSeller);
                return redirect()->route('completeSellerProfle');
            }
            else {
                $msg = __('translate.PleaseEnterTrueValidationCode');

                Session::flash("msg", "w: $msg ");
                return redirect()->back();
            }
        }
        return view('sellers.account.login');
    }


    public function reSendSellerSignUpCode($mobile, Request $request)
    {

        $checkSeller = Seller::where('mobile', $mobile)->first();

        if ($checkSeller) {

            Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller'])->delete();

            $randomCode = 1111;
            $code = new Code();
            $code->user_id = $checkSeller->id;
            $code->user_type = 'seller';
            $code->code = $randomCode;
            $code->save();
            $msg = __('translate.VerificationCodeHasBeenSentAgain');

            Session::flash("msg", "w: $msg ");
            return redirect()->route('checkSellerSignUpForm', ['mobile' => $mobile]);
        }

    }


    public function reSendSellerLoginCode($mobile, Request $request)
    {

        $checkSeller = Seller::where('mobile', $mobile)->first();

        if ($checkSeller) {

            Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller'])->delete();

            $randomCode = 1111;
            $code = new Code();
            $code->user_id = $checkSeller->id;
            $code->user_type = 'seller';
            $code->code = $randomCode;
            $code->save();
            $msg = __('translate.VerificationCodeHasBeenSentAgain');

            Session::flash("msg", "w: $msg ");
            return redirect()->route('checkSellerLoginForm', ['mobile' => $mobile]);
        }

    }



    public function checkSellerLoginCode(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required|min:12',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }


        $checkSeller = Seller::where('mobile', $request->mobile)->first();

        if ($checkSeller) {
            $code = $request->fullPin;
            $checkCode = Code::where(['user_id' => $checkSeller->id, 'user_type' => 'seller', 'code' => $code, 'used' => 0])->latest('id')->first();

            if ($checkCode) {
                Code::where('id', $checkCode->id)->update(['used' => 1]);
                $checkSeller->status = "active";
                $checkSeller->save();

                // Auth::login($checkSeller, true);
                Auth::guard('seller')->login($checkSeller);


                if(auth()->guard('seller')->user()->status == 'active'){
                    if(auth()->guard('seller')->user()->seller_category_id == null){
                        return redirect()->route('completeSellerProfle');
                    }
                    return redirect()->route('seller.index');
                }

                elseif (auth()->guard('seller')->user()->status == 'not_active') {
                    Auth::logout();
                    $msg = __('translate.YourAccountNotActivate');

                    Session::flash("msg", "w: $msg ");
                    return view('sellers.account.login');
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
        return view('sellers.account.login');
    }



    public function logOutSeller(){
        auth()->guard('seller')->logout();
        return redirect()->route('seller.login');
    }

}
