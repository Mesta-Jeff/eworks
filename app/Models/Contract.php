<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'worker_id',
        'group_id',
        'tag_number',
        'contract_starts',
        'contract_ends',
        'contract_type',
        'track',
        'administer',
        'status',
    ];
}
