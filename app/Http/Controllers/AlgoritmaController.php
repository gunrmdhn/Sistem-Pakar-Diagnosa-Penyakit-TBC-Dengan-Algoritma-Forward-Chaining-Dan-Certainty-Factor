<?php

namespace App\Http\Controllers;

use App\Models\Basis;
use App\Models\Gejala;
use App\Models\Indikasi;
use App\Models\Pasien;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class AlgoritmaController extends Controller
{
    public function index(Request $request)
    {
        $data = collect([
            'indikasi' => Indikasi::where('jawaban', '!=', null)->get(),
        ]);
        if ($data['indikasi']->isEmpty()) {
            Pasien::where('kode_registrasi', $request->pasien)->update(['penyakit_id' => null]);
            return  view('data/identifikasi/diagnosa', [
                'pasien' => Pasien::where('kode_registrasi', $request->pasien)->first(),
                'cf_persen' => 0,
                'gejala' => false,
            ]);
        } else {
            $basis_aturan = $this->rule();
            $data_baru = $this->check($data, $basis_aturan);
            $cf = $this->combine($data_baru);
            $penyakit = Penyakit::where('id', $cf['penyakit'])->first();
            $indikasi = Indikasi::where('jawaban', '!=', null)->get();
            Pasien::where('kode_registrasi', $request->pasien)->update([
                'cf_persen' => floor($cf['cf_persen']),
                'indikasi' => $indikasi->pluck('jawaban'),
                'penyakit_id' => $penyakit->id,
            ]);
            return  view('data/identifikasi/diagnosa', [
                'pasien' => Pasien::where('kode_registrasi', $request->pasien)->first(),
                'penyakit' => $penyakit,
                'cf_persen' => round($cf['cf_persen']),
                'gejala' => Gejala::whereIn('id', $indikasi->pluck('jawaban'))->get(),
            ]);
        }
    }

    protected function rule()
    {
        $data_basis = collect([]);
        foreach (collect(Basis::get()) as $arrays) {
            $data_basis->push(
                [
                    'penyakit_id' => $arrays->penyakit_id,
                    'gejala_id' => $arrays->gejala_id,
                    'mb' => $arrays->mb,
                    'md' => 1,
                ],
            );
        }
        $basis_aturan = $data_basis->mapToGroups(function ($arrays) {
            return [$arrays['penyakit_id'] => [
                'gejala_id' => $arrays['gejala_id'],
                'mb' => $arrays['mb'],
                'md' => $arrays['md'],
            ]];
        });
        return $basis_aturan;
    }

    protected function check($data, $basis_aturan)
    {
        $check = collect([]);
        foreach ($data['indikasi'] as $indikasi) {
            foreach ($basis_aturan as $penyakit => $aturan) {
                foreach ($aturan as $arrays) {
                    if ($arrays['gejala_id'] == $indikasi['jawaban']) {
                        $check->push([
                            'penyakit' => $penyakit,
                            'indikasi' => $indikasi['jawaban'],
                            'cf_ciri' => $arrays['mb'] * $arrays['md'],
                        ]);
                    }
                }
            }
        }
        $data_baru = $check->mapToGroups(function ($value) {
            return [$value['penyakit'] => [
                'indikasi' => $value['indikasi'],
                'cf_ciri' => $value['cf_ciri'],
            ]];
        });
        return $data_baru;
    }

    protected function combine($data_baru)
    {
        $cf = collect([]);
        $cf_old = 0;
        foreach ($data_baru as $penyakit => $indikasi) {
            foreach ($indikasi as $key => $arrays) {
                if ($key == 0) {
                    $cf_old = $arrays['cf_ciri'];
                } else {
                    $cf_old = $cf_old + $arrays['cf_ciri'] * 1 - $cf_old;
                }
            }
            $cf->push([
                'penyakit' => $penyakit,
                'cf_persen' => $cf_old * 100,
            ]);
        }
        return $cf->sortByDesc('cf_persen')->first();
    }
}
