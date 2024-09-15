<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengawasanlokasi>
 */
class PengawasanlokasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
public function definition(): array
{
    $faker = FakerFactory::create('id_ID'); // Menggunakan lokal Indonesia

    // Daftar kota yang diberikan
    $kotaList = [
        'Lembang', 'Parongpong', 'Cisarua', 'Cikalong Wetan', 'Cipeundey',
        'Ngamprah', 'Cipatat', 'Padalarang', 'Batujajar', 'Cihampelas',
        'Cililin', 'Cipongkor', 'Rongga', 'Sindangkerta', 'Gunung Halu',
        'Saguling'
    ];

    // Memilih kota secara acak dari daftar
    $kota = $faker->randomElement($kotaList);

    return [
        'kota' => $kota,
    ];
}
}
