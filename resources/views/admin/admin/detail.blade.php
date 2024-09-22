@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('admin') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Administrator</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Administrator</h4>

                    <div class="row">
                        @if ($admin->foto)
                            <div class="col-4">
                                <div class="mt-1">
                                    <span class="font-weight-bold mb-2">
                                        Foto
                                    </span>
                                    <img src="{{ asset($admin->foto) }}" class="img-fluid">
                                </div>
                            </div>
                        @endif
                        <div class="col">
                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Email
                                </span>
                                <p>{{ $admin->email }}</p>
                            </div>

                            <div class="mt-1">
                                <span class="font-weight-bold">
                                    Nama
                                </span>
                                <p>{{ $admin->nama }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
