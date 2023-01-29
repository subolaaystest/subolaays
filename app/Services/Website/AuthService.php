<?php

namespace App\Services\Website;
use App\Models\Buyer;
use App\Notifications\OtpCodeNotification;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Throwable;

class AuthService
{
    /**
     * @param string $mobile
     * @return Buyer|null
     * @throws Exception
     */
    public function getUserWithMobileNumberAndSaveOtpCode(?string $mobile): Buyer
    {
        try{
            $user = Buyer::where('mobile', $mobile)->firstOrFail();
            if(!$user){
                throw new Exception('User not found');
            }
            $otp_code = app()->environment('production') ? rand(1000, 9999) : '1111';
            $user->otp_code = $otp_code;
            $user->save();
            $user->notify(new OtpCodeNotification($otp_code));

            return $user;
        } catch(\Swift_TransportException $e){
            info($e->getMessage());
            return $user;
        } catch(Throwable $e){
            throw new Exception($e->getMessage());
        }
    }


    /**
     * @throws Throwable
     */
    public function validateOtpCode(string $otp_code, string $user_id): void
    {
        $user = Buyer::where('id', Crypt::decryptString($user_id))->firstOrFail();

        throw_if($user->otp_code != $otp_code, new Exception('Otp code is not correct'));

        $user->update([
            'verified' => true,
            'otp_code' => null,
            'verification_date' => now()
        ]);

        //do login
        Auth::guard('buyer')->login($user);
    }
}
