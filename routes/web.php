<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemasokController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,"index"])->name('index');

Route::resource('pegawai', PegawaiController::class);


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::resource('kategori', KategoriController::class);

Route::resource('pemasok', PemasokController::class);
Route::get('/search',[PemasokController::class, 'search'])->name('search');