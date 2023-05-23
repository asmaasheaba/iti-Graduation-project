<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>

    @include('admin.layout.css')

    @yield('dash-css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.layout.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layout.sidebar')
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('admin.layout.footer')
        <!-- /. Main Footer -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('admin.layout.script')
    @yield('dash-script')
</body>

</html>
