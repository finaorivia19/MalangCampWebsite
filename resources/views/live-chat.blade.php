<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('static/image/malang-camp-logo-1.png')}}">

    <title>Live Chat</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Charmonman&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #D5D5D5;
        }

        #brand {
            font-family: 'Charmonman', cursive;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
        }

        .chat-column {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 56px;
            background-color: #AC608D;
            box-sizing: border-box;
            width: 100%;
            box-shadow: 0 3px 8px rgb(0, 0, 0, 1);
            display: flex;
            justify-content: center;
        }

        .chat-column div {
            background-color: #D9D9D9;
            font-family: 'ABeeZee', sans-serif;
            border-radius: 50%;
            box-shadow: 0 3px 8px rgb(0, 0, 0, 0.6);
        }

        .chat-column input {
            border-radius: 64px;
            height: 32px;
            border: none;
            background-color: #D9D9D9;
            padding-left: 8px;
            width: 512px;
        }

        .chat-column img {
            width: 24px;
            height: 24px;
        }

        .chat-column table {
            margin-left: 256px;
            border-collapse: collapse;
        }

        .chat-column td {
            padding: 8px;
        }

        #chat-receiver {
            background-color: #ffffff;
            border-radius: 0px 8px 8px 8px;
            color: rgb(0, 0, 0);
            box-shadow: 0 2px 4px rgb(0, 0, 0, 0.4);
            padding-right: 8px;
            padding-left: 8px;
        }

        #chat-receiver,
        #chat-sender {
            max-width: 360px;
        }

        #chat-sender {
            background-color: #96858F;
            border-radius: 8px 0px 8px 8px;
            color: white;
            box-shadow: 0 2px 4px rgb(0, 0, 0, 0.4);
            padding-right: 8px;
            padding-left: 8px;
        }

        .image-user img {
            width: 40px;
            height: 40px;
        }

        .image-user h5 {
            margin-left: 4px;
            font-family: 'ABeeZee', sans-serif;
        }

        #logo {
            width: 56px;
        }

        .main-background {
            background-color: #D5D5D5;
        }

        .main-sidebar {
            background-color: #673A54;
        }

        @media (max-width: 768px) {
            .chat-column input {
                border-radius: 64px;
                height: 32px;
                border: none;
                background-color: #D9D9D9;
                padding-left: 8px;
                width: 256px;
            }

            .chat-column table {
                margin-left: 4px;
                border-collapse: collapse;
            }
        }

        #minimize,
        #file-chat {
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            padding-top: 4px;
            cursor: pointer;
        }

        #send-chat {
            width: 32px;
            height: 32px;
            justify-content: center;
            padding-top: 4px;
            cursor: pointer;
            display: none;
        }

        #minimize:hover,
        #file-chat:hover,
        #send-chat:hover {
            background-color: white;
        }

        #search-button {
            background-color: #96858F;
            border: none;
            border-radius: 4px;
        }

        #search-column {
            font-family: 'ABeeZee', sans-serif;
            padding-left: 8px;
        }

        #content-chat {
            font-family: 'ABeeZee', sans-serif;
            overflow: auto;
            margin-top: 80px;
            margin-bottom: 40px;
        }

        #sender:hover,
        #receiver:hover {
            #date-time {
                color: black;
            }

            #delete-chat div,
            #edit-chat div {
                display: block;
            }

            #delete-chat {
                background-color: #673A54;
                box-shadow: 0 2px 4px rgb(0, 0, 0, 0.4);
                cursor: pointer;
            }

            #edit-chat {
                background-color: #AC608D;
                box-shadow: 0 2px 4px rgb(0, 0, 0, 0.4);
                cursor: pointer;
            }
        }

        #receiver td {
            padding-right: 4px;
            padding-left: 4px;
        }

        #sender {
            display: flex;
            justify-content: flex-end;
            border-collapse: collapse;
        }

        #sender td {
            padding-right: 4px;
            padding-left: 4px;
        }

        #sender img,
        #receiver img {
            width: 32px;
            height: 32px;
        }

        #sender #user-chat {
            text-align: right;
        }

        #user-chat {
            font-size: 13px;
        }

        #date-time {
            font-size: 13px;
            color: #D5D5D5;
        }

        #edit-chat {
            background-color: transparent;
            border-radius: 32px;
        }

        #edit-chat img:hover,
        #delete-chat img:hover {
            width: 26px;
            height: 26px;
        }

        #edit-chat img,
        #delete-chat img {
            width: 24px;
            height: 24px;
        }

        #delete-chat {
            background-color: transparent;
            border-radius: 32px;
        }

        #delete-chat div,
        #edit-chat div {
            display: none;
        }

        .user-list {
            background-color: white;
            border-radius: 8px;
            margin-bottom: 4px;
            cursor: pointer;
        }

        .active {
            background-color: #AC608D;
        }

    </style>

    <script>
        let enabled = false;

        const loginId = {{ Auth::user()->id }};
        const userProfile = '{{ Auth::user()->photo_profile }}';

        function closeSidebar() {
            if (!enabled) {
                $('#search-area').hide();
                $('.chat-column table').css('margin-left', '64px');
                $('.nav-link span').hide();
                enabled = true;
            } else {
                $('#search-area').show();
                $('.chat-column table').css('margin-left', '256px');
                $('.nav-link span').show();
                enabled = false;
            }
        }

    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div id="users-data" data-users="{{ json_encode($users_all) }}"></div>

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" onclick="closeSidebar()"><i
                            class="fas fa-bars"></i></a>
                </li>
                <table>
                    <tr class="image-user">
                        <td>
                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                                alt="User Image">
                        </td>
                        <td>
                            <h5 class="mt-2">User 3</h5>
                        </td>
                    </tr>
                </table>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4" data-widget="false">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{asset(Auth::user()->photo_profile)}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline" id="search-area">
                    <div>
                        <input type="text" placeholder="Search" id="search-column">
                        <button id="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <hr color="white" />

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <ul class="nav">
                                @if (Auth::user()->id > 1)

                                <li class="nav-item user-list active" user-id="{{ $users->id }}">
                                    <a class="nav-link text-dark" style="text-decoration: none;">
                                        <i class="fa fa-user nav-icon text-dark" data-toggle="tooltip"
                                            data-placement="right" title="{{ $users->name }}"></i>
                                        <span class="mr-1">{{ $users->name }}</span>
                                        <span class="badge badge-info">5</span>
                                    </a>
                                </li>

                                @elseif (Auth::user()->id == 1)

                                @foreach ($users as $user)

                                @if ($user_id == $user->id)

                                <li class="nav-item user-list active" user-id="{{ $user->id }}"
                                    onclick="moveCustomer({{ $user->id }})">
                                    <a class="nav-link text-light" style="text-decoration: none;">
                                        <i class="fa fa-user nav-icon text-light" data-toggle="tooltip"
                                            data-placement="right" title="{{ $user->name }}"></i>
                                        <span class="mr-1">{{ $user->name }}</span>
                                        <span class="badge badge-info">5</span>
                                    </a>
                                </li>

                                @else

                                <li class="nav-item user-list" user-id="{{ $user->id }}"
                                    onclick="moveCustomer({{ $user->id }})">
                                    <a class="nav-link text-dark" style="text-decoration: none;">
                                        <i class="fa fa-user nav-icon text-dark" data-toggle="tooltip"
                                            data-placement="right" title="{{ $user->name }}"></i>
                                        <span class="mr-1">{{ $user->name }}</span>
                                        <span class="badge badge-info">5</span>
                                    </a>
                                </li>

                                @endif

                                @endforeach

                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper main-background">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div id="content-chat">
                        <table id="receiver">
                            <tr>
                                <td></td>
                                <td id="user-chat">
                                    User 3
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                                        alt="receiver-img">
                                </td>
                                <td id="chat-receiver">
                                    Selamat Siang
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="delete-chat">
                                    <div>
                                        <img src="{{asset('static/image/delete-icon.png')}}" alt="delete-icon">
                                    </div>
                                </td>
                            </tr>
                            <tr id="date-time">
                                <td></td>
                                <td>
                                    <span>2023/05/27 13:29:21</span>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <table id="sender">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="user-chat">
                                    Admin
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td id="delete-chat">
                                    <div>
                                        <img src="{{asset('static/image/delete-icon.png')}}" alt="delete-icon">
                                    </div>
                                </td>
                                <td></td>
                                <td id="edit-chat">
                                    <div>
                                        <img src="{{asset('static/image/edit-icon.png')}}" alt="delete-icon">
                                    </div>
                                </td>
                                <td></td>
                                <td id="chat-sender">
                                    Selamat Siang
                                </td>
                                <td>
                                    <img src="{{asset('dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2"
                                        alt="sender-img">
                                </td>
                            </tr>
                            <tr id="date-time">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span>2023/05/27 13:29:21</span>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    {{-- Modal Confirm --}}
                    <div class="modal fade" id="confirmDeleteModal" tabindex="-1"
                        aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi
                                        Hapus Chat</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" onclick="closeModalConfirm()"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus chat ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal" onclick="closeModalConfirm()">Batal</button>
                                    <button type="button" class="btn btn-danger" id="confirmDeleteButton" >Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </div>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <div class="chat-column">
                <table>
                    <tr>
                        <td>
                            <div id="minimize">
                                <a href="/"><img src="{{asset('static/image/minimize-icon.png')}}"
                                        alt="minimize-icon"></a>
                            </div>
                        </td>
                        <td>
                            <div id="file-chat">
                                <img src="{{asset('static/image/file-icon.png')}}" alt="file-icon">
                            </div>
                        </td>
                        <td>
                            <div id="chat">
                                <input id="chat-input" type="text" placeholder="Type message"
                                    oninput="checkInputChat()">
                            </div>
                        </td>
                        <td>
                            <div id="send-chat" onclick="sendChat()">
                                <img src="{{asset('static/image/send-icon.png')}}" alt="send-icon">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)

        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.js')}}"></script>
        <script src="{{asset('static/js/live-chat.js')}}"></script>
</body>

</html>
