<?php

namespace App\Http\Controllers;

use App\Models\Pustaka;
use Illuminate\Http\Request;

class PustakaController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Kuliner';
        $data['pustaka'] = Pustaka::orderBy('id', 'desc')->get();

        return view('admin.pustaka.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Kuliner';
        $data['pustaka'] = Pustaka::where('id', $request->id)->firstOrFail();

        return view('admin.pustaka.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Kuliner';

        return view('admin.pustaka.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Kuliner';
        $data['pustaka'] = Pustaka::where('id', $request->id)->firstOrFail();

        return view('admin.pustaka.form', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ], [
            'judul.required' => 'Nama wajib diisi.',
            'konten.required' => 'Konten wajib diisi.',
        ]);

        $gambar = $request->hidden_gambar;

        if ($request->file('gambar')) {
            $path = 'public/pustaka/';
            $file = $request->file('gambar');
            $file_name = $request->title . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $gambar = "storage/pustaka/" . $file_name;
        }

        $data = Pustaka::updateOrCreate([
            'id' => $request->id,
        ], [
            'gambar' => $gambar,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        if ($request->id == $data->id) {
            return redirect('pustaka')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('pustaka')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Pustaka::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}