<header id="page-topbar">
    @php
        if(Auth::user()) {
            $role = "Masyarakat";
            $user = Auth::user();
        } else {
            $role = "Petugas";
            $user = Auth::guard('admin')->user();
        }
    @endphp
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box d-flex">
                <a href="/" class="logo logo-light m-auto">
                    <span class="logo-sm">
                        <img src="{{asset('/assets/images/logo/logopam2.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('assets/images/logo/logopam2.png')}}" alt="" height="22">
                            <h4 class="ms-3 text-white fw-bold">SIPA Pamsimas</h4>
                        </div>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                {{-- <i class="fa fa-fw fa-bars"></i> --}}
                {{-- <img src="{{ asset('images/logo/logopam2.png') }}" alt="Logopam2"> --}}

            </button>
            <span class="m-auto">
                {{$role}}
            </span>

        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Hi, {{$user->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                @if ($role === "Masyarakat")
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    </div>
                @endif
                @if ($role === "Petugas")
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    </div>
                @endif
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{route('index')}}" class="nav-link {{ (request()->is('admin/beranda*')) ? 'mm-active' : '' }}" href="{{ route('index') }}">
                        <i class='bx bx-home'></i>
                        <span>Beranda</span>
                    </a>
                </li>
                
                @if ($role === 'Petugas')
                <li>
                    <a href="{{route('petugas.index')}}" class="nav-link {{ (request()->is('petugas*')) ? 'mm-active' : '' }}" href="{{ route('petugas.index') }}">
                        <i class='bx bx-briefcase'></i>
                        <span>Petugas</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('masyarakat.index')}}" class="nav-link {{ (request()->is('masyarakat*')) ? 'mm-active' : '' }}" href="{{ route('masyarakat.index') }}">
                        <i class='bx bx-user'></i>
                        <span>Masyarakat</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('tagihan.index')}}" class="nav-link {{ (request()->is('tagihan*')) ? 'mm-active' : '' }}" href="{{ route('tagihan.index') }}">
                        <i class='bx bx-user'></i>
                        <span>Tagihan</span>
                    </a>
                </li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->