<?php

namespace App\Http\Requests\website;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>['required','min:3'],
            'email'=>['required','email:rfc,dns','unique:buyers'],
            'mobile' => ['required', 'min:8'],
            'buyer_category_id' => ['required_unless:other_buyer_category,on', 'exists:buyers_categories,id'],
            'other_buyer_category' => ['nullable'],
            'other_main_category' => ['nullable'],
            'other_buyer_category_text' => ['required_if:other_buyer_category,on'],
            'main_category' => ['array'],
            'main_category.*' => ['required_unless:other_main_category,on', 'exists:main_categories,id'],
            'other_main_category_text' => ['required_if:other_main_category,on'],
        ];
    }

}
