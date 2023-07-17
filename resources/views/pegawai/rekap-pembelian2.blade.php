@extends('layouts.admin2')

@section('title', 'Rekap Pembelian')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">Rekap Pembelian</li>
@endsection

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
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
    </div>
      
    <div class="card-body">
        <div class="dataTable-top">
            <div class="dataTable-dropdown">
                <select class="dataTable-selector form-select">
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
        <table class='table table-striped' id="table1" style="width: 95%; margin-left:20px">
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
