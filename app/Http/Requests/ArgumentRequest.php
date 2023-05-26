<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArgumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:arguments,title|max:255',
            'argument_category_id' => 'required|exists:argument_categories,id',
            'description' => 'required|min:20',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
