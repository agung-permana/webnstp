@extends('template.master')

@section('content')
<section class="about-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                          <span>Berita</span>
                      </div>
                  </div>
              </div>
          </div>
          @foreach ($berita as $item)
            <div class="row">
                <div class="col-lg-4">
                  <img width="80%" src="{{ asset('images/berita/'. $item->gambar) }}">
                </div>
                <div class="col-lg-8">
                    <div class="about-text">
                        <div class="at-title">
                            <h3>{{ $item->judul }}</h3>
                            <span>Ditulis Oleh {{ $item->user->name }} | {{ $item->created_at->format('l, j F Y') }}</span><p>
                                @php
                                $desc = substr($item->desc, 0, 300);
                                @endphp
                            <p>{!! $desc !!}</p>

                            <p><a href="{{ route('berita-detail', $item->slug) }}" class="btn btn-primary btn-sm">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
          @endforeach
        </div>
    </section>
@endsection