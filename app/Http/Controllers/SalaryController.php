<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    //
    public function approvePayslip()
    {
        return view('slip.approve-payslip');
    }

    public function financialTicket()
    {
        return view('slip.financial-ticket');
    }

    public function generatePincode()
    {
        return view('slip.generate-pincode');
    }

    public function preparePayslip()
    {
        return view('slip.prepare-payslip');
    }

    public function releaseSalary()
    {
        return view('slip.release-salary');
    }

    public function releasePincode()
    {
        return view('slip.release-pincode');
    }

    public function verifyPayslip()
    {
        return view('slip.verify-payslip');
    }

    public function viewSlipTicket()
    {
        return view('slip.view-ticket');
    }

    public function withholdPayslip()
    {
        return view('slip.withhold-payslip');
    }
}
