@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Manajemen Karosel
            <a href="{{ route('karosel.create') }}" class="btn btn-primary btn-sm" style="float: right">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($karosel as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img style="width: 100px" src="{{ asset('images/karosel/'.$item->gambar) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('karosel.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('karosel.delete', $item->id) }}" method="post">
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