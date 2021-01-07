@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @if (Auth::check() && Auth::user()->level == 'admin')
                <div class="form-group">
                    <label>Status Approve</label>
                    <select name="status" class="form-control">
                        <option value="" hidden>-- Status Approve --</option>
                        <option value="1">Setujui</option>
                        <option value="0">Tolak</option>
                    </select>
                </div>
                @endif

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $berita->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc" id="editor1" class="form-control" cols="30" rows="10">{{ $berita->desc }}</textarea>
                    @error('desc')
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

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('berita') }}" class="btn btn-danger">Kembali</a>

            </form>
        </div>
    </div>
@endsection