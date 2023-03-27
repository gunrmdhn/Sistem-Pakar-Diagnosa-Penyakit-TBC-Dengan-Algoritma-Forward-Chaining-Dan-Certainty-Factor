<x-layout>
    <div class="row">
        <x-create :title="$title">
            <form action="{{ route('penyakit.store') }}" method="POST" class="row g-3">
                @csrf
                @include('data/penyakit/_form',[
                'kode_penyakit' => $kode_penyakit,
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
                    <th>Kode Penyakit</th>
                    <th>Penyakit</th>
                    <th>Solusi</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_penyakit as $penyakit)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $penyakit->kode_penyakit }}</td>
                    <td>{{ $penyakit->penyakit }}</td>
                    <td>{{ $penyakit->solusi }}</td>
                    <td>
                        <form action="{{ route('penyakit.edit',$penyakit->kode_penyakit) }}" method="get">
                            @csrf
                            <button type="submit" class="col-12 btn btn-warning text-white">
                                <i class="bi bi-pen-fill me-1"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('penyakit.destroy',$penyakit->kode_penyakit) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Data penyakit {{ $penyakit->kode_penyakit }} akan dihapus?')"
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