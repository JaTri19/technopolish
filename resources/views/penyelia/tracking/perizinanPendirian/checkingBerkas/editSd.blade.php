@extends('layouts.app-verifikator2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Validasi Permohonan Perizinan Penyelenggaraan
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical" method="POST" action="{{ route('pendirian.update') }}"
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

                {{-- file --}}
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Surat permohonan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('surat_permohonan', $permohonans->surat_permohonan) }}"
                                                                class="form-control" name="surat_permohonan" hidden>
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
                                                    <h6 for="first-name-vertical">KTP penanggung Jawab</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('ktp', $permohonans->ktp) }}"
                                                                class="form-control" name="ktp" hidden>
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
                                                    <h6 for="first-name-vertical">Surat keterangan domisili Penanggung
                                                        Jawab</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('suket_domisili', $permohonans->suket_domisili) }}"
                                                                class="form-control" name="suket_domisili" hidden>
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
                                                    <h6 for="first-name-vertical">Izin Mendirikan Bangunan Tempat
                                                        Mendirikan Usaha</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('suket_mendirikan', $permohonans->suket_mendirikan) }}"
                                                                class="form-control" name="suket_mendirikan" hidden>
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
                                                    <h6 for="first-name-vertical">Atas Hak Tanah</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('suket_tanah', $permohonans->suket_tanah) }}"
                                                                class="form-control" name="suket_tanah" hidden>
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
                                                    <h6 for="first-name-vertical">Akta Pendirian & Perubahan Badan
                                                        Hukum
                                                        yang Sah</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('suket_pbh', $permohonans->suket_pbh) }}"
                                                                class="form-control" name="suket_pbh" hidden>
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
                                                    <h6 for="first-name-vertical">Sertifikat BPJS Kesehatan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('sertif_bpjs_sehat', $permohonans->sertif_bpjs_sehat) }}"
                                                                class="form-control" name="sertif_bpjs_sehat" hidden>
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
                                                    <h6 for="first-name-vertical">Sertifikat BPJS
                                                        Ketenagakerjaan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('sertif_bpjs_kerja', $permohonans->sertif_bpjs_kerja) }}"
                                                                class="form-control" name="sertif_bpjs_kerja" hidden>
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

                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Gambar Denah Tanah</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('denah', $permohonans->denah) }}"
                                                                class="form-control" name="denah" hidden>
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
                                                    <h6 for="first-name-vertical">Foto Gedung/Bangunan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('gedung', $permohonans->gedung) }}"
                                                                class="form-control" name="gedung" hidden>
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
                                                    <h6 for="first-name-vertical">Akta Pendirian Cabang</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('akta_pendirian', $permohonans->akta_pendirian) }}"
                                                                class="form-control" name="akta_pendirian" hidden>
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
                                                    <h6 for="first-name-vertical">Surat Persetujuan Desa</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('surper_kades', $permohonans->surper_kades) }}"
                                                                class="form-control" name="surper_kades" hidden>
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
                                                    <h6 for="first-name-vertical">Surat Persetujuan Camat</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('surper_camat', $permohonans->surper_camat) }}"
                                                                class="form-control" name="surper_camat" hidden>
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
                                                    <h6 for="first-name-vertical">Surat Kepemilikan Tanah</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('surat_tanah', $permohonans->surat_tanah) }}"
                                                                class="form-control" name="surat_tanah" hidden>
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
                                                    <h6 for="first-name-vertical">Pernyataan Tunduk dan Patuh peraturan
                                                        yang berlaku</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('patuh_aturan', $permohonans->patuh_aturan) }}"
                                                                class="form-control" name="patuh_aturan" hidden>
                                                        </div>
                                                        <div class="action">
                                                            <a href="" class="btn btn-danger">Download</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 for="first-name-vertical">Daftar Peserta Didik</h6>
                                                <div class="download justify-content-between">
                                                    <div class="nama-file">
                                                        <input
                                                            value="{{ old('daftar_siswa', $permohonans->daftar_siswa) }}"
                                                            class="form-control" name="daftar_siswa" hidden>
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
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">

                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Daftar Tenaga Kerja
                                                        Kependidikan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('daftar_TKK', $permohonans->daftar_TKK) }}"
                                                                class="form-control" name="daftar_TKK" hidden>
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
                                                    <h6 for="first-name-vertical">Daftar Tenaha Kerja Non
                                                        Kependidikan</label>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('daftar_TKnK', $permohonans->daftar_TKnK) }}"
                                                                    class="form-control" name="daftar_TKnK" hidden>
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
                                                    <h6 for="first-name-vertical">Kurikulum/Program Kegiatan
                                                        Belajar</h6>
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
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h6 for="first-name-vertical">Daftar Sarana dan Prasarana</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input value="{{ old('sarpras', $permohonans->sarpras) }}"
                                                                class="form-control" name="sarpras" hidden>
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
                                                    <h6 for="first-name-vertical">SK Daftar penyelenggaraan sekolah
                                                        dari
                                                        yayasan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('sk_yayasan', $permohonans->sk_yayasan) }}"
                                                                class="form-control" name="sk_yayasan" hidden>
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
                                                    <h6 for="first-name-vertical">Hasil Studi Kelayakan</h6>
                                                    <div class="download justify-content-between">
                                                        <div class="nama-file">
                                                            <input
                                                                value="{{ old('studi_layak', $permohonans->studi_layak) }}"
                                                                class="form-control" name="studi_layak" hidden>
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
                                        <a href="/download/geotag_pendirian/{{ $permohonans->id }}"
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
        </div>
        <div class="row">
            <div class="card align-items-center">
                <div class="card-footer d-inline-block w-100"">
                    <button type="submit" class="btn btn-primary w-100 justify-center align-items-center">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
