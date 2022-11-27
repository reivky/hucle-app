<?php

use App\Http\Controllers\DataPresensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MasterShiftController;
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

Route::get('/', function () {
    return redirect('data-presensi');
});

Route::resource('/data-presensi', DataPresensiController::class);
Route::resource('/master-shift', MasterShiftController::class);
Route::resource('/karyawan', KaryawanController::class);
