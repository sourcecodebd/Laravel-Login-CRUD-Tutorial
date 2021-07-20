<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|unique:Users|max:6|bail',
            'password' => 'required|min:6',
            'email' => 'required|regex:/^.+@.+$/i'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'password.required' => "Password can't be empty...",
            'email.required' => "Email can't be empty...",

            'username.max' => "Username can't exceed 6 characters...",
            'password.min' => "Password must be minimum 6 characters...",

        ];
    }
}
