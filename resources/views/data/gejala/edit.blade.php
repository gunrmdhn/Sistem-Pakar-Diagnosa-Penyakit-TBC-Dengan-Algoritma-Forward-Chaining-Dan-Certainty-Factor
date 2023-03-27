<x-layout>
    <x-edit :title="$title">
        <form action="{{ route('gejala.update',$gejala->kode_gejala) }}" method="POST" class="row g-3">
            @method('put')
            @csrf
            @include('data/gejala/_form',[
            'kode_gejala'=> $gejala->kode_gejala,
            'submit' => 'Ubah',
            'btn' => 'btn-warning text-white',
            'icon' => 'pen-fill',
            ])
        </form>
    </x-edit>
</x-layout>