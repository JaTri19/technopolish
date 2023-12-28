@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="title d-flex justify-content-center align-items-center">
            <h3>Informasi Akun</h3>
        </div>
        <br>
        <div class="gambar d-flex justify-content-center">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="{{ asset('dashboard/images/faces/1.jpg') }}" alt="Face 1">
                </div>
                <div class="ms-3 name">
                    <h3 class="font-bold">{{ $user->name }}</h3>
                </div>
            </div>
        </div>

        <br>

        <div class="data-diri d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class=" align-items-center">
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Nama Pengguna</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->name }}" disabled>
                            </div>
                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Nama Pekerjaan</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->pekerjaan }}" disabled>
                            </div>
                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Nomer Telepon</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->telepon }}" disabled>
                            </div>
                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">NIK</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->nik }}" disabled>
                            </div>
                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Tempat Lahir</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->alamat }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Tanggal Lahir</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->tanggal_lahir }}"
                                    disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Alamat Sesuai KTP</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->domisili }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Kota</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->kota }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Kecamatan</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->kecamatan }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Kelurahan</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->kelurahan }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Dusun</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->desa }}" disabled>
                            </div>

                            <br>
                            <div class="ms-3 ">
                                <label for="first-name-vertical" class="form-label">Kode Pos</label>
                                <input type="disabled" class="form-control" placeholder="{{ $user->kode_pos }}" disabled>
                            </div>

                            <br>
                            <div class="button-edit d-flex justify-content-center">
                                <a href="/edit/data-pemohon/{{ $user->id }}" class="btn btn-primary">Edit Data Diri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
