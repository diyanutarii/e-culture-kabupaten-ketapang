@extends('admin.auth.base')

@section('content')
    <div class="mx-auto w-auto d-block bg-white shadow-lg rounded my-5">
        <div class="py-3 px-5">
            <div class="text-center mb-1">
                <x-admin-logo></x-admin-logo>
            </div>

            <x-admin-alert></x-admin-alert>

            <h1 class="h5 mt-2 mb-1">Lupa Kata Sandi</h1>
            <p class="text-muted mb-4">Kami akan mengirimkan sebuah tautan untuk membantumu mengatur ulang kata sandi.</p>
            <form action="{{ url('lupa-password') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-user" placeholder="Masukkan Email"
                        value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-warning btn-block waves-effect waves-light">
                    Kirim
                </button>
            </form>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="text-muted mb-2">
                        Sudah Punya Akun?
                        <a href="{{ url('login') }}" class="text-muted font-weight-medium ml-1">
                            <b>Masuk Disini</b>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
