<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterUserRequest extends FormRequest
{
    public $validator = null;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:access_auth,email',
            'password' => 'required|string|min:8',
            'is_participant' => 'boolean',
            'partner_code' => 'string|max:255|nullable',
            'is_google' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'The password field is required.',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
        throw new HttpResponseException(response()->error('Email already exists', 409));
    }
}
