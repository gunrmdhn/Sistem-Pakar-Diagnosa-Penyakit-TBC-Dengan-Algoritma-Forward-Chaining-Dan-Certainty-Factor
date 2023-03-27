<div class="col-md-2">
    <input type="text" class="form-control bg-white" value="{{ $kode_gejala }}" name="kode_gejala" readonly>
</div>
<div class="col-md-10">
    <input type="text" class="form-control @error('gejala')
        is-invalid
    @enderror" placeholder="Gejala" name="gejala" value="{{ old('gejala',$gejala->gejala) }}" autofocus>
    @error('gejala')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-12">
    <input type="text" class="form-control @error('pertanyaan')
        is-invalid
    @enderror" placeholder="Pertanyaan" name="pertanyaan" value="{{ old('pertanyaan',$gejala->pertanyaan) }}">
    @error('pertanyaan')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    @if (count($data_kategori) == 0)
    <input type="text" class="bg-white form-control @error('kategori_id')
    is-invalid @enderror" placeholder="Kategori" id="kategori_id" name="kategori_id" readonly>
    @else
    <select id="kategori_id" class="form-select @error('kategori_id')
    is-invalid @enderror" name="kategori_id" autofocus>
        @foreach ($data_kategori->sort() as $kategori)
        @if (old('kategori_id',$gejala->kategori_id)==$kategori->id)
        <option data-id="{{ $kategori->id }}" value="{{ $kategori->id }}" selected>{{ $kategori->kategori }}
        </option>
        @else
        <option data-id="{{ $kategori->id }}" value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
        @endif
        @endforeach
    </select>
    @endif
    @error('kategori_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-6">
    <input type="number" class="form-control @error('urutan')
        is-invalid
    @enderror" placeholder="Urutan" name="urutan" min="0" value="{{ old('urutan',$gejala->urutan) }}">
    @error('urutan')
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