<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_featured' => $this->has('is_featured') ? 1 : 0,
        ]);
    }

    public function rules(): array
    {
        return [
            'title'       => 'required|string|max:255',
            'body'        => 'required|string',
            'status'      => 'required|in:draft,published,archived',
            'is_featured' => 'boolean',
        ];
    }
}
