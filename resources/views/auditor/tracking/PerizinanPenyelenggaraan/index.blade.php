@extends('layouts.app-auditor2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2> Tracking Perizinan Penyelenggaraan</h2>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan">
                            <h4>Checking Berkas Operator</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan"
                                class="btn btn-primary">></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan">
                            <h4>Dokumen Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan">
                            <h4>Dokumen Tidak Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan"
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
                        <a href="/auditor/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan">
                            <h4>Sedang Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan">
                            <h4>Telah Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan">
                            <h4>Checking Berkas Verifikator</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan"
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
                        <a href="/auditor/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan">
                            <h4>Dokumen Sesuai</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan">
                            <h4>Dokumen Ditolak</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan">
                            <h4>Tanda Tangan Kepala Dinas</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/auditor/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan">
                            <h4>Permohonan Selesai</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            {{-- <h4>80</h4> --}}
                        </div>
                        <div class="next">
                            <a href="/auditor/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
