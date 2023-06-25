<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RhkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IntervensiController;
use App\Http\Controllers\LaporanController;

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

Route::get('/dashboard', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('main');

Route::get('/admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])
    ->name('admin-home')->middleware('role');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('rhk', RhkController::class);
Route::get('rhk/{id}/show', [RhkController::class, 'show'])->middleware('auth');
Route::resource('users', UserController::class);
Route::resource('intervensi', IntervensiController::class);

Route::post('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/create-pdf', [LaporanController::class, 'createPDF'])->name('create-pdf');
Route::get('/laporan/{id}/report', [LaporanController::class, 'report'])->name('report');
Route::resource('laporan', LaporanController::class);
