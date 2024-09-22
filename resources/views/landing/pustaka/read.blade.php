@extends('landing.template.base')

@section('content')
    <section class="">
        <div class="container">
            <div class="blog-details__main">
                <div class="blog-details__image">
                    <img src="{{ asset($pustaka->gambar) }}" class="img-fluid">
                </div>
                <ul class="blog-one__meta list-unstyled">
                    <li>{{ Carbon\Carbon::parse($pustaka->created_at)->diffForHumans() }}</li>
                </ul>
                <h3>{{ $pustaka->judul }}</h3>
                <br>
                <p>{{ $pustaka->konten }}</p>
            </div>
        </div>
    </section>
@endsection
