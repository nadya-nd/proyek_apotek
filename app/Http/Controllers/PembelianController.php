<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\detailPembelian;
use App\Models\Obat;
use App\Models\detailObat;
use App\Models\Member;
use App\Models\User;


class PembelianController extends Controller
{
    //
    public function detailpembelian2($id_pembelian)
    {
        $detailPembelian = DB::table('detail_pembelian')
        ->join('detail_obat', 'detail_pembelian.id', '=', 'detail_obat.id_detail_pembelian')
        ->join('obats', 'detail_obat.id_obat', '=', 'obats.id')
        ->join('pembelians', 'detail_pembelian.id_pembelian', '=', 'pembelians.id')
        ->join('members', 'pembelians.id_member', '=', 'members.id')
        ->select('detail_pembelian.*', 'obats.nama_obat', 'members.nama', 'members.no_telepon', 'members.alamat')
        ->where('detail_pembelian.id_pembelian', $id_pembelian)
        ->get();

        

    return view('pegawai.detail-pembelian2', compact('detailPembelian'));

    }
    

    public function rekappembelian2()
    {
        $pegawaiId = auth()->user()->id;
        $rekapPembelian = DB::table('pembelians AS p')
        ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
        ->join('members AS m', 'm.id', '=', 'p.id_member')
        ->join('users AS u', 'u.id', '=', 'm.user_id')
        ->where('m.user_id', $pegawaiId)
        ->select('u.id AS user_id','p.id', 'p.id_member', DB::raw('COUNT(dp.id) as jumlah_pembelian'))        ->groupBy('p.id', 'p.id_member',)
        ->groupBy('p.id', 'u.id', 'p.id_member')
        ->get();

        return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }
    
        // public function rekappembelian2()
        // {
    
        //     $rekapPembelian = DB::table('pembelians AS p')
        //     ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
        //     ->select('p.id', 'p.id_member', DB::raw('COUNT(dp.id) as jumlah_pembelian'))
        //     ->groupBy('p.id', 'p.id_member',)
        //     ->get();

        //     return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
        // }

    public function rekapPembelian(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $rekapPembelian = DB::table('pembelians AS p')
            ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
            ->select('p.id', 'p.id_member', DB::raw('COUNT(dp.id) as jumlah_pembelian'))
            ->groupBy('p.id', 'p.id_member',)
            ->whereBetween('p.tgl_pembelian', [$startDate, $endDate])
            ->get();

        return view('pegawai.rekap-pembelian2', compact('rekapPembelian'));
    }



    public function rekappembelianAdmin()
    {
        $rekappembelian = DB::table('users AS u')
        ->leftjoin('members AS m', 'm.user_id', '=', 'u.id')
        ->leftjoin('pembelians AS p', 'p.id_member', '=', 'm.id')
        ->select('u.id', 'u.nama', DB::raw('COUNT(p.id) as total_rekap'))
        ->where('u.roles', 0)
        ->groupBy('u.id', 'u.nama')
        ->get();


        return view('admin.rekap-pembelian', compact('rekappembelian'));
    }

    public function rekapfilterAdmin(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $detailPembelian = DB::table('pembelians AS p')
            ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
            ->select('p.id', 'p.id_member', DB::raw('COUNT(dp.id) as jumlah_pembelian'))
            ->groupBy('p.id', 'p.id_member',)
            ->whereBetween('p.tgl_pembelian', [$startDate, $endDate])
            ->get();


        return view('admin.detail-pembelian', compact('detailPembelian'));
    }

    public function detailpembelianAdmin( $pegawaiId)
    {
    
        $detailPembelian = DB::table('pembelians AS p')
        ->join('detail_pembelian AS dp', 'dp.id_pembelian', '=', 'p.id')
        ->join('members AS m', 'm.id', '=', 'p.id_member')
        ->join('users AS u', 'u.id', '=', 'm.user_id')
        ->where('m.user_id', $pegawaiId)
        ->select('u.id AS user_id','p.id', 'p.id_member', DB::raw('COUNT(dp.id) as jumlah_pembelian'))        ->groupBy('p.id', 'p.id_member',)
        ->groupBy('p.id', 'u.id', 'p.id_member')
        ->get();

        return view('admin.detail-pembelian', compact('detailPembelian'));
    }

    public function detailpembelianMember($id_pembelian)
    {
        $detailPembelian = DB::table('detail_pembelian')
        ->join('detail_obat', 'detail_pembelian.id', '=', 'detail_obat.id_detail_pembelian')
        ->join('obats', 'detail_obat.id_obat', '=', 'obats.id')
        ->join('pembelians', 'detail_pembelian.id_pembelian', '=', 'pembelians.id')
        ->join('members', 'pembelians.id_member', '=', 'members.id')
        ->select('detail_pembelian.*', 'obats.nama_obat', 'members.nama', 'members.no_telepon', 'members.alamat')
        ->where('detail_pembelian.id_pembelian', $id_pembelian)
        ->get();

        

    return view('admin.detail-pembelian-member', compact('detailPembelian'));

    }
    







    
}
