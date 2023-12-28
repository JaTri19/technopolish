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

    <div class="content-1">
        <div class="text">

            <h3>TECNOPOLIS</h3>
            <p>Aplikasi layanan perizinan dibidang pendidikan berbasis mobile dan website yang bertujuan untuk membantu
                para masyarakat di Kota Surabaya untuk melakukan permohonan perizinan dibidang pendidikan secara online,
                bisa di mana saja dan kapan saja.</p>
            <a href="/register" class="btn btn-warning">Daftar Sekarang</a>
        </div>
        <div class="gambar">
            <img src="{{ asset('nonUser/img/peopleNonUser.png') }}" alt="" width="300" height="300">
        </div>
    </div>





    <div class="frame-3">
        <div class="overlap-group">
            <div class="frame-wrapper">
                <div class="div-wrapper">
                    <p class="text-wrapper">©Technopolis 2023. Hak Cipta Dilindungi Oleh Undang-undang</p>
                </div>
            </div>
            <div class="div">
                <div class="div-2">
                    <img class="img" src="img/frame.svg" />
                    <div class="div-3">
                        <div class="div-4">
                            <div class="text-wrapper-2">Pelajari</div>
                        </div>
                        <div class="div-wrapper">
                            <div class="text-wrapper-3">Tentang</div>
                        </div>
                        <div class="div-wrapper">
                            <div class="text-wrapper-3">Berita</div>
                        </div>
                    </div>
                    <div class="div-5">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Ikuti Kami</div>
                        </div>
                        <div class="div-4">
                            <img class="image" src="{{ asset('images/ig.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="group-2" src="{{ asset('images/yt.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="image" src="{{ asset('images/fb.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="group-2" src="{{ asset('images/linkedin.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                    </div>
                    <div class="div-6">
                        <div class="div-4">
                            <div class="text-wrapper-2">Hubungi Kami</div>
                        </div>
                        <div class="div-7">
                            <div class="iconly-bulk-message"></div>
                            <div class="text-wrapper-5">technopolisgmail.com</div>
                        </div>
                        <div class="div-7">
                            <div class="iconly-bulk-call"></div>
                            <div class="text-wrapper-5">082277770000</div>
                        </div>
                    </div>
                </div>
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
