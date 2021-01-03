@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @foreach ($kategori as $item)
                        <a href="{{ route('produk-detail', $item->id) }}"><p>{{ $item->nama }}</p></a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection