@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url()->previous() }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> Kembali
                        </a>

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Profil</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <x-admin-alert></x-admin-alert>

            <div class="card">
                <form id="form" action="{{ url('edit-profil') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="col-12 col-lg-4">
                            <div class="form-group mt-2">
                                <label for="foto">
                                    Foto
                                </label>
                                <input id="hiddenFoto" type="hidden" name="hidden_foto"
                                    value="{{ empty(Auth::user()->foto) ? null : Auth::user()->foto }}">
                                <input id="foto" type="file" name="foto" class="dropify"
                                    data-default-file="{{ empty(Auth::user()->foto) ? null : asset(Auth::user()->foto) }}"
                                    accept=".jpg, .png" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group mt-2">
                                <label for="nama">
                                    Nama<x-admin-required></x-admin-required>
                                </label>
                                <input id="nama" type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama" value="{{ Auth::user()->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email<x-admin-required></x-admin-required>
                                </label>
                                <input id="email" type="text" name="email" class="form-control"
                                    value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group mt-2">
                                <label for="password">
                                    Ganti Password
                                </label>
                                <input id="password" type="password" name="password" class="form-control"
                                    placeholder="Masukkan Password Baru">
                            </div>

                            <div class="form-group">
                                <label for="konfirmasiPassword">
                                    Konfirmasi Password
                                </label>
                                <input id="konfirmasiPassword" type="password" name="konfirmasi_password"
                                    class="form-control" placeholder="Masukkan Konfirmasi Password">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
