<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Http\Requests\StorePenyakitRequest;
use App\Http\Requests\UpdatePenyakitRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PenyakitController extends Controller
{
    private $title = 'Penyakit';

    public function index()
    {
        $kode_penyakit = IdGenerator::generate([
            'table' => 'tabel_penyakit',
            'field' => 'kode_penyakit',
            'length' => 5,
            'prefix' => 'P-'
        ]);
        return view('data/penyakit/index', [
            'title' => $this->title,
            'kode_penyakit' => $kode_penyakit,
            'penyakit' => new Penyakit,
            'data_penyakit' => collect(Penyakit::get()),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StorePenyakitRequest $request)
    {
        Penyakit::create($request->all());
        return back()->with('berhasil', 'Data penyakit berhasil ditambahkan!');
    }

    public function show(Penyakit $penyakit)
    {
        //
    }

    public function edit(Penyakit $penyakit)
    {
        return view('data/penyakit/edit', [
            'title' => $this->title,
            'penyakit' => $penyakit,
        ]);
    }

    public function update(UpdatePenyakitRequest $request, Penyakit $penyakit)
    {
        Penyakit::where('id', $penyakit->id)->update($request->except(['_method', '_token']));
        return redirect(route('penyakit.index'))->with('berhasil', 'Data penyakit berhasil diubah!');
    }

    public function destroy(Penyakit $penyakit)
    {
        Penyakit::destroy($penyakit->id);
        return back()->with('berhasil', 'Data penyakit berhasil dihapus!');
    }
}
