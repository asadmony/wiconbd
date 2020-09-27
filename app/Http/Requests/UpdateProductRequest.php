<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'productname' => 'required|max:255',
            'description' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'productname.required' => 'Product Name is required',
            'productname.max' => 'Product Name can not be more than 225 characters.',
            'description.required' => 'Product Description is required',
            'brand.required' => 'Please select a brand',
            'category.required' => 'Please select a category',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price should be numeric',
            'quantity.required' => 'Quantity is required',
            'quantity.numeric' => 'Quantity should be numeric',
        ];
    }
}
