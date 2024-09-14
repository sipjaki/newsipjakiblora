<?php

namespace Database\Factories;

use App\Models\AsosiasiPengusaha;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AsosiasiPengusaha>
 */
class AsosiasipengusahaFactory extends Factory
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

        return [
            'nama_asosiasi' => $faker->company,
            'alamat_kantor' => $faker->address,
            'kota' => $faker->randomElement($kotaList), // Pilih kota secara acak dari daftar
            'provinsi' => 'Jawa Barat', // Tetapkan provinsi sebagai "Jawa Barat"
            'kontak' => $faker->phoneNumber,
            'email' => $faker->safeEmail,
            'website' => $faker->url,
            'kepala_asosiasi' => $faker->name,
            'tanggal_berdiri' => $faker->year,
            'foto_asosiasi' => $faker->imageUrl(400, 300, 'business', true, 'foto_asosiasi'),
            'jumlah_anggota' => $faker->numberBetween(10, 500),
            'status' => $faker->randomElement(['AKTIF', 'TIDAK AKTIF']),
        ];
    }
}
