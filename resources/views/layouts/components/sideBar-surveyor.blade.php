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


        <li class="sidebar-title">Tracking</li>
        <hr>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Perizinan Pendirian</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/surveyor/tracking/pendirian/sedang_disurvey_pendirian" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/surveyor/tracking/pendirian/telah_disurvey_pendirian" class='sidebar-link'>
                        <span>Telah Disurvey</span>
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
                    <a href="/surveyor/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/surveyor/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan" class='sidebar-link'>
                        <span>Telah Disurvey</span>
                    </a>
                </li>
            </ul>
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
