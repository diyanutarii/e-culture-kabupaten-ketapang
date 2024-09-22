<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function login()
    {
        $data['title'] = 'Login';

        return view('admin.auth.login', $data);
    }

    function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat surel yang valid.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi minimal bernilai 8 karakter.',
        ]);

        $kredensial = $request->only('email', 'password');

        if (Auth::attempt($kredensial)) {
            return redirect()->intended('beranda')->with([
                'message' => 'Login Berhasil!',
            ]);
        } else {
            return back()->withErrors([
                'message' => 'Gagal Masuk! Email Atau Kata Sandi Tidak Sesuai',
            ]);
        }
    }

    function lupaKataSandi()
    {
        $data['title'] = 'Lupa Kata Sandi';

        return view('admin.auth.lupa-password', $data);
    }

    function lupaKataSandiProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat surel yang valid.',
        ]);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        if ($response === Password::RESET_LINK_SENT) {
            return back()->with([
                'message' => 'Berhasil! Kami telah mengirimkan tautan melalui email anda.',
            ]);
        } else {
            return back()->withErrors([
                'message' => 'Gagal! Kami tidak menemukan pengguna dengan email tersebut.',
            ]);
        }
    }

    function resetKataSandi(Request $request)
    {
        $data['title'] = 'Reset Kata Sandi';
        $data['user'] = Admin::where('email', $request->email)->firstOrFail();
        $data['token'] = $request->token;

        return view('admin.auth.reset-password', $data);
    }

    function resetKataSandiProcess(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|same:password'
        ], [
            'token.required' => 'Token wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat surel yang valid.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi minimal bernilai 8 karakter.',
            'konfirmasi_password.required' => 'Konfirmasi kata sandi wajib diisi.',
            'konfirmasi_password.same' => 'Konfirmasi kata sandi Tidak Sama.',
        ]);

        $response = Password::reset(
            $request->only('email', 'password', 'konfirmasi_password', 'token'),
            function (Admin $admin, string $password) {
                $admin->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $admin->save();

                event(new PasswordReset($admin));
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return redirect('/login')->with([
                'message' => 'Berhasil! Kata sandi anda berhasil diubah.',
            ]);
        } else {
            return back()->withErrors([
                'message' => 'Gagal! Token sudah kadaluarsa.',
            ]);
        }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->withErrors([
            'message' => 'Anda Berhasil Keluar!',
        ]);
    }
}
