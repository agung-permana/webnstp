@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                          <a href="#">Profil</a>
                        <span>{{ $profil->judul }}</span>
                      </div>
                  </div>
              </div>
          </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="at-title">
                            <h3>{{ $profil->judul }}</h3>
                            <p>&nbsp;</p>
                            <div class="bi-pic text-center">
                                <img src="{{ asset('images/profil/'. $profil->gambar) }}" alt="" style="width: 70%">
                            </div>
                            <div class="mt-5">
                                {!! $profil->desc !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection