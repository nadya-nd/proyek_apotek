@extends('layouts.admin')

@section('title', 'Admin')

@section('page-title')
<div class="page-heading">
    <h3>Dashboard Admin</h3>
</div>
@endsection

@section('content')
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Template Pesan</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                <div class="form-body">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="first-name-vertical">ID Pegawai</label>
                        <input type="text" id="first-name-vertical" class="form-control" name="fname"
                            placeholder="ID Admin">
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="password-vertical">Nama Pegawai</label>
                        <input type="password" id="password-vertical" class="form-control" name="contact"
                            placeholder="Nama Pegawai">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="password-vertical">Pesan</label>
                        <input type="password" id="password-vertical" class="form-control" name="contact"
                            placeholder="Isi pesan yang ingin dikirimkan">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

       
@endsection