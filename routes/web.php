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
    return view('layouts.pegawai');
});
