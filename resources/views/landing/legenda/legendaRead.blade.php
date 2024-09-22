@extends('landing.template.base')

@section('content')
    <section class="">
        <div class="container">
            <div class="blog-details__main">
                <div class="blog-details__image">
                    <img src="{{ asset($legenda->gambar) }}" class="img-fluid">
                </div>
                <ul class="blog-one__meta list-unstyled">
                    <li>{{ Carbon\Carbon::parse($legenda->created_at)->diffForHumans() }}</li>
                </ul>
                <h3>{{ $legenda->judul }}</h3>
                <br>
                <p>{{ $legenda->konten }}</p>
            </div>
        </div>
    </section>
@endsection
