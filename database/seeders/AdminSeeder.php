<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Admin::factory(10)->create();

        Admin::factory()->create([
            'nama' => 'Dian Utari',
            'email' => 'dianutari989@gmail.com',
            'password' => bcrypt(12341234),
        ]);

        Admin::factory()->create([
            'nama' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt(12341234),
        ]);
    }
}
