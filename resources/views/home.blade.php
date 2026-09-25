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
        align-items: start;
    }

    .left-content,
    .right-content {
        min-width: 0;
    }


    /* =========================
       WELCOME
    ========================= */

    .welcome-card {
        background: linear-gradient(120deg, #e9efff, #f8f9ff);
        border-radius: 18px;
        padding: 30px;
        min-height: 190px;

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
       PROFILE
    ========================= */

    .profile-card {
        background: white;
        border-radius: 18px;

        padding: 20px;

        min-height: 190px;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        text-align: center;
    }

    .profile-card img {
        width: 65px;
        height: 65px;

        border-radius: 50%;
        object-fit: cover;

        margin-bottom: 8px;
    }

    .profile-card h4 {
        font-size: 13px;
        margin: 4px 0;
        color: #252b42;
    }

    .profile-card p {
        font-size: 9px;
        color: #999eaf;
        margin-bottom: 10px;
    }

    .profile-card button {
        border: none;

        background: #3157d5;
        color: white;

        border-radius: 7px;

        padding: 7px 18px;

        font-size: 9px;
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
        font-size: 17px;
        margin: 0;
        font-weight: 700;
        color: #252b42;
    }

    .section-header p {
        font-size: 10px;
        color: #999eaf;
        margin: 5px 0 0;
    }

    .section-header a {
        text-decoration: none;
        color: #3157d5;
        font-size: 10px;
    }


    /* =========================
       CLASS
    ========================= */

    .class-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .class-card {
        color: white;

        border-radius: 15px;

        padding: 18px;

        min-height: 145px;
    }

    .class-card.blue {
        background: linear-gradient(135deg, #3157d5, #5775df);
    }

    .class-card.purple {
        background: linear-gradient(135deg, #7769c9, #9b90df);
    }

    .class-card.pink {
        background: linear-gradient(135deg, #ed7186, #f49aac);
    }

    .class-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .class-top span {
        background: rgba(255,255,255,.2);

        padding: 5px 9px;

        border-radius: 5px;

        font-size: 9px;
    }

    .class-top button {
        border: none;
        background: transparent;
        color: white;
    }

    .class-card h4 {
        font-size: 15px;
        margin-top: 17px;
        margin-bottom: 4px;
    }

    .class-card p {
        font-size: 9px;
        opacity: .8;
        margin: 0;
    }

    .class-bottom {
        display: flex;
        justify-content: space-between;

        margin-top: 18px;

        font-size: 9px;
        opacity: .9;
    }


    /* =========================
       CALENDAR
    ========================= */

    .calendar-card {
        background: white;
        border-radius: 18px;

        padding: 18px;

        margin-top: 20px;
    }

    .calendar-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .calendar-title h4 {
        font-size: 12px;
        margin: 0;
    }

    .calendar-title button {
        border: none;
        background: transparent;

        font-size: 10px;
        color: #777d91;
    }

    .calendar-days,
    .calendar-date {
        display: grid;
        grid-template-columns: repeat(7, 1fr);

        text-align: center;
    }

    .calendar-days {
        margin-top: 18px;
        margin-bottom: 8px;

        color: #a2a6b5;
        font-size: 8px;
    }

    .calendar-date {
        gap: 5px;
    }

    .calendar-date span {
        height: 25px;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 8px;

        color: #62677a;

        border-radius: 50%;
    }

    .calendar-date .today {
        background: #3157d5;
        color: white;
    }


    /* =========================
       JADWAL
    ========================= */

    .lesson-table {
        background: white;
        border-radius: 14px;

        overflow: hidden;
    }

    .table-head,
    .lesson-row {
        display: grid;

        grid-template-columns:
            1.6fr
            1fr
            1.2fr
            1fr
            .8fr;

        align-items: center;
    }

    .table-head {
        background: #fafbfe;

        padding: 13px 15px;

        font-size: 9px;
        color: #999eaf;

        font-weight: 600;
    }

    .lesson-row {
        padding: 13px 15px;

        border-top: 1px solid #f0f1f5;

        font-size: 9px;

        color: #777d91;
    }

    .subject {
        display: flex;
        align-items: center;
        gap: 10px;

        color: #33394e;
    }

    .subject-icon {
        width: 30px;
        height: 30px;

        border-radius: 8px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blue-icon {
        background: #e7edff;
        color: #3157d5;
    }

    .purple-icon {
        background: #eeeaff;
        color: #7769c9;
    }

    .pink-icon {
        background: #ffe9ed;
        color: #ed7186;
    }

    .status {
        padding: 5px 7px;

        border-radius: 5px;

        font-size: 8px;

        text-align: center;
    }

    .done {
        background: #e5f8ef;
        color: #24a26a;
    }

    .ongoing {
        background: #fff1d9;
        color: #d98b00;
    }

    .upcoming {
        background: #edf1ff;
        color: #3157d5;
    }


    /* =========================
       REMINDER
    ========================= */

    .reminder-card {
        background: white;

        border-radius: 18px;

        padding: 18px;

        margin-top: 20px;
    }

    .reminder-title {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 15px;
    }

    .reminder-title h4 {
        font-size: 12px;
        margin: 0;
    }

    .reminder-title i {
        color: #999;
    }

    .reminder {
        display: flex;
        gap: 10px;

        padding: 10px 0;

        border-bottom: 1px solid #f0f1f5;
    }

    .reminder:last-child {
        border-bottom: none;
    }

    .reminder-icon {
        width: 28px;
        height: 28px;

        border-radius: 7px;

        background: #edf1ff;
        color: #3157d5;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 12px;
    }

    .reminder strong {
        display: block;

        font-size: 9px;

        margin-bottom: 4px;
    }

    .reminder small {
        font-size: 8px;
        color: #999eaf;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px) {

        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .right-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .calendar-card,
        .reminder-card {
            margin-top: 0;
        }

    }

    @media (max-width: 800px) {

        .class-grid {
            grid-template-columns: 1fr;
        }

        .welcome-image {
            display: none;
        }

        .lesson-row {
            grid-template-columns: 1fr;
            gap: 8px;
        }

        .table-head {
            display: none;
        }

        .right-content {
            grid-template-columns: 1fr;
        }

    }

    @media (max-width: 600px) {

        .dashboard-content {
            padding: 20px 15px;
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

                    <small>SELAMAT DATANG 👋</small>

                    <h1>Halo, Eka!</h1>

                    <p>
                        Selamat datang di halaman kelas.
                        Yuk cek jadwal dan materi pembelajaranmu hari ini.
                    </p>

                    <a href="#" class="btn-jadwal">
                        Lihat Jadwal
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


                <div class="welcome-image">

                    <div class="book book-1"></div>

                    <div class="book book-2"></div>

                    <div class="book book-3"></div>

                    <i class="bi bi-mortarboard-fill"></i>

                </div>

            </div>


            <!-- KELAS -->

            <div class="section-header">

                <div>

                    <h3>Kelas Saya</h3>

                    <p>
                        Daftar kelas yang sedang kamu ikuti
                    </p>

                </div>

                <a href="#">
                    Lihat Semua
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="class-grid">


                <div class="class-card blue">

                    <div class="class-top">

                        <span>RPL</span>

                        <button>
                            <i class="bi bi-three-dots"></i>
                        </button>

                    </div>

                    <h4>XII RPL 1</h4>

                    <p>
                        Rekayasa Perangkat Lunak
                    </p>

                    <div class="class-bottom">

                        <span>
                            <i class="bi bi-people-fill"></i>
                            32 Siswa
                        </span>

                        <span>
                            <i class="bi bi-book"></i>
                            8 Mapel
                        </span>

                    </div>

                </div>


                <div class="class-card purple">

                    <div class="class-top">

                        <span>WEB</span>

                        <button>
                            <i class="bi bi-three-dots"></i>
                        </button>

                    </div>

                    <h4>Pemrograman Web</h4>

                    <p>
                        HTML, CSS & Laravel
                    </p>

                    <div class="class-bottom">

                        <span>
                            <i class="bi bi-people-fill"></i>
                            32 Siswa
                        </span>

                        <span>
                            <i class="bi bi-book"></i>
                            12 Materi
                        </span>

                    </div>

                </div>


                <div class="class-card pink">

                    <div class="class-top">

                        <span>DB</span>

                        <button>
                            <i class="bi bi-three-dots"></i>
                        </button>

                    </div>

                    <h4>Basis Data</h4>

                    <p>
                        MySQL & Database
                    </p>

                    <div class="class-bottom">

                        <span>
                            <i class="bi bi-people-fill"></i>
                            32 Siswa
                        </span>

                        <span>
                            <i class="bi bi-book"></i>
                            10 Materi
                        </span>

                    </div>

                </div>


            </div>


            <!-- JADWAL -->

            <div class="section-header">

                <div>

                    <h3>Jadwal Pelajaran</h3>

                    <p>
                        Jadwal pembelajaran hari ini
                    </p>

                </div>

                <a href="#">
                    Lihat Semua
                </a>

            </div>


            <div class="lesson-table">


                <div class="table-head">

                    <span>Mapel</span>
                    <span>Guru</span>
                    <span>Jam</span>
                    <span>Ruangan</span>
                    <span>Status</span>

                </div>


                <div class="lesson-row">

                    <div class="subject">

                        <div class="subject-icon blue-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <strong>
                            Pemrograman Web
                        </strong>

                    </div>

                    <span>Pak Budi</span>

                    <span>07.00 - 08.30</span>

                    <span>Lab RPL 1</span>

                    <span class="status done">
                        Selesai
                    </span>

                </div>


                <div class="lesson-row">

                    <div class="subject">

                        <div class="subject-icon purple-icon">
                            <i class="bi bi-database"></i>
                        </div>

                        <strong>
                            Basis Data
                        </strong>

                    </div>

                    <span>Bu Sinta</span>

                    <span>08.30 - 10.00</span>

                    <span>Lab RPL 2</span>

                    <span class="status ongoing">
                        Berlangsung
                    </span>

                </div>


                <div class="lesson-row">

                    <div class="subject">

                        <div class="subject-icon pink-icon">
                            <i class="bi bi-palette"></i>
                        </div>

                        <strong>
                            UI / UX
                        </strong>

                    </div>

                    <span>Bu Rina</span>

                    <span>10.15 - 11.45</span>

                    <span>Lab RPL 1</span>

                    <span class="status upcoming">
                        Akan Datang
                    </span>

                </div>


            </div>

        </div>


        <!-- =================================================
             KOLOM KANAN
        ================================================== -->

        <div class="right-content">


            <!-- PROFILE -->

            <div class="profile-card">

                <img src="https://i.pravatar.cc/150?img=47">

                <h4>Eka Defiyanti</h4>

                <p>XII RPL 1</p>

                <button>
                    Lihat Profil
                </button>

            </div>


            <!-- CALENDAR -->

            <div class="calendar-card">

                <div class="calendar-title">

                    <h4>
                        September 2026
                    </h4>

                    <div>

                        <button>
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <button>
                            <i class="bi bi-chevron-right"></i>
                        </button>

                    </div>

                </div>


                <div class="calendar-days">

                    <span>Min</span>
                    <span>Sen</span>
                    <span>Sel</span>
                    <span>Rab</span>
                    <span>Kam</span>
                    <span>Jum</span>
                    <span>Sab</span>

                </div>


                <div class="calendar-date">

                    <span></span>
                    <span></span>

                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>

                    <span>6</span>
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                    <span>11</span>
                    <span>12</span>

                    <span>13</span>
                    <span>14</span>
                    <span>15</span>

                    <span class="today">16</span>

                    <span>17</span>
                    <span>18</span>
                    <span>19</span>

                    <span>20</span>
                    <span>21</span>
                    <span>22</span>
                    <span>23</span>
                    <span>24</span>
                    <span>25</span>
                    <span>26</span>

                    <span>27</span>
                    <span>28</span>
                    <span>29</span>
                    <span>30</span>

                </div>

            </div>


            <!-- REMINDER -->

            <div class="reminder-card">

                <div class="reminder-title">

                    <h4>
                        Pengingat
                    </h4>

                    <i class="bi bi-three-dots"></i>

                </div>


                <div class="reminder">

                    <div class="reminder-icon">
                        <i class="bi bi-bell"></i>
                    </div>

                    <div>

                        <strong>
                            Tugas Basis Data
                        </strong>

                        <small>
                            Hari ini, 23:59
                        </small>

                    </div>

                </div>


                <div class="reminder">

                    <div class="reminder-icon">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <div>

                        <strong>
                            Ujian Pemrograman
                        </strong>

                        <small>
                            27 September 2026
                        </small>

                    </div>

                </div>


                <div class="reminder">

                    <div class="reminder-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <div>

                        <strong>
                            Kumpulkan Project
                        </strong>

                        <small>
                            30 September 2026
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection