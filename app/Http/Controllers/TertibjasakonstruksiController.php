<?php

namespace App\Http\Controllers;

use App\Models\penyediastatustertibjakon;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\tertibjasakonstruksi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TertibjasakonstruksiController extends Controller
{
    //

    public function index()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.index', [
            'title' => 'Tertib Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function tertibjasakonstruksilist()
    // {
    //     $data = tertibjasakonstruksi::paginate(10);
    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.list', [
    //         'title' => 'Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksilist(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = tertibjasakonstruksi::query();

        $query->where('nib', 'LIKE', "%{$search}%")
                      ->orWhere('namabadanusaha', 'LIKE', "%{$search}%")
                    //   ->orWhere('pjbu', 'LIKE', "%{$search}%")
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      });

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.partials.table', compact('data'))->render()
        ]);
    }

    $datasub = penyediastatustertibjakon::paginate(15);
    return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.list', [
        'title' => 'Tertib Usaha Jasa Konstruksi',
        'data' => $data,
        'datasub' => $datasub,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    // public function tertibjasakonstruksiusahapu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 1); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahapu', [
    //         'title' => 'PU Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksiusahanonpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 2); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahanonpu', [
    //         'title' => 'Non-PU Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksiusahaswasta()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 3); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahaswasta', [
    //         'title' => 'Swasta Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksishow($namabadanusaha)
    {
        $datatertibusaha = tertibjasakonstruksi::where('namabadanusaha', $namabadanusaha)->first();

        // if (!$datatertibusaha) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = penyediastatustertibjakon::where('penyedia_id', $datatertibusaha->id)->paginate(20);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.show', [
        'title' => 'Tertib Usaha Jasa Konstruksi',
        'data' => $datatertibusaha,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

// TERTIB JAKON PEMANFAATAN MAS JAKI BLORA

    // public function tertibjasakonstruksipemanfaatan()
    // {
    //     $data = tertibjakonpemanfaatan::paginate(10);
    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.list', [
    //         'title' => 'Tertib Pemanfaatan Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksipemanfaatan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = tertibjakonpemanfaatan::query();

        $query->where('namabangunan', 'LIKE', "%{$search}%")
                      ->orWhere('nomorkontrak', 'LIKE', "%{$search}%")
                      ->orWhere('lokasi', 'LIKE', "%{$search}%")
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      });

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.partials.table', compact('data'))->render()
        ]);
    }

    $datasub = penyediastatustertibjakon::paginate(15);
    return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.list', [
        'title' => 'Tertib Pemanfaatan Jasa Konstruksi',
        'data' => $data,
        'datasub' => $datasub,
        'perPage' => $perPage,
        'search' => $search
    ]);

}

    // public function tertibjasakonstruksipemanfaatanpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpemanfaatan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 1); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.00_filter.tertibpemanfaatanpu', [
    //         'title' => 'PU Tertib Pemanfaatan Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksipemanfaatannonpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpemanfaatan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 2); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.00_filter.tertibpemanfaatannonpu', [
    //         'title' => 'Non-PU Tertib Pemanfaatan',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksipemanfaatanswasta()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpemanfaatan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 3); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.00_filter.tertibpemanfaatanswasta', [
    //         'title' => 'Swasta Tertib Pemanfaatan ',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksipemanfaatanshow($namabangunan)
    {
        $datatertibpemanfaatan = tertibjakonpemanfaatan::where('namabangunan', $namabangunan)->first();

        // if (!$datatertibusaha) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = penyediastatustertibjakon::where('penyedia_id', $datatertibusaha->id)->paginate(20);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.show', [
        'title' => 'Tertib Pemanfaatan Jasa Konstruksi',
        'data' => $datatertibpemanfaatan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

// TERTIB JAKON PENYELENGGARAAN MAS JAKI BLORA

    // public function tertibjasakonstruksipenyelenggaraan()
    // {
    //     $data = tertibjakonpenyelenggaraan::paginate(10);
    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.list', [
    //         'title' => 'Tertib Penyelenggaran',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksipenyelenggaraan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = tertibjakonpenyelenggaraan::query();

        $query->where('kegiatankonstruksi', 'LIKE', "%{$search}%")
                      ->orWhere('nomorkontrak', 'LIKE', "%{$search}%")
                      ->orWhere('bujk', 'LIKE', "%{$search}%")
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      });

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.partials.table', compact('data'))->render()
        ]);
    }

    $datasub = penyediastatustertibjakon::paginate(15);
    return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.list', [
        'title' => 'Tertib Penyelenggaraan Jasa Konstruksi',
        'data' => $data,
        'datasub' => $datasub,
        'perPage' => $perPage,
        'search' => $search
    ]);

}


    // public function tertibjasakonstruksipenyelenggaraanpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpenyelenggaraan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 1); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.00_filter.tertibpenyelenggaraanpu', [
    //         'title' => 'PU Tertib Penyelenggaraan',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksipenyelenggaraannonpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpenyelenggaraan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 2); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.00_filter.tertibpenyelenggaraannonpu', [
    //         'title' => 'Non-PU Tertib Penyelenggaraan',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksipenyelenggaraanswasta()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjakonpenyelenggaraan::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 3); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.00_filter.tertibpenyelenggaraanswasta', [
    //         'title' => 'Swasta Tertib Penyelenggaraan',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksipenyelenggaraanshow($kegiatankonstruksi)
    {
        $datatertibpenyelenggaraan = tertibjakonpenyelenggaraan::where('kegiatankonstruksi', $kegiatankonstruksi)->first();

        // if (!$datatertibusaha) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = penyediastatustertibjakon::where('penyedia_id', $datatertibusaha->id)->paginate(20);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.03_tertibjakon.03_tertibpenyelenggaraan.show', [
        'title' => 'Tertib Penyelenggaran Jasa Konstruksi',
        'data' => $datatertibpenyelenggaraan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


    // MENU BACKEND TERTIB JAKON USAHA JASA KONSTRUKSI

    public function betertibjakonusaha(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = tertibjasakonstruksi::query();

        $query->where('nib', 'LIKE', "%{$search}%")
                      ->orWhere('nib', 'LIKE', "%{$search}%")
                      ->orWhere('namapekerjaan', 'LIKE', "%{$search}%")
                      ->orWhere('tahunpelaksanaan', 'LIKE', "%{$search}%")
                      ->orWhere('namabadanusaha', 'LIKE', "%{$search}%")
                      ->orWhere('pjbu', 'LIKE', "%{$search}%")
                      ->orWhereHas('penyediastatustertibjakon', function ($q) use ($search) {
                          $q->where('penyedia', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      });

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.06_pengawasan.01_tertibjakonusaha.partials.table', compact('data'))->render()
        ]);
    }

    $datasub = penyediastatustertibjakon::paginate(15);
    return view('backend.06_pengawasan.01_tertibjakonusaha.index', [
        'title' => 'Data Tertib Jakon Usaha',
        'data' => $data,
        'datasub' => $datasub,
        'perPage' => $perPage,
        'search' => $search
    ]);
}



}
