<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recept>
 */
class ReceptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => $this->faker->sentence(3),
            'kat_id' => '2',
            'kep_eleresi_ut' => $this->faker->imageUrl(640, 480, 'food', true),
            'leiras' => $this->faker->paragraph(5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
