<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    function profil()
    {
        $data['title'] = 'Profil';

        return view('admin.profil', $data);
    }

    function editProfil(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => $request->password ? 'min:8' : 'nullable',
            'konfirmasi_password' => $request->password ? 'required|same:password' : 'nullable',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat surel yang valid.',
            'password.min' => 'Kata sandi minimal bernilai 8 karakter.',
            'konfirmasi_password.required' => 'Konfirmasi kata sandi wajib diisi.',
            'konfirmasi_password.same' => 'Konfirmasi kata sandi Tidak Sama.',
        ]);

        $foto = $request->hidden_foto;
        if ($request->file('foto')) {
            $path = 'public/admin/';
            $file = $request->file('foto');
            $file_name = $request->email . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $foto = "storage/admin/" . $file_name;
        }

        $admin = Admin::findOrFail($request->id);
        $admin->foto = $foto;
        $admin->nama = $request->nama;
        if ($request->password && $request->password == $request->konfirmasi_password) {
            $admin->password = bcrypt($request->password);
        }
        $admin->update();

        return back()->with([
            'message' => 'Berhasil! Data telah diperbarui.',
        ]);
    }
}
