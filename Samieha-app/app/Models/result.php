<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'session_id',
        'patient_id',
        'correct_answer',
        'incorrect_answer',
        'cues_reached',
        'patient_record',
    ];
}
