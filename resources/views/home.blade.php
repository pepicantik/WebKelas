@extends('layouts.app')

@section('title', 'Home | Portal Berita')

@section('konten')

<style>
    body {
        background: #f5f6fb;
    }

    .dashboard-content {
        padding: 30px;
    }

    /* =========================
       MAIN LAYOUT
    ========================= */

    .dashboard-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 290px;
        gap: 20px;
        align-items: stretch;
    }

    .left-content,
    .right-content {
        min-width: 0;
    }

    .right-content {
        display: flex;
    }

    /* =========================
       WELCOME
    ========================= */

    .welcome-card {
        background: linear-gradient(120deg, #e9efff, #f8f9ff);
        border-radius: 18px;
        padding: 30px;
        min-height: 190px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
        display: flex;
        align-items: center;
        justify-content: space-between;

        overflow: hidden;
    }

    .welcome-text small {
        color: #3157d5;
        font-size: 11px;
        font-weight: 700;
    }

    .welcome-text h1 {
        font-size: 26px;
        font-weight: 700;
        margin: 8px 0;
        color: #252b42;
    }

    .welcome-text p {
        color: #777d91;
        font-size: 12px;
        max-width: 450px;
        margin-bottom: 18px;
    }

    .btn-jadwal {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        background: #3157d5;
        color: white;
        text-decoration: none;

        padding: 10px 18px;
        border-radius: 8px;

        font-size: 11px;
    }

    .btn-jadwal:hover {
        background: #2448c0;
        color: white;
    }

    /* =========================
       WELCOME ILLUSTRATION
    ========================= */

    .welcome-image {
        width: 200px;
        height: 140px;

        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;
    }

    .welcome-image i {
        font-size: 75px;
        color: #3157d5;
        z-index: 5;
    }

    .book {
        width: 110px;
        height: 25px;

        position: absolute;
        border-radius: 5px;
    }

    .book-1 {
        background: #3157d5;
        transform: rotate(8deg);
        bottom: 20px;
    }

    .book-2 {
        background: #ff879c;
        transform: rotate(-5deg);
        bottom: 42px;
    }

    .book-3 {
        background: #7c8ff0;
        transform: rotate(8deg);
        bottom: 64px;
    }

    /* =========================
       SECTION HEADER
    ========================= */

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-top: 25px;
        margin-bottom: 15px;
    }

    .section-header h3 {
        font-size: 20px;
        margin: 0;
        font-weight: 700;
        color: #252b42;
    }

    .section-header p {
        font-size: 15px;
        color: #999eaf;
        margin: 5px 0 0;
    }

    /* =========================
       STUDENT STATISTICS
    ========================= */

    .student-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .student-card {
        background: white;
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
    }

    .student-icon {
        width: 50px;
        height: 50px;
        margin: 0 auto 10px;

        border-radius: 14px;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 22px;

        background: #edf1ff;
        color: #3157d5;
    }

    .student-card h2 {
        font-size: 25px;
        font-weight: 700;
        color: #252b42;
        margin: 0;
    }

    .student-card p {
        font-size: 13px;
        color: #777d91;
        margin: 5px 0 0;
    }

    .student-card small {
        font-size: 12px;
        color: #9da1b0;
    }

    /* =========================
       DEVELOPER
    ========================= */

    .developer-section {
        background: white;
        border-radius: 18px;
        padding: 22px;

        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
    }

    .developer-title {
        margin-bottom: 18px;
    }

    .developer-title h3 {
        font-size: 16px;
        font-weight: 700;
        color: #252b42;
        margin: 0 0 5px;
    }

    .developer-title p {
        font-size: 10px;
        color: #9da1b0;
        margin: 0;
    }

    .developer-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .developer-card {
        border: 1px solid #edf0f6;
        border-radius: 15px;

        padding: 18px;

        display: flex;
        align-items: center;
        gap: 15px;

        background: #fafbff;
    }

    .developer-photo {
        width: 100px;
        height: 100px;

        border-radius: 50%;
        object-fit: cover;

        border: 4px solid #edf1ff;

        flex-shrink: 0;
    }

    .developer-info h3 {
        font-size: 15px;
        font-weight: 700;

        color: #252b42;

        margin: 0 0 4px;
    }

    .developer-role {
        font-size: 11px;
        color: #3157d5;

        font-weight: 600;

        margin-bottom: 7px;
    }

    .developer-info p {
        font-size: 12px;
        color: #777d91;

        margin: 0;

        line-height: 1.5;
    }

    /* =========================
       WALI KELAS
    ========================= */

    .teacher-card {
        background: white;
        border-radius: 18px;

        width: 100%;
        height: 100%;

        padding: 25px 20px;

        text-align: center;

        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
    }

    .teacher-label {
        display: inline-block;

        background: #edf1ff;
        color: #3157d5;

        padding: 6px 12px;

        border-radius: 20px;

        font-size: 9px;
        font-weight: 600;

        margin-bottom: 15px;
    }

    .teacher-photo {
        width: 105px;
        height: 105px;

        border-radius: 50%;

        object-fit: cover;

        border: 5px solid #edf1ff;

        margin-bottom: 12px;
    }

    .teacher-card h3 {
        font-size: 16px;
        font-weight: 700;

        color: #252b42;

        margin-bottom: 4px;
    }

    .teacher-role {
        color: #3157d5;

        font-size: 10px;
        font-weight: 600;

        margin-bottom: 22px;
    }

    .teacher-info {
        text-align: left;

        border-top: 1px solid #eeeeee;

        padding-top: 18px;
    }

    .teacher-info-item {
        margin-bottom: 15px;
    }

    .teacher-info-item:last-child {
        margin-bottom: 0;
    }

    .teacher-info-item small {
        display: block;

        font-size: 15px;
        color: #9da1b0;

        margin-bottom: 4px;
    }

    .teacher-info-item p {
        font-size: 13px;

        color: #33394e;

        font-weight: 500;

        margin: 0;

        line-height: 1.5;
    }

    .teacher-info-item i {
        color: #3157d5;
        margin-right: 5px;
    }
    .profile-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.wali-kelas {
    background: #eef2ff;
    color: #3159d8;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.profile-header img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
}

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px) {

        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .right-content {
            display: block;
        }

        .teacher-card {
            height: auto;
        }
    }

    @media (max-width: 800px) {

        .student-stats {
            grid-template-columns: 1fr;
        }

        .developer-list {
            grid-template-columns: 1fr;
        }

        .welcome-image {
            display: none;
        }
    }

    @media (max-width: 600px) {

        .dashboard-content {
            padding: 20px 15px;
        }

        .welcome-card {
            padding: 25px;
        }
    }
