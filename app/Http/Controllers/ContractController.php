<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workers;
use App\Models\Contract;
use Carbon\Carbon;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    //
    public function signContract()
    {
        return view('contract.sign-contract');
    }

    //Adding casual in single
    public function issue_contract(Request $request)
    {
        if ($request->ajax()) {
            try {
                DB::beginTransaction();

                try {
                    $numericPart = mt_rand(1000000, 9999999);
                    $tagNumber = "CTR" . str_pad($numericPart, 10, '0', STR_PAD_LEFT);

                    $user_id = session('user_id') ?? 'Administrator';
                    $id = Carbon::now()->format('Ymd-His');

                    Contract::create([
                        'id' => $id ,
                        'worker_id' => $request->input('worker_id'),
                        'group_id' => $request->input('groups'),
                        'tag_number' => $tagNumber,
                        'contract_starts' => $request->input('contract_starts'),
                        'contract_ends' => $request->input('contract_ends'),
                        'contract_type' => $request->input('contract_type'),
                        'track' => '1',
                        'administer' => $user_id, 
                    ]);

                    Workers::where('id', $request->input('worker_id'))
                        ->update([
                            'role_id' => $request->input('roles'),
                            'designation' => $request->input('designation'),
                        ]);

                    DB::commit();

                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);

                } catch (\Exception $e) {
                    DB::rollBack();
                    Log::error('Exception caught:', ['message' => $e->getMessage(), 'trace' => $e->getTrace()]);
                    return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
                }
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
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
