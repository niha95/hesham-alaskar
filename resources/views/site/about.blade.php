@extends('site.layouts.default')

@section('content')
  <!-- About Us -->
  <div id="about" class="site-about site-grey-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">

            <!-- Left colom -->
            <div class="col-xs-12 col-sm-12 col-md-5 ">
                <div class="right-colom">
                    <!-- H1 Heading -->
                    <h1>@lang('general.about')</h1>

                    <!-- H2 heading -->
                    <h2>{{ $misc->sitename }}</h2>

                    <!-- Paragraph -->
                    <p>{{ $misc->about }}</p>

                    <!-- Read more -->
                    <div class="btn">
                        <a class="theme-btn" href="#"> @lang('general.contact')</a>
                    </div>

                    <!-- Call -->
                    <div class="call">
                        <a href="{{ $misc->phone }}">
                        <!-- Icon -->
                        <i class="fa fa-phone"></i>
                        <!-- Text -->
                        <span> {{ $misc->phone }}</span>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right colom -->
            <div class="col-xs-12 col-sm-12 col-md-7 ">
                <div class="left-colom">
                    <!-- Figure -->
                    <figure>
                        <img  src="{{ asset('site/assets/images/about-us-bg.png') }}" alt="image">
                    </figure>

                </div>
            </div>

        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<!-- End About Us -->



 <!--Scroll Top Start-->
 <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
 <!--Scroll Top End-->
@append

