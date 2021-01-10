@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="{{ url('layanan-teknis') }}">Layanan Teknis</a>
                            <span>{{ $show->kategori->nama }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="mt-3">
                        <h2 class="mb-3" style="text-transform: uppercase;"><strong>{{ $show->judul }}</strong></h2>
                        <h5 class="mb-3">{{ $show->desc }}</h5>
                    </div>
                    <img class="shadow mb-5" src="{{ asset($show->gambar1) }}" alt="">
                    <img class="shadow mb-5" src="{{ asset($show->gambar2) }}" alt="">
                    <img class="shadow mb-5" src="{{ asset($show->gambar3) }}" alt="">
                    <img class="shadow mb-5" src="{{ asset($show->gambar4) }}" alt="">
                    <img class="shadow mb-5" src="{{ asset($show->gambar5) }}" alt="">

                </div>
            </div>
            
        </div>
    </section>
@endsection