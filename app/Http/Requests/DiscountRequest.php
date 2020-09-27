<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
            'discount' => 'required|numeric|gt:0|lte:100',
            'discountprice' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return[
            'discount.required' => 'Discount value is required',
            'discount.numeric' => 'Discount value should be numeric',
            'discount.gt' => 'Discount value should be greater than 0',
            'discount.lte' => 'Maximum Discount value should be 100',
            'discountprice.required' => 'Price value after discount is required',
            'discountprice.numeric' => 'Price value after discount should be numeric',
        ];
    }
}
