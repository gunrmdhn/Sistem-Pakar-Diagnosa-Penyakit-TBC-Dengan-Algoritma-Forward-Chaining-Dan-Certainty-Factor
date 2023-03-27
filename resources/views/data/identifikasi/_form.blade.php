<div class="col-md-12">
    <select id="pasien_id" class="data-pasien form-select @error('pasien_id')
    is-invalid @enderror" name="pasien_id" autofocus>
        <option readonly selected></option>
        @foreach ($data_pasien as $pasien)
        @if (old('pasien_id')==$pasien->id)
        <option data-id="{{ $pasien->id }}" value="{{ $pasien->id }}" selected>{{ $pasien->kode_registrasi }} - {{
            $pasien->nama_pasien }}</option>
        @else
        <option data-id="{{ $pasien->id }}" value="{{ $pasien->id }}">{{ $pasien->kode_registrasi }} - {{
            $pasien->nama_pasien }}</option>
        @endif
        @endforeach
    </select>
    @error('pasien_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-12">
    <div class="card mb-0 shadow-none border">
        <div class="card-body">
            <h5 class="card-title kode_registrasi">Kode Registrasi</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Tanggal Registrasi</strong></div>
                        <div class="col-md-6 text-end tanggal_registrasi">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Nama Pasien</strong></div>
                        <div class="col-md-6 text-end nama_pasien">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Tanggal Lahir</strong></div>
                        <div class="col-md-6 text-end tanggal_lahir">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Usia</strong></div>
                        <div class="col-md-6 text-end usia">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Alamat</strong></div>
                        <div class="col-md-6 text-end alamat">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Nomor Telepon</strong></div>
                        <div class="col-md-6 text-end nomor_telepon">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Jenis Kelamin</strong></div>
                        <div class="col-md-6 text-end jenis_kelamin">?</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6 text-start"><strong>Golongan Darah</strong></div>
                        <div class="col-md-6 text-end golongan_darah">?</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center">
    <button type="button" class="disabled-button col-12 btn {{ $btn }}">
        <i class="bi bi-{{ $icon }} me-1"></i>
        {{ $submit }}
    </button>
</div>