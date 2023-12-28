@extends('layouts.app-pemohon')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 justify-content-center">
            <div class="card shadow-lg m-4 justify-content-center">
                <div class="card-title m-4 text-center">
                    <h3>Permohonan Perizinan Pendirian</h3>
                </div>
                <div class="card-body">
                    @foreach ($berhasil as $permohonan)
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <div class="card">
                                    <div class="content-2 m-4">
                                        <div class="created_at">
                                            <span>{{ $permohonan->nama }}</span>
                                        </div>
                                        <hr>
                                        <div class="isi">
                                            <p>Surat pengajuan Permohonan Akan diterima setelah 14 hari kerja</p>
                                            <p>Tipe Dokumen : {{ $permohonan->tipe_dokumen }}</p>
                                        </div>
                                        <div class="action">
                                            <a href="/pemohon/show/{{ $permohonan->id }}">
                                                <span class="badge text-bg-primary">Lihat</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
