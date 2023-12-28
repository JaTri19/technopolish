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
        <h3>Persyaratan Pendirian</h3>
        <div class="card">
            <div class="content m-4">
                <h5>Taman Kanak Kanak</h5>
                <ol>
                    <li>Scan Surat permohonan
                    </li>
                    <li>Scan KTP penanggung Jawab
                    </li>
                    <li>Scan Surat keterangan domisili dari kepala desa/ lurah
                    </li>
                    <li>Susunan pengurus dan rincian tugas
                    </li>
                    <li>Hasil penilaian kelayakan
                        <ul>
                            <li>Scan Izin Mendirikan Bangunan</li>
                            <li>Scan atas Hak Tanah (sertifikat/segel/akta jual tanah)
                            </li>
                            <li>Scan Akta Pendirian Badan Hukum yang telah disahkan
                            </li>
                            <li>Scan akta perubahan badan hukum yang telah disahkan (S&K berlaku)</li>
                        </ul>
                    </li>

                    <li>Rencana Induk Pengembangan TK (S&K berlaku)
                    </li>
                    <li>Rencana pencapaian standar penyelenggaraan
                    </li>
                    <li>Surat kuasa perizinan (S&K berlaku)
                    </li>
                    <li>Scan SK dan izin Operasional sebelumnya (S&K berlaku)
                    </li>
                    <li>Scan sertifikat keikutsertaan BPJS kesehatan
                    </li>
                    <li>Scan sertifikat keikutsertaan BPJS ketenagakerjaan</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="content m-4">
                <h5>SD/SMP/SMA</h5>
                <ol>
                    <li>Surat permohonan
                    </li>
                    <li>Scan KTP penanggung Jawab</li>
                    <li>Surat keterangan domisili penanggung jawab</li>
                    <li>Scan sertifikat keikutsertaan BPJS kesehatan</li>
                    <li>Scan sertifikat keikutsertaan BPJS ketenagakerjaan
                    </li>
                    <li>Gambar/denah tanah
                    </li>
                    <li>Foto gedung/bangunan (depan, kanan, kiri)
                    </li>
                    <li>Scan Akta Pendirian & Perubahan Badan Hukum yang telah disahkan/telah
                        memiliki SK MENKUMHAM
                    </li>
                    <li>Scan Akta pendirian Cabang
                    </li>
                    <li>Scan Izin Mendirikan Bangunan tempat mendirikan usaha (Peruntukan
                        Pendidikan)</li>
                    <li>Scan atas Hak Tanah (sertifikat/segel/akta jual tanah)
                    </li>
                    <li>Surat persetujuan Kepala Desa/Lurah
                    </li>
                </ol>
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
