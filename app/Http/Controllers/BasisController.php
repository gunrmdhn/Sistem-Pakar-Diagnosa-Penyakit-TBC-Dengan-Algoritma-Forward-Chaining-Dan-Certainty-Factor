<?php

namespace App\Http\Controllers;

use App\Models\Basis;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Http\Requests\StoreBasisRequest;
use App\Http\Requests\UpdateBasisRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BasisController extends Controller
{
    private $title = 'Basis';

    public function index()
    {
        $kode_basis = IdGenerator::generate([
            'table' => 'tabel_basis',
            'field' => 'kode_basis',
            'length' => 5,
            'prefix' => 'B-'
        ]);
        return view('data/basis/index', [
            'title' => $this->title,
            'kode_basis' => $kode_basis,
            'basis' => new Basis,
            'data_basis' => collect(Basis::get()),
            'data_penyakit' => collect(Penyakit::get()),
            'data_gejala' => collect(Gejala::get()),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreBasisRequest $request)
    {
        Basis::create($request->all());
        return back()->with('berhasil', 'Data basis berhasil ditambahkan!');
    }

    public function show(Basis $basis)
    {
        //
    }

    public function edit(Basis $basis)
    {
        return view('data/basis/edit', [
            'title' => $this->title,
            'basis' => $basis,
            'data_penyakit' => collect(Penyakit::get()),
            'data_gejala' => collect(Gejala::get()),
        ]);
    }

    public function update(UpdateBasisRequest $request, Basis $basis)
    {
        Basis::where('id', $basis->id)->update($request->except(['_method', '_token']));
        return redirect(route('basis.index'))->with('berhasil', 'Data basis berhasil diubah!');
    }

    public function destroy(Basis $basis)
    {
        Basis::destroy($basis->id);
        return back()->with('berhasil', 'Data basis berhasil dihapus!');
    }
}
