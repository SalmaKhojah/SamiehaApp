<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class words extends Model
{
    use HasFactory;


    protected $fillable = [
        'subcategory_id',
        'word',
        'image',
        'cue1',
        'cue2',
        'cue3',
        'cue4',
        'cue5',
        'cue6',
        'cue7',
    ];


}
