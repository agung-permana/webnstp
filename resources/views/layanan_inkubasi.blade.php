@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Layanan Inkubasi</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="mt-3">
                        <h2 class="mb-3" style="text-transform: uppercase;"><strong>{{ $data->judul }}</strong></h2>
                        <h5 class="mb-3">{{ $data->desc }}</h5>
                    </div>

                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection