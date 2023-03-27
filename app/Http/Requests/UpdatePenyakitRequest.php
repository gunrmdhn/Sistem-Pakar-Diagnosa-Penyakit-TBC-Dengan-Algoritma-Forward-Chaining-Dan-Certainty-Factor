<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenyakitRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'penyakit' => 'required',
            'solusi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'penyakit.required' => 'Penyakit wajib diisi',
            'solusi.required' => 'Solusi wajib diisi',
        ];
    }
}
