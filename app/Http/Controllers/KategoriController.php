<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KategoriController extends Controller
{
    private $title = 'Kategori';

    public function index()
    {
        $kode_kategori = IdGenerator::generate([
            'table' => 'tabel_kategori',
            'field' => 'kode_kategori',
            'length' => 5,
            'prefix' => 'K-'
        ]);
        return view('data/kategori/index', [
            'title' => $this->title,
            'kode_kategori' => $kode_kategori,
            'kategori' => new Kategori,
            'data_kategori' => collect(Kategori::get()),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreKategoriRequest $request)
    {
        Kategori::create($request->all());
        return back()->with('berhasil', 'Data kategori berhasil ditambahkan!');
    }

    public function show(Kategori $kategori)
    {
        //
    }

    public function edit(Kategori $kategori)
    {
        return view('data/kategori/edit', [
            'title' => $this->title,
            'kategori' => $kategori,
        ]);
    }

    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        Kategori::where('id', $kategori->id)->update($request->except(['_method', '_token']));
        return redirect(route('kategori.index'))->with('berhasil', 'Data kategori berhasil diubah!');
    }

    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return back()->with('berhasil', 'Data kategori berhasil dihapus!');
    }
}
