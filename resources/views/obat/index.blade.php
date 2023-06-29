@extends('layouts.admin2')

@section('title', 'Data Obat')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('obat.index') }}">Data Master</a></li>
    <li class="breadcrumb-item active">Data Obat</li>
@endsection      
        
@section('content')
<section class="section">
    <div class="card">
        <!-- Striped rows start -->
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>STOK</th>
                                    <th>HARGA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Michael Right</td>
                                    <td>10</td>
                                    <td>$100/hr</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Striped rows end -->
    </div>
</section>
@endsection