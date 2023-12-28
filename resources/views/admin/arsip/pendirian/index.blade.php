@extends('layouts.app-admin2')


@section('content')
    <div class="container">
        @foreach ($permohonans as $permohonan)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4>Permohonan {{ $permohonan->tipe_dokumen }}</h4>
                </div>
                <div class="col-md-4">
                    <span class="badge text-bg-success">Valid</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h6>Pengajuan Pada : {{ $permohonan->created_at }}</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <h4>Diajukan Oleh :{{ $permohonan->nama }}</h4>
                </div>
                <div class="col-md-4">
                    <a href="/download/surat_terbit_pendirian/{{ $permohonan->id }}">
                        <i class="fa fa-solid fa-download"></i>
                    </a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
