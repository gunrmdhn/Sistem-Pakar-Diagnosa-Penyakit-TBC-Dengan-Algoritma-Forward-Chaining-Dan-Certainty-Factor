<input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
<input type="hidden" name="urutan" value="{{ $pertanyaan->urutan }}">
<fieldset class="row mb-3">
    <legend class="col-form-label col-12">
        <figure class="text-center">
            <blockquote class="blockquote">
                <hr>
                <p>{{ $pertanyaan->pertanyaan }}</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Jawab pertanyaan sesuai gejala
                <hr>
            </figcaption>
        </figure>
    </legend>
    <div class="col-6 justify-content-center d-flex">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jawaban" id="jawaban1" value="{{ $pertanyaan->id }}"
                checked>
            <label class="form-check-label" for="jawaban1">
                Ya
            </label>
        </div>
    </div>
    <div class="col-6">
        <div class="form-check justify-content-center d-flex">
            <input class="form-check-input" type="radio" name="jawaban" id="jawaban2" value="{{ null }}">
            <label class="form-check-label" for="jawaban2">
                Tidak
            </label>
        </div>
    </div>
</fieldset>
<div class="text-center">
    <button type="submit" class="col-12 btn {{ $btn }}">
        <i class="bi bi-{{ $icon }} me-1"></i>
        {{ $submit }}
    </button>
</div>