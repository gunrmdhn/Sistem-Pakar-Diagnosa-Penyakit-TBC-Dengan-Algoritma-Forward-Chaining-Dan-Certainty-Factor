<x-layout>
    <div class="row">
        <x-create :title="$title">
            <form action="{{ route('basis.store') }}" method="POST" class="row g-3">
                @csrf
                @include('data/basis/_form',[
                'kode_basis' => $kode_basis,
                'submit' => 'Tambah',
                'btn' => 'btn-primary',
                'icon' => 'plus-square-fill',
                ])
            </form><!-- End No Labels Form -->
        </x-create>
        <x-index :title="$title">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Basis</th>
                    <th>Kode Penyakit - Penyakit</th>
                    <th>Kode Gejala - Gejala</th>
                    <th>MB</th>
                    <th>MD</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_basis as $item)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->kode_basis }}</td>
                    <td>{{ $item->basisPenyakit->kode_penyakit }} - {{ $item->basisPenyakit->penyakit }}</td>
                    <td>{{ $item->basisGejala->kode_gejala }} - {{ $item->basisGejala->gejala }}</td>
                    <td>{{ $item->mb }}</td>
                    <td>{{ $item->md }}</td>
                    <td>
                        <form action="{{ route('basis.edit',$item->kode_basis) }}" method="get">
                            @csrf
                            <button type="submit" class="col-12 btn btn-warning text-white">
                                <i class="bi bi-pen-fill me-1"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('basis.destroy',$item->kode_basis) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Data basis {{ $item->kode_basis }} akan dihapus?')"
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