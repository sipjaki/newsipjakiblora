<?php

namespace Database\Factories;

use App\Models\skktenagakerja;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\skktenagakerja>
 */
class SkktenagakerjaFactory extends Factory
{
    protected $model = skktenagakerja::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker = FakerFactory::create('id_ID');

        // Hitung tanggal lahir secara acak dan usia berdasarkan tanggal lahir
        $tanggalLahir = $faker->date($format = 'Y-m-d', $max = '2000-01-01'); // Maksimal 24 tahun lalu
        $usia = Carbon::parse($tanggalLahir)->age;

        $nik = '32052' . $faker->unique()->numerify('###########');

        return [
            'kecamatan' => $faker->word,
            'desa' => $faker->word,
            'nama' => $faker->name,
            'alamat' => $faker->address,
            'tanggal_lahir' => $tanggalLahir,
            'nik' => $nik,
            'keterampilan' => $faker->word,
            'tahun_bimtek' => $faker->year,
            'kualifikasi' => $faker->word,
            'registrasi' => $faker->unique()->uuid,
            'usia' => $usia,
        ];
    }
}
