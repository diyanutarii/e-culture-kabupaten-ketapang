@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('legenda') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Legenda</li>

                                <li class="breadcrumb-item active">
                                    @if (Route::current()->uri == 'legenda/create')
                                        Tambah
                                    @else
                                        Edit
                                    @endif
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <x-admin-alert></x-admin-alert>

            <div class="card">
                <form id="form" action="{{ url('legenda/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input id="id" type="hidden" name="id"
                            value="{{ empty($legenda->id) ? null : $legenda->id }}">
                        <div class="col-12 col-lg-5">
                            <div class="form-group mt-2">
                                <label for="gambar">
                                    Gambar
                                </label>
                                <input id="hiddenGambar" type="hidden" name="hidden_gambar"
                                    value="{{ empty($legenda->gambar) ? null : $legenda->gambar }}">
                                <input id="gambar" type="file" name="gambar" class="dropify"
                                    data-default-file="{{ empty($legenda->gambar) ? null : asset($legenda->gambar) }}"
                                    accept=".jpg, .png" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="form-group mt-2">
                                <label for="judul">
                                    Judul<x-admin-required></x-admin-required>
                                </label>
                                <input id="judul" type="text" name="judul" class="form-control"
                                    placeholder="Masukkan Judul"
                                    value="{{ empty($legenda->judul) ? null : $legenda->judul }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <label for="konten">
                                    Konten<x-admin-required></x-admin-required>
                                </label>
                                <textarea id="konten" name="konten" class="form-control" rows="10">{{ empty($legenda->konten) ? null : $legenda->konten }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Route::current()->uri == 'pustaka/create')
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        @else
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection