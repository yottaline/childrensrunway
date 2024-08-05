@extends('index')
@section('title', 'QR Code Scanner')
@section('content')
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div id="reader" style="width:700px;" class="container"></div>
    </div>
    <form method="POST" id="scanForm" action="/scans/scan_qr_code">
        @csrf
        <input type="hidden" name="qr_code" id="qr_code">
    </form>
    <script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            document.getElementById('qr_code').value = decodedText;
            document.getElementById('scanForm').submit();
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 400
            });
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
