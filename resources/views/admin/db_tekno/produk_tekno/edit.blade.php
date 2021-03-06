@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('produktekno.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old('nama_produk', $produk->nama_produk) }}">
                    @error('nama_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kedeputian</label>
                    <select name="kedeputian_id" class="form-control">
                        <option value="" hidden>-- Pilih Kedeputian --</option>
                        @foreach ($kedeputian as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $produk->kedeputian_id)
                            selected
                            @endif>{{ $item->nama_kedeputian }}</option>
                            >{{ $item->nama_kedeputian }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja_id" class="form-control">
                        <option value="" hidden>-- Pilih Unit Kerja --</option>
                        @foreach ($unit_kerja as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $produk->unit_kerja_id)
                            selected
                            @endif>{{ $item->nama_unit_kerja }}</option>
                            >{{ $item->nama_unit_kerja }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak', $produk->kontak) }}">
                    @error('kontak')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Bidang teknologi</label>
                    <select name="bidang_teknologi_id" class="form-control">
                        <option value="" hidden>-- Pilih Unit Kerja --</option>
                        @foreach ($bidang as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $produk->bidang_teknologi_id)
                            selected
                            @endif>{{ $item->nama_bidang }}</option>
                            >{{ $item->nama_bidang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <input type="text" name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" value="{{ old('deskripsi_singkat', $produk->deskripsi_singkat) }}">
                    @error('deskripsi_singkat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Royalti</label>
                    <input type="text" name="royalti" class="form-control @error('royalti') is-invalid @enderror" value="{{ old('royalti', $produk->royalti) }}">
                    @error('royalti')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Skala Pemesanan</label>
                    <input type="number" name="skala_pemasaran" class="form-control @error('skala_pemasaran') is-invalid @enderror" value="{{ old('skala_pemasaran', $produk->skala_pemasaran) }}">
                    @error('skala_pemasaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status Engineering</label>
                    <input type="text" name="status_engineering" class="form-control @error('status_engineering') is-invalid @enderror" value="{{ old('status_engineering', $produk->status_engineering) }}">
                    @error('status_engineering')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="form-group">
                    <label>Status Paten</label>
                    <input type="text" name="status_paten" class="form-control @error('status_paten') is-invalid @enderror" value="{{ old('status_paten', $produk->status_paten) }}">
                    @error('status_paten')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Engineer</label>
                    <input type="text" name="nama_engineer" class="form-control @error('nama_engineer') is-invalid @enderror" value="{{ old('nama_engineer', $produk->nama_engineer) }}">
                    @error('nama_engineer')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tahun Pembuatan</label>
                    <input type="number" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror" value="{{ old('tahun_pembuatan', $produk->tahun_pembuatan) }}">
                    @error('tahun_pembuatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Pengguna Teknologi</label>
                    <input type="text" name="pengguna_teknologi" class="form-control @error('pengguna_teknologi') is-invalid @enderror" value="{{ old('pengguna_teknologi', $produk->pengguna_teknologi) }}">
                    @error('pengguna_teknologi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mitra</label>
                    <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror" value="{{ old('mitra', $produk->mitra) }}">
                    @error('mitra')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>TKT</label>
                    <select name="tkt_id" class="form-control">
                        <option value="" hidden>-- Pilih TKT --</option>
                        @foreach ($tkt as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $produk->tkt_id)
                            selected
                            @endif>{{ $item->nama_tkt }}</option>
                            >{{ $item->nama_tkt }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Keunggulan Produk</label>
                    <input type="text" name="keunggulan_produk" class="form-control @error('keunggulan_produk') is-invalid @enderror" value="{{ old('keunggulan_produk', $produk->keunggulan_produk) }}">
                    @error('keunggulan_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kompetitor Produk</label>
                    <input type="text" name="kompetitor_produk" class="form-control @error('kompetitor_produk') is-invalid @enderror" value="{{ old('kompetitor_produk', $produk->kompetitor_produk) }}">
                    @error('kompetitor_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Sumber Pembiayaan</label>
                    <input type="text" name="sumber_pembiayaan" class="form-control @error('sumber_pembiayaan') is-invalid @enderror" value="{{ old('sumber_pembiayaan', $produk->sumber_pembiayaan) }}">
                    @error('sumber_pembiayaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tujuan Produksi Produk</label>
                    <input type="text" name="tujuan_produksi_produk" class="form-control @error('tujuan_produksi_produk') is-invalid @enderror" value="{{ old('tujuan_produksi_produk', $produk->tujuan_produksi_produk) }}">
                    @error('tujuan_produksi_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan', $produk->keterangan) }}">
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('produktekno') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection