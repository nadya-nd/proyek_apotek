<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    //
    public function pembelian2()
    {
        $pembelians = Pembelian::all(); // Mengambil semua data pembelian menggunakan model Pembelian
    
        return view('layouts.pegawai.pembelian2', compact('pembelians'));
    }

    public function rekappembelian2()
    {
        $rekapPembelian = Pembelian::select('id_member', 'id_pembelian', \DB::raw('count(*) as jumlah_pembelian'))
            ->groupBy('id_member', 'id_pembelian')
            ->get();

        return view('layouts.pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }

    
}
