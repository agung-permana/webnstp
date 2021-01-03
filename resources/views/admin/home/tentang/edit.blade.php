@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tentang.update', $tentang->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $tentang->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tulis Tentang NSTP</label>
                    <textarea name="tentang" class="form-control @error('tentang') is-invalid @enderror" id="editor1" cols="30" rows="10">{{ old('tentang', $tentang->tentang) }}</textarea>
                    @error('tentang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('tentang') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection