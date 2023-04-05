<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Conference Nepal" />
    <meta name="keywords" content="Conference Nepal" />
    <meta name="author" content="Conference Nepal" />

    <!-- Page Title -->
    <title>Event Durbar</title>

    <!-- Favicon and Touch Icons -->
    <link href="https://conferencenepal.com/images/favicon.png" rel="shortcut icon" type="image/png">

    {{-- Bootstrap 5 CDN Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- bootstrap-icons -->
    <link href="/backend_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="https://conferencenepal.com/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://conferencenepal.com/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="https://conferencenepal.com/css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://conferencenepal.com/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="https://conferencenepal.com/css/style-main.css" rel="stylesheet">
    <!-- CSS | Theme Color -->
    <link href="https://conferencenepal.com/css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="https://conferencenepal.com/css/preloader.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://conferencenepal.com/backend/plugins/datatables/dataTables.bootstrap.css">

    <!-- CSS | Custom Margin Padding Collection -->
    <link href="https://conferencenepal.com/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="https://conferencenepal.com/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    {{-- <link href="/assets/css/style.css" rel="stylesheet" type="text/css"> --}}
    <link href="/backend_assets/css/style.css" rel="stylesheet">

    {{-- web-fonts --}}
    {{-- <link rel="stylesheet" href="/assets/frontend/fonts/materialdesignicons.min.css"> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Revolution Slider 5.x CSS settings -->
    <link href="https://conferencenepal.com/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />

    <link href="https://conferencenepal.com/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="https://conferencenepal.com/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- external javascripts -->
    <script src="https://conferencenepal.com/js/jquery-2.2.0.min.js"></script>
    <script src="https://conferencenepal.com/js/jquery-ui.min.js"></script>
    <script src="https://conferencenepal.com/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="https://conferencenepal.com/js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="https://conferencenepal.com/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://conferencenepal.com/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
</head>

<body class="">
    <div id="wrapper">

        <!-- Header -->
        @include('layouts.frontend.inc.header')


    </div>
    </section>
    @yield('content')


    <!-- Footer -->
    {{-- @include('layouts.frontend.inc.footer') --}}


    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="https://conferencenepal.com/js/custom.js"></script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
    {{-- <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js">
    </script> --}}
    <script type="text/javascript"
        src="https://conferencenepal.com/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

    <script src="https://conferencenepal.com/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://conferencenepal.com/backend/plugins/datatables/dataTables.bootstrap.min.js"></script>

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


</body>

</html>
