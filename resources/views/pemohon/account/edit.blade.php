@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="title d-flex justify-content-center align-items-center">
            <h3>Informasi Akun</h3>
        </div>
        <br>
        <form action="{{ route('update.account') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}" hidden>
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
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ $user->name }}" value="{{ $user->name }}">
                                </div>
                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Nama Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control"
                                        placeholder="{{ $user->pekerjaan }}">
                                </div>
                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Nomer Telepon</label>
                                    <input type="number" name="telepon" class="form-control"
                                        placeholder="{{ $user->telepon }}" value="{{ $user->telepon }}">
                                </div>
                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">NIK</label>
                                    <input type="number" name="nik" required class="form-control"
                                        placeholder="{{ $user->nik }}" {{ $user->nik }}>
                                </div>
                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="alamat" class="form-control"
                                        placeholder="{{ $user->alamat }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        placeholder="{{ $user->tanggal_lahir }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Alamat Sesuai KTP</label>
                                    <input type="text" name="domisili" class="form-control"
                                        placeholder="{{ $user->domisili }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Kota</label>
                                    <input type="text" name="kota" class="form-control"
                                        placeholder="{{ $user->kota }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control"
                                        placeholder="{{ $user->kecamatan }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Kelurahan</label>
                                    <input type="text" name="kelurahan" class="form-control"
                                        placeholder="{{ $user->kelurahan }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Dusun</label>
                                    <input type="text" name="desa" class="form-control"
                                        placeholder="{{ $user->desa }}">
                                </div>

                                <br>
                                <div class="ms-3 ">
                                    <label for="first-name-vertical" class="form-label">Kode Pos</label>
                                    <input type="number" name="kode_pos" class="form-control"
                                        placeholder="{{ $user->kode_pos }}">
                                </div>

                                <br>
                                <div class="button-edit d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Update Data Diri</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
