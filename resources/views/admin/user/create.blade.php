@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" value="admin" checked>
                        <label class="form-check-label">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" value="operator">
                        <label class="form-check-label">
                            Operator
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" value="supervisor">
                        <label class="form-check-label">
                            Supervisor
                        </label>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Konfirmasi</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection