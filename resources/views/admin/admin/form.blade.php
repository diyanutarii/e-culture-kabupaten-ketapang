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

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Administrator</li>

                                <li class="breadcrumb-item active">
                                    @if (Route::current()->uri == 'admin/create')
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
                <form id="form" action="{{ url('admin/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input id="id" type="hidden" name="id"
                            value="{{ empty($admin->id) ? null : $admin->id }}">
                        <div class="col-12 col-lg-5">
                            <div class="form-group mt-2">
                                <label for="foto">
                                    Foto
                                </label>
                                <input id="hiddenFoto" type="hidden" name="hidden_foto"
                                    value="{{ empty($admin->foto) ? null : $admin->foto }}">
                                <input id="foto" type="file" name="foto" class="dropify"
                                    data-default-file="{{ empty($admin->foto) ? null : asset($admin->foto) }}"
                                    accept=".jpg, .png" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="form-group mt-2">
                                <label for="nama">
                                    Nama<x-admin-required></x-admin-required>
                                </label>
                                <input id="nama" type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama" value="{{ empty($admin->nama) ? null : $admin->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email<x-admin-required></x-admin-required>
                                </label>
                                <input id="email" type="text" name="email" class="form-control"
                                    placeholder="Masukkan Email" value="{{ empty($admin->email) ? null : $admin->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Route::current()->uri == 'admin/create')
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
