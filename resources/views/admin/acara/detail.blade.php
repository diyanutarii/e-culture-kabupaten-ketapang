@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('acara') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Acara</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Acara</h4>

                    <div class="row">
                        @if ($acara->gambar)
                            <div class="col-4">
                                <div class="mt-1">
                                    <span class="font-weight-bold mb-2">
                                        Gambar
                                    </span>
                                    <img src="{{ asset($acara->gambar) }}" class="img-fluid">
                                </div>
                            </div>
                        @endif
                        <div class="col">
                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Nama Acara
                                </span>
                                <p>{{ $acara->nama }}</p>
                            </div>

                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Tanggal
                                </span>
                                <p>
                                    {{ Carbon\Carbon::parse($acara->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                </p>
                            </div>

                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Deskripsi
                                </span>
                                <p>{!! $acara->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
