<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'bail|required|max:255',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter a valid email.',
            'email.max' => 'Email should be less than 255 character. Please enter a valid email.',
            'password.required' => 'Please enter password.'
        ];
    }
}
