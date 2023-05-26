<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademiesRequest extends FormRequest
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
            'title' => 'required|unique:academies,title|max:255',
            'description' => 'required|min:20',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
