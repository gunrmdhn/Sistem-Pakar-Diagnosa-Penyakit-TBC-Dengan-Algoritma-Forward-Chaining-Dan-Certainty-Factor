<x-layout>
    <x-question :title="$pasien->kode_registrasi">
        <form action="{{ route('identifikasi.index') }}" method="GET" class="row g-3">
            @csrf
            @include('data/identifikasi/_form_diagnosa',[
            'submit' => 'Identifikasi Kembali',
            'btn' => 'btn-success',
            'icon' => 'backspace-fill',
            ])
        </form>
    </x-question>
</x-layout>