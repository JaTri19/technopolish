@extends('layouts.app-surveyor2')

@section('content')
    <div class="container">
        <div class="head-container d-flex justify-content-lg-around">
            <div class="title">
                <h4>Table Perizinan Pendirian</h4>
            </div>
            <form action="" method="">
                <div class="search">
                    <input class="form-control" type="text" name="search" id="" placeholder="Cari No surat">
                </div>
            </form>
        </div>
        <table class="table table-hover m-3">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No Telepon</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Tipe Dokumen</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status Permohonan</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Actions</h6>
                    </th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach ($permohonans as $tracking)
                <tbody>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{ $tracking->nama }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{ $tracking->telepon }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $tracking->tipe_dokumen }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $tracking->status_dokumen }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <h4>-</h4>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
