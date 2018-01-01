<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'baild|required|max:255',
            'email' =>'required|unique:users|email|max:255',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter user name.',
            'name.max' => 'Name must be less than is 255',
            'email.required' => 'Please enter user name.',
            'email.max' => 'Name must be less than is 255.',
            'password.reuired' => 'Please enter password.'
        ];
    }
}
