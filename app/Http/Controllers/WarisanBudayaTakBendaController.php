<?php

namespace App\Http\Controllers;

use App\Models\WarisanBudayaTakBenda;
use Illuminate\Http\Request;

class WarisanBudayaTakBendaController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Warisan Budaya Tak Benda';
        $data['warisan_budaya_tak_benda'] = WarisanBudayaTakBenda::orderBy('id', 'desc')->get();

        return view('admin.warisan-budaya-tak-benda.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Warisan Budaya Tak Benda';
        $data['warisan_budaya_tak_benda'] = WarisanBudayaTakBenda::where('id', $request->id)->firstOrFail();

        return view('admin.warisan-budaya-tak-benda.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Warisan Budaya Tak Benda';

        return view('admin.warisan-budaya-tak-benda.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Warisan Budaya Tak Benda';
        $data['warisan_budaya_tak_benda'] = WarisanBudayaTakBenda::where('id', $request->id)->firstOrFail();

        return view('admin.warisan-budaya-tak-benda.form', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_sk' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nomor_sk.required' => 'Nomor SK wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        $foto = $request->hidden_foto;
        if ($request->file('foto')) {
            $path = 'public/warisan-budaya-tak-benda/';
            $file = $request->file('foto');
            $nama_file = $request->nama . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $nama_file);
            $foto = "storage/warisan-budaya-tak-benda/" . $nama_file;
        }

        $data = WarisanBudayaTakBenda::updateOrCreate([
            'id' => $request->id,
        ], [
            'foto' => $foto,
            'nama' => $request->nama,
            'nomor_sk' => $request->nomor_sk,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->id == $data->id) {
            return  redirect('warisan-budaya-tak-benda')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return  redirect('warisan-budaya-tak-benda')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = WarisanBudayaTakBenda::findOrFail($request->id);
        $data->delete();

        return  back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
