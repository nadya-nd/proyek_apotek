<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index() {
        $data = Medicine::all();
        return view('obat.index', compact('data'));
    }

    public function tambahObat() {
        return view('obat.form');
    }

    public function insertObat(Request $request) {
        // dd($request->all());
        Medicine::create($request->all());
        // Medicine::updateOrCreate($request->all());
        return redirect()->route('index')->with('success', 'Data Obat Berhasil Ditambahkan');
    }
}
