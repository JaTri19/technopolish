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
        <hr>
        <li class="sidebar-item active ">
            <a href="/operator" class='sidebar-link'>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item active ">
            <a href="/kepala-dinas/notifikasi" class='sidebar-link'>
                <span>Notifikasi</span>
            </a>
        </li>


        <li class="sidebar-title">Tracking</li>
        <hr>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Perizinan Pendirian</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/kepala-dinas/tracking/pendirian/ttd_kepalaDinas_pendirian" class='sidebar-link'>
                        <span>Tanda Tangan Kepala Dinas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/kepala-dinas/tracking/pendirian/ttd_walikota_pendirian" class='sidebar-link'>
                        <span>Tanda Tangan Walikota</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Perizinan Penyelenggaraan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/kepala-dinas/tracking/penyelenggaraan/ttd_kepalaDinas_penyelenggaraan"
                        class='sidebar-link'>
                        <span>Tanda Tangan Kepala Dinas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/kepala-dinas/tracking/penyelenggaraan/ttd_walikota_penyelenggaraan" class='sidebar-link'>
                        <span>Tanda Tangan Walikota</span>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</div>
