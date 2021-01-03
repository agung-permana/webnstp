@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('karosel.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Pilih Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar') }}">
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('karosel') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection