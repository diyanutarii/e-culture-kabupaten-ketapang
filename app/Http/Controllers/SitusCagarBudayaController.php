<?php

namespace App\Http\Controllers;

use App\Models\SitusCagarBudaya;
use Illuminate\Http\Request;

class SitusCagarBudayaController extends Controller
{
    public function index(Request $request)
    {

        $data['title'] = 'Data Situs Cagar Budaya';
        $data['situs_cagar_budaya'] = SitusCagarBudaya::orderBy('id', 'desc')->paginate(10);

        return view('admin.situs-cagar-budaya.index', $data);
    }

    // {
    //     $data['title'] = 'Data Situs Cagar Budaya';
    //     $data['situs_cagar_budaya'] = SitusCagarBudaya::orderBy('id', 'desc')->get();


    // }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Situs Cagar Budaya';
        $data['situs_cagar_budaya'] = SitusCagarBudaya::where('id', $request->id)->firstOrFail();

        return view('admin.situs-cagar-budaya.detail', $data);
    }

    function create()
    {
        $data['title'] = 'Tambah Situs Cagar Budaya';

        return view('admin.situs-cagar-budaya.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Situs Cagar Budaya';
        $data['situs_cagar_budaya'] = SitusCagarBudaya::where('id', $request->id)->firstOrFail();

        return view('admin.situs-cagar-budaya.form', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_sk' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nomor_sk.required' => 'Nomor SK wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'latitude.required' => 'Latitude wajib diisi.',
            'longitude.required' => 'Longitude wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        $foto = $request->hidden_foto;
        if ($request->file('foto')) {
            $path = 'public/situs-cagar-budaya/';
            $file = $request->file('foto');
            $file_name = $request->nama . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $foto = "storage/situs-cagar-budaya/" . $file_name;
        }

        $data = SitusCagarBudaya::updateOrCreate([
            'id' => $request->id,
        ], [
            'foto' => $foto,
            'nama' => $request->nama,
            'nomor_sk' => $request->nomor_sk,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->id == $data->id) {
            return redirect('situs-cagar-budaya')->with([
                'message' => 'Berhasil! Data telah diperbarui.',
            ]);
        } else {
            return redirect('situs-cagar-budaya')->with([
                'message' => 'Berhasil! Data telah ditambahkan.',
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = SitusCagarBudaya::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => 'Berhasil! Data telah dihapus.',
        ]);
    }
}
