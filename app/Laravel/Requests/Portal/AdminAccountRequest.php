<?php

namespace App\Laravel\Requests\Portal;

use App\Laravel\Requests\RequestManager;

class AdminAccountRequest extends RequestManager
{
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:admin,email,",
            'password' => 'required|string|min:8|confirmed',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.confirmed' => 'Password does not match.',
        ];
    }
}
