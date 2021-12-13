<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\suratketeranganController;

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
    return view('auth.login');
});
Route::get('/dashadmin', function () {
    return view('dashadmin');
});
Route::get('/dashmhs', function () {
    return view('dashmhs');
});
Route::get('/dashdosen', function () {
    return view('dashdosen');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () { return view('dashadmin'); })->middleware('checkRole:admin');
Route::get('/profileadm', [App\Http\Controllers\AdminController::class, 'profileadm']);
Route::get('/buatsrtadmin', [App\Http\Controllers\AdminController::class, 'buatsrtadmin']);
Route::get('/ksdosen', [App\Http\Controllers\AdminController::class, 'ksdosen']);
Route::get('/ksmhs', [App\Http\Controllers\AdminController::class, 'ksmhs']);
Route::get('/arsipadmin', [App\Http\Controllers\AdminController::class, 'arsipadmin']);




Route::get('dosen', function () { return view('dashdosen'); })->middleware(['checkRole:dosen']);
Route::get('/profiledosen', [App\Http\Controllers\DosenController::class, 'profiledosen']);
Route::get('/buatsurattugasdosen', [App\Http\Controllers\DosenController::class, 'buatsurattugasdosen']);
Route::get('/buatsuratketerangandosen', [App\Http\Controllers\DosenController::class, 'buatsuratketerangandosen']);
Route::get('/smdosen', [App\Http\Controllers\DosenController::class, 'smdosen']);




Route::get('mahasiswa', function () { return view('dashmhs'); })->middleware(['checkRole:mahasiswa']);
Route::get('/profilemhs', [App\Http\Controllers\MahasiswaController::class, 'profilemhs']);
Route::get('/buatsrtmhs', [App\Http\Controllers\MahasiswaController::class, 'buatsrtmhs']);
Route::get('/smmhs', [App\Http\Controllers\DosenController::class, 'smmhs']);

Route::post('/suratcreate', 'App\Http\Controllers\siswaController@create');
Route::post('/surattugasdosen', 'App\Http\Controllers\DosenController@create');
Route::post('/suratketerangandosen', 'App\Http\Controllers\suratketeranganController@create');







