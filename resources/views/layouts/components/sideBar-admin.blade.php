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

        <li class="sidebar-title">Menu</li>
        <hr>
        <li class="sidebar-item active ">
            <a href="/admin" class='sidebar-link'>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="/admin/data-pengguna" class='sidebar-link'>
                <span>Account Pengguna</span>
            </a>
        </li>

        <li class="sidebar-title">Form Pengajuan</li>
        <hr>
        <li class="sidebar-item has-sub">
            <a href="#" class="sidebar-link">
                <span>Permohonan Perizinan Pendirian</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="/admin/perizinanPendirian" class='sidebar-link'>
                        <span>Persyaratan</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/perizinanPendirian/create-tk" class='sidebar-link'>Form Pendirian TK</a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/perizinanPendirian/create-sd" class='sidebar-link'>Form Pendirian SD/SMP/SMA</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-item has-sub">
            <a href="#" class="sidebar-link">
                <span>Permohonan Perizinan Penyelenggaraan</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan" class='sidebar-link'>
                        <span>Persyaratan</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-sd-smp" class='sidebar-link'>Form Sekolah Dasar dan
                        Menengah</a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-ptn-univ" class='sidebar-link'>Form Perguruan Tinggi
                        dan Universitas</a>
                </li>

                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-lpp" class='sidebar-link'>Form Lembaga Pelatihan
                        Profesi</a>
                </li>

                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-lpnp" class='sidebar-link'>Form Lembaga Pendidikan
                        Non-Pemerintah</a>
                </li>

                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-ppo" class='sidebar-link'>Form Pusat Pembelajaran
                        Online</a>
                </li>

                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-lpts" class='sidebar-link'>Form Lembaga Pendidikan
                        Tinggi Swasta</a>
                </li>

                <li class="submenu-item">
                    <a href="/admin/perizinanPenyelenggaraan/create-pklpk" class='sidebar-link'>Form Pendidikan Khusus
                        dan Lembaga Pelatihan Keterampilan</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item has-sub">
            <a href="#" class="sidebar-link">
                <span>Permohonan Peminjaman Fasilitas Pemerintah</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="/admin/peminjamanFasilitas" class='sidebar-link'>
                        <span>Persyaratan</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/peminjamanFasilitas/create-pk" class='sidebar-link'>Form Pendopo Kota</a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/peminjamanFasilitas/create-lk" class='sidebar-link'>Form Lapangan Kota</a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/peminjamanFasilitas/create-gsp" class='sidebar-link'>Form Gedung Serbaguna
                        Pemkot</a>
                </li>
                <li class="submenu-item">
                    <a href="/admin/peminjamanFasilitas/create-tk" class='sidebar-link'>Form Taman Kota</a>
                </li>
            </ul>
        </li>


        <li class="sidebar-title">Tracking</li>
        <hr>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Perizinan Pendirian</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/admin/dokumen-ditolak" class='sidebar-link'>
                        <span>Dokumen Ditolak</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/checking-berkas" class='sidebar-link'>
                        <span>Checking Berkas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-valid" class='sidebar-link'>
                        <span>Dokumen Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-tidak-valid" class='sidebar-link'>
                        <span>Dokumen Tidak Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/sedang-disurvey" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Telah Disurey</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Survey Sedang Dicheck</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Diterima</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Ditolak</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Kepala Dinas</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Walikota</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/izin-terbit" class='sidebar-link'>
                        <span>Izin Diterbitkan</span>
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
                    <a href="/admin/dokumen-ditolak" class='sidebar-link'>
                        <span>Dokumen Ditolak</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/checking-berkas" class='sidebar-link'>
                        <span>Checking Berkas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-valid" class='sidebar-link'>
                        <span>Dokumen Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-tidak-valid" class='sidebar-link'>
                        <span>Dokumen Tidak Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/sedang-disurvey" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Telah Disurey</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Survey Sedang Dicheck</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Diterima</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Ditolak</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Kepala Dinas</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Walikota</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/izin-terbit" class='sidebar-link'>
                        <span>Izin Diterbitkan</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <span>Peminjaman Fasililtas</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/admin/dokumen-ditolak" class='sidebar-link'>
                        <span>Dokumen Ditolak</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/checking-berkas" class='sidebar-link'>
                        <span>Checking Berkas</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-valid" class='sidebar-link'>
                        <span>Dokumen Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/dokumen-tidak-valid" class='sidebar-link'>
                        <span>Dokumen Tidak Valid</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/sedang-disurvey" class='sidebar-link'>
                        <span>Sedang Disurvey</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Telah Disurey</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Survey Sedang Dicheck</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Diterima</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Hasil Survey Ditolak</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Kepala Dinas</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/telah-disurvey" class='sidebar-link'>
                        <span>Proses Tanda Tangan Walikota</span>
                    </a>
                </li>

                <li class="submenu-item ">
                    <a href="/admin/izin-terbit" class='sidebar-link'>
                        <span>Izin Diterbitkan</span>
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

        <li class="sidebar-item ">
            <a href="/admin/arsip" class="sidebar-link">
                <span>
                    History & Arsip Perizinan
                </span>
            </a>
        </li>

    </ul>
</div>
