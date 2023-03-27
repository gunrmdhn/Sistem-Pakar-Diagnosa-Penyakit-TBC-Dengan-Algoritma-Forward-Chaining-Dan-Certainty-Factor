<x-layout>
    <div class="row">
        @if ($pasien->isEmpty())
        <x-create :title="$title">
            <div class="alert alert-danger bg-danger fade show">
                <figure class="text-center">
                    <blockquote class="blockquote text-white">
                        <hr>
                        <p>Data pasien tidak tersedia!</p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-white">
                        Silahkan lakukan registrasi.
                        <hr>
                    </figcaption>
                </figure>
            </div>
        </x-create>
        @else
        @foreach ($pasien->sort() as $arrays)
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $arrays->kode_registrasi }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Tanggal Registrasi</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->tanggal_registrasi }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Nama Pasien</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->nama_pasien }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Tanggal Lahir</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->tanggal_lahir }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Usia</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->usia }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Alamat</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->alamat }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Nomor Telepon</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->nomor_telepon }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Jenis Kelamin</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->jenis_kelamin }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6 text-start"><strong>Golongan Darah</strong></div>
                                <div class="col-md-6 text-end">{{ $arrays->golongan_darah }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                @if ($arrays->pasienPenyakit == null)
                                <button type="button" class="col-12 btn btn-success"
                                    onclick="return alert('Tetap jaga kesehatan')">
                                    <i class="bi bi-emoji-smile-fill me-1"></i>Penyakit (TBC) tidak terdeteksi
                                </button>
                                @else
                                <form action="{{ route('pdf',$arrays->kode_registrasi) }}" method="POST"
                                    target="_blank">
                                    @csrf
                                    <button type="submit" class="col-12 btn btn-danger">
                                        <i class="bi bi-file-pdf-fill me-1"></i>Cetak Diagnosa
                                    </button>
                                </form>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        {{ $pasien->links() }}
    </div>
</x-layout>