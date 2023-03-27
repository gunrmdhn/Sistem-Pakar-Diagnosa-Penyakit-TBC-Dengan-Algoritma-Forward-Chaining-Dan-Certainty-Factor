<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'peran' => 'required',
            'nama_pengguna' => 'required|alpha_dash|unique:users,nama_pengguna',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'peran.required' => 'Peran wajib diisi',
            'nama_pengguna.required' => 'Nama pengguna wajib diisi',
            'nama_pengguna.unique' => 'Nama pengguna sudah terdaftar',
            'nama_pengguna.alpha_dash' => 'Nama pengguna hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah',
            'password.required' => 'Kata sandi wajib diisi',
            'password.min' => 'Kata sandi minimal harus 8 karakter',
            'password_confirm.required' => 'Konfirmasi Kata sandi wajib diisi',
            'password_confirm.same' => 'Konfirmasi Kata sandi harus cocok',
        ];
    }
}
