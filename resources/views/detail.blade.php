@extends('layouts.app')
@section('title', 'Techsoftone')

@section('konten')

    <div class="d-flex gap-5 align-items-start mb-5">
        <img src="{{ url('storage/'. $siswa->image) }}" alt="" height="300px">
        <div>
            <h2 class="mb-4">{{ $siswa->nama_lengkap }}</h2>
            <p class="mb-4"><strong>TTL :</strong> {{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</p>
            <p class="mb-4"><strong>Hobi :</strong> {{ $siswa->hobi }}</p>
            <p class="mb-4"><strong>Sosmed :</strong> {{ $siswa->sosmed }}</p>
        </div>
    </div>
    @if (session()->has('key'))
        <a href="{{ route('siswa.index') }}" class="btn btn-outline-secondary">Kembali</a>
    @else
        <a href="/" class="btn btn-outline-secondary">Kembali</a>
    @endif
@endsection