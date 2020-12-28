  <!-- Clients -->
  <div id="clients" class="site-clients site-dark-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <!-- H1 Heading -->
                <h1>@lang('general.top')</h1>

                <!-- H2 heading -->
                <h2>@lang('general.topparagraph')</h2>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <!-- Images -->
                @foreach($topclient as $topclient)


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <figure><a href="#"><img src="{{ asset('site/assets/images/client-1.png') }}" alt="{{ $topclient->name }}"></a></figure>
                </div>

                @endforeach
            </div>

        </div>
    </div>
    <!-- End bootstrap -->

</div>
<!-- End clients -->
