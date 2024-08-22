<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tukangterampil;
use App\Models\peraturan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\berita;
use App\Models\giskbb;
use App\Models\kegiatanjaskon;
use App\Models\pelatihan;
use App\Models\uijk;
use Database\Factories\SkktenagakerjaFactory;
// use Carbon\Carbon;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(2)->create();
       

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
        // skktenagakerja::factory(1235)->create(); 
        

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Budiharja',
            'nama' => 'ANTON HILMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilan' => 'FURNITUR',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/01.jpeg',
            'usia' => $this->calculateAge('1993-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batu Layang',
            'nama' => 'ENDANG',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/02.jpeg',
            'usia' => $this->calculateAge('1985-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batu Layang',
            'nama' => 'LUBIS',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/03.jpeg',
            'usia' => $this->calculateAge('1988-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batu Layang',
            'nama' => 'JAJANG S',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/04.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Bongas',
            'nama' => 'ANGSID',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/05.jpeg',
            'usia' => $this->calculateAge('1992-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karanganyar',
            'nama' => 'HUSNI',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/06.jpeg',
            'usia' => $this->calculateAge('1993-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karang Tanjung ',
            'nama' => 'UJANG',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilan' => 'FURNITUR',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/07.jpeg',
            'usia' => $this->calculateAge('1995-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karyamukti ',
            'nama' => 'HENDRI',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/08.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'HENDRAWAN',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/09.jpeg',
            'usia' => $this->calculateAge('1982-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Muka Payung ',
            'nama' => 'Karsini Widianto',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/10.jpeg',
            'usia' => $this->calculateAge('1975-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'Mamat Hidayat',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/11.jpeg',
            'usia' => $this->calculateAge('1988-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Nangerang ',
            'nama' => 'ROHMAT',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/12.jpeg',
            'usia' => $this->calculateAge('1975-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Ranca Panggung ',
            'nama' => 'PANDI S',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/13.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Cililin ',
            'nama' => 'NURJAMAN AMINUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/14.jpeg',
            'usia' => $this->calculateAge('1985-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batulayang ',
            'nama' => 'BOBON',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/15.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Budiharja ',
            'nama' => 'SULAEMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1990-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/16.jpeg',
            'usia' => $this->calculateAge('1990-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Bongas ',
            'nama' => 'AHMAD EFENDI',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMBESIAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/17.jpeg',
            'usia' => $this->calculateAge('1988-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karanganyar ',
            'nama' => 'Ian Sopian',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/18.jpeg',
            'usia' => $this->calculateAge('1982-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Mukapayung ',
            'nama' => 'Buldani',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/19.jpeg',
            'usia' => $this->calculateAge('1993-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Nangerang ',
            'nama' => 'Saehudin',
            'alamat' => '-',
            'tanggal_lahir' => '1978-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/20.jpeg',
            'usia' => $this->calculateAge('1978-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batulayang ',
            'nama' => 'Cecep',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/21.jpeg',
            'usia' => $this->calculateAge('1992-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karangmukti ',
            'nama' => 'Yopi Sopian',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/22.jpeg',
            'usia' => $this->calculateAge('1995-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karangmukti ',
            'nama' => 'Rukmana',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/23.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Batulayang ',
            'nama' => 'Idrus',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/24.jpeg',
            'usia' => $this->calculateAge('1980-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Bongas ',
            'nama' => 'Agus',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/25.jpeg',
            'usia' => $this->calculateAge('1984-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Kidang Panunjang',
            'nama' => 'Agus',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/25.jpeg',
            'usia' => $this->calculateAge('1984-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Nangerang',
            'nama' => 'Dede Mulyana',
            'alamat' => '-',
            'tanggal_lahir' => '1986-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/26.jpeg',
            'usia' => $this->calculateAge('1986-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Karanganyar',
            'nama' => 'Dadang Ekky',
            'alamat' => '-',
            'tanggal_lahir' => '1991-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/27.jpeg',
            'usia' => $this->calculateAge('1991-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Mukapayung',
            'nama' => 'Ade',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilan' => 'PEMASANGAN BATU BATA | BATU',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/28.jpeg',
            'usia' => $this->calculateAge('1987-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Bongas',
            'nama' => 'Ajang',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilan' => 'LISTRIK',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/29.jpeg',
            'usia' => $this->calculateAge('1987-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
  
        Tukangterampil::create([
            'kecamatan' => 'Cililin',
            'desa' => 'Bongas',
            'nama' => 'Yusuf',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilan' => 'PENGECATAN',
            'tahun_bimtek' => '2024',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => '/assets/library/skktenagakerja/30.jpeg',
            'usia' => $this->calculateAge('1987-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

  



// ====================================================================================================== 
            Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'DEDE ROYANI',
            'alamat' => 'KP.CIGARUNG RT 004/007 ',
            'tanggal_lahir' => '1994-03-09',
            'nik' => '3217122003940000',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1994-03-09'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'RONI RUSTANDI',
            'alamat' => 'KP.SARONGGE RT 001/003',
            'tanggal_lahir' => '1993-03-26',
            'nik' => '3217122603930000',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1993-03-26'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'AHMAD SANDI FAUIZI',
            'alamat' => 'KP.CISALADAK RT 001/003',
            'tanggal_lahir' => '1998-10-24',
            'nik' => '3217122410980010',
            'keterampilan' => 'LAS LISTRIK',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1998-10-24'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'IMAN',
            'alamat' => 'KP.SADANG RT 003/003 ',
            'tanggal_lahir' => '1985-07-06',
            'nik' => '3217120607850040',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1985-07-06'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
    
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'DEDI MULYADI',
            'alamat' => 'KP.SADANG RT 003/003  ',
            'tanggal_lahir' => '1976-06-12',
            'nik' => '3217121206760020',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1976-06-12'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'AYI HERMAN',
            'alamat' => 'KP.CILAME RT 003/005',
            'tanggal_lahir' => '1980-04-20',
            'nik' => '3217122004800010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1980-04-20'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'ANTO.S',
            'alamat' => 'KP.SADANG RT 003/003',
            'tanggal_lahir' => '1986-03-08',
            'nik' => '3217120803860010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1986-03-08'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'ASEP SUTISNA',
            'alamat' => 'KP.CIBANAS RT 005/003',
            'tanggal_lahir' => '1973-07-04',
            'nik' => '3217120407730010',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1973-07-04'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'IWAN SETIAWAN',
            'alamat' => 'KP.CISALADAK RT 001/003 ',
            'tanggal_lahir' => '1977-06-02',
            'nik' => '3217120206770000',
            'keterampilan' => 'PEMASANGAN BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1977-06-02'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'NANDANG',
            'alamat' => 'KP.CISALADAK RT 002/003',
            'tanggal_lahir' => '1964-07-01',
            'nik' => '3217120107640160',
            'keterampilan' => 'KAYU',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1964-07-01'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'DASEP',
            'alamat' => 'KP.BABAKAN RT 004/005 ',
            'tanggal_lahir' => '1968-09-08',
            'nik' => '3217120809680000',
            'keterampilan' => 'KAYU',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1968-09-08'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
   
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'ABUDIN',
            'alamat' => 'KP.SUKASENANG RT 001/002',
            'tanggal_lahir' => '1971-02-10',
            'nik' => '3275101002710010',
            'keterampilan' => 'KONSTRUKSI',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1971-02-10'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'MUHAMMAD NANDA I',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1994-10-29',
            'nik' => '3217122910940000',
            'keterampilan' => 'KONSTRUKSI',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1994-10-29'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'HILMAN',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1975-05-03',
            'nik' => '3217120305750040',
            'keterampilan' => 'BATU BATA',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1975-05-03'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'AANG ANWAR',
            'alamat' => 'KP.BABAKAN RT 004/005 ',
            'tanggal_lahir' => '1987-07-25',
            'nik' => '3217121607870005',
            'keterampilan' => 'KONSTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1987-07-25'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'NANANG RIANA',
            'alamat' => 'KP.SUKASENANG  RT 001/002',
            'tanggal_lahir' => '1982-08-18',
            'nik' => '3217121808820012',
            'keterampilan' => 'KONSTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1982-08-18'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        Tukangterampil::create([
            'kecamatan' => 'Cipongkor',
            'desa' => 'MEKARSARI',
            'nama' => 'IWAN SETIAWAN',
            'alamat' => 'KP.CINAGEN RT 004/001 ',
            'tanggal_lahir' => '1984-07-02',
            'nik' => '3217120207840010',
            'keterampilan' => 'KONSTRUKSI BANGUNAN',
            'tahun_bimtek' => 'BELUM',
            'kualifikasi' => 'BELUM',
            'registrasi' => 'BELUM',
            'foto' => 'professional',
            'usia' => $this->calculateAge('1984-07-02'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::factory(1234)->create();
      
        

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
        // ======================================================
        perpresiden::create([
            'judul' => 'PERATURAN PRESIDEN NOMOR 12 TAHUN 2021',
            'peraturan' => '/assets/library/peraturan/03_presiden/PERATURAN_PRESIDEN_NOMOR_12_TAHUN_2021.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ==========================================================================================
// ==========================================================================================
        permenteri::create([
            'judul' => 'PERATURAN_MENTERI_PUPR_NOMOR_14_TAHUN_2020',
            'peraturan' => '/assets/library/peraturan/04_menteri/PERATURAN_MENTERI_PUPR_NOMOR_14_TAHUN_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_B_DOK_KUALIFIKASI',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_B_DOK_KUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS',
            'peraturan' => '/assets/library/peraturan/04_menteri/LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ============================================================================================================
        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK',
            'peraturan' => '/assets/library/peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022',
            'peraturan' => '/assets/library/peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022',
            'peraturan' => '/assets/library/peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020',
            'peraturan' => '/assets/library/peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ====================================================================================================================================================================================
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024',
            'peraturan' => '/assets/library/peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023',
            'peraturan' => '/assets/library/peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL',
            'peraturan' => '/assets/library/peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022',
            'peraturan' => '/assets/library/peraturan/06_suratedaran/SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023',
            'peraturan' => '/assets/library/peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        referensi::create([
            'judul' => 'PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020',
            'peraturan' => '/assets/library/peraturan/07_suratreferensi/PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NO_11-TAHUN_2019',
            'peraturan' => '/assets/library/peraturan/08_daerah/PERATURAN_DAERAH_NO_11-TAHUN_2019.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR',
            'peraturan' => '/assets/library/peraturan/08_daerah/PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


// ===========================================================================================================================================================

pergubernur::create([
    'judul' => 'PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009',
    'peraturan' => '/assets/library/peraturan/09_gubernur/PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_71_TAHUN_2023',
    'peraturan' => '/assets/library/peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_71_TAHUN_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN',
    'peraturan' => '/assets/library/peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/01.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI - RELAKSASI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/02.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERMEN PUPR NO. 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/03.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


suratkeputusan::create([
    'judul' => 'SURAT EDARAN LPJK NOMOR : 07/SE/LPJK/2022 TENTANG PEDOMAN PEMBERIAN REKOMENDASI LISENSI LSP, PENCATATAN LSP TERLISENSI, SERTA DAFTAR PENYESUAIAN STANDAR KOMPETENSI DAN JABKER KONSTRUKSI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/04.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIRJEN BIKON NO. 12.1/KPTS/Dk/2022 - TENTANG PENETAPAN JABATAN KERJA DAN KONVERSI JABATAN KERJA EKSISTING SERTA JENJANG KUALIFIKASI BIDANG JASA KONSTRUKSI - TAHUN 2022',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/05.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIREKTUR JENDERAL BINA KONSTRUKSI, KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT NOMOR 144/KPTS/DK/2022 TENTANG PENETAPAN STANDAR SKEMA SERTIFIKASI BADAN USAHA JASA KONSTRUKSI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/06.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 05 TAHUN 2022 PERUBAHAN ATAS SE NO. 03/SE/M/2022 TENTANG PEDOMAN PERPANJANGAN MASA BERLAKU SKK JASA KONSTRUKSI',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/07.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 02 TAHUN 2021 TENTANG PERUBAHAN SE MENTERI PUPR NO. 30 TAHUN 2020',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/08.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN NO. 89 DIREKTUR JENDERAL DJBK PUPR TAHUN 2021',
    'peraturan' => '/assets/library/peraturan/11_suratkeputusan/09.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// ============================== ============================== ============================== ==============================

berita::create([
    'judul' => 'Tansformasi Digital Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/giskbb/petakbb.jpg',
    'keterangan' => '
    <p>Pemerintah Kabupaten Bandung Barat telah meluncurkan inisiatif transformasi digital dalam sistem informasi pembina jasa konstruksi sebagai langkah penting untuk meningkatkan efisiensi dan transparansi dalam sektor konstruksi. Program ini bertujuan untuk memodernisasi cara pemerintah mengelola dan mengawasi proyek-proyek konstruksi di daerahnya, dengan memanfaatkan teknologi informasi terkini untuk mempermudah akses, pelaporan, dan monitoring. Transformasi ini diharapkan dapat membawa perubahan positif dalam cara proyek konstruksi dikelola dan dievaluasi, serta meningkatkan kualitas layanan kepada masyarakat.</p>

<p>Sistem informasi baru ini dirancang untuk menyediakan platform terintegrasi yang memungkinkan pemantauan real-time atas proyek konstruksi, pengelolaan data secara efisien, dan komunikasi yang lebih baik antara pihak terkait. Melalui sistem ini, setiap tahap proyek konstruksi, mulai dari perencanaan hingga pelaksanaan, dapat dipantau secara langsung oleh pihak berwenang. Hal ini bertujuan untuk memastikan bahwa semua proyek memenuhi standar kualitas dan regulasi yang ditetapkan, serta meminimalkan potensi penyelewengan atau kesalahan yang mungkin terjadi.</p>

<p>Transformasi digital ini juga mencakup peningkatan aksesibilitas bagi para kontraktor dan penyedia jasa konstruksi. Dengan sistem informasi yang terintegrasi, para pemangku kepentingan dapat mengakses informasi penting, seperti persyaratan perizinan dan prosedur pengajuan, secara online. Ini akan mempercepat proses administrasi dan mengurangi birokrasi, sehingga memberikan kemudahan bagi para pelaku industri untuk berpartisipasi dalam proyek-proyek pemerintah. Selain itu, transparansi yang lebih tinggi diharapkan dapat meningkatkan kepercayaan masyarakat terhadap proses pengadaan dan pelaksanaan proyek konstruksi.</p>

<p>Peluncuran sistem informasi pembina jasa konstruksi ini merupakan bagian dari komitmen Pemerintah Kabupaten Bandung Barat untuk mendorong inovasi dan efisiensi dalam pelayanan publik. Dengan adanya transformasi digital ini, diharapkan sektor konstruksi di daerah ini dapat berkembang lebih pesat dan berkelanjutan. Ke depan, pemerintah akan terus memantau dan mengevaluasi efektivitas sistem ini, serta melakukan perbaikan yang diperlukan untuk memastikan bahwa manfaat dari transformasi digital dapat dirasakan secara optimal oleh semua pihak terkait.</p>
',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Selamat Datang di Sistem Informasi Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita1.jpg',
    'keterangan' => '
<p>Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah inovasi digital terbaru yang dirancang untuk memperbaiki dan memodernisasi pengelolaan proyek konstruksi di daerah ini. Dengan peluncuran sistem ini, pemerintah bertujuan untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam administrasi konstruksi, serta memberikan kemudahan akses informasi kepada masyarakat.</p>

<p>SIPJK menawarkan berbagai fitur unggulan seperti pendaftaran online, pelaporan kemajuan proyek secara real-time, dan akses mudah ke data proyek. Sistem ini diharapkan dapat mengurangi birokrasi, mempercepat proses administrasi, dan meminimalkan potensi terjadinya praktik korupsi. Selain itu, SIPJK juga bertujuan untuk meningkatkan keterlibatan publik dengan menyediakan informasi yang transparan dan mudah diakses tentang status dan perkembangan proyek konstruksi.</p>

<p>Bupati Bandung Barat, menyampaikan antusiasmenya atas peluncuran SIPJK dan mengungkapkan harapannya bahwa sistem ini akan membawa perubahan positif dalam pengelolaan konstruksi di wilayahnya. Ia percaya bahwa SIPJK akan menjadi alat yang efektif dalam mendukung pembangunan berkelanjutan dan menjadi contoh bagi daerah lain dalam penerapan teknologi informasi untuk sektor publik.</p>

',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


berita::create([
    'judul' => 'Kunjungan Provinsi Jawa Barat : Implementasi Sipjaki Terhadap Dunia Konstruksi',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita8.jpeg',
    'keterangan' => '
<p>Kunjungan dari Pemerintah Provinsi Jawa Barat baru-baru ini fokus pada implementasi Sistem Informasi Pengelolaan Jasa Konstruksi (Sipjaki) yang bertujuan untuk merevolusi sektor konstruksi di wilayah tersebut. Dalam kunjungan ini, para pejabat dan teknisi dari provinsi melakukan evaluasi mendalam mengenai penerapan Sipjaki di lapangan serta dampaknya terhadap efisiensi dan transparansi dalam pengelolaan proyek konstruksi. Sipjaki diharapkan menjadi solusi teknologi yang dapat menyederhanakan proses administrasi dan meningkatkan akuntabilitas dalam sektor konstruksi.</p>

<p>Implementasi Sipjaki menawarkan platform digital yang komprehensif untuk mengelola berbagai aspek dari proyek konstruksi, mulai dari perizinan, pengawasan, hingga pelaporan. Dengan fitur-fitur yang memungkinkan pemantauan secara real-time, sistem ini bertujuan untuk mengurangi birokrasi dan mempercepat proses administrasi. Selama kunjungan, para pejabat mengevaluasi bagaimana sistem ini telah diterapkan di berbagai proyek dan bagaimana sistem ini dapat diintegrasikan lebih lanjut untuk memaksimalkan manfaatnya bagi industri konstruksi.</p>

<p>Kunjungan ini juga mencakup sesi diskusi dengan para pelaku industri konstruksi lokal untuk mendapatkan umpan balik mengenai penggunaan Sipjaki. Para kontraktor, pengembang, dan penyedia jasa konstruksi berbagi pengalaman mereka dalam menggunakan sistem, mengidentifikasi tantangan yang dihadapi, dan memberikan rekomendasi untuk perbaikan. Hal ini penting untuk memastikan bahwa sistem yang diterapkan benar-benar sesuai dengan kebutuhan dan tantangan yang ada di lapangan, serta dapat memberikan manfaat yang maksimal bagi semua pihak terkait.</p>

<p>Sebagai bagian dari upaya berkelanjutan untuk meningkatkan kualitas dan efisiensi di sektor konstruksi, Pemerintah Provinsi Jawa Barat berkomitmen untuk mendukung pengembangan dan penerapan teknologi seperti Sipjaki. Kunjungan ini tidak hanya bertujuan untuk mengevaluasi kemajuan implementasi tetapi juga untuk merencanakan langkah-langkah selanjutnya dalam pengembangan sistem. Dengan dukungan dan evaluasi yang terus-menerus, diharapkan bahwa Sipjaki akan semakin meningkatkan kinerja dan transparansi sektor konstruksi di Jawa Barat.</p>
',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Luncurkan Sistem Informasi Pembina Jasa Konstruksi untuk Meningkatkan Transparansi dan Efisiensi',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita2.jpg',
    'keterangan' => '<p>Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) sebagai upaya untuk meningkatkan transparansi dan efisiensi dalam pengelolaan proyek konstruksi di wilayahnya. Sistem ini dirancang untuk mempermudah proses pendaftaran, pengawasan, dan evaluasi terhadap penyedia jasa konstruksi, sekaligus mempercepat akses informasi bagi masyarakat dan pemangku kepentingan.</p>

<p>Dengan adanya SIPJK, diharapkan proses administrasi terkait jasa konstruksi menjadi lebih terintegrasi dan mudah diakses. Sistem ini menawarkan fitur-fitur seperti pendaftaran online, pelaporan secara real-time, dan akses langsung ke data proyek yang sedang berlangsung. Hal ini diharapkan dapat mengurangi birokrasi, meminimalisir praktik korupsi, dan memastikan bahwa setiap proyek konstruksi sesuai dengan standar dan regulasi yang berlaku.</p>

<p>Peluncuran SIPJK ini merupakan bagian dari komitmen pemerintah daerah dalam mendukung pembangunan yang transparan dan berkelanjutan. Bupati Bandung Barat, [Nama Bupati], mengungkapkan harapannya agar sistem ini dapat memperbaiki kinerja sektor konstruksi dan memberikan manfaat jangka panjang bagi masyarakat. Inovasi ini juga diharapkan menjadi contoh bagi daerah lain dalam menerapkan teknologi informasi untuk pengelolaan sektor publik.</p>',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Bimbingan Teknis : Pelatihan dan Bimbingan Teknis Tenaga Tukang Terampil oleh Gatensi Provinsi Jawa Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita4.jpg',
    'keterangan' => '<p>Bandung Barat, 14 Agustus 2024 – Pemerintah Kabupaten Bandung Barat secara resmi menyelenggarakan acara Bimbingan Teknis dengan tema "Pelatihan dan Bimbingan Teknis Tenaga Tukang Terampil oleh Gatensi Provinsi Jawa Barat" sebagai langkah penting dalam meningkatkan kompetensi tenaga kerja di sektor konstruksi. Acara ini bertujuan untuk memperkuat keterampilan dan pengetahuan tenaga tukang terampil, guna memastikan kualitas kerja yang lebih baik dan kepatuhan terhadap standar industri yang berlaku.</p>

<p>Bimbingan teknis ini menghadirkan berbagai materi penting, termasuk teknik terbaru dalam pelaksanaan proyek konstruksi, penggunaan alat dan bahan bangunan yang efisien, serta prosedur keselamatan kerja yang sesuai dengan regulasi. Melalui pelatihan ini, diharapkan tenaga tukang akan mendapatkan keterampilan praktis yang dibutuhkan untuk menangani berbagai tantangan di lapangan dan meningkatkan kualitas pekerjaan konstruksi.</p>

<p>Gatensi Provinsi Jawa Barat menyambut positif pelaksanaan bimbingan teknis ini dan menyatakan komitmennya untuk terus mendukung pengembangan profesional di sektor konstruksi. Acara ini diharapkan dapat menjadi model bagi inisiatif pelatihan lainnya dan memberikan dampak positif yang signifikan dalam kualitas dan efisiensi proyek konstruksi di Kabupaten Bandung Barat.</p>

<p>Dengan pelaksanaan bimbingan teknis ini, diharapkan seluruh tenaga tukang dapat meningkatkan keterampilan mereka dan berkontribusi secara lebih efektif terhadap proyek-proyek konstruksi yang ada. Pemerintah daerah juga berkomitmen untuk terus mendukung pengembangan dan peningkatan kapasitas tenaga kerja demi pembangunan yang lebih baik dan berkelanjutan.</p>

',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Transformasi Digital di Kabupaten Bandung Barat: Sistem Informasi Pembina Jasa Konstruksi Hadir untuk Memperbaiki Pengelolaan Konstruksi',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita5.jpg',
    'keterangan' => '<p>Bandung Barat, 11 Agustus 2024 – Dalam upaya untuk mendigitalkan dan menyempurnakan pengelolaan konstruksi, Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK). Inisiatif ini bertujuan untuk memperbaiki efisiensi, transparansi, dan akuntabilitas dalam administrasi proyek konstruksi di wilayahnya. SIPJK diharapkan akan membawa perubahan signifikan dalam cara proyek konstruksi dikelola dan diawasi.</p>

<p>Sistem ini dilengkapi dengan berbagai fitur canggih yang memungkinkan pendaftaran dan pemantauan proyek secara online, serta pelaporan kemajuan yang dapat diakses secara real-time. Dengan penerapan SIPJK, diharapkan proses administrasi yang selama ini rumit dan memakan waktu dapat dipercepat, serta mengurangi potensi terjadinya penyimpangan atau praktik korupsi. Selain itu, sistem ini memberikan kemudahan bagi masyarakat untuk mendapatkan informasi yang transparan mengenai status proyek-proyek konstruksi.</p>

<p>Bupati Bandung Barat, menyatakan bahwa peluncuran SIPJK adalah langkah penting dalam transformasi digital pemerintah daerah. Ia berharap sistem ini tidak hanya akan meningkatkan kualitas pengelolaan konstruksi tetapi juga dapat menjadi acuan bagi daerah lain dalam menerapkan teknologi untuk sektor publik. Peluncuran ini merupakan bagian dari komitmen pemerintah daerah untuk mendukung pembangunan yang lebih terintegrasi dan berkelanjutan.</p>',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Berkolaborasi dengan PT. Cisangkan dalam bimbingan teknis untuk para tukang terampil ',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita6.jpg',
    'keterangan' => '<p>Bandung Barat, 14 Agustus 2024 – Pemerintah Kabupaten Bandung Barat bekerja sama dengan PT. Cisangkan dalam menyelenggarakan bimbingan teknis untuk para tukang terampil di Desa Batulayang, Kecamatan Cililin.</p>

<p>Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah terobosan digital yang bertujuan untuk mendukung pembangunan berkelanjutan di wilayah tersebut. Sistem ini dirancang untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam pengelolaan proyek konstruksi, serta memastikan bahwa semua kegiatan pembangunan mengikuti standar yang telah ditetapkan.</p>

<p>SIPJK menawarkan berbagai fitur inovatif, termasuk pendaftaran online untuk penyedia jasa konstruksi, pemantauan proyek secara real-time, dan pelaporan kemajuan yang mudah diakses. Dengan adanya sistem ini, diharapkan akan terjadi penurunan birokrasi dan praktik korupsi yang seringkali menghambat proses konstruksi. Sistem ini juga bertujuan untuk memberikan kemudahan akses informasi kepada masyarakat, sehingga meningkatkan keterlibatan publik dalam proses pembangunan.</p>

<p>Bupati Bandung Barat menegaskan bahwa peluncuran SIPJK adalah langkah strategis dalam upaya mendukung pembangunan yang lebih berkelanjutan dan terencana. Ia berharap sistem ini dapat menjadi contoh bagi daerah lain dalam penerapan teknologi untuk pengelolaan sektor publik dan memajukan kualitas serta transparansi dalam proyek-proyek konstruksi.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =================================== ===================================== ===========================
layanankami::create([
    'gambar' => '/assets/library/layanankami/1.png',
    'program' => 'Sertifikat Laik Fungsi',
    'keterangan' => 'Sertifikat Laik Fungsi Untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/2.png',
    'program' => 'Persetujuan Bangunan Gedung',
    'keterangan' => 'Persetujuan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/3.png',
    'program' => 'Inspeksi Lapangan',
    'keterangan' => 'Inspeksi Lapangan Untuk Konstruksi Di Lapangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


layanankami::create([
    'gambar' => '/assets/library/layanankami/4.png',
    'program' => 'Pemeliharaan Perbaikan',
    'keterangan' => 'Pemeliharaan Perbaikan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/5.png',
    'program' => 'Penyediaan Material',
    'keterangan' => 'Penyediaan Material untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/6.png',
    'program' => 'Insfrastruktur Perkotaan',
    'keterangan' => 'Insfrastruktur Perkotaan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/7.png',
    'program' => 'Insfrastruktur Jalan',
    'keterangan' => 'Insfrastruktur Jalan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/8.png',
    'program' => 'Insfrastruktur Industri',
    'keterangan' => 'Insfrastruktur Industri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/9.png',
    'program' => 'Teknik Konstruksi ',
    'keterangan' => 'Teknik Konstruksi untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/10.png',
    'program' => 'Teknik Struktur ',
    'keterangan' => 'Teknik Struktur untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/11.png',
    'program' => 'Teknik Rekayasa & Air Limbah ',
    'keterangan' => 'Teknik Rekayasa & Air Limbah untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =============================== =============================== =============================== ===============================
uijk::create([
    'nama_perusahaan' => 'PT. Mega Sukma',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG003(M1),   BG009(M1),   SI001(M1),   SI003(M2),   SI004(M2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Kreasi Nusantara',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur, Perencanaan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => 'AR102(K1), AR104(K1), RE102(K1), RE103(K1), RE104(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rifana Jaya Perdana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG009(M1), SI001(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Multicipta Rancana Selaras',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang, Konsultasi Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'RE103 (B), RE104 (B), PR101 (B), PR102 (B), SP303 (B), SP304 (B)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mutiara Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Berkah Karunia Abadi',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Yasuba Dwi Perkasa',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung, Bangunan Sipil, Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1),BG007(M1),BG008(M2),BG009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Setia Mandiri CO',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Beton Elemen Persada',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG003(M1), BG006(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Putri Kembar Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rapi Indah',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M2),BG002(M2),BG003(M2),BG004(M1),BG006(M1),BG007(M1),BG008(M1),BG009(M2),',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bandung Rainer Syailendra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1),BG002(K1), BG004(K1), BG006(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rumah Mulia Indonesia',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG007(M1), SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wijaya Kusumah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG008(K1),BG009(K1), SI001(K1),SI002(K2),SI003(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Aditya Putra Karya Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(M1),BG008(M1),BG009(M1),SI001(M1),SI003(M2),SI004(M1),SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Graha Teknik',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K2),BG008(K1),BG009(K3),SI001(K1),SI003(K3)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Trisula',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Bina Arya Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hanjuang',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gumas Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG009(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RH Niaga Buana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Sarana Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Jasa Konstruksi Terintegrasi, Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'TI503(B1),TI504(B1), EL001(M1),EL009(M1),EL010(M1),MK007(M1),MK009(B1),MK010(B1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Mobar Sarana Energi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'MK007(M1), MK010(M1), EL001(M1), EL009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Abbas Kusuma',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tri Hazna Pertiwi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007 (K1) ; BG009 (K2) ; SI001 (K1) ; SI002 (K1) ; SI003 (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => '',
    'kategori_perusahaan' => '',
    'klasifikasi_bidang_usaha' => '',
    'sub_klasifikasi_bidang_usaha' => '',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


uijk::create([
    'nama_perusahaan' => 'PT. Martadinar Gemilang Sejahtera',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), EL008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mega Braja Waskita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hiber',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Subur Abadi Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Dwi Puteri',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), BG008(K2), SI001(K2), SI003(K2), SI008(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Permata',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Kayu Manis',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Citra Indah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Pelaksana Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'SP004(K1),SP008(K1),SP011(K1)SP015(K3),SP016(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Cendrawasih Milik Kita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Merdeka Sakti',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. YDP Usaha Perdana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Perencanaan Arsitektur, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101) (M1), (AR102) (M1), (RE201) (K1), (RE202) (K1), (RE203) (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Sinergi Karsa Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1), SI001(M1), SI003(M1),SI004(M1).',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tiga Arga Kencana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI003(M1), SI004(M1), BG002(M1), BG003(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gatra Kencana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI001(K1), SI003(K1), BG007(K1), BG009(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Agung Bandung',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), BG009(K3), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wahana Wahid Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Aria Putra Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG008(K1), BG009(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Ruang Hijau',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => 'PR103(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT.BINA SARANA PUTRA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(MK007)(M1),(MK009)(B1),MK010)(B1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RAHAJENG',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(K1),(EL007)(K1),(EL010)(K1),(EL011)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GENERAL MULTI UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan gedung dan Instalasi Mekanikal dan elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(BG002)(M1),(BG006)(M1),(EL010)(M1),(MK002)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SYAM KARYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. DHERA GITA INDONESIA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(M1),(EL007)(M1),(EL010)(M1), (EL010)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. PUTRA BUNGSU',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil ',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),(SI008)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. DAYA UNGGUL PERKASA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL002)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. NAGA MAS JAYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(BG007)(K1),(BG009)(K2),(SI001)(K1),(SI002)(K1),(SI003)(K2)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. REKA BAHANATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008)(K1),(BG009)(K1),(SI001)(K1),(SI003)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. MITRA JAYATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(BG008)(K1),(BG009)(K1),(SI001)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. ECOPLAN REKABUMI INTERCONSULT',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang,Konsultasi Lainnya, Pengawasan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => '(RE103)(B),(RE104)(B),(PR101)(B),(PR102)(B),(PR103)(B),(PR104)(B),(KL401)(B),(PR201)(B)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. BOJONG SARI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003) (K2),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV.Kartika Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(SI001)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RIKATNA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG006)(K1),(BG009)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. FATIH BERKAH ELECTRIK',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL003)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SEKAR WANGI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG001) (K1),(BG004) (K1),(BG007) (K1),(SI001) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. REKA JAYA KARYA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008) (M1),(BG009) (M1),(SI001) (M1),(SI003) (M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. PELITA PERSADA REKAYASA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur,Perencaan Rekayasa, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101)(M1), (AR102)(M1),(RE102)(M1),(RE105)(M1),(RE201)(M1), (RE204)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// uijk::create([
//     'nama_perusahaan' => '',
//     'kategori_perusahaan' => '',
//     'klasifikasi_bidang_usaha' => '',
//     'sub_klasifikasi_bidang_usaha' => '',
//     'keterangan' => '2018',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
// ]);

// ============================== ============================================================
kegiatanjaskon::create([
                'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'judul_kegiatan' => 'BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI KABUPATEN BANDUNG BARAT',
                'alamat_kegiatan' => '14 AGUSTUS 2024 KECAMATAN CILILIN DESA BATULAYANG 40562 JAWABARAT INDONESIA',
                'berita1' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA1.jpg',
                'berita2' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA2.jpg',
                'berita3' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA3.jpg',
                'berita4' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA4.jpg',
                'berita5' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA5.jpg',
                'berita6' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA6.jpg',
                'berita7' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA7.jpg',
                'berita8' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA8.jpg',
                'berita9' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA9.jpg',
                'berita10' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA10.jpg',
                'berita11' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA11.jpg',
                'berita12' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA12.jpg',
                'berita13' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA13.jpg',
                'berita14' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA14.jpg',
                'berita15' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA15.jpg',
                'berita16' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA16.jpg',
                'berita17' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA17.jpg',
                'berita18' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA18.jpg',
                'berita19' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA19.jpg',
                'berita20' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA20.jpg',
                'berita21' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA21.jpeg',
                'berita22' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA22.jpeg',
                'berita23' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA23.jpeg',
                'berita24' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA24.jpeg',
                'berita25' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA25.jpeg',
                'berita26' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA26.jpeg',
                // 'berita20' => '/assets/library/kegiatanjaskon/sertifikasi/BERITA20.jpg',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    

                'judul_kegiatan' => 'sambutan oleh bapak sekdis pupr kabupaten bandung barat  ',
                'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/PA_SEKDIS.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

<p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

<p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key

                    'judul_kegiatan' => 'sambutan oleh camat cililin kabupaten bandung barat  ',
                'jabatan' => 'camat kecamatan cililin kabupaten bandung barat',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/PA_CAMAT.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Camat Cililin, dalam sambutannya, mengapresiasi penyelenggaraan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diadakan di Desa Batulayang. Acara ini merupakan inisiatif penting dari Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) untuk mendukung peningkatan kualitas dan keselamatan dalam proyek-proyek konstruksi di wilayah kami. Dengan adanya bimbingan teknis ini, diharapkan semua pihak dapat memahami dan menerapkan standar keselamatan yang tinggi serta mengikuti semua regulasi yang berlaku.</p>

<p>Dalam sambutannya, Camat Cililin menegaskan betapa pentingnya implementasi standar K3 dalam sektor konstruksi untuk mencegah risiko dan kecelakaan kerja. Pelatihan ini dirancang untuk memberi peserta pengetahuan mendalam tentang praktik terbaik dalam keselamatan kerja dan bagaimana cara mengelola risiko secara efektif. Peserta diharapkan tidak hanya mendapatkan informasi teoritis, tetapi juga keterampilan praktis yang berguna dalam menghadapi tantangan di lapangan.</p>

<p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan konstruksi dibahas secara mendetail. Narasumber yang berpengalaman diundang untuk memberikan wawasan dan solusi terhadap berbagai masalah yang sering muncul dalam proyek konstruksi. Tujuan dari kegiatan ini adalah untuk meningkatkan kesadaran dan kemampuan semua peserta sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif di wilayah Kecamatan Cililin.</p>

<p>Di akhir acara, Camat Cililin menyampaikan terima kasih kepada semua pihak yang telah berkontribusi dalam pelaksanaan bimbingan teknis ini. Diharapkan bahwa pelatihan ini memberikan manfaat besar dan dapat diterapkan dalam setiap proyek konstruksi yang dilakukan. Komitmen bersama untuk mencapai standar keselamatan yang tinggi akan mendukung kesuksesan proyek dan meningkatkan keselamatan kerja di Kabupaten Bandung Barat.</p>



',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key

                    'judul_kegiatan' => 'sambutan oleh bpk yuyu yuhana, ST., MM pembina jasa konstruksi ahli muda pemerintah kabupaten bandung barat',
                'jabatan' => 'kepala putr kabupaten bandung barat',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/PA_YUYU.jpeg',
                'keterangan_berita' => '
<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Kepala Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Kabupaten Bandung Barat, dalam sambutannya, mengapresiasi pelaksanaan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang. Acara ini merupakan bagian dari upaya berkelanjutan Dinas PUTR untuk meningkatkan kualitas dan keselamatan di sektor konstruksi. Kegiatan ini bertujuan memastikan bahwa semua aspek pekerjaan konstruksi dilakukan sesuai dengan standar yang tinggi dan mematuhi regulasi yang berlaku.</p>

<p>Dalam sambutannya, Kepala Dinas PUTR menekankan betapa pentingnya penerapan standar K3 dalam industri konstruksi untuk mencegah risiko dan kecelakaan di tempat kerja. Bimbingan teknis ini dirancang untuk memberikan peserta pengetahuan mendalam mengenai praktik terbaik dalam keselamatan kerja serta cara-cara efektif untuk mengelola risiko. Harapannya, peserta dapat memperoleh keterampilan praktis yang diperlukan untuk menghadapi berbagai tantangan di lapangan dan mencegah terjadinya kecelakaan.</p>

<p>Selama sesi bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi akan dibahas secara komprehensif. Narasumber berpengalaman akan berbagi wawasan dan solusi terkait tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif.</p>

<p>Penutupan acara ditandai dengan ucapan terima kasih dari Kepala Dinas PUTR kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, hasil dari pelatihan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi. Komitmen bersama untuk mencapai standar keselamatan yang tinggi merupakan langkah penting menuju kesuksesan dan keamanan dalam industri konstruksi di Kabupaten Bandung Barat.</p>


',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key

                    'judul_kegiatan' => 'Sambutan oleh bpk Laswono, ST PEMBEKALAN PEKERJA/TUKANG KONSTRUKSI REGULASI SERTIFIKASI KOMPETENSI KERJA (SKK) ',
                'jabatan' => 'Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/PA_LASWONO.jpeg',
                'keterangan_berita' => '
<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat, Bapak Laswono, ST, memberikan sambutan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar yang tinggi dan regulasi yang berlaku.</p>

<p>Dalam sambutannya, Bapak Laswono menekankan pentingnya penerapan regulasi dan sertifikasi kompetensi kerja (SKK) dalam industri konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

<p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi dan regulasi SKK akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Bapak Laswono kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kualitas yang tinggi di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key

                    'judul_kegiatan' => 'sambutan oleh ibu Dra. Fauzia Mulyawati, ST., MT tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Keselamatan Kerja dan Kesehatan (K3)',
                'jabatan' => 'Dosen Universitas Langlangbuana Bandung',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/BU_FAUZIA.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Dra. Fauzia Mulyawati, ST., MT, Dosen Universitas Langlangbuana Bandung, memberikan bimbingan dan pengarahan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini bertujuan memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar tinggi dan regulasi yang berlaku.</p>

<p>Dalam sambutannya, Dra. Fauzia Mulyawati menekankan pentingnya pemahaman mengenai Keselamatan Kerja dan Kesehatan (K3) di sektor konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai penerapan praktik K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko serta menerapkan standar keselamatan dan kesehatan di lokasi kerja.</p>

<p>Selama bimbingan, berbagai topik teknis terkait K3 akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam penerapan K3 serta praktik keselamatan yang efektif di industri konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Dra. Fauzia Mulyawati kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kesehatan kerja yang tinggi di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key

                    'judul_kegiatan' => 'sambutan oleh ibu Rosita, SE., MM tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan',
                'jabatan' => 'Badan Penyelenggara Jaminan Sosial',
                'gambar' => '/assets/library/kegiatanjaskon/01_cililin/kegiatan/BU_ROSITA.jpg',
                'keterangan_berita' => '
              
<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Ibu Rosita, SE., MM, dari BPJS Ketenagakerjaan, memberikan bimbingan dan pengarahan dalam acara bimbingan teknis mengenai Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari komitmen untuk meningkatkan pemahaman tentang regulasi dan jaminan sosial di sektor konstruksi, serta memastikan bahwa setiap pekerja konstruksi memahami hak dan kewajiban mereka di bawah BPJS Ketenagakerjaan.</p>

<p>Dalam sambutannya, Ibu Rosita menekankan pentingnya pemahaman mengenai regulasi BPJS Ketenagakerjaan untuk pekerja dan tukang konstruksi. Bimbingan ini dirancang untuk memberikan informasi mendalam mengenai cara BPJS Ketenagakerjaan berfungsi dan bagaimana pekerja dapat memanfaatkan jaminan sosial untuk perlindungan mereka. Peserta diharapkan memperoleh pengetahuan dan keterampilan yang diperlukan untuk mengelola dan memanfaatkan manfaat BPJS secara efektif.</p>

<p>Selama sesi bimbingan, berbagai aspek teknis terkait regulasi BPJS Ketenagakerjaan akan dibahas secara rinci. Ibu Rosita akan membagikan wawasan mengenai hak-hak pekerja, prosedur klaim, serta mekanisme perlindungan yang disediakan oleh BPJS. Tujuan utama dari kegiatan ini adalah untuk meningkatkan pemahaman dan kesadaran semua pihak terkait, sehingga mereka dapat memanfaatkan perlindungan sosial dengan maksimal.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Ibu Rosita kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung kepatuhan terhadap regulasi BPJS Ketenagakerjaan di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // ================= =====================================================================================
giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'LEMBANG',
                'gambar' => '/assets/library/giskbb/LEMBANG.jpeg',
                'laki_laki' => '38671',
                'perempuan' => '36666',
                'total_penduduk' => '194937',
                'keterangan_gis' => '
                
                <p>Kecamatan Lembang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terkenal dengan pemandangan alam yang indah dan udara yang sejuk, Lembang menjadi salah satu destinasi populer bagi wisatawan yang mencari suasana pegunungan. Dengan lokasi strategisnya di wilayah Kabupaten Bandung Barat, kecamatan ini menawarkan berbagai fasilitas dan layanan yang mendukung kehidupan sehari-hari masyarakatnya, serta akses yang mudah ke pusat-pusat ekonomi dan pendidikan.</p>

<p>Fasilitas di Kecamatan Lembang cukup lengkap untuk memenuhi kebutuhan warganya. Terdapat berbagai sekolah, pusat kesehatan, dan pasar yang memudahkan penduduk dalam menjalani aktivitas sehari-hari. Infrastruktur yang memadai juga mendukung mobilitas masyarakat, sementara akses transportasi yang baik memperkuat konektivitas antara Lembang dan wilayah sekitarnya.</p>

<p>Berdasarkan data terbaru, jumlah penduduk di Kecamatan Lembang mencapai total 75.337 jiwa. Dari jumlah tersebut, terdapat 38.671 laki-laki dan 36.666 perempuan. Angka ini menunjukkan bahwa kecamatan ini memiliki struktur demografis yang seimbang, dengan proporsi laki-laki dan perempuan yang hampir merata.</p>

<p>Keseimbangan jumlah laki-laki dan perempuan di Kecamatan Lembang mencerminkan dinamika sosial yang stabil. Dengan total penduduk yang cukup besar dan komposisi gender yang seimbang, ada peluang besar untuk pengembangan berbagai inisiatif komunitas. Program-program yang fokus pada pendidikan, kesehatan, dan ekonomi dapat memperkuat kualitas hidup masyarakat di Lembang, serta mendukung pertumbuhan dan kemajuan wilayah ini secara keseluruhan.</p>',
              
                'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PARONGPONG',
                'gambar' => '/assets/library/giskbb/PARONGPONG.jpeg',
                'laki_laki' => '56101',
                'perempuan' => '54436',
                'total_penduduk' => '110537',
                'keterangan_gis' => '
              <p>Kecamatan Parongpong adalah sebuah kecamatan di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Wilayah ini terkenal dengan kekayaan wisata bunga yang menjadi daya tarik utama bagi pengunjung. Parongpong dikenal sebagai pusat budidaya bunga dan tanaman hias, dengan mayoritas petani di wilayah ini berfokus pada produksi bunga dan tanaman hias lainnya. Keindahan alam dan potensi wisata yang dimilikinya menjadikan Parongpong salah satu destinasi favorit bagi wisatawan yang ingin menikmati keindahan alam dan keunikan tanaman hias.</p>

<p>Di Kecamatan Parongpong, petani bunga tersebar terutama di daerah Cihideung. Daerah ini dikenal dengan berbagai jenis tanaman hias, bunga, dan bibit pohon yang berjajar di sepanjang jalan utama desa Cihideung. Pemandangan ini tidak hanya memperindah kawasan tersebut tetapi juga menarik banyak pengunjung yang tertarik untuk membeli atau sekadar menikmati keindahan tanaman hias. Aktivitas ini telah menjadi bagian integral dari kehidupan masyarakat di Parongpong, yang secara aktif terlibat dalam sektor pertanian dan wisata.</p>

<p>Data terbaru menunjukkan bahwa jumlah penduduk di Kecamatan Parongpong mencapai total 110.537 jiwa. Dari jumlah tersebut, terdapat 56.101 laki-laki dan 54.436 perempuan. Keseimbangan jumlah laki-laki dan perempuan ini mencerminkan struktur demografis yang relatif seimbang dan memberikan gambaran tentang dinamika sosial di kecamatan ini. Struktur populasi yang seimbang ini penting untuk pengembangan berbagai inisiatif sosial dan ekonomi di kawasan ini.</p>

<p>Sebagai bentuk pengakuan terhadap potensi wisata yang dimiliki, pemerintah Kabupaten Bandung Barat telah mendeklarasikan Kecamatan Parongpong sebagai kota wisata bunga. Keputusan ini diambil untuk mendorong pengembangan sektor pariwisata serta meningkatkan kesejahteraan masyarakat melalui promosi dan pengembangan industri bunga dan tanaman hias. Dengan total penduduk yang signifikan dan potensi wisata yang kuat, Kecamatan Parongpong berada dalam posisi strategis untuk berkembang menjadi pusat wisata yang lebih dikenal dan diminati.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CISARUA',
                'gambar' => '/assets/library/giskbb/CISARUA.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '79118',
                'keterangan_gis' => '
     <p>Kecamatan Cisarua adalah sebuah kecamatan yang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terletak sekitar 9 kilometer dari ibu kota kabupaten ke arah timur laut, Kecamatan Cisarua memiliki posisi strategis yang mendukung perkembangan ekonominya. Pusat pemerintahan kecamatan ini berada di Desa Jambudipa, yang menjadi pusat administrasi dan kegiatan pemerintah daerah.</p>

<p>Cisarua dikenal sebagai kecamatan yang memiliki potensi besar di bidang pertanian dan peternakan. Produk utama dari kawasan ini meliputi jamur, susu, tanaman palawija, dan sayur-sayuran. Keberagaman produk pertanian ini menunjukkan kekayaan sumber daya alam yang dimiliki Cisarua, serta kontribusinya terhadap perekonomian lokal. Iklim yang cukup dingin di wilayah ini juga mendukung pertumbuhan berbagai jenis tanaman dan produk peternakan.</p>

<p>Menurut data terbaru, jumlah penduduk di Kecamatan Cisarua mencapai total 77.373 jiwa. Dari jumlah tersebut, terdapat 39.293 laki-laki dan 38.080 perempuan. Angka ini menunjukkan struktur demografis yang seimbang, dengan jumlah laki-laki dan perempuan yang hampir merata. Keseimbangan ini penting untuk pengembangan berbagai program sosial dan ekonomi di kecamatan ini.</p>

<p>Dengan potensi pertanian dan peternakan yang dimilikinya, serta iklim yang mendukung, Kecamatan Cisarua berada dalam posisi yang baik untuk berkembang lebih lanjut. Potensi sumber daya alam yang ada di Cisarua memberikan peluang besar untuk meningkatkan kesejahteraan masyarakat melalui pengembangan sektor pertanian dan peternakan yang berkelanjutan.</p>

                    ',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIKALONG WETAN',
                'gambar' => '/assets/library/giskbb/CIKALONGWETAN.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '125630',
                'keterangan_gis' => ' DATA BELUM DIISI
     
                    ',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);
            

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPEUNDEY',
                'gambar' => '/assets/library/giskbb/CIPEUNDEY.png',
                'laki_laki' => '43453',
                'perempuan' => '41920',
                'total_penduduk' => '87376',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'NGAMPRAH',
                'gambar' => '/assets/library/giskbb/NGAMPRAH.png',
                'laki_laki' => '89279',
                'perempuan' => '86595',
                'total_penduduk' => '175874',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);
            

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPATAT',
                'gambar' => '/assets/library/giskbb/CIPATAT.png',
                'laki_laki' => '72219',
                'perempuan' => '69570',
                'total_penduduk' => '141789',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PADALARANG',
                'gambar' => '/assets/library/giskbb/PADALARANG.png',
                'laki_laki' => '93110',
                'perempuan' => '89871',
                'total_penduduk' => '182981',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'BATUJAJAR',
                'gambar' => '/assets/library/giskbb/BATUJAJAR.png',
                'laki_laki' => '55063',
                'perempuan' => '53516',
                'total_penduduk' => '108579',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIHAMPELAS',
                'gambar' => '/assets/library/giskbb/CIHAMPELAS.png',
                'laki_laki' => '68421',
                'perempuan' => '65263',
                'total_penduduk' => '133684',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CILILIN',
                'gambar' => '/assets/library/giskbb/CILILIN.png',
                'laki_laki' => '49169',
                'perempuan' => '46959',
                'total_penduduk' => '96128',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPONGKOR',
                'gambar' => '/assets/library/giskbb/CIPONGKOR.png',
                'laki_laki' => '51118',
                'perempuan' => '48679',
                'total_penduduk' => '99797',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'RONGGA',
                'gambar' => '/assets/library/giskbb/RONGGA.png',
                'laki_laki' => '30394',
                'perempuan' => '28604',
                'total_penduduk' => '58998',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SINDANGKERTA',
                'gambar' => '/assets/library/giskbb/SINDANGKERTA.png',
                'laki_laki' => '37059',
                'perempuan' => '36063',
                'total_penduduk' => '73122',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);
            


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'GUNUNG HALU',
                'gambar' => '/assets/library/giskbb/GUNUNGHALU.png',
                'laki_laki' => '40001',
                'perempuan' => '37911',
                'total_penduduk' => '77912',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SAGULING',
                'gambar' => '/assets/library/giskbb/saguling.png',
                'laki_laki' => '17442',
                'perempuan' => '16863',
                'total_penduduk' => '34305',
                'keterangan_gis' => ' DATA BELUM DIISI',
         
'created_at' => now(),
                'updated_at' => now(),
            ]);
            
// ===================== ===================== ===================== =====================
            pelatihan::create([
                'tahun'  => '2015',
                'kasus' => '110285',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2016',
                'kasus' => '101367',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2017',
                'kasus' => '123040',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2018',
                'kasus' => '173415',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2019',
                'kasus' => '182835',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2020',
                'kasus' => '221740',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2021',
                'kasus' => '234270',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2022',
                'kasus' => '265334',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            pelatihan::create([
                'tahun'  => '2023',
                'kasus' => '329897',
                'created_at' => now(),
                'updated_at' => now(),
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
