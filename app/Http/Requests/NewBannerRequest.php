<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewBannerRequest extends FormRequest
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
            'link' => 'max:255',
            'image' => 'required|image|max:500',
        ];
    }
    public function messages()
    {
        return [
            'link.max' => 'Banner link can not be more than 225 characters.',
            'image.required' => 'Banner image is required',
            'image.image' => 'Banner image should be an image file',
            'image.max' => 'Banner image should be of 500KB maximum',
        ];
    }
}
