<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index() {
        $data = Obat::all();
        return view('obat.index', compact('data'));
    }

    public function tambahObat() {
        return view('obat.form');
    }

    public function insertObat(Request $request) {
        // dd($request->all());
        Obat::create($request->all());
        // Medicine::updateOrCreate($request->all());
        return redirect()->route('index')->with('success', 'Data Obat Berhasil Ditambahkan');
    }
}
