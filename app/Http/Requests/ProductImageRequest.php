<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
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
            'image' => 'required|image|max:512',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'An image should be selected',
            'image.image' => 'Selected file should be an image',
            'image.max' => 'Product image should be of 512KB maximum',
        ];
    }
}
