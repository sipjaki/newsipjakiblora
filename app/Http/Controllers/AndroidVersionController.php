<?php

namespace App\Http\Controllers;

use App\Models\allskktenagakerjablora;
use App\Models\strukturdinas;

use Illuminate\Support\Facades\Cache;

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
use App\Models\skktenagakerjablora;
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
                      ->orWhere('no_telepon', 'LIKE', "%{$search}%");
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
                      ->orWhere('no_telepon', 'LIKE', "%{$search}%");
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

        public function menuresalltkkblora(Request $request)
        {

            $perPage = $request->input('perPage', 10);
            $search = $request->input('search');
            $page = $request->input('page', 1); // Ambil halaman saat ini

            // Buat kunci cache unik berdasarkan pencarian & halaman
            $cacheKey = "search_" . md5($search . "_page_" . $page . "_perPage_" . $perPage);

            $data = Cache::remember($cacheKey, 300, function () use ($search, $perPage, $page) {
                $query = skktenagakerjablora::select('id', 'nama', 'statusterbit', 'jabatankerja_id', 'asosiasimasjaki_id');

                if ($search) {
                    $query->where('nama', 'LIKE', "%{$search}%");
                }

                return $query->paginate($perPage, ['*'], 'page', $page); // Pastikan pagination tetap jalan
            });


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


}
