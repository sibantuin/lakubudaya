<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Dashboard - Lakubudaya</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/dashboard/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <link href="{{ asset('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">

        @yield('css')

        <style>
            .bg-primary {
                background-color: #634730 !important;
            }
            .header {
                /* background-color: #cbbfb1 !important; */
                background-color: #ECECEC !important;
            }
            .sidebar {
                /* background-color: #cbbfb1 !important; */
                background-color: #ECECEC !important;
            }
            body {
                /* background: #a1876c42 !important; */
                background: #ffffff !important;
            }
            .header-nav .nav-profile span {
                color: #634730 !important;
            }
            .sidebar-nav .nav-link.collapsed {
                color: #634730 !important;
                background: transparent !important;
            }
            .sidebar-nav .nav-link.collapsed i {
                color: #634730 !important;
            }
            .sidebar-nav .nav-heading {
                color: #000 !important;
            }
            .sidebar-nav .nav-link {
                color: #634730 !important;
                background: none !important;
            }
            .sidebar-nav .nav-link.nav-link-active {
                color: #fff !important;
                background: #634730 !important;
            }
            .sidebar-nav .nav-link.nav-link-active i {
                color: #fff !important;
            }
            .sidebar-nav .nav-content a.nav-link-active {
                color: #fff !important;
                background: #634730 !important;
                border-radius: 10px !important;
            }
            .sidebar-nav .nav-link i {
                color: #634730 !important;
            }
            .sidebar-nav .nav-content a {
                color: #634730 !important;
            }
            .pagetitle h1 {
                color: #634730 !important;
            }
            .breadcrumb .active {
                color: #634730 !important;
            }
            .breadcrumb a {
                color: #a1968a !important;
            }
            .breadcrumb .breadcrumb-item::before {
                color: #000000 !important;
            }
            .card {
                box-shadow: 0px 0 30px rgb(203 191 177 / 0%) !important;
                /* background: #d3c7be !important; */
                background: #f4f4f4 !important;
            }
            .dashboard .card-icon {
                color: #fff !important;
                background: #634730 !important;
            }
            .card-title {
                color: #634730 !important;
            }
            h6, h5, h4, h3, h2, h1 {
                color: #634730 !important;
            }
            .text-muted {
                color: rgb(33 37 41) !important;
            }
            .activite-label {
                color: #464545 !important;
            }
            .card-title span {
                color: #4c4d4d !important;
            }
            .dashboard .news h4 a {
                color: #634730 !important;
            }
            .dashboard .news p {
                color: #4e5050 !important;
            }
            .breadcrumb {
                color: #a99e93 !important;
            }
            .profile .profile-card .social-links a {
                color: rgb(99 71 48) !important;
            }
            .nav-tabs-bordered .nav-link.active {
                background-color: #634730 !important;
                color: #ffffff !important;
                border-bottom: 2px solid #634730 !important;
            }
            .nav-tabs-bordered {
                border-bottom: 2px solid #634730 !important;
            }
            .nav-tabs-bordered .nav-link {
                color: #634730 !important;
            }
            .label-primary {
                color: #634730 !important;
            }
            .btn-primary {
                --bs-btn-color: #fff !important;
                --bs-btn-bg: #634730 !important;
                --bs-btn-border-color: #634730 !important;
                --bs-btn-hover-color: #fff !important;
                --bs-btn-hover-bg: #634730c4 !important;
                --bs-btn-hover-border-color: #634730c4 !important;
                --bs-btn-focus-shadow-rgb: 49,132,253;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #634730c4;
                --bs-btn-active-border-color: #634730c4;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #fff;
                --bs-btn-disabled-bg: #634730c4;
                --bs-btn-disabled-border-color: #634730c4;
            }
            .card-inside {
                background-color: #fff !important;
            }
            .text-description {
                font-size: 12px !important;
            }
            .accordion {
                --bs-accordion-color: #634730 !important;
                /* --bs-accordion-bg: #d3c7be !important; */
                --bs-accordion-bg: #f4f4f4 !important;
                --bs-accordion-btn-color: #634730 !important;
                --bs-accordion-btn-bg: #d3c7be !important;
                --bs-accordion-btn-focus-border-color: #634730 !important;
                --bs-accordion-active-color: #634730 !important;
                --bs-accordion-active-bg: #634730 !important;
            }
            .accordion-flush .accordion-button:not(.collapsed) {
                color: #634730 !important;
            }
            .accordion-flush .accordion-body {
                color: #000000 !important;
            }
            .table {
                /* --bs-table-bg: #d3c7be !important; */
                --bs-table-bg: #f4f4f4 !important;
                --bs-table-border-color: #63473047 !important;
                --bs-table-hover-bg: rgb(99 71 48 / 19%) !important;
                margin-bottom: 0px !important;
            }
            .form-select {
                background-color: #d3c7be !important;
                border-radius: 30px !important;
            }

            .back-to-top {
                background: #634730 !important;
            }
            .back-to-top:hover {
                background: #cbbfb2 !important;
            }
            .header .toggle-sidebar-btn {
                color: #634730 !important;
            }
            .alert-warning {
                --bs-alert-color: #ffffff !important;
                --bs-alert-bg: #634730 !important;
                --bs-alert-border-color: #634730 !important;
                --bs-alert-link-color: #634730 !important;
            }
            .alert-payment {
                --bs-alert-color: #000000 !important;
                --bs-alert-bg: #ffffff !important;
                --bs-alert-border-color: #ffffff !important;
                --bs-alert-link-color: #ffffff !important;
            }

        </style>

    </head>
    <body>

        @include('dashboard.layouts.navbar')

        @include('dashboard.layouts.sidebar')

        @yield('content')

        @include('dashboard.layouts.footer')

        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/simple-datatables/dataTables.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

        @yield('javascript')

    </body>
</html>
