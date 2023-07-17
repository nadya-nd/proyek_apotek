@extends('layouts.admin')

@section('title', 'Rekap Pembelian')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">Rekap Pembelian</li>
@endsection

@section('content')
<section class="section">
                <form action="/rekap-filter-admin" method="GET">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="start_date">Start Date:</label>
                            <input type="date" name="start_date" id="start_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" name="end_date" id="end_date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>

        @foreach ($detailPembelian as $detail)
        <div class="card mb-3">
            <div class="card-body">
                <p>ID Pembelian: {{ $detail->id }}</p>
                <p>ID Member: {{ $detail->id_member }}</p>
                <p>Jumlah Pembelian: {{$detail->jumlah_pembelian}}</p>
                <form action="{{ route('admin.detail-pembelian-member', $detail->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary float-end">Detail Pembelian</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection