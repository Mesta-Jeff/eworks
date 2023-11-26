<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        return view("dev.dashboard");
    }
}
