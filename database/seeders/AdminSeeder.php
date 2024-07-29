<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Dian Utari',
            'email' => 'dianutari989@gmail.com',
            'password' => bcrypt(12341234),
        ]);
    }
}
