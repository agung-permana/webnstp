@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">
            <div class="row">
                    @foreach ($produk as $item)
                        {{-- <a href="{{ route('produk-detail', $item->id) }}"><p>{{ $item->nama }}</p></a> --}}
                        <div class="col-md-3">
                            <div class="card mt-4">
                                <a href="{{ route('produk-detail', $item->nama) }}">
                                    <div class="bi-pic text-center">
                                        <img src="{{ asset('images/produk/'. $item->gambar) }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-text"><strong>{{ $item->nama }}</strong></h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection