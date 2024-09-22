<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Acara';
        $data['acara'] = Acara::orderBy('id', 'desc')->get();

        return view('admin.acara.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Acara';
        $data['acara'] = Acara::where('id', $request->id)->firstOrFail();

        return view('admin.acara.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Acara';

        return view('admin.acara.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Acara';
        $data['acara'] = Acara::where('id', $request->id)->firstOrFail();

        return view('admin.acara.form', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        $gambar = $request->hidden_gambar;
        if ($request->file('gambar')) {
            $path = 'public/acara/';
            $file = $request->file('gambar');
            $file_name = $request->nama . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $gambar = "storage/acara/" . $file_name;
        }

        $data = Acara::updateOrCreate([
            'id' => $request->id,
        ], [
            'gambar' => $gambar,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->id == $data->id) {
            return redirect('acara')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('acara')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Acara::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
