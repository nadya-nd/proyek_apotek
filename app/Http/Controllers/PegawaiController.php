<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //
    public function pembelian2(){ 
        return view('layouts.pembelian2');
    }

    public function rekappembelian2()
    {
        $rekapPembelian = Pembelian::select('id_member', 'id_pembelian', \DB::raw('count(*) as jumlah_pembelian'))
            ->groupBy('id_member', 'id_pembelian')
            ->get();

        return view('layouts.rekap-pembelian2', compact('rekapPembelian'));
    }
}
