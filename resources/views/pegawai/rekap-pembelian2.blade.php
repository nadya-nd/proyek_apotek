@extends('layouts.admin2')

@section('title', 'Pegawai')

@section('page-title')
    <div class="page-heading">
        <h3>Rekap Pembelian</h3>
    </div>
@endsection

@section('content')
    <form action="/rekap-pembelian-filter" method="GET">
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
      
    <div class="card-body">
        <div class="card mb-3">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Member</th>
                            <th>ID Pembelian</th>
                            <th>Jumlah Pembelian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($rekapPembelian as $rekap)
                                <tr>
                                    <td>{{ $rekap->id_member }}</td>
                                    <td>{{ $rekap->id }}</td> 
                                    <td>{{ $rekap->jumlah_pembelian }}</td>
                                    <td>
                                        <a href="../detail-pembelian2/{{ $rekap->id }}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
