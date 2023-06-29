<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', function () {
//     return view('layouts.admin');
// });

// Route::get('/pegawai', function () {
//     return view('layouts.admin2');
// });

Route::group(['middleware' => 'noback'], function(){

    Route::get('/', [DashboardController::class, 'tampilanAwal']);

    Route::get('/admin', [DashboardController::class, 'tampilanAdmin'])->middleware('auth', 'checkrole:1');

    Route::get('/admin/njajal', [DashboardController::class, 'listpegawai'])->middleware('auth', 'checkrole:1');


    Route::get('/pegawai', [DashboardController::class, 'tampilanPegawai'])->middleware('auth', 'checkrole:2');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');                    
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/signout', [LoginController::class, 'signout']);

});


