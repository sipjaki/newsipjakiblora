<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\skktenagakerja;
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
            'nama' => 'DEDE ROYANI',
            'alamat' => 'KP.CIGARUNG RT 004/007 ',
            'tanggal_lahir' => '1994-03-09',
            'nik' => '3217122003940',
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
            'nama' => 'DEDE ROYANI',
            'alamat' => 'KP.CIGARUNG RT 004/007 ',
            'tanggal_lahir' => '1994-03-09',
            'nik' => '34534634634',
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
            'nama' => 'DEDE ROYANI',
            'alamat' => 'KP.CIGARUNG RT 004/007 ',
            'tanggal_lahir' => '1994-03-09',
            'nik' => '3536346',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'usia' => $this->calculateAge('1994-03-09'), 
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
