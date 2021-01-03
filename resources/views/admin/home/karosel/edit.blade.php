@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('karosel.update', $karosel->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Gambar</label>
                    <br><img src="{{ asset('images/karosel/'. $karosel->gambar) }}" style="width: 200px">
                </div>

                <div class="form-group">
                    <label>Ganti Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar', $karosel->gambar) }}">
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