<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //
    public function leaveRequests()
    {
        return view('leave.leave-requests');
    }

    public function requestsDays()
    {
        return view('leave.requests-days');
    }

    public function pendingLeaves()
    {
        return view('leave.pending-leaves');
    }

    public function dueLeaves()
    {
        return view('leave.due-leaves');
    }

    public function enforceLeave()
    {
        return view('leave.enforce-leave');
    }

    public function rescheduleLeave()
    {
        return view('leave.re-schedule-leave');
    }
}
