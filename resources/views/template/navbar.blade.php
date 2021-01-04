<nav class="nav-menu">
                            <ul>
                                <li class="{{ Request::is('/') ? 'active' : ''}}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>

                                @php
                                    $profil = DB::table('profil')->get();
                                @endphp
                                <li class="{{ Request::is('profil-nstp/sejarah') ? 'active' : ''}} {{ Request::is('profil-nstp/visi-misi') ? 'active' : ''}} {{ Request::is('profil-nstp/organisasi') ? 'active' : ''}} {{ Request::is('profil-nstp/sdm') ? 'active' : ''}} {{ Request::is('profil-nstp/kata-pengantar') ? 'active' : ''}}"><a href="#">Profil</a>
                                    <ul class="dropdown">
                                        @foreach ($profil as $item)
                                      <li><a href="{{ route('profil.show', $item->slug) }}">{{ $item->kategori }}</a></li>
                                      @endforeach
                                    </ul>
                                </li>

                                <li class="{{ Request::is('layanan-teknis') ? 'active' : ''}}"><a href="#">Bisnis Dan Inovasi</a>
                                    <ul class="dropdown">
                                      <li><a href="#">Layanan Pengembang Teknologi</a></li>
                                      <li><a href="{{ url('layanan-teknis') }}">Layanan Teknis</a></li>
                                      <li><a href="#">Layanan Inkubasi Teknologi</a></li>
                                    </ul>
                                </li>


                                <li class="{{ Request::is('fasilitas-nstp') ? 'active' : ''}}">
                                    <a href="{{ route('fasilitas.show') }}">Fasilitas</a>
                                </li>

                                <li class="{{ Request::is('program/penumbuhan-wirausaha-baru-berbasis-teknologi') ? 'active' : ''}} {{ Request::is('program/layanan-teknologi') ? 'active' : ''}} {{ Request::is('program/pengembangan-teknologi') ? 'active' : ''}} {{ Request::is('profil-nstp/sdm') ? 'active' : ''}} {{ Request::is('profil-nstp/kata-pengantar') ? 'active' : ''}}"><a href="#">Program</a>
                                    <ul class="dropdown">
                                        @php
                                            $program = DB::table('program')->get();
                                        @endphp
                                        @foreach ($program as $item)
                                        <li><a href="{{ route('program.show', $item->slug) }}">{{ $item->kategori }}</a></li>
                                        @endforeach
                                      </ul>
                                </li>
                                <li class="{{ Request::is('produk-nstp') ? 'active' : ''}}">
                                    <a href="{{ route('produk-nstp') }}">Produk Unggulan</a>
                                </li>
                                <li class="{{ Request::is('berita-nstp') ? 'active' : ''}} {{ Request::is('video') ? 'active' : ''}}"><a href="{{ route('berita-nstp') }}">Berita</a>
                                </li>
                                {{-- <li class="{{ Request::is('kompetensi-nstp-bppt') ? 'active' : ''}} {{ Request::is('layanan-teknologi') ? 'active' : ''}} {{ Request::is('produk-teknologi') ? 'active' : ''}}"><a href="#">Database Teknologi</a>
                                    <ul class="dropdown">
                                        <li>
                                           <a href="{{ route('kompetensi') }}">Kompetensi NSTP-BPPT</a>
                                        </li>
                                        <li>
                                           <a href="{{ route('layanan_teknologi') }}">Layanan Teknologi NSTP-BPPT</a>
                                        </li>
                                        <li>
                                           <a href="{{ route('produk_teknologi') }}">Produk Teknologi NSTP-BPPT</a>

                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </nav>