<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slp extends Model
{
    use HasFactory;

    protected $fillable = [
        'slp_email',
        'slp_password',
        'userslp_id',
        'F_slp_name',
        'L_slp_name',
        'work_place',
    ];

}
