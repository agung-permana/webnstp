@extends('template.master')

@section('content')
<section class="about-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Fasilitas</span>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
                @foreach ($fasilitas as $item)
                <div class="col-md-6">
                    <div class="card mt-4">
                    <div class="bi-pic text-center">
                        <img src="{{ asset('images/fasilitas/'. $item->gambar) }}" alt="">
                    </div>
                        <div class="card-body">
                            <h6 class="card-text"><strong>{{ $item->kategori }}</strong></h6>
                            <p>{!! $item->desc !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

                {{-- <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="at-title">
                            <h3></h3>
                            <div class="card">
                                <div class="card-header">
                                    {{ $item->kategori }}
                                </div>
                                <div class="card-body">
                                    <div class="bi-pic text-center">
                                        <img src="{{ asset('images/fasilitas/'. $item->gambar) }}" alt="" style="width: 70%">
                                    </div>
                                    <div class="mt-5">
                                        {!! $item->desc !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
            
        </div>
    </section>
@endsection