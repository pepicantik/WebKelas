<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Techsoftone')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<style>
    nav.custom-nav {
  width: 100%;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 6%;
  background: linear-gradient(
    to right,
    rgba(31, 57, 211, 0.95) 0%,
    rgba(42, 70, 220, 0.9) 50%,
    rgba(91, 128, 245, 0.85) 100%
  );
  box-shadow: 0 10px 20px 10px rgba(0, 0, 0, 0.05);
}

    .logo {
      color: white;
      font-size: 22px;
      font-weight: 800;
      letter-spacing: 1px;
      text-decoration: none;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 25px;
      list-style: none;
      margin: 0;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 1px;
      transition: 0.3s;
    }

    .nav-links a:hover {
      opacity: 0.7;
    }

    .login-btn {
      text-decoration: none;
      color: #3152dc;
      background: white;
      padding: 9px 14px;
      border-radius: 6px;
      font-size: 12px;
      font-weight: 800;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      transition: 0.3s;
    }

    .login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }
</style>
<body>

    <nav class="custom-nav">
        <a href="/" class="logo">Techsoftone</a>

        @if (session()->has('key'))
            <ul class="nav-links">
                <li><a href="/home">Beranda</a></li>
                <li><a href="/moment">Moment</a></li>
                <li><a href="/siswa">Data Siswa</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        @else
            <a href="/login" class="login-btn">LOGIN</a>
        @endif
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