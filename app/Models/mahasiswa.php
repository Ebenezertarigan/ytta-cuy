<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // gunakan nama tabel singular sesuai permintaan
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'sks',
        'ipk',
    ];

    protected $casts = [
        'sks' => 'integer',
        'ipk' => 'float',
    ];
}
