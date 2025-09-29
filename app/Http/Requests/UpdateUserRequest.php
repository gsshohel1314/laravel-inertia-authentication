<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->has('status') ? 1 : 0,
        ]);
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'phone'      => ['required', 'digits:11', 'unique:users,phone,' . $this->user->id],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user->id],
            'password'   => ['nullable', 'string', 'min:8', 'confirmed'],
            'address'    => ['required', 'string'],
            'status'     => ['boolean'],
        ];
    }
}
