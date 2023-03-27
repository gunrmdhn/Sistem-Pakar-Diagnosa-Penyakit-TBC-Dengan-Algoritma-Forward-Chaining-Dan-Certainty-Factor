<!DOCTYPE html>
<html lang="en">
<x-head></x-head>

<body>
    <main>
        <div class="container">
            <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="py-3">
                                        <a href="{{ route('index') }}">
                                            <h5 class="card-title text-center pb-0 fs-4">Sistem Pakar Diagnosa Penyakit
                                                (TBC)</h5>
                                        </a>
                                    </div>
                                    <form action="{{ route('daftar') }}" method="POST" class="row g-3 py-3">
                                        @csrf
                                        <div class="col-12">
                                            <select class="form-control
                                            @error('peran')
                                            is-invalid
                                            @enderror" autofocus id="peran" name="peran">
                                                <option value="{{ null }}" hidden selected>Peran
                                                </option>
                                                @foreach ($peran as $item)
                                                <option @selected(old('peran')==$item) value="{{ $item
                                                    }}">{{ $item }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control @error('nama_pengguna')
                                            is-invalid
                                        @enderror" placeholder="Nama Pengguna" name="nama_pengguna"
                                                value="{{ old('nama_pengguna') }}">
                                            @error('nama_pengguna')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <input type="password" class="form-control @error('password')
                                            is-invalid
                                        @enderror" placeholder="Kata Sandi" name="password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <input type="password" class="form-control @error('password_confirm')
                                            is-invalid
                                        @enderror" placeholder="Konfirmasi Kata Sandi" name="password_confirm">
                                            @error('password_confirm')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="col-12 text-center">
                                        <p class="small mb-0">
                                            <a href="{{ route('login') }}">Masuk sebagai pakar atau admin?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <x-script></x-script>
</body>

</html>