<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'education_level',
        'school',
        'location',
        'certification',
        'driver_license_name',
        'driver_license_number',
        'driver_license_expire_date',
        'driver_license_class',
        'driver_license_type',
        'doc1',
        'doc2',
        'doc3',
        'doc4',
        'health_conditions',
        'allergies',
    ];
}
