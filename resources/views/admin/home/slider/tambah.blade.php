@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Ruang</label>
                    <input type="text" name="nama_ruang" class="form-control @error('nama_ruang') is-invalid @enderror" value="{{ old('nama_ruang') }}">
                    @error('nama_ruang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Gedung</label>
                    <input type="text" name="nama_gedung" class="form-control @error('nama_gedung') is-invalid @enderror" value="{{ old('nama_gedung') }}">
                    @error('nama_gedung')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Lokasi</label>
                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pilih Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar') }}">
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('slider') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection