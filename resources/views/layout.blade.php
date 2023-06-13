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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        body{
            overflow-x: hidden;
        }

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

        #table {
            width:1050px;
        }

        @media screen and (max-width: 768px) {
            #address {
                display: none;
            }

            #card-content {
                height: 330px;
            }

            #table {
                display: flex;
                flex-direction: column;
                width: 550px;
                height: 870px;
            }

            #left-box {
                width: 500px;
                height: 400px;
            }

            #right-box {
                width: 500px;
                height: 400px;
            }
        }

        #search-column {
            margin-top: -6px;
        }

        #search-icon {
            position: absolute;
            height: 12px;
            width: 12px;
            background: transparent;
            left: 10px;
            top: 8px;
            border-radius: 100%;
        }

        @import url("https://fonts.googleapis.com/css?family=Raleway");

        .container {
            position: relative;
            margin-top: -2px;
        }

        .main {
            position: relative;
            border: white;
            height: 25px;
            background: white;
            width: 190px;
            border-radius: 50px;
            padding-left: 31px;
            padding-right: 11px;
            padding-top: 4px;
            padding-bottom: 4px;
            font-size: 13px;
        }

        .main:focus {
            outline: none;
        }

        .searchicon {
            position: absolute;
            height: 12px;
            width: 12px;
            background: transparent;
            border: solid grey;
            left: 16px;
            top: 6px;
            border-radius: 100%;
        }

        .searchicon:after {
            content: "";
            position: absolute;
            background: grey;
            height: 4px;
            width: 2px;
            bottom: -5px;
            right: -3px;
            transform: rotate(-45deg);
        }

        .icon-holder {
            display: flex;
            justify-content: space-around;
            margin-top: 7px;
        }

        .icon {
            position: relative;
            height: 35px;
            width: 35px;
            background: grey;
            border-radius: 100%;
            box-shadow: 0px 1px 2px 0px #555;
            cursor: pointer;
            opacity: 0;
            transition: 0.4s;
        }

        .icon:hover {
            background: grey;
            animation-play-state: paused;
        }

        .dots {
            position: absolute;
            height: 5px;
            width: 5px;
            background: white;
            border-radius: 100%;
            left: 15px;
            top: 15px;
        }

        .dots:after {
            content: "";
            position: absolute;
            height: 5px;
            width: 5px;
            background: white;
            border-radius: 100%;
            left: 9px;
        }

        .dots:before {
            content: "";
            position: absolute;
            height: 5px;
            width: 5px;
            background: white;
            border-radius: 100%;
            left: -9px;
        }

        input:focus~.icon-holder>.icon {
            animation: ani 2.2s ease-out infinite;
        }

        @keyframes ani {
            0% {
                opacity: 1;
            }

            10% {
                transform: scale(1.2);
                opacity: 1;
            }

            20% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .tooltip {
            opacity: 0;
            position: absolute;
            font-size: 12px;
            color: white;
            background: #555;
            padding: 8px;
            top: 15px;
            border-radius: 15%;
            top: 45px;
        }

        .tooltip:after {
            content: "";
            position: absolute;
            background: #555;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            height: 18px;
            width: 18px;
            top: -10px;
            left: 7px;
        }

        .icon:hover>.tooltip {
            animation: ani 0.4s ease-out forwards;
            animation-delay: 0.3s;
        }

        .cart-pesanan{
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            background-color: #96858F;
            border-radius: 18px;
        }

        .cart-pesanan .content-cart .left-box-cart{
            float: left;
            color:white;
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 6px 0px 10px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            width: 50%;
            height: 83%;
            margin: 3vh;
        }

        .cart-pesanan .content-cart .right-box-cart{
            float: left;
            color:white;
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 6px 0px 10px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            width: 50%;
            height: 69%;
            margin-right: 3vh;
            margin-left: 3vh;
            margin-top: 10vh;
            margin-bottom: 10vh;
        }

        .content-right-box-cart{
            margin-left: 7vh;
            margin-right:7vh;
        }

        .upload-bukti-transaksi .custom-input-bukti{
            visibility: hidden;
            width: 0;
            position: absolute;
        }

        .upload-bukti-transaksi label{
            display: inline-block;
            margin: 0 auto;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 18px;
            width: 100%;
            height: 6vh;
            padding-left: 2vh;
            cursor: pointer;
        }

        .text-kirim-bukti{
            float: left;
            width: 50%;
            padding: 1vh 2vh;
        }

        .button-kirim-bukti{
            float: left;
            width: 50%;
            text-align: right;
        }

        .custom-button-kirim{
            width: 12vh;
            height: 6vh;
            background: #96858F;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 18px;
            border: none;
            color: #FFFFFF;
            text-align: center;
        }

        .img-bukti{
            display:none;
            width:8vh;
            height:10vh;
        }

        .cart-input{
            padding-top: 3vh;
        }

        .cart-input input{
            width: 100%;
            height: 6vh;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 18px;
            border: none;
        }

        .box-kelolaPesanan{
            box-sizing: border-box;
            width: 100%;
            margin-top: 3vh;
            background-color: #96858F;
            border-radius: 18px;
        }

        .box-kelolaPesanan table tbody tr td{
            padding-left: 2vh;
            margin-left: 3vh;
        }

        .kolom-bawah{
            display: flexbox;
            width: 100%;
        }


        .kolom-bawah .tombol{
            margin-left: 77%;
        }

        .kolom-bawah .tombol .payment{
            display: inline-block;
        }

        .kolom-bawah .tombol .konfirmasi{
            display: inline-block;
            margin-left: 1vh;
            margin-bottom: 2vh;
        }

        tbody tr td{
            width: 20%;
        }


    </style>

    <script>
        var enabled = false;

        $(document).ready(function () {
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
                        <div class="col col-lg-3">

                            <!-- SidebarSearch Form -->
                            <div class="container">
                                <input class="main shadow" placeholder="Search"/><span class="searchicon"></span>
                            </div>

                        </div><!-- /.col -->
                        <div class="col">
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

    {{-- script preview img --}}
    <script>
        function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            preview.setAttribute('src', e.target.result);
            preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.setAttribute('src', '#');
            preview.style.display = 'none';
        }
        }
    </script>

    {{-- script lightbox belum fix dipakai--}}
    {{-- <script>
        function openLightbox(image) {
            var lightbox = document.getElementById('lightbox');
            var lightboxImage = document.getElementById('lightbox-image');

            lightbox.style.display = 'block';
            lightboxImage.src = image.src;
        }

        function closeLightbox() {
            var lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
        }
    </script> --}}
</body>

</html>
