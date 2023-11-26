<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //

    public function dashboard(Request $request)
    {
        return view("hr.dashboard");
    }
    
}
