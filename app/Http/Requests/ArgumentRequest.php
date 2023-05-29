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
            'title' => 'required|max:255',
            'argument_category_id' => 'required|exists:argument_categories,id',
            'description' => 'required|min:20',
            'thumbnail' => 'required|url'
        ];
    }
}
