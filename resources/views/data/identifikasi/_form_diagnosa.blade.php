<div class="col-md-12">
    @if ($cf_persen < 70) <div class="alert alert-success bg-success text-light alert-dismissible fade show"
        role="alert">
        <h4 class="alert-heading">Diagnosa Penyakit</h4>
        <figure class="text-center">
            <blockquote class="blockquote">
                <hr>
                <p><strong>Penyakit : {{ $cf_persen }}% </strong>Penyakit (TBC) tidak terdeteksi</p>
            </blockquote>
            <figcaption class="blockquote-footer text-light">
                <strong>Solusi : </strong>Tetap jaga kesehatan
                <hr>
            </figcaption>
        </figure>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@else
<div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Diagnosa Penyakit</h4>
    <figure class="text-center">
        <blockquote class="blockquote">
            <hr>
            <p><strong>Penyakit : </strong>{{ $cf_persen }}% {{ $penyakit->penyakit }}</p>
        </blockquote>
        <figcaption class="blockquote-footer text-light">
            <strong>Solusi : </strong>{{ $penyakit->solusi }}
            <hr>
        </figcaption>
    </figure>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card mb-0 shadow-none border">
    <div class="card-body">
        <h5 class="card-title">Data Pasien</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Tanggal Registrasi</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->tanggal_registrasi }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Nama Pasien</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->nama_pasien }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Tanggal Lahir</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->tanggal_lahir }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Usia</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->usia }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Alamat</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->alamat }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Nomor Telepon</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->nomor_telepon }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Jenis Kelamin</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->jenis_kelamin }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6 text-start"><strong>Golongan Darah</strong></div>
                    <div class="col-md-6 text-end">{{ $pasien->golongan_darah }}</div>
                </div>
            </li>
        </ul>
    </div>
</div>
@if ($gejala != false)
<div class="card mb-0 shadow-none border mt-3">
    <div class="card-body">
        <h5 class="card-title">Identifikasi Gejala</h5>
        <ul class="list-group list-group-flush">
            @foreach ($gejala as $arrays)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-10 text-start">{{ $arrays->pertanyaan }}</div>
                    <div class="col-md-2 text-end"><strong>Ya</strong></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
</div>
<div class="text-center">
    <button type="submit" class="col-12 btn {{ $btn }}">
        <i class="bi bi-{{ $icon }} me-1"></i>
        {{ $submit }}
    </button>
</div>