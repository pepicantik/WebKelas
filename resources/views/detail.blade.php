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
        box-shadow: 0 5px 5px 5px rgb(0, 0, 0, 0.05);
        overflow: hidden;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
    }
    .custom-card-header{
        padding: 25px 20px;
        border-bottom: none;
    }
    .custom-container{
        width: 100%;
        min-height: 100vh;
    }
    .short-line{
        border: none;
        border-top: 2px solid #2C3947;
        width: 650px;
        margin: 0 0 16px 0;
    }
    .btn-back{
        font-weight: 600;
        border-radius: 8px;
        padding-left: 30px;
        padding-right: 30px;
        border-color: #FCAD38;
        color: #FCAD38;
        border-width: 2px;
    }
    .btn-back:hover{
        background-color: #FCAD38;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        color: #EAECF0;;
        border-width: 2px;
    }
</style>
<div class="container custom-container table-responsive">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card custom-card">
                <div class="card-body">
    <div class="d-flex gap-5 align-items-start mb-5">
        <img src="{{ url('storage/'. $siswa->image) }}" alt="" height="300px">
        <div>
            <h2 class="mb-4">{{ $siswa->nama_lengkap }}</h2>
            <p class="mb-4"><strong>TTL :</strong> {{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</p>
            <hr class="short-line">
            <p class="mb-4"><strong>Hobi :</strong> {{ $siswa->hobi }}</p>
            <hr class="short-line">
            <p class="mb-4"><strong>Sosmed :</strong> {{ $siswa->sosmed }}</p>
        </div>
    </div>
    @if (session()->has('key'))
        <a href="{{ route('siswa.index') }}" class="btn btn-back">Kembali</a>
    @else
        <a href="/" class="btn btn-back">Kembali</a>
    @endif

        </div>
    </div>
    </div>
    </div>
</div>
@endsection