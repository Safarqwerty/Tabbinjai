<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="images/Desa tabbinjai.png" sizes="16x16" type="image/x-icon">
    <title>@yield('halaman') | Desa Tabbinjai</title>
</head>
<body>
    @include('layouts.konten.navbar')
    @yield('content')
    @include('layouts.konten.footer')
</body>
</html>