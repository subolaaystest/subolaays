<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mobile' => ['required'],
            'fullNumber' => ['required', 'min:12', 'exists:buyers,mobile,status,active'],
        ];
    }
}
