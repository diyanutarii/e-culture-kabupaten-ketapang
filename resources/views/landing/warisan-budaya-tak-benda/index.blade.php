@extends('landing.template.base')

@section('content')
<section class="page-header" style="background-image: url(images/background/bg2.jpg);">
    <div class="container">
        <h2>Warisan Budaya Tak Benda</h2>
        <p class="text-white">Jelajahi Kekayaan Budaya Ketapang: Temukan Warisan Budaya Tak Benda yang Memukau!</p>
        <div class="row g-3 align-items-center mt-2 justify-content-center">
            <div class="col-6">
                <form action="{{ url('warisan-budaya-tak-benda') }}" method="GET">
                    <input type="text" id="inputSearch" name="search" class="form-control mx-sm-3"
                        placeholder="Cari Warisan Budaya Tak Benda..." aria-describedby="searchHelpInline">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="blog-one blog-grid-page" style="margin-top: -80px;">
    <div class="container">
        <div class="row">
            @foreach ($warisan as $item)
            <div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <img src="{{ asset(empty($item->foto) ? 'assets-landing/images/blog/blog-1-1.jpg' : $item->foto) }}"
                            height="250">
                    </div>
                    <div class="blog-one__content">
                        <h3>
                            <a href="{{ url('warisan-budaya-tak-benda/detail', $item->id) }}">
                                {{ $item->nama }}
                            </a>
                        </h3>
                        <p class="text-justify">
                            {{ Str::limit($item->deskripsi, 60) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection