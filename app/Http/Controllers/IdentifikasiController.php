<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertanyaanRequest;
use App\Models\Basis;
use App\Models\Indikasi;
use App\Models\Gejala;
use App\Models\Pasien;
use App\Models\Kategori;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class IdentifikasiController extends Controller
{
    private $title = 'Identifikasi';
    public function index()
    {
        Indikasi::truncate();
        $info = [
            'Masukkan data basis, data gejala, dan data penyakit terlebih dahulu',
            'Lakukan registrasi pasien',
            'Pilih kode registrasi yang sesuai dengan pasien',
            'Sesuaikan gejala untuk setiap pertanyaan',
            'Sistem akan mendiagnosa penyakit (TBC) sesuai gejala',
        ];
        return view('data/identifikasi/index', [
            'title' => $this->title,
            'info' => $info,
            'data_basis' => collect(Basis::get()),
            'data_gejala' => collect(Gejala::get()),
            'data_kategori' => collect(Kategori::get()),
            'data_pasien' => collect(Pasien::get()),
            'data_penyakit' => collect(Penyakit::get()),
        ]);
    }
    public function pertanyaan(PertanyaanRequest $request)
    {
        $kode_registrasi = Pasien::where('id', $request->pasien_id)->pluck('kode_registrasi')->first();
        if ($request->urutan == 0) {
            $urutan = $request->urutan + 1;
        } elseif ($request->urutan == 5) {
            if ($request->jawaban != null) {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $urutan = $request->urutan + 1;
            } else {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            }
        } elseif ($request->urutan == 6) {
            if ($request->jawaban != null) {
                $jawaban = Gejala::whereIn('urutan', [6, 7, 8])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            } else {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $urutan = $request->urutan + 3;
            }
        } elseif ($request->urutan == 9) {
            if ($request->jawaban != null) {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $urutan = $request->urutan + 1;
            } else {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $urutan = $request->urutan + 7;
            }
        } elseif ($request->urutan == 12) {
            if ($request->jawaban != null) {
                Indikasi::create(['jawaban' => $request->jawaban]);
                $jawaban = Gejala::whereIn('urutan', [13, 14, 15])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            } else {
                Indikasi::create(['jawaban' => $request->jawaban]);
                $jawaban = Gejala::whereIn('urutan', [13, 14, 15])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            }
        } elseif ($request->urutan == 16) {
            if ($request->jawaban != null) {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $urutan = $request->urutan + 1;
            } else {
                Indikasi::create(['jawaban' => $request->jawaban]);
                $jawaban = Gejala::whereIn('urutan', [7, 8])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            }
        } elseif ($request->urutan == 19) {
            if ($request->jawaban != null) {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $jawaban = Gejala::whereIn('urutan', [20, 21, 22])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            } else {
                Indikasi::create(['jawaban' => $request->jawaban,]);
                $jawaban = Gejala::whereIn('urutan', [20, 21, 22])->get();
                $this->sisaPertanyaan($jawaban);
                return redirect()->route('algoritma.index', ['pasien' => $kode_registrasi]);
            }
        } else {
            Indikasi::create(['jawaban' => $request->jawaban,]);
            $urutan = $request->urutan + 1;
        }
        $pertanyaan = Gejala::where('urutan', $urutan)->get();
        return view('data/identifikasi/question', [
            'pasien' => Pasien::where('id', $request->pasien_id)->first(),
            'pertanyaan' => $pertanyaan,
        ]);
    }
    private function sisaPertanyaan($jawaban)
    {
        foreach ($jawaban as $arrays) {
            Indikasi::create(['jawaban' => $arrays->id]);
        };
        return true;
    }
}
