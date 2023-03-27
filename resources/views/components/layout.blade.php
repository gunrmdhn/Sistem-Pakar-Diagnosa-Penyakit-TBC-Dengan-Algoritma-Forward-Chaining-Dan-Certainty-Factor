<!DOCTYPE html>
<html lang="en">

<x-head></x-head>

<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Sistem Pakar Diagnosa Penyakit (TBC)</h1>
        </div><!-- End Page Title -->
        @if (session()->has('berhasil'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <section class="section">
            {{ $slot }}
        </section>
    </main><!-- End #main -->
    <x-footer></x-footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <x-script></x-script>
</body>

</html>