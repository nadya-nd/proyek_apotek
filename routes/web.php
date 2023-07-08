<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MedicineController;

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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/dashboard-admin', [AdminController::class, 'showPageAdmin'])->middleware('role:1', 'auth')->name('dashboard');

Route::get('/dashboard-pegawai', [PegawaiController::class, 'showPagePegawai'])->middleware('role:0', 'auth')->name('dashboard2');
Route::get('/pengelolaan-chat', [PegawaiController::class, 'kelolaChatPegawai'])->middleware('role:0', 'auth')->name('kelola-chat2');


Route::get('/rekap-pembelian2', [PembelianController::class, 'rekappembelian2']);
Route::get('/rekap-pembelian-filter', [PembelianController::class, 'rekapPembelian']);
Route::get('/detail-pembelian2', [PembelianController::class, 'detailpembelian2']);
Route::get('/detail-pembelian2/{id_pembelian}', [PembelianController::class, 'detailpembelian2'])->name('detailpembelian2');

Route::get('/index', [MedicineController::class, 'index'])->name('index');
Route::get('/form', [MedicineController::class, 'tambahObat'])->name('form');
Route::post('/tambah-obat', [MedicineController::class, 'insertObat'])->name('tambah-obat');
