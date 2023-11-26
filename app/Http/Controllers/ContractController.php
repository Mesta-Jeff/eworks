<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    //
    public function signContract()
    {
        return view('contract.sign-contract');
    }

    public function terminateContract()
    {
        return view('contract.terminate-contract');
    }

    public function pendingRequest()
    {
        return view('contract.pending-contract-request');
    }

    public function contractReview()
    {
        return view('contract.contract-review');
    }

    public function batchAssignment()
    {
        return view('contract.batch-assignment');
    }

    public function issueStatement()
    {
        return view('contract.issue-statement');
    }

    public function extendIndividual()
    {
        return view('contract.extend-contract-individual');
    }

    public function extendGroup()
    {
        return view('contract.extend-group-contract');
    }
}
