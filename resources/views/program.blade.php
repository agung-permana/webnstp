@extends('template.master')

@section('content')
<section class="about-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Program</a>
                            <span>{{ $program->kategori }}</span>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="at-title">
                        <h3>{{ $program->judul }}</h3>
                        <p>&nbsp;</p>
                        {!! $program->desc !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection