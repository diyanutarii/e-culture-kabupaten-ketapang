<?php

namespace App\Http\Controllers;

use App\Models\TangibleCultureHeritage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;
use Yajra\DataTables\Facades\DataTables;

class TangibleCulturalController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = Lang::get('admin/tangible.title');
        $data['tangible_cultural_heritages'] = TangibleCultureHeritage::orderBy('id', 'desc')->get();

        return view('admin.situs-cagar-budaya.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/tangible.title');
        $data['tangible_cultural_heritage'] = TangibleCultureHeritage::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.situs-cagar-budaya.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/tangible.title');

        return view('admin.situs-cagar-budaya.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/tangible.title');
        $data['tangible_cultural_heritage'] = TangibleCultureHeritage::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.situs-cagar-budaya.form', $data);
    }

    function check(Request $request)
    {
        $data = TangibleCultureHeritage::findOrFail($request->id);
        $created_at = Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');
        $updated_at = Carbon::parse($data->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');

        return response()->json([
            'data' => $data,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sk_number' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'required',
        ]);

        $photo = $request->hidden_photo;
        if ($request->file('photo')) {
            $path = 'public/tangible-cultural-heritage-photos/';
            $file = $request->file('photo');
            $file_name = $request->name . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $photo = "storage/tangible-cultural-heritage-photos/" . $file_name;
        }

        $data = TangibleCultureHeritage::updateOrCreate([
            'id' => $request->id,
        ], [
            'photo' => $photo,
            'name' => $request->name,
            'sk_number' => $request->sk_number,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'description' => $request->description,
        ]);

        if ($request->id == $data->id) {
            return redirect('tangible-cultural-heritages')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('tangible-cultural-heritages')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = TangibleCultureHeritage::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
