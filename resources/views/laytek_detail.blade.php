@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Layanan Teknis</a>
                            <span>{{ $show->kategori->nama }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <h2>{{ $show->judul }}</h2>
                    <img src="{{ asset('images/laytek/'.$show->thumb) }}" alt="">
                </div>
            </div>
            
        </div>
    </section>
@endsection