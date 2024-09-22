<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legenda extends Model
{
    use HasFactory;
    
    protected $table = 'legenda';

    protected $fillable = [
        'gambar',
        'judul',
        'konten'
    ];
}