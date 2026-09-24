@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')

    <h1 class="mb-5">Tambah Dokumentasi Moment Kelas</h1>
    <form action="{{route('moment.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <label>Tanggal Dokumentasi</label>
    <input class="form-control mb-3 mt-2" type="date" name="tanggal" id="" required>
    
    <label>Dokumentasi Moment Kelas</label>
    <input class="form-control mb-3 mt-2" type="file" name="image" id="" required>

    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ route('moment.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
