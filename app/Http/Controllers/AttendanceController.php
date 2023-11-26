<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function uploadAttendance()
    {
        return view('attend.upload-attendance');
    }

    public function remarkAttendance()
    {
        return view('attend.remark-attendance');
    }

    public function reviewAttendance()
    {
        return view('attend.review-attendance');
    }

    public function checkDaysWorker()
    {
        return view('attend.check-days-worker');
    }

    public function checkGroupDays()
    {
        return view('attend.check-group-days');
    }

    public function daysClaims()
    {
        return view('attend.days-claims');
    }

    public function generateTimetable()
    {
        return view('attend.generate-timetable');
    }
}
