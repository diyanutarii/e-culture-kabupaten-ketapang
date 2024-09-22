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

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Acara</li>

                                <li class="breadcrumb-item active">
                                    @if (Route::current()->uri == 'acara/create')
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
                <form id="form" action="{{ url('acara/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input id="id" type="hidden" name="id"
                            value="{{ empty($acara->id) ? null : $acara->id }}">
                        <div class="col-12 col-lg-5">
                            <div class="form-group mt-2">
                                <label for="gambar">
                                    Gambar
                                </label>
                                <input id="hiddenGambar" type="hidden" name="hidden_gambar"
                                    value="{{ empty($acara->gambar) ? null : $acara->gambar }}">
                                <input id="gambar" type="file" name="gambar" class="dropify"
                                    data-default-file="{{ empty($acara->gambar) ? null : asset($acara->gambar) }}"
                                    accept=".jpg, .png" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="form-group mt-2">
                                <label for="nama">
                                    Nama<x-admin-required></x-admin-required>
                                </label>
                                <input id="nama" type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama" value="{{ empty($acara->nama) ? null : $acara->nama }}">
                            </div>

                            <div class="form-group mt-2">
                                <label for="tanggal">
                                    Tanggal<x-admin-required></x-admin-required>
                                </label>
                                <input id="tanggal" type="date" name="tanggal" class="form-control"
                                    value="{{ empty($acara->tanggal) ? null : $acara->tanggal }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <label for="deskripsi">
                                    Deskripsi<x-admin-required></x-admin-required>
                                </label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="10">{{ empty($acara->deskripsi) ? null : $acara->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Route::current()->uri == 'acara/create')
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
