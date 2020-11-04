<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/kepsek', [App\Http\Controllers\KepsekController::class, 'index'])->name('kepsek');
Route::get('/tu', [App\Http\Controllers\TuController::class, 'index'])->name('tu');

Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');
Route::post('/store', [App\Http\Controllers\DaftarController::class, 'store'])->name('store');