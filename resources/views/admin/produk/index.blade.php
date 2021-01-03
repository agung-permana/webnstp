@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Produk
            <a href="{{ route('produk.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Unit kerja</th>
                        <th>Nama Peneliti</th>
                        <th>TRL</th>
                        <th>Status HAKI</th>
                        <th>Mitra Kerja</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kategori_produk->nama }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->desc_produk }}</td>
                            <td>{{ $item->unit_kerja }}</td>
                            <td>{{ $item->nama_peneliti }}</td>
                            <td>{{ $item->trl }}</td>
                            <td>{{ $item->status_haki }}</td>
                            <td>{{ $item->mitra_kerja }}</td>
                            <td><img style="width: 100px" src="{{ asset('images/produk/'. $item->gambar) }}" alt=""></td>
                            <td>
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('produk.delete', $item->id) }}" method="post">
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