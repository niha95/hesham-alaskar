
    <!-- Call to action -->
    <div class="site-call-to-action" id="call-to-action">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Box -->
                    <div class="site-box">

                        <!-- H1 heading -->
                        <h1>@lang('general.consult')</h1>

                        <!-- Bootstrap inner columns -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-offset-2">

                                <!-- Paragraph -->
                                <p>{{$misc->about}}</p>

                            </div>

                            <!-- call-info -->
                            <div class="call-info">
                                <ul>
                                    <li><a href="{{ $misc->phone }}" > <!-- Icon --> <i class="fa fa-phone"></i> {{ $misc->phone }} </a> </li>
                                    <li><a href="mailto:{{ $social->mail }}" > <!-- Icon --> <i class="fa fa-envelope"></i> {{ $social->mail }} </a> </li>
                                    <li> <i class="fa fa-clock-o"></i> {{ $misc->appointment_date }} </li>
                                </ul>
							</div>

                            <div class="col-xs-12">

                                <!-- Button -->
                                <a href="#" class="theme-btn"> @lang('general.consult') </a>

                            </div>
                        </div>

                    </div>
                    <!-- End box -->

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End call to action -->
