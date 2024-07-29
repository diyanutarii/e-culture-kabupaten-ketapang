@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">@lang('admin/administrator.title')</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item active">@lang('admin/administrator.title')</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <x-admin-alert></x-admin-alert>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title d-flex justify-content-between">
                                <span>@lang('admin/administrator.table-title')</span>

                                <a id="createButton" href="{{ url('administrators/create') }}"
                                    class="btn btn-dark waves-effect waves-light">
                                    <i class="mdi mdi-plus"></i>
                                    <span>@lang('forms.button.create')</span>
                                </a>
                            </h4>

                            <table id="datatable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10">No</th>
                                        <th width="30"></th>
                                        <th>@lang('admin/administrator.table.name')</th>
                                        <th>@lang('admin/administrator.table.email')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrators as $administrator)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('administrators/detail', Crypt::encrypt($administrator->id)) }}"
                                                        class="btn btn-sm btn-dark">
                                                        @lang('forms.button.details')
                                                    </a>
                                                    <a href="{{ url('administrators/edit', Crypt::encrypt($administrator->id)) }}"
                                                        class="btn btn-sm btn-warning">
                                                        @lang('forms.button.edit')
                                                    </a>
                                                    <form action="{{ url('administrators/destroy') }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id"
                                                            value="{{ $administrator->id }}">
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            data-id="{{ $administrator->id }}"
                                                            onclick="return confirm('@lang('commons.confirmation.delete')')">
                                                            @lang('forms.button.delete')
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $administrator->name }}</td>
                                            <td>{{ $administrator->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container-fluid -->
    </div>
@endsection
