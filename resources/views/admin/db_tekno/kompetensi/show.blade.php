@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">           
            Kompetensi
            <a href="{{ route('kompetensi') }}" style="float: right" class="btn btn-primary btn-sm">
                Kembali
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Nama Kompetensi</td>
                        <td>{{ $kompetensi->nama_kompetensi }}</td>
                    </tr>

                    <tr>
                        <td>Deskripsi Kompetensi</td>
                        <td>{{ $kompetensi->deskripsi_kompetensi }}</td>
                    </tr>

                    <tr>
                        <td>Kedeputian</td>
                        <td>{{ $kompetensi->kedeputian->nama_kedeputian }}</td>
                    </tr>

                    <tr>
                        <td>Unit Kerja</td>
                        <td>{{ $kompetensi->unit_kerja->nama_unit_kerja }}</td>
                    </tr>

                    <tr>
                        <td>Tugas Unit Kerja</td>
                        <td>{{ $kompetensi->tugas_unit_kerja }}</td>
                    </tr>

                    <tr>
                        <td width="200">Fungsi Unit kerja</td>
                        <td>{{ $kompetensi->fungsi_unit_kerja }}</td>
                    </tr>

                    <tr>
                        <td>Fasilitas</td>
                        <td>{{ $kompetensi->fasilitas }}</td>
                    </tr>

                    <tr>
                        <td>Telp</td>
                        <td>{{ $kompetensi->telp }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $kompetensi->email }}</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>{{ $kompetensi->alamat }}</td>
                    </tr>

                    <tr>
                        <td>Website</td>
                        <td>{{ $kompetensi->website }}</td>
                    </tr>

                    <tr>
                        <td>Mitra</td>
                        <td>{{ $kompetensi->mitra }}</td>
                    </tr>

                </thead>
                
            </table>
        </div>
    </div>
@endsection