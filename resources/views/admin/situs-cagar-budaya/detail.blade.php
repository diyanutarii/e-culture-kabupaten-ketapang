@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('situs-cagar-budaya') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Situs Cagar Budaya</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Situs Cagar Budaya</h4>

                    <div class="row">
                        @if ($situs_cagar_budaya->foto)
                            <div class="col-4">
                                <div class="mt-1">
                                    <span class="font-weight-bold mb-2">
                                        Foto
                                    </span><br>
                                    <img src="{{ asset($situs_cagar_budaya->foto) }}" class="img-fluid">
                                </div>
                            </div>
                        @endif
                        <div class="col">
                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Nama
                                </span>
                                <p>{{ $situs_cagar_budaya->nama }}</p>
                            </div>

                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Nomor SK
                                </span>
                                <p>{{ $situs_cagar_budaya->nomor_sk }}</p>
                            </div>

                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Alamat
                                </span>
                                <p>{{ $situs_cagar_budaya->alamat }}</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Latitude, Longitude
                                </span>
                                <p>
                                    {{ $situs_cagar_budaya->latitude }},
                                    {{ $situs_cagar_budaya->longitude }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <span class="font-weight-bold">
                                Deskripsi
                            </span><br>

                            <p class="text-justify">
                                {{ $situs_cagar_budaya->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
