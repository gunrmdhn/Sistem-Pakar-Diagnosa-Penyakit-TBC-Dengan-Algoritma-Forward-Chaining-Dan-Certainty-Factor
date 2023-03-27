<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Http\Requests\StoreGejalaRequest;
use App\Http\Requests\UpdateGejalaRequest;
use App\Models\Kategori;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class GejalaController extends Controller
{
    private $title = 'Gejala';

    public function index()
    {
        $kode_gejala = IdGenerator::generate([
            'table' => 'tabel_gejala',
            'field' => 'kode_gejala',
            'length' => 5,
            'prefix' => 'G-'
        ]);
        return view('data/gejala/index', [
            'title' => $this->title,
            'kode_gejala' => $kode_gejala,
            'gejala' => new Gejala,
            'data_gejala' => collect(Gejala::get()),
            'data_kategori' => collect(Kategori::get()),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreGejalaRequest $request)
    {
        Gejala::create($request->all());
        return back()->with('berhasil', 'Data gejala berhasil ditambahkan!');
    }

    public function show(Gejala $gejala)
    {
        //
    }

    public function edit(Gejala $gejala)
    {
        return view('data/gejala/edit', [
            'title' => $this->title,
            'gejala' => $gejala,
            'data_kategori' => collect(Kategori::get()),
        ]);
    }

    public function update(UpdateGejalaRequest $request, Gejala $gejala)
    {
        Gejala::where('id', $gejala->id)->update($request->except(['_method', '_token']));
        return redirect(route('gejala.index'))->with('berhasil', 'Data gejala berhasil diubah!');
    }

    public function destroy(Gejala $gejala)
    {
        Gejala::destroy($gejala->id);
        return back()->with('berhasil', 'Data gejala berhasil dihapus!');
    }
}
