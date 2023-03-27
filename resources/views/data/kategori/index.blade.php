<x-layout>
    <div class="row">
        <x-create :title="$title">
            <form action="{{ route('kategori.store') }}" method="POST" class="row g-3">
                @csrf
                @include('data/kategori/_form',[
                'kode_kategori' => $kode_kategori,
                'submit' => 'Tambah',
                'btn' => 'btn-primary',
                'icon' => 'plus-square-fill',
                ])
            </form>
        </x-create>
        <x-index :title="$title">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_kategori as $kategori)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $kategori->kode_kategori }}</td>
                    <td>{{ $kategori->kategori }}</td>
                    <td>
                        <form action="{{ route('kategori.edit',$kategori->kode_kategori) }}" method="get">
                            @csrf
                            <button type="submit" class="col-12 btn btn-warning text-white">
                                <i class="bi bi-pen-fill me-1"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('kategori.destroy',$kategori->kode_kategori) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Data kategori {{ $kategori->kode_kategori }} akan dihapus?')"
                                class="col-12 btn btn-danger">
                                <i class="bi bi-trash-fill me-1"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </x-index>
    </div>
</x-layout>