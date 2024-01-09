<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/lupa', function () {
    return view('auth.lupa');
});

Route::get('/senjata', function () {
    return view('senjata.senjata');
});

Route::get('/senjata/input', function () {
    return view('senjata.input');
});

Route::get('/senjata/pinjam', function () {
    return view('senjata.pinjam');
});

Route::get('/kendaraan', function () {
    return view('kendaraan.kendaraan');
});

Route::get('/kendaraan/input', function () {
    return view('kendaraan.input');
});

Route::get('/kendaraan/pinjam', function () {
    return view('kendaraan.pinjam');
});