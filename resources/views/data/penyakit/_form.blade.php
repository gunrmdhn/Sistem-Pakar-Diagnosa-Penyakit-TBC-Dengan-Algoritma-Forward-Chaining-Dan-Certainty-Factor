<div class="col-md-2">
    <input type="text" class="form-control bg-white" value="{{ $kode_penyakit }}" name="kode_penyakit" readonly>
</div>
<div class="col-md-10">
    <input type="text" class="form-control @error('penyakit')
        is-invalid
    @enderror" placeholder="Nama Penyakit" name="penyakit" value="{{ old('penyakit',$penyakit->penyakit) }}" autofocus>
    @error('penyakit')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-12">
    <input type="text" class="form-control @error('solusi')
        is-invalid
    @enderror" placeholder="Solusi" name="solusi" value="{{ old('solusi',$penyakit->solusi) }}">
    @error('solusi')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="text-center">
    <button type="submit" class="col-12 btn {{ $btn }}">
        <i class="bi bi-{{ $icon }} me-1"></i>
        {{ $submit }}
    </button>
</div>