@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Reply Email
        </div>
        <div class="card-body">
            <form action="{{ route('kontak.reply', $data->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $data->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>To</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $data->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Cc</label>
                    <input type="email" name="cc" class="form-control @error('cc') is-invalid @enderror" value="{{ old('cc', $data->cc) }}">
                    @error('cc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Subyek</label>
                    <input type="text" name="subyek" class="form-control @error('subyek') is-invalid @enderror" value="{{ old('subyek', $data->subyek) }}">
                    @error('subyek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pesan</label>
                    <textarea name="pesan" class="form-control" cols="20" rows="5">{{ $data->pesan }}</textarea>
                    @error('pesan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Reply</label>
                    <textarea name="reply" class="form-control" cols="20" rows="5">{{ $data->reply }}</textarea>
                    @error('reply')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" value="{{ old('file', $data->file) }}">
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kontak') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection