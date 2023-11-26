<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    //
    public function processLoan()
    {
        return view('loan.process-loan');
    }

    public function approveLoan()
    {
        return view('loan.approve-loan');
    }

    public function loanStatements()
    {
        return view('loan.loan-statements');
    }
}
