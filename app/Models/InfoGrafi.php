<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoGrafi extends Model
{
    use HasFactory;
    protected $table = 'infografis';

    
    protected $fillable = [
        'total_penduduk',
        'kepala_keluarga',
        'perempuan',
        'laki_laki',
        'rw',
        'agama',
        'pendidikan',
        'status_perkawinan'
    ];

    protected $casts = [
        'rw' => 'array',
        'agama' => 'array',
        'pendidikan' => 'array',
        'status_perkawinan' => 'array',
    ];
}

