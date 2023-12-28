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

        <br>
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item active ">
            <a href="/dinas" class='sidebar-link'>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Tracking Perizinan</span>
            </a>
            <ul class="submenu ">

                <li class="submenu-item ">
                    <a href="/dinas/dokumen-ditolak" class='sidebar-link'>
                        <span>Dokumen Ditolak</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/checking-berkas" class='sidebar-link'>
                        <span>Checking Berkas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/dokumen-valid" class='sidebar-link'>
                        <span>Dokumen Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/dokumen-tidak-valid" class='sidebar-link'>
                        <span>Dokumen Tidak Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/sedang-disurvey" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/telah-disurvey" class='sidebar-link'>
                        <span>Telah Disurey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/dinas/izin-terbit" class='sidebar-link'>
                        <span>Izin Diterbitkan</span>
                    </a>
                </li>
                {{-- <li class="submenu-item ">
                    <a href="/admin/data-murid" class='sidebar-link'>
                        <span>Data Murid</span>
                    </a>
                </li> --}}
            </ul>
        </li>

        <li class="sidebar-item  ">
            <a href="/chatify" class='sidebar-link'>
                <span>Chat</span>
            </a>
        </li>


    </ul>
</div>
