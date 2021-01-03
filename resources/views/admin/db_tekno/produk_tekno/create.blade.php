@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('layanantekno.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk') }}">
                    @error('nama_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kedeputian</label>
                    <select name="kedeputian_id" class="form-control">
                        <option value="" hidden>-- Pilih Kedeputian --</option>
                        @foreach ($kedeputian as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kedeputian }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja_id" class="form-control">
                        <option value="" hidden>-- Pilih Unit Kerja --</option>
                        @foreach ($unit_kerja as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_unit_kerja }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak') }}">
                    @error('kontak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Bidang teknologi</label>
                    <select name="bidang_teknologi_id" class="form-control">
                        <option value="" hidden>-- Pilih Unit Kerja --</option>
                        @foreach ($bidang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bidang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <input type="text" name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" value="{{ old('deskripsi_singkat') }}">
                    @error('deskripsi_singkat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Royalti</label>
                    <input type="text" name="royalti" class="form-control @error('royalti') is-invalid @enderror" value="{{ old('royalti') }}">
                    @error('royalti')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Skala Pemesanan</label>
                    <input type="text" name="skala_pemasaran" class="form-control @error('skala_pemasaran') is-invalid @enderror" value="{{ old('skala_pemasaran') }}">
                    @error('skala_pemasaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status Engineering</label>
                    <input type="text" name="status_engineering" class="form-control @error('status_engineering') is-invalid @enderror" value="{{ old('status_engineering') }}">
                    @error('status_engineering')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                

                <div class="form-group">
                    <label>Status Paten</label>
                    <input type="text" name="status_paten" class="form-control @error('status_paten') is-invalid @enderror" value="{{ old('status_paten') }}">
                    @error('status_paten')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Engineer</label>
                    <input type="text" name="nama_engineer" class="form-control @error('nama_engineer') is-invalid @enderror" value="{{ old('nama_engineer') }}">
                    @error('nama_engineer')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tahun Pembuatan</label>
                    <input type="number" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror" value="{{ old('tahun_pembuatan') }}">
                    @error('tahun_pembuatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pengguna Teknologi</label>
                    <input type="text" name="pengguna_teknologi" class="form-control @error('pengguna_teknologi') is-invalid @enderror" value="{{ old('pengguna_teknologi') }}">
                    @error('pengguna_teknologi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mitra</label>
                    <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror" value="{{ old('mitra') }}">
                    @error('mitra')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tahun Pembuatan</label>
                    <input type="text" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror" value="{{ old('tahun_pembuatan') }}">
                    @error('tahun_pembuatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Jenis Akreditasi Sertifikasi</label>
                    <input type="text" name="jenis_akreditasi_sertifikasi" class="form-control @error('jenis_akreditasi_sertifikasi') is-invalid @enderror" value="{{ old('jenis_akreditasi_sertifikasi') }}">
                    @error('jenis_akreditasi_sertifikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Lembaga Penerbit Sertifikasi</label>
                    <input type="text" name="lembaga_penerbit_sertifikasi" class="form-control @error('lembaga_penerbit_sertifikasi') is-invalid @enderror" value="{{ old('lembaga_penerbit_sertifikasi') }}">
                    @error('lembaga_penerbit_sertifikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kompetensi') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection