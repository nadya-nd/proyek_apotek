<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/dashboard-admin', [AdminController::class, 'showPageAdmin'])->middleware('role:1', 'auth')->name('dashboard');
Route::get('/dashboard-pegawai', [PegawaiController::class, 'showPagePegawai'])->middleware('role:0', 'auth')->name('dashboard2');
// Route::get('/data-obat', [PegawaiController::class, 'dataObatPegawai'])->middleware('role:0', 'auth')->name('kelola-obat2');
Route::get('/data-member', [PegawaiController::class, 'dataMemberPegawai'])->middleware('role:0', 'auth')->name('kelola-member2');
Route::get('/pengelolaan-chat', [PegawaiController::class, 'kelolaChatPegawai'])->middleware('role:0', 'auth')->name('kelola-chat2');

Route::resource('obat', MedicineController::class);
Route::post('/obat', [MedicineController::class, 'store'])->name('obat.store');

