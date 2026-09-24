<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi</title>

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
      margin-top: 70px;
      position: relative;
      min-height: 100vh;
      overflow: hidden;
      margin-bottom: 10px;
      background-image: linear-gradient(to bottom,
      rgba(31, 57, 211, 0.92) 0%,
      rgba(42, 70, 220, 0.85) 45%,
      rgba(91, 128, 245, 0.65) 75%,
      rgba(238, 243, 255, 1) 100%
      ),

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
        linear-gradient(
          rgba(31, 57, 211, 0.80),
          rgba(31, 57, 211, 0.80)
        ),
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

    .siswa-container > h2 {
      margin: 50px 0;

      color: #111;
      font-size: 30px;
      font-weight: 900;
      line-height: 1.2;
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

            .siswa-container > h2 {
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
    </style>
</head>

<body>
    <section class="hero">

        <nav class="navbar navbar-dark bg-dark">
            <div class="logo">Techsoftone</div>

            {{-- 
            <ul class="nav-links">
                <li><a href="#">HOME</a></li>
                <li><a href="#siswa">STUDENTS</a></li>
                <li><a href="#">GALLERY</a></li>
            </ul>
            --}}

            <a href="/login" class="login-btn">LOGIN</a>
        </nav>

        <div class="hero-content">
            <div class="small-title">KELAS INDUSTRI XII RPL 1</div>

            <h1>WEBSITE<br>TECHSOFTONE</h1>
            <p class="subtitle">CREATIVE SOFTWARE ENGINEERING</p>

            <div class="buttons">
              <a href="#siswa" class="btn">STUDENTS</a>
              <a href="#tentang" class="btn">ABOUT US</a>
              <a href="#" class="btn">MOMENTS</a>
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

        <h2>SISWA XII RPL 1</h2>

        <div class="siswa-grid">

            @foreach($siswa as $s)
                <div class="siswa-item">
                    <div class="siswa-card">
                        <img src="{{ url('storage/' . $s->image) }}" alt="{{ $s->nama_lengkap }}" class="siswa-image">
                        <div class="siswa-card-body">
                            <h2 class="siswa-name">{{ $s->nama_lengkap }}</h2>
                            <div class="siswa-action">
                                <a href="{{ route('siswa.show', $s->id) }}"class="siswa-button">Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>