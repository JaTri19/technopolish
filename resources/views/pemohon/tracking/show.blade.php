@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="javascript:history.back()"><i class="fa fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="text">
                        <h4>Status Dokumen</h4>
                    </div>
                </div>
            </div>
        </div>
        {{--
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
                        @if ($permohonans->status_dokumen == 'Permohonan Selesai')
                            <input type="text" placeholder="{{ $permohonans->surat_terbit }}" class="form-control"
                                disabled>
                            <br>
                            <a href="#" class="btn btn-danger">Download Surat </a>
                        @else
                            <input type="text" placeholder="{{ $permohonans->surat_terbit }}" class="form-control"
                                disabled>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card bg-warning">
                    <div class="content-1 m-4">
                        <h6 for="">Status Permohonan Perizinan Anda Sedang Dalam Tahap : </h6>
                        @if ($permohonans->status_dokumen == 'Dokumen Tidak Valid')
                            <h4>Dokumen Anda Tidak Valid, Silahkan Perbaiki dan Upload Ulang</h4>
                            <a href="#" class="btn btn-success">Edit</a>
                        @elseif ($permohonans->status_dokumen == 'Dokumen Ditolak')
                            <h4>Dokumen Anda Tidak Valid, Silahkan Perbaiki dan Upload Ulang</h4>
                            <a href="#" class="btn btn-danger">Upload Ulang</a>
                        @else
                            <h1>{{ $permohonans->status_dokumen }}</h1>
                        @endif
                    </div>
                </div>

                <div class="card bg-warning">
                    <div class="content-2 m-4">
                        <div class="visible-print text-center">
                            <img src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(197)->generate(Request::url()),
                            ) !!} ">
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card shadow-lg m-4">
                    <div class="card-body">

                        <div class="icons text-center">
                            <img src="{{ asset('pemohon/img/orangStatus.png') }}" alt="" width="144"
                                height="301">
                        </div>
                        <br>
                        <div class="content text-center">
                            <span>
                                Status Dokumen Anda :
                            </span>
                            <h4>{{ $permohonans->status_dokumen }}</h4>
                        </div>
                        <div class="content-2 m-4">
                            <div class="visible-print text-center">
                                <img src="data:image/png;base64, {!! base64_encode(
                                    QrCode::format('png')->size(197)->generate(Request::url()),
                                ) !!} ">
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
