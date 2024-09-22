@extends('landing.template.base')

@section('content')
    <section class="event-details" style="margin-top: -80px">
        <div class="container">
            <div class="event-details__top">
                <p>Situs Cagar Budaya</p>
                <h3>{{ $situs->nama }}</h3>
            </div>
            <div class="row high-gutter">
                <div class="col-lg-8">
                    <div class="event-details__main">
                        <div class="event-details__image">
                            <img src="{{ asset(empty($situs->foto) ? '' : $situs->foto) }}">
                        </div>
                        <div class="event-details__content">
                            <p class="text-justify">{{ $situs->deskripsi }}</p>

                            <div id="map" class="mt-2" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-details__booking">
                        <ul class="event-details__booking-info list-unstyled">
                            <li>
                                <span>Nomor SK:</span>
                                {{ $situs->nomor_sk }}
                            </li>
                            <li>
                                <span>Alamat:</span>
                                {{ $situs->alamat }}
                            </li>
                            <li>
                                <span>Latitude:</span>
                                {{ $situs->latitude }}
                            </li>
                            <li>
                                <span>Longitude:</span>
                                {{ $situs->longitude }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k" async defer></script>

    <script>
        $(document).ready(function() {
            initMap();
        });

        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Browser anda tidak mendukung untuk menampilkan peta kami.");
            }
        }

        function success(position) {
            var latitude = {{ $situs->latitude }};
            var longitude = {{ $situs->longitude }};
            myLatLng = new google.maps.LatLng(latitude, longitude);
            createMap(myLatLng);
        }

        function fail() {
            alert("Gagal menampilkan peta, cobalah periksa koneksi internetmu");
        }

        function createMap(myLatLng) {
            map = new google.maps.Map(document.getElementById("map"), {
                center: myLatLng,
                zoom: 12.5,
            });

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(myLatLng),
                map: map,
                title: '{{ $situs->nama }}',
            });
        }
    </script>
@endpush
