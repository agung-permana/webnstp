@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <span>Layanan Pengembangan Teknologi</span>
                        </div>
                    </div>
                </div>
            </div>
            <h2><strong>Layanan Pengembangan Teknologi</strong></h2>
            <h5>NSTP-BPPT memberikan Layanan pengembangan produk unggulan di berbagai bidang teknologi.</h5>
            <div class="row">
                @foreach ($data as $item)
                <div class="col-md-3">
                    <div class="card mt-4">
                        <a href="{{ route('lapatek.show', $item->slug) }}">
                            <div class="bi-pic text-center">
                                <img src="{{ asset('images/lapatek/'.$item->thumb) }}" alt="">
                            </div>
                            <div class="card-body">
                                <h6 class="card-text"><strong>{{ $item->kategori->nama }}</strong></h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            
        </div>
    </section>
@endsection