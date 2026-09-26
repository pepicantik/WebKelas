@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<style>
    .card-body{
        padding: 40px;
    }
    .custom-card{
        border: 0;
        background-color: #ffff;
        border-radius: 15px;
        box-shadow: 0 10px 20px 10px rgb(0, 0, 0, 0.05);
        overflow: hidden;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
    }
    .custom-card-header{
        padding: 25px 20px;
        border-bottom: none;
    }
    .custom-label{
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        text-align: left;
        display: block;
    }
    .custom-input{
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 12px 15px;
    }
    .custom-input[type="file"]{
        padding: 10px 15px;
    }
    .custom-input[type="file"]::file-selector-button{
        background-color: #EAECF0;
        color: #0C2C55;
        border: none;
        border-radius: 7px;
        padding: 8px 16px;
        font-weight: 600;
        margin-right: 12px;
        cursor: pointer;
    }
    .custom-input[type="file"]::file-selector-button:hover{
        background-color: #0C2C55;
    }
    .btn-aksi-create{
        background: linear-gradient(
        to right,
        rgba(31, 57, 211, 0.95) 0%,
        rgba(42, 70, 220, 0.9) 50%,
        rgba(91, 128, 245, 0.85) 100%
        );
        box-shadow: 0 10px 20px 10px rgba(0, 0, 0, 0.05);
        font-weight: 600;
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        border: none;
        border-radius: 5px;
        color: #EAECF0;
    }
    .btn-aksi-create:hover{
        background-color: #EAECF0;
        font-weight: 600;
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 12px;
        border: none;
        border-radius: 5px;
        color: #0C2C55;
    }
    .btn-aksi-detail{
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        border-color: #76C0EC;
        color: #76C0EC;
    }
    .btn-aksi-detail:hover{
        background-color: #76C0EC;
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        color: #EAECF0;
    }
    .btn-aksi-edit{
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        border-color: #FFD444;
        color: #FFD444;
    }
    .btn-aksi-edit:hover{
        background-color: #FFD444;
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        color: #EAECF0;
    }
    .btn-aksi-hapus{
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        border-color: #DC0000;
        color: #DC0000;
    }
    .btn-aksi-hapus:hover{
        background-color: #DC0000;
        font-weight: 600;
        border-width: 2px;
        border-radius: 7px;
        color: #EAECF0;
    }
    .custom-container{
        width: 100%;
        min-height: 100vh;
    }
    .toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 25px;
    margin-bottom: 20px;
}

.search-form {
    display: flex;
    gap: 10px;
    margin: 0;
}

.search-form input {
    width: 300px;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.search-form button {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(
        to right,
        rgba(31, 57, 211, 0.95) 0%,
        rgba(42, 70, 220, 0.9) 50%,
        rgba(91, 128, 245, 0.85) 100%
        );
        box-shadow: 0 10px 20px 10px rgba(0, 0, 0, 0.05);
    color: white;
    font-weight: 600;
}
.deskripsi-siswa {
    color: #7b8494;
    font-size: 15px;
    margin-top: -10px;
    margin-bottom: 30px;
    line-height: 1.6;
    max-width: 800px;
}
.tanggal-custom{
    display: inline-block;
    background-color: #eef2ff;
    color: #3159d8;
    padding: 8px 15px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 20px;
}
</style>

<div class="container custom-container table-responsive">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card custom-card">
                <div class="card-body">
    <h1 class="mb-3">Moment Techsoftone</h1>
    <p class="deskripsi-siswa">Dokumentasi berbagai kegiatan dan momen berkesan siswa kelas XII RPL 1
    selama mengikuti kegiatan di sekolah.</p>

    <div class="toolbar">
    <form action="{{ route('moment.index') }}" method="GET" class="search-form">
                <input
                type="text"
                name="search"
                placeholder="Cari dokumentasi kegiatan..."
                value="{{ request('search') }}"
                >
                <button type="submit">Cari</button>
            </form>
    <a href="{{ route('moment.create') }}" class="btn btn-aksi-create">Tambah Moment</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped text-center">
                <tr style="background-color: #F5F5F5; color:#1D2128; ">
                    <th>No</th>
                    <th>Dokumentasi Moment</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>

                @forelse ($moment as $index => $m )
                <tr>
                    <td style="vertical-align: middle">{{ $moment->firstItem() + $index }}</td>
                    <td><img src="{{ url('storage/' . $m->image) }}" alt="" height="50px"></td>
                    <td style="vertical-align: middle">{{ $m->judul }}</td>
                    <td style="white-space: nowrap; vertical-align:middle;">
                        <div class="d-flex gap-2 flex-nowrap justify-content-center">
                                <button type="button"
                                class="btn btn-aksi-detail"
                                data-bs-toggle="modal"
                                data-bs-target="#detailMoment{{ $m->id }}">
                                Detail
                            </button>
                            <a href="{{ route('moment.edit', $m->id) }}" class="btn btn-aksi-edit">Edit</a>
                            <form action="{{ route('moment.destroy', $m->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-aksi-hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini???')">Hapus</button>
                            </form>
                            </div>
                    </td>
                </tr>

                <div class="modal fade" id="detailMoment{{ $m->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Detail Moment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">

                <img src="{{ url('storage/' . $m->image) }}"
                    alt="{{ $m->judul }}"
                    class="img-fluid rounded mb-3"
                    style="max-height: 300px; object-fit: cover;">

                <h4>{{ $m->judul }}</h4>

                <p class="text-muted mb-2">
                    Dokumentasi kegiatan kelas XII RPL 1
                </p>

                <p>
                    <div class="tanggal-custom">
                    <strong>Tanggal:</strong>
                    {{ $m->tanggal }}
                    </div>
                </p>

            </div>
        </div>
    </div>
</div>
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
        </div>
    </div>
    </div>
    </div>
</div>
@endsection
