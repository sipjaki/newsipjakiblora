<?php

namespace App\Http\Controllers;

use App\Models\keterampilanpekerja;
use App\Models\pengawasanlokasi;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File; // Pastikan ini ada
use Illuminate\Support\Facades\Storage; // Jika Anda menggunakan Storage juga

// use Carbon\Carbon;
use Carbon\Carbon; 

use App\Models\Tukangterampil; // Pastikan namespace model sesuai dengan struktur direktori

class SkktenagakerjaController extends Controller
{
   
    public function index()
    {
        // Mengambil data dengan pagination
        $data = Tukangterampil::paginate(15);
        $totalData = Tukangterampil::count();

        // Mengambil semua data untuk mendapatkan kecamatan unik
        $allKecamatan = Tukangterampil::all();
        
        // Menggunakan koleksi untuk mendapatkan nilai unik
        $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();
    
        // Mengirimkan data ke view
        return view('backend.04_skk.01_skk.index', [
            'title' => 'SKK Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data kecamatan unik ke view
            'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
        ]);
    }
    
    
    public function showByName($nama)
    {
        $item = Tukangterampil::where('nama', $nama)->firstOrFail();

        return view('backend.04_skk.01_skk.show', [
            'data' => $item,
            'title' => 'Detail SKK Tenaga Kerja',
        ]);
    }

public function feskktenagakerja()
    {
        
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();

        return view('frontend.04_tenagakerja.01_skaskt', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
        ]);
    }

public function listkecamatan()
    {
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();

        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Kecamatan | Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
            
        ]);
    }

    public function feskktenagakerjashowByName($nama)
    {
        $item = Tukangterampil::where('nama', $nama)->firstOrFail();

        return view('frontend.04_tenagakerja.01_skasktshow', [
            'data' => $item,
            'title' => 'Detail SKK Tenaga Kerja',
        ]);
    }

    public function feskktenagakerjakecamatanshowBykecamatan(Request $request)
    {
        $totalData = Tukangterampil::count();
        // Mengambil parameter 'judul' dari query string
        $judul = $request->query('judul');
        
        // Memfilter data berdasarkan kecamatan jika 'judul' ada
        if ($judul) {
            $data = Tukangterampil::where('kecamatan', $judul)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }

        // Mengambil nilai unik dari atribut 'kecamatan'
        $data_kecamatan = Tukangterampil::select('kecamatan')
            ->distinct()
            ->pluck('kecamatan');

        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Kecamatan | SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_kecamatan' => $data_kecamatan, // Mengirimkan data kecamatan unik ke view
            'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
        ]);
    }

public function listdesa()
    {
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datadesa = $allKecamatan->pluck('desa')->unique();

        return view('frontend.04_tenagakerja.01_skasktalldatadesa', [
            'title' => 'Desa | Data Tenaga Kerja',
            'data' => $data,
            'data_desa' => $datadesa, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
        ]);
    }

    public function feskktenagakerjadesashowBydesa(Request $request)
    {
        $totalData = Tukangterampil::count();

        // Mengambil parameter 'judul' dari query string
        $judul = $request->query('judul');
        
        // Memfilter data berdasarkan kecamatan jika 'judul' ada
        if ($judul) {
            $data = Tukangterampil::where('desa', $judul)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }

        // Mengambil nilai unik dari atribut 'kecamatan'
        $data_desa= Tukangterampil::select('desa')
            ->distinct()
            ->pluck('desa');

        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldatadesashow', [
            'title' => 'Desa | SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_desa' => $data_desa, // Mengirimkan data kecamatan unik ke view
            'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
        ]);
    }


public function listketerampilan()
    {
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $dataketerampilan = $allKecamatan->pluck('keterampilan')->unique();

        return view('frontend.04_tenagakerja.01_skasktalldataketerampilan', [
            'title' => 'Keterampilan | Data Tenaga Kerja',
            'data' => $data,
            'data_keterampilan' => $dataketerampilan, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
        ]);
    }
 
    
    public function feskktenagakerjaketerampilanshowByketerampilan(Request $request)
    {

        $totalData = Tukangterampil::count();
        // Mengambil parameter 'judul' dari query string
        $judul = $request->query('judul');
        
        // Memfilter data berdasarkan kecamatan jika 'judul' ada
        if ($judul) {
            $data = Tukangterampil::where('keterampilan', $judul)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }

        // Mengambil nilai unik dari atribut 'kecamatan'
        $data_keterampilan= Tukangterampil::select('keterampilan')
            ->distinct()
            ->pluck('keterampilan');

        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldataketerampilanshow', [
            'title' => 'Keterampilan| SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_keterampilan' => $data_keterampilan, // Mengirimkan data kecamatan unik ke view
            'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
        ]);
    }

    
public function listregister()
{
    $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
    $totalData = Tukangterampil::count();

      // Mengambil semua data untuk mendapatkan kecamatan unik
      $allKecamatan = Tukangterampil::all();
    
      // Menggunakan koleksi untuk mendapatkan nilai unik
      $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

    return view('frontend.04_tenagakerja.01_skasktalldataregister', [
        'title' => 'Bimtek | Data Tenaga Kerja',
        'data' => $data,
        'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan data paginasi ke view
    ]);
}


        public function feskktenagakerjabimtekshowBybimtek(Request $request)
        {

            $totalData = Tukangterampil::count();

            // Mengambil parameter 'judul' dari query string
            $judul = $request->query('judul');
            
            // Memfilter data berdasarkan kecamatan jika 'judul' ada
            if ($judul) {
                $data = Tukangterampil::where('tahun_bimtek', $judul)->paginate(15);
            } else {
                // Ambil semua data jika tidak ada parameter
                $data = Tukangterampil::paginate(15);
            }

            // Mengambil nilai unik dari atribut 'kecamatan'
            $data_tahunbimtek= Tukangterampil::select('tahun_bimtek')
                ->distinct()
                ->pluck('tahun_bimtek');

            // Mengirim data ke view
            return view('frontend.04_tenagakerja.01_skasktalldatatahunbimtekshow', [
                'title' => 'Tahun Bimtek | SKK Tenaga Kerja',
                'data' => $data, // Mengirimkan data yang difilter atau semua data
                'data_tahun_bimtek' => $data_tahunbimtek, // Mengirimkan data kecamatan unik ke view
                'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
            ]);
        }

                
        public function liststatistika()
        {
    
    // ----------------------------------------------------------------------------------------
          // DATA TAHUN BIMTEK PERSENTASE 
          $data_keterampilan = Tukangterampil::select('keterampilan')
          ->selectRaw('count(*) as total')
          ->groupBy('keterampilan')
          ->get();

      // Hitung total keseluruhan dari semua kategori
      $total_count = $data_keterampilan->sum('total');

      // Format data untuk grafik dengan persentase
      $data_for_chart_keterampilan = $data_keterampilan->map(function ($item) use ($total_count) {
          return [
              'y' => ($item->total / $total_count) * 100, // Hitung persentase
              'name' => $item->keterampilan,
          ];
      });
      // ----------------------------------------------------------------------------------------
            // DATA CHART BERDASARKAN KECAMATAN 
            $data_kecamatan = Tukangterampil::select('kecamatan')
            ->selectRaw('count(*) as total')
            ->groupBy('kecamatan')
            ->get();

                // Format data untuk grafik
                $data_for_chart_kecamatan = $data_kecamatan->map(function ($item) {
                    return [
                        'y' => $item->total,
                        'name' => $item->kecamatan,
                    ];
                });
    
        // ----------------------------------------------------------------------------------------
            // DATA CHART BERDASARKAN DESA
            $data_desa = Tukangterampil::select('desa')
            ->selectRaw('count(*) as total')
            ->groupBy('desa')
            ->get();

                // Format data untuk grafik
                $data_for_chart_desa = $data_desa->map(function ($item) {
                return [
                    'y' => $item->total,
                    'label' => $item->desa,
                ];
                });

        // ----------------------------------------------------------------------------------------
                // DATA TAHUN BIMTEK PERSENTASE 
                $data_tahun_bimtek = Tukangterampil::select('tahun_bimtek')
                ->selectRaw('count(*) as total')
                ->groupBy('tahun_bimtek')
                ->get();

            // Hitung total keseluruhan dari semua kategori
            $total_count = $data_tahun_bimtek->sum('total');

            // Format data untuk grafik dengan persentase
            $data_for_chart_tahun_bimtek = $data_tahun_bimtek->map(function ($item) use ($total_count) {
                return [
                    'y' => ($item->total / $total_count) * 100, // Hitung persentase
                    'name' => $item->tahun_bimtek,
                ];
            });

            // ----------------------------------------------------------------------------------------
            
            // DATA BERDASARKAN USIA 
                // $data_usia = skktenagakerja::select('usia')
                // ->selectRaw('count(*) as total')
                // ->groupBy('usia')
                // ->get();

            // Hitung total keseluruhan dari semua kategori
            // $total_count = $data_usia->sum('total');

            // Format data untuk grafik dengan persentase
            // $data_for_chart_usia = $data_usia->map(function ($item) use ($total_count) {
            //     return [
            //         'y' => ($item->total / $total_count) * 100, // Hitung persentase
            //         'name' => $item->usia,
            //     ];
            // });

            // ----------------------------------------------------------------------------------------
             // Ambil data usia dari database
                $data_usia = Tukangterampil::select('usia')->get();

                // Hitung usia berdasarkan tanggal lahir
                $usiaArray = $data_usia->map(function ($item) {
                    try {
                        // Asumsi 'usia' adalah tanggal lahir dalam format yang dapat diparse oleh Carbon
                        $tanggalLahir = Carbon::parse($item->usia);
                        return $tanggalLahir->diffInYears(Carbon::now());
                    } catch (\Exception $e) {
                        // Jika ada error parsing, anggap usia sebagai 0
                        return 0;
                    }
                });

                // Kelompokkan usia dan hitung jumlah setiap kelompok
                $usiaCounts = $usiaArray->countBy();

                // Hitung total keseluruhan dari semua kategori usia
                $total_count = $usiaCounts->sum();

                // Format data untuk grafik dengan persentase
                $data_for_chart_usia = $usiaCounts->map(function ($total, $usia) use ($total_count) {
                    return [
                        'y' => ($total / $total_count) * 100, // Hitung persentase
                        'name' => (string) $usia, // Nama usia sebagai label
                    ];
                })->values(); 

            // ----------------------------------------------------------------------------------------

            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            // Mengambil semua data untuk mendapatkan kecamatan unik
            //   $allKecamatan = skktenagakerja::all();
            
            // Menggunakan koleksi untuk mendapatkan nilai unik
            //   $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

            return view('frontend.04_tenagakerja.statistika.index', [
                'title' => 'Statistika | Data Tenaga Kerja',
                'data' => $data,
                'data_keterampilan' => $data_keterampilan,
                'data_for_chart_keterampilan' => $data_for_chart_keterampilan->toJson(), // Kirim data dalam format JSON
                'data_for_chart_kecamatan' => $data_for_chart_kecamatan->toJson(), // Kirim data dalam format JSON
                'data_for_chart_desa' => $data_for_chart_desa->toJson(),
                'data_for_chart_tahun_bimtek' => $data_for_chart_tahun_bimtek->toJson(), // Kirim data dalam format JSON
                'data_for_chart_usia' => $data_for_chart_usia, // Kirim data dalam format JSON
                'judulstatistika' => 'Distribusi Keterampilan', // Judul grafik
                'judulkecamatan' => 'Distribusi Kecamatan', // Judul grafik
                'judultahunbimtek' => 'Distribusi Registrasi Para Pekerja Tukang Terampil', // Judul grafik
                'judulusia' => 'Distribusi Pekerja Berdasarkan Usia', // Judul grafik
                'juduldesa' => 'Distribusi Desa', // Judul grafik
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }



        // ========================================================================================================
        // ========================================================================================================
        // ========================================================================================================
                
        public function chartketerampilan()
        {
    
    // ----------------------------------------------------------------------------------------
          // DATA TAHUN BIMTEK PERSENTASE 
          $data_keterampilan = Tukangterampil::select('keterampilan')
          ->selectRaw('count(*) as total')
          ->groupBy('keterampilan')
          ->get();

      // Hitung total keseluruhan dari semua kategori
      $total_count = $data_keterampilan->sum('total');

      // Format data untuk grafik dengan persentase
      $data_for_chart_keterampilan = $data_keterampilan->map(function ($item) use ($total_count) {
          return [
              'y' => ($item->total / $total_count) * 100, // Hitung persentase
              'name' => $item->keterampilan,
          ];
      });
      
             
            // ----------------------------------------------------------------------------------------

            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            // Mengambil semua data untuk mendapatkan kecamatan unik
            //   $allKecamatan = skktenagakerja::all();
            
            // Menggunakan koleksi untuk mendapatkan nilai unik
            //   $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

            return view('frontend.04_tenagakerja.statistika.chartketerampilan', [
                'title' => 'Keterampilan | Data Tenaga Kerja',
                'data' => $data,
                'data_keterampilan' => $data_keterampilan,
                'data_for_chart_keterampilan' => $data_for_chart_keterampilan->toJson(), // Kirim data dalam format JSON
                'judulketerampilan' => 'Distribusi Data Berdasarkan Keterampilan', 
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }
    
        
        public function chartkecamatan()
        {
    
      // ----------------------------------------------------------------------------------------
            // DATA CHART BERDASARKAN KECAMATAN 
            $data_kecamatan = Tukangterampil::select('kecamatan')
            ->selectRaw('count(*) as total')
            ->groupBy('kecamatan')
            ->get();

                // Format data untuk grafik
                $data_for_chart_kecamatan = $data_kecamatan->map(function ($item) {
                    return [
                        'y' => $item->total,
                        'name' => $item->kecamatan,
                    ];
                });
    
    
            // ----------------------------------------------------------------------------------------

            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            // Mengambil semua data untuk mendapatkan kecamatan unik
            //   $allKecamatan = skktenagakerja::all();
            
            // Menggunakan koleksi untuk mendapatkan nilai unik
            //   $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

            return view('frontend.04_tenagakerja.statistika.chartkecamatan', [
                'title' => 'Kecamatan | Data Tenaga Kerja',
                'data' => $data,
                'data_for_chart_kecamatan' => $data_for_chart_kecamatan->toJson(), // Kirim data dalam format JSON
                'judulkecamatan' => 'Distribusi Kecamatan', // Judul grafik
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }


          
        public function chartdesa()
        {
        // ----------------------------------------------------------------------------------------
            // DATA CHART BERDASARKAN DESA
            $data_desa = Tukangterampil::select('desa')
            ->selectRaw('count(*) as total')
            ->groupBy('desa')
            ->get();

                // Format data untuk grafik
                $data_for_chart_desa = $data_desa->map(function ($item) {
                return [
                    'y' => $item->total,
                    'label' => $item->desa,
                ];
                });

        // ----------------------------------------------------------------------------------------
    
            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            // Mengambil semua data untuk mendapatkan kecamatan unik
            //   $allKecamatan = skktenagakerja::all();
            
            // Menggunakan koleksi untuk mendapatkan nilai unik
            //   $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

            return view('frontend.04_tenagakerja.statistika.chartdesa', [
                'title' => 'Desa | Data Tenaga Kerja',
                'data' => $data,
                'data_for_chart_desa' => $data_for_chart_desa->toJson(),
                'juduldesa' => 'Distribusi Desa', // Judul grafik
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }

        
        public function chartregister()
        {
    
        // ----------------------------------------------------------------------------------------
                // DATA TAHUN BIMTEK PERSENTASE 
                $data_tahun_bimtek = Tukangterampil::select('tahun_bimtek')
                ->selectRaw('count(*) as total')
                ->groupBy('tahun_bimtek')
                ->get();

            // Hitung total keseluruhan dari semua kategori
            $total_count = $data_tahun_bimtek->sum('total');

            // Format data untuk grafik dengan persentase
            $data_for_chart_tahun_bimtek = $data_tahun_bimtek->map(function ($item) use ($total_count) {
                return [
                    'y' => ($item->total / $total_count) * 100, // Hitung persentase
                    'name' => $item->tahun_bimtek,
                ];
            });

            // ----------------------------------------------------------------------------------------

            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            // Mengambil semua data untuk mendapatkan kecamatan unik
            //   $allKecamatan = skktenagakerja::all();
            
            // Menggunakan koleksi untuk mendapatkan nilai unik
            //   $datatahunbimtek = $allKecamatan->pluck('tahun_bimtek')->unique();

            return view('frontend.04_tenagakerja.statistika.chartregister', [
                'title' => 'Statistika | Data Tenaga Kerja',
                'data' => $data,
                'data_for_chart_tahun_bimtek' => $data_for_chart_tahun_bimtek->toJson(), // Kirim data dalam format JSON
                'judultahunbimtek' => 'Distribusi Registrasi Para Pekerja Tukang Terampil', // Judul grafik
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }

        
        public function penanggungjawabteknis()
        {
           
            // Mengirimkan data ke view
            return view('frontend.04_tenagakerja.penanggungjawabteknis.index', [
                'title' => 'Penanggung Jawab Teknis',
            ]);
        }
        
        public function timpembinajasakonstruksi()
        {
           
            // Mengirimkan data ke view
            return view('frontend.04_tenagakerja.timpembina.index', [
                'title' => 'Tim Pembina Jasa Konstruksi',
            ]);
        }
        
// ============================================================================        // 
    
                // -------------------- UPDATE DATA TENAGA KERJA JASA KONSTRUKSI  ----------------------
                public function updatetenagakerja($nama)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $datatukangterampil = Tukangterampil::where('nama', $nama)->firstOrFail();
                    $datapengawasanlokasi = pengawasanlokasi::all();
                    $datatahunpilihan = tahunpilihan::all();
                    $dataketerampilan = keterampilanpekerja::all();
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.04_skk.01_skk.update', [
                        'datatukangterampil' => $datatukangterampil,
                        'datapengawasanlokasi' => $datapengawasanlokasi,
                        'datatahunpilihan' => $datatahunpilihan,
                        'dataketerampilan' => $dataketerampilan,
                    
                        'title' => 'Update Data Pekerja'
                    ]);
                }
                
                // -------------------- CREATE UPDATE TENAGA KERJA JASA KONSTRUKSI ----------------------
                public function createupdatetenagakerja(Request $request, $nama)
                {
                    // Validasi input
                    $request->validate([
                        'nama' => 'required|string|max:255',
                        'pengawasanlokasi_id' => 'required|string|max:255',
                        'keterampilanpekerja_id' => 'required|string|max:255',
                        'tahunpilihan_id' => 'required|string|max:255',
                        'desa' => 'required|string|max:255',
                        'alamat' => 'required|string|max:255',
                        'tanggal_lahir' => 'required|date',
                        'nik' => 'required|string|max:255',
                        'kualifikasi' => 'required|string|max:255',
                        'registrasi' => 'required|string|max:255',
                        'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
                    ]);
                
                    // Cari data tukang terampil berdasarkan nama
                    $datatukangterampil = Tukangterampil::where('nama', $nama)->firstOrFail();
                
                    // Path folder penyimpanan
                    $storagePath = storage_path('app/public/skktenagakerja/profil');
                
                    // Cek dan buat folder jika tidak ada
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }
                
                    // Simpan file foto dan ambil path-nya
                    $filePath = $datatukangterampil->foto; // Default ke foto yang ada jika tidak ada file baru
                    if ($request->hasFile('foto')) {
                        $file = $request->file('foto');
                        $filePath = $file->store('skktenagakerja/profil', 'public');
                    }
                
                    // Update data tukang terampil dengan data dari form
                    $datatukangterampil->update([
                        'nama' => $request->input('nama'),
                        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                        'keterampilanpekerja_id' => $request->input('keterampilanpekerja_id'),
                        'tahunpilihan_id' => $request->input('tahunpilihan_id'),
                        'desa' => $request->input('desa'),
                        'alamat' => $request->input('alamat'),
                        'tanggal_lahir' => $request->input('tanggal_lahir'),
                        'nik' => $request->input('nik'),
                        'kualifikasi' => $request->input('kualifikasi'),
                        'registrasi' => $request->input('registrasi'),
                        'foto' => $filePath, // Menggunakan variabel filePath yang benar
                    ]);
                
                    // Flash pesan session
                    session()->flash('update', 'Data Tenaga Kerja Berhasil Diupdate!');
                
                    // Redirect ke halaman yang sesuai
                    return redirect('/tenagakerja');
                }
                

        
}


