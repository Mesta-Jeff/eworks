<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function attendanceList()
    {
        return view('requests.attendance-list');
    }

    public function workersRecords()
    {
        return view('requests.workers-records');
    }

    public function loans()
    {
        return view('requests.loans');
    }

    public function accountMinute()
    {
        return view('requests.account-minute');
    }

    public function promotionClaims()
    {
        return view('requests.promotion-claims');
    }

    public function leaveClaims()
    {
        return view('requests.leave-claims');
    }

    public function excuseDuties()
    {
        return view('requests.excuse-duties');
    }

    public function requestedDays()
    {
        return view('requests.requested-days');
    }
}
