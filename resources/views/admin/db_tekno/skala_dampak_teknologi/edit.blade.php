@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('skala_dampak_teknologi.update', $dampak_teknologi->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Skala Dampak teknologi</label>
                    <input type="text" name="skala_dampak_teknologi" class="form-control @error('skala_dampak_teknologi') is-invalid @enderror" value="{{ old('dampak_teknologi', $dampak_teknologi->skala_dampak_teknologi) }}">
                    @error('skala_dampak_teknologi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('skala_dampak_teknologi') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection