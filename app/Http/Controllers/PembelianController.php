<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\detailPembelian;
use App\Models\Obat;

class PembelianController extends Controller
{
    //
    public function detailpembelian2()
    {
        // $detailpembelians = detailPembelian::all(); // Mengambil semua data pembelian menggunakan model Pembelian
        $detailpembelians = detailPembelian::with('Obat')->find($id);
    
        return view('pegawai.detail-pembelian2', compact('detailpembelians'));
    }

    public function rekappembelian2()
    {
        $rekapPembelian = Pembelian::select('id_member', 'id_pembelian', \DB::raw('count(*) as jumlah_pembelian'))
            ->groupBy('id_member', 'id_pembelian')
            ->get();

        return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }

    
}
