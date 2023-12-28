@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card  align-items-center">
                    <div class="content-1 m-4">
                        <div class="text">
                            <h5 class="text align-items-center">Cari File Dengan QR Code!</h5>
                            <div id="reader" height="1200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
@endsection


@push('js')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:

            location.href = decodedText;
            console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endpush
