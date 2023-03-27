<x-layout>
    <div class="row">
        @if ($data_basis->isEmpty() || $data_gejala->isEmpty() || $data_kategori->isEmpty() || $data_pasien->isEmpty()
        || $data_penyakit->isEmpty())
        <x-create :title="$title">
            <div class="alert alert-danger bg-danger fade show">
                <figure class="text-center">
                    <blockquote class="blockquote text-white">
                        <hr>
                        <p>Data tidak tersedia!</p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-white">
                        Silahkan hubungi pakar.
                        <hr>
                    </figcaption>
                </figure>
            </div>
        </x-create>
        @else
        <div class="container">
            <div class="alert alert-info bg-info text-light border-0 alert-dismissible fade show" role="alert">
                <ul class="list-unstyled">
                    <li><strong>Info {{ $title }}</strong></li>
                    <ol>
                        @foreach ($info as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ol>
                    </li>
                </ul>
            </div>
        </div>
        <x-create :title="$title">
            <form action="{{ route('identifikasi.pertanyaan')}}" method="POST" class="row g-3">
                @csrf
                <input type="hidden" name="urutan" value="0">
                @include('data/identifikasi/_form',[
                'submit' => 'Tambah',
                'btn' => 'btn-primary',
                'icon' => 'plus-square-fill',
                ])
            </form>
        </x-create>
        @endif
    </div>
</x-layout>