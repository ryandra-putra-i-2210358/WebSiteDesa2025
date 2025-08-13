<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $fillable = [
        'farm',
        'alamat',
        'nohp',
        'jenis_other',
        'jumlah_other',
        'pemilik',
        'slug',
        'content',
        'image',
    ];
}

