<?php

namespace App\Http\Controllers;

use App\Models\bulanrekap;
use App\Models\paketpekerjaanmasjaki;
use App\Models\paketstatuspekerjaan;
use App\Models\profiljenispekerjaan;
use App\Models\sumberdana;
use App\Models\tahunlulus;
use App\Models\tahunpilihan;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaketpekerjaanmasjakiController extends Controller
{
    //

    public function paketpekerjaanmasjaki(Request $request)
    {
        $perPage = $request->input('perPage', 15);
        $search = $request->input('search');

        $query = paketpekerjaanmasjaki::query();

        if ($search) {
            $query->where('namapekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                  ->orWhereHas('profiljenispekerjaan', function ($q) use ($search) {
                      $q->where('jenispekerjaan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('user', function ($q) use ($search) {
                      $q->where('name', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                      $q->where('tahunpilihan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('sumberdana', function ($q) use ($search) {
                      $q->where('sumberdana', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  });
        }


        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.partials.table', compact('data'))->render()
            ]);
        }


        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.index', [
            'title' => 'Profil Paket Pekerjaan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function paketpekerjaanshow($id)
    {
        // Pastikan model dan nama tabel sudah benar
        $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
        // $datasub = prosespaket::all();
        // if (!$datapaketpekerjaan) {
        //     // Jika data tidak ditemukan, arahkan kembali dengan pesan error
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = prosespaket::where('prosespaket_id', $datapaketpekerjaan->id)->paginate(5);

        // Ambil data user saat ini
        $user = Auth::user();

        // Kirim variabel ke view
        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.show', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'data' => $datapaketpekerjaan,
            'user' => $user,
            // 'datasub' => $datasub,
            // 'datasub' => $subdata,
            // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
        ]);
    }

    
public function bepaketpekerjaan(Request $request)
    {
        // ═══ PARAMETER FILTER ═══
        $perPage        = $request->input('perPage', 5);
        $search         = trim($request->input('search'));
        $statusFilter   = $request->input('status_pekerjaan');
        $tahunInput     = $request->input('tahun_input');
        $tahunpilihanId = $request->input('tahunpilihan_id');

        // ═══ QUERY UTAMA ═══
        $query = paketpekerjaanmasjaki::with([
            'profiljenispekerjaan',
            'paketstatuspekerjaan',
            'sumberdana',
            'tahunpilihan',
            'bulanrekap',
            'user'
        ]);

        // ═══ SEARCH ═══
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('namapekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                  ->orWhere('nib', 'LIKE', "%{$search}%")
                  ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
                  ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
                  ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
                  ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
                  ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
                  ->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                      $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                      $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('sumberdana', function ($q2) use ($search) {
                      $q2->where('sumberdana', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('tahunpilihan', function ($q2) use ($search) {
                      $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('user', function ($q2) use ($search) {
                      $q2->where('name', 'LIKE', "%{$search}%")
                         ->orWhere('username', 'LIKE', "%{$search}%");
                  });
            });
        }

        // ═══ FILTER ═══
        if (!empty($statusFilter)) {
            $query->where('paketstatuspekerjaan_id', $statusFilter);
        }
        if (!empty($tahunInput)) {
            $query->whereYear('created_at', $tahunInput);
        }
        if (!empty($tahunpilihanId)) {
            $query->where('tahunpilihan_id', $tahunpilihanId);
        }

        // ═══ ORDER + PAGINATE ═══
        $query->orderBy('created_at', 'desc');
        $data = $query->paginate($perPage);
        $data->appends($request->except('page'));

        // ═══ DROPDOWN DATA ═══
        // ═══════════════════════════════════════════════════════
        // SATUAN KERJA — HANYA user dengan statusadmin_id = 9 (dinas)
        // ═══════════════════════════════════════════════════════
        $user = User::whereHas('statusadmin', function ($q) {
            $q->where('id', 9);
        })->orderBy('name', 'asc')->get();

        $jenispekerjaan  = profiljenispekerjaan::all();
        $statuspekerjaan = paketstatuspekerjaan::whereIn('id', [1, 2, 3, 4])->get();
        $sumberdana      = sumberdana::all();
        $tahun           = tahunpilihan::all();
        $bulan           = bulanrekap::all();

        // ═══ CHART BAR STATUS PEKERJAAN ═══
        $chartStatus = paketstatuspekerjaan::whereIn('id', [1, 2, 3, 4])
            ->get()
            ->map(function ($s) {
                return [
                    'id'    => $s->id,
                    'label' => $s->paketstatuspekerjaan,
                    'count' => paketpekerjaanmasjaki::where('paketstatuspekerjaan_id', $s->id)->count(),
                ];
            });
        $chartMax = $chartStatus->max('count') ?: 1;

        // ═══ LIST TAHUN INPUT ═══
        $listTahunInput = paketpekerjaanmasjaki::selectRaw('YEAR(created_at) as tahun, COUNT(*) as total')
            ->whereNotNull('created_at')
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderByDesc('tahun')
            ->get();

        // ═══ LIST TAHUN PILIHAN ═══
        $listTahunPilihan = tahunpilihan::select('id', 'tahunpilihan')
            ->get()
            ->map(function ($t) {
                return [
                    'id'           => $t->id,
                    'tahunpilihan' => $t->tahunpilihan,
                    'count'        => paketpekerjaanmasjaki::where('tahunpilihan_id', $t->id)->count(),
                ];
            });

        // ═══ CHART LINE — 4 LINE per STATUS × TAHUN ═══
        $tahunList = tahunpilihan::orderBy('tahunpilihan', 'asc')->get();
        $chartLine = [
            'labels'   => $tahunList->pluck('tahunpilihan')->values(),
            'datasets' => [],
        ];

        $lineColors = [
            1 => ['border' => '#ef4444', 'bg' => 'rgba(239, 68, 68, 0.15)'],
            2 => ['border' => '#f97316', 'bg' => 'rgba(249, 115, 22, 0.15)'],
            3 => ['border' => '#eab308', 'bg' => 'rgba(234, 179, 8, 0.15)'],
            4 => ['border' => '#13A847', 'bg' => 'rgba(19, 168, 71, 0.15)'],
        ];

        foreach ($statuspekerjaan as $status) {
            $counts = [];
            foreach ($tahunList as $tahunItem) {
                $counts[] = paketpekerjaanmasjaki::where('paketstatuspekerjaan_id', $status->id)
                    ->where('tahunpilihan_id', $tahunItem->id)
                    ->count();
            }

            $color = $lineColors[$status->id] ?? ['border' => '#6c757d', 'bg' => 'rgba(108,117,125,0.15)'];

            $chartLine['datasets'][] = [
                'label'           => $status->paketstatuspekerjaan,
                'data'            => $counts,
                'borderColor'     => $color['border'],
                'backgroundColor' => $color['bg'],
            ];
        }

        // ═══ AJAX ═══
        if ($request->ajax()) {
            return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
        }

        // ═══ VIEW ═══
        return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
            'title'            => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data'             => $data,
            'perPage'          => $perPage,
            'search'           => $search,
            'statusFilter'     => $statusFilter,
            'tahunInput'       => $tahunInput,
            'tahunpilihanId'   => $tahunpilihanId,
            'user'             => $user,
            'jenispekerjaan'   => $jenispekerjaan,
            'statuspekerjaan'  => $statuspekerjaan,
            'sumberdana'       => $sumberdana,
            'tahun'            => $tahun,
            'bulan'            => $bulan,
            'chartStatus'      => $chartStatus,
            'chartMax'         => $chartMax,
            'chartLine'        => $chartLine,
            'listTahunInput'   => $listTahunInput,
            'listTahunPilihan' => $listTahunPilihan,
        ]);
    }

//   public function bepaketpekerjaan(Request $request)
//     {
//         // ═══ PARAMETER FILTER ═══
//         $perPage        = $request->input('perPage', 5);
//         $search         = trim($request->input('search'));
//         $statusFilter   = $request->input('status_pekerjaan');
//         $tahunInput     = $request->input('tahun_input');
//         $tahunpilihanId = $request->input('tahunpilihan_id');

//         // ═══ QUERY UTAMA ═══
//         $query = paketpekerjaanmasjaki::with([
//             'profiljenispekerjaan',
//             'paketstatuspekerjaan',
//             'sumberdana',
//             'tahunpilihan',
//             'bulanrekap',
//             'user'
//         ]);

//         // ═══ SEARCH ═══
//         if (!empty($search)) {
//             $query->where(function ($q) use ($search) {
//                 $q->where('namapekerjaan', 'LIKE', "%{$search}%")
//                   ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
//                   ->orWhere('nib', 'LIKE', "%{$search}%")
//                   ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
//                   ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
//                   ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
//                   ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
//                   ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
//                   ->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
//                       $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
//                   })
//                   ->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
//                       $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
//                   })
//                   ->orWhereHas('sumberdana', function ($q2) use ($search) {
//                       $q2->where('sumberdana', 'LIKE', "%{$search}%");
//                   })
//                   ->orWhereHas('tahunpilihan', function ($q2) use ($search) {
//                       $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
//                   })
//                   ->orWhereHas('user', function ($q2) use ($search) {
//                       $q2->where('name', 'LIKE', "%{$search}%")
//                          ->orWhere('username', 'LIKE', "%{$search}%");
//                   });
//             });
//         }

//         // ═══ FILTER STATUS PEKERJAAN ═══
//         if (!empty($statusFilter)) {
//             $query->where('paketstatuspekerjaan_id', $statusFilter);
//         }

//         // ═══ FILTER TAHUN INPUT ═══
//         if (!empty($tahunInput)) {
//             $query->whereYear('created_at', $tahunInput);
//         }

//         // ═══ FILTER TAHUN PILIHAN ═══
//         if (!empty($tahunpilihanId)) {
//             $query->where('tahunpilihan_id', $tahunpilihanId);
//         }

//         // ═══ ORDER + PAGINATE ═══
//         $query->orderBy('created_at', 'desc');
//         $data = $query->paginate($perPage);
//         $data->appends($request->except('page'));

//         // ═══ DROPDOWN DATA ═══
//         $user            = User::all();
//         $jenispekerjaan  = profiljenispekerjaan::all();
//         $statuspekerjaan = paketstatuspekerjaan::whereIn('id', [1, 2, 3, 4])->get();
//         $sumberdana      = sumberdana::all();
//         $tahun           = tahunpilihan::all();
//         $bulan           = bulanrekap::all();

//         // ═══ CHART STATUS PEKERJAAN ═══
//         $chartStatus = paketstatuspekerjaan::whereIn('id', [1, 2, 3, 4])
//             ->get()
//             ->map(function ($s) {
//                 return [
//                     'id'    => $s->id,
//                     'label' => $s->paketstatuspekerjaan,
//                     'count' => paketpekerjaanmasjaki::where('paketstatuspekerjaan_id', $s->id)->count(),
//                 ];
//             });

//         $chartMax = $chartStatus->max('count') ?: 1;

//         // ═══ LIST TAHUN INPUT ═══
//         $listTahunInput = paketpekerjaanmasjaki::selectRaw('YEAR(created_at) as tahun, COUNT(*) as total')
//             ->whereNotNull('created_at')
//             ->groupBy(DB::raw('YEAR(created_at)'))
//             ->orderByDesc('tahun')
//             ->get();

//         // ═══ LIST TAHUN PILIHAN ═══
//         $listTahunPilihan = tahunpilihan::select('id', 'tahunpilihan')
//             ->get()
//             ->map(function ($t) {
//                 return [
//                     'id'          => $t->id,
//                     'tahunpilihan'=> $t->tahunpilihan,
//                     'count'       => paketpekerjaanmasjaki::where('tahunpilihan_id', $t->id)->count(),
//                 ];
//             });

//         // ═══ AJAX ═══
//         if ($request->ajax()) {
//             return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
//         }

//         // ═══ CHART LINE — TREN PER TAHUN (tahunpilihan) ═══
// $chartLine = paketpekerjaanmasjaki::selectRaw('tahunpilihan_id, COUNT(*) as total')
//     ->whereNotNull('tahunpilihan_id')
//     ->groupBy('tahunpilihan_id')
//     ->orderBy('tahunpilihan_id', 'asc')
//     ->get()
//     ->map(function ($item) {
//         return [
//             'tahun_id'    => $item->tahunpilihan_id,
//             'tahun_label' => optional(tahunpilihan::find($item->tahunpilihan_id))->tahunpilihan ?? '-',
//             'count'       => $item->total,
//         ];
//     });

//         // ═══ VIEW ═══
//         return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
//             'title'            => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
//             'data'             => $data,
//             'perPage'          => $perPage,
//             'search'           => $search,
//             'statusFilter'     => $statusFilter,
//             'tahunInput'       => $tahunInput,
//             'tahunpilihanId'   => $tahunpilihanId,
//             'user'             => $user,
//             'jenispekerjaan'   => $jenispekerjaan,
//             'statuspekerjaan'  => $statuspekerjaan,
//             'sumberdana'       => $sumberdana,
//             'tahun'            => $tahun,
//             'bulan'            => $bulan,
//             'chartStatus'      => $chartStatus,
//             'chartMax'         => $chartMax,
//             'listTahunInput'   => $listTahunInput,
//             'listTahunPilihan' => $listTahunPilihan,
//              'chartLine' => $chartLine, 
//         ]);
//     }

    //   public function bepaketpekerjaan(Request $request)
    // {
    //     $perPage = $request->input('perPage', 5);
    //     $search  = trim($request->input('search'));

    //     $query = paketpekerjaanmasjaki::with([
    //         'profiljenispekerjaan',
    //         'paketstatuspekerjaan',
    //         'sumberdana',
    //         'tahunpilihan',
    //         'bulanrekap',
    //         'user'
    //     ]);

    //     if (!empty($search)) {
    //         $query->where(function ($q) use ($search) {
    //             $q->where('namapekerjaan', 'LIKE', "%{$search}%")
    //               ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
    //               ->orWhere('nib', 'LIKE', "%{$search}%")
    //               ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
    //               ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
    //               ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
    //               ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
    //               ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
    //               ->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
    //                   $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
    //               })
    //               ->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
    //                   $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
    //               })
    //               ->orWhereHas('sumberdana', function ($q2) use ($search) {
    //                   $q2->where('sumberdana', 'LIKE', "%{$search}%");
    //               })
    //               ->orWhereHas('tahunpilihan', function ($q2) use ($search) {
    //                   $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
    //               })
    //               ->orWhereHas('user', function ($q2) use ($search) {
    //                   $q2->where('name', 'LIKE', "%{$search}%")
    //                      ->orWhere('username', 'LIKE', "%{$search}%");
    //               });
    //         });
    //     }

    //     $query->orderBy('created_at', 'desc');
    //     $data = $query->paginate($perPage);

    //     // Untuk dropdown modal create
    //     $user             = User::all();
    //     $jenispekerjaan   = profiljenispekerjaan::all();
    //     $statuspekerjaan  = paketstatuspekerjaan::all();
    //     $sumberdana       = sumberdana::all();
    //     $tahun            = tahunpilihan::all();
    //     $bulan            = bulanrekap::all();

    //     if ($request->ajax()) {
    //         return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
    //     }

    //     return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
    //         'title'           => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
    //         'data'            => $data,
    //         'perPage'         => $perPage,
    //         'search'          => $search,
    //         'user'            => $user,
    //         'jenispekerjaan'  => $jenispekerjaan,
    //         'statuspekerjaan' => $statuspekerjaan,
    //         'sumberdana'      => $sumberdana,
    //         'tahun'           => $tahun,
    //         'bulan'           => $bulan,
    //     ]);
    // }


    // MENU BACKEND PROFIL PAKET PEKERJAAN
// public function bepaketpekerjaan(Request $request)
// {
//     // ✅ Ambil parameter pencarian dan jumlah per halaman dengan default
//     $perPage = $request->input('perPage', 10);
//     $search  = trim($request->input('search'));

//     // ✅ Query utama dengan eager loading untuk mencegah N+1 problem
//     $query = paketpekerjaanmasjaki::with([
//         'profiljenispekerjaan',
//         'paketstatuspekerjaan',
//         'sumberdana',
//         'tahunpilihan',
//         'bulanrekap',
//         'user'
//     ]);

//     // ✅ Jika ada pencarian
//     if (!empty($search)) {
//         $query->where(function ($q) use ($search) {

//             // Kolom langsung di tabel utama
//             $q->where('namapekerjaan', 'LIKE', "%{$search}%")
//               ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
//               ->orWhere('nib', 'LIKE', "%{$search}%")
//               ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
//               ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
//               ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
//               ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
//               ->orWhere('bulanselesai', 'LIKE', "%{$search}%");

//             // 🔍 Relasi: profil jenis pekerjaan
//             $q->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
//                 $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
//             });

//             // 🔍 Relasi: status pekerjaan
//             $q->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
//                 $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
//             });

//             // 🔍 Relasi: sumber dana
//             $q->orWhereHas('sumberdana', function ($q2) use ($search) {
//                 $q2->where('sumberdana', 'LIKE', "%{$search}%");
//             });

//             // 🔍 Relasi: tahun pilihan
//             $q->orWhereHas('tahunpilihan', function ($q2) use ($search) {
//                 $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
//             });

//             // 🔍 Relasi: user (nama satker atau username)
//             $q->orWhereHas('user', function ($q2) use ($search) {
//                 $q2->where('name', 'LIKE', "%{$search}%")
//                    ->orWhere('username', 'LIKE', "%{$search}%");
//             });
//         });
//     }

//     // ✅ Urutkan terbaru dulu
//     $query->orderBy('created_at', 'desc');

//     // ✅ Pagination data
//     $data = $query->paginate($perPage);

//     // ✅ Jika request AJAX (misal dari live search / pagination JS)
//     if ($request->ajax()) {
//         return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
//     }

//     // ✅ View utama
//     return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
//         'title'   => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
//         'data'    => $data,
//         'perPage' => $perPage,
//         'search'  => $search
//     ]);
// }

 public function bepaketpekerjaanrekap(Request $request)
    {
        // ✅ Ambil parameter pencarian dan jumlah per halaman dengan default
        $perPage = $request->input('perPage', 10);
        $search  = trim($request->input('search'));

        // ✅ Query utama dengan eager loading untuk mencegah N+1 problem
        $query = paketpekerjaanmasjaki::with([
            'profiljenispekerjaan',
            'paketstatuspekerjaan',
            'sumberdana',
            'tahunpilihan',
            'bulanrekap',
            'user'
        ]);

        // ✅ Jika ada pencarian
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('namapekerjaan', 'LIKE', "%{$search}%");

                $q->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                    $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
                });

                $q->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                    $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
                });
            });
        }

        // ✅ Urutkan terbaru dulu
        $query->orderBy('created_at', 'desc');

        // ✅ Pagination data
        $data = $query->paginate($perPage);

        // ✅ Jika request AJAX (search)
        if ($request->ajax()) {
            return view(
                'backend.04_datajakon.06_profilpaketpekerjaan.partials.table',
                compact('data')
            )->render();
        }

        // ✅ Data dropdown untuk form edit (di dalam modal)
        $profiljenispekerjaanList = profiljenispekerjaan::all();
        $paketstatuspekerjaanList = paketstatuspekerjaan::all();    
        $sumberdanaList           = sumberdana::all();
        $tahunpilihanList         = tahunpilihan::all();
        $bulanrekapList           = bulanrekap::all();

        // ✅ View utama
        return view('backend.04_datajakon.06_profilpaketpekerjaan.rekap', [
            'title'                    => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data'                     => $data,
            'perPage'                  => $perPage,
            'search'                   => $search,
            'profiljenispekerjaanList' => $profiljenispekerjaanList,
            'paketstatuspekerjaanList' => $paketstatuspekerjaanList,
            'sumberdanaList'           => $sumberdanaList,
            'tahunpilihanList'         => $tahunpilihanList,
            'bulanrekapList'           => $bulanrekapList,
        ]);
    }

public function statistikprofilpekerjaan(Request $request)
{
    // ═══ PARAMETER ═══
    $perPage = $request->input('perPage', 10);
    $search  = trim($request->input('search'));

    // ═══ QUERY UTAMA ═══
    $query = paketpekerjaanmasjaki::with([
        'profiljenispekerjaan',
        'paketstatuspekerjaan',
        'sumberdana',
        'tahunpilihan',
        'bulanrekap',
        'user'
    ]);

    // ═══ SEARCH ═══
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
              ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
              ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
              ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
              ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
              ->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                  $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                  $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('sumberdana', function ($q2) use ($search) {
                  $q2->where('sumberdana', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('tahunpilihan', function ($q2) use ($search) {
                  $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('user', function ($q2) use ($search) {
                  $q2->where('name', 'LIKE', "%{$search}%")
                     ->orWhere('username', 'LIKE', "%{$search}%");
              });
        });
    }

    $query->orderBy('created_at', 'desc');
    $data = $query->paginate($perPage);

    $data_totalpekerjaan = paketpekerjaanmasjaki::count();

    if ($request->ajax()) {
        return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
    }

    // ═══════════════════════════════════════════════════════════
    // STATISTIK JENIS PEKERJAAN
    // ═══════════════════════════════════════════════════════════
    $data_global = paketpekerjaanmasjaki::with('profiljenispekerjaan')->get();
    $total = $data_global->count();

    $data_statistik = $data_global->groupBy(function ($item) {
        return $item->profiljenispekerjaan->jenispekerjaan ?? 'Tidak Diketahui';
    })->map(function ($group, $jenis) use ($total) {
        $jumlah = $group->count();
        return [
            'jenis'      => $jenis,
            'jumlah'     => $jumlah,
            'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
        ];
    })->values();

    // ═══════════════════════════════════════════════════════════
    // STATISTIK STATUS PEKERJAAN
    // ═══════════════════════════════════════════════════════════
    $data_statuspekerjaan = paketpekerjaanmasjaki::with('paketstatuspekerjaan')->get();
    $total = $data_statuspekerjaan->count();

    $data_totalstatuspekerjaan = $data_statuspekerjaan->groupBy(function ($item) {
        return $item->paketstatuspekerjaan->paketstatuspekerjaan ?? 'Tidak Diketahui';
    })->map(function ($group, $status) use ($total) {
        $jumlah = $group->count();
        return [
            'jenis'      => $status,
            'jumlah'     => $jumlah,
            'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
        ];
    })->values();

    // ═══════════════════════════════════════════════════════════
    // STATISTIK SUMBER DANA
    // ═══════════════════════════════════════════════════════════
    $data_allsumberdana = paketpekerjaanmasjaki::with('sumberdana')->get();
    $total = $data_allsumberdana->count();

    $data_sumberdana = $data_allsumberdana->groupBy(function ($item) {
        return $item->sumberdana->sumberdana ?? 'Tidak Diketahui';
    })->map(function ($group, $status) use ($total) {
        $jumlah = $group->count();
        return [
            'jenis'      => $status,
            'jumlah'     => $jumlah,
            'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
        ];
    })->values();

    // ═══════════════════════════════════════════════════════════
    // STATISTIK TAHUN PELAKSANAAN
    // ═══════════════════════════════════════════════════════════
    $data_alltahun = paketpekerjaanmasjaki::with('tahunpilihan')->get();
    $total = $data_alltahun->count();

    $data_tahun = $data_alltahun->groupBy(function ($item) {
        return $item->tahunpilihan->tahunpilihan ?? 'Tidak Diketahui';
    })->map(function ($group, $status) use ($total) {
        $jumlah = $group->count();
        return [
            'jenis'      => $status,
            'jumlah'     => $jumlah,
            'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
        ];
    })->values();

    // ═══════════════════════════════════════════════════════════
    // STATISTIK SATUAN KERJA
    // ═══════════════════════════════════════════════════════════
    $data_allsatuankerja = paketpekerjaanmasjaki::with('user')->get();
    $total = $data_allsatuankerja->count();

    $data_satuankerja = $data_allsatuankerja->groupBy(function ($item) {
        return $item->user->name ?? 'Tidak Diketahui';
    })->map(function ($group, $status) use ($total) {
        $jumlah = $group->count();
        return [
            'jenis'      => $status,
            'jumlah'     => $jumlah,
            'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
        ];
    })->values();

    // ═══════════════════════════════════════════════════════════
    // DATA CHART LINE PER TAHUN (untuk 5 statistik)
    // ═══════════════════════════════════════════════════════════
    $tahunList  = tahunpilihan::orderBy('tahunpilihan', 'asc')->get();
    $yearLabels = $tahunList->pluck('tahunpilihan')->values();

    // ─── Chart 1: Jenis Pekerjaan × Tahun ───
    $chartJenisPerTahun = ['labels' => $yearLabels, 'datasets' => []];
    foreach ($data_statistik as $stat) {
        $counts = [];
        foreach ($tahunList as $th) {
            $counts[] = paketpekerjaanmasjaki::whereHas('profiljenispekerjaan', function ($q) use ($stat) {
                $q->where('jenispekerjaan', $stat['jenis']);
            })->where('tahunpilihan_id', $th->id)->count();
        }
        $chartJenisPerTahun['datasets'][] = [
            'label' => $stat['jenis'],
            'data'  => $counts,
        ];
    }

    // ─── Chart 2: Status Pekerjaan × Tahun ───
    $chartStatusPerTahun = ['labels' => $yearLabels, 'datasets' => []];
    foreach ($data_totalstatuspekerjaan as $stat) {
        $counts = [];
        foreach ($tahunList as $th) {
            $counts[] = paketpekerjaanmasjaki::whereHas('paketstatuspekerjaan', function ($q) use ($stat) {
                $q->where('paketstatuspekerjaan', $stat['jenis']);
            })->where('tahunpilihan_id', $th->id)->count();
        }
        $chartStatusPerTahun['datasets'][] = [
            'label' => $stat['jenis'],
            'data'  => $counts,
        ];
    }

    // ─── Chart 3: Sumber Dana × Tahun ───
    $chartSumberdanaPerTahun = ['labels' => $yearLabels, 'datasets' => []];
    foreach ($data_sumberdana as $stat) {
        $counts = [];
        foreach ($tahunList as $th) {
            $counts[] = paketpekerjaanmasjaki::whereHas('sumberdana', function ($q) use ($stat) {
                $q->where('sumberdana', $stat['jenis']);
            })->where('tahunpilihan_id', $th->id)->count();
        }
        $chartSumberdanaPerTahun['datasets'][] = [
            'label' => $stat['jenis'],
            'data'  => $counts,
        ];
    }

    // ─── Chart 4: Tahun Pelaksanaan × Tahun (total per tahun) ───
    $chartTahunPerTahun = ['labels' => $yearLabels, 'datasets' => []];
    $countsPerTahun = [];
    foreach ($tahunList as $th) {
        $countsPerTahun[] = paketpekerjaanmasjaki::where('tahunpilihan_id', $th->id)->count();
    }
    $chartTahunPerTahun['datasets'][] = [
        'label' => 'Total Paket',
        'data'  => $countsPerTahun,
    ];

    // ─── Chart 5: Satuan Kerja × Tahun ───
    $chartSatuankerjaPerTahun = ['labels' => $yearLabels, 'datasets' => []];
    foreach ($data_satuankerja as $stat) {
        $counts = [];
        foreach ($tahunList as $th) {
            $counts[] = paketpekerjaanmasjaki::whereHas('user', function ($q) use ($stat) {
                $q->where('name', $stat['jenis']);
            })->where('tahunpilihan_id', $th->id)->count();
        }
        $chartSatuankerjaPerTahun['datasets'][] = [
            'label' => $stat['jenis'],
            'data'  => $counts,
        ];
    }

    // ═══ RETURN VIEW ═══
    return view('backend.04_datajakon.06_profilpaketpekerjaan.statistik', [
        'title'                     => 'Statistik Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'data'                      => $data,
        'perPage'                   => $perPage,
        'search'                    => $search,
        'data_statistik'            => $data_statistik,
        'data_totalpekerjaan'       => $data_totalpekerjaan,
        'data_totalstatuspekerjaan' => $data_totalstatuspekerjaan,
        'data_sumberdana'           => $data_sumberdana,
        'data_tahun'                => $data_tahun,
        'data_satuankerja'          => $data_satuankerja,
        'chartJenisPerTahun'        => $chartJenisPerTahun,
        'chartStatusPerTahun'       => $chartStatusPerTahun,
        'chartSumberdanaPerTahun'   => $chartSumberdanaPerTahun,
        'chartTahunPerTahun'        => $chartTahunPerTahun,
        'chartSatuankerjaPerTahun'  => $chartSatuankerjaPerTahun,
    ]);
}


// public function statistikprofilpekerjaan(Request $request)
// {
//     // ═══ PARAMETER ═══
//     $perPage = $request->input('perPage', 10);
//     $search  = trim($request->input('search'));

//     // ═══ QUERY UTAMA ═══
//     $query = paketpekerjaanmasjaki::with([
//         'profiljenispekerjaan',
//         'paketstatuspekerjaan',
//         'sumberdana',
//         'tahunpilihan',
//         'bulanrekap',
//         'user'
//     ]);

//     // ═══ SEARCH ═══
//     if (!empty($search)) {
//         $query->where(function ($q) use ($search) {
//             $q->where('namapekerjaan', 'LIKE', "%{$search}%")
//               ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
//               ->orWhere('nib', 'LIKE', "%{$search}%")
//               ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
//               ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
//               ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
//               ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
//               ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
//               ->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
//                   $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
//               })
//               ->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
//                   $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
//               })
//               ->orWhereHas('sumberdana', function ($q2) use ($search) {
//                   $q2->where('sumberdana', 'LIKE', "%{$search}%");
//               })
//               ->orWhereHas('tahunpilihan', function ($q2) use ($search) {
//                   $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
//               })
//               ->orWhereHas('user', function ($q2) use ($search) {
//                   $q2->where('name', 'LIKE', "%{$search}%")
//                      ->orWhere('username', 'LIKE', "%{$search}%");
//               });
//         });
//     }

//     $query->orderBy('created_at', 'desc');
//     $data = $query->paginate($perPage);

//     $data_totalpekerjaan = paketpekerjaanmasjaki::count();

//     if ($request->ajax()) {
//         return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
//     }

//     // ═══════════════════════════════════════════════════════════
//     // STATISTIK JENIS PEKERJAAN
//     // ═══════════════════════════════════════════════════════════
//     $data_global = paketpekerjaanmasjaki::with('profiljenispekerjaan')->get();
//     $total = $data_global->count();

//     $data_statistik = $data_global->groupBy(function ($item) {
//         return $item->profiljenispekerjaan->jenispekerjaan ?? 'Tidak Diketahui';
//     })->map(function ($group, $jenis) use ($total) {
//         $jumlah = $group->count();
//         return [
//             'jenis'      => $jenis,
//             'jumlah'     => $jumlah,
//             'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
//         ];
//     })->values();

//     // ═══════════════════════════════════════════════════════════
//     // STATISTIK STATUS PEKERJAAN
//     // ═══════════════════════════════════════════════════════════
//     $data_statuspekerjaan = paketpekerjaanmasjaki::with('paketstatuspekerjaan')->get();
//     $total = $data_statuspekerjaan->count();

//     $data_totalstatuspekerjaan = $data_statuspekerjaan->groupBy(function ($item) {
//         return $item->paketstatuspekerjaan->paketstatuspekerjaan ?? 'Tidak Diketahui';
//     })->map(function ($group, $status) use ($total) {
//         $jumlah = $group->count();
//         return [
//             'jenis'      => $status,
//             'jumlah'     => $jumlah,
//             'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
//         ];
//     })->values();

//     // ═══════════════════════════════════════════════════════════
//     // STATISTIK SUMBER DANA
//     // ═══════════════════════════════════════════════════════════
//     $data_allsumberdana = paketpekerjaanmasjaki::with('sumberdana')->get();
//     $total = $data_allsumberdana->count();

//     $data_sumberdana = $data_allsumberdana->groupBy(function ($item) {
//         return $item->sumberdana->sumberdana ?? 'Tidak Diketahui';
//     })->map(function ($group, $status) use ($total) {
//         $jumlah = $group->count();
//         return [
//             'jenis'      => $status,
//             'jumlah'     => $jumlah,
//             'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
//         ];
//     })->values();

//     // ═══════════════════════════════════════════════════════════
//     // STATISTIK TAHUN PELAKSANAAN
//     // ═══════════════════════════════════════════════════════════
//     $data_alltahun = paketpekerjaanmasjaki::with('tahunpilihan')->get();
//     $total = $data_alltahun->count();

//     $data_tahun = $data_alltahun->groupBy(function ($item) {
//         return $item->tahunpilihan->tahunpilihan ?? 'Tidak Diketahui';
//     })->map(function ($group, $status) use ($total) {
//         $jumlah = $group->count();
//         return [
//             'jenis'      => $status,
//             'jumlah'     => $jumlah,
//             'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
//         ];
//     })->values();

//     // ═══════════════════════════════════════════════════════════
//     // STATISTIK SATUAN KERJA
//     // ═══════════════════════════════════════════════════════════
//     $data_allsatuankerja = paketpekerjaanmasjaki::with('user')->get();
//     $total = $data_allsatuankerja->count();

//     $data_satuankerja = $data_allsatuankerja->groupBy(function ($item) {
//         return $item->user->name ?? 'Tidak Diketahui';
//     })->map(function ($group, $status) use ($total) {
//         $jumlah = $group->count();
//         return [
//             'jenis'      => $status,
//             'jumlah'     => $jumlah,
//             'persentase' => $total > 0 ? ($jumlah / $total) * 100 : 0,
//         ];
//     })->values();

//     // ═══════════════════════════════════════════════════════════
//     // DATA CHART LINE PER TAHUN (untuk 5 statistik)
//     // ═══════════════════════════════════════════════════════════
//     $tahunList  = tahunpilihan::orderBy('tahunpilihan', 'asc')->get();
//     $yearLabels = $tahunList->pluck('tahunpilihan')->values();

//     // ─── Chart 1: Jenis Pekerjaan × Tahun ───
//     $chartJenisPerTahun = ['labels' => $yearLabels, 'datasets' => []];
//     foreach ($data_statistik as $stat) {
//         $counts = [];
//         foreach ($tahunList as $th) {
//             $counts[] = paketpekerjaanmasjaki::whereHas('profiljenispekerjaan', function ($q) use ($stat) {
//                 $q->where('jenispekerjaan', $stat['jenis']);
//             })->where('tahunpilihan_id', $th->id)->count();
//         }
//         $chartJenisPerTahun['datasets'][] = [
//             'label' => $stat['jenis'],
//             'data'  => $counts,
//         ];
//     }

//     // ─── Chart 2: Status Pekerjaan × Tahun ───
//     $chartStatusPerTahun = ['labels' => $yearLabels, 'datasets' => []];
//     foreach ($data_totalstatuspekerjaan as $stat) {
//         $counts = [];
//         foreach ($tahunList as $th) {
//             $counts[] = paketpekerjaanmasjaki::whereHas('paketstatuspekerjaan', function ($q) use ($stat) {
//                 $q->where('paketstatuspekerjaan', $stat['jenis']);
//             })->where('tahunpilihan_id', $th->id)->count();
//         }
//         $chartStatusPerTahun['datasets'][] = [
//             'label' => $stat['jenis'],
//             'data'  => $counts,
//         ];
//     }

//     // ─── Chart 3: Sumber Dana × Tahun ───
//     $chartSumberdanaPerTahun = ['labels' => $yearLabels, 'datasets' => []];
//     foreach ($data_sumberdana as $stat) {
//         $counts = [];
//         foreach ($tahunList as $th) {
//             $counts[] = paketpekerjaanmasjaki::whereHas('sumberdana', function ($q) use ($stat) {
//                 $q->where('sumberdana', $stat['jenis']);
//             })->where('tahunpilihan_id', $th->id)->count();
//         }
//         $chartSumberdanaPerTahun['datasets'][] = [
//             'label' => $stat['jenis'],
//             'data'  => $counts,
//         ];
//     }

//     // ─── Chart 4: Tahun Pelaksanaan × Tahun (total per tahun) ───
//     $chartTahunPerTahun = ['labels' => $yearLabels, 'datasets' => []];
//     $countsPerTahun = [];
//     foreach ($tahunList as $th) {
//         $countsPerTahun[] = paketpekerjaanmasjaki::where('tahunpilihan_id', $th->id)->count();
//     }
//     $chartTahunPerTahun['datasets'][] = [
//         'label' => 'Total Paket',
//         'data'  => $countsPerTahun,
//     ];

//     // ─── Chart 5: Satuan Kerja × Tahun ───
//     $chartSatuankerjaPerTahun = ['labels' => $yearLabels, 'datasets' => []];
//     foreach ($data_satuankerja as $stat) {
//         $counts = [];
//         foreach ($tahunList as $th) {
//             $counts[] = paketpekerjaanmasjaki::whereHas('user', function ($q) use ($stat) {
//                 $q->where('name', $stat['jenis']);
//             })->where('tahunpilihan_id', $th->id)->count();
//         }
//         $chartSatuankerjaPerTahun['datasets'][] = [
//             'label' => $stat['jenis'],
//             'data'  => $counts,
//         ];
//     }

//     // ═══ RETURN VIEW ═══
//     return view('backend.04_datajakon.06_profilpaketpekerjaan.statistik', [
//         'title'                     => 'Statistik Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
//         'data'                      => $data,
//         'perPage'                   => $perPage,
//         'search'                    => $search,
//         'data_statistik'            => $data_statistik,
//         'data_totalpekerjaan'       => $data_totalpekerjaan,
//         'data_totalstatuspekerjaan' => $data_totalstatuspekerjaan,
//         'data_sumberdana'           => $data_sumberdana,
//         'data_tahun'                => $data_tahun,
//         'data_satuankerja'          => $data_satuankerja,
//         'chartJenisPerTahun'        => $chartJenisPerTahun,
//         'chartStatusPerTahun'       => $chartStatusPerTahun,
//         'chartSumberdanaPerTahun'   => $chartSumberdanaPerTahun,
//         'chartTahunPerTahun'        => $chartTahunPerTahun,
//         'chartSatuankerjaPerTahun'  => $chartSatuankerjaPerTahun,
//     ]);
// }


// HAK AKSES DINAS
public function bepaketpekerjaandinas(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = paketpekerjaanmasjaki::query();

    // Ambil user yang sedang login
    $user = Auth::user();

    // Filter data berdasarkan user_id
    if ($user) {
        $query->where('user_id', $user->id);
    }

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
                ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                ->orWhere('nib', 'LIKE', "%{$search}%")
                ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
                ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
                ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
                ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
                ->orWhere('bulanselesai', 'LIKE', "%{$search}%")
                ->orWhere('dinas', 'LIKE', "%{$search}%")
                ->orWhereHas('profiljenispekerjaan', function ($q) use ($search) {
                    $q->where('jenispekerjaan', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('paketstatuspekerjaan', function ($q) use ($search) {
                    $q->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('sumberdana', function ($q) use ($search) {
                    $q->where('sumberdana', 'LIKE', "%{$search}%");
                })
                ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                    $q->where('tahunpilihan', 'LIKE', "%{$search}%");
                });
        });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.04_datajakon.06_profilpaketpekerjaan.01_hakakses.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.06_profilpaketpekerjaan.01_hakakses.index', [
        'title' => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    // TKK DPUPR BLORA SHOW

    public function bepaketpekerjaanshow($namapekerjaan)
    {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('namapekerjaan', $namapekerjaan)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.06_profilpaketpekerjaan.show', [
            'title' => 'Data Details Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data' => $datapaketpekerjaan,
        ]);
    }


        public function bepaketpekerjaandelete($id)
        {
        // Cari item berdasarkan judul
            $entry = paketpekerjaanmasjaki::where('id', $id)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/bepaketpekerjaan')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }


// PERSURATAN PAKET PEKERJAAN

        //

        public function bepekerjaandetails($id)
        {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            $user = Auth::user();

            // Kirim variabel ke view
            return view('backend.04_datajakon.06_profilpaketpekerjaan.surat1', [
                'title' => 'Details Paket Pekerjaan',
                'data' => $datapaketpekerjaan,
                'user' => $user,
                // 'datasub' => $datasub,
                // 'datasub' => $subdata,
                // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
            ]);
        }

        public function bepekerjaansurat2($id)
        {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            $user = Auth::user();

            // Kirim variabel ke view
            return view('backend.04_datajakon.06_profilpaketpekerjaan.surat2', [
                'title' => 'Details Paket Pekerjaan',
                'data' => $datapaketpekerjaan,
                'user' => $user,
                // 'datasub' => $datasub,
                // 'datasub' => $subdata,
                // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
            ]);
        }

        public function bepekerjaansurat3($id)
        {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            $user = Auth::user();

            // Kirim variabel ke view
            return view('backend.04_datajakon.06_profilpaketpekerjaan.surat3', [
                'title' => 'Surat Perintah Kerja',
                'data' => $datapaketpekerjaan,
                'user' => $user,
                // 'datasub' => $datasub,
                // 'datasub' => $subdata,
                // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
            ]);
        }

        public function bepekerjaansurat4($id)
        {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            $user = Auth::user();

            // Kirim variabel ke view
            return view('backend.04_datajakon.06_profilpaketpekerjaan.surat4', [
                'title' => 'SSKK',
                'data' => $datapaketpekerjaan,
                'user' => $user,
                // 'datasub' => $datasub,
                // 'datasub' => $subdata,
                // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
            ]);
        }

        public function bepekerjaansurat5($id)
        {
            $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            $user = Auth::user();

            // Kirim variabel ke view
            return view('backend.04_datajakon.06_profilpaketpekerjaan.surat5', [
                'title' => 'Surat Perjanjian Pekerjaan',
                'data' => $datapaketpekerjaan,
                'user' => $user,
                // 'datasub' => $datasub,
                // 'datasub' => $subdata,
                // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
            ]);
        }


        // BUAT DRAFT SPK
        // SHOW FORM


        public function bepaketpekerjaanshowsurat($id)
        {
                $datapaketpekerjaan = paketpekerjaanmasjaki::where('id', $id)->first();
            // Ambil data user saat ini
                $user = Auth::user();

            return view('backend.04_datajakon.06_profilpaketpekerjaan.showsurat', [
                'title' => 'Pembuatan Draft SPK',
                'user' => $user,
                'data' => $datapaketpekerjaan,
            ]);
        }


// MENAMBAHKAN PROFIL PAKET PEKERJAAN
        public function bepaketpekerjaancreate()
{
    // Ambil data yang dibutuhkan untuk form dropdown, jika ada
    // $jenispekerjaan = profiljenispekerjaan::all();
    $jenispekerjaan = profiljenispekerjaan::orderBy('jenispekerjaan', 'asc')->get();
    $statuspekerjaan = paketstatuspekerjaan::all();
    $sumberdana = sumberdana::all();
    $tahun = tahunpilihan::all();
    $bulan = bulanrekap::all();

$users = User::with('statusadmin')->where('statusadmin_id', 9)->get();

    return view('backend.04_datajakon.06_profilpaketpekerjaan.buatbarupaket', [
        'title' => 'Tambah Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'jenispekerjaan' => $jenispekerjaan,
        'statuspekerjaan' => $statuspekerjaan,
        'sumberdana' => $sumberdana,
        'tahun' => $tahun,
        'bulan' => $bulan,
        'user' => $users
    ]);
}

public function bepaketpekerjaancreatenew(Request $request)
{
    // Validasi input dengan custom messages
    $validated = $request->validate([
        'profiljenispekerjaan_id' => 'nullable|string',
        'paketstatuspekerjaan_id' => 'nullable|string',
        'sumberdana_id' => 'nullable|string',
        'tahunpilihan_id' => 'nullable|string',
        'bulanrekap_id' => 'nullable|string',
        'user_id' => 'nullable|string',

        'namapekerjaan' => 'nullable|string',
        'cvptpenyedia' => 'nullable|string|max:255',
        'nib' => 'nullable|string|max:255',
        'nilaikontrak' => 'nullable|string',
        'jeniskontrak' => 'nullable|string|max:255',
        'karakteristikkontrak' => 'nullable|string|max:255',
        'bulanmulai' => 'nullable|string|max:255',
        'bulanselesai' => 'nullable|string|max:255',
        'progress' => 'nullable|integer|min:0|max:100',
    ], [
        'profiljenispekerjaan_id.exists' => 'Jenis pekerjaan tidak valid.',
        'paketstatuspekerjaan_id.exists' => 'Status pekerjaan tidak valid.',
        'sumberdana_id.exists' => 'Sumber dana tidak valid.',
        'tahunpilihan_id.exists' => 'Tahun pilihan tidak valid.',
        'bulanrekap_id.exists' => 'Bulan rekap tidak valid.',
        'user_id.exists' => 'User tidak valid.',

        // Kamu bisa tambah custom message lain jika perlu
    ]);

    // Simpan data ke database
    paketpekerjaanmasjaki::create([
        'profiljenispekerjaan_id' => $validated['profiljenispekerjaan_id'] ?? null,
        'paketstatuspekerjaan_id' => $validated['paketstatuspekerjaan_id'] ?? null,
        'sumberdana_id' => $validated['sumberdana_id'] ?? null,
        'tahunpilihan_id' => $validated['tahunpilihan_id'] ?? null,
        'bulanrekap_id' => $validated['bulanrekap_id'] ?? null,
        'user_id' => $validated['user_id'] ?? null,

        'namapekerjaan' => $validated['namapekerjaan'] ?? null,
        'cvptpenyedia' => $validated['cvptpenyedia'] ?? null,
        'nib' => $validated['nib'] ?? null,
        'nilaikontrak' => $validated['nilaikontrak'] ?? null,
        'jeniskontrak' => $validated['jeniskontrak'] ?? null,
        'karakteristikkontrak' => $validated['karakteristikkontrak'] ?? null,
        'bulanmulai' => $validated['bulanmulai'] ?? null,
        'bulanselesai' => $validated['bulanselesai'] ?? null,
        'progress' => $validated['progress'] ?? 0,
    ]);

    session()->flash('create', 'Data Paket Pekerjaan Berhasil Ditambahkan!');
    return redirect()->route('bepaketpekerjaanindex'); // Ganti dengan route index yang sesuai
}

public function paketpekerjaanupdate($id)
{
    // Ambil data paket pekerjaan berdasarkan ID
    $dataPaket = paketpekerjaanmasjaki::findOrFail($id);

    // Ambil data user login saat ini
    $user = Auth::user();

    // Ambil data dropdown relasional
    $dataProfilJenis = profiljenispekerjaan::all();
    $dataStatusPekerjaan = paketstatuspekerjaan::all();
    $dataSumberDana = sumberdana::all();
    $dataTahunPilihan = tahunpilihan::all();
    $dataBulanRekap = bulanrekap::all();

    // Kirim ke view update
    return view('backend.04_datajakon.06_profilpaketpekerjaan.update', [
        'title' => 'Perbaikan Data Paket Pekerjaan',
        'data' => $dataPaket,
        'user' => $user,
        'profiljenispekerjaanList' => $dataProfilJenis,
        'paketstatuspekerjaanList' => $dataStatusPekerjaan,
        'sumberdanaList' => $dataSumberDana,
        'tahunpilihanList' => $dataTahunPilihan,
        'bulanrekapList' => $dataBulanRekap,
    ]);
}

public function paketpekerjaanview($id)
{
    // Ambil data paket pekerjaan berdasarkan ID
    $dataPaket = paketpekerjaanmasjaki::findOrFail($id);

    // Ambil data user login saat ini
    $user = Auth::user();

    // Ambil data dropdown relasional
    $dataProfilJenis = profiljenispekerjaan::all();
    $dataStatusPekerjaan = paketstatuspekerjaan::all();
    $dataSumberDana = sumberdana::all();
    $dataTahunPilihan = tahunpilihan::all();
    $dataBulanRekap = bulanrekap::all();

    // Kirim ke view update
    return view('backend.04_datajakon.06_profilpaketpekerjaan.view', [
        'title' => 'View Data Paket Pekerjaan',
        'data' => $dataPaket,
        'user' => $user,
        'profiljenispekerjaanList' => $dataProfilJenis,
        'paketstatuspekerjaanList' => $dataStatusPekerjaan,
        'sumberdanaList' => $dataSumberDana,
        'tahunpilihanList' => $dataTahunPilihan,
        'bulanrekapList' => $dataBulanRekap,
    ]);
}


// public function paketpekerjaanupdatenew(Request $request, $id)
// {
//     // Validasi input
//     $validated = $request->validate([
//         'profiljenispekerjaan_id' => 'nullable|string',
//         'paketstatuspekerjaan_id' => 'nullable|string',
//         'sumberdana_id' => 'nullable|string',
//         'tahunpilihan_id' => 'nullable|string',
//         'bulanrekap_id' => 'nullable|string',
//         'user_id' => 'nullable|string',

//         'namapekerjaan' => 'nullable|string',
//         'cvptpenyedia' => 'nullable|string|max:255',
//         'nib' => 'nullable|string|max:255',
//         'nilaikontrak' => 'nullable|string',
//         'jeniskontrak' => 'nullable|string|max:255',
//         'karakteristikkontrak' => 'nullable|string|max:255',
//         'bulanmulai' => 'nullable|string|max:255',
//         'bulanselesai' => 'nullable|string|max:255',
//         'progress' => 'nullable|integer|min:0|max:100',
//     ], [
//         'profiljenispekerjaan_id.exists' => 'Jenis pekerjaan tidak valid.',
//         'paketstatuspekerjaan_id.exists' => 'Status pekerjaan tidak valid.',
//         'sumberdana_id.exists' => 'Sumber dana tidak valid.',
//         'tahunpilihan_id.exists' => 'Tahun pilihan tidak valid.',
//         'bulanrekap_id.exists' => 'Bulan rekap tidak valid.',
//         'user_id.exists' => 'User tidak valid.',
//     ]);

//     // Cari data berdasarkan ID
//     $paket = paketpekerjaanmasjaki::findOrFail($id);

//     // Update data ke database
//     $paket->update([
//         'profiljenispekerjaan_id' => $validated['profiljenispekerjaan_id'] ?? $paket->profiljenispekerjaan_id,
//         'paketstatuspekerjaan_id' => $validated['paketstatuspekerjaan_id'] ?? $paket->paketstatuspekerjaan_id,
//         'sumberdana_id' => $validated['sumberdana_id'] ?? $paket->sumberdana_id,
//         'tahunpilihan_id' => $validated['tahunpilihan_id'] ?? $paket->tahunpilihan_id,
//         'bulanrekap_id' => $validated['bulanrekap_id'] ?? $paket->bulanrekap_id,
//         'user_id' => $validated['user_id'] ?? $paket->user_id,

//         'namapekerjaan' => $validated['namapekerjaan'] ?? $paket->namapekerjaan,
//         'cvptpenyedia' => $validated['cvptpenyedia'] ?? $paket->cvptpenyedia,
//         'nib' => $validated['nib'] ?? $paket->nib,
//         'nilaikontrak' => $validated['nilaikontrak'] ?? $paket->nilaikontrak,
//         'jeniskontrak' => $validated['jeniskontrak'] ?? $paket->jeniskontrak,
//         'karakteristikkontrak' => $validated['karakteristikkontrak'] ?? $paket->karakteristikkontrak,
//         'bulanmulai' => $validated['bulanmulai'] ?? $paket->bulanmulai,
//         'bulanselesai' => $validated['bulanselesai'] ?? $paket->bulanselesai,
//         'progress' => $validated['progress'] ?? $paket->progress,
//     ]);

//     // Pesan sukses
//     session()->flash('update', 'Data Paket Pekerjaan Berhasil Diperbarui!');
//     return redirect()->route('bepaketpekerjaanindex');
// }



public function paketpekerjaanupdatenew(Request $request, $id)
{
    // ═══ VALIDASI ═══
    $validated = $request->validate([
        'profiljenispekerjaan_id' => 'nullable|string',
        'paketstatuspekerjaan_id' => 'nullable|string',
        'sumberdana_id'           => 'nullable|string',
        'tahunpilihan_id'         => 'nullable|string',
        'bulanrekap_id'           => 'nullable|string',
        'user_id'                 => 'nullable|string',

        'namapekerjaan'           => 'nullable|string',
        'cvptpenyedia'            => 'nullable|string|max:255',
        'nib'                     => 'nullable|string|max:255',
        'nilaikontrak'            => 'nullable|string|max:50',
        'jeniskontrak'            => 'nullable|string|max:255',
        'karakteristikkontrak'    => 'nullable|string|max:255',
        'bulanmulai'              => 'nullable|string|max:255',
        'bulanselesai'            => 'nullable|string|max:255',
        'progress'                => 'nullable|integer|min:0|max:100',
    ]);

    // ═══ CARI DATA ═══
    $paket = paketpekerjaanmasjaki::findOrFail($id);

    // ═══════════════════════════════════════════════════════
    // BERSIHKAN NILAI KONTRAK — HAPUS TITIK & KOMA
    // "1.500.000" → "1500000"
    // "1.500.000,50" → "1500000.50"
    // ═══════════════════════════════════════════════════════
    $nilaikontrak = $paket->nilaikontrak;
    if (!empty($validated['nilaikontrak'])) {
        $clean = str_replace('.', '', $validated['nilaikontrak']);
        $clean = str_replace(',', '.', $clean);
        if (is_numeric($clean)) {
            $nilaikontrak = $clean;
        }
    }

    // ═══ UPDATE ═══
    $paket->update([
        'profiljenispekerjaan_id' => $validated['profiljenispekerjaan_id'] ?? $paket->profiljenispekerjaan_id,
        'paketstatuspekerjaan_id' => $validated['paketstatuspekerjaan_id'] ?? $paket->paketstatuspekerjaan_id,
        'sumberdana_id'           => $validated['sumberdana_id'] ?? $paket->sumberdana_id,
        'tahunpilihan_id'         => $validated['tahunpilihan_id'] ?? $paket->tahunpilihan_id,
        'bulanrekap_id'           => $validated['bulanrekap_id'] ?? $paket->bulanrekap_id,
        'user_id'                 => $validated['user_id'] ?? $paket->user_id,

        'namapekerjaan'           => $validated['namapekerjaan'] ?? $paket->namapekerjaan,
        'cvptpenyedia'            => $validated['cvptpenyedia'] ?? $paket->cvptpenyedia,
        'nib'                     => $validated['nib'] ?? $paket->nib,
        'nilaikontrak'            => $nilaikontrak,
        'jeniskontrak'            => $validated['jeniskontrak'] ?? $paket->jeniskontrak,
        'karakteristikkontrak'    => $validated['karakteristikkontrak'] ?? $paket->karakteristikkontrak,
        'bulanmulai'              => $validated['bulanmulai'] ?? $paket->bulanmulai,
        'bulanselesai'            => $validated['bulanselesai'] ?? $paket->bulanselesai,
        'progress'                => $validated['progress'] ?? $paket->progress,
    ]);

    // ═══ REDIRECT ═══
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diperbarui!');
    return redirect()->route('bepaketpekerjaanindex');
}


}

