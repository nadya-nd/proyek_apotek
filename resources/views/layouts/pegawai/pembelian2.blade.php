<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    
    <link rel="stylesheet" href="dist/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="dist/assets/css/app.css">
    <link rel="shortcut icon" href="dist/assets/images/favicon.svg" type="image/x-icon">
    
</head>
<body>
    {{-- begin::sidebar --}}
    @include('layouts.partials.sidebar2')
    {{-- end::sidebar --}}

{{-- begin::hide-sidebar --}}
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
{{-- end::hide-sidebar --}}

    {{-- begin::main --}}
    <div id="main">
        {{-- begin::navbar --}}
        @include('layouts.partials.navbar2')
        {{-- end::navbar --}}
        
        <div class="main-content container-fluid">
            
            {{-- begin::yield-content --}}
            @yield('page-title')
            @yield('content')
            {{-- end::yield-content --}}
        
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Pembelian</h1>
                
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <form method="GET" action="">
                        <label for="bulan">Pilih Bulan:</label>
                        <select name="bulan" id="bulan">
                          <option value="">Semua Bulan</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                        
                        <label for="tahun">Pilih Tahun:</label>
                        <select name="tahun" id="tahun">
                          <option value="">Semua Tahun</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                        </select>
                        
                        <button type="submit">Filter</button>
                      </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                        <tr>
                            <th>ID Pembelian</th>
                            <th>ID Member</th>
                            <th>Tanggal Pembelian</th>
                            <th>Total Harga Pembelian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembelians as $pembelian)
                            <tr>
                                <td>{{ $pembelian->id_pembelian }}</td>
                                <td>{{ $pembelian->id_member }}</td>
                                <td>{{ $pembelian->tgl_pembelian }}</td>
                                <td>{{ $pembelian->total_harga_pembelian }}</td>
                            </tr>
                        @endforeach
                    </tbody>
        </div>

        {{-- begin::footer --}}
        @include('layouts.partials.footer')
        {{-- end::footer --}}
    </div>
    {{-- end::main --}}

    {{-- begin::script --}}
    <script src="dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dist/assets/js/app.js"></script>
    
    <script src="dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="dist/assets/js/pages/dashboard.js"></script>

    <script src="dist/assets/js/main.js"></script>
    {{-- end::script --}}

</body>
</html>
