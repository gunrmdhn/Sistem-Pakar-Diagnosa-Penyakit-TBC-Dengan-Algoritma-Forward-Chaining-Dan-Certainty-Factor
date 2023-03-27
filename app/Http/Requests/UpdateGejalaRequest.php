<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGejalaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'gejala' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'gejala.required' => 'Gejala wajib diisi',
        ];
    }
}
