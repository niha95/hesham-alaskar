@extends('site.layouts.default')

@section('content')
 <!-- Team -->
 <div id="team" class="site-our-team site-dark-section">
    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1>Our team</h1>

                <!-- H2 heading -->
                <h2>Highly profesional &<br>
                    Wel trained experts team</h2>

                <div class="row">
                    @foreach ($service as $service)

                    <!-- member 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <!-- member box -->
                        <div class="member-box">
                            <!-- member image -->

                            <!-- member content -->
                            <div class="content">
                                <!-- H3 heading -->
                                <h3>{{ $service->title }} </h3>
                                <!-- H4 heading -->
                                <h4>{{ $service->description }}</h4>


                            </div>
                        </div>
                    </div>
                    @endforeach



            </div>
            </div>

        </div>
    </div>
    <!-- End Bootstrap -->
</div>
<!-- End team -->
@endsection
