@extends('layouts.admin2')

@section('title', 'Data Obat')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('index') }}">Data Master</a></li>
    <li class="breadcrumb-item active">Data Obat</li>
@endsection      
        
@section('content')
<section class="section">
    <div class="card">
        <!-- Striped rows start -->
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <x-button>Tambah</x-button>
                    </div> --}}
                    <div class="card-header">
                        <a href="{{ route('form') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <!-- table striped -->
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">STOK</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">DIBUAT</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->medicine_stock }}</td>
                                    <td>{{ $row->medicine_price }}</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
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