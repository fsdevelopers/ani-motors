﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ URL::asset('crud/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::asset('crud/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::asset('crud/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ URL::asset('crud/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::asset('crud/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::asset('crud/css/themes/all-themes.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    @include('crud.essential.loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    @include('crud.essential.search_bar')
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('crud.essential.top_bar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
    @include('crud.essential.left_sidebar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    @include('crud.essential.right_sidebar')
        <!-- #END# Right Sidebar -->
    </section>

    <!-- content -->

    @include('crud.essential.content')

    <!-- ./content -->

    <!-- Jquery Core Js -->
    <script src="{{ URL::asset('crud/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('crud/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('crud/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ URL::asset('crud/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('crud/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('crud/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('crud/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('crud/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ URL::asset('crud/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('crud/js/admin.js') }}"></script>
    <script src="{{ URL::asset('crud/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ URL::asset('crud/js/demo.js') }}"></script>
@yield('js')
</body>

</html>