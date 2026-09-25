@extends('layouts.app')
@section('title', 'Techsoftone')
@section('konten')

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
        background-color: #2F39A9;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border: none;
        border-radius: 5px;
        color: #EAECF0;
    }
    .btn-aksi-create:hover{
        background-color: #EAECF0;
        font-weight: 600;
        padding: 12px;
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
</style>

<div class="container custom-container table-responsive">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card custom-card">
                <div class="card-body">
    <h1 class="mb-5">Moment Techsoftone</h1>
    <a href="{{ route('moment.create') }}" class="btn btn-aksi-create mb-3">Tambah Moment</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped text-center">
                <tr style="background-color: #F5F5F5; color:#1D2128; ">
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
                                <a href="{{ route('moment.show', $m->id) }}" class="btn btn-aksi-detail">Detail</a>
                            <a href="{{ route('moment.edit', $m->id) }}" class="btn btn-aksi-edit">Edit</a>
                            <form action="{{ route('moment.destroy', $m->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-aksi-hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini???')">Hapus</button>
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
        </div>
    </div>
    </div>
    </div>
</div>
@endsection
