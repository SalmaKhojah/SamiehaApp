<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'session';

    protected $fillable = [
        'patient_id',
        'slp_id',
        'time_limit',
    ];

    protected $dates = ['deleted_at'];

    public function words()
    {
        return $this->hasMany(words::class,'id');
    }

}
