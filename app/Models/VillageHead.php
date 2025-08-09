<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageHead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image',
        'image_signature',
        'welcome_text',
    ];

}
