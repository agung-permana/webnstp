@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">           
            Kompetensi
            <a href="{{ route('kompetensi.create') }}" style="float: right" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kompetensi</th>
                        <th>Deskripsi Kompetensi</th>
                        <th>Kedeputian</th>
                        <th>Unit Kerja</th>
                        {{-- <th>Tugas Unit Kerja</th>
                        <th>Fungsi Unit kerja</th>
                        <th>Fasilitas</th>
                        <th>No. Telpon Kantor</th>
                        <th>Email</th>
                        <th>Alamat Kantor</th>
                        <th>Website</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kompetensi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kompetensi }}</td>
                            <td>{{ $item->deskripsi_kompetensi }}</td>
                            <td>{{ $item->kedeputian->nama_kedeputian }}</td>
                            <td>{{ $item->unit_kerja->nama_unit_kerja }}</td>
                            {{-- <td>{{ $item->tugas_unit_kerja }}</td>
                            <td>{{ $item->fungsi_unit_kerja }}</td>
                            <td>{{ $item->fasilitas }}</td>
                            <td>{{ $item->no_telp_kantor }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->alamat_kantor }}</td>
                            <td>{{ $item->website }}</td> --}}
                            <td width="120">
                                <a href="{{ route('kompetensi.show', $item->id) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('kompetensi.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-inline" action="{{ route('kompetensi.delete', $item->id) }}" method="post">
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