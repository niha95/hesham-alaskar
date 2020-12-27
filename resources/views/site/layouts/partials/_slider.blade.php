
 <section class="coco-slider">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                   @foreach($banner as $k => $slide)
                <div class="item {{ $k == 0 ? 'active' : '' }}">
                  <img src="{{ $slide->image->imageFullLink() }}" alt="coc-banner">
                </div>
                  @endforeach
              </div>

              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

        </section>

         <!-- Main Slider -->
    <div class="site-main-slider slider-version-1">

        <!-- Sequence slider -->
        <div id="sequence">
            <ul class="seq-canvas">

                @foreach($sliders as $k => $slide)
                <li class="sequence-slide">

                    <!-- Background Image -->
                    <div class="sequence-bg" style="background-image: url({{ $slide->image->url }})"></div>

                    <!-- Caption -->
                    <div class="sequence-caption">

                        <!-- Bootstrap -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">


                                    <!-- H1 Heading -->
                                    <h1>{{ $slide->title_locale }}</h1>
                                    <!-- Paragraph -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                            <p>
                                                {{ $slide->description_locale }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <a href="#" class="theme-btn optional">Contact us now</a>

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
