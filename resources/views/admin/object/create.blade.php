@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Object</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('objek.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Scene</label>
                    <select name="scene_id" class="form-control">
                        <option value="" hidden>-- Pilih Scene --</option>
                        @foreach ($scene as $item)
                            <option value="{{ $item->id }}">{{ $item->scene_id }}</option>
                        @endforeach
                    </select>
                    @error('scene_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Object</label>
                    <input type="text" class="form-control @error('object_name') is-invalid @enderror" name="object_name" value="{{ old('object_name') }}">
                    @error('object_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Object File</label>
                    <input type="file" class="form-control @error('object_file') is-invalid @enderror" name="object_file" value="{{ old('object_file') }}">
                    @error('object_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>spesifikasi</label>
                    <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" value="{{ old('spesifikasi') }}">
                    @error('spesifikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Alt Name</label>
                    <input type="text" class="form-control @error('alt_name') is-invalid @enderror" name="alt_name" value="{{ old('alt_name') }}">
                    @error('alt_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Auto Rotate</label>
                    <input type="text" class="form-control @error('auto_rotate') is-invalid @enderror" name="auto_rotate" value="{{ old('auto_rotate') }}">
                    @error('auto_rotate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Camera Controls</label>
                    <input type="text" class="form-control @error('camera_controls') is-invalid @enderror" name="camera_controls" value="{{ old('camera_controls') }}">
                    @error('camera_controls')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Background Color</label>
                    <input type="text" class="form-control @error('background_color') is-invalid @enderror" name="background_color" value="{{ old('background_color') }}">
                    @error('background_color')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
@endsection