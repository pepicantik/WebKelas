@extends('layouts.app')
@section('title')
@section('konten')

    <div class="row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <h2>Login</h2>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <label>Username</label>
                    <input class="form-control mt-2 mb-3" type="text" name="username" id="" placeholder="username" required>

                    <label>Username</label>
                    <input class="form-control mt-2 mb-3" type="text" name="username" id="" placeholder="username" required>

                </form>
            </div>
            </div>
        </div>
    </div>

@endsection
