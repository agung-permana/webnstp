@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Scene</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('scene.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Scene</label>
                    <input type="text" class="form-control @error('scene_id') is-invalid @enderror" name="scene_id" value="{{ old('scene_id') }}">
                    @error('scene_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Zoom</label>
                    <input type="number" class="form-control @error('zoom') is-invalid @enderror" name="zoom" value="{{ old('zoom') }}">
                    @error('zoom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control">
                        <option value="" hidden>-- Pilih Type --</option>
                        <option value="box">Box</option>
                        <option value="sphere">Sphere</option>
                        <option value="cylinder">Cylinder</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Thumb Image</label>
                    <input type="file" class="form-control @error('thumb_image') is-invalid @enderror" name="thumb_image" value="{{ old('thumb_image') }}">
                    @error('thumb_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
@endsection