@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('bidang.update', $bidang->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Bidang</label>
                    <input type="text" name="nama_bidang" class="form-control @error('nama_bidang') is-invalid @enderror" value="{{ old('nama_bidang', $bidang->nama_bidang) }}">
                    @error('nama_bidang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('bidang') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection