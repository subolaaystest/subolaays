<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Session;
use Cart;

class CheckCouponRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'coupon_name' => ['required', 'exists:coupons,name'],
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'error' => $validator->errors()->first(),
                'message' => trans('website.the_coupon_code_is_currently_not_available'),
                'total' => Cart::session(Session::getId())->getTotal()
            ], 422));
    }
}
