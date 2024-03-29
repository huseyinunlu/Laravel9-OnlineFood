<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>App Name - @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
</head>
    <body>
    <div class="container-scroller">

        @include('admin.sidebar')


        <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')
            <div class="main-panel">
                @yield('content')

            </div>
            @include('admin.footer')
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets')}}/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/admin/js/misc.js"></script>
    <script src="{{asset('assets')}}/admin/js/settings.js"></script>
    <script src="{{asset('assets')}}/admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets')}}/admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->


    </body>
</html>
