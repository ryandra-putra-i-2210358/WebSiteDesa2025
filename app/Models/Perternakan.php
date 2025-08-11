<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perternakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'farm',
        'alamat',
        'nohp',
        'jenis_ternak',
        'jumlah_ternak',
        'pemilik',
        'slug',
        'content',
        'image',
    ];
}
