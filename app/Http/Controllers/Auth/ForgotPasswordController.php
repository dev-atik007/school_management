<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('Auth.forgot');
    }

    public function PostForgotPassword(Request $request)
    {
        // dd($request->all());
        $user = User::getEmailSingle($request->email);
        // dd($getEmailSingle);

        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Please check your email and reset your password");
        }
        else
        {
            return redirect()->back()->with('error', "Email not found in the system");
        }
    }
}
