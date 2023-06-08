@extends('layoutLogin')
@section('title', 'Login')
@section('content')
    <div class="box-logo ">
    <img src="{{asset('static/image/Component 19 (1).png')}} "
    style="margin-left:80px;margin-top:80px;">
    </div>
    <div class="box-form-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            <div class="text" style="margin-top:20px;">
            <center>SIGN INTO YOUR ACCOUNT</center> 
            </div>
                        <div class="kolom">
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background:white; margin-bottom:30px; outline:0;">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="kolom">
                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background:white;outline:0;margin-bottom:30px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:75%; background-color:#96858F; border-radius:8px; padding:10px; border:none; margin-bottom:30px;margin-left:15vh;color:white; font-size:16px;">
                                    {{ __('LOGIN') }}
                        </button>

                        <div class="p" style="margin-left: 15vh;">
                        <div class="forgot-password">
                            <a href="" style="text-decoration:none; color:black">forgot password?</a>
                        </div>

                        <div class="link-register">
                            <b style="font-family: Inter;">Don't have an account? <a href="{{ route('register') }}" style="color:black">Register here</a> </b>
                        </div>
                        </div>
    </div>
@endsection
