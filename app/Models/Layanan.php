<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'items'];

    protected $casts = [
        'items' => 'array', // otomatis array saat diambil dari DB
    ];

}
