<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tanggal_registrasi' => 'required',
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tanggal_registrasi.required' => 'Tanggal registrasi wajib diisi',
            'nama_pasien.required' => 'Nama pasien wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'usia.required' => 'Usia wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'nomor_telepon.required' => 'Nomor Telepon wajib diisi',
        ];
    }
}
