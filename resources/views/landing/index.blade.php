@extends('landing.template.base')

@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel"
            data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets-admin/images/bg-login.jpg');"></div>

                <div class="container">
                    <div class="content-box text-center text">
                        <h4 class="text-white">Selamat Datang di</h4>
                        <h1 class="text-white">Ketapang Berbudaye</h1>
                        <strong class="text-white">
                            Kenali lebih banyak situs dan warisan budaya yang ada dikabupaten
                            ketapang
                        </strong>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/2.jpg');"></div>

                <div class="container">
                    <div class="content-box text-center">
                        <h3>Opening On Sat. Oct 20, 2019</h3>
                        <h2>Discover the Treasures of a Egypt <br> Historical Museum</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Learn
                                More</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/3.jpg');"></div>

                <div class="container">
                    <div class="content-box text-center">
                        <h3>Opening On Sat. Oct 20, 2019</h3>
                        <h2>World’s Leading Museum of History <br> Over 2.3 k Collection</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Learn
                                More</a></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <div class="about-cta__wrapper">
        <section class="cta-two">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-clock"></i>
                                </div><!-- /.cta-two__icon -->
                                <h3>Open Hours</h3>
                                <p>Daily: 9.30 AM–6.00 PM <br>
                                    Sunday & Holidays: Closed</p>
                            </div><!-- /.cta-two__box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-location"></i>
                                </div><!-- /.cta-two__icon -->
                                <h3>Find Location</h3>
                                <p>Muszex Museums 32 Quincy <br>
                                    Street Cambridge, MA</p>
                            </div><!-- /.cta-two__box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-ticket"></i>
                                </div><!-- /.cta-two__icon -->
                                <h3>Get Ticket</h3>
                                <p>Muszex Museums 32 Quincy <br>
                                    Street Cambridge, MA</p>
                            </div><!-- /.cta-two__box -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->

        <section class="about-one">
            <div class="container">
                <img src="{{ asset('assets-landing/images/shapes/about-sculpture-1-1.png') }}" alt=""
                    class="about-one__moc">
                <div class="block-title">
                    <p>About Muzex</p>
                    <h3>The Art Gallery of San Francisco</h3>
                </div><!-- /.block-title -->

                <div class="row">
                    <div class="col-lg-4">
                        <p class="about-one__highlighted-text">
                            Welcome to the World’s Lead- ing Museum of Modern Art. It includes works of art created
                            during
                            the period stretching from about 1860 to the 1970s.
                        </p><!-- /.about-one__highlighted-text -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <p>Man face fruit divided seasons herb from herb moveth whose. Dominion gathered winged
                            morning, man
                            won’t had fly beginning. Winged have saying behold morning greater void shall created
                            whose
                            blessed herb light fruitful open void without itself whales.Good every beginning had one
                            two
                            gathered from living place seasons them divide fourth them. </p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <p>So fish under The given own replenish. Greater land every very cattle replenish set unto.
                            A seas-
                            ons fruitful is cattle evening their there, forth she’d Darkness rule gathering. Midst
                            it you’re
                            gathered yielding without shall is beast.Life spirit firmament likeness fill moveth i
                            appear
                            good waters evening there image given his without meat, them.</p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="about-one__feature">
                            <h3>On View at Museum</h3>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                                test.
                                Override the digital divide with additiclick throughs Nanotechnology immersion.</p>
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li>Western & Non-Western cultures</li>
                                        <li>Artifacts and Antiquities</li>
                                        <li>Traditional Art</li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-lg-5 -->
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li>Contemporary Design</li>
                                        <li>Middle Eastern Art</li>
                                        <li>War History</li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-lg-4 -->
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li>20th Century Design</li>
                                        <li>Arts of Global Africa</li>
                                        <li>Gardens</li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-lg-3 -->
                            </div><!-- /.row -->
                        </div><!-- /.about-one__feature -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->
    </div><!-- /.about-cta__wrapper -->

    <section class="exhibition-one">
        <div class="container">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span><!-- /.block-title-two__line -->
                <p>What’s Going on</p>
                <h3>Upcoming Exhibitions</h3>
            </div><!-- /.block-title-two -->
            <div class="row high-gutter">
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('assets-landing/images/exhibition/exhibition-1-1.jpg') }}" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">The Exhibits Civilization.</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('assets-landing/images/exhibition/exhibition-1-2.jpg') }}" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">English Landscape Painting</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('assets-landing/images/exhibition/exhibition-1-3.jpg') }}" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">Classicita of Greece and Italy</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.exhibition-one -->

    <section class="featured-collection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-collection__left">
                        <div class="featured-collection__image">
                            <img src="{{ asset('assets-landing/images/resources/featured-collection-1-1.jpg') }}"
                                alt="">
                        </div><!-- /.featured-collection__image -->
                        <p>Man face fruit divided seasons herb from herb moveth whose. Dominion gathered winged
                            morning, man
                            won’t had fly beginning. Winged have saying behold.</p>
                        <a href="collection-grid.html" class="thm-btn featured-collection__btn">Explore
                            Collection</a>
                        <!-- /.thm-btn featured-collection__btn -->
                    </div><!-- /.featured-collection__left -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="featured-collection__right">
                        <div class="block-title">
                            <p>Collection</p>
                            <h3>Featured Collection</h3>
                        </div><!-- /.block-title -->
                        <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art created
                            during the
                            period stretching.</p>
                        <div class="featured-collection__image">
                            <img src="{{ asset('assets-landing/images/resources/featured-collection-1-2.jpg') }}"
                                alt="">
                        </div><!-- /.featured-collection__image -->
                    </div><!-- /.featured-collection__right -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featured-collection -->

    <section class="event-one">
        <img src="{{ asset('assets-landing/images/shapes/event-sculpture-1-1.png') }}" alt=""
            class="event-one__moc">
        <div class="container">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span><!-- /.block-title-two__line -->
                <p>What’s Going on</p>
                <h3>Our Upcoming Event</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>31</span>
                                Oct
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('assets-landing/images/event/event-1-1.jpg') }}" alt="">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Weekend Drop-In Sessions</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>17</span>
                                Nov
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('assets-landing/images/event/event-1-2.jpg') }}" alt="">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Calvert Richard Jones’s Duomo.</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>04</span>
                                Dec
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('assets-landing/images/event/event-1-3.jpg') }}" alt="">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Celebrating Museum Day</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.event-one -->

    <section class="cta-one" style="background-image: url(assets/images/shapes/cta-bg-1-1.jpg);">
        <div class="container text-center">
            <h3>More Than 1250 Exhibits!</h3>
            <p>Every day more exhibits arrive in our museum. Do not <br> wait and buy a ticket now.</p>
            <div class="cta-one__btn-block">
                <a href="#" class="thm-btn cta-one__btn-one">Become A
                    Member</a><!-- /.thm-btn cta-one__btn-one -->
                <a href="#" class="thm-btn cta-one__btn-two">Buy
                    Online</a><!-- /.thm-btn cta-one__btn-two -->
            </div><!-- /.cta-one__btn-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->

    <section class="blog-one">
        <div class="container">
            <div class="blog-one__top">
                <div class="block-title">
                    <p>Muzex News</p>
                    <h3>Latest From Our News</h3>
                </div><!-- /.block-title -->
                <div class="more-post__block">
                    <a class="more-post__link" href="#">
                        All Post
                        <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More
                            View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                        <!-- /.curved-circle -->
                    </a>
                </div><!-- /.more-post__block -->
            </div><!-- /.blog-one__top -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('assets-landing/images/blog/blog-1-1.jpg') }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div><!-- /.blog-one__date -->
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="news-details.html">Celebrating at Our Egypt Museum</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged
                                morning
                                man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn
                                More</a><!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('assets-landing/images/blog/blog-1-2.jpg') }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div><!-- /.blog-one__date -->
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="news-details.html">6 Reasons Create Playdate is Great for Little Ones</a>
                            </h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged
                                morning
                                man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn
                                More</a><!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('assets-landing/images/blog/blog-1-3.jpg') }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div><!-- /.blog-one__date -->
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="news-details.html">This List has been Turned into a Web App</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged
                                morning
                                man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn
                                More</a><!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->
@endsection
