<x-layout>
    <div class="row">
        <x-profile>
            <form action="{{ route('user.update',$user->nama_pengguna) }}" method="POST" class="row g-3">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="col-md-12">
                    <select autofocus class="form-control
                    @error('peran')
                    is-invalid
                    @enderror" id="peran" name="peran">
                        <option value="{{ null }}" hidden selected>Peran
                        </option>
                        @foreach ($peran as $item)
                        <option @selected(old('peran',$user->peran)==$item) value="{{ $item
                            }}">{{ $item }}
                        </option>
                        @endforeach
                    </select>
                    @error('peran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control @error('nama_pengguna')
                        is-invalid
                    @enderror" placeholder="Nama Pengguna" name="nama_pengguna"
                        value="{{ old('nama_pengguna',$user->nama_pengguna) }}">
                    @error('nama_pengguna')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="col-12 btn btn-warning text-white">
                        <i class="bi bi-pen-fill me-1"></i>
                        Ubah
                    </button>
                </div>
            </form>
        </x-profile>
    </div>
</x-layout>