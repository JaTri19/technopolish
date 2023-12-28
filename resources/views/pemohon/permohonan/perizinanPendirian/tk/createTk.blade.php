@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Form Pengajuan Permohonan Perizinan Pendirian TK</h4>
                    </div>
                </div>
            </div>
            <form class="form" method="POST" action="{{ route('pendirian.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <input type="hidden" name="tipe_dokumen" value="TK" hidden>
                                            <input type="hidden" name="status_dokumen" value="Checking Berkas Operator"
                                                hidden>
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
                                                    <textarea type="lokasi" id="first-name-vertical" class="form-control" name="lokasi"></textarea>
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
                                                    <label for="first-name-vertical">Scan Surat permohonan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('surat_permohonan') is-invalid @enderror"
                                                        name="surat_permohonan" placeholder="First Name" accept="pdf*/"
                                                        required>
                                                    @error('surat_permohonan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan KTP penanggung Jawab</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('ktp') is-invalid @enderror"
                                                        name="ktp" placeholder="First Name" required>
                                                    @error('ktp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat keterangan domisili dari
                                                        kepala desa/ lurah</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_domisili') is-invalid @enderror"
                                                        name="suket_domisili" placeholder="First Name" required>
                                                    @error('suket_domisili')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Susunan pengurus dan rincian
                                                        tugas</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('pengurus') is-invalid @enderror"
                                                        name="pengurus" placeholder="First Name" required>
                                                    @error('pengurus')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Izin Mendirikan Bangunan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_mendirikan') is-invalid @enderror"
                                                        name="suket_mendirikan" placeholder="First Name" required>
                                                    @error('suket_mendirikan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
                                                    <label for="first-name-vertical">Scan atas Hak Tanah
                                                        (sertifikat/segel/akta jual tanah)</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_tanah') is-invalid @enderror"
                                                        name="suket_tanah" placeholder="First Name" required>
                                                    @error('suket_tanah')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Akta Pendirian Badan Hukum yang
                                                        telah disahkan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_pbh') is-invalid @enderror"
                                                        name="suket_pbh" placeholder="First Name" required>
                                                    @error('suket_pbh')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan akta perubahan badan hukum yang
                                                        telah disahkan (S&K berlaku)</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_perubahanPBH') is-invalid @enderror"
                                                        name="suket_perubahanPBH" placeholder="First Name">
                                                    @error('suket_perubahanPBH')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Rencana Induk Pengembangan TK(S&K
                                                        berlaku)</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_rip') is-invalid @enderror"
                                                        name="suket_rip" placeholder="First Name" required>
                                                    @error('suket_rip')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
                                                    <label for="first-name-vertical">Rencana pencapaian standar
                                                        penyelenggaraan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('suket_psp') is-invalid @enderror"
                                                        name="suket_psp" placeholder="First Name" required>
                                                    @error('suket_psp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat kuasa perizinan (S&K
                                                        berlaku)</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('sukas_perizinan') is-invalid @enderror"
                                                        name="sukas_perizinan" placeholder="First Name">
                                                    @error('sukas_perizinan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan SK dan izin Operasional
                                                        sebelumnya (S&K berlaku)</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('sk_izinOperasional') is-invalid @enderror"
                                                        name="sk_izinOperasional" placeholder="First Name">
                                                    @error('sk_izinOperasional')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan sertifikat keikutsertaan BPJS
                                                        kesehatan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('sertif_bpjs_sehat') is-invalid @enderror"
                                                        name="sertif_bpjs_sehat" placeholder="First Name" required>
                                                    @error('sertif_bpjs_sehat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan sertifikat keikutsertaan BPJS
                                                        ketenagakerjaan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('sertif_bpjs_kerja') is-invalid @enderror"
                                                        name="sertif_bpjs_kerja" placeholder="First Name" required>
                                                    @error('sertif_bpjs_kerja')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
@endsection
