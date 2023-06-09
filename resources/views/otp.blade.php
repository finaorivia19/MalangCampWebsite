@extends('layoutAbun')
@section('title', 'Verification')
@section('content')
<div class="box-form">
    <a class="back-to-register" href="{{ route('register') }}">
        <img src="{{asset('static/image/back-icon.png')}}" alt="back-icon">
    </a>
    <div class="logo">
        <img src="https://i.ibb.co/hHRNXtY/malang-camp-logo-2.png" alt="">
    </div>
    <div class="text-verif">
        Verification required
    </div>
    <div class="text2-verif">
        enter the code that we’ve emailed to <br> example@gmail.com <br>If it doesn't appear, try checking spam or promotions
    </div>
    <div class="verification-input">
        <div class="code-boxes">
          <input type="text" class="code-box" maxlength="1" />
          <input type="text" class="code-box" maxlength="1" />
          <input type="text" class="code-box" maxlength="1" />
          <input type="text" class="code-box" maxlength="1" />
          <input type="text" class="code-box" maxlength="1" />
          <input type="text" class="code-box" maxlength="1" />
        </div>
        <div class="submitOTP">
            <button type="submit" class="otp-button">
                <i class="fas fa-arrow-right" id="go-icon"></i>
              </button>
          </div>
      </div>
</div>

@endsection
