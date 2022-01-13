<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otp;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OtpController extends Controller
{
    public function read ($id) {
        $uid = $id;
        return view ('auth.otp', compact('uid')); 
    }

    public function verificate (Request $request) {
        $validator = Validator::make($request->all(), [
            'uid' => ['required', 'exists:users,id'],
            'code' => ['required', 'exists:otps,otp'],
        ]);

        $user = Auth::user();

        if ($validator->fails()) {
            return redirect('/register/otp/'.$user->id)->withErrors($validator->messages());
        }

        $isTrue = otp::where('user_id', $request['uid'])->where('otp', $request['code']);

        if (!$isTrue->first()) {
            return redirect('/register/otp/'.$user->id)->with('error', 'OTP salah.');
        }

        $isTrue->delete();

        User::where('id', $request['uid'])->update([
            'is_active' => 1
        ]);

        return redirect('/dashboard')->with('success', 'Selamat datang di Admin Panel!');
    }
}
