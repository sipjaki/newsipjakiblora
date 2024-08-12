<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\skktenagakerja;
use App\Models\peraturan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\layanankami;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
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
    'judul' => 'Selamat Datang di Sistem Informasi Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/selamatdatang.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah inovasi digital terbaru yang dirancang untuk memperbaiki dan memodernisasi pengelolaan proyek konstruksi di daerah ini. Dengan peluncuran sistem ini, pemerintah bertujuan untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam administrasi konstruksi, serta memberikan kemudahan akses informasi kepada masyarakat.

SIPJK menawarkan berbagai fitur unggulan seperti pendaftaran online, pelaporan kemajuan proyek secara real-time, dan akses mudah ke data proyek. Sistem ini diharapkan dapat mengurangi birokrasi, mempercepat proses administrasi, dan meminimalkan potensi terjadinya praktik korupsi. Selain itu, SIPJK juga bertujuan untuk meningkatkan keterlibatan publik dengan menyediakan informasi yang transparan dan mudah diakses tentang status dan perkembangan proyek konstruksi.

Bupati Bandung Barat, menyampaikan antusiasmenya atas peluncuran SIPJK dan mengungkapkan harapannya bahwa sistem ini akan membawa perubahan positif dalam pengelolaan konstruksi di wilayahnya. Ia percaya bahwa SIPJK akan menjadi alat yang efektif dalam mendukung pembangunan berkelanjutan dan menjadi contoh bagi daerah lain dalam penerapan teknologi informasi untuk sektor publik.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Luncurkan Sistem Informasi Pembina Jasa Konstruksi untuk Meningkatkan Transparansi dan Efisiensi',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita1.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) sebagai upaya untuk meningkatkan transparansi dan efisiensi dalam pengelolaan proyek konstruksi di wilayahnya. Sistem ini dirancang untuk mempermudah proses pendaftaran, pengawasan, dan evaluasi terhadap penyedia jasa konstruksi, sekaligus mempercepat akses informasi bagi masyarakat dan pemangku kepentingan.

Dengan adanya SIPJK, diharapkan proses administrasi terkait jasa konstruksi menjadi lebih terintegrasi dan mudah diakses. Sistem ini menawarkan fitur-fitur seperti pendaftaran online, pelaporan secara real-time, dan akses langsung ke data proyek yang sedang berlangsung. Hal ini diharapkan dapat mengurangi birokrasi, meminimalisir praktik korupsi, dan memastikan bahwa setiap proyek konstruksi sesuai dengan standar dan regulasi yang berlaku.

Peluncuran SIPJK ini merupakan bagian dari komitmen pemerintah daerah dalam mendukung pembangunan yang transparan dan berkelanjutan. Bupati Bandung Barat, [Nama Bupati], mengungkapkan harapannya agar sistem ini dapat memperbaiki kinerja sektor konstruksi dan memberikan manfaat jangka panjang bagi masyarakat. Inovasi ini juga diharapkan menjadi contoh bagi daerah lain dalam menerapkan teknologi informasi untuk pengelolaan sektor publik.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Inovasi Terbaru: Sistem Informasi Pembina Jasa Konstruksi Resmi Diterapkan di Kabupaten Bandung Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita2.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat resmi menerapkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) sebagai langkah inovatif dalam pengelolaan sektor konstruksi. Sistem ini bertujuan untuk meningkatkan transparansi, akuntabilitas, dan efisiensi dalam pengelolaan proyek konstruksi di wilayah tersebut. Dengan fitur-fitur canggih yang memudahkan pendaftaran dan pemantauan proyek, SIPJK diharapkan dapat menjawab tantangan dalam administrasi dan pengawasan konstruksi.

SIPJK menawarkan berbagai fitur penting, termasuk pendaftaran online untuk penyedia jasa konstruksi, pelaporan kemajuan proyek secara real-time, serta akses mudah bagi masyarakat untuk memantau perkembangan proyek. Inovasi ini diharapkan dapat mengurangi birokrasi yang seringkali memperlambat proses dan menghilangkan potensi celah korupsi. Selain itu, sistem ini juga bertujuan untuk meningkatkan kualitas dan kepatuhan terhadap standar konstruksi yang berlaku.

Bupati Bandung Barat, menyambut positif peluncuran SIPJK ini dan berharap sistem ini akan menjadi model bagi daerah lain dalam penerapan teknologi informasi untuk sektor publik. Inisiatif ini merupakan bagian dari komitmen pemerintah daerah untuk mendukung pembangunan yang lebih transparan, efektif, dan berkelanjutan di Kabupaten Bandung Barat.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Inovasi Terbaru: Sistem Informasi Pembina Jasa Konstruksi Resmi Diterapkan di Kabupaten Bandung Barat',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita3.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat resmi menerapkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) sebagai langkah inovatif dalam pengelolaan sektor konstruksi. Sistem ini bertujuan untuk meningkatkan transparansi, akuntabilitas, dan efisiensi dalam pengelolaan proyek konstruksi di wilayah tersebut. Dengan fitur-fitur canggih yang memudahkan pendaftaran dan pemantauan proyek, SIPJK diharapkan dapat menjawab tantangan dalam administrasi dan pengawasan konstruksi.

SIPJK menawarkan berbagai fitur penting, termasuk pendaftaran online untuk penyedia jasa konstruksi, pelaporan kemajuan proyek secara real-time, serta akses mudah bagi masyarakat untuk memantau perkembangan proyek. Inovasi ini diharapkan dapat mengurangi birokrasi yang seringkali memperlambat proses dan menghilangkan potensi celah korupsi. Selain itu, sistem ini juga bertujuan untuk meningkatkan kualitas dan kepatuhan terhadap standar konstruksi yang berlaku.

Bupati Bandung Barat, menyambut positif peluncuran SIPJK ini dan berharap sistem ini akan menjadi model bagi daerah lain dalam penerapan teknologi informasi untuk sektor publik. Inisiatif ini merupakan bagian dari komitmen pemerintah daerah untuk mendukung pembangunan yang lebih transparan, efektif, dan berkelanjutan di Kabupaten Bandung Barat.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Transformasi Digital di Kabupaten Bandung Barat: Sistem Informasi Pembina Jasa Konstruksi Hadir untuk Memperbaiki Pengelolaan Konstruksi',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita4.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Dalam upaya untuk mendigitalkan dan menyempurnakan pengelolaan konstruksi, Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK). Inisiatif ini bertujuan untuk memperbaiki efisiensi, transparansi, dan akuntabilitas dalam administrasi proyek konstruksi di wilayahnya. SIPJK diharapkan akan membawa perubahan signifikan dalam cara proyek konstruksi dikelola dan diawasi.

Sistem ini dilengkapi dengan berbagai fitur canggih yang memungkinkan pendaftaran dan pemantauan proyek secara online, serta pelaporan kemajuan yang dapat diakses secara real-time. Dengan penerapan SIPJK, diharapkan proses administrasi yang selama ini rumit dan memakan waktu dapat dipercepat, serta mengurangi potensi terjadinya penyimpangan atau praktik korupsi. Selain itu, sistem ini memberikan kemudahan bagi masyarakat untuk mendapatkan informasi yang transparan mengenai status proyek-proyek konstruksi.

Bupati Bandung Barat, menyatakan bahwa peluncuran SIPJK adalah langkah penting dalam transformasi digital pemerintah daerah. Ia berharap sistem ini tidak hanya akan meningkatkan kualitas pengelolaan konstruksi tetapi juga dapat menjadi acuan bagi daerah lain dalam menerapkan teknologi untuk sektor publik. Peluncuran ini merupakan bagian dari komitmen pemerintah daerah untuk mendukung pembangunan yang lebih terintegrasi dan berkelanjutan.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Perkenalkan Sistem Informasi Pembina Jasa Konstruksi untuk Mendukung Pembangunan Berkelanjutan',
    'author' => rand(1,1000),
    'gambar' => '/assets/library/berita/berita5.jpg',
    'keterangan' => 'Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah terobosan digital yang bertujuan untuk mendukung pembangunan berkelanjutan di wilayah tersebut. Sistem ini dirancang untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam pengelolaan proyek konstruksi, serta memastikan bahwa semua kegiatan pembangunan mengikuti standar yang telah ditetapkan.

SIPJK menawarkan berbagai fitur inovatif, termasuk pendaftaran online untuk penyedia jasa konstruksi, pemantauan proyek secara real-time, dan pelaporan kemajuan yang mudah diakses. Dengan adanya sistem ini, diharapkan akan terjadi penurunan birokrasi dan praktik korupsi yang seringkali menghambat proses konstruksi. Sistem ini juga bertujuan untuk memberikan kemudahan akses informasi kepada masyarakat, sehingga meningkatkan keterlibatan publik dalam proses pembangunan.

Bupati Bandung Barat, menegaskan bahwa peluncuran SIPJK adalah langkah strategis dalam upaya mendukung pembangunan yang lebih berkelanjutan dan terencana. Ia berharap sistem ini dapat menjadi contoh bagi daerah lain dalam penerapan teknologi untuk pengelolaan sektor publik dan memajukan kualitas serta transparansi dalam proyek-proyek konstruksi.',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =================================== ===================================== ===========================
layanankami::create([
    'gambar' => '/assets/library/layanankami/slf.jpg',
    'program' => 'Sertifikat Laik Fungsi',
    'keterangan' => 'Sertifikat Laik Fungsi Untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/pbg.jpg',
    'program' => 'PBG',
    'keterangan' => 'Persetujuan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/inspeksilapangan.jpg',
    'program' => 'Inspeksi Lapangan',
    'keterangan' => 'Inspeksi Lapangan Untuk Konstruksi Di Lapangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


layanankami::create([
    'gambar' => '/assets/library/layanankami/pemeliharaanperbaikan.jpg',
    'program' => 'Pemeliharaan Perbaikan',
    'keterangan' => 'Pemeliharaan Perbaikan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/penyediamaterial.jpg',
    'program' => 'Penyediaan Material',
    'keterangan' => 'Penyediaan Material untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
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
