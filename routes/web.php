<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Grafik\GrafikController;
use App\Http\Controllers\Organik\DataPLTController;
use App\Http\Controllers\Organik\TurnOverTPPController;
use App\Http\Controllers\Organik\KaryawanOrganikController;
use App\Http\Controllers\Organik\TurnOverOrganikController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest'])->group(function() {   
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);
});

Route::get('/home',function(){
    return redirect('/admin');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'userAccess:admin'])->group(function(){
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/manager',[AdminController::class, 'manager'])->name('manager');
});

Route::prefix('data')->name('data.')->middleware('auth')->group(function() {
    Route::prefix('karyawan-organik')->name('karyawanorganik.')->group(function() {
        Route::resource('/karyawan', KaryawanOrganikController::class);
    });
    Route::prefix('turnover-organik')->name('turnoverorganik.')->group(function() {
        Route::resource('/karyawan', TurnOverOrganikController::class);
    });
    Route::prefix('turnover-tpp')->name('turnovertpp.')->group(function() {
        Route::resource('/karyawan', TurnOverTPPController::class);
    });
    Route::prefix('data-plt')->name('dataplt.')->group(function() {
        Route::resource('/karyawan', DataPLTController::class);
    });
});

Route::prefix('grafik')->name('grafik.')->middleware('auth')->group(function () {
    Route::get('/karyawan-organik', [GrafikController::class, 'karyawanOrganik'])->name('karyawanorganik');
    Route::get('/turnover-organik', [GrafikController::class, 'turnOverOrganik'])->name('turnoverorganik');
    Route::get('/turnover-tpp', [GrafikController::class, 'turnOverTPP'])->name('turnovertpp');
    Route::get('/data-plt', [GrafikController::class, 'dataplt'])->name('dataplt');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[SesiController::class,'logout'])->name('logout');
});
