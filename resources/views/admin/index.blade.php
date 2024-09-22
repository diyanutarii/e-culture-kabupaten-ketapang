@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <x-admin-alert></x-admin-alert>

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Beranda</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Ketapang Berbudaye</li>
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">
                                    Situs Cagar Budaya
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $jumlah_situs_cagar_budaya }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">
                                    Warisan Budaya Tak Benda
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $jumlah_warisan_budaya_tak_benda }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">
                                    Acara
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $jumlah_acara }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">
                                    Kuliner
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $jumlah_pustaka }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">
                                    Legenda
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $jumlah_legenda }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
