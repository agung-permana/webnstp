@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('kompetensi.update', $kompetensi->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Kompetensi</label>
                    <input type="text" name="nama_kompetensi" class="form-control @error('nama_kompetensi') is-invalid @enderror" value="{{ old('nama_kompetensi', $kompetensi->nama_kompetensi) }}">
                    @error('nama_kompetensi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi Kompetensi</label>
                    <input type="text" name="deskripsi_kompetensi" class="form-control @error('deskripsi_kompetensi') is-invalid @enderror" value="{{ old('deskripsi_kompetensi', $kompetensi->deskripsi_kompetensi) }}">
                    @error('deskripsi_kompetensi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kedeputian</label>
                    <select name="kedeputian_id" class="form-control">
                        <option value="" hidden>-- Pilih Kedeputian --</option>
                        @foreach ($kedeputian as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $kompetensi->kedeputian_id)
                            selected
                            @endif>{{ $item->nama_kedeputian }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja_id" class="form-control">
                        <option value="" hidden>-- Pilih Unit Kerja --</option>
                        @foreach ($unit_kerja as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $kompetensi->unit_kerja_id)
                            selected
                            @endif>{{ $item->nama_unit_kerja }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tugas Unit Kerja</label>
                    <input type="text" name="tugas_unit_kerja" class="form-control @error('tugas_unit_kerja') is-invalid @enderror" value="{{ old('tugas_unit_kerja', $kompetensi->tugas_unit_kerja) }}">
                    @error('tugas_unit_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Fungsi Unit Kerja</label>
                    <input type="text" name="fungsi_unit_kerja" class="form-control @error('fungsi_unit_kerja') is-invalid @enderror" value="{{ old('fungsi_unit_kerja', $kompetensi->fungsi_unit_kerja) }}">
                    @error('fungsi_unit_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Fasilitas</label>
                    <input type="text" name="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" value="{{ old('fasilitas', $kompetensi->fasilitas) }}">
                    @error('fasilitas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Telp</label>
                    <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp', $kompetensi->telp) }}">
                    @error('telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $kompetensi->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" id="" cols="20" rows="5">{{ old('alamat', $kompetensi->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $kompetensi->website) }}">
                    @error('website')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mitra</label>
                    <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror" value="{{ old('mitra', $kompetensi->mitra) }}">
                    @error('mitra')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kompetensi') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection