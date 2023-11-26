<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'initials',
        'nickname',
        'gender',
        'marital_status',
        'religion',
        'blood',
        'nationality',
        'region_id',
        'district_id',
        'hometown',
        'ethnicity',
        'languages',
        'date_of_birth',
        'country_of_birth',
        'region_of_birth',
        'district_of_birth',
        'place_of_birth',
        'bank_id',
        'account_number',
        'ssnit',
        'phone',
        'tel',
        'email',
        'current_district',
        'current_region',
        'landmark',
        'gps',
        'emergency_name',
        'emergency_address',
        'emergency_phone',
        'emergency_relationship',
        'role_id',
        'designation',
        'national_identities',
        'id_numbers',
        'picture',
                        
    ];

}
