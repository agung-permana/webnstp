@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <span>Layana Teknis</span>
                        </div>
                    </div>
                </div>
            </div>
            <h1><strong>LAYANAN TEKNIS</strong></h1>
            <h4>NSTP-BPPT memberikan Layanan Teknis di berbagai bidang teknologi.</h4>
            <div class="row">
                @foreach ($data as $item)
                <div class="col-md-3">
                    <div class="card mt-4">
                        <a href="#">
                            <div class="bi-pic text-center">
                                <img src="{{ asset('images/laytek/'.$item->thumb) }}" alt="">
                            </div>
                            <div class="card-body">
                                <h6 class="card-text"><strong>{{ $item->judul }}</strong></h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            
        </div>
    </section>
@endsection