@extends('template.master')

@section('content')
    <section class="about-section">
        <div class="container">

          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <div class="bt-option">
                          <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                          <a href="{{ url('produk-nstp') }}">Produk Unggulan</a>
                          <span>{{ $produk->kategori_produk->nama }}</span>
                      </div>
                  </div>
              </div>
          </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="about-text">
                        <div class="at-title">
                        <h3>{{ $produk->kategori_produk->nama }}</h3>
                        <table border="1" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="background-color:#ffffff; border-color:black; vertical-align:top; width:133pt">
                                        <p>Gambar</p>
                                    </td>
                                    <td style="background-color:#ffffff; border-color:black; vertical-align:top; width:133pt">
                                        <img width="40%" src="{{ asset('images/produk/'. $produk->gambar) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; border-color:black; vertical-align:top; width:133pt">
                                    <p>Nama Produk</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p><strong>{{ $produk->nama }}</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>Informasi Produk</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p>{!! $produk->desc_produk !!}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>Unit Kerja</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p><strong>{{ $produk->unit_kerja }}</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>Nama Peneliti</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p>{{ $produk->nama_peneliti }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>TRL</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p>{{ $produk->trl }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>Status HAKI</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p>{{ $produk->status_haki }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffffff; vertical-align:top; width:133pt">
                                    <p>Mitra Kerja</p>
                                    </td>
                                    <td style="background-color:#ffffff; vertical-align:top; width:525.8pt">
                                    <p>{{ $produk->mitra_kerja }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection