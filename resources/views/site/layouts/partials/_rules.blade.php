    <!-- Portfolio -->
    <div id="portfolio" class="site-portfolio site-white-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">


                    <!-- H2 heading -->
                    <h2>@lang('general.rule') </h2>

                    <!-- Tabs Buttons -->

                    <!-- Bootstrap inner row -->
                    <div class="row">

                        <!-- Tabs Content -->
                        <div class="site-portfolio-tabs-content">
                            <!-- Web development -->
                            @foreach($rule as $rule)
                            <div class="all family portfolio-items col-sm-4 col-xs-12">
                                <!-- box -->
                                <div class="site-box">
                                    <!-- Image -->
                                    <img src="{{ isset($rule->image) ? $rule->image->path : '' }}" alt="Image">
                                    <!-- Caption -->
                                    <div class="portfolio-caption">
                                        <!-- Light box open click on icon -->
                                        <a class="venobox" href="{{ asset('site/assets/images/portfolio-1-big.jpg') }}"  data-gall="myGallery">
                                            <i class="fa fa-plus"></i>  <!-- Icon -->
                                        </a>
                                        <h5>{{ $rule->name }}</h5>    <!-- heading -->
                                        <h6>{{ $rule->description }}</h6> <!-- Sub heading -->
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>

                    <!-- Button -->
                    <a href="#" class="theme-btn">@lang('general.more')</a>

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End Portfolio -->
