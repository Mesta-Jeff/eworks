<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Bank;
use App\Models\Wage;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Group;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Support\Facades\Log;


class SettingsController extends Controller
{

    //  ====================== ROLE ==============================
    public function viewRoles(Request $request)
    {
        $roles = DB::table('roles')->orderBy('id', 'desc') ->get();
        if ($request->ajax()) 
        {
            return response()->json(['roles' => $roles]);
        }
        return view("ss.view-roles", ['roles' => $roles]);
    }
    public function add_Role(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'role' => 'required|string',
                    'des' => 'required|string',
                ]);

                // Check if the role already exists
                if (Role::where('name', $request->input('role'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'Role already exists. Please choose a different role.']);
                }

                // Create a new role
                $role = Role::create([
                    'name' => $request->input('role'),
                    'description' => $request->input('des'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }

    public function edit_Role(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:roles,id',
                    'role' => 'required|string',
                    'stat' => 'required|string',
                    'des' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Role::where('id', $id)->update([
                    'name' => $request->input('role'),
                    'description' => $request->input('des'),
                    'status' => $request->input('stat'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function delete_Role(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'ids' => 'required|string',
                ]);

                $id = $request->input('ids');
                $role = Role::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Role not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    public function fetch_role(Request $request)
    {
        $roles = DB::table('roles')->orderBy('name', 'asc') ->get();
        return response()->json(['roles' => $roles]);
    }
    // ================== END OF  ROLE  ===========================


    //  ====================== GROUP ==============================
    public function viewGroups(Request $request)
    {
        $groups = DB::table('groups')->orderBy('id', 'desc') ->get();
        if ($request->ajax()) 
        {
            return response()->json(['groups' => $groups]);
        }
        return view("ss.view-groups", ['groups' => $groups]);
    }
    public function add_group(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'sixe' => 'required|string',
                ]);

                if (Group::where('name', $request->input('name'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'Group already exists. Please choose a different group.']);
                }

                $role = Group::create([
                    'name' => $request->input('name'),
                    'size' => $request->input('sixe'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_group(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:groups,id',
                    'name' => 'required|string',
                    'stat' => 'required|string',
                    'sixe' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Group::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'size' => $request->input('sixe'),
                    'status' => $request->input('stat'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_group(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'ids' => 'required|string',
                ]);

                $id = $request->input('ids');
                $role = Group::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    // ================== END OF  GROUP ==========================



    // ====================== COUNTRY ==============================
    public function viewCountries(Request $request)
    {
        $countries = DB::table('countries')->orderBy('id', 'desc') ->get();
        if ($request->ajax()) 
        {
            return response()->json(['countries' => $countries]);
        }
    }
    public function add_country(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'code' => 'required|string',
                ]);

                if (Country::where('name', $request->input('name'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'Country already exists. Please choose a different group.']);
                }

                $role = Country::create([
                    'name' => $request->input('name'),
                    'code' => $request->input('code'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_country(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:countries,id',
                    'name' => 'required|string',
                    'code' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Country::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'code' => $request->input('code'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_country(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = Country::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    
    public function fetch_country(Request $request)
    {
        $countries = DB::table('countries')->orderBy('name', 'asc') ->get();
        return response()->json(['countries' => $countries]);
    }
    // ================== END OF  COUNTRY ==========================



    // ====================== REGION ==============================
    public function viewRegions(Request $request)
    {
        $regions = DB::table('regions')
            ->join('countries', 'regions.country_id', '=', 'countries.id')
            ->orderByDesc('regions.id')
            ->select('regions.*', 'countries.name as country')
            ->orderBy('regions.id', 'desc')
            ->get();

        if ($request->ajax()) {
            return response()->json(['regions' => $regions]);
        }
    }

    public function add_region(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'code1' => 'required|string',
                ]);

                if (Region::where('name', $request->input('name'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'Region already exists. Please choose a different group.']);
                }

                $role = Region::create([
                    'name' => $request->input('name'),
                    'country_id' => $request->input('code1'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_region(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:regions,id',
                    'name' => 'required|string',
                    'code1' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Region::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'country_id' => $request->input('code1'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_region(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = Region::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    public function fetch_region(Request $request)
    {
        if ($request->has('country_id')) {
            $seeId = $request->input('country_id');
            $regions = Region::where('country_id', $seeId)->orderBy('name', 'asc')->get();
        } else {
            $regions = Region::all();
        }

        return response()->json(['regions' => $regions]);
    }
    // ================== END OF  REGION ==========================


    // ====================== DISTRICT ==============================
    public function viewDistricts(Request $request)
    {
        $districts = DB::table('districts')
            ->join('regions', 'districts.region_id', '=', 'regions.id')
            ->orderByDesc('districts.id')
            ->select('districts.*', 'regions.name as region')
            ->orderBy('districts.id', 'desc')
            ->get();

        if ($request->ajax()) {
            return response()->json(['districts' => $districts]);
        }
    }

    public function add_district(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'region' => 'required|string',
                ]);

                if (District::where('name', $request->input('name'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'District already exists. Please choose a different group.']);
                }

                $role = District::create([
                    'name' => $request->input('name'),
                    'region_id' => $request->input('region'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_district(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:districts,id',
                    'name' => 'required|string',
                    'region' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = District::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'region_id' => $request->input('region'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_district(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = District::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    public function fetch_district(Request $request)
    {
        if ($request->has('region_id')) 
        {
            $seeId = $request->input('region_id');
            $districts = District::where('region_id', $seeId)->orderBy('name', 'asc')->get();
        } else {
            $districts = District::all();
        }

        return response()->json(['districts' => $districts]);
    }
    // ================== END OF DISTRICT ==========================



    // ====================== TOWN ==============================
    public function viewTowns(Request $request)
    {
        $towns = DB::table('towns')
            ->join('districts', 'towns.district_id', '=', 'districts.id')
            ->orderByDesc('districts.id')
            ->select('towns.*', 'districts.name as district')
            ->orderBy('towns.id', 'desc')
            ->get();

        if ($request->ajax()) {
            return response()->json(['towns' => $towns]);
        }
    }

    public function add_town(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'name' => 'required|string',
                    'district' => 'required|string',
                ]);

                if (Town::where('name', $request->input('name'))->exists()) {
                    return response()->json(['status' => 'error', 'message' => 'Town already exists. Please choose a different group.']);
                }

                $role = Town::create([
                    'name' => $request->input('name'),
                    'district_id' => $request->input('district'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_town(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|exists:towns,id',
                    'name' => 'required|string',
                    'district' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Town::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'district_id' => $request->input('district'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_town(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = Town::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    public function fetch_town(Request $request)
    {
        if ($request->has('district_id')) 
        {
            $seeId = $request->input('district_id');
            $towns = Town::where('district_id', $seeId)->orderBy('name', 'asc')->get();
        } else {
            $towns = Town::all();
        }

        return response()->json(['towns' => $towns]);
    }
    // ================== END OF TOWN ==========================



    // ================== PERMISSION =============================
    public function viewPermissions(Request $request)
    {   
        $permissions = DB::table('permissions')->orderBy('id', 'desc') ->get();

        if ($request->ajax()) 
        {
            return response()->json(['permissions' => $permissions]);
        }
        return view("ss.view-permissions", ['permissions' => $permissions]);
    }

    public function add_permission(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'keys' => 'required|string',
                    'names' => 'required|string',
                    'actions' => 'required|string',
                ]);

                $role = Permission::create([
                    'name' => $request->input('names'),
                    'keys' => $request->input('keys'),
                    'actions' => $request->input('actions'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving role: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }

    public function distroy_permission(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'ids' => 'required|string',
                ]);

                $id = $request->input('ids');
                $perm = Permission::find($id);

                if (!$perm) {
                    return response()->json(['status' => 'error', 'message' => 'Permisson not found.']);
                }

                $perm->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }

    public function fetch_permission(Request $request)
    {
        $permissions = Permission::all();
        return response()->json(['permissions' => $permissions]);
    }
    // =================== END OF PERMISSION  =============================




    public function setContract()
    {
        return view('ss.set-contract');
    }

    public function setPayslip()
    {
        return view('ss.set-payslip');
    }

    public function setLeave()
    {
        return view('ss.set-leave');
    }

    public function leaveClaims()
    {
        return view('ss.leave-claims');
    }

    public function configureSystem()
    {
        return view('ss.configure-system');
    }
    

    // ====================== WAGE ==============================
    public function setWage(Request $request)
    {
        $wages = DB::table('wages')->orderBy('id', 'desc') ->get();
        if ($request->ajax()) 
        {
            return response()->json(['wages' => $wages]);
        }
        return view("ss.set-wage", ['wages' => $wages]);
    }
    public function add_wage(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'c_daily' => 'required|string',
                    'c_holiday' => 'required|string',
                    'co_daily' => 'required|string',
                    'co_holiday' => 'required|string',
                    'p_daily' => 'required|string',
                    'p_holiday' => 'required|string',
                ]);

                $role = Wage::create([
                    'casual_daily' => $request->input('c_daily'),
                    'casual_holiday' => $request->input('c_holiday'),
                    'contract_daily' => $request->input('co_daily'),
                    'contract_holiday' => $request->input('co_holiday'),
                    'permanent_daily' => $request->input('p_daily'),
                    'permanent_holiday' => $request->input('p_holiday'),
                ]);

                return $role
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);

            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_wage(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'c_daily' => 'required|string',
                    'c_holiday' => 'required|string',
                    'co_daily' => 'required|string',
                    'co_holiday' => 'required|string',
                    'p_daily' => 'required|string',
                    'p_holiday' => 'required|string',
                ]);
    
                $id = $request->input('id');

                $updateSuccess = Wage::where('id', $id)->update([
                    'casual_daily' => $request->input('c_daily'),
                    'casual_holiday' => $request->input('c_holiday'),
                    'contract_daily' => $request->input('co_daily'),
                    'contract_holiday' => $request->input('co_holiday'),
                    'permanent_daily' => $request->input('p_daily'),
                    'permanent_holiday' => $request->input('p_holiday'),
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_wage(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = Wage::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    // ================== END OF WAGE ==========================



    // ====================== WAGE ==============================
    public function setBank(Request $request)
    {
        $banks = DB::table('banks')->orderBy('id', 'desc') ->get();
        if ($request->ajax()) 
        {
            return response()->json(['banks' => $banks]);
        }
        return view("ss.set-bank", ['banks' => $banks]);
    }
    public function add_bank(Request $request)
    {
        if ($request->ajax()) {
            try {

                $validatedData = $request->validate([
                    'bank' => 'required|string',
                    'init' => 'nullable|string',
                    'phone' => 'required|string|max:10',
                    'tel' => 'nullable|string|max:10',
                    'address' => 'required|string',
                    'email' => 'required|string|email',
                    'types' => 'required|string',
                ]);
                if (
                    Bank::where('name', $validatedData['bank'])->exists() || Bank::where('phone', $validatedData['phone'])->exists() ||
                    Bank::where('initials', $validatedData['init'])->exists() || Bank::where('email', $validatedData['email'])->exists()
                ) {
                    return response()->json(['status' => 'error', 'message' => 'Bank with the same name, phone, initials, or email already exists. Please choose different values.']);
                }

                $bank = Bank::create([
                    'name' => $validatedData['bank'],
                    'initials' => $validatedData['init'],
                    'phone' => $validatedData['phone'],
                    'tel' => $validatedData['tel'],
                    'location' => $validatedData['address'],
                    'email' => $validatedData['email'],
                    'type' => $validatedData['types'],
                ]);

                return $bank
                    ? response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully'])
                    : response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            } catch (\Exception $e) {
                Log::error('Error saving: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while performing the operation']);
            }
        }
    }
    public function update_bank(Request $request)
    {
        if ($request->ajax()) {
            try {
                $validatedData = $request->validate([
                    'bank' => 'required|string',
                    'init' => 'nullable|string',
                    'phone' => 'required|string|max:10',
                    'tel' => 'nullable|string|max:10',
                    'address' => 'required|string',
                    'email' => 'required|string|email',
                    'types' => 'required|string',
                    'gottenid' => 'required|numeric',
                    'stat' => 'required|string',
                ]);
    
                $updateSuccess = Bank::where('id', $validatedData['gottenid'])->update([
                    'name' => $validatedData['bank'],
                    'initials' => $validatedData['init'],
                    'phone' => $validatedData['phone'],
                    'tel' => $validatedData['tel'],
                    'location' => $validatedData['address'],
                    'email' => $validatedData['email'],
                    'type' => $validatedData['types'],
                    'status' => $validatedData['stat'],
                ]);
    
                if ($updateSuccess) {
                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Operation Failed to update the record']);
                }
    
            } catch (\Exception $e) {
                Log::error('Error updating: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while updating']);
            }
        }
    }
    public function distroy_bank(Request $request)
    {
        if ($request->ajax()) {
            try {
                $request->validate([
                    'id' => 'required|string',
                ]);

                $id = $request->input('id');
                $role = Bank::find($id);

                if (!$role) {
                    return response()->json(['status' => 'error', 'message' => 'Record not found.']);
                }

                $role->delete();
                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully, record deleted']);
            } catch (\Exception $e) {
                Log::error('Error deleting: ' . $e->getMessage());
                return response()->json(['status' => 'error', 'message' => 'An error occurred while deleting the record']);
            }
        }
    }
    public function fetch_bank(Request $request)
    {
        $banks = DB::table('banks')->orderBy('name', 'asc') ->get();
        return response()->json(['banks' => $banks]);
    }
    // ================== END OF WAGE ==========================
}
