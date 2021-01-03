@extends('template.master')

@section('content')
<section class="about-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                          <a href="#">Media</a>
                          <a href="{{ route('berita-nstp') }}">Berita</a>
                          <span>{{ $berita->judul }}</span>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="at-title">
                            <h3>{{ $berita->judul }}</h3>
                            <span>Ditulis Oleh {{ $berita->user->name }} | {{ $berita->created_at->format('l, j F Y') }}</span><p>
                                <img width="80%" src="{{ asset('images/berita/'. $berita->gambar) }}">
                            <p>{!! $berita->desc !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection