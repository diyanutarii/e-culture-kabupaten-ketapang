@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Kuliner</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item active">Kuliner</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <x-admin-alert></x-admin-alert>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title d-flex justify-content-between">
                                <span>Tabel Kuliner</span>

                                    <a href="{{ url('pustaka/create') }}" class="btn btn-dark waves-effect waves-light">
                                        <i class="mdi mdi-plus"></i>
                                        <span>Tambah</span>
                                    </a>
                            </h4>

                            <table class="table datatable nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10">No</th>
                                        <th width="30">Aksi</th>
                                        <th>Judul</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pustaka as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('pustaka/detail', $item->id) }}"
                                                        class="btn btn-sm btn-dark">
                                                        Detail
                                                    </a>
                                                    <a href="{{ url('pustaka/edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        Edit
                                                    </a>
                                                    <form action="{{ url('pustaka/destroy') }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $item->judul }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
