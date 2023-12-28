@extends('layouts.app-kepalaDinas2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2>Notifikasi Perizinan Penyelenggaraan</h2>
            </div>
            <div class="card-content d-flex justify-content-center align-content-center">
                <p>yang melebihi batas waktu</p>
            </div>
        </div>
        <br>

        <div class="card">
            <table class="table table-hover m-4">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tipe Dokumen</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp

                @foreach ($lastSevenDays as $pemohon)
                    @if ($pemohon->status_dokumen == 'Tanda Tangan Kepala Dinas')
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $pemohon->nama }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $pemohon->tipe_dokumen }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-semibold mb-1">{{ $pemohon->updated_at }}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <span class="badge text-bg-danger">Telah Melebihi Waktu Maksimal</span>
                                </td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach

            </table>

        </div>
    </div>
@endsection
