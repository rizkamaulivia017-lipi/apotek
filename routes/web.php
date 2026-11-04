<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StafApotekController;
use App\Http\Controllers\ObatController;


use App\Models\Pelanggan;
use App\Models\StafApotek;
use App\Models\Obat;

Route::get('/', function () {

    $totalPelanggan = Pelanggan::count();
    $totalStaf = StafApotek::count();
    $totalObat = Obat::count();

    return view('dashboard', compact(
        'totalPelanggan',
        'totalStaf',
        'totalObat'
    ));

})->name('dashboard');


Route::resource('pelanggan', PelangganController::class);
Route::resource('staf', StafApotekController::class);
Route::resource('obat', ObatController::class);
