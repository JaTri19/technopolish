<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tecnopolis</title>
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-right">
                    <img src="{{ asset('nonUser/img/login-pemohon.png') }}" alt="" width="696"
                        height="1026">
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-left">
                    <div class="logo d-flex justify-content-center">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="140" height="140">
                    </div>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text"
                                class="form-control form-control-xl @error('email')
                            is-invalid {{ $message }}
                            @enderror"
                                placeholder="Email/Telepon" name="email">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password"
                                class="form-control form-control-xl @error('password')
                                is-invalid {{ $message }}
                            @enderror"
                                placeholder="Password" name="password">
                        </div>

                        <div class="form-check form-check-lg d-flex justify-content-center">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Ingat Kata Sandi
                            </label>
                        </div>
                        <div class="forgot-password d-flex justify-content-end">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: red;">
                                    {{ __('Lupa Kata Sandi?') }}
                                </a>
                            @endif
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
                            {{ __('Masuk') }}</button>
                    </form>
                    <div class="text-center text-lg fs-4">
                        <p class="text-gray-600">Belum Punya Akun? <a href="/register" class="font-bold">Daftar
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/f9a30c1ad2.js" crossorigin="anonymous"></script>
</body>

</html>
