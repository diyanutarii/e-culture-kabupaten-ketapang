@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">@lang('admin/tangible.title')</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item active">@lang('admin/tangible.title')</li>
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
                                <span>@lang('admin/tangible.table-title')</span>

                                <a id="createButton" href="{{ url('tangible-cultural-heritages/create') }}"
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
                                        <th>@lang('admin/tangible.table.name')</th>
                                        <th>@lang('admin/tangible.table.address')</th>
                                    </tr>
                                </thead>
                                @if (env('AJAX') == false)
                                    <tbody>
                                        @foreach ($tangible_cultural_heritages as $tangible)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('tangible-cultural-heritages/detail', Crypt::encrypt($tangible->id)) }}"
                                                            class="btn btn-sm btn-dark">
                                                            @lang('forms.button.details')
                                                        </a>
                                                        <a href="{{ url('tangible-cultural-heritages/edit', Crypt::encrypt($tangible->id)) }}"
                                                            class="btn btn-sm btn-warning">
                                                            @lang('forms.button.edit')
                                                        </a>
                                                        <form action="{{ url('tangible-cultural-heritages/destroy') }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" name="id"
                                                                value="{{ $tangible->id }}">
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                data-id="{{ $tangible->id }}"
                                                                onclick="return confirm('@lang('commons.confirmation.delete')')">
                                                                @lang('forms.button.delete')
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>{{ $tangible->name }}</td>
                                                <td>{{ $tangible->address }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container-fluid -->
    </div>
@endsection
