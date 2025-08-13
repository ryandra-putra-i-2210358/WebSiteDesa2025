<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanian extends Model
{
    use HasFactory;

    protected $fillable = [
        'farm',
        'pemilik',
        'alamat',
        'nohp',
        'jenis_pertanian',
        'jumlah_pertanian',
        'slug',
        'content',
        'image',
    ];
}
