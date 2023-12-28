@extends('layouts.app-operator')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="javascript:history.back()">
                            <i class="fa fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h4>Penyelenggaraan Perguruan Tinggi dan Universitas</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-center  m-2">
                        <h4>Nama Pemohon</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-center  m-2">
                        <h4>Tanggal</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-center  m-2">
                        <h4>Status</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-center  m-2">
                        <h4>Aksi</h4>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($permohonans as $pemohon)
            <div class="row">
                <div class="col-md-3">
                    <div class="content m-2 text-center">
                        <h5>{{ $pemohon->nama }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content m-2 text-center">
                        <h5>{{ $pemohon->updated_at }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content m-2 text-center">
                        <h5 class="text text-warning">{{ $pemohon->status_dokumen }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content m-2 text-center">
                        <a href="/operator/tracking/penyelenggaraan/edit/{{ $pemohon->id }}}"
                            class="btn btn-primary">Validasi</a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
