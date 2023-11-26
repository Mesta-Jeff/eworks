<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wage extends Model
{
    use HasFactory;
    protected $fillable = [
        'casual_daily',
        'casual_holiday',
        'contract_daily',
        'contract_holiday',
        'permanent_daily',
        'permanent_holiday',
    ];
}
