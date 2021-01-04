@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">           
            produk Teknologi
            <a href="{{ route('produktekno') }}" style="float: right" class="btn btn-primary btn-sm">
                Kembali
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Nama Kompetensi</td>
                        <td>{{ $produk->nama_produk }}</td>
                    </tr>

                    <tr>
                        <td>Kedeputian</td>
                        <td>{{ $produk->kedeputian->nama_kedeputian }}</td>
                    </tr>

                    <tr>
                        <td>Unit Kerja</td>
                        <td>{{ $produk->unit_kerja->nama_unit_kerja }}</td>
                    </tr>

                    <tr>
                        <td width="200">Kontak</td>
                        <td>{{ $produk->kontak }}</td>
                    </tr>

                    <tr>
                        <td>Bidang Teknologi</td>
                        <td>{{ $produk->bidang->nama_bidang }}</td>
                    </tr>

                    <tr>
                        <td>Deskripsi Singkat</td>
                        <td>{{ $produk->deskripsi_singkat }}</td>
                    </tr>

                    <tr>
                        <td>Royalti</td>
                        <td>{{ $produk->royalti }}</td>
                    </tr>

                    <tr>
                        <td>Skala Pemasaran</td>
                        <td>{{ $produk->skala_pemasaran }}</td>
                    </tr>

                    <tr>
                        <td>Status Engineering</td>
                        <td>{{ $produk->status_engineering }}</td>
                    </tr>

                    <tr>
                        <td>Status Paten</td>
                        <td>{{ $produk->status_paten }}</td>
                    </tr>

                    <tr>
                        <td>Nama Engineer</td>
                        <td>{{ $produk->nama_engineer }}</td>
                    </tr>

                    <tr>
                        <td>Tahun Pembuatan</td>
                        <td>{{ $produk->tahun_pembuatan }}</td>
                    </tr>

                    <tr>
                        <td>Pengguna Teknologi</td>
                        <td>{{ $produk->pengguna_teknologi }}</td>
                    </tr>

                    <tr>
                        <td>Mitra</td>
                        <td>{{ $produk->mitra }}</td>
                    </tr>

                    <tr>
                        <td>TKT</td>
                        <td>{{ $produk->tkt->nama_tkt }}</td>
                    </tr>

                    <tr>
                        <td>Keunggulan Produk</td>
                        <td>{{ $produk->keunggulan_produk }}</td>
                    </tr>

                    <tr>
                        <td>Kompetitor Produk</td>
                        <td>{{ $produk->kompetitor_produk }}</td>
                    </tr>

                    <tr>
                        <td>Sumber Pembiayaan</td>
                        <td>{{ $produk->sumber_pembiayaan }}</td>
                    </tr>

                    <tr>
                        <td>tujuan Produksi Produk</td>
                        <td>{{ $produk->tujuan_produksi_produk }}</td>
                    </tr>

                    <tr>
                        <td>Keterangan</td>
                        <td>{{ $produk->keterangan }}</td>
                    </tr>

                </thead>
                
            </table>
        </div>
    </div>
@endsection