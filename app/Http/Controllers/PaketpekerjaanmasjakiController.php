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


    // MENU BACKEND PROFIL PAKET PEKERJAAN
public function bepaketpekerjaan(Request $request)
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

            // Kolom langsung di tabel utama
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
              ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
              ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
              ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
              ->orWhere('bulanselesai', 'LIKE', "%{$search}%");

            // 🔍 Relasi: profil jenis pekerjaan
            $q->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: status pekerjaan
            $q->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: sumber dana
            $q->orWhereHas('sumberdana', function ($q2) use ($search) {
                $q2->where('sumberdana', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: tahun pilihan
            $q->orWhereHas('tahunpilihan', function ($q2) use ($search) {
                $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: user (nama satker atau username)
            $q->orWhereHas('user', function ($q2) use ($search) {
                $q2->where('name', 'LIKE', "%{$search}%")
                   ->orWhere('username', 'LIKE', "%{$search}%");
            });
        });
    }

    // ✅ Urutkan terbaru dulu
    $query->orderBy('created_at', 'desc');

    // ✅ Pagination data
    $data = $query->paginate($perPage);

    // ✅ Jika request AJAX (misal dari live search / pagination JS)
    if ($request->ajax()) {
        return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
    }

    // ✅ View utama
    return view('backend.04_datajakon.06_profilpaketpekerjaan.index', [
        'title'   => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search
    ]);
}

public function bepaketpekerjaanrekap(Request $request)
{
    // ✅ Ambil parameter pencarian dan jumlah per halaman dengan default
    $perPage = $request->input('perPage', 10);
    $search  = trim($request->input('search'));

    // ✅ Query utama dengan eager loading untuk mencegah N+1 problem
    $query = paketpekerjaanmasjaki::with([
        'profiljenispekerjaan',
        'paketstatuspekerjaan',
        // 'sumberdana',
        // 'tahunpilihan',
        // 'bulanrekap',
        // 'user'
    ]);

    // ✅ Jika ada pencarian
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {

            // Kolom langsung di tabel utama
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
            //   ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
            //   ->orWhere('nib', 'LIKE', "%{$search}%")
            //   ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
            //   ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
            //   ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
            //   ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
            //   ->orWhere('bulanselesai', 'LIKE', "%{$search}%");
                ;
            // 🔍 Relasi: profil jenis pekerjaan
            $q->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: status pekerjaan
            $q->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: sumber dana
            // $q->orWhereHas('sumberdana', function ($q2) use ($search) {
            //     $q2->where('sumberdana', 'LIKE', "%{$search}%");
            // });

            // 🔍 Relasi: tahun pilihan
            // $q->orWhereHas('tahunpilihan', function ($q2) use ($search) {
            //     $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
            // });

            // 🔍 Relasi: user (nama satker atau username)
            // $q->orWhereHas('user', function ($q2) use ($search) {
            //     $q2->where('name', 'LIKE', "%{$search}%")
            //        ->orWhere('username', 'LIKE', "%{$search}%");
            // });

        });
    }

    // ✅ Urutkan terbaru dulu
    $query->orderBy('created_at', 'desc');

    // ✅ Pagination data
    $data = $query->paginate($perPage);

    // ✅ Jika request AJAX (misal dari live search / pagination JS)
    if ($request->ajax()) {
        return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
    }

    // ✅ View utama
    return view('backend.04_datajakon.06_profilpaketpekerjaan.rekap', [
        'title'   => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search
    ]);
}

public function statistikprofilpekerjaan(Request $request)
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

            // Kolom langsung di tabel utama
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('nilaikontrak', 'LIKE', "%{$search}%")
              ->orWhere('jeniskontrak', 'LIKE', "%{$search}%")
              ->orWhere('karakteristikkontrak', 'LIKE', "%{$search}%")
              ->orWhere('bulanmulai', 'LIKE', "%{$search}%")
              ->orWhere('bulanselesai', 'LIKE', "%{$search}%");

            // 🔍 Relasi: profil jenis pekerjaan
            $q->orWhereHas('profiljenispekerjaan', function ($q2) use ($search) {
                $q2->where('jenispekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: status pekerjaan
            $q->orWhereHas('paketstatuspekerjaan', function ($q2) use ($search) {
                $q2->where('paketstatuspekerjaan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: sumber dana
            $q->orWhereHas('sumberdana', function ($q2) use ($search) {
                $q2->where('sumberdana', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: tahun pilihan
            $q->orWhereHas('tahunpilihan', function ($q2) use ($search) {
                $q2->where('tahunpilihan', 'LIKE', "%{$search}%");
            });

            // 🔍 Relasi: user (nama satker atau username)
            $q->orWhereHas('user', function ($q2) use ($search) {
                $q2->where('name', 'LIKE', "%{$search}%")
                   ->orWhere('username', 'LIKE', "%{$search}%");
            });
        });
    }

    // ✅ Urutkan terbaru dulu
    $query->orderBy('created_at', 'desc');

    // ✅ Pagination data
    $data = $query->paginate($perPage);

    $data_totalpekerjaan = paketpekerjaanmasjaki::count();
    // ✅ Jika request AJAX (misal dari live search / pagination JS)
    if ($request->ajax()) {
        return view('backend.04_datajakon.06_profilpaketpekerjaan.partials.table', compact('data'))->render();
    }

     $data_global = paketpekerjaanmasjaki::with('profiljenispekerjaan')->get();

        // Hitung total semua data
        $total = $data_global->count();

        // Kelompokkan berdasarkan jenis pekerjaan dari tabel profiljenispekerjaan
        $data_statistik = $data_global->groupBy(function ($item) {
            // Ambil nama jenis pekerjaan dari tabel profiljenispekerjaan
            return $item->profiljenispekerjaan->jenispekerjaan ?? 'Tidak Diketahui';
        })->map(function ($group, $jenis) use ($total) {
            $jumlah = $group->count();
            $persentase = $total > 0 ? ($jumlah / $total) * 100 : 0;

            return [
                'jenis' => $jenis,
                'jumlah' => $jumlah,
                'persentase' => $persentase,
            ];
        })->values(); // ubah jadi array numerik agar mudah di-loop di Blade

        // STATUS PAKET PEKERJAAN
         $data_statuspekerjaan = paketpekerjaanmasjaki::with('paketstatuspekerjaan')->get();

        // Hitung total semua data
        $total = $data_statuspekerjaan->count();

        // Kelompokkan berdasarkan nama status dari tabel paketstatuspekerjaan
        $data_totalstatuspekerjaan = $data_statuspekerjaan->groupBy(function ($item) {
            // Pastikan nama kolom di tabel relasi sesuai dengan field statusnya
            return $item->paketstatuspekerjaan->paketstatuspekerjaan ?? 'Tidak Diketahui';
        })->map(function ($group, $status) use ($total) {
            $jumlah = $group->count();
            $persentase = $total > 0 ? ($jumlah / $total) * 100 : 0;

            return [
                'jenis' => $status,
                'jumlah' => $jumlah,
                'persentase' => $persentase,
            ];
        })->values();

        // STATUS PAKET PEKERJAAN
         $data_allsumberdana = paketpekerjaanmasjaki::with('sumberdana')->get();

        // Hitung total semua data
        $total = $data_allsumberdana->count();

        // Kelompokkan berdasarkan nama status dari tabel paketstatuspekerjaan
        $data_sumberdana = $data_allsumberdana->groupBy(function ($item) {
            // Pastikan nama kolom di tabel relasi sesuai dengan field statusnya
            return $item->sumberdana->sumberdana ?? 'Tidak Diketahui';
        })->map(function ($group, $status) use ($total) {
            $jumlah = $group->count();
            $persentase = $total > 0 ? ($jumlah / $total) * 100 : 0;

            return [
                'jenis' => $status,
                'jumlah' => $jumlah,
                'persentase' => $persentase,
            ];
        })->values();

        // PAKET PEKERJAAN PER TAHUN
         $data_alltahun = paketpekerjaanmasjaki::with('tahunpilihan')->get();

        // Hitung total semua data
        $total = $data_alltahun->count();

        // Kelompokkan berdasarkan nama status dari tabel paketstatuspekerjaan
        $data_tahun = $data_alltahun->groupBy(function ($item) {
            // Pastikan nama kolom di tabel relasi sesuai dengan field statusnya
            return $item->tahunpilihan->tahunpilihan ?? 'Tidak Diketahui';
        })->map(function ($group, $status) use ($total) {
            $jumlah = $group->count();
            $persentase = $total > 0 ? ($jumlah / $total) * 100 : 0;

            return [
                'jenis' => $status,
                'jumlah' => $jumlah,
                'persentase' => $persentase,
            ];
        })->values();

        // PAKET PEKERJAAN PER SATUAN KERJA
         $data_allsatuankerja = paketpekerjaanmasjaki::with('user')->get();

        // Hitung total semua data
        $total = $data_allsatuankerja->count();

        // Kelompokkan berdasarkan nama status dari tabel paketstatuspekerjaan
        $data_satuankerja = $data_allsatuankerja->groupBy(function ($item) {
            // Pastikan nama kolom di tabel relasi sesuai dengan field statusnya
            return $item->user->name ?? 'Tidak Diketahui';
        })->map(function ($group, $status) use ($total) {
            $jumlah = $group->count();
            $persentase = $total > 0 ? ($jumlah / $total) * 100 : 0;

            return [
                'jenis' => $status,
                'jumlah' => $jumlah,
                'persentase' => $persentase,
            ];
        })->values();


    // ✅ View utama
    return view('backend.04_datajakon.06_profilpaketpekerjaan.statistik', [
        'title'   => 'Statistik Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search,
        'data_statistik'  => $data_statistik,
        'data_totalpekerjaan'  => $data_totalpekerjaan,
        'data_totalstatuspekerjaan'  => $data_totalstatuspekerjaan,
        'data_sumberdana'  => $data_sumberdana,
        'data_tahun'  => $data_tahun,
        'data_satuankerja'  => $data_satuankerja,
    ]);
}



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


public function paketpekerjaanupdatenew(Request $request, $id)
{
    // Validasi input
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
    ]);

    // Cari data berdasarkan ID
    $paket = paketpekerjaanmasjaki::findOrFail($id);

    // Update data ke database
    $paket->update([
        'profiljenispekerjaan_id' => $validated['profiljenispekerjaan_id'] ?? $paket->profiljenispekerjaan_id,
        'paketstatuspekerjaan_id' => $validated['paketstatuspekerjaan_id'] ?? $paket->paketstatuspekerjaan_id,
        'sumberdana_id' => $validated['sumberdana_id'] ?? $paket->sumberdana_id,
        'tahunpilihan_id' => $validated['tahunpilihan_id'] ?? $paket->tahunpilihan_id,
        'bulanrekap_id' => $validated['bulanrekap_id'] ?? $paket->bulanrekap_id,
        'user_id' => $validated['user_id'] ?? $paket->user_id,

        'namapekerjaan' => $validated['namapekerjaan'] ?? $paket->namapekerjaan,
        'cvptpenyedia' => $validated['cvptpenyedia'] ?? $paket->cvptpenyedia,
        'nib' => $validated['nib'] ?? $paket->nib,
        'nilaikontrak' => $validated['nilaikontrak'] ?? $paket->nilaikontrak,
        'jeniskontrak' => $validated['jeniskontrak'] ?? $paket->jeniskontrak,
        'karakteristikkontrak' => $validated['karakteristikkontrak'] ?? $paket->karakteristikkontrak,
        'bulanmulai' => $validated['bulanmulai'] ?? $paket->bulanmulai,
        'bulanselesai' => $validated['bulanselesai'] ?? $paket->bulanselesai,
        'progress' => $validated['progress'] ?? $paket->progress,
    ]);

    // Pesan sukses
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diperbarui!');
    return redirect()->route('bepaketpekerjaanindex');
}

}

