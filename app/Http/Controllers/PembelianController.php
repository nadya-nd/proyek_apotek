<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\detailPembelian;
use App\Models\Obat;
use App\Models\detailObat;

class PembelianController extends Controller
{
    //
    public function detailpembelian2($id_pembelian)
    {
        $detailPembelian = DB::table('detail_pembelian')
        ->join('detail_obat', 'detail_pembelian.id', '=', 'detail_obat.id_detail_pembelian')
        ->join('obats', 'detail_obat.id_obat', '=', 'obats.id')
        ->select('detail_pembelian.*', 'obats.nama_obat')
        ->where('detail_pembelian.id_pembelian', $id_pembelian)
        ->get();

        

    return view('pegawai.detail-pembelian2', compact('detailPembelian'));

    }
    public function rekappembelian2()
    {
 
        $rekapPembelian = DB::table('pembelians AS p')
            ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
            ->select('p.*', DB::raw('COUNT(dp.id) as jumlah_pembelian'))
            ->groupBy('p.id')
            ->get();

        return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }

    public function rekapPembelian(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $rekapPembelian = DB::table('pembelians AS p')
            ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
            ->select('p.*', DB::raw('COUNT(dp.id) as jumlah_pembelian'))
            ->groupBy('p.id')
            ->whereBetween('p.tgl_pembelian', [$startDate, $endDate])
            ->get();

        return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }


    
}
