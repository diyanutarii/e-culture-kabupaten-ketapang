@extends('landing.template.base')

@section('content')
<section class="page-header" style="background-image: url(images/background/bg4.jpg);">
    <div class="container">
        <h2>Situs Cagar Budaya</h2>
        <p class="text-white">Telusuri Jejak Sejarah Melalui Situs Cagar Budaya</p>
        <div class="row g-3 align-items-center mt-2 justify-content-center">
            <div class="col-6">
                <form action="{{ url('situs-cagar-budaya') }}" method="GET">
                    <input type="text" id="inputSearch" name="search" class="form-control mx-sm-3"
                        placeholder="Cari Situs Cagar Budaya..." aria-describedby="searchHelpInline">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
</section>

<section class="blog-one blog-grid-page" style="margin-top: -80px;">
    <div class="container">
        <div class="row g-3 align-items-center mt-2">
            <!-- <div class="col-auto">
                                <form action="{{ route('situs-cagar-budaya.search') }}" method="GET">
                                    <input type="text" id="inputSearch" name="search" class="form-control mx-sm-3" aria-describedby="searchHelpInline">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </form>
                            </div> -->
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
@endsection