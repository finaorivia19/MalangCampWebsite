@extends('layout')
@section('title', 'lupaPassword')
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
            height: 41px;
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

                    <div class="kolom">
                                <input id="email" placeholder="Password Baru" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background:white; margin-bottom:30px; outline:0;">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="kolom">
                            <div class="col-md-6">
                                <input id="Confirm Password" placeholder="Confirm Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background:white;outline:0;margin-bottom:30px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                        <a href="account" type="button" class="btn btn-outline-light"style="background-color:#673A54;margin-left:10vh">Kirim</a>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection