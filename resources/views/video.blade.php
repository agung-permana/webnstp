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
                          <a href="{{ route('berita-nstp') }}">Video</a>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="at-title">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6fkNGbbGYwc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection