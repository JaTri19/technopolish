{{-- Side Bar Start --}}
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Account</li>
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                    <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                </a>

                <ul class="submenu">
                    <li class="submenut-item"><a href="" class="sidebar-link">My Account</a></li>
                    <li class="submenut-item"><a href="" class="sidebar-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest

        <li class="sidebar-title ">Menu</li>
        <hr>
        <li class="sidebar-item">
            <a href="/pemohon" class='sidebar-link'>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/pemohon/persyaratan" class='sidebar-link'>
                <span>Persyaratan</span>
            </a>
        </li>

        <li class="sidebar-title">Form Pengajuan Permohonan</li>
        <hr>
        <li class="sidebar-item has-sub">
            <a href="#" class="sidebar-link">
                <span>Perizinan Pendirian</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="/pemohon/perizinanPendirian/create-tk" class='sidebar-link'>TK</a>
                </li>
                <li class="submenu-item">
                    <a href="/pemohon/perizinanPendirian/create-sd" class='sidebar-link'>SD/SMP/SMA</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-item has-sub">
            <a href="#" class="sidebar-link">
                <span>Perizinan Penyelenggaraan</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_sd_smp" class='sidebar-link'>Sekolah Dasar
                        dan
                        Menengah</a>
                </li>
                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_ptn_univ" class='sidebar-link'>Perguruan
                        Tinggi
                        dan Universitas</a>
                </li>

                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_lpp" class='sidebar-link'>Lembaga Pelatihan
                        Profesi</a>
                </li>

                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_lpnp" class='sidebar-link'>Lembaga Pendidikan
                        Non-Pemerintah</a>
                </li>

                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_ppo" class='sidebar-link'>Pusat Pembelajaran
                        Online</a>
                </li>

                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_lpts" class='sidebar-link'>Lembaga Pendidikan
                        Tinggi Swasta</a>
                </li>

                <li class="submenu-item">
                    <a href="/pemohon/perizinanPenyelenggaraan/create_pklpk" class='sidebar-link'>Pendidikan Khusus
                        dan Lembaga Pelatihan Keterampilan</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-title">Tracking Pemohonan</li>
        <hr>
        <li class="sidebar-item  ">
            <a href="/pemohon/tracking_pendirian" class='sidebar-link'>
                <span>Perizinan Pendirian</span>
            </a>
            <a href="/pemohon/tracking_penyelenggaraan" class='sidebar-link'>
                <span>Perizinan Penyelenggaraan</span>
            </a>
        </li>




        <li class="sidebar-title">Feature Lainnya</li>
        <hr>
        <li class="sidebar-item  ">
            <a href="/chatify" class='sidebar-link'>
                <span>Chat</span>
            </a>
        </li>
    </ul>
</div>
