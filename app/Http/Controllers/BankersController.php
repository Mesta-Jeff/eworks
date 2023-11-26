<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankersController extends Controller
{

    public function dashboard()
    {
        return view('bank.dashboard');
    }

    
}
