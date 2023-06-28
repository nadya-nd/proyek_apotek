<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

// Temp Route
Route::get('/pengelolaan-chat', function () {
    return view('pengelolaan-chat');
});

Route::get('/data-obat', function () {
    return view('data-obat');
});
Route::get('/data-member', function () {
    return view('data-member');
});

// permanen route
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('dasboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard-admin', [AdminController::class, 'showPageAdmin'])->middleware('role:1', 'auth');
Route::get('/dashboard-pegawai', [AdminController::class, 'showPagePegawai'])->middleware('role:0', 'auth');
