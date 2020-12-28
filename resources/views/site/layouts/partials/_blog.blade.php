  <!-- Blog -->
  <div id="blog" class="site-blog site-grey-section">

    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- H1 Heading -->
                <h1>@lang('general.blog')</h1>

                <!-- H2 heading -->
                <h2>@lang('general.latestblog')</h2>

                @foreach($blog as $blog)

                <!-- Bootstrap inner columns -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Site box -->
                        <div class="site-box">
                            <!-- image -->
                            <div class="blog-image"> <img src="{{ asset('site/assets/images/blog1.jpg') }}" alt="image">

                                <!-- date -->
                                <div class="date">15 <span class="month">dec </span></div>
                            </div>
                            <div class="content">
                                <!-- H3 heading -->
                                <h3><a href="#">{{$blog->title}}</a></h3>
                               <!-- Paragraph -->
                                <p>{{$blog->description}}</p>
                                <!-- authore-time text -->
                                <div class="authore-time"> By: Admin | 5 Hours ago  </div>
                            </div>
                        </div>
                        <!-- End box -->
                    </div>


                </div>
                <!-- End inner columns -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Bootstrap -->

</div>
<!-- End Blog -->
