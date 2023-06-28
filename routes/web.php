<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/pegawai', function () {
    return view('layouts.admin2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard2', function () {
    return view('dashboard2');
});

Route::get('/pengelolaan-chat', function () {
    return view('pengelolaan-chat');
});

Route::get('/data-obat', function () {
    return view('data-obat');
});
Route::get('/data-member', function () {
    return view('data-member');
});
