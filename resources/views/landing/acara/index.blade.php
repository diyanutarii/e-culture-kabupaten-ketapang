@extends('landing.template.base')

@section('content')
<section class="page-header" style="background-image: url(images/background/bg1.jpg);">
    <div class="container">
        <h2>Acara</h2>
        <div class="row g-3 align-items-center mt-2 justify-content-center">
            <div class="col-6">
                <form action="{{ url('acara') }}" method="GET">
                    <input type="text" id="inputSearch" name="search" class="form-control mx-sm-3"
                        placeholder="Cari Acara..." aria-describedby="searchHelpInline">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="event-one event-one__event-page-2">
    <div class="container">
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
@endsection