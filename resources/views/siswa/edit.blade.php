@extends('layouts.app')
@section('title', 'Techsoftone')

@section('konten')
    <h1 class="mb-5">Tambah Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="" class="mb-1">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control mb-3" value="{{ $siswa->nama_lengkap }}" placeholder="Masukkan Nama Lengkap Siswa" required>

        <label for="" class="mb-1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control mb-3" value="{{ $siswa->tgl_lahir }}" required>

        <label for="" class="mb-1">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control mb-3" value="{{ $siswa->tempat_lahir }}" placeholder="Masukkan Tempat Lahir Siswa" required>

        <label for="" class="mb-1">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-3" value="{{ $siswa->hobi }}" placeholder="Masukkan Hobi Siswa" required>

        <label for="" class="mb-1">Sosmed</label>
        <input type="text" name="sosmed" class="form-control mb-3" value="{{ $siswa->sosmed }}" placeholder="Masukkan Sosmed Siswa" required>
        
        <label for="" class="mb-1">Gambar</label>
        <p>file sebelumnya : <strong>{{ $siswa->image }}</strong></p>
        <input type="file" name="image" class="form-control mb-3" required>

        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection