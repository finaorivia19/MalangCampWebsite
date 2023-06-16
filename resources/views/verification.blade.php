@extends('layoutAbun')
@section('title', 'Verification')
@section('content')
<div class="box-form">
    {{-- @if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
    @endif --}}
    <a class="back-to-register" href="{{ route('register') }}">
        <img src="{{asset('static/image/back-icon.png')}}" alt="back-icon">
    </a>
    <span id="countdown"></span>
    <div class="logo">
        <img src="https://i.ibb.co/hHRNXtY/malang-camp-logo-2.png" alt="">
    </div>
    <div class="text-verif">
        Verification required
    </div>
    <div class="text2-verif">
        @if(isset($email))
            enter the code that we’ve emailed to <br> <b><i>{{ $email }}</i></b> <br>If it doesn't appear, try checking spam or promotions
        @else
            <!-- Tampilkan pesan atau lakukan pengalihan jika $email tidak terdefinisi -->
            <script>
                window.location.href = "{{ route('register') }}";
            </script>
        @endif
    </div>
    {{-- <form method="POST" action="/otp">
        @csrf --}}

        <div class="verification-input">
            <div class="code-boxes">
                <input type="text" class="code-box" maxlength="1" required autofocus/>
                <input type="text" class="code-box" maxlength="1" required autofocus/>
                <input type="text" class="code-box" maxlength="1" required autofocus/>
                <input type="text" class="code-box" maxlength="1" required autofocus/>
                <input type="text" class="code-box" maxlength="1" required autofocus/>
                <input type="text" class="code-box" maxlength="1" required autofocus oninput="getOTP()"/>
            </div>
            <i><span id="error-message"></span></i>
            <div class="value-otp">
                <input value="0" id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" readonly>
                @if(isset($email))
                <input id="email" type="text" value="{{ $email }}" name="email" readonly>
                @else
                    <!-- Tampilkan pesan atau lakukan pengalihan jika $email tidak terdefinisi -->
                    <script>
                        window.location.href = "{{ route('register') }}";
                    </script>
                @endif

                {{-- @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif --}}
                {{-- @error('otp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>
            <div class="submitOTP">
                <button type="submit" class="otp-button" onclick="postOTP()">
                    <i class="fas fa-arrow-right" id="go-icon"></i>
                </button>
            </div>
        </div>
    {{-- </form> --}}
</div>

@endsection
