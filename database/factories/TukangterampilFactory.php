<?php

namespace Database\Factories;

use App\Models\skktenagakerja;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\skktenagakerja>
 */
class TukangterampilFactory extends Factory
{
    // protected $model = skktenagakerja::class;

    // Daftar desa per kecamatan di Kabupaten Bandung Barat

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
    public function definition(): array
    {

        $desaByKecamatan = [
            'Lembang' => [
                'Pagerwangi', 'Kayu Ambon', 'Lembang', 'Cikidang', 'Cikahuripan', 
                'Cikole', 'Gudang Kahuripan', 'Jayagiri', 'Cibodas', 'Langensari', 'Mekarwangi',
                'Cibogo', 'Sukajaya', 'Suntenjaya', 'Wangunharja', 'Wangunsari',  
            ],
            'Parongpong' => [
                'Karyawangi', 'Cihanjuang', 'Cihanjuangrahayu', 'Cihideung', 'Ciwaruga', 'Cigugurgirang',
                'Sariwangi',  
            ],
            'Cisarua' => [
                'Jambudipa', 'Padaasih', 'Pasirhalang', 'Pasirlangu', 'Cipada', 'Kertawangi', 'Tugumukti', 'Sadang Mekar',
                'Sariwangi',  
            ],
            'Cikalong Wetan' => [
                'Ciptagumati', 'Cikalong', 'Cipada', 'Cisomangbarat', 'Banjarsari', 'Kanangasari', 'Mandalasari', 
                'Mandalamukti', 'Mekarjaya', 'Puteran', 'Rende', 'Tenjolaut', 'Wangunjaya',  
            ],
            'Cipeundey' => [
                'Cipeundey', 'Ciharashas', 'Ciroyom', 'Bojongmekar', 'Margalaksana', 'Margaluyu', 'Nanggeleng', 
                'Nyenang', 'Sirnaraja', 'Sirnagalih', 'Sukahaji',  
            ],
            'Ngamprah' => [
                'Ngamprah', 'Cimareme', 'Cilame', 'Tanimulya', 'Cimangu', 'Bojongkoneng', 'Margajaya', 
                'Mekarsari', 'Gadobangkong', 'Sukatani', 'Pakuhaji',  
            ],
            'Cipatat' => [
                'Ciptaharja', 'Cipatat', 'Citatah', 'Rajamandala Kulon', 'Mandalawangi', 'Kertamukti', 'Nyalindung', 
                'Gunung Masigit', 'Cirawa Mekar', 'Mandalasari', 'Sumur Bandung', 'Sari Mukti',  
            ],
            'Padalarang' => [
                'Kertamulya', 'Padalarang', 'Cimerang', 'Cempaka Mekar', 'Tagogapu', 'Ciburuy', 'Kertajaya', 
                'Cipeundey', 'Jaya Mekar', 'Laksana Mekar',  
            ],
            'Batujajar' => [
                'Batujajar Timur', 'Batujajar Barat', 'Galanggang', 'Cangkorah', 'Selacau', 'Pangauban', 'Giriasih',   
            ],
            'Cihampelas' => [
                'Cipatik', 'Citapen', 'Cihampelas', 'Mekarjaya', 'Mekarmukti', 'Pataruman', 'Situwangi', 'Singa Jaya', 'Tanjung Wangi',
                'Tanjung Jaya',    
            ],
            'Cililin' => [
                'Cililin', 'Budiharja', 'Batulayang', 'Bongas', 'Karang Anyar', 'Karang Tanjung', 'Karya Mukti', 'Kidang Pananjung', 'Muka Payung',
                'Nangerang', 'Ranca Panggung',   
            ],
            'Cipongkor' => [
                'Sarinangen', 'Baranangsiang', 'Citalem', 'Cijenuk', 'Cijambu', 'Cibenda', 'Cinta Asih', 'Cicangkanghilir', 'Giri Mukti',
                'Karangsari', 'Mekarsari', 'Neglasari', 'Sirnagalih', 'Sukamulya',   
            ],
            'Rongga' => [
                'Cibedug', 'Bojong', 'Bojong Salam', 'Cibitung', 'Cicadas', 'Cinengah', 'Sukamanah', 'Sukaresmi',
            ],
            'Sindang Kerta' => [
                'Cinta Karya', 'Sindang Kerta', 'Buninagara', 'Cikadu', 'Cicangkang Girang', 'Mekarwangi', 'Pasirpogor', 'Puncaksari',
                'Ranca Senggang', 'Wening Galih', 'Wangunsari',
            ],
            'Gunung Halu' => [
                'Sirnajaya', 'Gunung Halu', 'Bunijaya', 'Celak', 'Cilangasari', 'Sindang Jaya', 'Sukasari', 'Taman Jaya',
                'Warga Saluyu', 
            ],
            'Saguling' => [
                'Cikande', 'Jati', 'Girimukti', 'Bojong Heulang', 'Cipangeran', 'Saguling',
            ],
        ];
    
        $keterampilanList = [
            'GALI',
            'RELIEF',
            'BANGUNAN',
            'PEMBESIAN',
            'KITCHENSET',
            'KONSTRUKSI',
            'PENGECATAN',
            'AHLI TEMBOK',
            'LAS LISTRIK',
            'MESIN BROKER',
            'KAYU | KUSEN',
            'HAMMER DRILL',
            'OPERATOR BEKO',
            'PASANG KERAMIK',
            'PEMASANGAN BATU',
            'PASANG BATU | COR',
            'BENGKEL | MEKANIK',
            'KONSTRUKI BANGUNAN',
            'PEMASANGAN BATU BATA',
            'KAYU | PEMASANGAN BATU',
            'PASANG BATU | BESI | KAYU',
            'KAYU | PEMASANGAN BATU BATA',
            'PASANG BATU | COR | BESI | KAYU',
        ];
    
        $faker = FakerFactory::create('id_ID');
    
        // Pilih kecamatan secara acak
        $kecamatan = $faker->randomElement(array_keys($desaByKecamatan));
    
        // Pilih desa secara acak berdasarkan kecamatan yang dipilih
        $desa = $faker->randomElement($desaByKecamatan[$kecamatan]);
    
        // Hitung tanggal lahir secara acak dan usia berdasarkan tanggal lahir
        $tanggalLahir = $faker->date($format = 'Y-m-d', $max = '2000-01-01'); // Maksimal 24 tahun lalu
        // $usia = Carbon::parse($tanggalLahir)->age;
    
        // Generate NIK yang dimulai dengan 32052 dan diikuti oleh 11 digit acak
        $nik = '32052' . $faker->unique()->numerify('###########'); // Total 11 digit acak
    
        $firstName = $faker->firstNameMale(); // Nama depan laki-laki
        $lastName = $faker->lastNameMale(); // Nama belakang
    
        return [
            'tahunpilihan_id' => rand(1,8,9,10,11), 
            'pengawasanlokasi_id' => rand(1,16), // Kec. acak dari daftar
            'keterampilanpekerja_id' => rand(1,12),
            'desa' => $desa, // Desa acak dari kecamatan yang dipilih
            'nama' => $firstName . ' ' . $lastName, // Nama laki-laki  // Nama lengkap tanpa gelar
            'alamat' => $faker->address,
            'tanggal_lahir' => $tanggalLahir,
            'nik' => $nik,
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'profesional',
            'kta_gatensi' => 'profesional',
            'skk_pekerja' => 'profesional',
            'foto_kegiatanpekerja1' => 'profesional',
            'foto_kegiatanpekerja2' => 'profesional',
            // 'usia' => $usia,
        ];
    }
}
