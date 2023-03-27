<x-layout>
    <x-create :title="$title">
        <form action="{{ route('pasien.store') }}" method="POST" class="row g-3">
            @csrf
            @include('data/pasien/_form',[
            'kode_registrasi' => $kode_registrasi,
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
                <th>Kode Registrasi</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>Penyakit</th>
                <th>Cetak Diagnosa</th>
                <th>Ubah</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pasien as $pasien)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $pasien->kode_registrasi }}</td>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->tanggal_lahir }}</td>
                <td>{{ $pasien->usia }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->nomor_telepon }}</td>
                <td>{{ $pasien->jenis_kelamin }}</td>
                <td>{{ $pasien->golongan_darah }}</td>
                @if ($pasien->penyakit_id == null)
                <td>
                    <button type="button" class="col-12 btn btn-success"
                        onclick="return alert('Penyakit (TBC) Tidak Terdeteksi')">
                        <i class="bi bi-emoji-smile-fill me-1"></i>
                    </button>
                </td>
                @else
                <td>{{ $pasien->pasienPenyakit->penyakit }}</td>
                @endif
                <td>
                    @if ($pasien->pasienPenyakit == null)
                    <button type="button" class="col-12 btn btn-success"
                        onclick="return alert('Cetak diagnosa tidak tersedia')">
                        <i class="bi bi-file-pdf-fill me-1"></i>
                    </button>
                    @else
                    <form action="{{ route('pdf',$pasien->kode_registrasi) }}" method="POST" target="_blank">
                        @csrf
                        <button type="submit" class="col-12 btn btn-danger">
                            <i class="bi bi-file-pdf-fill me-1"></i>
                        </button>
                    </form>
                    @endif
                </td>
                <td>
                    <form action="{{ route('pasien.edit',$pasien->kode_registrasi) }}" method="get">
                        @csrf
                        <button type="submit" class="col-12 btn btn-warning text-white">
                            <i class="bi bi-pen-fill me-1"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('pasien.destroy',$pasien->kode_registrasi) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"
                            onclick="return confirm('Data pasien {{ $pasien->kode_registrasi }} akan dihapus?')"
                            class="col-12 btn btn-danger">
                            <i class="bi bi-trash-fill me-1"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-index>
</x-layout>