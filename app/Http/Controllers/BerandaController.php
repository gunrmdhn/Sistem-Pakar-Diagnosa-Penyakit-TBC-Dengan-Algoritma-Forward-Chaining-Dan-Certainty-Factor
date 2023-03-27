<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BerandaController extends Controller
{
    private $title = 'Welcome';

    public function index()
    {
        return view('welcome', [
            'title' => $this->title,
            'pasien' => Pasien::paginate(4),
        ]);
    }
    public function pdf($pasien)
    {
        $data = collect(Pasien::where('kode_registrasi', $pasien)->first());
        $indikasi = $data->except('id', 'penyakit_id', 'pasien_penyakit', 'created_at', 'updated_at');
        $jawaban = Str::of($indikasi['indikasi'])->explode('"');
        foreach ($jawaban as $key => $value) {
            if ($value == ',' || $value == '[' || $value == ']') {
                $jawaban->forget($key);
            }
        }
        $pdf = Pdf::loadView('pdf', [
            'data_pasien' => $data->except('id', 'penyakit_id', 'pasien_penyakit', 'indikasi', 'cf_persen', 'created_at', 'updated_at'),
            'data_persen' => $data->only('cf_persen'),
            'data_penyakit' => $data->only('pasien_penyakit')->except('id')->first(),
            'data_gejala' => collect(Gejala::whereIn('id', $jawaban)->get())->pluck('pertanyaan'),
        ])
            ->setOptions(['defaultFont' => 'sans-serif'])
            ->setPaper('a4', 'potrait');
        return $pdf->stream($data['kode_registrasi'] . '/' . $data['nama_pasien'] . '.pdf');
    }
}
