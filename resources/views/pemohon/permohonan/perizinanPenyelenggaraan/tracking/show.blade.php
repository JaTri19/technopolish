@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <h4 class="card card-title m-4">Tracking Pengajuan Dokumen Perizinan</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="content-1 m-lg-4">
                        <label for="">Nama Pemohon : </label>
                        <input type="text" placeholder="{{ $permohonans->nama }}" class="form-control" disabled>
                    </div>
                    <div class="content-2 m-lg-4">
                        <label for="">No Telepon : </label>
                        <input type="text" placeholder="{{ $permohonans->telepon }}" class="form-control" disabled>
                    </div>
                    <div class="content-3 m-lg-4">
                        <label for="">Lokasi Permohonan : </label>
                        <input type="text" placeholder="{{ $permohonans->lokasi }}" class="form-control" disabled>
                    </div>
                    <div class="content-3 m-lg-4">
                        <label for="">Tipe Pengajuan : </label>
                        <input type="text" placeholder="{{ $permohonans->tipe_dokumen }}" class="form-control" disabled>
                    </div>
                    <div class="content-3 m-lg-4">
                        <label for="">Surat izin Terbit : </label>
                        <input type="text" placeholder="{{ $permohonans->surat_terbit }}" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card bg-warning">
                    <div class="content-1 m-4">
                        <h6 for="">Status Permohonan Perizinan Anda Sedang Dalam Tahap : </h6>
                        <h1>{{ $permohonans->status_dokumen }}</h1>
                    </div>
                </div>

                <div class="card bg-warning">
                    <div class="content-2 m-4">
                        <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(Request::url()) !!}
                            <br>
                            <a href="" class="btn btn-primary m-3">
                                <span>Download QR Code</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
