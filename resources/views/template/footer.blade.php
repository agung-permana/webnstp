    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                <img src="{{ asset('guest') }}/img/logo.png" alt="">
                            </a>
                        </div>
                        @php
                            $tentang = DB::table('tentang')->get();
                        @endphp
                        @foreach ($tentang as $item)
                        <p>{!! $item->tentang !!}</p>
                        @endforeach
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2803.8932343999904!2d106.67105160089179!3d-6.3546998014204235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69ff423d9933a31!2sGedung+Manajemen!5e0!3m2!1sid!2sid!4v1499743108497" width="600" height="400" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="copyright-text text-white">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by IndoDevNet
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/guest') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/guest') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/guest') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/guest') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('/guest') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('/guest') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/guest') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('/guest') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/guest') }}/js/jquery.richtext.min.js"></script>
    <script src="{{ asset('/guest') }}/js/image-uploader.min.js"></script>
    <script src="{{ asset('/guest') }}/js/main.js"></script>
    <script src="{{ asset('lightbox/dist/js/lightbox-plus-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ipanorama/assets/js/lib/three.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ipanorama/src/jquery.ipanorama.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ipanorama/assets/js/ipanorama.js') }}"></script>
    <!-- Import the component -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
