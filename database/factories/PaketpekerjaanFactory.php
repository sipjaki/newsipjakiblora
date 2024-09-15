<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\paketpekerjaan>
 */
class PaketpekerjaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');

        return [
            'instansi' => $faker->company, // Nama instansi sebagai nama perusahaan acak
            'jumlah_pagu' => $faker->numberBetween(1000000, 10000000000), // Angka antara 1 juta hingga 10 milyar
            'metode_pengadaan' => $faker->word, // Metode pengadaan berupa kata acak
            'pekerjaan' => $faker->sentence, // Deskripsi pekerjaan sebagai kalimat acak
            'foto_pekerjaan' => $faker->imageUrl(), // URL gambar acak sebagai foto pekerjaan
            'tanggal_mulai' => $faker->date, // Tanggal mulai pekerjaan sebagai tanggal acak
            'tanggal_selesai' => $faker->date, // Tanggal selesai pekerjaan sebagai tanggal acak
            'progress_fisik' => $faker->numberBetween(0, 100), // Progress fisik berupa angka acak antara 0 dan 100
        ];
    }
}
