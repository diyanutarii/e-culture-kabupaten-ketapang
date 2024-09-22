@extends('landing.template.base')

@section('content')
<section class="banner-section">
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel"
        data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>

        <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('images/background/banner.jpg');"></div>

            <div class="container">
                <div class="content-box text-center"
                    style="text-shadow: -1px 1px 0 #fff, 1px 1px 0 #fff, 1px -1px 0 #fff, -1px -1px 0 #fff;">
                    <h4 class="text-dark">Selamat Datang di</h4>
                    <h2 class="text-dark">Ketapang Berbudaye</h2>
                    <strong class="text-dark">
                        Temukan dan kenali lebih banyak situs cagar budaya
                        dan warisan budaya yang ada di Kabupaten
                        Ketapang
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-two">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="cta-two__box">
                        <div class="cta-two__icon">
                            <i class="muzex-icon-search"></i>
                        </div>
                        <h3>Berbagai Budaya Daerah</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-two__box">
                        <div class="cta-two__icon">
                            <i class="muzex-icon-location"></i>
                        </div>
                        <h3>Temukan Situs Bersejarah</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-two__box">
                        <div class="cta-two__icon">
                            <i class="muzex-icon-ticket"></i>
                        </div>
                        <h3>Hadiri Berbagai Acara</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="exhibition-one" style="margin-top: -250px;">
    <div class="container">
        <div class="block-title-two text-center">
            <p>Eksplor Ketapang</p>
            <h3>Situs Cagar Budaya</h3>
        </div>
        <div class="row high-gutter">
            @foreach ($situs as $item)
            <div class="col-lg-4">
                <div class="exhibition-one__single">
                    <div class="exhibition-one__image">
                        <img src="{{ asset($item->foto) }}" height="250">
                    </div>
                    <div class="exhibition-one__content">
                        <h3>
                            <a href="{{ url('situs-cagar-budaya/detail', $item->id) }}">
                                {{ $item->nama }}
                            </a>
                        </h3>
                        <p>{{ $item->alamat }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="featured-collection" style="margin-top: -100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="featured-collection__left">
                    <div class="featured-collection__image">
                        <img src="{{ asset('images/background/bg1.jpg') }}">
                    </div>
                    <p>
                        Ketapang Berbudaye dirancang untuk membawa Anda lebih dekat dengan tradisi, seni, dan kearifan
                        budaya yang dimiliki Kabupaten Ketapang. Kami ingin mengajak anda untuk mengeksplorasi berbagai
                        kebudayaan mulai dari adat istiadat, tarian, musik, hingga kisah-kisah rakyat yang sarat dengan
                        nilai-nilai luhur.
                    </p>
                    <a href="{{ url('warisan-budaya-tak-benda') }}" class="thm-btn featured-collection__btn">
                        Eksplor Warisan Budaya
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured-collection__right">
                    <div class="block-title">
                        <p>Warisan Budaya Tak Benda</p>
                    </div>
                    <p>
                        Pelajari, rasakan, dan hargai keragaman budaya dengan portal kami. Dirancang untuk
                        menghubungkan Anda dengan warisan yang kaya dan memperkuat identitas budaya.
                    </p>
                    <div class="featured-collection__image">
                        <img src="{{ asset('images/background/bg4.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if ($acara->isNotEmpty())
<section class="event-one">
    <div class="container">
        <div class="block-title-two text-center">
            <span class="block-title-two__line"></span>
            <p>Hadiri Berbagai</p>
            <h3>Acara di Waktu Mendatang</h3>
        </div>
        <div class="row">
            @foreach ($acara as $item)
            <div class="col-lg-12">
                <div class="event-one__single">
                    <div class="event-one__image">
                        <div class="event-one__date">
                            <span>
                                {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D') }}
                            </span>
                            {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('MMMM') }}
                        </div>
                        <div class="event-one__image-box">
                            <div class="event-one__image-inner">
                                <img src="{{ asset($item->gambar) }}" height="100">
                            </div>
                        </div>
                    </div>
                    <div class="event-one__content">
                        <h3><a href="{{ url('acara/detail', $item->id) }}">{{ $item->nama }}</a></h3>
                        <p>{{ Str::limit($item->deskripsi, 40) }}</p>
                    </div>

                    <div class="event-one__btn-block">
                        <a href="{{ url('acara/detail', $item->id) }}" class="thm-btn event-one__btn">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="blog-one" style="margin-top: -100px">
    <div class="container">
        <div class="blog-one__top">
            <div class="block-title">
                <p>Pustaka</p>
                <h3>Postingan Terbaru Kami</h3>
            </div>
            <div class="more-post__block">
                <a class="more-post__link" href="{{ url('kuliner') }}">
                    Lihat Semua
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($kuliner as $item)
            <div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <img src="{{ asset(empty($item->gambar) ? 'assets-landing/images/blog/blog-1-1.jpg' : $item->gambar) }}"
                            height="250">
                        <div class="blog-one__date">
                            <i class="far fa-clock"></i>
                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <h3>
                            <a href="{{ url('kuliner/baca', $item->id) }}">
                                {{ $item->judul }}
                            </a>
                        </h3>
                        <p class="text-justify">
                            {{ Str::limit($item->konten, 90) }}
                        </p>
                        <a href="{{ url('kuliner/baca', $item->id) }}" class="blog-one__link">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection