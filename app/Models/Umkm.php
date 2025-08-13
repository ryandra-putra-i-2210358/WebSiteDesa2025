<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'farm',
        'pemilik',
        'alamat',
        'nohp',
        'jenis_umkm',
        'jumlah_umkm',
        'slug',
        'content',
        'image',
    ];
}

