@extends('landing.template.base')

@section('content')
    <section class="event-details" style="margin-top: -100px;">
        <div class="container">
            <div class="event-details__top">
                <p>{{ Carbon\Carbon::parse($acara->tanggal)->isoFormat('dddd, D MMMM Y') }}</p>
                <h3>{{ $acara->nama }}</h3>
            </div>
            <div class="row high-gutter">
                <div class="col-lg-5">
                    <div class="event-details__main">
                        <div class="event-details__image">
                            <img src="{{ asset($acara->gambar) }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <h3>Detail Acara</h3>
                    <ul class="event-details__contact list-unstyled">
                        <li>
                            <span>Nama Acara: </span>
                            {{ $acara->nama }}
                        </li>
                        <li>
                            <span>Tanggal:</span>
                            {{ Carbon\Carbon::parse($acara->tanggal)->isoFormat('dddd, D MMMM Y') }}
                        </li>
                        <li>
                            <span>Deskripsi:</span>
                            <p style="line-height: 25px;">
                                {{ $acara->deskripsi }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
