<?php

namespace Database\Seeders;

use App\Models\TangibleCultureHeritage;
use Illuminate\Database\Seeder;

class TangibleCultureHeritageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TangibleCultureHeritage::create([
            'name' => 'Keraton Matan Kayong Ketapang',
            'sk_number' => '-',
            'address' => 'Jl. Pangeran Kusuma Jaya, Mulia Kerta',
            'latitude' => '-1.8617127',
            'longitude' => '109.9783484',
            'description' => ''
        ]);
    }
}
