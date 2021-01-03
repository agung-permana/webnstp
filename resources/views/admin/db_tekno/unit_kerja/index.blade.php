@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">           
            Unit Kerja
            <a href="{{ route('unit_kerja.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Unit Kerja</th>
                        <th>Kedeputian</th>
                        <th>Kontak Personal</th>
                        <th>No. Hp</th>
                        <th>No. Telpon Kantor</th>
                        <th>Email</th>
                        <th>Alamat Kantor</th>
                        <th>Website</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unit_kerja as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_unit_kerja }}</td>
                            <td>{{ $item->kedeputian->nama_kedeputian }}</td>
                            <td>{{ $item->kontak_person }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->no_telp_kantor }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->alamat_kantor }}</td>
                            <td>{{ $item->website }}</td>
                            <td>
                                <a href="{{ route('unit_kerja.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('unit_kerja.delete', $item->id) }}" method="post">
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