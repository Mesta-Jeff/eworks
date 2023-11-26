<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workers;
use App\Models\OptionalInformation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class WorkersController extends Controller
{
    //CASUALS WITH CONTRACT
    public function viewCasualWorkers(Request $request)
    {
        if ($request->ajax()) {

            $casuals = DB::table('workers as w')
                ->select(
                    'w.id', 'w.first_name', 'w.last_name', 'w.initials',
                    'w.nickname', 'w.gender', 'w.marital_status', 'w.religion',
                    'w.blood', 'c.name as nationality', 'r.name as region',
                    'd.name as district', 't.name as hometown', 'w.ethnicity',
                    'w.languages', 'w.date_of_birth', 'cb.name as country_of_birth',
                    'rb.name as region_of_birth', 'db.name as district_of_birth',
                    'tb.name as place_of_birth', 'b.name as bank', 'w.account_number',
                    'w.ssnit', 'w.phone', 'w.tel', 'w.email', 'cd.name as current_district',
                    'cr.name as current_region', 'w.landmark', 'w.gps', 'w.emergency_name',
                    'w.emergency_address', 'w.emergency_phone', 'w.emergency_relationship',
                    'ro.name as role', 'w.designation', 'w.national_identities',
                    'w.id_numbers', 'w.status', 'o.education_level', 'o.school',
                    'o.location', 'o.certification', 'o.driver_license_name',
                    'o.driver_license_number', 'o.driver_license_expire_date',
                    'o.driver_license_class', 'o.driver_license_type', 'o.health_conditions',
                    'o.allergies', 'co.tag_number', 'co.track', DB::raw("TO_BASE64(w.picture) as imgBase64"),
                )
                ->join('optional_information as o', 'w.id', '=', 'o.worker_id')
                ->join('banks as b', 'w.bank_id', '=', 'b.id')
                ->join('countries as c', 'w.nationality', '=', 'c.id')
                ->join('districts as d', 'w.district_id', '=', 'd.id')
                ->join('regions as r', 'w.region_id', '=', 'r.id')
                ->join('towns as t', 'w.hometown', '=', 't.id')
                ->join('countries as cb', 'cb.id', '=', 'w.country_of_birth')
                ->join('regions as rb', 'rb.id', '=', 'w.region_of_birth')
                ->join('districts as db', 'db.id', '=', 'w.district_of_birth')
                ->join('towns as tb', 'tb.id', '=', 'w.place_of_birth')
                ->join('regions as cr', 'cr.id', '=', 'w.current_region')
                ->join('districts as cd', 'cd.id', '=', 'w.current_district')
                ->join('roles as ro', 'ro.id', '=', 'w.role_id')
                ->leftJoin('contracts as co', 'co.worker_id', '=', 'w.id')
                ->where('ro.name', 'Casual-Worker')
                ->where(function($query) {
                    $query->whereNotNull('co.track')
                        ->orWhereNotNull('co.tag_number');
                })
                ->orderByDesc('w.id')
                ->get();

            return response()->json(['casuals' => $casuals]);

        }
        return view("user.view-casual-workers");
    }


    //PENDING CASUALS
    public function pending_casual(Request $request)
    {
        if ($request->ajax()) {

            $pendingCasuals = DB::table('workers as w')
                ->select(
                    'w.id', 'w.first_name', 'w.last_name', 'w.initials',
                    'w.nickname', 'w.gender', 'w.marital_status', 'w.religion',
                    'w.blood', 'c.name as nationality', 'r.name as region',
                    'd.name as district', 't.name as hometown', 'w.ethnicity',
                    'w.languages', 'w.date_of_birth', 'cb.name as country_of_birth',
                    'rb.name as region_of_birth', 'db.name as district_of_birth',
                    'tb.name as place_of_birth', 'b.name as bank', 'w.account_number',
                    'w.ssnit', 'w.phone', 'w.tel', 'w.email', 'cd.name as current_district',
                    'cr.name as current_region', 'w.landmark', 'w.gps', 'w.emergency_name',
                    'w.emergency_address', 'w.emergency_phone', 'w.emergency_relationship',
                    'ro.name as role', 'w.designation', 'w.national_identities',
                    'w.id_numbers', 'w.status', 'o.education_level', 'o.school',
                    'o.location', 'o.certification', 'o.driver_license_name',
                    'o.driver_license_number', 'o.driver_license_expire_date',
                    'o.driver_license_class', 'o.driver_license_type', 'o.health_conditions',
                    'o.allergies', 'co.tag_number', 'co.track', DB::raw("TO_BASE64(w.picture) as imgBase64"),
                )
                ->join('optional_information as o', 'w.id', '=', 'o.worker_id')
                ->join('banks as b', 'w.bank_id', '=', 'b.id')
                ->join('countries as c', 'w.nationality', '=', 'c.id')
                ->join('districts as d', 'w.district_id', '=', 'd.id')
                ->join('regions as r', 'w.region_id', '=', 'r.id')
                ->join('towns as t', 'w.hometown', '=', 't.id')
                ->join('countries as cb', 'cb.id', '=', 'w.country_of_birth')
                ->join('regions as rb', 'rb.id', '=', 'w.region_of_birth')
                ->join('districts as db', 'db.id', '=', 'w.district_of_birth')
                ->join('towns as tb', 'tb.id', '=', 'w.place_of_birth')
                ->join('regions as cr', 'cr.id', '=', 'w.current_region')
                ->join('districts as cd', 'cd.id', '=', 'w.current_district')
                ->join('roles as ro', 'ro.id', '=', 'w.role_id')
                ->leftJoin('contracts as co', function($join) {
                    $join->on('co.worker_id', '=', 'w.id')
                        ->whereNull('co.track')
                        ->orWhereNull('co.tag_number');
                })
                ->where('ro.name', 'Casual-Worker')
                ->orderByDesc('w.id')
                ->get();
            
            return response()->json(['pendingCasuals' => $pendingCasuals]);
        

        }
    }


    public function viewContractWorkers(Request $request)
    {
        if ($request->ajax()) {

            $contracts = DB::table('workers as w')
                ->select(
                    'w.id', 'w.first_name', 'w.last_name', 'w.initials',
                    'w.nickname', 'w.gender', 'w.marital_status', 'w.religion',
                    'w.blood', 'c.name as nationality', 'r.name as region',
                    'd.name as district', 't.name as hometown', 'w.ethnicity',
                    'w.languages', 'w.date_of_birth', 'cb.name as country_of_birth',
                    'rb.name as region_of_birth', 'db.name as district_of_birth',
                    'tb.name as place_of_birth', 'b.name as bank', 'w.account_number',
                    'w.ssnit', 'w.phone', 'w.tel', 'w.email', 'cd.name as current_district',
                    'cr.name as current_region', 'w.landmark', 'w.gps', 'w.emergency_name',
                    'w.emergency_address', 'w.emergency_phone', 'w.emergency_relationship',
                    'ro.name as role', 'w.designation', 'w.national_identities',
                    'w.id_numbers', 'w.status', 'o.education_level', 'o.school',
                    'o.location', 'o.certification', 'o.driver_license_name',
                    'o.driver_license_number', 'o.driver_license_expire_date',
                    'o.driver_license_class', 'o.driver_license_type', 'o.health_conditions',
                    'o.allergies', 'co.tag_number', 'co.track', DB::raw("TO_BASE64(w.picture) as imgBase64"),
                )
                ->join('optional_information as o', 'w.id', '=', 'o.worker_id')
                ->join('banks as b', 'w.bank_id', '=', 'b.id')
                ->join('countries as c', 'w.nationality', '=', 'c.id')
                ->join('districts as d', 'w.district_id', '=', 'd.id')
                ->join('regions as r', 'w.region_id', '=', 'r.id')
                ->join('towns as t', 'w.hometown', '=', 't.id')
                ->join('countries as cb', 'cb.id', '=', 'w.country_of_birth')
                ->join('regions as rb', 'rb.id', '=', 'w.region_of_birth')
                ->join('districts as db', 'db.id', '=', 'w.district_of_birth')
                ->join('towns as tb', 'tb.id', '=', 'w.place_of_birth')
                ->join('regions as cr', 'cr.id', '=', 'w.current_region')
                ->join('districts as cd', 'cd.id', '=', 'w.current_district')
                ->join('roles as ro', 'ro.id', '=', 'w.role_id')
                ->leftJoin('contracts as co', 'co.worker_id', '=', 'w.id')
                ->where('ro.name', 'Contract-Worker')
                ->where(function($query) {
                    $query->whereNotNull('co.track')
                        ->orWhereNotNull('co.tag_number');
                })
                ->orderByDesc('w.id')
                ->get();
                
            return response()->json(['contracts' => $contracts]);

        }
        return view('user.view-contract-workers');
    }

    public function viewPermanentWorkers(Request $request)
    {
        if ($request->ajax()) {

            $permanents = DB::table('workers as w')
            ->select(
                    'w.id', 'w.first_name', 'w.last_name', 'w.initials',
                    'w.nickname', 'w.gender', 'w.marital_status', 'w.religion',
                    'w.blood', 'c.name as nationality', 'r.name as region',
                    'd.name as district', 't.name as hometown', 'w.ethnicity',
                    'w.languages', 'w.date_of_birth', 'cb.name as country_of_birth',
                    'rb.name as region_of_birth', 'db.name as district_of_birth',
                    'tb.name as place_of_birth', 'b.name as bank', 'w.account_number',
                    'w.ssnit', 'w.phone', 'w.tel', 'w.email', 'cd.name as current_district',
                    'cr.name as current_region', 'w.landmark', 'w.gps', 'w.emergency_name',
                    'w.emergency_address', 'w.emergency_phone', 'w.emergency_relationship',
                    'ro.name as role', 'w.designation', 'w.national_identities',
                    'w.id_numbers', 'w.status', 'o.education_level', 'o.school',
                    'o.location', 'o.certification', 'o.driver_license_name',
                    'o.driver_license_number', 'o.driver_license_expire_date',
                    'o.driver_license_class', 'o.driver_license_type', 'o.health_conditions',
                    'o.allergies', 'co.tag_number', 'co.track', DB::raw("TO_BASE64(w.picture) as imgBase64"),
                )
                ->join('optional_information as o', 'w.id', '=', 'o.worker_id')
                ->join('banks as b', 'w.bank_id', '=', 'b.id')
                ->join('countries as c', 'w.nationality', '=', 'c.id')
                ->join('districts as d', 'w.district_id', '=', 'd.id')
                ->join('regions as r', 'w.region_id', '=', 'r.id')
                ->join('towns as t', 'w.hometown', '=', 't.id')
                ->join('countries as cb', 'cb.id', '=', 'w.country_of_birth')
                ->join('regions as rb', 'rb.id', '=', 'w.region_of_birth')
                ->join('districts as db', 'db.id', '=', 'w.district_of_birth')
                ->join('towns as tb', 'tb.id', '=', 'w.place_of_birth')
                ->join('regions as cr', 'cr.id', '=', 'w.current_region')
                ->join('districts as cd', 'cd.id', '=', 'w.current_district')
                ->join('roles as ro', 'ro.id', '=', 'w.role_id')
                ->leftJoin('contracts as co', 'co.worker_id', '=', 'w.id')
                ->where('ro.name', 'Permanent-Worker')
                ->where(function($query) {
                    $query->whereNotNull('co.track')
                        ->orWhereNotNull('co.tag_number');
                })
                ->orderByDesc('w.id')
                ->get();
                
            return response()->json(['permanents' => $permanents]);

        }
        return view('user.permanent-workers');
    }




    public function assignPermission()
    {
        return view('user.assign-permission');
    }

    public function effectPromotion()
    {
        return view('user.effect-promotion');
    }


    // Adding causal in Bulk
    public function add_casual_bulk(Request $request)
    {
        try 
        {
            $tableData = json_decode($request->input('tableData'), true);

            DB::beginTransaction();

            try {

                foreach ($tableData as $rowData) {

                    $accountNumber = mt_rand(100000000000000, 999999999999999);
                    $accountNumber = str_pad($accountNumber, 15, '0', STR_PAD_LEFT);

                    $worker = Workers::create([
                        'first_name' => $rowData['First Name'],
                        'last_name' => $rowData['Last Name'],
                        'initials' => $rowData['Initials'],
                        'nickname' => $rowData['Nickname'],
                        'gender' => $rowData['Gender'],
                        'marital_status' => $rowData['Marital Status'],
                        'religion' => $rowData['Religion'],
                        'blood' => $rowData['Blood'],
                        'nationality' => $rowData['Nationality'],
                        'region_id' => $rowData['Region'],
                        'district_id' => $rowData['District'],
                        'hometown' => $rowData['Hometown'],
                        'ethnicity' => $rowData['Ethnicity'],
                        'languages' => $rowData['Languages'],
                        'date_of_birth' => $rowData['Date of Birth'],
                        'country_of_birth' => $rowData['Country of Birth'],
                        'region_of_birth' => $rowData['Region of Birth'],
                        'district_of_birth' => $rowData['District of Birth'],
                        'place_of_birth' => $rowData['Place of Birth'],
                        'bank_id' => $rowData['Bank'],
                        'account_number' => $accountNumber,
                        'ssnit' => $rowData['SSNIT'],
                        'phone' => $rowData['Phone'],
                        'tel' => $rowData['Tel'],
                        'email' => $rowData['Email'],
                        'current_district' => $rowData['Current District'],
                        'current_region' => $rowData['Current Region'],
                        'landmark' => $rowData['Landmark'],
                        'gps' => $rowData['GPS'],
                        'emergency_name' => $rowData['Emergency Name'],
                        'emergency_address' => $rowData['Emergency Address'],
                        'emergency_phone' => $rowData['Emergency Phone'],
                        'emergency_relationship' => $rowData['Emergency Relationship'],
                        'role_id' => $rowData['Role'],
                        'designation' => $rowData['Designation'],
                        'national_identities' => $rowData['National Identities'],
                        'id_numbers' => $rowData['Id Numbers'],
                    ]);
                    
                    OptionalInformation::create([
                        'worker_id' => $worker->id,
                        'education_level' => $rowData['Education Level'],
                        'school' => $rowData['School'],
                        'location' => $rowData['Location'],
                        'certification' => $rowData['Certification'],
                        'driver_license_name' => $rowData['Driver License Name'],
                        'driver_license_number' => $rowData['Driver License Number'],
                        'driver_license_expire_date' => $rowData['Driver License Expire Date'],
                        'driver_license_class' => $rowData['Driver License Class'],
                        'driver_license_type' => $rowData['Driver License Type'],
                        'health_conditions' => $rowData['Health Conditions'],
                        'allergies' => $rowData['Allergies'],
                    ]);
                }
                DB::commit();

                return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                
            } catch (\Exception $e) {
                DB::rollBack();

                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }

        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    //Adding casual in single
    public function add_casual(Request $request)
    {
        if ($request->ajax()) 
        {
            try 
            {
                Log::info('Received data:', ['data' => $request->all()]);

                $rules = [
                    'email' => 'unique:workers,email',
                    'phone' => 'unique:workers,phone',
                ];
    
                $validator = Validator::make($request->all(), $rules);
    
                if ($validator->fails()) {
                    return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
                }

                DB::beginTransaction();

                try {
                    $accountNumber = mt_rand(100000000000000, 999999999999999);
                    $accountNumber = str_pad($accountNumber, 15, '0', STR_PAD_LEFT);

                    $image = null;
                    if ($request->hasFile('picture')) {
                        $image = $request->file('picture');
                    }

                    $worker = Workers::create([
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'initials' => $request['initials'],
                        'nickname' => $request['nickname'],
                        'gender' => $request['gender'],
                        'marital_status' => $request['marital_status'],
                        'religion' => $request['religion'],
                        'blood' => $request['blood'],
                        'nationality' => $request['nationality'],
                        'region_id' => $request['region'],
                        'district_id' => $request['district'],
                        'hometown' => $request['hometown'],
                        'ethnicity' => $request['ethnicity'],
                        'languages' => $request['last_comers'],
                        'date_of_birth' => $request['date_of_birth'],
                        'country_of_birth' => $request['country_of_birth'],
                        'region_of_birth' => $request['region_of_birth'],
                        'district_of_birth' => $request['district_of_birth'],
                        'place_of_birth' => $request['place_of_birth'],
                        'bank_id' => $request['bank'],
                        'account_number' => $accountNumber,
                        'ssnit' => $request['ssnit'],
                        'phone' => $request['phone'],
                        'tel' => $request['tel'],
                        'email' => $request['email'],
                        'current_district' => $request['current_district'],
                        'current_region' => $request['current_region'],
                        'landmark' => $request['landmark'],
                        'gps' => $request['gps'],
                        'emergency_name' => $request['emergency_name'],
                        'emergency_address' => $request['emergency_address'],
                        'emergency_phone' => $request['emergency_phone'],
                        'emergency_relationship' => $request['emergency_relationship'],
                        'role_id' => $request['role'],
                        'designation' => $request['designation'],
                        'picture' => file_get_contents($image->path()),
                        'national_identities' => $request['national_identities'],
                        'id_numbers' => $request['id_numbers'],
                    ]);

                    OptionalInformation::create([
                        'worker_id' => $worker->id,
                        'education_level' => $request['education_level'],
                        'school' => $request['school'],
                        'location' => $request['location'],
                        'certification' => $request['certification'],
                        'driver_license_name' => $request['driver_license_name'],
                        'driver_license_number' => $request['driver_license_number'],
                        'driver_license_expire_date' => $request['driver_license_expire_date'],
                        'driver_license_class' => $request['driver_license_class'],
                        'driver_license_type' => $request['driver_license_type'],
                        'health_conditions' => $request['health_conditions'],
                        'allergies' => $request['allergies'],
                    ]);

                    DB::commit();

                    return response()->json(['status' => 'success', 'message' => 'Request sent, operation performed successfully']);
                } 
                catch (\Exception $e) 
                {
                    DB::rollBack();
                    Log::error('Exception caught:', ['message' => $e->getMessage(), 'trace' => $e->getTrace()]);
                    return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
                }
            } 
            catch (\Exception $e) 
            {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        } 
    }



}
