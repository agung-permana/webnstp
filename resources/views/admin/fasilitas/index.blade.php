@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Manajemen Fasilitas
            <a href="{{ route('fasilitas.create') }}" class="btn btn-primary btn-sm" style="float: right">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->desc }}</td>
                        <td>
                            <img src="{{ asset('images/fasilitas/'. $item->gambar) }}" alt="" style="width: 200px">
                        </td>
                        <td>
                            <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form class="d-inline" onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('fasilitas.delete', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection