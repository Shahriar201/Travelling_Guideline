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
                            <h1 class="m-0 text-dark">Add Regions</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                                <li class="breadcrumb-item active">Regions </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!--Start Table -->

            <div class="col-md-8">
                <!-- general form elements -->
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('region.store') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    @method('post') @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>

                            <!-- message for data sent -->
                            <span class="badge badge-success" style="float: right">{{ Session::get('success') }}</span>

                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter Enter " required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>

                            <textarea class="form-control" name="description" id="description" type="text" placeholder="Enter Desctription " required="required" data-validation-required-message="Please enter your name."></textarea>

                            <p class="help-block text-danger"></p>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input class="custom-file-input" name="image" id="image" type="file" required="required" data-validation-required-message="Please enter your image.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong>{{ $errors->first('image') }}</strong>
                                                        </span>
                                @endif

                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Table End -->

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
