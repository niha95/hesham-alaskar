

 <!-- Footer -->
 <footer id="footer" class="site-footer">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">

                <!-- Widget -->
                <div class="widget">

                    <!-- Logo -->
                    <div class="site-logo">
                        <!-- Link -->
                        <a href="index.html">
                            <!-- Logo Image -->
                            <img src="{{asset('site/assets/images/footer-logo.png')}}" alt="Logo">

                        </a>
                    </div>
                    <!-- End logo -->

                    <!-- Clearfix -->
                    <div class="clearfix"></div>

                    <!-- Paragraph -->
                    <p>{{ $misc->about_locale }}</p>


                </div>
                <!-- End widget -->

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">

                <!-- Widget -->
                <div class="widget">

                    <!-- H3 heading -->
                    <h3>Quick Links</h3>

                    <!-- Links -->
                    <ul>
                        <li><a href="#">Home - Law Firm</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Recent Case Studies</a></li>
                        <li><a href="#">Why Choose us?</a></li>
                        <li><a href="{{ $misc->links }}">{{ $misc->links }} </a></li>
                    </ul>

                </div>
                <!-- End widget -->

            </div>




        </div>
    </div>
    <!-- End Bootstrap -->

    <div class="clearfix"></div>
        <div class="col-xs-12">
                <hr>
            </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                <!-- Copyright -->
                <div class="site-copyright">
                    © 2016 Made by <a href="http://www.deltatiech.com/" target="_blank">Delta</a>
                </div>

            </div>
                <div class="col-xs-12 col-sm-6">

                <!-- Social Icons -->
                <div class="site-social-icons">
                    <a target="_blank" href="{{$social->fb}}"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="{{$social->twitter}}"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="{{$social->instagram}}"><i class="fa fa-instagram"></i></a>

                </div>

            </div>
            </div>
        </div>
</footer>
<!-- End Footer -->

 <!-- Preloader -->
 <div class="site-preloader">
    <img src="{{asset('site/assets/images/loader.gif')}}" alt="loader">
</div>
