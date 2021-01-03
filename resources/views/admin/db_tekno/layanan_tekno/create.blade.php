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
                    <label>Nama Layanan</label>
                    <input type="text" name="nama_layanan" class="form-control @error('nama_layanan') is-invalid @enderror" value="{{ old('nama_layanan') }}">
                    @error('nama_layanan')
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
                    <label>Spesifikasi Alat</label>
                    <input type="text" name="spesifikasi_alat" class="form-control @error('spesifikasi_alat') is-invalid @enderror" value="{{ old('spesifikasi_alat') }}">
                    @error('spesifikasi_alat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Fungsi Alat</label>
                    <input type="text" name="fungsi_alat" class="form-control @error('fungsi_alat') is-invalid @enderror" value="{{ old('fungsi_alat') }}">
                    @error('fungsi_alat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nomor Sertifikasi</label>
                    <input type="text" name="nomor_sertifikasi" class="form-control @error('nomor_sertifikasi') is-invalid @enderror" value="{{ old('nomor_sertifikasi') }}">
                    @error('nomor_sertifikasi')
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