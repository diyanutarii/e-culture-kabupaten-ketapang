<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcaraFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
        ];
    }
}
