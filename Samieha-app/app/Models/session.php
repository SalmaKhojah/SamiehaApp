<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;

    protected $table = 'session';

    protected $fillable = [
        'patient_id',
        'slp_id',
        'time_limit',
    ];

    public function words()
    {
        return $this->hasMany(words::class,'id');
    }

}
