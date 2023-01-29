<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\website\LoginRequest;
use App\Http\Requests\website\OtpRequest;
use App\Notifications\OtpCodeNotification;
use App\Models\Buyer;
use Illuminate\Support\Facades\Crypt;
use App\Services\Website\AuthService;

class LoginController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }
    public function formLogin(){
        return view('website.auth.login');
    }

    public function login(LoginRequest $request){
        try{
            $user = $this->authService->getUserWithMobileNumberAndSaveOtpCode($request->input('fullNumber'));

            return redirect()->route('formOtpCode',['u'=> Crypt::encryptString($user->id)]);
        } catch(\Exception $exp){
            return redirect()->back()->with('error', 'خطأ في رقم الجوال');
        }
    }

    public function formOtpCode(){
        return view('website.auth.otp_code');
    }

    public function otpCode(OtpRequest $request){
        try {
            $this->authService->validateOtpCode($request->input('otp_code'), $request->input('user_id'));

            return redirect()->route('home.index');
        } catch (\Throwable $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    //logout
    public function logout(){
        Auth::guard('buyer')->logout();
        return redirect()->route('home.index');
    }
}
