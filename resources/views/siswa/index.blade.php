@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')
    <h1 class="mb-5">Data Siswa XII RPL 1</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">Tambah Daftar Siswa</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>

                @forelse ($siswa as $index => $s)
                    <tr>
                        <td>{{ $siswa->firstItem() + $index }}</td>
                        <td>
                            <img src="{{ url('storage/'. $b->image) }}" alt="" height="100px">
                        </td>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->tempat_lahir }}, {{ $s->tgl_lahir }}</td>
                        <td>
                            <a href="{{ route('siswa.show', $b->id) }}" class="btn btn-outline-primary">Detail</a>
                            <a href="{{ route('siswa.edit', $b->id) }}" class="btn btn-outline-warnning">Edit</a>
                            <form action="{{ route('siswa.destroy', $b->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini???')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="5">Tidak ada data siswa</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection