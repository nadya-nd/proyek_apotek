@extends('layouts.admin')

@section('title', 'Rekap Pembelian')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">Rekap Pembelian</li>
@endsection    

@section('content')

<section class="section">
    <div class="card">
        
        <div class="card-body">
            <div class="dataTable-top">
                <div class="dataTable-dropdown">
                    <select class="dataTable-selector form-select" name="entries_per_page">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                    </select>
                    <label>entries per page</label>
                </div>
                <div class="dataTable-search">
                    <input class="dataTable-input" placeholder="Search..." type="text">
                </div>
            </div>
        </div>

        <table class='table table-striped' id="table1" style="width: 95%; margin-left:20px">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Total Rekap</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekappembelian as $rekap)
                        <tr>
                            <td>{{ $rekap->id }}</td>
                            <td>{{ $rekap->nama}}</td>
                            <td>{{ $rekap->total_rekap }}</td>
                            <td>
                                <a href="{{ route('admin.detail-pembelian', $rekap->id) }}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection
