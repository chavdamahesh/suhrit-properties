<!-- resources/views/emails/qrcode.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>QR Code Email</title>
</head>

<body>
    <h1>{{$property->property_name}}</h1>
    <h1>Property Published </h1>
    <p>Here is your QR code:</p>


    {{ $qrCode }}

</body>

</html>
