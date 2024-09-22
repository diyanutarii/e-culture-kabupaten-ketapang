<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PustakaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'gambar' => 'images/pustaka/pustaka1.jpg',
            'judul' => fake()->words(4, true),
            'konten' => '-',
        ];
    }
}
