@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Kontak Kami

        </div>
        <div class="card-body">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subyek</th>
                        <th>Nama Instansi/Perusahaan</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subyek }}</td>
                            <td>{{ $item->nama_perusahaan }}</td>
                            <td>{{ $item->pesan }}</td>
                            <td>
                                <form class="d-inline" onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('kontak.delete', $item->id) }}" method="post">
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