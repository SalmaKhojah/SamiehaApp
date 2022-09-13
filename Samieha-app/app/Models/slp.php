<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slp extends Model
{
    use HasFactory;

    protected $fillable = [
        'F_slp_name',
        'L_slp_name',
        'slp_email',
        'work_place',
    ];

}
