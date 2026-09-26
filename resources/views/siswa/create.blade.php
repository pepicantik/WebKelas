@extends('layouts.app')
@section('title', 'Techsoftone')

@section('konten')

<style>
    .card-body{
        padding: 40px;
    }
    .custom-card{
        border: 0;
        background-color: #ffff;
        border-radius: 15px;
        box-shadow: 0 10px 20px 10px rgb(0, 0, 0, 0.05);
        overflow: hidden;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
    }
    .custom-card-header{
        padding: 25px 20px;
        border-bottom: none;
    }
    .custom-label{
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        text-align: left;
        display: block;
    }
    .custom-input{
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 12px 15px;
    }
    .custom-input[type="file"]{
        padding: 10px 15px;
    }
    .custom-input[type="file"]::file-selector-button{
        background-color: #EAECF0;
        color: #0C2C55;
        border: none;
        border-radius: 7px;
        padding: 8px 16px;
        font-weight: 600;
        margin-right: 12px;
        cursor: pointer;
    }
    .custom-input[type="file"]::file-selector-button:hover{
        background-color: #0C2C55;
    }
    .btn-submit{
        background-color: #0C2C55;
        font-weight: 600;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        border: none;
        color: #e5e7eb;
    }
    .btn-submit:hover{
        background-color: #3B7597;
        font-weight: 600;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        border: none;
        color: #e5e7eb;
    }
    .btn-back{
        font-weight: 600;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        border-color: #F2842F;
        color: #F2842F;
        border-width: 1px;
    }
    .btn-back:hover{
        background-color: #F2842F;
        font-weight: 600;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        color: #EAECF0;;
        border-width: 1px;
    }
    .custom-container{
        width: 100%;
        min-height: 100vh;
    }
</style>

<div class="container custom-container table-responsive">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card custom-card">
                <div class="card-body">

    <h1 class="mb-5">Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="" class="mb-1">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control mb-3 custom-input" placeholder="Masukkan Nama Lengkap Siswa" required>

        <label for="" class="mb-1">Gambar</label>
        <input type="file" name="image" class="form-control mb-3 custom-input" required>

        <label for="" class="mb-1">Motivasi</label>
        <textarea name="motivasi" id="" cols="30" rows="" class="form-control mb-3" placeholder="Isi Motivasi Siswa.."></textarea>

        <div class="row">

            <div class="col-md-6">
        <label for="" class="mb-1">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control mb-3 custom-input" placeholder="Masukkan Tempat Lahir Siswa" required>
            </div>

            <div class="col-md-6">
                <label for="" class="mb-1">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control mb-3 custom-input" required>
            </div>

            <div class="col-md-6">
        <label for="" class="mb-1">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-3 custom-input" placeholder="Masukkan Hobi Siswa" required>
            </div>

            <div class="col-md-6">
        <label for="" class="mb-1">Sosmed</label>
        <input type="text" name="sosmed" class="form-control mb-3 custom-input" placeholder="Masukkan Sosmed Siswa" required>
            </div>

        </div>


        <button type="submit" class="btn btn-submit">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-back">Kembali</a>
    </form>

    </div>
    </div>
    </div>
    </div>
</div>
@endsection
