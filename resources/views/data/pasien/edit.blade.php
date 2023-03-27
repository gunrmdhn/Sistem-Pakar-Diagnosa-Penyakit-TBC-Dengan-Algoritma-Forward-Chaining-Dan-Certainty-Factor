<x-layout>
    <x-edit :title="$title">
        <form action="{{ route('pasien.update',$pasien->kode_registrasi) }}" method="POST" class="row g-3">
            @method('put')
            @csrf
            @include('data/pasien/_form',[
            'kode_registrasi'=> $pasien->kode_registrasi,
            'submit' => 'Ubah',
            'btn' => 'btn-warning text-white',
            'icon' => 'pen-fill',
            ])
        </form>
    </x-edit>
</x-layout>