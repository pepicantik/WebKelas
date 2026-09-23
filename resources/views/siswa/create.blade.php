@extends('layouts.app')
@section('title', 'Techsoftone')

@section('konten')
    <h1 class="mb-5">Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="post">
        <label for="" class="mb-1">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control mb-3" placeholder="Masukkan Nama Lengkap Siswa" required>

        <label for="" class="mb-1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control mb-3" required>

        <label for="" class="mb-1">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control mb-3" placeholder="Masukkan Tempat Lahir Siswa" required>

        <label for="" class="mb-1">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-3" placeholder="Masukkan Hobi Siswa" required>

        <label for="" class="mb-1">Sosmed</label>
        <input type="text" name="sosmed" class="form-control mb-3" placeholder="Masukkan Sosmed Siswa" required>
        
        <label for="" class="mb-1">Gambar</label>
        <input type="file" name="image" class="form-control mb-3" required>

        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection