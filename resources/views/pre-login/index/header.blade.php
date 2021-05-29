<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Home - GA Engineering')</title>
    <meta content="@yield('meta_description', 'default')" name="description">
    <meta content="@yield('meta_keywords', 'default')" name="keywords">
    <link rel="canonical" name="{{ url()->current() }}">

    <!-- Favicons -->
    <link href="{{ URL::asset('pre/img/logo-icon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i|Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('pre/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('pre/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('pre/css/testi.css') }}" rel="stylesheet">


</head>

<body>
    @include('pre-login.index.nav')
    @yield('content')
    @include('pre-login.index.footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('pre/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('pre/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('pre/js/main.js') }}"></script>

</body>

</html>
