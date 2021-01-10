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
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Konsultasi Teknologi Dan Bisnis</strong></h5>
                            <p class="card-text">Pelayanan jasa konsultasi teknologi dan bisnis dengan tenaga ahli/pakar dibidangnya.</p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Penyusunan Studi Kelayakan Usaha</strong></h5>
                            <p class="card-text">Mengkaji dan menganalisa kelayakan suatu usaha dari aspek pemasaran, produksi dan teknologi, sumberdaya manusia, dan keuangan.</p>
                        </div>
                    </div>

                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Pendirian Badan Usaha.</strong></h5>
                            <p class="card-text">Program fasilitasi dan advokasi untuk pendirian badan usaha.</p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Fasilitasi Akses Pendanaan</strong></h5>
                            <p class="card-text">Pendampingan kepada pengusaha dalam menyusun Proposal Pendanaan dan merekomendasikannya kepada lembaga penyedia dana.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Pelatihan</strong></h5>
                            <p class="card-text">
                                Kewirausahaan Berbasis Teknologi<p>
                                Perencanaan Strategik<p>
                                Manajemen Pemasaran<p>
                                Manajemen Produksi/Operasi<p>
                                Studi Kelayakan Usaha/Bussines Plan<p>
                                Analisa Keuangan<p>
                                Hukum Bisnis<p>
                            </p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Standarisasi Dan Sertifikasi</strong></h5>
                            <p class="card-text">
                                Membantu mendaftarkan produk untuk standarisasi dan sertifikasi.<p>
                                Membantu proses pengujian produk untuk standarisasi dan sertifikasi.<p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection