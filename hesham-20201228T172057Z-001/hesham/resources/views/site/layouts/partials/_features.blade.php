	<!-- Site Features -->
    <div id="Features" class="site-features site-white-section">

        <!-- Bootstrap -->
        <div class="container-fluid">
        	<!-- upper section -->
			<div class="upper-section">
	            <div class="row">
                    <div class="col-xs-12 no-padding">

                        <!-- Clearfix -->
                        <div class="clearfix"></div>

                        <!-- Features -->
                        <div class="site-features-container">

                            <!-- Bootstrap nested columns -->

                                <div class="col-xs-12 col-sm-12 col-md-4 no-padding">

                                    <!-- Link -->
                                    <div class="site-box color-bg" >

                                        <!-- Figure -->
                                        <figure>
                                            <img src="{{asset('site/assets/images/feature-1.png')}}" alt="image">
                                        </figure>

                                        <!-- H3 heading -->
                                        <h3>{{ $misc->phone }}</h3>

                                        <!-- Paragraph -->
                                        <p>
                                            @lang('general.expert')
                                        </p>



                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 no-padding">

                                    <!-- Link -->
                                    <div class="site-box" >

                                        <!-- Figure -->
                                        <figure>
                                            <img src="{{asset('site/assets/images/feature-2.png')}}" alt="image">
                                        </figure>

                                        <!-- H3 heading -->
                                        <h3>@lang('general.joinclient')</h3>

                                        <!-- Paragraph -->
                                        {{-- <p>
                                            Experienced Attorneys Professional Approach
                                        </p> --}}

                                        <!-- Read more -->


                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 no-padding">

                                    <!-- Link -->
                                    <div class="site-box dark-bg no-border" >

                                        <!-- Figure -->
                                        <figure>
                                            <img src="{{asset('site/assets/images/feature-3.png')}}" alt="image">
                                        </figure>

                                        <!-- H3 heading -->
                                        <h3>@lang('general.book')</h3>

                                        <!-- Paragraph -->
                                        <p>
                                           {{$misc->appointment_date}}
                                        </p>

                                        <!-- Read more -->


                                    </div>

                                </div>


                        </div>

                    </div>
            </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End Site Features  -->
