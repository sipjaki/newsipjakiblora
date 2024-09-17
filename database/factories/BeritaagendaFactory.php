<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\beritaagenda>
 */
class BeritaagendaFactory extends Factory
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
            'pengawasanlokasi_id' => $faker->numberBetween(1, 16), // Pastikan ID ini valid di tabel pengawasanlokasi
            'user_id' => $faker->numberBetween(1, 6), // Pastikan ID ini valid di tabel users
            'agendastatus_id' => $faker->numberBetween(1, 4), // Menghasilkan ID acak dalam rentang 1 hingga 4
            'nama_agenda' => $faker->sentence(6, true), // Menghasilkan kalimat dengan 6 kata dalam bahasa Indonesia
            'keterangan' => $faker->paragraph(3, true), // Menghasilkan paragraf dengan 3 kalimat dalam bahasa Indonesia
            'kuota' => $faker->numberBetween(10, 100), // Menghasilkan angka acak untuk kuota
            'tanggal_mulai' => $faker->date, // Menghasilkan tanggal acak
            'tanggal_selesai' => $faker->date, // Menghasilkan tanggal acak
            // 'deleted_at' => $faker->optional()->dateTime, // Soft deletes jika diperlukan
        ];

    }
}
