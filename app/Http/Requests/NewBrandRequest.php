<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewBrandRequest extends FormRequest
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
            'brandname' => 'required|unique:App\Brand,brandname|max:255',
            'brandlogo' => 'required|image|max:150',
        ];
    }
    public function messages()
    {
        return [
            'brandname.required' => 'Brand Name is required',
            'brandname.unique' => 'This Brand is already created',
            'brandname.max' => 'Brand Name can not be more than 225 characters.',
            'brandlogo.required' => 'Brand Logo is required',
            'brandlogo.image' => 'Brand Logo should be an image file',
            'brandlogo.max' => 'Brand Logo should be of 150KB maximum',
        ];
    }
}
