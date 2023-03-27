<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBasisRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'gejala_id' => ['required', Rule::unique('tabel_basis', 'gejala_id')->where(function ($query) {
                return $query->where('penyakit_id', $this->penyakit_id);
            })],
            'penyakit_id' => ['required', Rule::unique('tabel_basis', 'penyakit_id')->where(function ($query) {
                return $query->where('gejala_id', $this->gejala_id);
            })],
            'mb' => 'required|numeric',
            'md' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'gejala_id.required' => 'Kode gejala wajib diisi',
            'gejala_id.unique' => 'Kode gejala sudah terdaftar',
            'penyakit_id.required' => 'Kode penyakit wajib diisi',
            'penyakit_id.unique' => 'Kode penyakit sudah terdaftar',
            'mb.required' => 'MB wajib diisi',
            'mb.numeric' => 'MB harus berupa angka',
            'md.required' => 'MD wajib diisi',
            'md.numeric' => 'MD harus berupa angka',
        ];
    }
}
