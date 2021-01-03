@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Kedeputian
            <a href="{{ route('kedeputian.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kedeputian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kedeputian as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kedeputian }}</td>
                            <td>
                                <a href="{{ route('kedeputian.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('kedeputian.delete', $item->id) }}" method="post">
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