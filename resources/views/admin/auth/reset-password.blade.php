@extends('admin.auth.base')

@section('content')
    <div class="mx-auto w-auto d-block bg-white shadow-lg rounded my-5">
        <div class="py-3 px-5">
            <div class="text-center mb-1">
                <x-admin-logo></x-admin-logo>
            </div>

            <x-admin-alert></x-admin-alert>

            <h1 class="h5 mt-2 mb-1">Reset Kata Sandi</h1>
            <p class="text-muted mb-4">Masukkan kata sandi baru anda dan konfirmasi untuk mengatur ulang kata sandi.</p>
            <div class="text-center">
                <img src="{{ asset('assets-admin/images/users/avatar-2.jpg') }}"
                    class="avatar-md rounded-circle img-thumbnail">
                <h1 class="h5 mb-4 mt-2">{{ $user->name }}</h1>
            </div>
            <form action="{{ url('reset-password') }}" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{ $user->email }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi Baru"
                        value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <input type="password" name="konfirmasi_password" class="form-control"
                        placeholder="Masukkan Konfirmasi Kata Sandi" value="{{ old('password_confirmation') }}">
                </div>
                <button type="submit" class="btn btn-warning btn-block waves-effect waves-light mb-2">
                    Simpan
                </button>
            </form>
        </div> <!-- end .padding-5 -->
    </div>
@endsection
