<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    {{-- tags inputs --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/1.0.0/bootstrap-taginput.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js">


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

    {{-- end --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- Bootstrap 5 CDN Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicons -->
    <link href="{{ asset('/backend_assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/backend_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="/backend_assets/vendor/plugins/@mdi/font/css/materialdesignicons.min.css">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('/backend_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="/backend_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/backend_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/backend_assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/backend_assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/backend_assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/backend_assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.5.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script> --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>



    {{-- summernote  Css Link --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


</head>

<body class="">

{{-- @include('layouts.navigation') --}}

    

    @yield('navigations')

    <main id="main" class="main">
        @yield('content')

    </main><!-- End #main -->
    {{-- @include('layouts.backend.inc.admin-footer') --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/backend_assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/backend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/backend_assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/backend_assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/backend_assets/vendor/quill/quill.min.js') }}"></script>
    {{-- <script src="{{asset('/backend_assets/vendor/tinymce/tinymce.min.js')}}"></script> --}}
    <script src="{{ asset('/backend_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/backend_assets/js/main.js') }}"></script>
    <script src="{{ asset('/backend_assets/js/jquery-3.6.0.min.js') }}"></script>

    {{-- dataTables --}}
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    @yield('scripts')

    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#mySummernote").summernote({
                placeholder: 'Write description...',
                tabsize: 2,
                height: 120,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    @yield('scripts')


</body>

</html>
