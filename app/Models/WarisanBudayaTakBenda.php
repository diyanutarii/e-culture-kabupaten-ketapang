<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarisanBudayaTakBenda extends Model
{
    use HasFactory;

    protected $table = 'warisan_budaya_tak_benda';

    protected $fillable = [
        'foto',
        'nama',
        'nomor_sk',
        'deskripsi',
    ];
}
