<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TecnoPolis</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/landingpages.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('dashboard/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/extensions/quill/quill.bubble.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/extensions/filepond/filepond.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/extensions/toastify-js/src/toastify.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/filepond.css') }}">
</head>

<body>
    <div class="frame-0 shadow-lg">
        <div class="div">
            <img class="img" src="{{ asset('images/logo.png') }}" />
            <div class="div-2">
                <div class="text-wrapper">
                    <a href="/">
                        <h5>Beranda</h5>
                    </a>
                </div>
                <div class="text-wrapper">
                    <a href="/tentang">
                        <h5>Tentang</h5>
                    </a>
                </div>
                <div class="text-wrapper">
                    <a href="/persyaratan-pendirian">
                        <h5>Persyaratan</h5>
                    </a>
                </div>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pilih Persyaratan
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/persyaratan-pendirian">Pendirian</a></li>
                <li><a class="dropdown-item" href="/persyaratan-penyelenggaraan">Penyelenggaraan</a></li>
            </ul>
        </div>
        <br>
        <div class="container">
            <div class="title">
                <h3> Persyaratan Penyelenggaraan</h3>
            </div>
            <br>

            <div class="card">
                <div class="content m-4">
                    <h5>SD/SMP</h5>
                    <ol>
                        <li>Akta pendirian atau izin pendirian sekolah.</li>
                        <li>Identitas pemilik atau kepala sekolah.</li>
                        <li>Dokumen identitas staf pengajar dan karyawan.</li>
                        <li>Kurikulum yang akan diajarkan.</li>
                        <li>Dokumen keuangan sekolah (laporan keuangan, anggaran, dll.).</li>
                        <li>Surat izin dari otoritas pendidikan setempat.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Perguruan Tinggi dan Universitas</h5>
                    <ol>
                        <li>Akta pendirian atau izin pendirian perguruan tinggi atau universitas.</li>
                        <li>Identitas pemilik atau rektor.</li>
                        <li>Kualifikasi akademik staf pengajar dan dosen.</li>
                        <li>Program akademik yang akan ditawarkan.</li>
                        <li>Kurikulum dan deskripsi mata pelajaran.</li>
                        <li>Dokumen keuangan institusi.</li>
                        <li>Sarana prasarana dan fasilitas.</li>
                        <li>Surat izin dan akreditasi dari otoritas pendidikan setempat atau badan
                            akreditasi.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Lembaga Pelatihan Profesional</h5>
                    <ol>
                        <li>Dokumen pendirian atau izin operasi lembaga pelatihan.</li>
                        <li>Identitas pemilik atau direktur lembaga.</li>
                        <li>Kualifikasi instruktur dan pelatih.</li>
                        <li>Program pelatihan yang akan diselenggarakan.</li>
                        <li>Rencana kurikulum.</li>
                        <li>Dokumen keuangan lembaga.</li>
                        <li>Surat izin dari otoritas pendidikan atau lembaga terkait.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Lembaga Pendidikan Non-Pemerintah</h5>
                    <ol>
                        <li>Dokumen pendirian atau izin operasi organisasi.</li>
                        <li>Identitas pengurus organisasi.</li>
                        <li>Program pendidikan atau pelatihan yang akan diselenggarakan.</li>
                        <li>Kurikulum dan deskripsi program.</li>
                        <li>Dokumen keuangan organisasi.</li>
                        <li>Surat izin dari otoritas pendidikan atau lembaga terkait.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Pusat Pembelajaran Online</h5>
                    <ol>
                        <li>Dokumen pendirian atau izin operasi lembaga pembelajaran online.</li>
                        <li>Identitas pemilik atau direktur lembaga.</li>
                        <li>Program pembelajaran online yang akan disediakan.</li>
                        <li>Kurikulum dan deskripsi materi pembelajaran.</li>
                        <li>Dokumen keuangan lembaga.</li>
                        <li>Surat izin dari otoritas pendidikan setempat atau badan terkait.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Lembaga Pendidikan Tinggi Swasta</h5>
                    <ol>
                        <li>Dokumen pendirian atau izin operasi institusi pendidikan tinggi swasta.</li>
                        <li>Identitas pemilik atau rektor.</li>
                        <li>Program akademik yang ditawarkan.</li>
                        <li>Kualifikasi staf pengajar dan dosen.</li>
                        <li>Kurikulum dan deskripsi mata pelajaran.</li>
                        <li>Dokumen keuangan institusi.</li>
                        <li>Surat izin dan akreditasi dari otoritas pendidikan setempat atau badan
                            akreditasi.</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="content m-4">
                    <h5>Pendidikan Khusus dan Lembaga Pelatihan Keterampilan</h5>
                    <ol>
                        <li>Dokumen pendirian atau izin operasi lembaga pendidikan khusus atau
                            pelatihan keterampilan.</li>
                        <li>Identitas pemilik atau direktur lembaga.</li>
                        <li>Program pendidikan khusus atau pelatihan keterampilan yang akan
                            diselenggarakan.</li>
                        <li>Kurikulum dan deskripsi program.</li>
                        <li>Dokumen keuangan lembaga.</li>
                        <li>Surat izin dari otoritas pendidikan setempat atau badan terkait.</li>
                    </ol>
                </div>
            </div>


        </div>





        <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
        <script src="{{ asset('dashboard/js/app.js') }}"></script>

        <!-- Need: Apexcharts -->
        <script src="{{ asset('dashboard/extensions/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('dashboard/extensions/quill/quill.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/pages/quill.js') }}"></script>

        <script src="{{ asset('dashboard/extensions/filepond/filepond.js') }}"></script>
        <script src="{{ asset('dashboard/extensions/toastify-js/src/toastify.js') }}"></script>
        <script src="{{ asset('dashboard/js/pages/filepond.js') }}"></script>
</body>

</html>
