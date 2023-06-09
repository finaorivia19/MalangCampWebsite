@extends('layoutAbun')
@section('title', 'Sign Up')
@section('content')
<div class="box-form">
    <a class="back-to-login" href="{{ route('login') }}">
        <img src="{{asset('static/image/back-icon.png')}}" alt="back-icon">
    </a>
    <div class="text">
        Sign Up Now
    </div>
    <div class="form-signup">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="kolom">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Phone Number" required autocomplete="phoneNumber" autofocus>

                @error('phoneNumber')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Your Address" required autocomplete="address" autofocus>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="password" autofocus>
                <i class="fa fa-eye-slash" id="togglePassword" onclick="knowPass()"></i>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom">
                <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" placeholder="Password Confirm" required autocomplete="new-password" autofocus>
                <i class="fa fa-eye-slash" id="togglePasswordConfirm" onclick="knowPassConfirm()"></i>
                @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <br>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="kolom-submit">
                <button type="submit" class="signup-button">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
