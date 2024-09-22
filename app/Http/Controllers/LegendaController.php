<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legenda;

class LegendaController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Legenda';
        $data['legenda'] = Legenda::orderBy('id', 'desc')->get();

        return view('admin.legenda.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Legenda';
        $data['legenda'] = Legenda::where('id', $request->id)->firstOrFail();

        return view('admin.legenda.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Legenda';

        return view('admin.legenda.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Legenda';
        $data['legenda'] = Legenda::where('id', $request->id)->firstOrFail();

        return view('admin.legenda.form', $data);
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
            $path = 'public/legenda/';
            $file = $request->file('gambar');
            $file_name = $request->title . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $gambar = "storage/legenda/" . $file_name;
        }

        $data = legenda::updateOrCreate([
            'id' => $request->id,
        ], [
            'gambar' => $gambar,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        if ($request->id == $data->id) {
            return redirect('legenda')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('legenda')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Legenda::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
