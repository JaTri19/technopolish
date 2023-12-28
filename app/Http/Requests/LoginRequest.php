<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'identity' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'identity.required' => 'Identitas (email atau nomor telepon) harus diisi.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus berupa teks.',
            'remember_me.boolean' => 'Remember Me harus berupa nilai boolean.',
        ];
    }
}
