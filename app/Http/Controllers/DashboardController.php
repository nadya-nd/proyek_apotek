<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tampilanAwal(){
        return view('welcome');
    }

    public function tampilanAdmin(){
        return view('layouts.admin');
    }

    public function tampilanPegawai(){
        return view('layouts.admin2');
    }

    public function listPegawai(){
        return view('njajal');
    }
}
