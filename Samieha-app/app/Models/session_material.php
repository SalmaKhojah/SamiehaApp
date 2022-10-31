<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session_material extends Model
{
    use HasFactory;
    protected $table= 'session_materials';
    
    protected $fillable = [
        'session_id',
        'trial_id',
        'word_id',
        'patient_record',
        'check_answer',
        'included_cues',
        'used_cues',
    ];

    public function words()
    {
        return $this->hasMany(words::class,'id');
    }
}
