<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'catname' => 'required|unique:App\Category,catname|max:255',
            'catlogo' => 'image|max:150',
        ];
    }
    public function messages()
    {
        return [
            'catname.required' => 'Category Name is required',
            'catname.unique' => 'This category is already created',
            'catname.max' => 'Category Name can not be more than 225 characters.',
            'catlogo.image' => 'Category Logo should be an image file',
            'catlogo.image' => 'Category Logo should be of 150KB maximum',
        ];
    }
}
