@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('tkt.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Skala Dampak teknologi</label>
                    <input type="text" name="nama_tkt" class="form-control @error('nama_tkt') is-invalid @enderror" value="{{ old('nama_tkt') }}">
                    @error('nama_tkt')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('tkt') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection