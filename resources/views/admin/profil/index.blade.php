@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Manajemen Profil
            <a href="{{ route('profil.create') }}" class="btn btn-primary btn-sm" style="float: right">
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
                    @foreach ($profil as $item)
                        <tr>
                            <td width="50">{{ $loop->iteration }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->judul }}</td>
                            <td width="500">{{ $item->desc }}</td>
                            <td>
                                <img style="width: 100px" src="{{ asset('images/profil/'.$item->gambar) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" onsubmit="return confirm('Yakin mau haous data ini?')" action="{{ route('profil.delete', $item->id) }}" method="post">
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