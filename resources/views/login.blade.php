@extends('layouts.app')
@section('title')
@section('konten')

<div class="align-items-center justify-content-center">
            <div class="card shadow-sm">
                <h2 class="text-center mt-4">Login</h2>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <label>Username</label>
                    <input class="form-control mt-2 mb-3" type="text" name="username" id="" placeholder="Masukkan Username Anda" required>

                    <label>Password</label>
                    <input class="form-control mt-2 mb-3" type="password" name="password" id="" placeholder="Masukkan Password Anda" required>

                    <button type="submit" class="form-control mt-2 mb-3 btn btn-primary">Login</button>
                </form>
            </div>
            </div>
</div>
@endsection
