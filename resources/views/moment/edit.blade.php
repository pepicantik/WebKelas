@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')

    <h1 class="mb-5">Tambah Dokumentasi Moment Kelas</h1>
    <form action="{{route('moment.update', $moment->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Tanggal Dokumentasi</label>
    <input class="form-control mb-3 mt-2" type="date" name="tanggal" id="" required value="{{ $moment->tanggal }}">

    <label class="mb-1">Dokumentasi Moment Kelas</label>
    <input class="form-control mb-3 mt-1" type="file" name="image" id="" required>
    <p>file sebelumnya : <strong>{{ $moment->image }}</strong></p>

    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ route('moment.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
