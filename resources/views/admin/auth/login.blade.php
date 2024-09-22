@extends('admin.auth.base')

@section('content')
    <div class="mx-auto w-100 d-block bg-white shadow-lg rounded my-5">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
            <div class="col-lg-7">
                <div class="py-3 px-5">
                    <div class="text-center mb-1">
                        <x-admin-logo></x-admin-logo>
                    </div>

                    <x-admin-alert></x-admin-alert>

                    <h1 class="h5 mt-2 mb-1">Selamat Datang!</h1>
                    <p class="text-muted mb-4">Masukkan email dan kata sandimu untuk mengakses panel admin.</p>
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control form-control-user"
                                placeholder="Masukkan Email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-user"
                                placeholder="Masukkan Kata Sandi" value="{{ old('password') }}">
                        </div>
                        <button type="submit" class="btn btn-warning btn-block waves-effect waves-light">
                            Masuk
                        </button>
                    </form>

                    {{-- <div class="row mt-4">
                        <div class="col-12 text-center">
                            <p class="text-muted mb-2">
                                <a href="{{ url('lupa-kata-sandi') }}" class="text-muted font-weight-medium ml-1">
                                    Lupa Kata Sandimu?
                                </a>
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
