<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }
    public function change_password()
    {
        return view('auth.change-password');
    }
    public function recover_password()
    {
        return view('auth.recover-password');
    }
    public function reset_password()
    {
        return view('auth.reset-password');
    }
    public function lockscreen()
    {
        return view('auth.lockscreen');
    }

    public function two_step()
    {
        return view('auth.two-step');
    }
}
