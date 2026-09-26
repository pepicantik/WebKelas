<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Techsoftone')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
    nav.custom-nav {
        width: 100%;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 6%;
        background: linear-gradient(to right,
            rgba(31, 57, 211, 0.95) 0%,
            rgba(42, 70, 220, 0.9) 50%,
            rgba(91, 128, 245, 0.85) 100%);
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
        color: #FFD444;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
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

    .btn-logout {
        background: transparent;
        color: white;
        border: none;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        padding: 10px 15px;
        transition: 0.3s;
    }

    .btn-logout:hover {
        color: #ffb4b4;
        transform: translateY(-2px);
    }

    /* FOOTER */
    .footer-tech {
        background: linear-gradient(to right,
                #1f39d3,
                #2a46dc,
                #5b80f5);
        color: white;
        padding: 50px 6% 0;
        margin-top: 60px;
    }

    .footer-container {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 40px;
        padding-bottom: 35px;
    }

    .footer-brand h2 {
        font-size: 25px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .footer-brand p {
        font-size: 14px;
        line-height: 1.8;
        max-width: 350px;
        color: #e0e7ff;
    }

    .footer-links h4,
    .footer-contact h4 {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .footer-links a {
        display: block;
        color: #e0e7ff;
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 12px;
        transition: 0.3s;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .footer-contact p {
        font-size: 14px;
        color: #e0e7ff;
        margin-bottom: 12px;
    }

    .footer-contact i {
        margin-right: 8px;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.25);
        text-align: center;
        padding: 20px 0;
    }

    .footer-bottom p {
        font-size: 13px;
        margin: 0;
        color: #e0e7ff;
    }

    /* RESPONSIVE HP */
    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .footer-tech {
            padding: 35px 6% 0;
        }
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
                <li>
                    <form action="{{ route('logout') }}" method="GET" id="logout-form">
                        @csrf

                        <button type="button" id="btnLogout" class="btn-logout">
                            Logout
                        </button>
                    </form>
                </li>
                {{-- <li><a href="/logout" onclick="return confirm('Anda Yakin ingin logout')">Logout</a></li> --}}
            </ul>
        @else
            <a href="/login" class="login-btn">LOGIN</a>
        @endif
    </nav>

    <div class="container">
        @yield('konten')
    </div>


    <footer class="footer-tech">
        <div class="footer-container">

            <!-- Logo dan Deskripsi -->
            <div class="footer-brand">
                <h2>Techsoftone</h2>
                <p>
                    Sistem Informasi Techsoftone.
                    Menghubungkan informasi, kreativitas,
                    dan teknologi dalam satu platform.
                </p>
            </div>

            <!-- Navigasi -->
            <div class="footer-links">
                <h4>Navigasi</h4>
                <a href="/home">Beranda</a>
                <a href="/moment">Moment</a>
                <a href="/siswa">Data Siswa</a>
            </div>

            <!-- Kontak -->
            <div class="footer-contact">
                <h4>Hubungi Kami</h4>
                <p><i class="bi bi-envelope"></i> Techsoftone</p>
                <p><i class="bi bi-geo-alt"></i> Indonesia</p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; {{ date('Y') }} Techsoftone.
                All Rights Reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const tombol = document.getElementById('btnLogout');
            const form = document.getElementById('logout-form');

            if (tombol && form) {
                tombol.addEventListener('click', function() {

                    Swal.fire({
                        title: 'Yakin ingin logout?',
                        text: 'Kamu akan keluar dari akun Techsoftone.',
                        icon: 'warning',

                        showCancelButton: true,
                        confirmButtonText: 'Ya, Logout',
                        cancelButtonText: 'Batal',

                        confirmButtonColor: '#dc3545',
                        cancelButtonColor: '#64748b',

                        reverseButtons: true,
                        allowOutsideClick: false,

                        background: '#ffffff',
                        color: '#1e293b'
                    }).then((result) => {

                        if (result.isConfirmed) {
                            form.submit();
                        }

                    });

                });
            }

        });
    </script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
