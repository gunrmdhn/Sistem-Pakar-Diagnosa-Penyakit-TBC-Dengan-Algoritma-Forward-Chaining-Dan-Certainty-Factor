<x-layout>
    <div class="row">
        <x-profile>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row gy-2 text-center">
                        <div class="col-md-6 text-start"><strong>Peran</strong></div>
                        <div class="col-md-6 text-end">{{ auth()->user()->peran }}
                        </div>
                        <div class="col-md-6 text-start"><strong>Nama Pengguna</strong></div>
                        <div class="col-md-6 text-end">{{ auth()->user()->nama_pengguna }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 text-start">
                            <form action="{{ route('user.edit',auth()->user()->nama_pengguna) }}" method="get">
                                @csrf
                                <button type="submit" class="col-12 btn btn-warning text-white">
                                    <i class="bi bi-pen-fill me-1"></i>
                                    Ubah
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 text-center">
                            <form action="{{ route('kata-sandi.edit', auth()->user()->nama_pengguna) }}" method="get">
                                @csrf
                                <button type="submit" class="col-12 btn btn-info text-white">
                                    <i class="bi bi-shield-lock-fill me-1"></i>
                                    Ubah Kata Sandi
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 text-end">
                            <form action="{{ route('user.destroy',auth()->user()->nama_pengguna) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    onclick="return confirm('Pakar {{ auth()->user()->nama_pengguna }} akan dihapus?')"
                                    class="col-12 btn btn-danger">
                                    <i class="bi bi-trash-fill me-1"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </x-profile>
    </div>
</x-layout>