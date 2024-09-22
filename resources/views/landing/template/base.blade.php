<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ketapang Berbudaye</title>

    <!-- Favicons -->
    <x-favicon></x-favicon>

    <!-- Fonts URL -->
    <link
        href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/muzex-icons.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-landing/css/responsive.css') }}">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="page-wrapper">

        @include('landing.template.sections.header')

        @yield('content')

        @include('landing.template.sections.footer')
    </div>

    @include('landing.template.sections.offcanvas')

    <a href="javascript:void(0)" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Template JS -->
    <script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/isotope.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.circleType.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('assets-landing/js/theme.js') }}"></script>

    @stack('script')
</body>

</html>
