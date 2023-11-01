<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\TransaksiController;

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

//JENIS SAMPAH
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('datasampah', [JenisController::class, 'index'])->name('jenis.index');
Route::get('datasampah', function () {
    return view('jenis.index');
});
Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/tambahjenis', [JenisController::class, 'create'])->name('jenis.create');
Route::get('/jenis/delete/{id_sampah}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('/jenis/edit/{id_sampah}', [JenisController::class, 'edit'])->name('jenis.edit');
Route::post('/jenis/edit/{id_sampah}', [JenisController::class, 'update'])->name('jenis.update');


//TRANSAKSI
Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('datatransaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('datatransaksi', function () {
    return view('transaksi.index');
});
Route::get('/transaksi/{id}/view', [TransaksiController::class, 'show'])->name('transaksi.view');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/tambahtransaksi', [TransaksiController::class, 'create'])->name('transaksi.create');

Route::get('transaksi/getdetail', [TransaksiController::class, 'getdetail'])->name('transaksi.getdetail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
