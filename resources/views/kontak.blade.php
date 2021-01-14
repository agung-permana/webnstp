@extends('template.master')

@section('content')
    <!-- Contact Form Section Begin -->
    <section class="contact-form-section spad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="cf-content">
                        <div class="cc-title">
                            <h4>Kontak Kami</h4>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('kontak.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Alamat Email">
                                </div>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col">
                                <input type="text" name="subyek" class="form-control" placeholder="Subyek">
                                </div>
                                <div class="col">
                                <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Instansi/Perusahaan">
                                </div>
                            </div>

                            <textarea name="pesan" class="form-control mt-3 mb-3" id="" cols="10" rows="5"></textarea>

                            <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Office</h5>
                                <p>Gedung Pusat Inovasi dan Bisnis Teknologi (720), Kawasan Puspiptek, Serpong, Tangerang Selatan, 15413.</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>021 | 123 456 789</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope-square"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Support</h5>
                                <p>humas-nstp@bppt.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection