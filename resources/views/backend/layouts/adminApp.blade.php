<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.components.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('images/logo.png') }}" alt="SRM-Logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('backend.layouts.components.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('backend.layouts.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('backend.layouts.components.foot')

    @stack('scripts')
</body>

</html>
