@extends('landing.template.base')

@section('content')
    <section class="event-details" style="margin-top: -100px;">
        <div class="container">
            <div class="event-details__top">
                <p>Warisan Budaya Tak Benda</p>
                <h3>{{ $warisan->nama }}</h3>
            </div>
            <div class="high-gutter">
                <div class="event-details__main">
                    <div class="event-details__image">
                        <img src="{{ asset($warisan->foto) }}">
                    </div>
                    <div class="event-details__content">
                        <p>{{ $warisan->deskripsi }}</p>

                        <ul class="event-details__contact list-unstyled">
                            <li>
                                <span>Nomor SK:</span>
                                {{ $warisan->nomor_sk }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
