@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Manajemen Slider
            <a href="{{ route('slider.create') }}" class="btn btn-primary btn-sm" style="float: right">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Ruang</th>
                        <th>Nama Gedung</th>
                        <th>Lokasi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slider as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_ruang }}</td>
                            <td>{{ $item->nama_gedung }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>
                                <img style="width: 200px" src="{{ asset('images/'.$item->gambar) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('slider.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            <form class="d-inline" onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('slider.delete', $item->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Unggah Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Pilih Gambar</label>
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
@endsection