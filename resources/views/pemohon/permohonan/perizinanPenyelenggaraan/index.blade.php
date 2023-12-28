@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="javascript:history.back()"><i class="fa fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="text">
                        <h4>Permohonan Perizinan Penyelenggaraan</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="content">
            <div class="row">
                <div class="col-md-4 col-4 ">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_sd_smp">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Sekolah Dasar dan Menegah</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_ptn_univ">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Perguruan Tinggi Dan Universitas</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpp">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Lembaga Pelatihan Profesional</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpnp">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Lembaga Pelatihan Non Pemerintah</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_ppo">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Pusat Pembelajaran Online</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpts">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Lembaga Pendidikan Tinggi Swasta</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_pklpk">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Pendidikan Khusus dan Lembaga
                                            Pelatihan Keterampilan</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
