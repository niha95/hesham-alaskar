

         <!-- Main Slider -->
    <div class="site-main-slider slider-version-1">

        <!-- Sequence slider -->
        <div id="sequence">
            <ul class="seq-canvas">

                @foreach($banner as $k => $slide)

                <li class="sequence-slide">


                    <!-- Background Image -->
                    <div class="sequence-bg" style="background-image: url({{ isset($slide->image) ? $slide->image->path : '' }})"></div>

                    <!-- Caption -->
                    <div class="sequence-caption">

                        <!-- Bootstrap -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">


                                    <!-- H1 Heading -->
                                    <h1>{{ $slide->title }}</h1>
                                    <!-- Paragraph -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                            <p>
                                                {{ $slide->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <a href="#" class="theme-btn optional ">@lang('general.contact')</a>

                                </div>
                            </div>
                        </div>

                        <!-- End bootstrap -->

                    </div>
                    <!-- End caption -->
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Pagination -->
        <ul class="seq-pagination">
            <li>Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
        </ul>

        <!-- Navigation -->
        <button type="button" class="seq-prev"><span class="icon-slider-arrow-left"></span></button>
        <button type="button" class="seq-next"><span class="icon-slider-arrow-right"></span></button>

    </div>
    <!-- End Slider -->
