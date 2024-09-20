<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penanggungjawabteknis>
 */
class PenanggungjawabteknisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID'); // Menggunakan lokal Indonesia

        return [
            'nama_lengkap' => $faker->name(), // Nama lengkap
            'pengawasanlokasi_id' => rand(1,16), // Tempat, lebih baik menggunakan 'city' daripada 'word'
            'nopjt' => $faker->unique()->numerify('##########'),
            // Nomor PJT (unique untuk memastikan tidak ada duplikat)
            'sfesifikasi' => $faker->randomElement(['ELEKTRO', 'SIPIL', 'ARSITEKTUR', 'LINGKUNGAN']),
            // Spesifikasi
            'tanggal_terbit' => $faker->date('Y-m-d'), // Tanggal terbit
            'masa_berlaku' => $faker->date('Y-m-d'), // Masa berlaku
        
        ];
    }
}
