<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/',[AdminController::class, 'admin'])->name('admin');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/create', [AdminController::class, 'store'])->name('store');
    Route::get('/karyawan/{karyawan}/edit', [AdminController::class, 'edit'])->name('karyawan.edit');
    Route::put('/karyawan/{karyawan}', [AdminController::class, 'update'])->name('karyawan.update');
    Route::delete('/karyawan/{karyawan}', [AdminController::class, 'delete'])->name('karyawan.delete');
    Route::get('/manager',[AdminController::class, 'manager'])->name('manager');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[SesiController::class,'logout']);
});

Route::resource('karyawan', karyawanController::class);
