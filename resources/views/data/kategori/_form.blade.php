<div class="col-md-2">
    <input type="text" class="form-control bg-white" value="{{ $kode_kategori }}" name="kode_kategori" readonly>
</div>
<div class="col-md-10">
    <input type="text" class="form-control @error('kategori')
        is-invalid
    @enderror" placeholder="Nama kategori" name="kategori" value="{{ old('kategori',$kategori->kategori) }}" autofocus>
    @error('kategori')
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