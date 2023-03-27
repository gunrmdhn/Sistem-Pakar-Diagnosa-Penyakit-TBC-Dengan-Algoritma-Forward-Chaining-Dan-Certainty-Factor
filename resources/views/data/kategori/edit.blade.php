<x-layout>
    <x-edit :title="$title">
        <form action="{{ route('kategori.update',$kategori->kode_kategori) }}" method="POST" class="row g-3">
            @method('put')
            @csrf
            @include('data/kategori/_form',[
            'kode_kategori'=> $kategori->kode_kategori,
            'submit' => 'Ubah',
            'btn' => 'btn-warning text-white',
            'icon' => 'pen-fill',
            ])
        </form>
    </x-edit>
</x-layout>