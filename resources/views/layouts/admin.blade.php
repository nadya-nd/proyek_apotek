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
    @include('layouts.partials.sidebar')
    {{-- end::sidebar --}}

{{-- begin::hide-sidebar --}}
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
{{-- end::hide-sidebar --}}

    {{-- begin::main --}}
    <div id="main">
        {{-- begin::navbar --}}
        @include('layouts.partials.navbar')
        {{-- end::navbar --}}
        
        <div class="main-content container-fluid">
            {{-- begin::yield-content --}}
            @yield('page-title')
            @yield('content')
            {{-- end::yield-content --}}
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
