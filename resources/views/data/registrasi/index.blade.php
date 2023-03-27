<x-layout>
    <x-create :title="$title">
        <form action="{{ route('registrasi.store') }}" method="POST" class="row g-3">
            @csrf
            @include('data/pasien/_form',[
            'kode_registrasi' => $kode_registrasi,
            'submit' => 'Tambah',
            'btn' => 'btn-primary',
            'icon' => 'plus-square-fill',
            ])
        </form>
    </x-create>
</x-layout>