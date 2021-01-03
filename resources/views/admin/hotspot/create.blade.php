@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Hotspot</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('hotspot.store') }}" method="post" enctype="multipart/form-data">
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
                    <label>Yaw</label>
                    <input type="number" class="form-control @error('yaw') is-invalid @enderror" name="yaw" value="{{ old('yaw') }}">
                    @error('yaw')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pitch</label>
                    <select name="pitch" class="form-control">
                        <option value="" hidden>-- Pilih Type --</option>
                        <option value="box">Box</option>
                        <option value="sphere">Sphere</option>
                        <option value="cylinder">Cylinder</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>To Scene Id</label>
                    <input type="text" class="form-control @error('to_scene_id') is-invalid @enderror" name="to_scene_id" value="{{ old('to_scene_id') }}">
                    @error('to_scene_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Popover Show</label>
                    <input type="text" class="form-control @error('popover_show') is-invalid @enderror" name="popover_show" value="{{ old('popover_show') }}">
                    @error('popover_show')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Popover Content</label>
                    <input type="text" class="form-control @error('popover_content') is-invalid @enderror" name="popover_content" value="{{ old('popover_content') }}">
                    @error('popover_content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
@endsection