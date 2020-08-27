<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
</head>
<body>
    @extends('layouts/master') 
    @section('content')
        <div class="container">
            {{-- <?= "Nama saya adalah " . htmlspecialchars($nama) ?> --}}
            {{-- <?= "Nama saya adalah " . $nama ?> --}}
            Nama saya adalah {{ $nama }} 
        </div>
    @endsection
</body>
</html>