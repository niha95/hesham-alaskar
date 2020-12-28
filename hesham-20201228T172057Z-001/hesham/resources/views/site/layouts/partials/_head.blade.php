     {{-- head section --}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="One Page Corporate HTML Template">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('site/assets/images/favicon.ico') }}">

        <!-- Title -->
        <title>{{ $misc->sitename }}</title>

        <!-- Necessary CSS Files -->

       <link href="{{asset('site/assets/css/bootstrap.min.css')}}" rel="stylesheet">            									<!-- Bootstrap CSS Only GRID -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('site/assets/css/google-font.css')}}">              									<!-- Google Font -->
        <link rel="stylesheet" href="{{asset('site/assets/css/font-awesome.min.css')}}">         									<!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('site/assets/css/swiper.min.css')}}">               									<!-- Swiper slider -->
        <link rel="stylesheet" href="{{asset('site/assets/css/jquery.mb.YTPlayer.min.css')}}">   									<!-- Video background -->
        <link rel="stylesheet" href="{{asset('site/assets/css/template.css')}}">
        @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap-rtl.css') }}">
        <link rel="stylesheet" href="{{asset('site/assets/css/temp-rtl.css')}}">
@endif
             									<!-- Template CSS -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
