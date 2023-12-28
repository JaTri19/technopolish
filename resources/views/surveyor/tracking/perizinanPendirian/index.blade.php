@extends('layouts.app-surveyor2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2>Monitoring Perizinan Pendirian</h2>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title m-3 text-center">
                        <h4>Monitoring Aksi</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title m-3">
                        <a href="/surveyor/tracking/pendirian/sedang_disurvey_pendirian">
                            <div class="group-3 d-flex justify-content-between">
                                <div class="group-a">
                                    <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Sedang Disurvey</h6>
                                </div>
                                <div class="group-c">
                                    <i class="fa fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title m-3 text-center">
                        <h4>Monitoring Seluruh</h4>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-hover m-4">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nama</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tipe Dokumen</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tanggal</h6>
                                </th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($permohonans as $pemohon)
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $pemohon->nama }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{ $pemohon->tipe_dokumen }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $pemohon->created_at }}</p>
                                    </td>

                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                </div>
                {{ $permohonans->links() }}
            </div>
        </div>


    </div>
@endsection
