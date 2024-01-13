<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\SenjataController;
use \App\Http\Controllers\KendaraanController;
use \App\Http\Controllers\PinjamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Admin Controller
Route::get('/login', [AdminController::class,'index'])->name('auth.index');
Route::get('/logout', [AdminController::class,'logout'])->name('auth.logout');
Route::post('/login', [AdminController::class,'process'])->name('auth.process');

// Senjata Controller
Route::get('/senjata', [SenjataController::class,'index'])->name('senjata.senjata');
Route::get('/senjata/input', [SenjataController::class,'create'])->name('senjata.input');
Route::post('/senjata', [SenjataController::class,'store'])->name('senjata.store');
Route::get('/senjata/{senjata}', [SenjataController::class,'show'])->name('senjata.show');

// Kendaraan Controller
Route::get('/Kendaraan', [KendaraanController::class,'index'])->name('Kendaraan.Kendaraan');
Route::get('/Kendaraan/input', [KendaraanController::class,'create'])->name('Kendaraan.input');
Route::post('/Kendaraan', [KendaraanController::class,'store'])->name('Kendaraan.store');
Route::get('/Kendaraan/{senjata}', [KendaraanController::class,'show'])->name('Kendaraan.show');

// Pinjam Controller