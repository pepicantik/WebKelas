<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef3ff;
        }

        .hero {
            padding-top: 70px;
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            margin-bottom: 10px;
            background-image: linear-gradient(to bottom,
                    rgba(31, 57, 211, 0.92) 0%,
                    rgba(42, 70, 220, 0.85) 45%,
                    rgba(91, 128, 245, 0.65) 75%,
                    rgba(238, 243, 255, 1) 100%),

                url("/images/fotokelas.jpeg");
            background-size: cover;
            background-position: center;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            background: rgba(42, 69, 220, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 45px;
            list-style: none;
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

        .hero-content {
            padding-top: 110px;
            position: relative;
            z-index: 5;
            min-height: calc(100vh - 90px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px 120px;
        }

        .small-title {
            color: white;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 35px;
            backdrop-filter: blur(5px);
        }

        .hero h1 {
            color: white;
            font-size: clamp(60px, 9vw, 120px);
            line-height: 0.85;
            font-weight: 900;
            font-style: italic;
            letter-spacing: -5px;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .subtitle {
            margin-top: 28px;
            color: white;
            font-size: clamp(14px, 2vw, 21px);
            font-weight: 800;
            letter-spacing: 3px;
        }

        .buttons {
            display: flex;
            gap: 18px;
            margin-top: 38px;
        }

        .btn {
            min-width: 115px;
            padding: 13px 25px;
            background: white;
            color: #3152dc;
            border-radius: 12px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 1px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .wave {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 100px;
            background: #eef3ff;
            clip-path: ellipse(65% 45% at 50% 100%);
        }

        .tentang-kami {
            width: 100%;
            padding: 60px 50px;
            background: #eef3ff;
        }

        .tentang-header {
            width: 100%;
            max-width: 900px;
            margin: 0 auto 45px;
            text-align: center;
        }

        .tentang-header h2 {
            margin: 60px 0 25px;
            color: #111;
            font-size: 32px;
            font-weight: 900;
            line-height: 1.2;
            letter-spacing: 1px;
        }

        .tentang-header p {
            margin: 0;

            color: #333;
            font-size: 16px;
            line-height: 1.8;
        }

        .tentang-stats {
            position: relative;
            width: 100vw;
            max-width: none;
            min-height: 300px;
            margin-left: calc(50% - 50vw);
            padding: 40px 50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            justify-items: center;
            gap: 20px;

            background-image:
                linear-gradient(rgba(31, 57, 211, 0.80),
                    rgba(31, 57, 211, 0.80)),
                url("/images/fotokelas.jpeg");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 0;
            overflow: hidden;
            box-shadow: none;
        }

        .stat-item {
            width: 100%;
            text-align: center;
            color: white;
        }

        .stat-item h3 {
            margin: 0 0 12px;
            color: white;
            font-size: clamp(35px, 6vw, 55px);
            font-weight: 900;
            line-height: 1;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-item span {
            display: block;
            color: white;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .siswa-container {
            width: 100%;
            padding: 10px 50px;
            scroll-margin-top: 20px;
        }

        .siswa-container>h2 {
            margin: 50px 0;
            color: #111;
            font-size: 32px;
            font-weight: 900;
            line-height: 1.2;
            text-align: center;
        }

        .siswa-grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 24px;
        }

        .siswa-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
        }

        .siswa-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .siswa-image {
            width: 100%;
            height: 220px;
            display: block;
            object-fit: cover;
        }

        .siswa-card-body {
            padding: 18px;
            min-height: 130px;
        }

        .siswa-name {
            margin: 0 0 15px;

            font-size: 18px;
            font-weight: 700;
            color: #222;
        }

        .siswa-action {
            width: 100%;
        }

        .siswa-button {
            display: block;
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #3152dc;
            border-radius: 8px;
            color: #3152dc;
            text-align: center;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: 0.3s ease;
        }

        .siswa-button:hover {
            background: #3152dc;
            color: white;
        }

        /* TABLET */

        @media (max-width: 1200px) {

            .siswa-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

        }

        /* TABLET KECIL */

        @media (max-width: 900px) {

            .siswa-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

        }

        /* RESPONSIVE HP */

        @media (max-width: 768px) {

            nav {
                height: 75px;
                padding: 0 25px;
            }

            .logo {
                font-size: 17px;
            }

            .nav-links {
                display: none;
            }

            .login-btn {
                padding: 10px 18px;
            }

            .hero-content {
                padding-bottom: 100px;
            }

            .hero h1 {
                font-size: 58px;
                letter-spacing: -3px;
                line-height: 0.95;
            }

            .subtitle {
                font-size: 12px;
                letter-spacing: 2px;
            }

            .buttons {
                gap: 10px;
            }

            .tentang-kami {
                padding: 40px 20px;
            }

            .tentang-header {
                margin-bottom: 30px;
            }

            .tentang-header h2 {
                font-size: 28px;
            }

            .tentang-header p {
                font-size: 14px;
                line-height: 1.7;
            }

            .tentang-stats {
                min-height: 230px;
                padding: 25px 10px;
                gap: 5px;

                border-radius: 10px;
            }

            .stat-item h3 {
                font-size: 38px;
            }

            .stat-item span {
                font-size: 11px;
                letter-spacing: 1px;
            }
        }

        /*HP KECIL*/

        @media (max-width: 600px) {

            .siswa-container {
                padding: 25px 15px;
            }

            .siswa-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 15px;
            }

            .siswa-image {
                height: 180px;
            }

            .siswa-card-body {
                padding: 12px;
            }

            .siswa-name {
                font-size: 15px;
            }

            .siswa-container>h2 {
                font-size: 25px;
                margin: 30px 0;
            }

            .buttons {
                flex-wrap: wrap;
                justify-content: center;
            }

            .btn {
                min-width: 95px;
                padding: 12px 15px;
                font-size: 10px;
            }
        }

        @media (max-width: 400px) {

            .stat-item h3 {
                font-size: 32px;
            }

            .stat-item span {
                font-size: 10px;
                letter-spacing: 0.5px;
            }

            .tentang-stats {
                min-height: 200px;
            }
        }

        .modal-content {
            border: 0;
            border-radius: 15px;
            box-shadow: 0 5px 5px 5px rgb(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .modal-body {
            padding: 40px;
        }

        .modal-short-line {
            border: none;
            border-top: 2px solid #2C3947;
            width: 420px;
            margin: 0 0 16px 0;
        }


        .moment {
            padding: 60px 6%;
            text-align: center;
        }

        .moment h2 {
            color: #2545d8;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .moment-subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .slider {
            position: relative;
            max-width: 900px;
            height: 450px;
            margin: auto;
            overflow: hidden;
            border-radius: 12px;
            background: #eaf0ff;
        }

        .foto-moment {
            display: none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .foto-moment.active {
            display: block;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;

            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;

            background: rgba(0, 0, 0, 0.45);
            color: white;
            font-size: 22px;
            cursor: pointer;
            transition: 0.3s;
        }

        .arrow:hover {
            background: rgba(31, 57, 211, 0.9);
        }

        .left {
            left: 15px;
        }

        .right {
            right: 15px;
        }

        .moment-empty {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
        }

        @media (max-width: 768px) {
            .slider {
                height: 250px;
            }

            .moment h2 {
                font-size: 23px;
            }

            .arrow {
                width: 36px;
                height: 36px;
                font-size: 18px;
            }
        }

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

        .nav-links-nav {
            display: flex;
            gap: 45px;
            list-style: none;
            margin-bottom: 0;
        }

        .nav-links-nav a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: 0.3s;
        }
    </style>
</head>

<body>
    <section class="hero">

        <nav>
            <div class="logo">Techsoftone</div>

            <ul class="nav-links-nav">
                <li><a href="#siswa">STUDENTS</a></li>
                <li><a href="#tentang">ABOUT US</a></li>
                <li><a href="#momen">MOMENTS</a></li>
            </ul>

            @if (session()->has('key'))
                <div>
                    <a href="/home" class="login-btn">ADMIN</a>
                    <a href="/logout" class="login-btn">LOGOUT</a>
                </div>
            @else
                <a href="/login" class="login-btn">LOGIN</a>
            @endif
        </nav>

        <div class="hero-content">
            <div class="small-title">KELAS INDUSTRI XII RPL 1</div>

            <h1>WEBSITE<br>TECHSOFTONE</h1>
            <p class="subtitle">CREATIVE SOFTWARE ENGINEERING</p>

            <div class="buttons">
                <a href="#siswa" class="btn">STUDENTS</a>
                <a href="#tentang" class="btn">ABOUT US</a>
                <a href="#momen" class="btn">MOMENTS</a>
            </div>
        </div>
        <div class="wave"></div>
    </section>

    <section id="tentang" class="tentang-kami">

        <div class="tentang-header">
            <h2>TENTANG KAMI</h2>
            <p>
                Kami adalah keluarga besar XII RPL 1, kelas industri
                Rekayasa Perangkat Lunak yang kreatif, inovatif, dan
                penuh semangat. Bersama-sama kami belajar, berkarya,
                dan mengembangkan kemampuan di bidang teknologi
                untuk meraih masa depan yang lebih baik.
            </p>
        </div>

        <div class="tentang-stats">
            <div class="stat-item">
                <h3>20</h3>
                <span>BOYS</span>
            </div>

            <div class="stat-item">
                <h3>36</h3>
                <span>STUDENTS</span>
            </div>

            <div class="stat-item">
                <h3>16</h3>
                <span>GIRLS</span>
            </div>
        </div>
    </section>

    <div class="siswa-container" id="siswa">

        <h2>STUDENTS XII RPL 1</h2>

        <div class="siswa-grid">

            @foreach ($siswa as $s)
                <div class="siswa-item">
                    <div class="siswa-card">
                        <img src="{{ url('storage/' . $s->image) }}" alt="{{ $s->nama_lengkap }}" class="siswa-image">
                        <div class="siswa-card-body">
                            <h2 class="siswa-name">{{ $s->nama_lengkap }}</h2>
                            <div class="siswa-action">
                                <button type="button" class="siswa-button" data-bs-toggle="modal"
                                    data-bs-target="#modalSiswa{{ $s->id }}">
                                    Selengkapnya...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalSiswa{{ $s->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-0 pb-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="d-flex gap-5 align-items-start mb-3">
                                    <img src="{{ url('storage/' . $s->image) }}" alt="" height="300px">
                                    <div>
                                        <h2 class="mb-4">{{ $s->nama_lengkap }}</h2>
                                        <p class="mb-4"><strong>Tempat, Tanggal Lahir :</strong>
                                            {{ $s->tempat_lahir }}, {{ $s->tgl_lahir }}</p>
                                        <hr class="modal-short-line">
                                        <p class="mb-4"><strong>Hobi :</strong> {{ $s->hobi }}</p>
                                        <hr class="modal-short-line">
                                        <p class="mb-4"><strong>Sosmed :</strong> {{ $s->sosmed }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <section class="moment" id="momen">
        <h2>MOMENTS WITH XII RPL 1</h2>

        <p class="moment-subtitle">Kenangan, cerita, dan kebersamaan kita.</p>

        <div class="slider">

            @forelse ($moment as $m)
                <img src="{{ asset('storage/' . $m->image) }}" class="foto-moment {{ $loop->first ? 'active' : '' }}"
                    alt="{{ $m->judul ?? 'Moment XII RPL 1' }}">
            @empty
                <div class="moment-empty">Belum ada foto Moment yang diupload.</div>
            @endforelse

            @if ($moment->count() > 1)
                <button class="arrow left" type="button" onclick="geserFoto(-1)">&#10094;</button>
                <button class="arrow right" type="button" onclick="geserFoto(1)">&#10095;</button>
            @endif

        </div>
    </section>

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

    <script>
        let indexFoto = 0;

        function geserFoto(arah) {
            const foto = document.querySelectorAll('.foto-moment');

            if (foto.length === 0) {
                return;
            }

            foto[indexFoto].classList.remove('active');

            indexFoto += arah;

            if (indexFoto >= foto.length) {
                indexFoto = 0;
            }

            if (indexFoto < 0) {
                indexFoto = foto.length - 1;
            }

            foto[indexFoto].classList.add('active');
        }
    </script>

</body>

</html>
