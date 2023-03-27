<div class="col-md-12">
    <input type="text" class="form-control bg-white" value="{{ $kode_basis }}" name="kode_basis" readonly>
</div>
<div class="col-md-12">
    @if (count($data_penyakit) == 0)
    <input type="text" class="bg-white form-control @error('penyakit_id')
    is-invalid @enderror" placeholder="Kode Penyakit - Penyakit" id="penyakit_id" name="penyakit_id" readonly>
    @else
    <select id="penyakit_id" class="form-select @error('penyakit_id')
        is-invalid @enderror" name="penyakit_id">
        @foreach ($data_penyakit->sortBy('kode_penyakit') as $penyakit)
        @if (old('penyakit_id',$basis->penyakit_id)==$penyakit->id)
        <option data-id="{{ $penyakit->id }}" value="{{ $penyakit->id }}" selected>{{ $penyakit->kode_penyakit }} - {{
            $penyakit->penyakit }}
        </option>
        @else
        <option data-id="{{ $penyakit->id }}" value="{{ $penyakit->id }}">{{ $penyakit->kode_penyakit }} - {{
            $penyakit->penyakit }}</option>
        @endif
        @endforeach
    </select>
    @endif
    @error('penyakit_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-12">
    @if (count($data_gejala) == 0)
    <input type="text" class="bg-white form-control @error('gejala_id')
    is-invalid @enderror" placeholder="Kode Gejala - Gejala" id="gejala_id" name="gejala_id" readonly>
    @else
    <select id="gejala_id" class="form-select @error('gejala_id')
    is-invalid @enderror" name="gejala_id" autofocus>
        @foreach ($data_gejala->sortBy('kode_gejala') as $gejala)
        @if (old('gejala_id',$basis->gejala_id)==$gejala->id)
        <option data-id="{{ $gejala->id }}" value="{{ $gejala->id }}" selected>{{ $gejala->kode_gejala }} - {{
            $gejala->gejala }}</option>
        @else
        <option data-id="{{ $gejala->id }}" value="{{ $gejala->id }}">{{ $gejala->kode_gejala }} - {{ $gejala->gejala }}
        </option>
        @endif
        @endforeach
    </select>
    @endif
    @error('gejala_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-6">
    <input type="number" class="form-control @error('mb')
        is-invalid
    @enderror" placeholder="MB" name="mb" min="0" max="1" step="0.1" value="{{ old('mb',$basis->mb) }}">
    @error('mb')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-6">
    <input type="number" class="form-control @error('md')
        is-invalid
    @enderror" placeholder="MD" name="md" min="0" max="1" step="0.1" value="{{ old('md',$basis->md) }}">
    @error('md')
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