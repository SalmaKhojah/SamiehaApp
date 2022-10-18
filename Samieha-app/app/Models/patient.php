<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'national_id',
        'first_name',
        'last_name',
        'birth_date',
        'phone',
        'nationality',
        'region',
        'city',
        'diagnosis',
        'characteristics',
        'neurological_damage',
        'severity',
        'assesment_method',
    ];



}
