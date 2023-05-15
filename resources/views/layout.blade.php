<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('static/image/malang-camp-logo-1.png')}}">
    <title>@yield('title') | Malang Camp</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Charmonman&display=swap" rel="stylesheet">

    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        #brand {
            font-family: 'Charmonman', cursive;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
        }

        #logo {
            width: 56px;
        }

        #logout {
            font-family: 'ABeeZee', sans-serif;
            font-size: 18px;
        }

        #main-background {
          background-color: #D5D5D5;
        }

        .main-color {
            background-color: #96858F;
        }

        #main-content {
            /* background-image: url('{{asset('static/image/main-background-all.png')}}'); */
            background-size: cover;
            background-position: bottom;
            height: 128vh;
            margin-top: -10px;
        }

        .nav-link {
            font-family: 'ABeeZee', sans-serif;
            font-size: 18px;
            line-height: 24px;

            color: #395B64;
        }

        .photo-profile {
            height: 72px;
            width: 72px;
            overflow: hidden;
            object-fit: cover;
        }

        .quotes {
            font-family: 'ABeeZee', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 30px;
            line-height: 41px;
            text-align: right;

            color: #000000;

            mix-blend-mode: hard-light;
            opacity: 0.7;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

            padding: 16px;
        }

    </style>

    <script>

        var enabled = false;

        $(document).ready(function() {
            var pageTitle = "@yield('title')";

            if (pageTitle === 'Dashboard') {
                // console.log(pageTitle);
                $('#main-content').css({
                    "background-image": "url('{{asset('static/image/main-background-home.png')}}')",
                });
            } else {
                $('#main-content').css({
                    "background-image": "url('{{asset('static/image/main-background-all.png')}}')",
                });
            }
        });

        function close_sidebar() {
            if (!enabled) {
                $('.photo-profile').css({
                    "width": "48px",
                    "height": "48px",
                });

                $('#username').hide();
                enabled = true;
            } else {
                $('.photo-profile').css({
                    "width": "72px",
                    "height": "72px",
                });

                $('#username').show();
                enabled = false;
            }

        }

    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button" onclick="close_sidebar()"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link"><u>Home</u></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/cart" class="nav-link">Cart</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/item" class="nav-link">Item</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/account" class="nav-link">Account</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/contact-us" class="nav-link">Contact Us</a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="/order" class="nav-link">Order</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/report" class="nav-link">Report</a>
      </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item mt-3 mr-4">
                    <p id="brand">Malang Camp</p>
                </li>
                <li class="nav-item mt-2">
                    <img src="{{asset('static/image/malang-camp-logo-2.png')}}" alt="malang-camp-logo" id="logo">
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 main-color">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="mt-3 pb-3 mb-3 text-center">
                    <div>
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2 photo-profile"
                            alt="User Image" href="/account">
                        <a href="/account" class="d-block mt-2 text-white">
                            <h6 id="username">Alexander Pierce</h6>
                        </a>
                    </div>
                    <hr color="white" />

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        {{-- @foreach ($items as $item)
                          <a href="{{ route('items.index',$items->id) }}" class="d-block mb-4">{{$item->nama}}</a>
                        <hr color="white" />
                        @endforeach --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="main-background">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">

                            <!-- SidebarSearch Form -->
                            {{-- <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> --}}

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <h4 id="logout">Logout</h4>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" id="main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </section>
            <footer class="text-center mt-8">
                <strong class="text-dark">&copy; 2023 Malang Camp</strong>
            </footer>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
