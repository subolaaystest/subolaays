<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'other_buyer_category' => ['nullable'],
            'buyer_category_id' => ['required_unless:other_buyer_category,on', 'exists:buyers_categories,id'],
            'other_buyer_category_text' => ['required_if:other_buyer_category,on'],
            'name'=>['required','min:3'],
            'email'=>['required', Rule::unique('buyers' , 'email')->ignore(\Auth::guard('buyer')->user()->id)],
            'mobile' => ['required', 'min:8'],
            'fullNumber' => ['required', 'min:12', Rule::unique('buyers' , 'mobile')->ignore(\Auth::guard('buyer')->user()->id)],
        ];
    }
}
