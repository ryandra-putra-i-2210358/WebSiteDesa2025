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

    protected $attributes = [
        'total_penduduk' => 0,
        'kepala_keluarga' => 0,
        'perempuan' => 0,
        'laki_laki' => 0,
        'rw' => '[]',
        'agama' => '[]',
        'pendidikan' => '[]',
        'status_perkawinan' => '[]',
    ];

}

