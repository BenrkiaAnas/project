<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('header')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('sidebar')

        <div class="main-content">
            <!-- header area start -->
            @include('navbar')
            <!-- header area end -->

            @yield('content')

            
        </div>

        @include('footer')

    </div>

    @include('scripts')
    
</body>

</html>
