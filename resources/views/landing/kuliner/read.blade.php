@extends('landing.template.base')

@section('content')
    <section class="">
        <div class="container">
            <div class="blog-details__main">
                <div class="blog-details__image">
                    <img src="{{ asset($kuliner->gambar) }}" class="img-fluid">
                </div>
                <ul class="blog-one__meta list-unstyled">
                    <li>{{ Carbon\Carbon::parse($kuliner->created_at)->diffForHumans() }}</li>
                </ul>
                <h3>{{ $kuliner->judul }}</h3>
                <br>
                <p>{{ $kuliner->konten }}</p>
            </div>
        </div>
    </section>
@endsection
