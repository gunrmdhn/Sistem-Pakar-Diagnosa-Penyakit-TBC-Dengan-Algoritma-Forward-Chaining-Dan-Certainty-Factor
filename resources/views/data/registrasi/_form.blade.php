<div class="col-md-2">
    <input type="text" class="form-control bg-white" value="{{ $kode_registrasi }}" name="kode_registrasi" readonly>
</div>
<div class="col-md-10">
    <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control @error('tanggal_registrasi')
        is-invalid
    @enderror" placeholder="Tanggal Registrasi" name="tanggal_registrasi" value="{{ old('tanggal_registrasi') }}"
        autofocus>
    @error('tanggal_registrasi')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-12">
    <input type="text" class="form-control @error('nama_pasien')
        is-invalid
    @enderror" placeholder="Nama Pasien" name="nama_pasien" value="{{ old('nama_pasien') }}">
    @error('nama_pasien')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control @error('tanggal_lahir')
        is-invalid
    @enderror" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
    @error('tanggal_lahir')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <input type="number" min="0" class="form-control @error('usia')
        is-invalid
    @enderror" placeholder="Usia" name="usia" value="{{ old('usia') }}">
    @error('usia')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <input type="text" class="form-control @error('alamat')
        is-invalid
    @enderror" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
    @error('alamat')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <input type="number" class="form-control @error('nomor_telepon')
    is-invalid
    @enderror" placeholder="Nomor Telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
    @error('nomor_telepon')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
        @foreach ($jenis_kelamin as $jenis)
        @if (old('jenis_kelamin')==$jenis)
        <option value="{{ $jenis }}" selected>{{ $jenis }}</option>
        @else
        <option value="{{ $jenis }}">{{ $jenis }}</option>
        @endif
        @endforeach
    </select>
</div>
<div class="col-md-6">
    <select id="golongan_darah" class="form-select" name="golongan_darah">
        @foreach ($golongan_darah as $golongan)
        @if (old('golongan_darah')==$golongan)
        <option value="{{ $golongan }}" selected>{{ $golongan }}</option>
        @else
        <option value="{{ $golongan }}">{{ $golongan }}</option>
        @endif
        @endforeach
    </select>
</div>
<div class="text-center">
    <button type="submit" class="col-12 btn {{ $btn }}">
        <i class="bi bi-{{ $icon }} me-1"></i>
        {{ $submit }}
    </button>
</div>