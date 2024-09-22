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

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Situs Cagar Budaya</li>

                                <li class="breadcrumb-item active">
                                    @if (Route::current()->uri == 'situs-cagar-budaya/create')
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
                <form action="{{ url('situs-cagar-budaya/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input id="id" type="hidden" name="id"
                            value="{{ empty($situs_cagar_budaya->id) ? null : $situs_cagar_budaya->id }}">
                        <div class="col-12 col-lg-6">
                            <div class="form-group mt-2">
                                <label for="foto">
                                    Foto
                                </label>
                                <input id="hiddenFoto" type="hidden" name="hidden_foto"
                                    value="{{ empty($situs_cagar_budaya->foto) ? null : $situs_cagar_budaya->foto }}">
                                <input id="foto" type="file" name="foto" class="dropify"
                                    data-default-file="{{ empty($situs_cagar_budaya->foto) ? null : asset($situs_cagar_budaya->foto) }}"
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
                                    value="{{ empty($situs_cagar_budaya->nama) ? null : $situs_cagar_budaya->nama }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="nomor_sk">
                                    Nomor SK<x-admin-required></x-admin-required>
                                </label>
                                <input id="nomor_sk" type="text" name="nomor_sk" class="form-control"
                                    placeholder="Masukkan Nomor SK"
                                    value="{{ empty($situs_cagar_budaya->nomor_sk) ? null : $situs_cagar_budaya->nomor_sk }}">
                            </div>
                            <div class="form-group mt-2">
                                <label for="alamat">
                                    Alamat<x-admin-required></x-admin-required>
                                </label>
                                <input id="alamat" type="text" name="alamat" class="form-control"
                                    placeholder="Masukkan Alamat"
                                    value="{{ empty($situs_cagar_budaya->alamat) ? null : $situs_cagar_budaya->alamat }}">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="latitude">
                                            Latitude<x-admin-required></x-admin-required>
                                        </label>
                                        <input id="latitude" type="text" name="latitude" class="form-control"
                                            placeholder="Masukkan Latitude"
                                            value="{{ empty($situs_cagar_budaya->latitude) ? null : $situs_cagar_budaya->latitude }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="longitude">
                                            Longitude<x-admin-required></x-admin-required>
                                        </label>
                                        <input id="longitude" type="text" name="longitude" class="form-control"
                                            placeholder="Masukkan Longitude"
                                            value="{{ empty($situs_cagar_budaya->longitude) ? null : $situs_cagar_budaya->longitude }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mt-2">
                            <label for="deskripsi">
                                Deskripsi<x-admin-required></x-admin-required>
                            </label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" rows="10">{{ empty($situs_cagar_budaya->deskripsi) ? null : $situs_cagar_budaya->deskripsi }}</textarea>
                        </div>
                    </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                @if (Route::current()->uri == 'situs-cagar-budaya/create')
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
