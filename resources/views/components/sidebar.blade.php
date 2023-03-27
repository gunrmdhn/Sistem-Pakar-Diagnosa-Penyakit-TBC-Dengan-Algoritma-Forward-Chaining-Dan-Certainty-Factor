<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @if (Request::is( $routeName.'/*') || Request::is('pertanyaan')|| Request::is('algoritma'))
        @if (Request::is('pertanyaan') || Request::is('algoritma'))
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('identifikasi.index') }}">
                <i class="bi bi-backspace-fill"></i>
                <span>Kembali</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @else
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route($routeName.'.index') }}">
                <i class="bi bi-backspace-fill"></i>
                <span>Kembali</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @endif
        @else
        @can('admin-pakar')
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index') }}">
                <i class="bi bi-app"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('registrasi.index') }}">
                <i class="bi bi-people-fill"></i>
                <span>Registrasi</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('identifikasi.index') }}">
                <i class="bi bi-emoji-smile-fill"></i>
                <span>Identifikasi</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @endcan
        @can('pakar')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @foreach ($data as $name => $route)
                <li>
                    <a href="{{ route($route) }}">
                        <i class="bi bi-circle"></i><span>{{ $name }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </li><!-- End Components Nav -->
        @endcan
        @endif
    </ul>
</aside><!-- End Sidebar-->