<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuliner;

class KulinerController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Kuliner';
        $data['kuliner'] = Kuliner::orderBy('id', 'desc')->get();

        return view('admin.kuliner.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Kuliner';
        $data['kuliner'] = Kuliner::where('id', $request->id)->firstOrFail();

        return view('admin.kuliner.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Kuliner';

        return view('admin.kuliner.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Kuliner';
        $data['kuliner'] = Kuliner::where('id', $request->id)->firstOrFail();

        return view('admin.kuliner.form', $data);
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
            $path = 'public/kuliner/';
            $file = $request->file('gambar');
            $file_name = $request->title . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $gambar = "storage/kuliner/" . $file_name;
        }

        $data = Kuliner::updateOrCreate([
            'id' => $request->id,
        ], [
            'gambar' => $gambar,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        if ($request->id == $data->id) {
            return redirect('kuliner')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('kuliner')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Kuliner::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
