<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\allskktenagakerjablora;
use App\Models\strukturdinas;
use App\Models\pesertapelatihan;
use App\Models\materipelatihanskk;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\tertibjasakonstruksi;
use App\Models\surattertibjakonusaha1;
use App\Models\surattertibjakonusaha2;
use App\Models\surattertibjakonusaha3;
use App\Models\surattertibjakonusaha4;
use App\Models\pengawasanbujk;
use App\Models\kecelakaankerjamasjaki;
// use App\Models\informasisurattertibpenyelenggaraan;

use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\renstra;
use App\Models\tupoksi;
use App\Models\profiljakonidentitasopd;
use App\Models\profiljakoninformasi;
use App\Models\profiljakonkabid;
use App\Models\profiljakonkepaladinas;
use App\Models\profiljakonpersonil;
use App\Models\profiljakonsipjaki;
use App\Models\profiljakonsubkoordinator;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\informasisurattertibpenyelenggaraan;
use App\Models\materipelatihan;
use App\Models\skktenagakerjablora;
use App\Models\paketpekerjaanmasjaki;
use App\Models\surattertibjakonpemanfaatan1;
use App\Models\surattertibjakonpemanfaatan2;
use App\Models\surattertibjakonpemanfaatan3;
use App\Models\surattertibjakonpemanfaatan4;
use App\Models\surattertibjakonpemanfaatan5;
use App\Models\surattertibjakonpenyelenggaraan1;
use App\Models\surattertibjakonpenyelenggaraan2;
use App\Models\surattertibjakonpenyelenggaraan3;
use App\Models\surattertibjakonpenyelenggaraan4;
use App\Models\surattertibjakonpenyelenggaraan5;
use App\Models\surattertibjakonpenyelenggaraan6;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AndroidVersionController extends Controller
{

    // MENU BERITA

    public function menuberita()
    {
        $user = Auth::user();

        return view('frontend.00_android.A_menuberita.index', [
        'title' => 'Menu Berita',
        'user' => $user,
    ]);
    }

    // ================ MENU KELEMBAGAAN =======================================

    public function menukelembagaan()
    {
        $user = Auth::user();

        return view('frontend.00_android.B_menukelembagaan.index', [
        'title' => 'Menu Kelembagaan',
        'user' => $user,
    ]);
    }

    public function menustruktur()
    {
        $data= strukturdinas::all();
        $user = Auth::user();

        return view('frontend.00_android.B_menukelembagaan.01_struktur.index', [
        'title' => 'Struktur Organisasi Bidang Bangunan Gedung DPUPR Kabupaten Blora',
        'user' => $user,
        'data' => $data,
    ]);
    }


    public function menuprofiljakon()
    {
        $data = renstra::all(); // Menggunakan paginate() untuk pagination
        $dataidentitasopd = profiljakonidentitasopd::all(); // Menggunakan paginate() untuk pagination
        $datakepaladinas = profiljakonkepaladinas::all(); // Menggunakan paginate() untuk pagination
        $datakabid = profiljakonkabid::all(); // Menggunakan paginate() untuk pagination
        $datasubkoordinator = profiljakonsubkoordinator::all(); // Menggunakan paginate() untuk pagination
        $datainformasi = profiljakoninformasi::all(); // Menggunakan paginate() untuk pagination
        $datasipjaki = profiljakonsipjaki::all(); // Menggunakan paginate() untuk pagination
        $datapersonil = profiljakonpersonil::all(); // Menggunakan paginate() untuk pagination

        $user = Auth::user();

        return view('frontend.00_android.B_menukelembagaan.02_profiljakon.index', [
            'title' => 'Profil Jakon DPUPR Kabupaten Blora',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

            'dataidentitasopd' => $dataidentitasopd, // Mengirimkan data paginasi ke view
            'datakepaladinas' => $datakepaladinas, // Mengirimkan data paginasi ke view
            'datakabid' => $datakabid, // Mengirimkan data paginasi ke view
            'datasubkoordinator' => $datasubkoordinator, // Mengirimkan data paginasi ke view
            'datainformasi' => $datainformasi, // Mengirimkan data paginasi ke view
            'datasipjaki' => $datasipjaki, // Mengirimkan data paginasi ke view
            'datapersonil' => $datapersonil, // Mengirimkan data paginasi ke view

        ]);
    }

            public function menutupoksi()
        {
            $data= tupoksi::all(); // Menggunakan paginate() untuk pagination
            $user = Auth::user();

            return view('frontend.00_android.B_menukelembagaan.03_tupoksi.index', [
                'title' => 'Tupoksi Jakon DPUPR Kabupaten Blora',
                'data' => $data, // Mengirimkan data paginasi ke view
                'user' => $user, // Mengirimkan data paginasi ke view
            ]);
        }

        // ===========================================================

        public function menudatajakon()
        {
            $user = Auth::user();

            return view('frontend.00_android.C_datajakon.index', [
            'title' => 'Menu Data Jakon',
            'user' => $user,
        ]);
        }


        public function menubujkkontraktor(Request $request)
        {
            $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = bujkkontraktor::query();

            if ($search) {
                $query->where('namalengkap', 'LIKE', "%{$search}%")
                      ->orWhere('alamat', 'LIKE', "%{$search}%")
                    //   ->orWhere('no_telepon', 'LIKE', "%{$search}%")
                      ;
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.C_datajakon.01_bujkkontraktor.partials.table', compact('data'))->render()
                ]);
            }

            return view('frontend.00_android.C_datajakon.01_bujkkontraktor.index', [
                'title' => 'BUJK Konstruksi',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

        public function menubujkkontraktordetails($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


            // Ambil data user saat ini
            $user = Auth::user();

            return view('frontend.00_android.C_datajakon.01_bujkkontraktor.show', [
                'title' => 'Details Data Bujk Konstruksi',
                'data' => $databujkkontraktor,
                'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
                'user' => $user,
                'start' => $start,
            ]);
        }


        public function menubujkkonsultan(Request $request)
        {
            $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = bujkkonsultan::query();

            if ($search) {
                $query->where('namalengkap', 'LIKE', "%{$search}%")
                      ->orWhere('alamat', 'LIKE', "%{$search}%")
                    //   ->orWhere('no_telepon', 'LIKE', "%{$search}%")
                      ;
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.C_datajakon.02_bujkkonsultan.partials.table', compact('data'))->render()
                ]);
            }

            return view('frontend.00_android.C_datajakon.02_bujkkonsultan.index', [
                'title' => 'BUJK Konsultasi Konstruksi',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

        public function menubujkkonsultandetails($namalengkap)
    {
        $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

        if (!$databujkkonsultan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(50);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


            // Ambil data user saat ini
            $user = Auth::user();

            return view('frontend.00_android.C_datajakon.02_bujkkonsultan.show', [
                'title' => 'Details Data Bujk Konsultasi Konstruksi',
                'data' => $databujkkonsultan,
                'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
                'user' => $user,
                'start' => $start,
            ]);
        }



        // -==============================================================================================================
        // public function menuresalltkkblora(Request $request)
        // {
        //     $perPage = $request->input('perPage', 25);
        //     $search = $request->input('search', '');
        //     $page = $request->input('page', 1);

        //     // Cache key unik berdasarkan search tanpa halaman (biar cache tetap valid)
        //     $cacheKey = "search_" . md5($search);

        //     // Hapus cache jika ada search baru
        //     if ($page == 1) {
        //         Cache::forget($cacheKey);
        //     }

        //     // Ambil data dari cache atau query database
        //     $allData = Cache::remember($cacheKey, 300, function () use ($search) {
        //         $query = skktenagakerjablora::select('id', 'nama', 'statusterbit', 'jabatankerja_id', 'asosiasimasjaki_id');

        //         if (!empty($search)) {
        //             $query->where('nama', 'LIKE', "%{$search}%");
        //         }

        //         return $query->get(); // Ambil semua hasil, biar pagination tetap berjalan
        //     });

        //     // Manual Paginate dari hasil cache
        //     $total = count($allData);
        //     $items = collect($allData)->forPage($page, $perPage)->values();
        //     $data = new LengthAwarePaginator($items, $total, $perPage, $page, [
        //         'path' => request()->url(),
        //         'query' => request()->query()
        //     ]);

        //     if ($request->ajax()) {
        //         return response()->json([
        //             'html' => view('frontend.00_android.C_datajakon.06_tkkkabblora.partials.table', compact('data'))->render()
        //         ]);
        //     }

        //     return view('frontend.00_android.C_datajakon.06_tkkkabblora.index', [
        //         'title' => 'TKK Kabupaten Blora',
        //         'data' => $data,
        //         'perPage' => $perPage,
        //         'search' => $search
        //     ]);
        // }

        public function menuresalltkkblora(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search', '');
    $page = $request->input('page', 1);

    // Cache key yang konsisten dan jelas
    $cacheKey = "blora_tkk_" . md5("page_{$page}_search_{$search}");

    if ($page == 1) {
        Cache::forget($cacheKey);
    }

    $allData = Cache::remember($cacheKey, 300, function () use ($search) {
        $query = skktenagakerjablora::select('id', 'nama', 'statusterbit', 'jabatankerja_id', 'asosiasimasjaki_id')
            // HANYA tampilkan data yang TIDAK 99 atau NULL
            ->where(function ($q) {
                $q->where('asosiasimasjaki_id', '!=', 99)
                  ->orWhereNull('asosiasimasjaki_id');
            });

        // Cek kalau ada pencarian
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'LIKE', "%{$search}%");
            });
        }

        return $query->get();
    });

    $total = count($allData);
    $items = collect($allData)->forPage($page, $perPage)->values();
    $data = new LengthAwarePaginator($items, $total, $perPage, $page, [
        'path' => request()->url(),
        'query' => request()->query()
    ]);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.00_android.C_datajakon.06_tkkkabblora.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.00_android.C_datajakon.06_tkkkabblora.index', [
        'title' => 'TKK Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}
        // -==============================================================================================================
        public function menuresalltkkbloradpupr(Request $request)
        {
            $perPage = $request->input('perPage', 25);
            $search = $request->input('search', '');
            $page = $request->input('page', 1);

            // Cache key unik berdasarkan search + filter asosiasi
            $cacheKey = "search_" . md5($search . '_asosiasi_99');

            // Hapus cache jika ada search baru di halaman 1
            if ($page == 1) {
                Cache::forget($cacheKey);
            }

            $allData = Cache::remember($cacheKey, 300, function () use ($search) {
                $query = skktenagakerjablora::select('id', 'nama', 'statusterbit', 'jabatankerja_id', 'asosiasimasjaki_id')
                    ->where('asosiasimasjaki_id', 99); // hanya ambil data asosiasi ID 99

                if (!empty($search)) {
                    $query->where('nama', 'LIKE', "%{$search}%");
                }

                return $query->get(); // Ambil semua hasil, untuk keperluan pagination
            });

            // Manual paginate
            $total = count($allData);
            $items = collect($allData)->forPage($page, $perPage)->values();
            $data = new LengthAwarePaginator($items, $total, $perPage, $page, [
                'path' => request()->url(),
                'query' => request()->query()
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.C_datajakon.05_tkkdpupr.partials.table', compact('data'))->render()
                ]);
            }

            return view('frontend.00_android.C_datajakon.05_tkkdpupr.index', [
                'title' => 'TKK Di Selenggarakan DPUPR',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

        public function menuresalltkkbloradetails($id)
    {
        $dataskktenagakerjablora = skktenagakerjablora::where('id', $id)->first();
            // Ambil data user saat ini
            $user = Auth::user();

            return view('frontend.00_android.C_datajakon.06_tkkkabblora.show', [
                'title' => 'Details Data TKK Kabupaten Blora',
                'data' => $dataskktenagakerjablora,
                'user' => $user,

            ]);
        }


        // -------------------------------

        public function menuresprofilpaketpekerjaan(Request $request)
        {
            $perPage = $request->input('perPage', 25);
            $search = $request->input('search', '');
            $page = $request->input('page', 1);

            // Cache key yang konsisten dan jelas
            $cacheKey = "paketpekerjaanmasjaki_" . md5("page_{$page}_search_{$search}");

            if ($page == 1) {
                Cache::forget($cacheKey);  // Menghapus cache jika berada di halaman pertama
            }

            // Query untuk mengambil data dengan relasi 'user' dan pencarian
            $query = paketpekerjaanmasjaki::select('id', 'user_id', 'profiljenispekerjaan_id', 'paketstatuspekerjaan_id', 'namapekerjaan', 'bulanrekap_id', 'progress', 'detailsnamapaketpekerjaan_id', 'detailspaketpekerjaan_id', 'sppbj_id', 'spk_id', 'sskk_id', 'suratperjanjianpekerjaan_id'); // Memuat relasi 'user' hanya mengambil id dan name

            // Menambahkan pencarian berdasarkan kolom
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('namapekerjaan', 'LIKE', "%{$search}%");
                        // ->orWhere('profiljenispekerjaan_id', 'LIKE', "%{$search}%")
                        // ->orWhere('paketstatuspekerjaan_id', 'LIKE', "%{$search}%")
                        // ->orWhere('bulanrekap_id', 'LIKE', "%{$search}%")
                        // ->orWhere('detailsnamapaketpekerjaan_id', 'LIKE', "%{$search}%")
                        // ->orWhere('detailspaketpekerjaan_id', 'LIKE', "%{$search}%")
                        // ->orWhere('sppbj_id', 'LIKE', "%{$search}%")
                        // ->orWhere('spk_id', 'LIKE', "%{$search}%")
                        // ->orWhere('sskk_id', 'LIKE', "%{$search}%")
                        // ->orWhere('suratperjanjianpekerjaan_id', 'LIKE', "%{$search}%");

                    // Pencarian untuk nama user melalui relasi 'user'
                    $q->orWhereHas('user', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%{$search}%");
                    });

                });
            }

            // Mengambil semua data berdasarkan query dan pagination
            $allData = $query->get();
            $total = count($allData);
            $items = collect($allData)->forPage($page, $perPage)->values();
            $data = new LengthAwarePaginator($items, $total, $perPage, $page, [
                'path' => request()->url(),
                'query' => request()->query()
            ]);

            // Cek jika request menggunakan ajax
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.C_datajakon.07_profilpaketpekerjaan.partials.table', compact('data'))->render()
                ]);
            }

            // Ambil data user yang sedang login
            $user = Auth::user();
            $users = User::all();
            // Ambil semua user jika diperlukan (misalnya untuk dropdown)
            // Kembalikan view dengan data
            return view('frontend.00_android.C_datajakon.07_profilpaketpekerjaan.index', [
                'title' => 'Paket Pekerjaan Kabupaten Blora',
                'data' => $data,
                'user' => $user,
                'users' => $users,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }



        // MENU PEMBINAAN JASA KONSTRUKSI

        // -==============================================================================================================
        public function menurespembinaan()
        {
            $user = Auth::user();

            return view('frontend.00_android.D_pembinaan.index', [
                'title' => 'Menu Pembinaan Jasa Konstruksi',
                'user' => $user,
            ]);
        }

        // MENU AGENDA PELATIHAN ------------------

        public function menuresagendapelatihan(Request $request)
        {
            $perPage = $request->input('perPage', 5);
            $search = $request->input('search');

            $query = agendapelatihan::query();

            if ($search) {
                $query->where('namakegiatan', 'LIKE', "%{$search}%")
                ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhere('penutupan', 'LIKE', "%{$search}%")
                ->orWhere('foto', 'LIKE', "%{$search}%");
                // ->orWhere('no_telepon', 'LIKE', "%{$search}%");
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.D_pembinaan.01_agendapelatihan.partials.table', compact('data'))->render()
                ]);
            }
            $user = Auth::user();

            return view('frontend.00_android.D_pembinaan.01_agendapelatihan.index', [
                'title' => 'Agenda Pelatihan Jasa Konstruksi Kabupaten Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search,
                'user' => $user, // Mengirimkan data paginasi ke view
            ]);
        }

             // MENU DETAILS AGENDA PELATIHAN JASA KONSTRKSI KABUPATEN BLORA

             public function menuresagendapelatihandetails($namakegiatan)
             {
                 $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

                 if (!$dataagendapelatihan) {
                     // Tangani jika kegiatan tidak ditemukan
                     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
                 }

                 // Menggunakan paginate() untuk pagination
                 $subdata = materipelatihan::where('agendapelatihan_id', $dataagendapelatihan->id)->paginate(50);

                   // Menghitung nomor urut mulai
                     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;

             $user = Auth::user();


             return view('frontend.00_android.D_pembinaan.01_agendapelatihan.show', [
                 'title' => 'Agenda Pelatihan  Tenaga Kerja Konstruksi Kabupaten Blora',
                 'data' => $dataagendapelatihan,
                 'datamateripelatihan' => $subdata,
                 // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
                 'user' => $user,
                 // 'start' => $start,
             ]);
             }


             public function respesertapelatihan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.D_pembinaan.02_pesertapelatihan.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();
        $datasub = jenjang::all();
        $datasubkategori = kategoripelatihan::all();


        return view('frontend.00_android.D_pembinaan.02_pesertapelatihan.index', [
            'title' => 'Agenda Pelatihan Jasa Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'datasub' => $datasub,
            'datasubkategori' => $datasubkategori,
            'user' => $user
        ]);
    }

            //  MENU PESERTA AGENDA PERLATIHAN ===================================================

            public function menurespelatihanpeserta(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 50);
        $search = $request->input('search');

        $query = pesertapelatihan::query();

        if ($search) {
            $query->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhereHas('user', function ($q) use ($search) {
                      $q->where('user', 'LIKE', "%{$search}%");
                  });

        }

        $datapesertapelatihan = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.D_pembinaan.02_pesertapelatihan.partials.table', compact('data'))->render()
            ]);
        }

        $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // Jika asosiasi tidak ditemukan, tampilkan 404
        if (!$agendapelatihan) {
            return abort(404, 'Asosiasi tidak ditemukan');
        }

        $user = Auth::user();

            $datapesertapelatihan = pesertapelatihan::where('agendapelatihan_id', $agendapelatihan->id)
                        ->select(['id', 'user_id', 'jeniskelamin', 'instansi', 'jenjangpendidikan_id', 'nik', 'tanggallahir', 'notelepon', 'sertifikat', 'verifikasi' ])
                        ->paginate(25);

        $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
        // $datauser = user::all();

        // Ambil data user saat ini
        $user = Auth::user();


        return view('frontend.00_android.D_pembinaan.02_pesertapelatihan.show', [
            'title' => 'Daftar Peserta Agenda ',
            'data' => $dataagendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user,
            // 'datapeserta' => $datauser
        ]);
    }


        // MENU AGENDA SERTIFIKASI TKK JASA KONSTRUKSI KAB BLORA  ------------------

        public function menuresagendatkk(Request $request)
        {
            $perPage = $request->input('perPage', 5);
            $search = $request->input('search');

            $query = agendaskk::query();

            if ($search) {
                $query->where('namakegiatan', 'LIKE', "%{$search}%")
                ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhere('penutupan', 'LIKE', "%{$search}%")
                ->orWhere('foto', 'LIKE', "%{$search}%");
                // ->orWhere('no_telepon', 'LIKE', "%{$search}%");
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.D_pembinaan.03_agendatkk.partials.table', compact('data'))->render()
                ]);
            }
            $user = Auth::user();

            return view('frontend.00_android.D_pembinaan.03_agendatkk.index', [
                'title' => 'Agenda Pelatihan Jasa Konstruksi Kabupaten Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search,
                'user' => $user, // Mengirimkan data paginasi ke view
            ]);
        }

             // MENU DETAILS AGENDA TKK SERTIFIKASI JASA KONSTRKSI KABUPATEN BLORA

             public function menuresagendatkkdetails($namakegiatan)
             {
                 $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

                 if (!$dataagendaskk) {
                     // Tangani jika kegiatan tidak ditemukan
                     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
                 }

                 // Menggunakan paginate() untuk pagination
                 $subdata = materipelatihanskk::where('agendaskk_id', $dataagendaskk->id)->paginate(50);

                   // Menghitung nomor urut mulai
                     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;

             $user = Auth::user();


             return view('frontend.00_android.D_pembinaan.03_agendatkk.show', [
                 'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi Kabupaten Blora',
                 'data' => $dataagendaskk,
                 'datamateripelatihanskk' => $subdata,
                 // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
                 'user' => $user,
                 // 'start' => $start,
             ]);
             }

             public function menurespesertaskk(Request $request)
             {
                 $perPage = $request->input('perPage', 10);
                 $search = $request->input('search');

                 $query = agendaskk::query();

                 if ($search) {
                     $query->where('namakegiatan', 'LIKE', "%{$search}%")
                           ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                           ->orWhere('lokasi', 'LIKE', "%{$search}%")
                           ->orWhere('keterangan', 'LIKE', "%{$search}%")
                           ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                               $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                           });

                 }

                 $data = $query->paginate($perPage);

                 if ($request->ajax()) {
                     return response()->json([
                         'html' => view('frontend.00_android.D_pembinaan.04_pesertaskk.table', compact('data'))->render()
                     ]);
                 }

                 $user = Auth::user();
                //  $datasub = jenjang::all();
                //  $datasubkategori = kategoripelatihan::all();


                 return view('frontend.00_android.D_pembinaan.04_pesertaskk.index', [
                     'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi Kabupaten Blora',
                     'data' => $data,
                     'perPage' => $perPage,
                     'search' => $search,
                    //  'datasub' => $datasub,
                    //  'datasubkategori' => $datasubkategori,
                     'user' => $user
                 ]);
             }

                     //  MENU PESERTA AGENDA PERLATIHAN ===================================================

                     public function menuresskkpeserta(Request $request, $namakegiatan)
             {
                 $perPage = $request->input('perPage', 50);
                 $search = $request->input('search');

                 $query = allskktenagakerjablora::query();

                 if ($search) {
                     $query->where('namalengkap', 'LIKE', "%{$search}%")
                           ->orWhere('jabatankerja', 'LIKE', "%{$search}%")
                           ->orWhere('email', 'LIKE', "%{$search}%")
                           ->orWhereHas('user', function ($q) use ($search) {
                               $q->where('user', 'LIKE', "%{$search}%");
                           })
                           ->orWhereHas('jenjangpendidikan', function ($q) use ($search) {
                               $q->where('jenjangpendidikan', 'LIKE', "%{$search}%");
                           })
                           ->orWhereHas('jabatankerja', function ($q) use ($search) {
                               $q->where('jabatankerja', 'LIKE', "%{$search}%");
                           });

                 }

                 $datapesertapelatihan = $query->paginate($perPage);

                 if ($request->ajax()) {
                     return response()->json([
                         'html' => view('frontend.00_android.D_pembinaan.04_pesertaskk.partials.table', compact('data'))->render()
                     ]);
                 }

                 $agendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

                 // Jika asosiasi tidak ditemukan, tampilkan 404
                 if (!$agendaskk) {
                     return abort(404, 'Asosiasi tidak ditemukan');
                 }

                 $user = Auth::user();

                     $datapeserta = allskktenagakerjablora::where('agendaskk_id', $agendaskk->id)
                                 ->select(['id', 'user_id', 'jabatankerja_id', 'tempatlahir', 'ttl', 'jeniskelamin', 'nik', 'jenjangpendidikan_id', 'email' ])
                                 ->paginate(25);

                 // Ambil data user saat ini
                 $user = Auth::user();


                 return view('frontend.00_android.D_pembinaan.04_pesertaskk.show', [
                     'title' => 'Daftar Peserta Sertifikasi ',
                     'data' => $agendaskk,
                     'datapeserta' => $datapeserta,
                     'perPage' => $perPage,
                     'search' => $search,
                     'user' => $user,
                     // 'datapeserta' => $datauser
                 ]);
             }



        // MENU PENGAWASAN JASA KONSTRUKSI
        // -==============================================================================================================
        public function menurespengawasan()
        {
            $user = Auth::user();

            return view('frontend.00_android.E_pengawasan.index', [
            'title' => 'Menu Pengawasan Jasa Konstruksi',
            'user' => $user,
        ]);
        }

        public function menuresjakonusaha(Request $request)
        {
            // Ambil parameter perPage dan search dari request
            $perPage = $request->input('perPage', 15);  // Default 15 per halaman
            $search = $request->input('search');

            // Membuat query untuk model tertibjasakonstruksi
            $query = tertibjasakonstruksi::query();

            // Tambahkan kondisi pencarian jika ada keyword pencarian
            if ($search) {
                $query->where('namabadanusaha', 'LIKE', "%{$search}%")
                      ->orWhere('pjbu', 'LIKE', "%{$search}%")
                    //   ->orWhere('pjbu', 'LIKE', "%{$search}%")
                      // Menggunakan whereHas untuk relasi penyedia
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // Ganti penyedia_column_name dengan nama kolom yang relevan di relasi 'penyedia'
                      });
            }

            // Lakukan pagination dengan hasil pencarian
            $data = $query->paginate($perPage);

            // Jika request adalah AJAX, kembalikan hasil dalam bentuk HTML
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.E_pengawasan.01_tertibjakonusaha.partials.table', compact('data'))->render()
                ]);
            }

            // Ambil data untuk surat-surat terkait
            $satasurat1 = surattertibjakonusaha1::all();
            $satasurat2 = surattertibjakonusaha2::all();
            $satasurat3 = surattertibjakonusaha3::all();
            $satasurat4 = surattertibjakonusaha4::all();

            // Ambil data user yang sedang login
            $user = Auth::user();

            // Mengirimkan data ke view
            return view('frontend.00_android.E_pengawasan.01_tertibjakonusaha.index', [
                'title' => 'Daftar Tertib Usaha Jasa Konstruksi Kabupaten Blora',
                'data' => $data,  // Mengirimkan data paginasi ke view
                'user' => $user,  // Mengirimkan data user ke view
                'datasurat1' => $satasurat1,  // Mengirimkan data surat1 ke view
                'datasurat2' => $satasurat2,  // Mengirimkan data surat2 ke view
                'datasurat3' => $satasurat3,  // Mengirimkan data surat3 ke view
                'datasurat4' => $satasurat4,  // Mengirimkan data surat4 ke view
                'search' => $search,  // Mengirimkan parameter pencarian ke view
                'perPage' => $perPage,  // Mengirimkan parameter perPage ke view
            ]);
        }

        public function menuresjakonpemanfataan(Request $request)
        {
            // Ambil parameter perPage dan search dari request
            $perPage = $request->input('perPage', 15);  // Default 15 per halaman
            $search = $request->input('search');

            // Membuat query untuk model tertibjasakonstruksi
            $query = tertibjakonpemanfaatan::query();

            // Tambahkan kondisi pencarian jika ada keyword pencarian
            if ($search) {
                $query->where('namabangunan', 'LIKE', "%{$search}%")
                      ->orWhere('lokasi', 'LIKE', "%{$search}%")
                    //   ->orWhere('pjbu', 'LIKE', "%{$search}%")
                      // Menggunakan whereHas untuk relasi penyedia
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // Ganti penyedia_column_name dengan nama kolom yang relevan di relasi 'penyedia'
                      });
            }

            // Lakukan pagination dengan hasil pencarian
            $data = $query->paginate($perPage);

            // Jika request adalah AJAX, kembalikan hasil dalam bentuk HTML
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.E_pengawasan.02_tertibpemanfaatan.partials.table', compact('data'))->render()
                ]);
            }

            // Ambil data untuk surat-surat terkait
            $satasurat1 = surattertibjakonpemanfaatan1::all();
            $satasurat2 = surattertibjakonpemanfaatan2::all();
            $satasurat3 = surattertibjakonpemanfaatan3::all();
            $satasurat4 = surattertibjakonpemanfaatan4::all();
            $satasurat5 = surattertibjakonpemanfaatan5::all();


            // Ambil data user yang sedang login
            $user = Auth::user();

            // Mengirimkan data ke view
            return view('frontend.00_android.E_pengawasan.02_tertibpemanfaatan.index', [
                'title' => 'Daftar Tertib Pemanfaatan Jasa Konstruksi Kabupaten Blora',
                'data' => $data,  // Mengirimkan data paginasi ke view
                'user' => $user,  // Mengirimkan data user ke view
                'datasurat1' => $satasurat1,  // Mengirimkan data surat1 ke view
                'datasurat2' => $satasurat2,  // Mengirimkan data surat2 ke view
                'datasurat3' => $satasurat3,  // Mengirimkan data surat3 ke view
                'datasurat4' => $satasurat4,  // Mengirimkan data surat4 ke view
                'datasurat5' => $satasurat5,  // Mengirimkan data surat4 ke view
                'search' => $search,  // Mengirimkan parameter pencarian ke view
                'perPage' => $perPage,  // Mengirimkan parameter perPage ke view
            ]);
        }

        public function menuresjakonpenyelenggaraan(Request $request)
        {
            // Ambil parameter perPage dan search dari request
            $perPage = $request->input('perPage', 15);  // Default 15 per halaman
            $search = $request->input('search');

            // Membuat query untuk model tertibjasakonstruksi
            $query = tertibjakonpenyelenggaraan::query();

            // Tambahkan kondisi pencarian jika ada keyword pencarian
            if ($search) {
                $query->where('kegiatankonstruksi', 'LIKE', "%{$search}%")
                      ->orWhere('bujk', 'LIKE', "%{$search}%")
                      ->orWhere('nomorkontrak', 'LIKE', "%{$search}%")
                    //   ->orWhere('pjbu', 'LIKE', "%{$search}%")
                      // Menggunakan whereHas untuk relasi penyedia
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // Ganti penyedia_column_name dengan nama kolom yang relevan di relasi 'penyedia'
                      });
            }

            // Lakukan pagination dengan hasil pencarian
            $data = $query->paginate($perPage);

            // Jika request adalah AJAX, kembalikan hasil dalam bentuk HTML
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.00_android.E_pengawasan.03_tertibpenyelenggaraan.partials.table', compact('data'))->render()
                ]);
            }

            // Ambil data untuk surat-surat terkait
            $informasidetails = informasisurattertibpenyelenggaraan::all();
            $satasurat1 = surattertibjakonpenyelenggaraan1::all();
            $satasurat2 = surattertibjakonpenyelenggaraan2::all();
            $satasurat3 = surattertibjakonpenyelenggaraan3::all();
            $satasurat4 = surattertibjakonpenyelenggaraan4::all();
            $satasurat5 = surattertibjakonpenyelenggaraan5::all();
            $satasurat6 = surattertibjakonpenyelenggaraan6::all();
            $satasurat1 = surattertibjakonpenyelenggaraan1::all();


            // Ambil data user yang sedang login
            $user = Auth::user();

            // Mengirimkan data ke view
            return view('frontend.00_android.E_pengawasan.03_tertibpenyelenggaraan.index', [
                'title' => 'Daftar Tertib Penyelenggaraan Jasa Konstruksi Kabupaten Blora',
                'data' => $data,  // Mengirimkan data paginasi ke view
                'user' => $user,  // Mengirimkan data user ke view
                'informasi' => $informasidetails,  // Mengirimkan data surat1 ke view
                'datasurat1' => $satasurat1,  // Mengirimkan data surat2 ke view
                'datasurat2' => $satasurat2,  // Mengirimkan data surat2 ke view
                'datasurat3' => $satasurat3, // Mengirimkan data surat2 ke view
                'datasurat4' => $satasurat4,  // Mengirimkan data surat2 ke view
                'datasurat5' => $satasurat5,  // Mengirimkan data surat2 ke view
                'datasurat6' => $satasurat6,  // Mengirimkan data surat2 ke view
                'search' => $search,  // Mengirimkan parameter pencarian ke view
                'perPage' => $perPage,  // Mengirimkan parameter perPage ke view
            ]);
        }


