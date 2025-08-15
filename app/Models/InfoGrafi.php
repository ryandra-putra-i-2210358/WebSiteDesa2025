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

    public function isiAja()
    {
        $this->agama = [
            'islam'    => 120,
            'kristen'  => 50,
            'hindu'    => 30,
            'budha'    => 10,
            'konghucu' => 5,
        ];

        $this->rw = [
            'rw1' => 200,
            'rw2' => 150,
            'rw3' => 32,
            'rw4' => 32,
            'rw5' => 32,
            'rw6' => 32,
            
        ];

        $this->pendidikan = [
            'belum_sekolah' => 300,
            'tamat_sd'     => 300,
            'tamat_smp'    => 200,
            'tamat_sma'    => 100,
            'sarjana' => 50
        ];

        $this->status_perkawinan = [
            'belum_kawin'        => 250,
            'kawin'  => 150,
            'cerai' => 34,
        ];

        return $this;
    }
}

