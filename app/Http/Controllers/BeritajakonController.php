<?php

namespace App\Http\Controllers;

use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\beritajakon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BeritajakonController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $databerita = beritajakon::paginate(6);


        return view('frontend.02_beritajakon.index', [
            'title' => 'Berita Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function artikeljakon()
    {
        $user = Auth::user();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        return view('frontend.02_beritajakon.artikeljakon', [
            'title' => 'Artikel Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $dataartikel, // Mengirimkan data paginasi ke view
        ]);
    }

//     public function asosiasimasjaki(Request $request)
//     {

//         $databujkkontraktor = bujkkontraktor::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $databujkkonsultan = bujkkonsultan::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $perPage = $request->input('perPage', 10);
//         $search = $request->input('search');

//         $user = Auth::user();
//         // $data = asosiasimasjaki::paginate(15);

//         $query = bujkkonsultan::query();
//         $query = bujkkontraktor::query();

//         if ($search) {
//             $query->where('namaasosiasi', 'LIKE', "%{$search}%");
//                 //   ->orWhere('alamat', 'LIKE', "%{$search}%")
//                 //   ->orWhere('email', 'LIKE', "%{$search}%")
//                 //   ->orWhere('nib', 'LIKE', "%{$search}%");
//         }

//         $data = $query->paginate($perPage);

//         if ($request->ajax()) {
//             return response()->json([
//                 'html' => view('frontend.03_masjaki_jakon.05_asosiasimasjaki.partials.table', compact('data'))->render()
//             ]);
//         }

//         return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
//             'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
//             'user' => $user, // Mengirimkan data paginasi ke view
//             'data' => $data, // Mengirimkan data paginasi ke view
//             'perPage' => $perPage,
//             'search' => $search,
//             'databujkkontraktor' => $databujkkontraktor,
//             'databujkkonsultan' => $databujkkonsultan,
//         ]);
//     }


//     public function bujkkontraktor(Request $request)
// {
//     $perPage = $request->input('perPage', 10);
//     $search = $request->input('search');

//     $query = bujkkontraktor::query();

//     if ($search) {
//         $query->where('namalengkap', 'LIKE', "%{$search}%")
//               ->orWhere('alamat', 'LIKE', "%{$search}%")
//               ->orWhere('email', 'LIKE', "%{$search}%")
//               ->orWhere('nib', 'LIKE', "%{$search}%");
//     }

//     $data = $query->paginate($perPage);

//     if ($request->ajax()) {
//         return response()->json([
//             'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
//         ]);
//     }

//     return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
//         'title' => 'BUJK Konstruksi',
//         'data' => $data,
//         'perPage' => $perPage,
//         'search' => $search
//     ]);
// }

    public function showjudulberita($judulberita)
    {
        $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
        $databerita = beritajakon::paginate(6);

        // if (!$databeritajakon) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.02_beritajakon.showberita', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

    public function artikeljakonshow($judul)
        {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        // if (!$databeritajakon) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.02_beritajakon.artikeljakonshow', [
        'title' => 'Artikel Jasa Konstruksi',
        'data' => $dataartikeljakon,
        'dataartikel' => $dataartikel,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }



        public function beberitajakon(Request $request)
        {
            $perPage = $request->input('perPage', 5);
            $search = $request->input('search');

            $query = beritajakon::query();

            if ($search) {
                $query->where('judulberita', 'LIKE', "%{$search}%")
                    ->orWhere('tanggal', 'LIKE', "%{$search}%")
                    ->orWhere('keterangan', 'LIKE', "%{$search}%")
                    ->orWhere('foto', 'LIKE', "%{$search}%")
                    ->orWhere('foto1', 'LIKE', "%{$search}%")
                    ->orWhere('foto2', 'LIKE', "%{$search}%")
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('name', 'LIKE', "%{$search}%");
                    });
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.03_beritajakon.01_beritajakon.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.03_beritajakon.01_beritajakon.index', [
                'title' => 'Berita Jasa Konstruksi Kabupaten Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

// makan yu

        public function beberitajakondelete($judulberita)
{
    // Cari item berdasarkan judul
    $entry = beritajakon::where('judulberita', $judulberita)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beberitajakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }




    // ======================================================================================
    // ARTIKEL JAKON MAS JAKI

        public function beartikeljakon()
        {
            $data = artikeljakonmasjaki::paginate(5); // Menggunakan paginate() untuk pagination
            $user = Auth::user();

            return view('backend.03_beritajakon.02_artikeljakon.index', [
                'title' => 'Artikel Jasa Konstruksi',
                'data' => $data, // Mengirimkan data paginasi ke view
                'user' => $user, // Mengirimkan data paginasi ke view

            ]);
        }


        public function beartikeljakondelete($judul)
{
    // Cari item berdasarkan judul
    $entry = artikeljakonmasjaki::where('judul', $judul)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beartikeljakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }

}




