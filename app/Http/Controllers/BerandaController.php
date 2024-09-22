<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\WarisanBudayaTakBenda;
use App\Models\Pustaka;
use App\Models\SitusCagarBudaya;
use App\Models\Legenda;

class BerandaController extends Controller
{
    function index()
    {
        $data['title'] = 'Beranda';
        $data['jumlah_situs_cagar_budaya'] = SitusCagarBudaya::count();
        $data['jumlah_warisan_budaya_tak_benda'] = WarisanBudayaTakBenda::count();
        $data['jumlah_acara'] = Acara::count();
        $data['jumlah_pustaka'] = Pustaka::count();
        $data['jumlah_legenda'] = Legenda::count();     
        return view('admin.index', $data);
    }
}