</style>


<div class="dashboard-content">

    <div class="dashboard-grid">

        <!-- =================================================
             KOLOM KIRI
        ================================================== -->

        <div class="left-content">

            <!-- WELCOME -->

            <div class="welcome-card">

                <div class="welcome-text">

                    <small>SELAMAT DATANG </small>

                    <h1>Halo, Admin!</h1>

                    <p>
                        Selamat datang di halaman kelas.
                        Yuk cek informasi kelas dan data
                        website kamu hari ini.
                    </p>

                </div>


                <div class="welcome-image">

                    <div class="book book-1"></div>

                    <div class="book book-2"></div>

                    <div class="book book-3"></div>

                    <i class="bi bi-mortarboard-fill"></i>

                </div>

            </div>


            <!-- =========================
                 DATA SISWA
            ========================== -->

            <div class="section-header">

                <div>

                    <h3>Data Siswa</h3>

                    <p>
                        Statistik siswa kelas XII RPL 1
                    </p>

                </div>

            </div>


            <div class="student-stats">

                <!-- LAKI-LAKI -->

                <div class="student-card">

                    <div class="student-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <h2>20</h2>

                    <p>Laki-laki</p>

                    <small>Siswa</small>

                </div>


                <!-- TOTAL -->

                <div class="student-card">

                    <div class="student-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h2>36</h2>

                    <p>Total Siswa</p>

                    <small>XII RPL 1</small>

                </div>


                <!-- PEREMPUAN -->

                <div class="student-card">

                    <div class="student-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <h2>16</h2>

                    <p>Perempuan</p>

                    <small>Siswi</small>

                </div>

            </div>


            <!-- =========================
                 DEVELOPER
            ========================== -->

            <div class="section-header">

                <div>

                    <h3>Data Developer Web</h3>

                    <p>
                        Informasi pengembang website
                    </p>

                </div>

            </div>


            <div class="developer-section">

                <div class="developer-title">

                    <h3>Developer Website</h3>

                    <p>
                        Website ini dikembangkan oleh 2 orang developer.
                    </p>

                </div>


                <div class="developer-list">

                    <!-- DEVELOPER 1 -->

                    <div class="developer-card">

                        <img
                            src="{{ asset('image/pepi.jpeg') }}"
                            alt="Developer 1"
                            class="developer-photo"
                        >

                        <div class="developer-info">

                            <h3>Eka Defiyanti</h3>

                            <div class="developer-role">
                                Frontend & UI/UX Developer
                            </div>

                            <p>
                                Bertanggung jawab dalam pembuatan
                                tampilan antarmuka dan pengembangan
                                bagian frontend website.
                            </p>

                        </div>

                    </div>


                    <!-- DEVELOPER 2 -->

                    <div class="developer-card">

                        <img
                            src="{{ asset('image/pepi.jpeg') }}"
                            alt="Developer 2"
                            class="developer-photo"
                        >

                        <div class="developer-info">

                            <h3>Verra Dwi Adelya Oktavia</h3>

                            <div class="developer-role">
                                Backend Developer
                            </div>

                            <p>
                                Bertanggung jawab dalam pengembangan
                                sistem backend, database, serta
                                integrasi fitur website.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             KOLOM KANAN - WALI KELAS
        ================================================== -->

        <div class="right-content">

            <div class="teacher-card">

                <div class="profile-header">

                    <img src="{{ asset('image/juhon.jpg') }}"alt="Foto Guru" class="teacher-photo">

                    <span class="teacher-label">WALI KELAS</span>
                </div>

                <h3>
                    Budi Santoso, S.Kom.
                </h3>


                <div class="teacher-role">
                    Guru & Wali Kelas XII RPL 1
                </div>


                <div class="teacher-info">

                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-person-badge"></i>
                            NIP
                        </small>

                        <p>
                            198705152010011001
                        </p>

                    </div>


                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-calendar3"></i>
                            Tanggal Lahir
                        </small>

                        <p>
                            Probolinggo, 15 Mei 1987
                        </p>

                    </div>


                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-geo-alt"></i>
                            Alamat
                        </small>

                        <p>
                            Jl. Diponegoro No. 25,
                            Kraksaan, Probolinggo
                        </p>

                    </div>


                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-book"></i>
                            Mata Pelajaran
                        </small>

                        <p>
                            Pemrograman Web
                        </p>

                    </div>


                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-envelope"></i>
                            Email
                        </small>

                        <p>
                            budisantoso@sekolah.sch.id
                        </p>

                    </div>


                    <div class="teacher-info-item">

                        <small>
                            <i class="bi bi-telephone"></i>
                            No. Telepon
                        </small>

                        <p>
                            0812-3456-7890
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
