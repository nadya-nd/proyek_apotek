@extends('layouts.admin2')

@section('title', 'Tambah Obat')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('obat.index') }}">Data Master</a></li>
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('obat.index') }}">Data Obat</a></li>
    <li class="breadcrumb-item">Tambah Obat</li>
@endsection     

@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Horizontal Form</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="{{ route('obat.index') }}" class="form form-horizontal" method="post">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Name Obat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="first-name" class="form-control" name="name" placeholder="Nama Obat">
                            </div>
                            <div class="col-md-4">
                                <label>Stok Obat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="stok" class="form-control" name="medicine-stock" placeholder="Stok Obat">
                            </div>
                            <div class="col-md-4">
                                <label>Harga Obat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="contact-info" class="form-control" name="medicine-price" placeholder="Harga Obat">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
</section>
<!-- // Basic Horizontal form layout section end --> 
@endsection
