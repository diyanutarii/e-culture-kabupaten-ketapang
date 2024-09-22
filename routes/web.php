<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WarisanBudayaTakBendaController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\SitusCagarBudayaController;
use App\Http\Controllers\LegendaController;
use App\Http\Controllers\KulinerController;
use Illuminate\Support\Facades\Route;

Route::group(['domain' => 'admin.' . env('DOMAIN')], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::middleware('guest')->group(function () {
            Route::get('login', 'login')->name('login');
            Route::post('login', 'loginProcess');
            Route::get('lupa-password', 'lupaPassword')->name('password.request');
            Route::post('lupa-password', 'lupaPasswordProcess')->name('password.email');
            Route::get('reset-password/{token}', 'resetPassword')->name('password.reset');
            Route::post('reset-password', 'resetPasswordProcess')->name('password.update');
        });
        Route::get('logout', 'logout');
    });

    Route::middleware('auth')->group(function () {
        Route::controller(BerandaController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('beranda', 'index');
        });

        Route::controller(ProfilController::class)->group(function () {
            Route::get('profil', 'profil');
            Route::post('edit-profil', 'editProfil');
        });

        Route::prefix('admin')->controller(AdminController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('situs-cagar-budaya')->controller(SitusCagarBudayaController::class)->group(function () {
            Route::get('/', 'index')->name('situs-cagar-budaya.index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
            Route::get('search', 'index')->name('situs-cagar-budaya.search');
        });

        Route::prefix('warisan-budaya-tak-benda')->controller(WarisanBudayaTakBendaController::class)->group(function () {
            Route::get('/', 'index')->name('warisan-budaya-tak-benda.index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
            Route::get('search', 'index')->name('warisan-budaya-tak-benda.search');
        });

        Route::prefix('acara')->controller(AcaraController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('pustaka')->controller(PustakaController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('legenda')->controller(LegendaController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('kuliner')->controller(KulinerController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::post('store', 'store');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::delete('destroy', 'destroy');
        });
    });
});


Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index');

    Route::get('situs-cagar-budaya', 'situs');
    Route::get('situs-cagar-budaya/detail/{id}', 'detailSitus');
    // Route::get('situs-cagar-budaya/search', 'search')->name('situs-cagar-budaya.search');

    Route::get('warisan-budaya-tak-benda', 'warisan');
    Route::get('warisan-budaya-tak-benda/detail/{id}', 'detailWarisan');
    //Route::get('warisan-budaya-tak-benda/search', 'searchWarisanBudayaTakBenda')->name('warisan-budaya-tak-benda.search');

    Route::get('acara', 'acara');
    Route::get('acara/detail/{id}', 'detailAcara');
    //Route::get('Acara/search', 'searchAcara')->name('acara.search');

    Route::get('pustaka', 'pustaka');
    Route::get('pustaka/baca/{id}', 'bacaPustaka');

    Route::get('legenda', 'legenda');
    Route::get('legenda/baca/{id}', 'bacaLegenda');
    //Route::get('legenda/search', 'searchLegenda')->name('legenda.search');

    Route::get('kuliner', 'kuliner');
    Route::get('kuliner/baca/{id}', 'bacaKuliner');
    //Route::get('kuliner/search', 'searchKuliner')->name('kuliner.search');
});
