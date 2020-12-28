<!-- Testimonial -->
<div id="testimonial" class="site-testimonial site-white-section">

    <!-- Bootstrap -->
    <div class="container-fluid wide">
        <div class="row">
            <div class="col-xs-12">

                <!-- H1 heading -->

                <!-- H2 heading -->
                <h2>@lang('general.feedback')</h2>

                <div class="col-xs-12 col-md-8 col-md-push-2">
                    <!-- Slider main container -->
                    <div class="swiper-container" id="testimonial-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach($client as $client)


                            <!-- Slides -->
                            <div class="swiper-slide">
                                <!-- Image -->
                                <figure><img src="{{ isset($client->image) ? $client->image->path : '' }}" alt="User"></figure>

                                <!-- Paragraph -->
                                <p>{{$client->feedback}}</p>
                                <!-- Title -->
                                <h5>{{$client->name}}</h5>
                                <!-- description -->

                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12">
                <!-- If we need pagination -->
                <div id="testimonial-pagination" class="swiper-pagination"></div>
            </div>



        </div>
    </div>
    <!-- End bootstrap -->

</div>
<!-- End testimonial -->
