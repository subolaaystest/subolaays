<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class DealRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getRulesByStep();
    }

    private function getRulesByStep()
    {

        return [
            0 => [
                'name_ar' => ['required'],
                'name_en' => ['required'],
                'size' => ['required', 'integer', 'gt:0'],
                'quantity_available' => ['required', 'integer', 'gt:0'],
                'price' => ['required', 'numeric', 'gt:0.0'],
                'main_category_id' => ['required', 'integer', 'exists:main_categories,id'],
                'sub_category_id' => ['required', 'integer', 'exists:sub_categories,id'],
                'trademark_id' => ['required', 'integer', 'exists:trademarks,id'],
                'image' => $this->input('product_id') ? ['nullable'] : ['required', 'array', 'min:1'],
                'image.*' => ['nullable', 'file', 'image', 'max:4069'],
            ],

            2 => [
                'delivery_date' => ['required', 'date'],
                'delivery_time' => ['required'],
                'notes' => ['nullable'],
                'buyer_address_id' => ['nullable', 'integer', 'exists:buyers_addresses,id'],
                'duration_receiving_offers' => ['required', 'integer', 'gt:0'],
            ],
        ][$this->input('step')];
    }


    protected function prepareForValidation()
    {
        if (in_array($this->input('delivery_time'), ['null', null])) {
            $this->merge(['delivery_time' => null]);
        }
        if (in_array($this->input('buyer_address_id'), ['null', null])) {
            $this->offsetUnset('buyer_address_id');
        }
    }
}
