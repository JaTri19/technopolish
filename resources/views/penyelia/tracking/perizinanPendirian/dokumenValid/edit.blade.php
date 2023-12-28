@extends('layouts.app-verifikator2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Tugaskan Surveyor Perizinan Pendirian
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical" method="POST" action="{{ route('statusPendirian.update') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="hidden" name="id" value="{{ $permohonans->id }}">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Lengkap : </label>
                                                    <h6>{{ $permohonans->nama }}</h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="nama" value="{{ $permohonans->nama }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Email</label>
                                                    <h6>{{ $permohonans->email }}</h6>
                                                    <input type="email" id="email-id-vertical" class="form-control"
                                                        name="email" value="{{ $permohonans->email }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">No Whatsapp</label>
                                                    <h6>{{ $permohonans->telepon }}</h6>
                                                    <input type="number" id="contact-info-vertical" class="form-control"
                                                        name="telepon" value="{{ $permohonans->telepon }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Tipe Dokumen</label>
                                                    <h6>{{ $permohonans->tipe_dokumen }}</h6>
                                                    <input type="text" id="contact-info-vertical" class="form-control"
                                                        name="tipe_dokumen" value="{{ $permohonans->tipe_dokumen }}" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Longtitude</label>
                                                    <h6>{{ $permohonans->longtitude }}</h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="longtitude" value="{{ $permohonans->longtitude }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Latitude</label>
                                                    <h6>{{ $permohonans->latitude }}</h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="latitude" value="{{ $permohonans->latitude }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Lokasi Lengkap</label>
                                                    <h6>
                                                        {{ $permohonans->lokasi }}
                                                    </h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="lokasi" value="{{ $permohonans->lokasi }}" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-4">
                            <div class="content-1 m-4">
                                <label for="" class="text my-2">Status Dokumen</label>
                                <select name="status_dokumen" id="" class="form-select form-select">
                                    <option value="Sedang Disurvey" selected>Tugaskan Surveyor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card align-items-center">
                        <div class="card-footer d-inline-block w-100"">
                            <button type="submit"
                                class="btn btn-primary w-100 justify-center align-items-center">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
