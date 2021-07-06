<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fixed header-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="shortcut icon" type="image/png" href="favicon.ico"> --}}

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/asset/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/asset/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('admin/asset/css/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('admin/asset/css/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin/asset/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('admin/asset/vendor/modernizr/modernizr.js')}}"></script>
    @stack('css')
</head>
<body>
{{-- <div id="app">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.backend.partials.header')
        <div class="app-main">
            @include('layouts.backend.partials.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
                @include('layouts.backend.partials.footer')
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
</div> --}}
<section class="body">
    @include('layouts.backend.partials.header')
    <div class="inner-wrapper">
        @include('layouts.backend.partials.sidebar')
        <section role="main" class="content-body">
            @include('layouts.backend.partials.header2')
            @yield('content')
        </section>
    </div>
    @include('layouts.backend.partials.footer')
</section>

<!-- Scripts -->
<script src="{{asset('admin/asset/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/common/common.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{asset('admin/asset/vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/flot.tooltip/flot.tooltip.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/snap.svg/snap.svg.js')}}"></script>
    <script src="{{asset('admin/asset/vendor/liquid-meter/liquid.meter.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('admin/asset/js/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('admin/asset/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('admin/asset/js/theme.init.js')}}"></script>

    <!-- Examples -->
    <script src="{{asset('admin/asset/js/examples/examples.datatables.default.js')}}"></script>
    <script src="{{asset('admin/asset/js/examples/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{asset('admin/asset/js/examples/examples.datatables.tabletools.js')}}"></script>
    <script src="{{asset('admin/asset/js/examples/examples.dashboard.js')}}"></script>
@stack('js')
@include('vendor.lara-izitoast.toast')
</body>
</html>
