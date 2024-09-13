<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\qa>
 */
class QaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'qasebagai_id'   => $this->faker->numberBetween(1, 9), // Nomor acak antara 1 dan 9
            'qapertanyaan_id' => $this->faker->numberBetween(1, 11), // Nomor acak antara 1 dan 100
            'nama_lengkap'    => $this->faker->name(), // Nama acak
            'email'           => $this->faker->unique()->safeEmail(), // Email acak dan unik
            'telepon'         => $this->faker->phoneNumber(), // Nomor telepon acak
            'created_at'      => now(),
            'updated_at'      => now(),
        ];
    }
}
