@extends('layouts.app-dinas2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2> Monitoring Perizinan Pendirian</h2>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/checking_berkas_operator_pendirian">
                            <h4>Checking Berkas Operator</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/checking_berkas_operator_pendirian"
                                class="btn btn-primary">></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/dokumen_valid_pendirian">
                            <h4>Dokumen Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/dokumen_valid_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/dokumen_tidak_valid_pendirian">
                            <h4>Dokumen Tidak Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/dokumen_tidak_valid_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/sedang_disurvey_pendirian">
                            <h4>Sedang Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/sedang_disurvey_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/telah_disurvey_pendirian">
                            <h4>Telah Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/telah_disurvey_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/checking_berkas_verifikator_pendirian">
                            <h4>Checking Berkas Verifikator</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/checking_berkas_verifikator_pendirian"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/dokumen_sesuai_pendirian">
                            <h4>Dokumen Sesuai</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/dokumen_sesuai_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/tolak_dokumen_pendirian">
                            <h4>Dokumen Ditolak</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/tolak_dokumen_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/ttd_kepala_dinas_pendirian">
                            <h4>Tanda Tangan Kepala Dinas</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/ttd_kepala_dinas_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/dinas/tracking/pendirian/permohonan_selesai_pendirian">
                            <h4>Permohonan Selesai</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/dinas/tracking/pendirian/permohonan_selesai_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
