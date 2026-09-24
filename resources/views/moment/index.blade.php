@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')

    <h1 class="mb-5">Moment Techsoftone</h1>
    <a href="{{ route('moment.create') }}" class="btn btn-success mb-3">Tambah Moment</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Dokumentasi Moment</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>

                @forelse ($moment as $index => $m )
                <tr>
                    <td style="vertical-align: middle">{{ $moment->firstItem() + $index }}</td>
                    <td><img src="{{ url('storage/' . $m->image) }}" alt="" height="50px"></td>
                    <td style="vertical-align: middle">{{ $m->tanggal }}</td>
                    <td style="white-space: nowrap; vertical-align:middle;">
                        <div class="d-flex gap-2 flex-nowrap justify-content-center">
                                <a href="{{ route('moment.show', $m->id) }}" class="btn btn-outline-primary">Detail</a>
                            <a href="{{ route('moment.edit', $m->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('moment.destroy', $m->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini???')">Hapus</button>
                            </form>
                            </div>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="5">
                        <p>Tidak ada dokumentasi moment kelas.</p>
                    </td>
                </tr>
                @endforelse
            </table>
            </div>
        </div>
        {{ $moment->links('pagination::bootstrap-5') }}
@endsection
