<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('static/image/malang-camp-logo-1.png')}}">
    <title>@yield('title') | Malang Camp</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- jquery --}}
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;

            background: #332C33;
        }

        .box-logo{
            background: #96858F;
            border-radius: 26px 0px 0px 26px;
            float: left;
            width: 38%;
            height: 93vh;
        }

        .box-form-login{
            background: #D5D5D5;
            border-radius: 0px 26px 26px 0px;
            float: left;
            width: 57%;
            height: 93vh;
        }

        .box-form-login form{
            margin-top:10%;
        }

        .kolom{
            text-align: center;
            padding-top: 3vh;
        }

        .kolom input{
            display: inline-block;
            margin: 0 auto;
            background: #D9D9D9;
            border-radius: 10px;
            width: 75%;
            height: 41px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 100;
            padding-left: 2vh;
            border: none;
        }

        .kolom-submit{
            text-align: center;
            padding-top: 3vh;
        }

        .kolom-submit button{
            display: inline-block;
            margin: 0 auto;
            background:#96858F;
            border-radius: 10px;
            width: 75%;
            height: 41px;
            font-size: 16px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            color: #FFFFFF;
            padding-left: 2vh;
            border: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var successMessage = urlParams.get('success');

            if (successMessage) {
                // Menampilkan pesan sukses menggunakan alert
                alert(successMessage);
            }
        });
    </script>
</head>
<body>
    <div class="container">
            @yield('content')
    </div>
</body>
</html>
