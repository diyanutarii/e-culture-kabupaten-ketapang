@extends('admin.template.base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <a href="{{ url('administrators') }}" class="text-dark">
                            <i class="mdi mdi-arrow-left"></i> @lang('forms.button.back')
                        </a>

                        <div class="page-title-right d-none d-sm-block">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">@lang('admin/administrator.page-title')</li>

                                @if (Route::current()->uri == 'administrators/create')
                                    <li class="breadcrumb-item active">@lang('commons.create')</li>
                                @else
                                    <li class="breadcrumb-item active">@lang('commons.edit')</li>
                                @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <x-admin-alert></x-admin-alert>

            <div class="card">
                <form id="form" action="{{ url('administrators/store') }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <input id="id" type="hidden" name="id"
                            value="{{ empty($administrator->id) ? null : $administrator->id }}">
                        <div class="col-12 col-lg-5">
                            <div class="form-group mt-2">
                                <label for="photo">
                                    @lang('forms.photo.label')
                                </label>
                                <input id="hiddenPhoto" type="hidden" name="hidden_photo"
                                    value="{{ empty($administrator->photo) ? null : $administrator->photo }}">
                                <input id="photo" type="file" name="photo" class="dropify"
                                    data-default-file="{{ empty($administrator->photo) ? null : asset($administrator->photo) }}"
                                    accept=".jpg, .png" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="form-group mt-2">
                                <label for="name">
                                    @lang('forms.name.label')<span class="text-danger" title="@lang('commons.required')">*</span>
                                </label>
                                <input id="name" type="text" name="name" class="form-control"
                                    placeholder="@lang('forms.name.placeholder')"
                                    @if (old('name')) value="{{ old('name') }}"
                                    @else
                                        value="{{ empty($administrator->name) ? null : $administrator->name }}" @endif>
                                <span id="nameError" class="invalid-feedback"></span>
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    @lang('forms.email.label')
                                    <span class="text-danger" title="@lang('commons.required')">*</span>
                                </label>
                                <input id="email" type="text" name="email" class="form-control"
                                    placeholder="@lang('forms.email.placeholder')"
                                    @if (old('email')) value="{{ old('email') }}"
                                    @else
                                        value="{{ empty($administrator->email) ? null : $administrator->email }}" @endif>
                                <span id="emailError" class="invalid-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if (Route::current()->uri == 'administrators/create')
                            <button id="submit" type="submit" class="btn btn-primary">@lang('forms.button.create')</button>
                        @else
                            <button id="submit" type="submit" class="btn btn-warning">@lang('forms.button.save')</button>
                        @endif
                    </div>
                </form>
                <!-- end card-body-->
            </div>
            <!-- end card -->
        </div> <!-- container-fluid -->
    </div>
@endsection
