<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        // dd($request->all());
        Auth::logout();
        return redirect('/');
    }
}
