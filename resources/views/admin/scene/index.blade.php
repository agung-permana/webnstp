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
            <strong>Data Scene</strong>
            <a href="{{ route('scene.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Scene</th>
                        <th>Zoom</th>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Thumb Image</th>
                        <th>Image</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scene as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->scene_id }}</td>
                            <td>{{ $item->zoom }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{ $item->thumb_image }}" alt="" style="width: 150px"></td>
                            <td><img src="{{ asset('images/scene/'.$item->image) }}" alt="" style="width: 150px"></td>
                            <td>
                                <a href="{{ route('scene.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('scene.delete', $item->id) }}" method="post">
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