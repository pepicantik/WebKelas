<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      position: relative;
      min-height: 100vh;
      overflow: hidden;
      margin-bottom: 10px;

      background-image:
        linear-gradient(
          to bottom,
          rgba(31, 57, 211, 0.92) 0%,
          rgba(42, 70, 220, 0.85) 45%,
          rgba(91, 128, 245, 0.65) 75%,
          rgba(238, 243, 255, 1) 100%
        ),
        url("images/fotokelas.jpeg");

      background-size: cover;
      background-position: center;
    }

    nav {
      position: relative;
      z-index: 10;
      width: 100%;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 6%;
      background: rgba(42, 69, 220, 0.379);
      box-shadow: 0 10px 20px 10px rgba(0, 0, 0, 0.05);
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

    h1 {
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

    /* WAVE DI BAWAH */
    .wave {
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 100%;
      height: 100px;
      background: #eef3ff;
      clip-path: ellipse(65% 45% at 50% 100%);
    }

    /* =========================
    CONTAINER
    ========================= */

    .siswa-container {
        width: 100%;
        padding: 40px 50px;
    }


    /* =========================
    GRID
    ========================= */

    .siswa-grid {
        display: grid;

        grid-template-columns: repeat(6, 1fr);

        gap: 24px;
    }


    /* =========================
    CARD
    ========================= */

    .siswa-card {
        background: #ffffff;

        border-radius: 12px;

        overflow: hidden;

        box-shadow:
            0 4px 15px rgba(0, 0, 0, 0.08);

        transition: 0.3s ease;
    }

    .siswa-card:hover {
        transform: translateY(-6px);

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.15);
    }


    /* =========================
    IMAGE
    ========================= */

    .siswa-image {
        width: 100%;
        height: 220px;

        display: block;

        object-fit: cover;
    }


    /* =========================
    CARD BODY
    ========================= */

    .siswa-card-body {
        padding: 18px;
    }


    /* =========================
    NAME
    ========================= */

    .siswa-name {
        margin: 0 0 15px;

        font-size: 18px;
        font-weight: 700;

        color: #222;
    }


    /* =========================
    BUTTON
    ========================= */

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


    /* =========================
    TABLET
    ========================= */

    @media (max-width: 1200px) {

        .siswa-grid {
            grid-template-columns: repeat(4, 1fr);
        }

    }


    /* =========================
    TABLET KECIL
    ========================= */

    @media (max-width: 900px) {

        .siswa-grid {
            grid-template-columns: repeat(3, 1fr);
        }

    }


    /* =========================
    HP
    ========================= */

    @media (max-width: 600px) {

        .siswa-container {
            padding: 25px 15px;
        }

        .siswa-grid {
            grid-template-columns: repeat(2, 1fr);
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

    }


    /* RESPONSIVE */
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

      h1 {
        font-size: 58px;
        letter-spacing: -3px;
      }

      .subtitle {
        font-size: 12px;
        letter-spacing: 2px;
      }

      .buttons {
        gap: 10px;
      }
    }
  </style>
</head>

<body>
  <section class="hero">
    <nav class="navbar navbar-dark bg-dark">
      <div class="logo">Techsoftone</div>

      {{-- <ul class="nav-links">
        <li><a href="#">HOME</a></li>
        <li><a href="#">STUDENTS</a></li>
        <li><a href="#">GALLERY</a></li>
      </ul> --}}

      <a href="/login" class="login-btn">LOGIN</a>
    </nav>

    <div class="hero-content">

      <div class="small-title">KELAS INDUSTRI XII RPL 1</div>
      <h1>WEBSITE<br>TECHSOFTONE</h1>
      <p class="subtitle">CREATIVE SOFTWARE ENGINEERING</p>

      <div class="buttons">
        <a href="#siswa" class="btn">STUDENTS</a>
        <a href="#" class="btn">MOMENTS</a>
      </div>
    </div>
</section>

<div class="siswa-container" id="siswa">

    <div class="siswa-grid">
        @foreach($siswa as $s)
            <div class="siswa-item">
                <div class="siswa-card">
                    <img src="{{ url('storage/' . $s->image) }}" alt="{{ $s->nama_lengkap }}" class="siswa-image">
                    <div class="siswa-card-body">
                        <h2 class="siswa-name">{{ $s->nama_lengkap }}</h2>
                        <div class="siswa-action">
                            <a href="{{ route('siswa.show', $s->id) }}" class="siswa-button">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>