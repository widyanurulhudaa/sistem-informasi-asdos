
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OnePage Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('frontend/program/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/program/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/program/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/program/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/program/assets/css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!-- ======= Header ======= -->
    @include('includes.home.navbar')

    @yield('content')

    @include('includes.home.footer')

    <!-- Vendor JS Files -->
    <script src="{{ url('frontend/program/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/program/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('frontend/program/assets/js/main.js') }}"></script>

</body>

</html>

