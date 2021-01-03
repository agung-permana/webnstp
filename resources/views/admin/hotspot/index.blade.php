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
            <strong>Data Hostpot</strong>
            <a href="{{ route('hotspot.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Scene</th>
                        <th>Yaw</th>
                        <th>Pitch</th>
                        <th>To Scene Id</th>
                        <th>Popover Show</th>
                        <th>Popover Content</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotspot as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->scene->scene_id }}</td>
                            <td>{{ $item->yaw }}</td>
                            <td>{{ $item->pitch }}</td>
                            <td>{{ $item->to_scene_id }}</td>
                            <td>{{ $item->popover_show }}</td>
                            <td>{{ $item->popover_content }}</td>
                            <td>
                                <a href="{{ route('hotspot.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('hotspot.delete', $item->id) }}" method="post">
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