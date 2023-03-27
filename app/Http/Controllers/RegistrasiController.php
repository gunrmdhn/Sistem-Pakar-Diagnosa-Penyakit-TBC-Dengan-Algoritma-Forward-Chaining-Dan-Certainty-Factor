<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RegistrasiController extends Controller
{
    private $title = 'Pasien';

    public function index()
    {
        $kode_registrasi = IdGenerator::generate([
            'table' => 'tabel_pasien',
            'field' => 'kode_registrasi',
            'length' => 5,
            'prefix' => 'R-'
        ]);
        return view('data/registrasi/index', [
            'title' => $this->title,
            'kode_registrasi' => $kode_registrasi,
            'pasien' => new Pasien,
            'data_pasien' => collect(Pasien::get()),
            'jenis_kelamin' => ['Laki-Laki', 'Perempuan'],
            'golongan_darah' => ['O', 'A', 'B', 'AB', 'Tidak Ada'],
        ]);
    }

    public function store(StorePasienRequest $request)
    {
        Pasien::create($request->all());
        return back()->with('berhasil', 'Data pasien berhasil ditambahkan!');
    }
}
