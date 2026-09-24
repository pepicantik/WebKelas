@extends('layouts.app')
@section('title', 'Home | Portal Berita')

@section('konten')
    <div class="text-center d-flex flex-column justify-content-center" style="min-height: 60vh;">
        <h1>Selamat Datang di Portal Berita</h1>
        <p class="text-secondary">Kelola dan pantau berita terbaru dari sini.</p>
        <a href="{{ route('siswa.index') }}" class="btn btn-outline-secondary">Selengkapnya...</a>
    </div>
@endsection
