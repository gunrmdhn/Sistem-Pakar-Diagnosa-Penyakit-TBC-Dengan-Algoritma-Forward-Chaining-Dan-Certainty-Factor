<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PertanyaanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pasien_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pasien_id.required' => 'Kode registrasi wajib diisi',
        ];
    }
}
