<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_pengguna' => 'required|alpha_dash|unique:users,nama_pengguna,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'nama_pengguna.required' => 'Nama pengguna wajib diisi',
            'nama_pengguna.unique' => 'Nama pengguna sudah terdaftar',
            'nama_pengguna.alpha_dash' => 'Nama pengguna hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah',
        ];
    }
}
