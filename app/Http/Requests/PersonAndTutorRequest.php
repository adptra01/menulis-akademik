<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonAndTutorRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'image',
            'position' => 'required',
            'description' => 'required|max:310',
        ];
    }
}
