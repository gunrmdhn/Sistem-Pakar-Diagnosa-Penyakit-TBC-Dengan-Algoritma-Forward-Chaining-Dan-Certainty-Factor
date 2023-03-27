<x-layout>
    <x-edit :title="$title">
        <form action="{{ route('basis.update',$basis->kode_basis) }}" method="POST" class="row g-3">
            @method('put')
            @csrf
            @include('data/basis/_form',[
            'kode_basis'=> $basis->kode_basis,
            'submit' => 'Ubah',
            'btn' => 'btn-warning text-white',
            'icon' => 'pen-fill',
            ])
        </form><!-- End No Labels Form -->
    </x-edit>
</x-layout>