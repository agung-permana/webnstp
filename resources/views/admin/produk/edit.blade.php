@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori_id" class="form-control">
                        <option value="" hidden>-- Pilih Kategori --</option>
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}"
                            @if ($data->id == $produk->kategori_id)
                            selected
                            @endif
                            >{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $produk->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc_produk"cols="30" rows="10" class="form-control @error('desc_produk') is-invalid @enderror" id="editor1">{{ old('desc_produk', $produk->desc_produk) }}</textarea>
                    @error('desc_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input type="text" name="unit_kerja" class="form-control @error('unit_kerja') is-invalid @enderror" value="{{ old('unit_kerja', $produk->unit_kerja) }}">
                    @error('unit_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Peneliti</label>
                    <input type="text" name="nama_peneliti" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama_peneliti', $produk->nama_peneliti) }}">
                    @error('nama_peneliti')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status HAKI</label>
                    <input type="text" name="status_haki" class="form-control @error('nama') is-invalid @enderror" value="{{ old('status_haki', $produk->status_haki) }}">
                    @error('status_haki')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mitra Kerja</label>
                    <input type="text" name="mitra_kerja" class="form-control @error('nama') is-invalid @enderror" value="{{ old('mitra_kerja', $produk->mitra_kerja) }}">
                    @error('mitra_kerja')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>TRL</label>
                    <input type="text" name="trl" class="form-control @error('nama') is-invalid @enderror" value="{{ old('trl', $produk->trl) }}">
                    @error('trl')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <br><img src="{{ asset('images/produk/'. $produk->gambar) }}" style="width: 100px">
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}">
                    <small>* Kosongkan Jika Gambar Tidak Diisi</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection