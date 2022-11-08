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

    public function slp()
    {
        return $this->hasOne(slp::class,'users_id', 'slp_id' );
    }

    public function getslp()   
{
    return $this->belongsTo(User::class, 'slp_id');
}

public function patient()
{
    return $this->belongsTo(User::class, 'patient_id');
}
   
   

}
