@extends('layout')
@section('title', 'updateAccount')
@section('content')

<style>
        .kolom{
            text-align: left;
            padding-top: 3vh;
        }

        .kolom input{
            display: inline-block;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            width: 77%;
            height: 30px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 100;
            padding-left: 2vh;
            border: none;
        }

</style>

<div class="all" style="padding-top:40px;">
<div class="d-flex" id="table" style=" background-color: #96858F; padding: 25px; border-radius: 35px; margin-left:85px; width: 800px;">

<div class="card mb-3" style="width: 100%; border-radius:20px; background-color: #D9D9D9;">
        <div class="col-md-8">
            <div class="card-body">
            <form method="post" action="" id="myForm" enctype="multipart/form-data">
                    @csrf

                    <div class="update-foto">
                        Foto Profil
                        <input id="name" type="file" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:18vh; border:none; width:18vh; height:18vh; border-radius:18px;">

                        {{-- @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror --}}
                    </div>
                    <div class="kolom">
                    Username <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:5vh;">

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                Your Name
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:4vh;">

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
            Email
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:10vh;">

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
            NoHP
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:10vh;">

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
            Address
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="" {{--required autocomplete="name" autofocus--}} style="margin-left:7vh;">

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>
            </div>
                </form>
                <!-- <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6>
                <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6>
                <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6> -->

                    <div class="button-cncl-updt" style="margin-left:20vh">
                        <a href="account" class="btn btn-outline-light"style="background-color:#AC608D;">Cancel</a>
                        <a href="account" type="button" class="btn btn-outline-light"style="background-color:#673A54;">Update</a>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
