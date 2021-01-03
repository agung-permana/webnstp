@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Skala Dampak Teknologi
            <a href="{{ route('skala_dampak_teknologi.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Skala Dampak Teknologi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dampak_teknologi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->skala_dampak_teknologi }}</td>
                            <td>
                                <a href="{{ route('skala_dampak_teknologi.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('skala_dampak_teknologi.delete', $item->id) }}" method="post">
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