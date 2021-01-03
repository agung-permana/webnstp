@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="" hidden>-- Pilih Kategori --</option>
                        <option value="Ruang Pamer Produk Teknologi Komersil">Ruang Pamer Produk Teknologi Komersil</option>
                        <option value="Ruang Informasi dan Promosi">Ruang Informasi dan Promosi</option>
                        <option value="Ruang Temu bisnis">Ruang Temu bisnis</option>
                        <option value="Ruang VIP Lounge">Ruang VIP Lounge</option>
                        <option value="Fasilitas Workshop dan Seminar">Fasilitas Workshop dan Seminar</option>
                        <option value="Ruang Inkubasi dan Akselrasi Bisnis">Ruang Inkubasi dan Akselrasi Bisnis</option>
                        <option value="Cafe dan Kantin">Cafe dan Kantin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}">
                    <small>* Kosongkan Jika Gambar Tidak Diisi</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc"cols="30" rows="10" class="form-control" id="editor1"></textarea>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection