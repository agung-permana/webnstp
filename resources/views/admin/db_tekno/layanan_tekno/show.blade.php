@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">           
            Layanan Teknologi
            <a href="{{ route('layanantekno') }}" style="float: right" class="btn btn-primary btn-sm">
                Kembali
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Nama Kompetensi</td>
                        <td>{{ $layanan->nama_layanan }}</td>
                    </tr>

                    <tr>
                        <td>Kedeputian</td>
                        <td>{{ $layanan->kedeputian->nama_kedeputian }}</td>
                    </tr>

                    <tr>
                        <td>Unit Kerja</td>
                        <td>{{ $layanan->unit_kerja->nama_unit_kerja }}</td>
                    </tr>

                    <tr>
                        <td width="200">Kontak</td>
                        <td>{{ $layanan->kontak }}</td>
                    </tr>

                    <tr>
                        <td>Bidang Teknologi</td>
                        <td>{{ $layanan->bidang->nama_bidang }}</td>
                    </tr>

                    <tr>
                        <td>Deskripsi Singkat</td>
                        <td>{{ $layanan->deskripsi_singkat }}</td>
                    </tr>

                    <tr>
                        <td>Spesifikasi Alat</td>
                        <td>{{ $layanan->spesifikasi_alat }}</td>
                    </tr>

                    <tr>
                        <td>Fungsi Alat</td>
                        <td>{{ $layanan->fungsi_alat }}</td>
                    </tr>

                    <tr>
                        <td>Nomor Sertifikasi</td>
                        <td>{{ $layanan->nomor_sertifikasi }}</td>
                    </tr>

                    <tr>
                        <td>Jenis Akreditasi Sertifikasi</td>
                        <td>{{ $layanan->jenis_akreditasi_sertifikasi }}</td>
                    </tr>

                    <tr>
                        <td>Lembaga Penerbit Sertifikasi</td>
                        <td>{{ $layanan->lembaga_penerbit_sertifikasi }}</td>
                    </tr>

                </thead>
                
            </table>
        </div>
    </div>
@endsection