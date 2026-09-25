@extends('layouts.app')
@section('title')
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
        margin-top: 50px;
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
        background-color: #2F39A9;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border: none;
        color: #e5e7eb;
    }
    .btn-submit:hover{
        background-color: #E3F2FD;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border: none;
        color: #2F39A9;
    }
    .btn-back{
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border-color: #FF7F3E;
        color: #FF7F3E;
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
<div class="align-items-center justify-content-center">
                <h2 class="text-center mt-4">Login</h2>
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <label>Username</label>
                    <input class="form-control mt-2 mb-3 custom-input" type="text" name="username" id="" placeholder="Masukkan Username Anda" required>

                    <label>Password</label>
                    <input class="form-control mt-2 mb-3 custom-input" type="password" name="password" id="" placeholder="Masukkan Password Anda" required>

                    <button type="submit" class="form-control mt-2 mb-3 btn btn-submit">Login</button>
                    <a href="/" class="btn btn-back form-control">Kembali</a>
                </form>
            </div>
</div>
    </div>
    </div>
    </div>
</div>
@endsection
