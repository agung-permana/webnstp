@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('lab.update', $lab->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Laboraturium</label>
                    <input type="text" name="nama_lab" class="form-control @error('nama_lab') is-invalid @enderror" value="{{ old('nama_lab', $lab->nama_lab) }}">
                    @error('nama_lab')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $lab->lokasi) }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('lab') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection