@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('pemasaran.update', $pemasaran->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Pemasaran</label>
                    <input type="text" name="pemasaran" class="form-control @error('pemasaran') is-invalid @enderror" value="{{ old('pemasaran', $pemasaran->pemasaran) }}">
                    @error('pemasaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('pemasaran') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection