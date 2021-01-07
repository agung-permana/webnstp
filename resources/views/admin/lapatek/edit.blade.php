@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('lapatek.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <select name="lapatek_id" class="form-control">
                        <option value="" hidden>-- Pilih Kategori --</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $data->lapatek_id)
                                selected
                                @endif>{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $data->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <br><img src="{{ asset('images/lapatek/'. $data->thumb) }}" style="width: 150px">
                </div>

                <div class="form-group">
                    <label>Thumb</label>
                    <input type="file" name="thumb" class="form-control @error('thumb') is-invalid @enderror" value="{{ old('thumb') }}">
                    <small>*) Apabila gambar tidak diganti, kosongkan saja.</small>

                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc" class="form-control @error('thumb') is-invalid @enderror" cols="20" rows="5">{{ old('desc', $data->desc) }}</textarea>
                    @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 1</label>
                    <input type="file" name="gambar1" class="form-control @error('gambar1') is-invalid @enderror" value="{{ old('gambar1') }}">
                    @error('gambar1')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 2</label>
                    <input type="file" name="gambar2" class="form-control @error('gambar2') is-invalid @enderror" value="{{ old('gambar2') }}">
                    @error('gambar2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 3</label>
                    <input type="file" name="gambar3" class="form-control @error('gambar3') is-invalid @enderror" value="{{ old('gambar3') }}">
                    @error('gambar3')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 4</label>
                    <input type="file" name="gambar4" class="form-control @error('gambar4') is-invalid @enderror" value="{{ old('gambar4') }}">
                    @error('gambar4')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar 5</label>
                    <input type="file" name="gambar5" class="form-control @error('gambar5') is-invalid @enderror" value="{{ old('gambar5') }}">
                    @error('gambar5')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('lapetek-kategori') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection