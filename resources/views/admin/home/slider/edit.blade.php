@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Ruang</label>
                    <input type="text" name="nama_ruang" class="form-control" value="{{ $slider->nama_ruang }}">
                </div>

                <div class="form-group">
                    <label>Nama Gedung</label>
                    <input type="text" name="nama_gedung" class="form-control" value="{{ $slider->nama_gedung }}">
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="{{ $slider->lokasi }}">
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <br><img src="{{ asset('images/'. $slider->gambar) }}" style="width: 200px">
                </div>
                <div class="form-group">
                    <label>Ganti Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar', $slider->gambar) }}">
                    <small>*) Apabila gambar tidak diganti, kosongkan saja.</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('slider') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection