<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slp_patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'slp_id',
        'patient_id',
    ];
}
