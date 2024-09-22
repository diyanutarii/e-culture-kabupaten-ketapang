<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Admin';
        $data['admins'] = Admin::orderBy('id', 'desc')->get();

        return view('admin.admin.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Admin';
        $data['admin'] = Admin::where('id', $request->id)->firstOrFail();

        return view('admin.admin.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Admin';

        return view('admin.admin.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Admin';
        $data['admin'] = Admin::where('id', $request->id)->firstOrFail();

        return view('admin.admin.form', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:admin,email,' . $request->id . ',id',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat surel yang valid.',
            'email.unique' => 'Email sudah ada.',
        ]);

        $foto = $request->hidden_foto;
        if ($request->file('foto')) {
            $path = 'public/admin/';
            $file = $request->file('foto');
            $file_name = $request->email . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $foto = "storage/admin/" . $file_name;
        }

        $data = Admin::updateOrCreate([
            'id' => $request->id,
        ], [
            'foto' => $foto,
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        if ($request->id == $data->id) {
            return redirect('admin')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('admin')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Admin::findOrFail($request->id);
        $data->delete();

        return  back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
