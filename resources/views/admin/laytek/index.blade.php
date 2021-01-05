@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Kategori Layanan Teknis
            <a href="{{ route('laytek.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Judul</th>
                        <th>Thumbnail</th>
                        <th>Desc</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kategori->nama }}</td>
                            <td>{{ $item->judul }}</td>
                            <td><img width="100" src="{{ asset('images/laytek/'.$item->thumb) }}" alt=""></td>
                            <td>{{ $item->desc }}</td>
                            <td>
                                <img width="100" src="{{ asset('images/laytek/'.$item->gambar1) }}" alt="">
                                <img width="100" src="{{ asset('images/laytek/'.$item->gambar2) }}" alt="">
                                <img width="100" src="{{ asset('images/laytek/'.$item->gambar3) }}" alt="">
                                <img width="100" src="{{ asset('images/laytek/'.$item->gambar4) }}" alt="">
                                <img width="100" src="{{ asset('images/laytek/'.$item->gambar5) }}" alt="">

                            </td>
                            <td>
                                <a href="{{ route('laytek.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('laytek.delete', $item->id) }}" method="post">
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