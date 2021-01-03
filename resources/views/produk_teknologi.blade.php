@extends('template.master')

@section('content')
<div class="container mt-3 mb-4">
    <table id="myTable" class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama produk</th>
                        <th>Kedeputian</th>
                        <th>Unit Kerja</th>
                        <th>Bidang Teknologi</th>
                        {{-- <th>Tugas Unit Kerja</th>
                        <th>Fungsi Unit kerja</th>
                        <th>Fasilitas</th>
                        <th>No. Telpon Kantor</th>
                        <th>Email</th>
                        <th>Alamat Kantor</th>
                        <th>Website</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->kedeputian->nama_kedeputian }}</td>
                            <td>{{ $item->unit_kerja->nama_unit_kerja }}</td>
                            <td>{{ $item->bidang->nama_bidang }}</td>
                            {{-- <td>{{ $item->tugas_unit_kerja }}</td>
                            <td>{{ $item->fungsi_unit_kerja }}</td>
                            <td>{{ $item->fasilitas }}</td>
                            <td>{{ $item->no_telp_kantor }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->alamat_kantor }}</td>
                            <td>{{ $item->website }}</td> --}}
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection