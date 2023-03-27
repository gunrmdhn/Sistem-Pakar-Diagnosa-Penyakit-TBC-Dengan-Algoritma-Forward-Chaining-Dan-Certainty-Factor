<x-layout>
    <div class="row">
        <x-profile>
            <form action="{{ route('kata-sandi.update', $user->nama_pengguna) }}" method="POST" class="row g-3">
                @method('put')
                @csrf
                <div class="col-md-6">
                    <input type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" placeholder="Kata Sandi" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control @error('password_confirm')
                        is-invalid
                    @enderror" placeholder="Konfirmasi Kata Sandi" name="password_confirm">
                    @error('password_confirm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="col-12 btn btn-warning text-white">
                        <i class="bi bi-pen-fill me-1"></i>
                        Ubah Kata Sandi
                    </button>
                </div>
            </form>
        </x-profile>
    </div>
</x-layout>