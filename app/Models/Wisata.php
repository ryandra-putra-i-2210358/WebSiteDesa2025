<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'farm',
        'alamat',
        'nohp',
        'jenis_wisata',
        'jumlah_wisata',
        'pemilik',
        'slug',
        'content',
        'image',
    ];
}


