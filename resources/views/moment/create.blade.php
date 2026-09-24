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
        padding: 12px;
        border-radius: 12px;
        border: none;
        color: #e5e7eb;
    }
    .btn-submit:hover{
        background-color: #0C2C55;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border: none;
        color: #EAECF0;
    }
    .btn-back{
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border-color: #F2842F;
        color: #F2842F;
        border-width: 2px;
    }
    .btn-back:hover{
        background-color: #F2842F;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        color: #EAECF0;;
        border-width: 2px;
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

    <h1 class="mb-5">Tambah Dokumentasi Moment Kelas</h1>
    <form action="{{route('moment.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <label class="custom-label">Tanggal Dokumentasi</label>
    <input class="form-control mb-3 mt-2 custom-input" type="date" name="tanggal" id="" required>

    <label class="custom-label">Dokumentasi Moment Kelas</label>
    <input class="form-control mb-3 mt-2 custom-input" type="file" name="image" id="" required>

    <button class="btn btn-submit form-control" type="submit">Simpan</button>
    <a href="{{ route('moment.index') }}" class="btn-back btn form-control mt-3">Kembali</a>
    </form>

    </div>
    </div>
    </div>
    </div>
</div>
@endsection
