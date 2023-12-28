@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendirianTK">
                        <div class="content-1 m-4">
                            <h5 class="text m-4">Persyaratan Perizinan Pendirian</h5>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#penyelenggaraan">
                        <div class="content-1 m-4">
                            <h5 class="text m-4">Persyaratan Perizinan Penyelenggaraan</h5>
                        </div>
                    </button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendirianTK">
                        <div class="content-1 m-4">
                            <h6 class="text m-4">TK</h6>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendirianTK">
                        <div class="content-1 m-4">
                            <h6 class="text m-4">TK/SMP/SMA</h6>
                        </div>
                    </button>
                </div>
            </div>
        </div>



        <!-- Modal Pendirian-->
        <div class="modal fade" id="pendirianTK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Persyaratan Perizian Pendirian TK</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>Scan Surat permohonan</li>
                            <li>Scan KTP penanggung Jawab</li>
                            <li>Scan Surat keterangan domisili dari kepala desa/ lurah</li>
                            <li>Susunan pengurus dan rincian tugas</li>
                            <li>Scan Izin Mendirikan Bangunan</li>
                            <li>Scan atas Hak Tanah (sertifikat/segel/akta jual tanah)</li>
                            <li>Scan Akta Pendirian Badan Hukum yang telah disahkan</li>
                            <li>Scan akta perubahan badan hukum yang telah disahkan (S&K berlaku)</li>
                            <li>Rencana Induk Pengembangan TK(S&K berlaku)</li>
                            <li>Rencana pencapaian standar penyelenggaraan</li>
                            <li>Surat kuasa perizinan (S&K berlaku)</li>
                            <li>Scan SK dan izin Operasional sebelumnya (S&K berlaku)</li>
                            <li>Scan sertifikat keikutsertaan BPJS kesehatan</li>
                            <li>Scan sertifikat keikutsertaan BPJS ketenagakerjaan</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Penyelenggaraan-->
        <div class="modal fade" id="penyelenggaraan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Persyaratan Perizian Penyelenggaraan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
