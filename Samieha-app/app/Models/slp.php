<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slp extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_national_id',
        'work_place',
    ];

}
