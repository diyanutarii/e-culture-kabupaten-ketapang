@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('warisan-budaya-tak-benda') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Warisan Budaya Tak Benda</li>

                                <li class="breadcrumb-item active">
                                    @if (Route::current()->uri == 'warisan-budaya-tak-benda/create')
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
                <form action="{{ url('warisan-budaya-tak-benda/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <div class="card-body row">
                            @csrf
                            <input id="id" type="hidden" name="id"
                                value="{{ empty($warisan_budaya_tak_benda->id) ? null : $warisan_budaya_tak_benda->id }}">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="foto">
                                        Foto
                                    </label>
                                    <input id="hiddenFoto" type="hidden" name="hidden_foto"
                                        value="{{ empty($warisan_budaya_tak_benda->foto) ? null : $warisan_budaya_tak_benda->foto }}">
                                    <input id="foto" type="file" name="foto" class="dropify"
                                        data-default-file="{{ empty($warisan_budaya_tak_benda->foto) ? null : asset($warisan_budaya_tak_benda->foto) }}"
                                        accept=".jpg, .png" />
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="nama">
                                        Nama<x-admin-required></x-admin-required>
                                    </label>
                                    <input id="nama" type="text" name="nama" class="form-control"
                                        placeholder="Masukkan Nama"
                                        value="{{ empty($warisan_budaya_tak_benda->nama) ? null : $warisan_budaya_tak_benda->nama }}">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="nomor_sk">
                                        Nomor SK<x-admin-required></x-admin-required>
                                    </label>
                                    <input id="nomor_sk" type="text" name="nomor_sk" class="form-control"
                                        placeholder="Masukkan Nomor SK"
                                        value="{{ empty($warisan_budaya_tak_benda->nomor_sk) ? null : $warisan_budaya_tak_benda->nomor_sk }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-2">
                                    <label for="deskripsi">
                                        Deskripsi<x-admin-required></x-admin-required>
                                    </label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="10">{{ empty($warisan_budaya_tak_benda->deskripsi) ? null : $warisan_budaya_tak_benda->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Route::current()->uri == 'warisan-budaya-tak-benda/create')
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
