<?php

namespace App\Http\Controllers;

use App\Models\allskktenagakerjablora;
use App\Models\asosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AllskktenagakerjabloraController extends Controller
{
    //

    // public function index()
    // {
    //     $user = Auth::user();
    //     $data = allskktenagakerjablora::paginate(10);

    //     return view('frontend.04_pembinaan.02_skktenagakerja.index', [
    //         'title' => 'Daftar Peserta SKK Tenaga Konstruksi Kabupaten Blora',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
            //   ->orWhere('alamat', 'LIKE', "%{$search}%")
            //   ->orWhere('email', 'LIKE', "%{$search}%")
            //   ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                $q->where('tahunpilihan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
            });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_skktenagakerja.partials.table', compact('data'))->render()
        ]);
    }


    return view('frontend.04_pembinaan.02_skktenagakerja.index', [
        'title' => 'Daftar Peserta SKK Tenaga Konstruksi Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function skktenagakerjablorashow($nik)
    {
        $dataall = allskktenagakerjablora::where('nik', $nik)->first();

        // if (!$dataall) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = tahunpilihan::where('tahunpilihan_id', $dataall->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.02_skktenagakerja.show', [
        'title' => 'Data Peserta SKK Kabupaten Blora',
        'data' => $dataall,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


}
