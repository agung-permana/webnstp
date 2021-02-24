@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Layanan Lainnya
            @if (Auth::check() && Auth::user()->level == 'admin')
            <a href="{{ route('layanan-lainnya.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
            @endif
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Desc</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lainnya as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->desc }}</td>
                            <td>
                                <img width="100" src="{{ asset($item->gambar) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('layanan-lainnya.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                @if (Auth::check() && Auth::user()->level == 'admin')
                                <form class="d-inline" action="{{ route('layanan-lainnya.delete', $item->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection