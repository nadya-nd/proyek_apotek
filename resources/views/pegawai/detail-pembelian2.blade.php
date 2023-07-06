@extends('layouts.admin2')

@section('title', 'Pegawai')

@section('page-title')
    <div class="page-heading">
        <h3>Detail Pembelian</h3>
    </div>
@endsection

@section('content')
    <div class="card-body">
        @foreach ($detailPembelian as $detailpembelian)
        <div class="card mb-3">
            <div class="card-body">
                <p>ID Pembelian: {{ $detailpembelian->id_pembelian }}</p>
                <p>Nama Obat: {{ $detailpembelian->nama_obat }}</p>
                <p>ID Detail Pembelian: {{ $detailpembelian->id }}</p>
                <p>Tanggal Pembelian: {{ $detailpembelian->tgl_pembelian }}</p>
                <p>Estimasi Obat Habis: {{ $detailpembelian->estimasi_obat_habis }}</p>
                <p>SubTotal Harga: {{ $detailpembelian->subtotal_harga }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection