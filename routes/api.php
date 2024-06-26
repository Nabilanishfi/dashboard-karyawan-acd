<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Grafik\GrafikController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('grafik')->name('api.grafik.')->group(function() {
    Route::get('/karyawan-organik', [GrafikController::class, 'getCountKaryawanOrganik'])->name('karyawanorganik');
    Route::get('/turnover-organik', [GrafikController::class,'getCountTurnOverOrganik'])->name('turnoverorganik');
    Route::get('/turnover-tpp', [GrafikController::class,'getCountTurnOverTPP'])->name('turnovertpp');
    Route::get('/data-plt', [GrafikController::class,'getCountDataPLT'])->name('dataplt');
});