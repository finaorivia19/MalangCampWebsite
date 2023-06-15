<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class OTPController extends Controller
{
    //
    public function verify(Request $request) {

        $request->validate([
            'otp' => 'required|string',
        ]);

        // dd($request->otp);

        $email = $request->email;

        // dd($email);

        $user = User::where('email', $email)->first();

        $now = Carbon::now();
        $otpExpired = Carbon::parse($user->otp_expired);

        // dd($user);

        if($user) {
            if($user->otp_code === $request->otp && $now->lt($otpExpired)) {
                $user->email_verified_at = $now;
                $user->save();

                // return redirect()->route('home')->with('success', 'Email Terverifikasi, sekarang Anda bisa login');
                return response()->json(['success' => 'Email Terverifikasi, sekarang Anda bisa login']);
            } else if (!$now->lt($otpExpired)) {
                $user->delete();
                return response()->json(['error' => 'Silahkan Registrasi Ulang']);
            } else if ($user->otp_code !== $request->otp) {
                // return redirect()->route('verification-get')->with('error', 'Invalid OTP atau OTP sudah kadaluarsa');
                return response()->json(['error' => 'Invalid OTP']);
            } else {
                return response()->json(['error' => 'Mohon Maaf Terjadi Kesalahan']);
            }
        }

        return redirect()->route('register');
    }

    public function show() {
        return view('verification');
    }
}
