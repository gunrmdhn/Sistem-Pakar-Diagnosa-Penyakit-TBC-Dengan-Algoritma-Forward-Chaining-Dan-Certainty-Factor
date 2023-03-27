<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGejalaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'gejala' => 'required',
            'pertanyaan' => 'required',
            'urutan' => 'required',
            'kategori_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'gejala.required' => 'Gejala wajib diisi',
            'pertanyaan.required' => 'Pertanyaan wajib diisi',
            'urutan.required' => 'Urutan wajib diisi',
            'kategori_id.required' => 'Kode kategori wajib diisi',
        ];
    }
}
