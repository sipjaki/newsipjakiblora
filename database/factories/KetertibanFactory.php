<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ketertiban>
 */
class KetertibanFactory extends Factory
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
                'pengawasanlokasi_id' => $faker->randomElement(range(1, 16)),
                'pengawasanbangunangedung_id' => $faker->randomElement(range(1, 10)),
                'penanggungjawabteknis_id' => $faker->randomElement(range(1, 15)),
                'pengawasanstatus_id' => $faker->randomElement(range(1, 3)),
                'pengawasantindakan_id' => $faker->randomElement(range(1, 3)),
                'judul' => $faker->sentence, // Judul laporan
                'tanggal_laporan' => $faker->date, // Tanggal laporan
                'keterangan' => $faker->paragraph, // Keterangan
            ];
    }
}
