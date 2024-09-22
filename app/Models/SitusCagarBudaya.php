<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitusCagarBudaya extends Model
{
    use HasFactory;

    protected $table = 'situs_cagar_budaya';

    protected $fillable = [
        'foto',
        'nama',
        'nomor_sk',
        'alamat',
        'latitude',
        'longitude',
        'deskripsi',
    ];
}
