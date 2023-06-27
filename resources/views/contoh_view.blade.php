@extends('layouts.admin2')

@section('title', 'judul halaman')

@section('breadcrumb')
    @parent
    {{-- <li class="breadcrumb-item " aria-current="page"><a href="data-obat">Submenu</a></li> JIKA ADA --}}
    <li class="breadcrumb-item">judul halaman</li>
@endsection      
        
@section('content')
{{-- buat konten disini --}}
@endsection