<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class AdminController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrators'] = Admin::orderBy('id', 'desc')->get();

        return view('admin.admin.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrator'] = Admin::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.admin.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/administrator.title');

        return view('admin.admin.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/administrator.title');
        $data['administrator'] = Admin::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.admin.form', $data);
    }

    function check(Request $request)
    {
        $data = Admin::findOrFail($request->id);
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
            'email' => 'required|email|unique:admins,email,' . $request->id . ',id',
        ]);

        $photo = $request->hidden_photo;
        if ($request->file('photo')) {
            $path = 'public/admin-photos/';
            $file = $request->file('photo');
            $file_name = $request->email . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $photo = "storage/admin-photos/" . $file_name;
        }

        $data = Admin::updateOrCreate([
            'id' => $request->id,
        ], [
            'photo' => $photo,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->id == $data->id) {
            return redirect('administrators')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('administrators')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Admin::findOrFail($request->id);
        $data->delete();

        return  back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
