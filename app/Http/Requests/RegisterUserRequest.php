<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string|min:8|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'Name field is required.',
            'email.required'        => 'Email field is required.',
            'email.email'           => 'Please provide a valid email address.',
            'email.unique'          => 'This email is already registered.',
            'password.required'     => 'Password field is required.',
            'password.min'          => 'Password must be at least 8 characters.',
            'password.confirmed'    => 'Password confirmation does not match.',
        ];
    }
}
