<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'nullable|string|min:6',
            'telepon' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'nik' => 'nullable|string',
            'tanggal_lahir' => 'nullable|string',
            'alamat' => 'nullable|string',
            'domisili' => 'nullable|string',
            'kode_pos' => 'nullable|string',
            'kota' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kelurahan' => 'nullable|string',
            'desa' => 'nullable|string',
            'roles' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Nama harus berupa teks.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.min' => 'Password minimal harus 6 karakter.',
            'telepon.string' => 'Nomor telepon harus berupa teks.',
            'pekerjaan.string' => 'Pekerjaan harus berupa teks.',
            'nik.string' => 'NIK harus berupa teks.',
            'tanggal_lahir.string' => 'Format tanggal lahir tidak valid.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'domisili.string' => 'Domisili harus berupa teks.',
            'kode_pos.string' => 'Kode pos harus berupa teks.',
            'kota.string' => 'Kota harus berupa teks.',
            'kecamatan.string' => 'Kecamatan harus berupa teks.',
            'kelurahan.string' => 'Kelurahan harus berupa teks.',
            'desa.string' => 'Desa harus berupa teks.',
            'roles.string' => 'Roles harus berupa teks.',
        ];
    }
}
