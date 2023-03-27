<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PasienController extends Controller
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
        return view('data/pasien/index', [
            'title' => $this->title,
            'kode_registrasi' => $kode_registrasi,
            'pasien' => new Pasien,
            'data_pasien' => collect(Pasien::get()),
            'jenis_kelamin' => ['Laki-Laki', 'Perempuan'],
            'golongan_darah' => ['O', 'A', 'B', 'AB', 'Tidak Ada'],
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StorePasienRequest $request)
    {
        Pasien::create($request->all());
        return back()->with('berhasil', 'Data pasien berhasil ditambahkan!');
    }

    public function show(Pasien $pasien)
    {
        //
    }

    public function edit(Pasien $pasien)
    {
        return view('data/pasien/edit', [
            'title' => $this->title,
            'pasien' => $pasien,
            'jenis_kelamin' => ['Laki-Laki', 'Perempuan'],
            'golongan_darah' => ['O', 'A', 'B', 'AB', 'Tidak Ada'],
        ]);
    }

    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        Pasien::where('id', $pasien->id)->update($request->except(['_method', '_token']));
        return redirect(route('pasien.index'))->with('berhasil', 'Data pasien berhasil diubah!');
    }

    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);
        return back()->with('berhasil', 'Data pasien berhasil dihapus!');
    }
}
