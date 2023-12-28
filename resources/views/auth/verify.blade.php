<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Tecnopolis</title>
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">

</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">

                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="javascript:history.back()"><i class="fa fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="text">
                        <h4>Verifikasi Email</h4>
                    </div>
                </div>
            </div>
            <div class="section m-4">
                <span>
                    {{ __('Sebelum Melanjutkan ke halaman selanjutnya, silahkan verifikasi email terlebih dahulu') }}
                </span>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Email Verifikasi Berhasil Dikirim, Silahkan check Inbox Mail') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">
                        <img src="{{ asset('nonUser/img/verifikasiemail.png') }}" alt="" width="332"
                            height="364">
                    </div>
                    <div class="card-title text-center">
                        <h3>Cek Email Sekarang</h3>
                    </div>
                </div>
                <div class="card-body">


                    <div class="section m-2 justify-content-center text-center">
                        <h6>{{ __('Tidak Mendapatkan Link Verifikasi?') }}</h6>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('Resend Verifikasi') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/f9a30c1ad2.js" crossorigin="anonymous"></script>
</body>
