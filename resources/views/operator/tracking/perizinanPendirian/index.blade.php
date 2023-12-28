@extends('layouts.app-operator')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="{{ route('back') }}">
                            <i class="fa fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="text">
                        <h4>Permohonan Perizinan Pendirian</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title m-3">
                            <a href="/operator/monitoring/pendirian/tk">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Pendirian TK</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title m-3">
                            <a href="/operator/monitoring/pendirian/sd">
                                <div class="group-3 d-flex justify-content-between">
                                    <div class="group-a">
                                        <h6><i class="fa fa-solid fa-list-ul mx-4"></i>Pendirian SD/SMP/SMA</h6>
                                    </div>
                                    <div class="group-c">
                                        <i class="fa fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('footer')
        <div class="sikil">
            <img src="{{ asset('pemohon/img/footer.png') }}" alt="" width="360" height="203">
        </div>
    @endpush
