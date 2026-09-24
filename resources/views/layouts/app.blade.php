<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Techsoftone')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-light bg-light mb-5">
        <div class="container">
            <a href="/" class="navbar-brand">Techsoftone</a>
        @if (session()->has('key'))
        <div class="">
            <a href="/home" class="btn btn-outline-primary">Beranda</a>
            <a href="/moment" class="btn btn-outline-primary">Moment</a>
            <a href="/siswa" class="btn btn-outline-primary">Data Siswa</a>
            <a href="/logout" class="btn btn-outline-primary">Logout</a>
        </div>
        @else
            <a href="/login" class="btn btn-outline-primary">Login</a>
        @endif
        </div>
    </nav>

    <div class="container">
        @yield('konten')
    </div>


    <footer class="text-body-secondary py-5">
        <div class="container">
            <p>&copy; 2026 | Techsoftone</p>
        </div>
    </footer>
</body>
</html>
