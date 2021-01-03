@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('kedeputian.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kedeputian</label>
                    <input type="text" name="nama_kedeputian" class="form-control @error('nama_kedeputian') is-invalid @enderror" value="{{ old('nama_kedeputian') }}">
                    @error('nama_kedeputian')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('bidang') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection