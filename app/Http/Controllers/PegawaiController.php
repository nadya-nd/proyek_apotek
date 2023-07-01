<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class PegawaiController extends Controller
{
    public function showPagePegawai() {
        return view('dashboard-pegawai');
    }

    public function dataObatPegawai() {
        return view('data-obat');
    }

    public function dataMemberPegawai() {
        return view('data-member');
    }

    public function kelolaChatPegawai() {
        return view('pengelolaan-chat');
    }
}
