@extends('layouts.master')

@section('content')

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <strong>Data Object</strong>
            <a href="{{ route('objek.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Scene</th>
                        <th>Object Name</th>
                        <th>Object File</th>
                        <th>Spesifikasi</th>
                        <th>Deskripsi</th>
                        <th>Alt Name</th>
                        <th>Auto Rotate</th>
                        <th>Camera Controls</th>
                        <th>Background Color</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objek as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->scene->scene_id }}</td>
                            <td>{{ $item->object_name }}</td>
                            <td>{{ $item->object_file }}</td>
                            <td>{{ $item->spesifikasi }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->alt_name }}</td>
                            <td>{{ $item->auto_rotate }}</td>
                            <td>{{ $item->camera_controls }}</td>
                            <td>{{ $item->background_color }}</td>
                            <td>
                                <a href="{{ route('objek.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('objek.delete', $item->id) }}" method="post">
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