<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\skktenagakerja;
use App\Models\peraturan;
use App\Models\perpemerintah;
use Database\Factories\SkktenagakerjaFactory;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'is_admin' => 'super_admin',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        User::create([
            'name'  => 'Admin Sipjaki',
            'username' => 'sipjakikbb',
            'is_admin' => 'super_admin',
            'email' => 'sipjakikbb@gmail.com',
            'password' => bcrypt('adminadmin$$123')
        ]);
        
        User::create([
            'name'  => 'User 1 Sipjaki',
            'username' => 'sipjakikbbuser$1',
            'is_admin' => 'admin',
            'email' => 'sipjakikbbuser1@gmail.com',
            'password' => bcrypt('sipjakiuser$$111')
        ]);
        
        User::create([
            'name'  => 'User 2 Sipjaki',
            'username' => 'sipjakikbbuser$2',
            'is_admin' => 'super_admin',
            'email' => 'sipjakikbbuser2@gmail.com',
            'password' => bcrypt('sipjakiuser$$222')
        ]);
        
        User::create([
            'name'  => 'User 3 Sipjaki',
            'username' => 'sipjakikbbuser$3',
            'is_admin' => 'admin',
            'email' => 'sipjakikbbuser3@gmail.com',
            'password' => bcrypt('sipjakiuser$$333')
        ]);
        
        User::create([
            'name'  => 'User 4 Sipjaki',
            'username' => 'sipjakikbbuser$4',
            'is_admin' => 'admin',
            'email' => 'sipjakikbbuser4@gmail.com',
            'password' => bcrypt('sipjakiuser$$444')
        ]);
        

        // ===================================================================================
        // DATA TENAGA KERJA SKK KABUPATEN BANDUNG BARAT
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'DEDE ROYANI',
            'alamat' => 'KP.CIGARUNG RT 004/007 ',
            'tanggal_lahir' => '1994-03-09',
            'nik' => '3217122003940000',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1994-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'RONI RUSTANDI',
            'alamat' => 'KP.SARONGGE RT 001/003',
            'tanggal_lahir' => '1993-03-26',
            'nik' => '3217122603930000',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1993-03-26'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'AHMAD SANDI FAUIZI',
            'alamat' => 'KP.CISALADAK RT 001/003',
            'tanggal_lahir' => '1998-10-24',
            'nik' => '3217122410980010',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1998-10-24'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'IMAN',
            'alamat' => 'KP.SADANG RT 003/003 ',
            'tanggal_lahir' => '1985-07-06',
            'nik' => '3217120607850040',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1985-07-06'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'DEDI MULYADI',
            'alamat' => 'KP.SADANG RT 003/003  ',
            'tanggal_lahir' => '1976-06-12',
            'nik' => '3217121206760020',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1976-06-12'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'AYI HERMAN',
            'alamat' => 'KP.CILAME RT 003/005',
            'tanggal_lahir' => '1980-04-20',
            'nik' => '3217122004800010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1980-04-20'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'ANTO.S',
            'alamat' => 'KP.SADANG RT 003/003',
            'tanggal_lahir' => '1986-03-08',
            'nik' => '3217120803860010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1986-03-08'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'ASEP SUTISNA',
            'alamat' => 'KP.CIBANAS RT 005/003',
            'tanggal_lahir' => '1973-07-04',
            'nik' => '3217120407730010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1973-07-04'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'IWAN SETIAWAN',
            'alamat' => 'KP.CISALADAK RT 001/003 ',
            'tanggal_lahir' => '1977-06-02',
            'nik' => '3217120206770000',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1977-06-02'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'NANDANG',
            'alamat' => 'KP.CISALADAK RT 002/003',
            'tanggal_lahir' => '1964-07-01',
            'nik' => '3217120107640160',
            'keterampilan' => 'KAYU',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1964-07-01'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

    
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'DASEP',
            'alamat' => 'KP.BABAKAN RT 004/005 ',
            'tanggal_lahir' => '1968-09-08',
            'nik' => '3217120809680000',
            'keterampilan' => 'KAYU',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1968-09-08'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'ABUDIN',
            'alamat' => 'KP.SUKASENANG RT 001/002',
            'tanggal_lahir' => '1971-02-10',
            'nik' => '3275101002710010',
            'keterampilan' => 'KONSTRUKSI',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1971-02-10'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'MUHAMMAD NANDA I',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1994-10-29',
            'nik' => '3217122910940000',
            'keterampilan' => 'KONSTRUKSI',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1994-10-29'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'HILMAN',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1975-05-03',
            'nik' => '3217120305750040',
            'keterampilan' => 'BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1975-05-03'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'AANG ANWAR',
            'alamat' => 'KP.BABAKAN RT 004/005 ',
            'tanggal_lahir' => '1987-07-25',
            'nik' => '3217121607870005',
            'keterampilan' => 'KONTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1987-07-25'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'NANANG RIANA',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1982-08-18',
            'nik' => '3217121808820012',
            'keterampilan' => 'KONTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1982-08-18'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Skktenagakerja::create([
            'kecamatan' => 'CIPONGKOR',
            'desa' => 'MEKARSARI',
            'nama' => 'IWAN SETIAWAN',
            'alamat' => 'KP.CINAGEN RT 004/001 ',
            'tanggal_lahir' => '1984-07-02',
            'nik' => '3217120207840010',
            'keterampilan' => 'KONTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1984-07-02'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

//======================== ===================================================================================
//======================== ===================================================================================
//======================== ===================================================================================
//======================== ===================================================================================
        peraturan::create([
            'judul' => 'UNDANG- UNDANG JASA KONSTRUKSI',
            'peraturan' => '/assets/library/peraturan/01_uud/UU_NO_02_TAHUN_2017.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ======================================================
        perpemerintah::create([
            'judul' => 'PERATURAN PEMERINTAH NOMOR 29 TAHUN 2000',
            'peraturan' => '/assets/library/peraturan/02_pemerintah/PERATURAN_PEMERINTAH_NO_29_TAHUN_2000.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


    


    }
 /**
     * Menghitung usia berdasarkan tanggal lahir.
     *
     * @param  string  $birthDate
     * @return int
     */
    protected function calculateAge($birthDate)
    {
        return Carbon::parse($birthDate)->age;
    }
}
