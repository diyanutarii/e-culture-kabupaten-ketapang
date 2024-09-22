@extends('landing.template.base')

@section('content')
    <section class="page-header" style="background-image: url(images/background/bg3.jpg);">
        <div class="container">
            <h2>Kuliner</h2>
            <p class="text-white">Jelajahi Kuliner Khas Ketapang</p>
        </div>
    </section>

    <section class="blog-one blog-grid-page" style="margin-top: -80px;">
        <div class="container">
            <div class="row">
                @foreach ($pustaka as $item)
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
                                    <a href="{{ url('pustaka/baca', $item->id) }}">
                                        {{ $item->judul }}
                                    </a>
                                </h3>
                                <p class="text-justify">
                                    {{ Str::limit($item->konten, 90) }}
                                </p>
                                <a href="{{ url('pustaka/baca', $item->id) }}" class="blog-one__link">
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
