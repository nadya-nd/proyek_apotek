<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function showPageAdmin() {
        return view('dashboard-admin');
    }

    public function rekapPembelian() {
        return view('rekap-pembelian');
    }


}
