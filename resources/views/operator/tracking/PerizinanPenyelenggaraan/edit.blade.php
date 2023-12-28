@extends('layouts.app-operator')

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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SD/SMP/SMA --}}
                @if ($permohonans->tipe_dokumen == 'SD/SMP/SMA')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Akta pendirian atau izin pendirian
                                                            sekolah</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Identitas pemilik atau kepala
                                                            sekolah.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('identitas_pemilik', $permohonans->identitas_pemilik) }}"
                                                                    class="form-control" name="identitas_pemilik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Dokumen identitas staf pengajar dan
                                                            karyawan.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('identitas_pengajar', $permohonans->identitas_pengajar) }}"
                                                                    class="form-control" name="identitas_pengajar" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/identitas_pengajar/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                        <h6 for="first-name-vertical">Kurikulum yang akan diajarkan.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Dokumen keuangan sekolah (laporan
                                                            keuangan, anggaran, dll.).</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_keuangan', $permohonans->doc_keuangan) }}"
                                                                    class="form-control" name="doc_keuangan" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Surat izin dari otoritas pendidikan
                                                            setempat.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                    class="form-control" name="surat_otorisasi" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                    {{-- UNIVERSITAS PT --}}
                @elseif ($permohonans->tipe_dokumen == 'Universitas/PT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Akta pendirian atau izin pendirian
                                                            sekolah</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Identitas pemilik atau rektor.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('identitas_pemilik', $permohonans->identitas_pemilik) }}"
                                                                    class="form-control" name="identitas_pemilik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kualifikasi akademik staf pengajar
                                                            dan dosen.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kualifikasi_pengajar', $permohonans->kualifikasi_pengajar) }}"
                                                                    class="form-control" name="kualifikasi_pengajar"
                                                                    hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kualifikasi_pengajar/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kurikulum dan deskripsi mata
                                                            pelajaran.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                        <h6 for="first-name-vertical">Dokumen keuangan institusi</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_keuangan', $permohonans->doc_keuangan) }}"
                                                                    class="form-control" name="doc_keuangan" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Surat izin dari otoritas pendidikan
                                                            setempat.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                    class="form-control" name="surat_otorisasi" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Program akademik yang akan ditawarkan
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                    class="form-control" name="program_akademik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Sarana prasarana dan fasilitas</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input value="{{ old('sarpras', $permohonans->sarpras) }}"
                                                                    class="form-control" name="sarpras" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/sarprasP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                    {{-- Lembaga Pelatihan Profesional --}}
                @elseif ($permohonans->tipe_dokumen == 'Lembaga Pelatihan Profesional')
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
                                                            lembaga pelatihan.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kualifikasi instruktur dan pelatih
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kualifikasi_pengajar', $permohonans->kualifikasi_pengajar) }}"
                                                                    class="form-control" name="kualifikasi_pengajar"
                                                                    hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kualifikasi_pengajar/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Rencana kurikulum</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Surat izin dari otoritas pendidikan
                                                            atau lembaga terkait</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                    class="form-control" name="surat_otorisasi" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Program pelatihan yang akan
                                                            diselenggarakan.
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                    class="form-control" name="program_akademik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                @elseif($permohonans->tipe_dokumen == 'Lembaga Pendidikan Non Pemerintah')
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
                                                            organisasi</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Identitas pengurus organisasi</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('identitas_pemilik', $permohonans->identitas_pemilik) }}"
                                                                    class="form-control" name="identitas_pemilik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                        <h6 for="first-name-vertical">Dokumen keuangan organisasi.</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_keuangan', $permohonans->doc_keuangan) }}"
                                                                    class="form-control" name="doc_keuangan" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Surat izin dari otoritas pendidikan
                                                            atau lembaga terkait</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                    class="form-control" name="surat_otorisasi" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Program pendidikan atau pelatihan
                                                            yang akan diselenggarakan
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                    class="form-control" name="program_akademik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                @elseif($permohonans->tipe_dokumen == 'Pusat Pembelajaran Online')
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
                                                            lembaga pembelajaran online</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kurikulum dan deskripsi materi
                                                            pembelajaran</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Program pembelajaran online yang akan
                                                            disediakan
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                    class="form-control" name="program_akademik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                @elseif ($permohonans->tipe_dokumen == 'Lembaga Pendidikan Tinggi Swasta')
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
                                                            institusi pendidikan tinggi swasta</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_pendirian', $permohonans->doc_pendirian) }}"
                                                                    class="form-control" name="doc_pendirian" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Identitas pemilik atau rektor</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('identitas_pemilik', $permohonans->identitas_pemilik) }}"
                                                                    class="form-control" name="identitas_pemilik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kualifikasi staf pengajar dan dosen
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kualifikasi_pengajar', $permohonans->kualifikasi_pengajar) }}"
                                                                    class="form-control" name="kualifikasi_pengajar"
                                                                    hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kualifikasi_pengajar/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Kurikulum dan deskripsi mata
                                                            pelajaran</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                        <h6 for="first-name-vertical">Dokumen keuangan institusi</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('doc_keuangan', $permohonans->doc_keuangan) }}"
                                                                    class="form-control" name="doc_keuangan" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Surat izin dan akreditasi dari
                                                            otoritas pendidikan setempat atau badan
                                                            akreditasi</h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('surat_otorisasi', $permohonans->surat_otorisasi) }}"
                                                                    class="form-control" name="surat_otorisasi" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <h6 for="first-name-vertical">Program akademik yang ditawarkan
                                                        </h6>
                                                        <div class="download justify-content-between">
                                                            <div class="nama-file">
                                                                <input
                                                                    value="{{ old('program_akademik', $permohonans->program_akademik) }}"
                                                                    class="form-control" name="program_akademik" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                @elseif ($permohonans->tipe_dokumen == 'Pendidikan Khusus dan Lembaga Pelatihan Keterampilan')
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
                                                                <a href="/download/doc_pendirian/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/identitas_pemilik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <input
                                                                    value="{{ old('kurikulum', $permohonans->kurikulum) }}"
                                                                    class="form-control" name="kurikulum" hidden>
                                                            </div>
                                                            <div class="action">
                                                                <a href="/download/kurikulumP/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/doc_keuangan/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/surat_otorisasi/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                                                                <a href="/download/program_akademik/{{ $permohonans->id }}"
                                                                    class="btn btn-danger">Download</a>
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
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-4">
                            <div class="content-1 m-4">
                                <label for="" class="text my-2">Status Dokumen</label>
                                <select name="status_dokumen" id="" class="form-select form-select">
                                    <option value="Dokumen Valid">Dokumen Valid</option>
                                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
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
    </div>
@endsection
