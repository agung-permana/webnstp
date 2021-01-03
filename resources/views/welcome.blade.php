@extends('template.master')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
                @foreach ($slider as $item)
                    <div class="hs-item set-bg" data-setbg="{{ asset('images/'.$item->gambar) }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hc-inner-text">
                                    <div class="hc-text">
                                        <h4>{{ $item->nama_ruang }}</h4>
                                        <p><span class="icon_pin_alt"></span> {{ $item->lokasi }}</p>
                                        <div class="label">{{ $item->nama_gedung }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                @foreach ($tentang as $item)    
                <div class="col-lg-6">
                    <div class="about-text">
                            <div class="at-title">
                                <h3>{{ $item->judul }}</h3>
                                <p>{!! $item->tentang !!}</p>

                            </div>
                        </div>
                        <a href="http://nstp.indodevnet.com" class="btn btn-primary">Mulai Virtual Tour</a>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6fkNGbbGYwc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="{{ asset('guest') }}/img/chooseus/chooseus-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Sebaran Laboratorium </h4>
                        </div>
                        <p>Badan Pengkajian dan Penerapan Teknologi</p>
                    </div>
                    <div class="chooseus-features">
                        @foreach ($lab as $item)
                        <div class="cf-item">
                            <a href="#">
                                <div class="cf-text">
                                    <h5>{{ $item->nama_lab }}</h5>
                                    <p>{{ $item->lokasi }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Feature Property Section Begin -->
    <section class="feature-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="feature-property-left">
                        <div class="section-title">
                            <h4>Teknologi Unggulan</h4>
                        </div>
                        <ul>
                            <li>Teknologi Bahan Bakar</li>
                                <li>Teknologi Informasi Komunikasi</li>
                                <li>Teknologi Kebencanaan</li>
                                <li>Teknologi Kelistrikan</li>
                                <li>Teknologi Kesehatan</li>
                                <li>Teknologi Lingkungan</li>
                        </ul>
                        <a href="{{ route('produk-nstp') }}">Lihat semua teknologi</a>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="fp-slider owl-carousel">
                        @foreach ($produk as $item)
                        <div class="fp-item set-bg" data-setbg="{{ asset('images/produk/'. $item->gambar) }}">
                            <div class="fp-text">
                                <h5 class="title">{{ $item->kategori_produk->nama }}</h5>
                                <p><span class="icon_pin_alt"></span>{{ $item->nama }}</p>
                                <div class="label">Unit Kerja</div>
                                <p>{{ $item->unit_kerja }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Property Section End -->



    <!-- Logo Carousel Begin -->
    <div class="logo-carousel">
        <div class="container">
            <div class="lc-slider owl-carousel">
                @foreach ($karosel as $item)
                    <div class="lc-item-inner">
                        <img src="{{ asset('images/karosel/'.$item->gambar) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection