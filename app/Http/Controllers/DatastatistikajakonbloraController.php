<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultansub;

use App\Models\skktenagakerjablora;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\tertibjakon;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\tertibjasakonstruksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DatastatistikajakonbloraController extends Controller
{
    //

    public function databujk()
    {
        $user = Auth::user();

        $datakontraktor = bujkkontraktor::count();
        $datakonsultan = bujkkonsultan::count();
        $total = $datakontraktor + $datakonsultan;

        // Menghitung persentase
        $persen_kontraktor = $total > 0 ? ($datakontraktor / $total) * 100 : 0;
        $persen_konsultan = $total > 0 ? ($datakonsultan / $total) * 100 : 0;

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikabujk', [
            'title' => 'Data Statistika BUJK Konstruksi & Konsultasi Konstruksi',
            'user' => $user,
            'datakontraktor' => $datakontraktor,
            'datakonsultan' => $datakonsultan,
            'persen_kontraktor' => $persen_kontraktor,
            'persen_konsultan' => $persen_konsultan,
        ]);
    }

    public function statistikaskktenagakerjablora()
    {
        $user = Auth::user();

        $data = skktenagakerjablora::count();

        // Ambil total jumlah tenaga kerja per jabatan
        $jumlahData = skktenagakerjablora::select('jabatankerja_id')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jabatankerja_id')
            ->get()
            ->pluck('total', 'jabatankerja_id');

        // Hitung total semua tenaga kerja
        $totalTenagaKerja = $jumlahData->sum();

        // Buat array persentase berdasarkan jumlah tenaga kerja
        $persentaseJabatan = jabatankerja::whereIn('id', $jumlahData->keys())
            ->get()
            ->map(function ($jabatankerja) use ($jumlahData, $totalTenagaKerja) {
                $jumlah = $jumlahData[$jabatankerja->id] ?? 0;
                return [
                    'jabatan' => $jabatankerja->jabatankerja,
                    'persentase' => $totalTenagaKerja > 0 ? round(($jumlah / $totalTenagaKerja) * 100, 2) : 0
                ];
            });

            // ------------------

            $jumlahDatabaru = skktenagakerjablora::select('jabatankerja_id')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jabatankerja_id')
            ->get()
            ->pluck('total', 'jabatankerja_id');

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikaskktenagakerja', [
            'title' => 'Data Statistika SKK Tenaga Ahli Berdasarkan Jabatan Kerja',
            'user' => $user,
            'data' => $data,
            'persentaseJabatan' => $persentaseJabatan,
            'jumlahDatabaru' => $jumlahDatabaru, // Pastikan data ini dikirim ke view
        ]);
    }


    public function datastatistikaskktenagakerjablora()
{
    $dataskklist = skktenagakerjablora::all();
    $datacount = skktenagakerjablora::count();
    $totalData = $dataskklist->count();

    // Statistik Jenjang
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


    return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.statistiklisttenagakerjakonstruksi', [
        'title' => 'Data Statistik Tenaga Ahli Konstruksi',
        'statistikJenjang' => $statistikJenjang,
        'jumlahstatistikJenjang' => $jumlahstatistikJenjang,
        'statistikJabatanKerja' => $statistikJabatanKerja,
        'datacount' => $datacount,

    ]);
}

public function datajenjang1()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 1)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.01_jenjang1', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}

public function datajenjang2()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 2)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.02_jenjang2', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}


// ========== DATA JENJANG 3 =================================
public function datajenjang3()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 3)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.03_jenjang3', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}


// ========== DATA JENJANG 4 =================================
public function datajenjang4()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 4)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.04_jenjang4', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}

// ========== DATA JENJANG 5 =================================
public function datajenjang5()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 5)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.05_jenjang5', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}

// ========== DATA JENJANG 6 =================================
public function datajenjang6()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 6)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.06_jenjang6', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}


// ========== DATA JENJANG 7 =================================
public function datajenjang7()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 7)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.07_jenjang7', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}



// ========== DATA JENJANG 8 =================================
public function datajenjang8()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 7)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.08_jenjang8', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}



// ========== DATA JENJANG 9 =================================
public function datajenjang9()
{
    $dataskklist = skktenagakerjablora::where('jenjang_id', 7)->get();
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Filter the data where jenjang_id is 1

    // Extract jabatankerja data grouped by jabatankerja_id
    $datastatistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($dataskklist) {
        // Get the jabatankerja name (you may need to adjust based on your data structure)
        $datajabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();

        // Calculate the percentage based on the total number of records for jenjang_id = 1
        $totalData = $dataskklist->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'datajabatankerja' => $datajabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
    })->values();  // Reindex the array after map

    //STATISTIKA JENJANG
    $statistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjablora::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjablora::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.09_jenjang9', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datastatistikJabatanKerja' => $datastatistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
            'jumlahstatistikJenjang' => $jumlahstatistikJenjang,

        ]);
}



public function tertibjakonblora()
{
    $user = Auth::user();

    // Mengambil jumlah data dari masing-masing tabel
    $datajakon = tertibjasakonstruksi::count();
    $datapemanfaatan = tertibjakonpemanfaatan::count();
    $datapenyelenggaraan = tertibjakonpenyelenggaraan::count();

    // Menghitung total data keseluruhan
    $totalData = $datajakon + $datapemanfaatan + $datapenyelenggaraan;

    // Menghindari pembagian dengan nol
    if ($totalData > 0) {
        $persenJakon = ($datajakon / $totalData) * 100;
        $persenPemanfaatan = ($datapemanfaatan / $totalData) * 100;
        $persenPenyelenggaraan = ($datapenyelenggaraan / $totalData) * 100;
    } else {
        $persenJakon = $persenPemanfaatan = $persenPenyelenggaraan = 0;
    }

    return view('frontend.05_pengawasan.03_tertibjakon.00_datastatistika.index', [
        'title' => 'Data Statistika Tertib Jasa Konstruksi',
        'user' => $user,
        'datajakon' => $datajakon,
        'datapemanfaatan' => $datapemanfaatan,
        'datapenyelenggaraan' => $datapenyelenggaraan,
        'totalData' => $totalData,
        'persenJakon' => round($persenJakon, 2), // Dibulatkan ke 2 desimal
        'persenPemanfaatan' => round($persenPemanfaatan, 2),
        'persenPenyelenggaraan' => round($persenPenyelenggaraan, 2),
    ]);
}

public function statistiktertibusahajakon()
{
    $user = Auth::user();

    // Menghitung jumlah total data
    $totalData = tertibjasakonstruksi::count();

    // Menghitung jumlah data berdasarkan penyedia status dengan join ke tabel penyediastatustertibjakon
    $dataByStatus = tertibjasakonstruksi::select('penyediastatustertibjakon.penyedia', DB::raw('count(*) as jumlah'))
        ->join('penyediastatustertibjakon', 'tertibjasakonstruksi.penyediastatustertibjakon_id', '=', 'penyediastatustertibjakon.id')
        ->groupBy('penyediastatustertibjakon.penyedia')
        ->get();

    // Menghitung persentase tiap kategori
    $persentaseData = [];
    foreach ($dataByStatus as $data) {
        $persentaseData[$data->penyedia] = ($totalData > 0) ? round(($data->jumlah / $totalData) * 100, 2) : 0;
    }

    return view('frontend.05_pengawasan.03_tertibjakon.00_datastatistika.01_tertibusaha', [
        'title' => 'Data Statistika Tertib Usaha Jasa Konstruksi',
        'persentaseData' => $persentaseData,
        'user' => $user,
    ]);
}





}
