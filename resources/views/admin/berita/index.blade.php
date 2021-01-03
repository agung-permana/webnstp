@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Produk
            <a href="{{ route('berita.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Penulis</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->desc }}</td>
                            <td><img style="width: 100px" src="{{ asset('images/berita/'. $item->gambar) }}" alt=""></td>
                            <td>
                                <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('berita.delete', $item->id) }}" method="post">
                                    @method('delete')
                                    @csrf
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