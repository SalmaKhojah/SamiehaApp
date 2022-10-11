<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\words;


class subcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory',
        'category_id',
    ];

    public function words()
    {
        return $this->hasMany(words::class,'subcategory_id');
    }


}
