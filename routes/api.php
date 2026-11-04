<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PelangganApiController;
use App\Http\Controllers\Api\StafApiController;
use App\Http\Controllers\Api\ObatApiController;

Route::apiResource('pelanggan', PelangganApiController::class);
Route::apiResource('staf', StafApiController::class);
Route::apiResource('obat', ObatApiController::class);