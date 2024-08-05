<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your QR Code</title>
</head>

<body>
    <p>Hello {{ $visitor->visitor_name }},</p>
    <p>Your visit request has been approved. Please find your QR code below:</p>
    <p>{{ $qr_code }}</p>
    {{-- <img src="data:image/png;base64, {{ $visitor->visitor_qr_code }}" alt="QR Code"> --}}
    <p>Expiry Date: {{ $visitor->visitor_expiry }}</p>

</body>

</html>
