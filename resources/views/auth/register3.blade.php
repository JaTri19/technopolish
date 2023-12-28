<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Tecnopolis</title>
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">

</head>

<body>
    <div id="auth">
        <br>
        <br>
        <div class="row h-100 justify-content-center">
            <div class="col-lg-10 rounded-4 bg-secondary-subtle">
                <div id="auth-left">
                    <div class="logo d-flex justify-content-center">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="140" height="140">
                    </div>
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap"
                                name="name">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email"
                                name="email">
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="NIK" name="nik">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Alamat Domisili"
                                name="domisili">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password"
                                name="password">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl"
                                placeholder="Masukkan Ulang Kata Sandi" name="">
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
                            {{ __('Buat Akun') }}</button>
                    </form>
                    <div class="text-center text-lg fs-4">
                        <p class="text-gray-600">Sudah Punya Akun? <a href="/login" class="font-bold">Masuk
                            </a></p>
                    </div>
                </div>
                </divstyle=>
            </div>
        </div>
        <br>
        <br>

        <script src="https://kit.fontawesome.com/f9a30c1ad2.js" crossorigin="anonymous"></script>
</body>

</html>
