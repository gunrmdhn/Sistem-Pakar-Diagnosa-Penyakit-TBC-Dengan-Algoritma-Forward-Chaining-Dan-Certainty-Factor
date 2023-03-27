<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKategoriRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'kategori' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kategori.required' => 'Kategori wajib diisi',
        ];
    }
}
