  <!-- Services -->
  <div id="services" class="site-services site-dark-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- H1 Heading -->
                {{-- <h1>@lang('general.Our_Services')</h1> --}}

                <!-- H2 heading -->
                <h2>@lang('general.Our_Services')</h2>

                <!-- Bootstrap inner columns -->
                <div class="row">
                    @foreach($service as $service)

                    <!-- icon box  -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-box s1">
                            <!-- Icon -->
                            <figure> <img src="{{ isset($service->image) ? $service->image->path : '' }}" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>{{ $service->title }}</h3>
                            <!-- Paragraph -->
                            <p>{{ $service->description }}</p>


                        </div>
                    </div>

                    @endforeach

                    <a href="{{ route('site.service') }}" class="theme-btn">@lang('general.more')</a>

            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<!-- End Services -->
