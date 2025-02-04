<!DOCTYPE html>
<html>

@include('site.layouts.partials._head')

<body class="container-fluid page-body">
    <div class="site-wrapper">
    @include('site.layouts.partials._header')

    @yield('content')

    @include('site.layouts.partials._footer')

    @include('site.layouts.partials._scripts')
    </div>
</body>
</html>
