<!DOCTYPE html>
<html>

<head>

    <!-- head.blade.php -->
    @include('admin.layouts.head');

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <!-- main_sidebar.blade.php -->
        @include('admin.layouts.navbar');
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- main_sidebar.blade.php -->
        @include('admin.layouts.main_sidebar');

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Places</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                                <li class="breadcrumb-item active">Places </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="" style="padding: 20px">
                <!-- Simple table -->
                <section class="content">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"> Table</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered" style="padding-right: 20px;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 15px">id</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th style="width: 5px">Image</th>
                                                    <th>Location</th>
                                                    <th>Region</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php $id = 1; ?>

                                            @foreach($places as $place)

                                                <tr>
                                                    <td>{{ $id  }}</td>

                                                    <td>{{ $place->name  }}</td>

                                                    <td>
                                                        <div class="">
                                                            <div class="" style="width: 30%">{{ $place->description }}</div>
                                                        </div>
                                                    </td>

                                                        <td>{{ $place->image  }}</td>

                                                    <td>
                                                    <div class="">
                                                        <div class="" style="width: 100px">{{ $place->location }}</div>
                                                    </div>
                                                    </td>

                                                    <td>{{ $place->region->name }}</td>

                                                    <td>
                                                        <!-- <a href="" class="btn btn-primary">Insert</a> -->
                                                        <!-- <a href="" class="btn btn-info">View</a> -->
                                                        <a href="" class="btn btn-success">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>

                                                <?php $id++ ?>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /simple table end -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset ('asset/backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset ('asset/backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset ('asset/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset ('asset/backend/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset ('asset/backend/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset ('asset/backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset ('asset/backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset ('asset/backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset ('asset/backend/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset ('asset/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset ('asset/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset ('asset/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset ('asset/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/backend/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('asset/backend/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('asset/backend/dist/js/demo.js') }}"></script>
</body>

</html>
