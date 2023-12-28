@extends('layouts.app-verifikator2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Edit Permohonan Perizinan Penyelenggaraan
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical" method="POST" action="{{ route('penyelenggaraan.update') }}"
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
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Luas Lahan</label>
                                                    <h6>
                                                        {{ $permohonans->luas_lahan }}
                                                    </h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="luas_lahan" value="{{ $permohonans->luas_lahan }}" hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Luas Bangunan</label>
                                                    <h6>
                                                        {{ $permohonans->luas_bangunan }}
                                                    </h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="luas_bangunan" value="{{ $permohonans->luas_bangunan }}"
                                                        hidden>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Jumlah Sekolah</label>
                                                    <h6>
                                                        {{ $permohonans->jumlah_sekolah }}
                                                    </h6>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="jumlah_sekolah" value="{{ $permohonans->jumlah_sekolah }}"
                                                        hidden>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Dokumen pendirian atau izin operasi
                                                        lembaga pendidikan khusus atau
                                                        pelatihan keterampilan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                class="form-control" name="doc_pendirian" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Identitas pemilik atau direktur
                                                        lembaga</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('identitas_pemilik', $permohonans->identitas_pemilik) }}"
                                                                class="form-control" name="identitas_pemilik" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Kurikulum dan deskripsi program</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                class="form-control" name="kurikulum" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Dokumen keuangan lembaga</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('doc_keuangan', $permohonans->doc_keuangan) }}"
                                                                class="form-control" name="doc_keuangan" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Surat izin dari otoritas pendidikan
                                                        setempat atau badan terkait</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                class="form-control" name="surat_otorisasi" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Program pendidikan khusus atau
                                                        pelatihan keterampilan yang akan
                                                        diselenggarakan
                                                    </h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                class="form-control" name="program_akademik" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
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
                    <div class="col-md-6">
                        <div class="card m-4">
                            <div class="content-1 m-4">
                                <h6 for="first-name-vertical">Geotag</h6>
                                <div class="download">
                                    <div class="nama-file">
                                        <input value="{{ old('geotag', $permohonans->geotag) }}" class="form-control"
                                            name="geotag" hidden>
                                    </div>
                                    <div class="action">
                                        <a href="/download/geotag_penyelenggaraan/{{ $permohonans->id }}"
                                            class="btn btn-danger">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card m-4">
                            <div class="content-1 m-4">
                                <label for="" class="text">Status Dokumen</label>
                                <select name="status_dokumen" id="" class="form-select form-select">
                                    <option value="Dokumen Sesuai">Dokumen Sesuai</option>
                                    <option value="Dokumen Tidak Sesuai">Dokumen Tidak Sesuai</option>
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
