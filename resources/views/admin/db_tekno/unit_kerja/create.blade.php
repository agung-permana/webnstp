@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('unit_kerja.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Unit Kerja</label>
                    <input type="text" name="nama_unit_kerja" class="form-control @error('nama_unit_kerja') is-invalid @enderror" value="{{ old('nama_unit_kerja') }}">
                    @error('nama_unit_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kedeputian</label>
                    <select name="kedeputian_id" class="form-control">
                        <option value="" hidden>-- Pilih Kedeputian --</option>
                        @foreach ($kedeputian as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kedeputian }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kontak Person</label>
                    <input type="text" name="kontak_person" class="form-control @error('kontak_person') is-invalid @enderror" value="{{ old('kontak_person') }}">
                    @error('kontak_person')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>No Hp</label>
                    <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>No Telp Kantor</label>
                    <input type="number" name="no_telp_kantor" class="form-control @error('no_telp_kantor') is-invalid @enderror" value="{{ old('no_telp_kantor') }}">
                    @error('no_telp_kantor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Alamat Kantor</label>
                    <textarea name="alamat_kantor" class="form-control" id="" cols="20" rows="5">{{ old('alamat_kantor') }}</textarea>
                    @error('nama_unit_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}">
                    @error('website')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('unit_kerja') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection