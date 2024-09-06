<?php

namespace App\Http\Controllers;

use App\Models\keputusanmenteri;
use Illuminate\Http\Request;


use App\Models\peraturan; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
// Pastikan namespace model sesuai dengan struktur direktori
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\permenteri;
use App\Models\suratedaran;
use App\Models\referensi;
use App\Models\pergubernur;
use App\Models\suratkeputusan;

class PeraturanController extends Controller
{
    // BACKEND DATABASE UNDANG UNDANG 
    public function undangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.01_undangundang.index', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // FRONTEND  DATABASE UNDANG UNDANG 

    public function feundangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.01_undangundang', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }


    // -------------------- UPDATE DATA UNDANG UNDANG JASA KONSTRUKSI ----------------------
    public function updateundangundang()
    {
        // $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        // return view('frontend.11_peraturan.01_undangundang', [
        //     'title' => 'Undang - Undang Jasa Konstruksi',
        //     'data' => $data, // Mengirimkan data paginasi ke view
        // ]);
    }



    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PEMERINTAH 


    public function pemerintah()
    {
        $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.02_pemerintah.index', [
            'title' => 'Peraturan Pemerintah',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND  DATABASE PEMERINTAH 
    
        public function fepemerintah()
        {
            $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination
    
            return view('frontend.11_peraturan.02_peraturanpemerintah', [
                'title' => 'Peraturan Pemerintah',
                'data' => $data, // Mengirimkan data paginasi ke view
            ]);
        }


    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PRESIDEN 

    public function presiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.03_presiden.index', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    
    // FRONTEND DATABASE PRESIDEN 
    
    public function fepresiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.03_peraturanpresiden', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    

    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE MENTERI  

    public function menteri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.04_menteri.index', [
            'title' => 'Peraturan Menteri PUPR',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND DATABASE MENTERI  
    public function fementeri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.04_peraturanmenteri', [
            'title' => 'Peraturan Menteri PUPR Tentang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
            
    public function menterishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.04_menteri.show', [
                    'data' => $data,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
    
            public function fementerishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.04_peraturanmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
            
 
    public function skmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('backend.14_peraturan.05_skmenteri.index', [
                    'title' => 'Surat Keputusan Menteri',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

              
            public function skmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.05_skmenteri.show', [
                    'data' => $data,
                    'title' => 'Details Data SK Peraturan Menteri',
                ]);
            }

            
public function feskmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.05_keputusanmenteri', [
                    'title' => 'Surat Keputusan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function feskmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.05_keputusanmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Keputusan Menteri',
                ]);
            }
            
            
public function suratedaranmenteri()
            {
                $data= suratedaran::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.06_suratedaranmenteri', [
                    'title' => 'Surat Edatan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function suratedaranmenterishowByJudul($judul)
            {
                $data = suratedaran::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.06_suratedaranmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Surat Edaran Menteri',
                ]);
            }

public function fereferensi()
            {
                $data= referensi::all(); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.07_suratreferensi', [
                    'title' => 'Surat Referensi Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }
            
    public function feperdaerah()
            {
                $data= perdaerah::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.08_peraturandaerah', [
                    'title' => 'Peraturan Daerah Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }
            
    
            public function feperdaerahshowByJudul($judul)
            {
                $data = perdaerah::where('judul', $judul)->firstOrFail();
                
                return view('frontend.11_peraturan.08_peraturandaerahshow', [
                    'data' => $data,
                    'title' => 'Details Peraturan Daerah Jasa Konstruksi',
                ]);
            }

    public function fegubernur()
                        {
                            $data= pergubernur::all(); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.09_peraturangubernur', [
                                'title' => 'Peraturan Gubernur Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
          
    public function feperbupatiwalikota()
                        {
                            $data= perbupatiwalikota::paginate(15); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.10_peraturanwalikota', [
                                'title' => 'Peraturan Bupati/Walikota Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function feperbupatiwalikotashowByJudul($judul)
                        {
                            $data = perbupatiwalikota::where('judul', $judul)->firstOrFail();
                            
                            return view('frontend.11_peraturan.10_peraturanwalikotashow', [
                                'data' => $data,
                                'title' => 'Details Peraturan Bupati/Walikota Jasa Konstruksi',
                            ]);
                        }
                    
    public function fesuratkeputusan()
                        {
                            $data= suratkeputusan::paginate(15); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.11_suratkeputusan', [
                                'title' => 'Surat Keputusan Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function fesuratkeputusanshowByJudul($judul)
                        {
                            $data = suratkeputusan::where('judul', $judul)->firstOrFail();
                            
                            return view('frontend.11_peraturan.11_suratkeputusanshow', [
                                'data' => $data,
                                'title' => 'Details Surat Keputusan Jasa Konstruksi',
                            ]);
                        }
                    
            
}
