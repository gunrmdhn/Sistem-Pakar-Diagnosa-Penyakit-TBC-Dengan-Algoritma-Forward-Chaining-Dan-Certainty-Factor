<x-layout>
    <div class="row">
        <x-create :title="$title">
            <form action="{{ route('gejala.store') }}" method="POST" class="row g-3">
                @csrf
                @include('data/gejala/_form',[
                'kode_gejala' => $kode_gejala,
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
                    <th>Kode Gejala</th>
                    <th>Gejala</th>
                    <th>Pertanyaan</th>
                    <th>Kategori</th>
                    <th>Urutan</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_gejala as $gejala)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $gejala->kode_gejala }}</td>
                    <td>{{ $gejala->gejala }}</td>
                    <td>{{ $gejala->pertanyaan }}</td>
                    <td>{{ $gejala->gejalaKategori->kategori }}</td>
                    <td>{{ $gejala->urutan }}</td>
                    <td>
                        <form action="{{ route('gejala.edit',$gejala->kode_gejala) }}" method="get">
                            @csrf
                            <button type="submit" class="col-12 btn btn-warning text-white">
                                <i class="bi bi-pen-fill me-1"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('gejala.destroy',$gejala->kode_gejala) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Data gejala {{ $gejala->kode_gejala }} akan dihapus?')"
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