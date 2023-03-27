<x-layout>
    @foreach ($pertanyaan as $item)
    <x-question :title="$pasien->kode_registrasi">
        <form action="{{ route('identifikasi.pertanyaan') }}" method="POST" class="row g-3">
            @csrf
            <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
            @include('data/identifikasi/_form_question',[
            'pertanyaan' => $item,
            'submit' => 'Tambah',
            'btn' => 'btn-primary',
            'icon' => 'plus-square-fill',
            ])
        </form>
    </x-question>
    @endforeach
</x-layout>