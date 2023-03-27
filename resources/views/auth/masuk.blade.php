<!DOCTYPE html>
<html lang="en">
<x-head></x-head>

<body class="background">
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
                                    @if (session()->has('berhasil'))
                                    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ session('berhasil') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    @if (session()->has('gagal'))
                                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ session('gagal') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form action="{{ route('authenticate') }}" method="POST" class="row g-3 py-3">
                                        @csrf
                                        <div class="col-12">
                                            <input type="text" class="form-control @error('nama_pengguna')
                                            is-invalid
                                        @enderror" placeholder="Nama Pengguna" name="nama_pengguna">
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
                                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                        </div>
                                    </form>
                                    <div class="col-12 text-center">
                                        <p class="small mb-0">Apakah anda seorang pakar atau admin?
                                            <a href="{{ route('daftar') }}"
                                                onclick="return confirm('Apakah anda seorang pakar atau admin?')">Buat
                                                akun</a>
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