@extends('layoutAbun')
@section('title', 'Verification')
@section('content')
<div class="box-form">
    <div class="logo">
        <img src="https://i.ibb.co/hHRNXtY/malang-camp-logo-2.png" alt="">
    </div>
    <div class="text-verif">
        Verification required
    </div>
    <div class="text2-verif">
        enter the code that we’ve emailed to <br> example@gmail.com
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
                <i class="fas fa-arrow-right"></i>
              </button>
          </div>
      </div>
</div>

@endsection
