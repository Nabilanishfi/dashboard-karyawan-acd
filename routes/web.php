<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Organik\DataPLT;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Organik\TurnOverTPP;
use App\Http\Controllers\Organik\KaryawanOrganik;
use App\Http\Controllers\Organik\TurnOverOrganik;

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
        Route::get('/', [KaryawanOrganik::class, 'index'])->name('index');
        Route::get('/{karyawan}', [KaryawanOrganik::class, 'show'])->name('show');
        Route::get('/create', [KaryawanOrganik::class, 'create'])->name('create');
        Route::post('/', [KaryawanOrganik::class, 'store'])->name('store');
        Route::get('/{karyawan}/edit', [KaryawanOrganik::class, 'edit'])->name('edit');
        Route::put('/{karyawan}', [KaryawanOrganik::class, 'update'])->name('update');
    });
    Route::prefix('turnover-organik')->name('turnoverorganik.')->group(function() {
        Route::get('/', [TurnOverOrganik::class, 'index'])->name('index');
        Route::get('/{karyawan}', [TurnOverOrganik::class, 'show'])->name('show');
        Route::get('/create', [TurnOverOrganik::class, 'create'])->name('create');
        Route::post('/', [TurnOverOrganik::class, 'store'])->name('store');
        Route::get('/{karyawan}/edit', [TurnOverOrganik::class, 'edit'])->name('edit');
        Route::put('/{karyawan}', [TurnOverOrganik::class, 'update'])->name('update');
    });
    Route::prefix('turnover-tpp')->name('turnovertpp.')->group(function() {
        Route::get('/', [TurnOverTPP::class, 'index'])->name('index');
        Route::get('/{karyawan}', [TurnOverTPP::class, 'show'])->name('show');
        Route::get('/create', [TurnOverTPP::class, 'create'])->name('create');
        Route::post('/', [TurnOverTPP::class, 'store'])->name('store');
        Route::get('/{karyawan}/edit', [TurnOverTPP::class, 'edit'])->name('edit');
        Route::put('/{karyawan}', [TurnOverTPP::class, 'update'])->name('update');
    });
    Route::prefix('data-plt')->name('dataplt.')->group(function() {
        Route::get('/', [DataPLT::class, 'index'])->name('index');
        Route::get('/{karyawan}', [DataPLT::class, 'show'])->name('show');
        Route::get('/create', [DataPLT::class, 'create'])->name('create');
        Route::post('/', [DataPLT::class, 'store'])->name('store');
        Route::get('/{karyawan}/edit', [DataPLT::class, 'edit'])->name('edit');
        Route::put('/{karyawan}', [DataPLT::class, 'update'])->name('update');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[SesiController::class,'logout']);
});
