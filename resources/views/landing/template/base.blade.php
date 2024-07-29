<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ env('APP_NAME') }}</title>

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
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        {{-- <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <p>Look at the Calender for the Upcoming Exhibitions.</p>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="#"><i class="far fa-clock"></i> Mon - Sat 9.00 - 18.00</a>
                    <a href="#"><i class="fa fa-phone-alt"></i> (251) 235-3256</a>
                    <a href="#" class="thm-btn topbar__btn">Buy Tickets</a><!-- /.thm-btn -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one --> --}}

        @include('landing.template.sections.header')

       @yield('content')

        @include('landing.template.sections.footer')
    </div><!-- /.page-wrapper -->

    <div class="side-content__block">
        <div class="side-content__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-content__block-overlay -->
        <div class="side-content__block-inner ">
            <a href="index.html">
                <img src="{{ asset('assets-landing/images/logo-1-1.png') }}" alt="" width="143">
            </a>
            <div class="side-content__block-about">
                <h3 class="side-content__block__title">About Us</h3><!-- /.side-content__block__title -->
                <p class="side-content__block-about__text">We must explain to you how all seds this mistakens idea off
                    denouncing pleasures and praising pain was born and I will give you a completed accounts off the
                    system and </p><!-- /.side-content__block-about__text -->
                <a href="#" class="thm-btn side-content__block-about__btn">Get Consultation</a>
            </div><!-- /.side-content__block-about -->
            <hr class="side-content__block-line" />
            <div class="side-content__block-contact">
                <h3 class="side-content__block__title">Contact Us</h3><!-- /.side-content__block__title -->
                <ul class="side-content__block-contact__list">
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-map-marker"></i>
                        Rock St 12, Newyork City, USA
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-phone"></i>
                        <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@mail.com">example@mail.com</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-clock"></i>
                        Week Days: 09.00 to 18.00 Sunday: Closed
                    </li><!-- /.side-content__block-contact__list-item -->
                </ul><!-- /.side-content__block-contact__list -->
            </div><!-- /.side-content__block-contact -->
            <p class="side-content__block__text site-footer__copy-text"><a href="#">Muzex</a> <i
                    class="fa fa-copyright"></i> 2020 All Right Reserved</p>
        </div><!-- /.side-content__block-inner -->
    </div><!-- /.side-content__block -->

    <div class="side-menu__block">
        <a href="#" class="side-menu__toggler side-menu__close-btn">
            <i class="fa fa-times"></i>
        </a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <div class="side-menu__block-inner ">
            <a href="index.html" class="side-menu__logo"><img
                    src="{{ asset('assets-landing/images/logo-light-1-1.png') }}" alt="" width="143"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">Muzex</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

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
</body>

</html>
