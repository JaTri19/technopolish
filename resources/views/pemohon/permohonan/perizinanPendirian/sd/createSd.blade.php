@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Form Pengajuan Permohonan Perizinan Pendirian SD/SMP/SMA
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical" method="POST" action="{{ route('pendirian.store') }}"
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
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Lengkap</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="nama" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Email</label>
                                                    <input type="email" id="email-id-vertical" class="form-control"
                                                        name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">No Whatsapp</label>
                                                    <input type="number" id="contact-info-vertical" class="form-control"
                                                        name="telepon" placeholder="Mobile">
                                                </div>
                                            </div>
                                            <input type="hidden" name="tipe_dokumen" value="SD/SMP/SMA" hidden>
                                            <input type="hidden" name="status_dokumen" value="Checking Berkas Operator"
                                                hidden>
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
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="longtitude">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Latitude</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="latitude">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Lokasi Lengkap</label>
                                                    <textarea type="text" id="first-name-vertical" class="form-control" name="lokasi"></textarea>
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
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    @error('surat_permohonan')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                    @enderror
                                                    <label for="first-name-vertical">Surat permohonan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="surat_permohonan" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('ktp')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">KTP penanggung Jawab</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="ktp" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('suket_domisili')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat keterangan domisili Penanggung
                                                        Jawab</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_domisili" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('suket_mendirikan')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Izin Mendirikan Bangunan Tempat
                                                        Mendirikan Usaha</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_mendirikan" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('suket_tanah')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Atas Hak Tanah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_tanah" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('suket_pbh')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Akta Pendirian & Perubahan Badan Hukum
                                                        yang Sah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_pbh" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('sertif_bpjs_sehat')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Sertifikat BPJS Kesehatan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sertif_bpjs_sehat" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @error('sertif_bpjs_kerja')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Sertifikat BPJS
                                                        Ketenagakerjaan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sertif_bpjs_kerja" placeholder="First Name"required>
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
                                                    <label for="first-name-vertical">Gambar Denah Tanah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="denah" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Foto Gedung/Bangunan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="gedung" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Akta Pendirian Cabang</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="akta_pendirian" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat Persetujuan Desa</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="surper_kades" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat Persetujuan Camat</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="surper_camat" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat kuasa perizinan (S&K
                                                        berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat Kepemilikan Tanah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="surat_tanah" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pernyataan Tunduk dan Patuh peraturan
                                                        yang berlaku</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="patuh_aturan" placeholder="First Name"required>
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
                                                    <label for="first-name-vertical">Daftar Peserta Didik</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="daftar_siswa" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Daftar Tenaga Kerja
                                                        Kependidikan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="daftar_TKK" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Daftar Tenaha Kerja Non
                                                        Kependidikan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="daftar_TKnK" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kurikulum/Program Kegiatan
                                                        Belajar</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="kurikulum" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Daftar Sarana dan Prasarana</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sarpras" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">SK Daftar penyelenggaraan sekolah dari
                                                        yayasan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sk_yayasan" placeholder="First Name"required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Hasil Studi Kelayakan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="studi_layak" placeholder="First Name"required>
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
    </div>
@endsection
