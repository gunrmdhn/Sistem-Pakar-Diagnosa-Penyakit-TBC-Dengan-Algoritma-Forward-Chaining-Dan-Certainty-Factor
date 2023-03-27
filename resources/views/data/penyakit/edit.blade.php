<x-layout>
    <x-edit :title="$title">
        <form action="{{ route('penyakit.update',$penyakit->kode_penyakit) }}" method="POST" class="row g-3">
            @method('put')
            @csrf
            @include('data/penyakit/_form',[
            'kode_penyakit'=> $penyakit->kode_penyakit,
            'submit' => 'Ubah',
            'btn' => 'btn-warning text-white',
            'icon' => 'pen-fill',
            ])
        </form>
    </x-edit>
</x-layout>