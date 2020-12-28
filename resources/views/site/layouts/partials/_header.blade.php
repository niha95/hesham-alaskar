 <!-- Top Bar -->
 <div class="site-top-bar">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- Left section -->
                <div class="site-top-bar-left-section">

                    <!-- Link -->
                    <a>
                        <!-- Font awesome icon -->
                        <i class="fa fa-clock-o"></i>
                        <!-- Text -->
                        <span>{{ $misc->appointment_date }}</span>
                    </a>

                </div>
                <!-- End Left Section -->


                <!-- Right Section -->
                <div class="site-top-bar-right-section">

                    <!-- Link -->
                    <a href="{{ $misc->phone }}">
                        <!-- Icon -->
                        <i class="fa fa-phone"></i>
                        <!-- Text -->
                        <span>{{ $misc->phone }}</span>
                    </a>

                    <!-- Link -->
                    <a href="mailto:{{ $misc->mail }}">
                        <!-- Icon -->
                        <i class="fa fa-envelope"></i>
                        <!-- Text -->
                        <span>{{ $social->mail }}</span>
                    </a>

                </div>
                <!-- End Right Section -->

            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<!-- End Top Bar -->
 <!-- Header -->
 <header class="site-header" id="sticky-header">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- Logo -->
                <div class="site-logo">
                    <!-- Link -->
                    <a href="{{ route('site.home') }}">
                        <!-- Logo Image -->
                        <img src="{{asset('site/assets/images/logo-icon.png')}}" alt="Logo">
                    </a>
                </div>
                <!-- End logo -->

                <!-- Navigation Toggle Button -->
                <div class="site-nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- End Nav Toggle Button -->

                <!-- Navigation -->
                <nav class="site-nav">
                    <ul>
                        <!-- Active Item (Use the active class) -->
                        <li><a href="{{ route('site.home') }}">@lang('nav.home') </a> <!-- Desktop sub menu indicator icon -->
                                  <!-- Mobile view sub menu indicator icon -->

                            <!-- Sub menu level 1 -->

                        <li class="active"><a href="{{ route('site.about') }}">@lang('nav.about')</a></li>
                        <li><a href="{{ route('site.service') }}">@lang('nav.service')</a></li>

                        <li><a href="#testimonial">@lang('nav.clients')</a></li>
                        <li><a href="#blog">@lang('nav.blog')</a></li>
                        {{-- <li><a href="#team">Team</a></li> --}}
                        <li><a href="#contact">@lang('nav.contact')</a></li>
                        <li>
                        <div class="btn-group">

                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </div>
                                @endif
                            @endforeach

                        </div>


                        </li>
                    </ul>
                </nav>
                <!-- End Navigation -->

            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</header>
<!-- End Header -->


