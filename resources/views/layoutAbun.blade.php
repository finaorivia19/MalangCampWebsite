<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>benakno den | Malang Camp</title>

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            display: grid;
            place-items: center;
            width: 100%;
            height: 100vh;

            background: #332C33;
        }

        .box{
            display: grid;
            place-items: center;
            width: 95%;
            height: 93vh;
            left: 64px;
            top: 41px;

            background: #96858F;
            border-radius: 26px;
        }

        .box-form-signup{
            width: 80vh;
            height: 85vh;
            top: 76px;

            background: #FFFFFF;
            box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.25);
            border-radius: 26px;
        }

        .text{
            text-align: center;
            padding-top: 5vh;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 57px;
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

</head>
<body>
    <div class="container">
        <div class="box">
            @yield('content')
        </div>
    </div>

</body>
</html>
