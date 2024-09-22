<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Pustaka;
use App\Models\Legenda;
use App\Models\Kuliner;
use App\Models\SitusCagarBudaya;
use App\Models\WarisanBudayaTakBenda;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index()
    {
        $data['situs'] = SitusCagarBudaya::inRandomOrder()->limit(3)->get();
        $data['kuliner'] = Kuliner::inRandomOrder()->limit(3)->get();
        $data['acara'] = Acara::orderBy('tanggal', 'desc')->limit(3)->get();

        return view('landing.index', $data);
    }

    function situs(Request $request)
    {
        $data['situs'] = SitusCagarBudaya::orderBy('id', 'desc')->get();

        if ($request->has('search')) {
            $data['situs'] = SitusCagarBudaya::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.situs-cagar-budaya.index', $data);
        }

        return view('landing.situs-cagar-budaya.index', $data);
    }

    function detailSitus(Request $request)
    {
        $data['situs'] = SitusCagarBudaya::findOrFail($request->id);

        return view('landing.situs-cagar-budaya.detail', $data);
    }

    function warisan(Request $request)
    {
        $data['warisan'] = WarisanBudayaTakBenda::orderBy('id', 'desc')->get();

        if ($request->has('search')) {
            $data['warisan'] = WarisanBudayaTakBenda::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.warisan-budaya-tak-benda.index', $data);
        }

        return view('landing.warisan-budaya-tak-benda.index', $data);
    }

    function detailWarisan(Request $request)
    {
        $data['warisan'] = WarisanBudayaTakBenda::findOrFail($request->id);

        return view('landing.warisan-budaya-tak-benda.detail', $data);
    }

    function acara(Request $request)
    {
        $data['acara'] = Acara::orderBy('id', 'desc')->get();

        if ($request->has('search')) {
            $data['acara'] = Acara::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.acara.index', $data);
        }

        return view('landing.acara.index', $data);
    }

    function detailAcara(Request $request)
    {
        $data['acara'] = Acara::findOrFail($request->id);

        return view('landing.acara.detail', $data);
    }

    function pustaka()
    {
        $data['pustaka'] = Pustaka::orderBy('id', 'desc')->get();

        return view('landing.pustaka.index', $data);
    }

    function legenda(Request $request)
    {
        $data['legenda'] = Legenda::orderBy('id', 'desc')->get();

        if ($request->has('search')) {
            $data['legenda'] = Legenda::where('judul', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.legenda.legenda', $data);
        }

        return view('landing.legenda.legenda', $data);
    }
    function bacaPustaka(Request $request)
    {
        $data['pustaka'] = Legenda::findOrFail($request->id);

        return view('landing.pustaka.read', $data);
    }
    function bacaLegenda(Request $request)
    {
        $data['legenda'] = Legenda::findOrFail($request->id);

        return view('landing.legenda.legendaRead', $data);
    }
    function kuliner(Request $request)
    {
        $data['kuliner'] = Kuliner::orderBy('id', 'desc')->get();

        if ($request->has('search')) {
            $data['kuliner'] = Kuliner::where('judul', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.kuliner.index', $data);
        }

        return view('landing.kuliner.index', $data);
    }
    function bacaKuliner(Request $request)
    {
        $data['kuliner'] = Kuliner::findOrFail($request->id);

        return view('landing.kuliner.read', $data);
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $data['situs'] = SitusCagarBudaya::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.situs-cagar-budaya.index', $data);
        } else {
            $data['situs'] = SitusCagarBudaya::orderBy('id', 'desc')->paginate(10);
            return view('landing.situs-cagar-budaya.index', $data);
        }
    }

    public function searchWarisanBudayaTakBenda(Request $request)
    {
        if ($request->has('search')) {
            $data['warisan'] = WarisanBudayaTakBenda::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.warisan-budaya-tak-benda.index', $data);
        } else {
            $data['warisan'] = WarisanBudayaTakBenda::orderBy('id', 'desc')->paginate(10);
            return view('landing.warisan-budaya-tak-benda.index', $data);
        }
    }

    public function searchAcara(Request $request)
    {
        if ($request->has('search')) {
            $data['acara'] = Acara::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.acara.index', $data);
        } else {
            $data['acara'] = WarisanBudayaTakBenda::orderBy('id', 'desc')->paginate(10);
            return view('landing.acara.index', $data);
        }
    }

    public function searchKuliner(Request $request)
    {
        if ($request->has('search')) {
            $data['kuliner'] = Kuliner::where('judul', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.kuliner.index', $data);
        } else {
            $data['kuliner'] = Kuliner::orderBy('id', 'desc')->paginate(10);
            return view('landing.kuliner.index', $data);
        }
    }

    public function searchLegenda(Request $request)
    {
        if ($request->has('search')) {
            $data['legenda'] = Legenda::where('judul', 'LIKE', '%' . $request->search . '%')->get();
            return view('landing.legenda.legenda', $data);
        } else {
            $data['legenda'] = Legenda::orderBy('id', 'desc')->paginate(10);
            return view('landing.legenda.legenda', $data);
        }
    }
}