// MENU PENGAWASAN BUJK JASA KONSTRUKSI


        public function menurespengawasanbujk(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = pengawasanbujk::query();

    if ($search) {
        $query->where('kodeproyek', 'LIKE', "%{$search}%")
              ->orWhere('kodeproyek', 'LIKE', "%{$search}%")
              ->orWhere('namaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('statusmodal', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('jenisperusahaan', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.00_android.E_pengawasan.04_pengawasanbujk.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.00_android.E_pengawasan.04_pengawasanbujk.index', [
        'title' => 'Pengawasan Badan Usaha Jasa Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

// MENU KECELAKAAN KERJA JASA KONSTRUKSI

public function menureskecelakaankerja(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = kecelakaankerjamasjaki::query();

    if ($search) {
        $query->where('namapaketpekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('tahun', 'LIKE', "%{$search}%")
              ->orWhere('namaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('namatenagakerja', 'LIKE', "%{$search}%")
              ->orWhere('lokasikecelakaan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.00_android.E_pengawasan.05_kecelakaankerja.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.00_android.E_pengawasan.05_kecelakaankerja.index', [
        'title' => 'Daftar Kecelakaan Kerja Konstruksi Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}



        // MENU AHSP JASA KONSTRUKSI
        // -==============================================================================================================
        public function menuresahsp()
        {
            $user = Auth::user();

            return view('frontend.00_android.F_ahsp.index', [
            'title' => 'Menu AHSP Jasa Konstruksi',
            'user' => $user,
        ]);
        }

        // MENU RANTAI PASOK JASA KONSTRUKSI
        // -==============================================================================================================
        public function menuresrantaipasok()
        {
            $user = Auth::user();

            return view('frontend.00_android.G_rantaipasok.index', [
            'title' => 'Menu Rantai Pasok Jasa Konstruksi Kabupaten Blora',
            'user' => $user,
        ]);
        }

}
