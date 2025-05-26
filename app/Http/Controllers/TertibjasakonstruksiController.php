<?php

namespace App\Http\Controllers;

use App\Models\penyediastatustertibjakon;
use App\Models\subklasifikasi;
use App\Models\surattertibjakonpemanfaatan1;
use App\Models\surattertibjakonusaha1;
use App\Models\surattertibjakonusaha2;
use App\Models\surattertibjakonusaha3;
use App\Models\surattertibjakonusaha4;
use App\Models\tandatangan;
use App\Models\tertibjakon;
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
        $perPage = $request->input('perPage', 15);
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
        $perPage = $request->input('perPage', 15);
        $search = $request->input('search');

        $query = tertibjasakonstruksi::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nib', 'LIKE', "%{$search}%")
                  ->orWhere('namapekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('tahunpelaksanaan', 'LIKE', "%{$search}%")
                  ->orWhere('namabadanusaha', 'LIKE', "%{$search}%")
                  ->orWhere('pjbu', 'LIKE', "%{$search}%")
                //   ->orWhere('sesuai_jenis', 'LIKE', "%{$search}%")
                //   ->orWhere('sesuai_sifat', 'LIKE', "%{$search}%")
                //   ->orWhere('sesuai_klasifikasi', 'LIKE', "%{$search}%")
                //   ->orWhere('sesuai_layanan', 'LIKE', "%{$search}%")
                //   ->orWhere('segmentasipasar_bentuk', 'LIKE', "%{$search}%")
                //   ->orWhere('segmentasipasar_kualifikasi', 'LIKE', "%{$search}%")
                //   ->orWhere('syarat_SBU', 'LIKE', "%{$search}%")
                //   ->orWhere('syarat_NIB', 'LIKE', "%{$search}%")
                //   ->orWhere('pelaksanaanpengembangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('penyediastatustertibjakon', function ($r) use ($search) {
                      $r->where('penyedia', 'LIKE', "%{$search}%");
                  });
            });
        }

        // Muat relasi dengan `surattertibjakonusaha1`
        $data = $query->with('surattertibjakonusaha1') // Muat relasi di sini
                      ->orderBy('updated_at', 'desc')
                      ->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('backend.06_pengawasan.01_tertibjakonusaha.partials.table', compact('data'))->render()
            ]);
        }

        return view('backend.06_pengawasan.01_tertibjakonusaha.index', [
            'title' => 'Data Tertib Jakon Usaha',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



public function betertibjakonusahadelete($id)
{
// Cari item berdasarkan judul
$entry = tertibjasakonstruksi::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/betertibjakonusaha')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function betertibjakonusahaupdate($id)
{
    $datatertibjakonusaha = tertibjasakonstruksi::where('id', $id)->first();

// Ambil data user saat ini
$user = Auth::user();

$datapenyedia = penyediastatustertibjakon::all();

return view('backend.06_pengawasan.01_tertibjakonusaha.update', [
    'title' => 'Update Tertib Jakon Usaha ',
    'data' => $datatertibjakonusaha,
    'datapenyedia' => $datapenyedia,

    'user' => $user,
]);
}

public function betertibjakonusahaupdatecreate(Request $request, $id)
{
    // Validasi input dengan pesan khusus
    $validated = $request->validate([
        'nib' => 'required|string',
        'namapekerjaan' => 'required|string|max:255',
        'tahunpelaksanaan' => 'required|in:2024,2025,2026',
        'namabadanusaha' => 'required|string|max:255',
        'pjbu' => 'required|string|max:100',
        'penyediastatustertibjakon_id' => 'required|string',
    ], [
        'nib.required' => 'Nomor Induk Berusaha harus terdiri antara 1 hingga 50 digit.',
        'namapekerjaan.required' => 'Nama Pekerjaan wajib diisi.',
        'namapekerjaan.max' => 'Nama Pekerjaan maksimal 255 karakter.',
        'tahunpelaksanaan.required' => 'Tahun Pelaksanaan wajib dipilih.',
        'tahunpelaksanaan.in' => 'Tahun Pelaksanaan harus antara 2024 hingga 2026.',
        'namabadanusaha.required' => 'Nama Badan Usaha wajib diisi.',
        'namabadanusaha.max' => 'Nama Badan Usaha maksimal 255 karakter.',
        'pjbu.required' => 'Penanggung Jawab Badan Usaha wajib diisi.',
        'pjbu.max' => 'Penanggung Jawab Badan Usaha maksimal 100 karakter.',
        'penyediastatustertibjakon_id.required' => 'Status Penyedia wajib dipilih.',
        'penyediastatustertibjakon_id.integer' => 'Status Penyedia harus berupa angka.',
        'penyediastatustertibjakon_id.exists' => 'Status Penyedia tidak ditemukan dalam data asosiasi.',
    ]);

    // Temukan data penyedia berdasarkan ID
    $datatertibjakonusaha = tertibjasakonstruksi::findOrFail($id);

    // Perbarui data penyedia
    $datatertibjakonusaha->update($validated);

    // Redirect dengan pesan sukses
    session()->flash('update', 'Data Berhasil di Update !');
    return redirect('/betertibjakonusaha');

}




// HALAMAN CREATE DATA JAKON TERTIB USAHA JASA KONSTRKSI

public function betertibjakonusahacreate()
{

// Ambil data user saat ini
$user = Auth::user();

$datapenyedia = penyediastatustertibjakon::all();

return view('backend.06_pengawasan.01_tertibjakonusaha.create', [
    'title' => 'Create Tertib Jakon Usaha ',
    // 'data' => $datatertibjakonusaha,
    'datapenyedia' => $datapenyedia,

    'user' => $user,
]);
}


public function betertibjakonusahacreatenew(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'penyediastatustertibjakon_id' => 'required|string',
            'nib' => 'required|numeric|digits_between:1,50',
            'namapekerjaan' => 'required|string|max:255',
            'tahunpelaksanaan' => 'required|in:2024,2025,2026',
            'namabadanusaha' => 'required|string|max:255',
            'pjbu' => 'required|string|max:100',
        ], [
            'penyediastatustertibjakon_id.required' => 'Status penyedia wajib dipilih.',
            'penyediastatustertibjakon_id.exists' => 'Status penyedia tidak valid.',
            'nib.required' => 'NIB belum diisi .',
            'nib.numeric' => 'NIB harus berupa angka.',
            'nib.digits_between' => 'NIB maksimal 50 digit.',
            'namapekerjaan.required' => 'Nama pekerjaan tidak boleh kosong.',
            'namapekerjaan.max' => 'Nama pekerjaan maksimal 255 karakter.',
            'tahunpelaksanaan.required' => 'Tahun pelaksanaan wajib dipilih.',
            'tahunpelaksanaan.in' => 'Tahun pelaksanaan harus 2024, 2025, atau 2026.',
            'namabadanusaha.required' => 'Nama badan usaha wajib diisi.',
            'namabadanusaha.max' => 'Nama badan usaha maksimal 255 karakter.',
            'pjbu.required' => 'Nama penanggung jawab (PJBU) wajib diisi.',
            'pjbu.max' => 'Nama PJBU maksimal 100 karakter.',
        ]);

        // Simpan ke database
        tertibjasakonstruksi::create($validated);

        session()->flash('create', 'Data Tertib Jakon Usaha Berhasil di Buat  !');
        return redirect('/betertibjakonusaha');
    }



    // PEMBUATAN SURAT 1
 public function betertibjakonusahasurat1($id)
{
    // Ambil data tertibjasakonstruksi sesuai $id
    $datatertibjasakonstruksi = tertibjasakonstruksi::findOrFail($id);

    // Ambil data user saat ini (optional, kalau diperlukan)
    $user = Auth::user();

    // Ambil semua data subklasifikasi dan tandatangan untuk dropdown atau lainnya
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil semua data surattertibjakonusaha1 sesuai tertibjasakonstruksi_id (bukan cuma 1 data)
    $datasurattertibjakonusaha1 = surattertibjakonusaha1::where('tertibjasakonstruksi_id', $id)
        ->orderBy('created_at', 'desc')
        ->get();

    // Kirim semua data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.01_surat1.create', [
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'data' => $datatertibjasakonstruksi,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurattertibjakonusaha1' => $datasurattertibjakonusaha1,  // INI sekarang koleksi semua data surat
        'title' => 'Berkas Surat Kesesuaian Kegiatan Konstruksi',
    ]);
}

public function betertibjakonusahasuratpercobaan($id)
{
    // Ambil data tertibjasakonstruksi sesuai $id
    $datatertibjasakonstruksi = tertibjasakonstruksi::where('id', $id)->first();

    if (!$datatertibjasakonstruksi) {
        return redirect()->back()->with('error', 'Data Tertib Jasa Konstruksi tidak ditemukan.');
    }

    // Ambil data user saat ini
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data surat sesuai tertibjasakonstruksi_id dan gunakan paginate
    $datasurattertibjakonusaha1 = surattertibjakonusaha1::where('tertibjasakonstruksi_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(50);

    // Kirim semua data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.01_surat1.indexsurat', [
        'title' => 'Berkas Surat Kesesuaian Kegiatan Konstruksi | Tertib Jakon Usaha ',
        'data' => $datatertibjasakonstruksi,
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat' => $datasurattertibjakonusaha1,
        'datasurat_id' => $datasurattertibjakonusaha1->first()?->id,
    ]);
}



public function betertibjakonusahasurat1create(Request $request)
{
    $validated = $request->validate([
        'tertibjasakonstruksi_id' => 'required|string',
        'namabadanusaha' => 'required|string|max:255',
        'statusperizinan' => 'required|string',
        'nib' => 'required|string',
        'waktupengawasan' => 'required|date',
        'waktupengawasanselesai' => 'required|date',
        'namapaketpekerjaan' => 'required|string',
        'jenisusaha' => 'required|string',
        'kesesuaian' => 'required|string',
        'sifatusaha' => 'required|string',
        'kesesuaiansbu' => 'required|string',
        'subklasifikasi_id' => 'required|string',
        'kesesuaianklasifikasi' => 'required|string',
        'layananusaha' => 'required|string',
        'kesesuaianlayananusaha' => 'required|string',
        'tandatangan1' => 'nullable|string',
        'tandatangan2' => 'nullable|string',
        'tandatangan3' => 'nullable|string',
    ], [
        'namabadanusaha.required' => 'Nama Badan Usaha Wajib Diisi.',
        'statusperizinan.required' => 'Status Perizinan Wajib Dipilih.',
        'waktupengawasan.required' => 'Tanggal Mulai Pengawasan Wajib Diisi.',
        'waktupengawasanselesai.required' => 'Tanggal Selesai Pengawasan Wajib Diisi.',
        'waktupengawasanselesai.after_or_equal' => 'Tanggal Selesai harus setelah atau sama dengan Tanggal Mulai.',

        'nib.required' => 'NIB Wajib Diisi.',
        'namapaketpekerjaan.required' => 'Nama Paket Pekerjaan Wajib Diisi.',
        'jenisusaha.required' => 'Jenis Usaha Wajib Dipilih.',
        'kesesuaian.required' => 'Kesesuaian Wajib Dipilih.',
        'sifatusaha.required' => 'Sifat Usaha Wajib Dipilih.',
        'kesesuaiansbu.required' => 'Kesesuaian SBU Wajib Dipilih.',
        'subklasifikasi_id.required' => 'Subklasifikasi Wajib Dipilih.',
        'kesesuaianklasifikasi.required' => 'Kesesuaian Klasifikasi Wajib Dipilih.',
        'layananusaha.required' => 'Layanan Usaha Wajib Dipilih.',
        'kesesuaianlayananusaha.required' => 'Kesesuaian Layanan Usaha Wajib Dipilih.',
    ]);

    surattertibjakonusaha1::create([
        'tertibjasakonstruksi_id' => $validated['tertibjasakonstruksi_id'],
    'tandatangan1_id' => $validated['tandatangan1'],
    'tandatangan2_id' => $validated['tandatangan2'],
    'tandatangan3_id' => $validated['tandatangan3'],
        'namabadanusaha' => $validated['namabadanusaha'],
        'statusperizinan' => $validated['statusperizinan'],
        'nib' => $validated['nib'],
        'waktupengawasan' => $validated['waktupengawasan'],
        'waktupengawasanselesai' => $validated['waktupengawasanselesai'],

        'namapaketpekerjaan' => $validated['namapaketpekerjaan'],
        'jenisusaha' => $validated['jenisusaha'],
        'kesesuaian' => $validated['kesesuaian'],
        'sifatusaha' => $validated['sifatusaha'],
        'kesesuaiansbu' => $validated['kesesuaiansbu'],
        'subklasifikasi_id' => $validated['subklasifikasi_id'],
        'kesesuaianklasifikasi' => $validated['kesesuaianklasifikasi'],
        'layananusaha' => $validated['layananusaha'],
        'kesesuaianlayananusaha' => $validated['kesesuaianlayananusaha'],
    ]);

    session()->flash('create', 'Data Berhasil di Buat !');
    return redirect('/betertibjakonusaha');


}




  public function betertibjakonusahasurat1createnew($id)
{
    // Ambil data tertibjasakonstruksi dengan relasi surattertibjakonusaha1
    $datatertibjasakonstruksi = tertibjasakonstruksi::with('surattertibjakonusaha1')->findOrFail($id);

    $user = Auth::user();
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data relasi surattertibjakonusaha1 jika ada
    $datasurattertibjakonusaha1 = $datatertibjasakonstruksi->surattertibjakonusaha1;

    return view('backend.06_pengawasan.01_tertibjakonusaha.01_surat1.buatberkasbaru', [
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'data' => $datatertibjasakonstruksi,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurattertibjakonusaha1' => $datasurattertibjakonusaha1,
        'title' => 'Berkas Surat Kesesuaian Kegiatan Konstruksi '
    ]);
}



  public function betertibjakonusahasurat1createnewsurat(Request $request)
    {
        // Validasi data input dengan pesan custom
        $validatedData = $request->validate([
            'tertibjasakonstruksi_id' => 'required|string',
            'namabadanusaha' => 'required|string|max:255',
            'statusperizinan' => 'required|in:Terverifikasi,Tidak Terdaftar',
            'nib' => 'required|string|max:255',
            'waktupengawasan' => 'required|date',
            'waktupengawasanselesai' => 'required|date|after_or_equal:waktupengawasan',
            'namapaketpekerjaan' => 'required|string',
            'jenisusaha' => 'required|in:Pekerjaan Konstruksi,Pekerjaan Konsultasi Konstruksi',
            'kesesuaian' => 'required|in:Sesuai,Tidak Sesuai',
            'sifatusaha' => 'required|in:Umum,Spesialis',
            'kesesuaiansbu' => 'required|in:Sesuai,Tidak Sesuai',
            'subklasifikasi_id' => 'required|string',
            'kesesuaianklasifikasi' => 'required|in:Sesuai,Tidak Sesuai',
            'layananusaha' => 'required|in:Pekerjaan Konstruksi,Pekerjaan Konsultasi Konstruksi',
            'kesesuaianlayananusaha' => 'required|in:Sesuai,Tidak Sesuai',
            'tandatangan1_id' => 'nullable|string|max:255',
            'tandatangan2_id' => 'nullable|string|max:255',
            'tandatangan3_id' => 'nullable|string|max:255',
        ], [
            // Pesan error custom untuk setiap aturan validasi
            'tertibjasakonstruksi_id.required' => 'ID Tertib Jasa Konstruksi wajib diisi',
            'tertibjasakonstruksi_id.exists' => 'ID Tertib Jasa Konstruksi tidak valid',

            'namabadanusaha.required' => 'Nama Badan Usaha wajib diisi',
            'namabadanusaha.string' => 'Nama Badan Usaha harus berupa teks',
            'namabadanusaha.max' => 'Nama Badan Usaha maksimal 255 karakter',

            'statusperizinan.required' => 'Status Perizinan wajib dipilih',
            'statusperizinan.in' => 'Status Perizinan tidak valid',

            'nib.required' => 'Nomor NIB wajib diisi',
            'nib.string' => 'Nomor NIB harus berupa teks',
            'nib.max' => 'Nomor NIB maksimal 255 karakter',

            'waktupengawasan.required' => 'Tanggal Mulai Pengawasan wajib diisi',
            'waktupengawasan.date' => 'Format Tanggal Mulai Pengawasan tidak valid',

            'waktupengawasanselesai.required' => 'Tanggal Selesai Pengawasan wajib diisi',
            'waktupengawasanselesai.date' => 'Format Tanggal Selesai Pengawasan tidak valid',
            'waktupengawasanselesai.after_or_equal' => 'Tanggal Selesai harus sama atau setelah Tanggal Mulai',

            'namapaketpekerjaan.required' => 'Nama Paket Pekerjaan wajib diisi',
            'namapaketpekerjaan.string' => 'Nama Paket Pekerjaan harus berupa teks',

            'jenisusaha.required' => 'Jenis Usaha wajib dipilih',
            'jenisusaha.in' => 'Jenis Usaha tidak valid',

            'kesesuaian.required' => 'Kesesuaian Jenis Usaha wajib dipilih',
            'kesesuaian.in' => 'Kesesuaian Jenis Usaha tidak valid',

            'sifatusaha.required' => 'Sifat Usaha wajib dipilih',
            'sifatusaha.in' => 'Sifat Usaha tidak valid',

            'kesesuaiansbu.required' => 'Kesesuaian SBU Sifat Usaha wajib dipilih',
            'kesesuaiansbu.in' => 'Kesesuaian SBU Sifat Usaha tidak valid',

            'subklasifikasi_id.required' => 'Sub Klasifikasi wajib dipilih',
            'subklasifikasi_id.exists' => 'Sub Klasifikasi tidak valid',

            'kesesuaianklasifikasi.required' => 'Kesesuaian Klasifikasi wajib dipilih',
            'kesesuaianklasifikasi.in' => 'Kesesuaian Klasifikasi tidak valid',

            'layananusaha.required' => 'Layanan Usaha wajib dipilih',
            'layananusaha.in' => 'Layanan Usaha tidak valid',

            'kesesuaianlayananusaha.required' => 'Kesesuaian Layanan Usaha wajib dipilih',
            'kesesuaianlayananusaha.in' => 'Kesesuaian Layanan Usaha tidak valid',

            // 'tandatangan1.required' => 'Tim Pemeriksa 1 wajib dipilih',
            // 'tandatangan1.exists' => 'Tim Pemeriksa 1 tidak valid',

            // 'tandatangan2.exists' => 'Tim Pemeriksa 2 tidak valid',
            // 'tandatangan3.exists' => 'Tim Pemeriksa 3 tidak valid',
        ]);

        try {
            // Buat record baru
            $surat = new surattertibjakonusaha1();
            $surat->tertibjasakonstruksi_id = $validatedData['tertibjasakonstruksi_id'];
            $surat->tandatangan1_id = $validatedData['tandatangan1_id'] ?? null;
            $surat->tandatangan2_id = $validatedData['tandatangan2_id'] ?? null;
            $surat->tandatangan3_id = $validatedData['tandatangan3_id'] ?? null;
            $surat->namabadanusaha = $validatedData['namabadanusaha'];
            $surat->statusperizinan = $validatedData['statusperizinan'];
            $surat->nib = $validatedData['nib'];
            $surat->waktupengawasan = $validatedData['waktupengawasan'];
            $surat->waktupengawasanselesai = $validatedData['waktupengawasanselesai'];
            $surat->namapaketpekerjaan = $validatedData['namapaketpekerjaan'];
            $surat->jenisusaha = $validatedData['jenisusaha'];
            $surat->kesesuaian = $validatedData['kesesuaian'];
            $surat->sifatusaha = $validatedData['sifatusaha'];
            $surat->kesesuaiansbu = $validatedData['kesesuaiansbu'];
            $surat->subklasifikasi_id = $validatedData['subklasifikasi_id'];
            $surat->kesesuaianklasifikasi = $validatedData['kesesuaianklasifikasi'];
            $surat->layananusaha = $validatedData['layananusaha'];
            $surat->kesesuaianlayananusaha = $validatedData['kesesuaianlayananusaha'];

            $surat->save();

             // Ambil parentId dari object yang sudah disimpan
                    $parentId = $surat->tertibjasakonstruksi_id;

                    session()->flash('create', 'Surat Dukung Tertib Jakon Usaha berhasil Di Buat !');
                    return redirect()->route('betertibjakonusahasurat1indexsurat', ['id' => $parentId]);

                } catch (\Exception $e) {
                    return back()->withInput()
                        ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
                }
    }

// saruana

 public function betertibjakonusahasuratnewberkas($id)
{
    // Ambil data surat dengan relasi tertibjasakonstruksi
    $datasurat1 = surattertibjakonusaha1::with('tertibjasakonstruksi')->findOrFail($id);

    // Ambil data tertibjasakonstruksi yang berelasi (bisa null)
    $datatertib = $datasurat1->tertibjasakonstruksi;

    // Ambil user
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Jika relasi null, buat default kosong agar tidak error di view
    $namapekerjaan = $datasurat1->namapaketpekerjaan ?? 'Data pekerjaan tidak ditemukan';
    $namabadanusaha = $datatertib->namabadanusaha ?? '-';
    $idtertib = $datatertib->id ?? null;
    $nib = $datatertib->nib ?? '-';

    // Kirim data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.01_surat1.create', [
        'title' => 'Berkas Surat Kesesuaian Kegiatan Konstruksi',
        'data' => $datatertib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat1' => $datasurat1,
        'datatertibjasakonstruksi' => $namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $namabadanusaha,
        'datatertibjasakonstruksi_id' => $idtertib,
        'datatertibjasakonstruksinib' => $nib,
    ]);
}



public function betertibjakonusahadeletejakonusaha($id)
{
    $entry = surattertibjakonusaha1::where('id', $id)->first();

    if ($entry) {
        // Hapus file jika perlu
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        // Ambil ID dari relasi tertibjasakonstruksi, misalnya:
        $parentId = $entry->tertibjasakonstruksi_id; // pastikan ini ada di tabel

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->route('betertibjakonusahasurat1indexsurat', ['id' => $parentId]);

    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}

// SURAT TERTIB JAKON USAHA SEGMENTASI PASAR SUARAT 2


public function betertibjakonusahasegmentasipasar($id)
{
    // Ambil data tertibjasakonstruksi sesuai $id
    $datatertibjasakonstruksi = tertibjasakonstruksi::where('id', $id)->first();

    if (!$datatertibjasakonstruksi) {
        return redirect()->back()->with('error', 'Data Tertib Jasa Konstruksi tidak ditemukan.');
    }

    // Ambil data user saat ini
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data surat sesuai tertibjasakonstruksi_id dan gunakan paginate
    $datasurattertibjakonusaha2 = surattertibjakonusaha2::where('tertibjasakonstruksi_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(50);

    // Kirim semua data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.02_surat2.index', [
        'title' => 'Berkas Surat Kesesuaian Jasa Konstruksi & Segmentasi Pasar | Tertib Jakon Usaha ',
        'data' => $datatertibjasakonstruksi,
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat' => $datasurattertibjakonusaha2,
        'datasurat_id' => $datasurattertibjakonusaha2->first()?->id,
    ]);
}




  public function betertibjakonusahasegmentasipasarcreateberkas($id)
{
    // Ambil data tertibjasakonstruksi dengan relasi surattertibjakonusaha1
    $datatertibjasakonstruksi = tertibjasakonstruksi::with('surattertibjakonusaha2')->findOrFail($id);

    $user = Auth::user();
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data relasi surattertibjakonusaha1 jika ada
    $datasurattertibjakonusaha2 = $datatertibjasakonstruksi->surattertibjakonusaha2;

    return view('backend.06_pengawasan.01_tertibjakonusaha.02_surat2.buatberkasbaru', [
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'data' => $datatertibjasakonstruksi,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurattertibjakonusaha2' => $datasurattertibjakonusaha2,
        'title' => 'Berkas Surat Kesesuaian Jasa Konstruksi & Segmentasi Pasar'
    ]);
}



  public function betertibjakonusahasegmentasipasarcreatenewberkas(Request $request)
    {
        // Validasi data input dengan pesan custom
        $validatedData = $request->validate([
            'tertibjasakonstruksi_id' => 'required|string',
            'namabadanusaha' => 'required|string|max:255',
            'statusperizinan' => 'required|in:Terverifikasi,Tidak Terdaftar',
            'nib' => 'required|string|max:255',
            'waktupengawasan' => 'required|date',
            'waktupengawasanselesai' => 'required|date|after_or_equal:waktupengawasan',
            'namapaketpekerjaan' => 'required|string',
            'bentuk' => 'required|in:Badan Usaha,Perorangan',
            'kesesuaiansbu' => 'required|in:Sesuai,Tidak Sesuai',
            'syaratkualifikasi' => 'required|in:Kecil,Menengah,Besar',
            'sbu' => 'required|in:Sesuai,Tidak Sesuai',
            'tandatangan1_id' => 'nullable|string|max:255',
            'tandatangan2_id' => 'nullable|string|max:255',
            'tandatangan3_id' => 'nullable|string|max:255',
        ], [
            // Pesan error custom untuk setiap aturan validasi
            'tertibjasakonstruksi_id.required' => 'ID Tertib Jasa Konstruksi wajib diisi',
            'tertibjasakonstruksi_id.exists' => 'ID Tertib Jasa Konstruksi tidak valid',

            'namabadanusaha.required' => 'Nama Badan Usaha wajib diisi',
            'namabadanusaha.string' => 'Nama Badan Usaha harus berupa teks',
            'namabadanusaha.max' => 'Nama Badan Usaha maksimal 255 karakter',

            'statusperizinan.required' => 'Status Perizinan wajib dipilih',
            'statusperizinan.in' => 'Status Perizinan tidak valid',

            'nib.required' => 'Nomor NIB wajib diisi',
            'nib.string' => 'Nomor NIB harus berupa teks',
            'nib.max' => 'Nomor NIB maksimal 255 karakter',

            'waktupengawasan.required' => 'Tanggal Mulai Pengawasan wajib diisi',
            'waktupengawasan.date' => 'Format Tanggal Mulai Pengawasan tidak valid',

            'waktupengawasanselesai.required' => 'Tanggal Selesai Pengawasan wajib diisi',
            'waktupengawasanselesai.date' => 'Format Tanggal Selesai Pengawasan tidak valid',
            'waktupengawasanselesai.after_or_equal' => 'Tanggal Selesai harus sama atau setelah Tanggal Mulai',

            'namapaketpekerjaan.required' => 'Nama Paket Pekerjaan wajib diisi',
            'namapaketpekerjaan.string' => 'Nama Paket Pekerjaan harus berupa teks',

            'bentuk.required' => 'Jenis Bentuk Usaha wajib dipilih',
            'bentuk.in' => 'Jenis Bentuk Usaha tidak valid',

            'kesesuaiansbu.required' => 'Kesesuaian Bentuk wajib dipilih',
            'kesesuaiansbu.in' => 'Kesesuaian Bentuk tidak valid',

            'syaratkualifikasi.required' => 'Syarat Kualifikasi wajib dipilih',
            'syaratkualifikasi.in' => 'Syarat Kualifikasi tidak valid',

            'sbu.required' => 'Kesesuaian SBU wajib dipilih',
            'sbu.in' => 'Kesesuaian SBU tidak valid',

            // 'tandatangan1.required' => 'Tim Pemeriksa 1 wajib dipilih',
            // 'tandatangan1.exists' => 'Tim Pemeriksa 1 tidak valid',

            // 'tandatangan2.exists' => 'Tim Pemeriksa 2 tidak valid',
            // 'tandatangan3.exists' => 'Tim Pemeriksa 3 tidak valid',
        ]);

        try {
            // Buat record baru
            $surat = new surattertibjakonusaha2();
            $surat->tertibjasakonstruksi_id = $validatedData['tertibjasakonstruksi_id'];
            $surat->tandatangan1_id = $validatedData['tandatangan1_id'] ?? null;
            $surat->tandatangan2_id = $validatedData['tandatangan2_id'] ?? null;
            $surat->tandatangan3_id = $validatedData['tandatangan3_id'] ?? null;
            $surat->namabadanusaha = $validatedData['namabadanusaha'];
            $surat->statusperizinan = $validatedData['statusperizinan'];
            $surat->nib = $validatedData['nib'];
            $surat->waktupengawasan = $validatedData['waktupengawasan'];
            $surat->waktupengawasanselesai = $validatedData['waktupengawasanselesai'];
            $surat->namapaketpekerjaan = $validatedData['namapaketpekerjaan'];
            $surat->bentuk = $validatedData['bentuk'];
            $surat->kesesuaiansbu = $validatedData['kesesuaiansbu'];
            $surat->syaratkualifikasi = $validatedData['syaratkualifikasi'];
            $surat->sbu = $validatedData['sbu'];

            $surat->save();

             // Ambil parentId dari object yang sudah disimpan
                    $parentId = $surat->tertibjasakonstruksi_id;

                    session()->flash('create', 'Surat Dukung Tertib Jakon Usaha berhasil Di Buat !');
                    return redirect()->route('betertibjakonusahasurat2indexsurat', ['id' => $parentId]);

                } catch (\Exception $e) {
                    return back()->withInput()
                        ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
                }
    }



public function betertibjakonusahasegmentasipasardelete($id)
{
    $entry = surattertibjakonusaha2::where('id', $id)->first();

    if ($entry) {
        // Hapus file jika perlu
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        // Ambil ID dari relasi tertibjasakonstruksi, misalnya:
        $parentId = $entry->tertibjasakonstruksi_id; // pastikan ini ada di tabel

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->route('betertibjakonusahasurat2indexsurat', ['id' => $parentId]);

    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



 public function betertibjakonusahasegmentasipasarshow($id)
{
    // Ambil data surat dengan relasi tertibjasakonstruksi
    $datasurat2 = surattertibjakonusaha2::with('tertibjasakonstruksi')->findOrFail($id);

    // Ambil data tertibjasakonstruksi yang berelasi (bisa null)
    $datatertib = $datasurat2->tertibjasakonstruksi;

    // Ambil user
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Jika relasi null, buat default kosong agar tidak error di view
    $namapekerjaan = $datasurat2->namapaketpekerjaan ?? 'Data pekerjaan tidak ditemukan';
    $namabadanusaha = $datatertib->namabadanusaha ?? '-';
    $idtertib = $datatertib->id ?? null;
    $nib = $datatertib->nib ?? '-';

    // Kirim data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.02_surat2.showberkas', [
        'title' => 'Berkas Surat Kesesuaian Jasa Konstruksi & Segmentasi Pasar',
        'data' => $datatertib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat2' => $datasurat2,
        'datatertibjasakonstruksi' => $namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $namabadanusaha,
        'datatertibjasakonstruksi_id' => $idtertib,
        'datatertibjasakonstruksinib' => $nib,
    ]);
}




public function betertibjakonusahapemenuhansyarat($id)
{
    // Ambil data tertibjasakonstruksi sesuai $id
    $datatertibjasakonstruksi = tertibjasakonstruksi::where('id', $id)->first();

    if (!$datatertibjasakonstruksi) {
        return redirect()->back()->with('error', 'Data Tertib Jasa Konstruksi tidak ditemukan.');
    }

    // Ambil data user saat ini
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data surat sesuai tertibjasakonstruksi_id dan gunakan paginate
    $datasurattertibjakonusaha3 = surattertibjakonusaha3::where('tertibjasakonstruksi_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(50);

    // Kirim semua data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.03_surat3.index', [
        'title' => 'Berkas Surat Pemenuhan Syarat | Tertib Jakon Usaha ',
        'data' => $datatertibjasakonstruksi,
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat' => $datasurattertibjakonusaha3,
        'datasurat_id' => $datasurattertibjakonusaha3->first()?->id,
    ]);
}



 public function betertibjakonusahapemenuhansyaratshow($id)
{
    // Ambil data surat dengan relasi tertibjasakonstruksi
    $datasurat3 = surattertibjakonusaha3::with('tertibjasakonstruksi')->findOrFail($id);

    // Ambil data tertibjasakonstruksi yang berelasi (bisa null)
    $datatertib = $datasurat3->tertibjasakonstruksi;

    // Ambil user
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Jika relasi null, buat default kosong agar tidak error di view
    $namapekerjaan = $datasurat3->namabujk ?? 'Data pekerjaan tidak ditemukan';
    $namabadanusaha = $datatertib->namabadanusaha ?? '-';
    $idtertib = $datatertib->id ?? null;
    $nib = $datatertib->nib ?? '-';

    // Kirim data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.03_surat3.showberkas', [
        'title' => 'Berkas Surat Pemenuhan Syarat ',
        'data' => $datatertib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat3' => $datasurat3,
        'datatertibjasakonstruksi' => $namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $namabadanusaha,
        'datatertibjasakonstruksi_id' => $idtertib,
        'datatertibjasakonstruksinib' => $nib,
    ]);
}



  public function betertibjakonusahapemenuhansyaratcreateberkas($id)
{
    // Ambil data tertibjasakonstruksi dengan relasi surattertibjakonusaha1
    $datatertibjasakonstruksi = tertibjasakonstruksi::with('surattertibjakonusaha3')->findOrFail($id);

    $user = Auth::user();
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data relasi surattertibjakonusaha1 jika ada
    $datasurattertibjakonusaha3 = $datatertibjasakonstruksi->surattertibjakonusaha3;

    return view('backend.06_pengawasan.01_tertibjakonusaha.03_surat3.buatberkasbaru', [
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'data' => $datatertibjasakonstruksi,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurattertibjakonusaha2' => $datasurattertibjakonusaha3,
        'title' => 'Berkas Surat Kesesuaian Jasa Konstruksi & Segmentasi Pasar'
    ]);
}


  public function betertibjakonusahapemenuhansyaratcreateberkasnew(Request $request)
    {
        // Validasi data input dengan pesan custom
$validatedData = $request->validate([
    'tertibjasakonstruksi_id' => 'required|string',
    'namabadanusaha' => 'required|string|max:255',
    'waktupengawasan' => 'required|date',
    'waktupengawasanselesai' => 'required|date|after_or_equal:waktupengawasan',
    'namabujk' => 'required|string|max:255',
    'nib' => 'required|string|max:255',
    'pjbu' => 'required|string|max:255',
    'jenisusaha' => 'required|in:Pekerjaan Konstruksi,Pekerjaan Konsultasi Konstruksi',
    'subklasifikasi_id' => 'required|string',
    'nomorsertifikat' => 'required|string|max:255',
    'kesimpulan' => 'required|in:Tertib,Tidak Tertib',
    'catatanpemeriksaan' => 'required|string|max:500',

    'tandatangan1_id' => 'nullable|string|max:255',
    'tandatangan2_id' => 'nullable|string|max:255',
    'tandatangan3_id' => 'nullable|string|max:255',
], [
    'tertibjasakonstruksi_id.required' => 'ID Tertib Jasa Konstruksi wajib diisi.',
    'tertibjasakonstruksi_id.string' => 'ID Tertib Jasa Konstruksi harus berupa teks.',

    'namabadanusaha.required' => 'Nama Badan Usaha wajib diisi.',
    'namabadanusaha.string' => 'Nama Badan Usaha harus berupa teks.',
    'namabadanusaha.max' => 'Nama Badan Usaha maksimal 255 karakter.',

    'waktupengawasan.required' => 'Waktu pengawasan wajib diisi.',
    'waktupengawasan.date' => 'Format Waktu Pengawasan tidak valid.',

    'waktupengawasanselesai.required' => 'Waktu Selesai Pengawasan wajib diisi.',
    'waktupengawasanselesai.date' => 'Format Waktu Selesai Pengawasan tidak valid.',
    'waktupengawasanselesai.after_or_equal' => 'Waktu selesai pengawasan harus sama atau setelah waktu pengawasan dimulai.',

    'namabujk.required' => 'Nama BUJK wajib diisi.',
    'namabujk.string' => 'Nama BUJK harus berupa teks.',

    'nib.required' => 'Nomor Induk Berusaha (NIB) wajib diisi.',
    'nib.string' => 'NIB harus berupa teks.',
    'nib.max' => 'NIB maksimal 255 karakter.',

    'pjbu.required' => 'Penanggung Jawab BU wajib diisi.',
    'pjbu.string' => 'Penanggung Jawab BU harus berupa teks.',

    'jenisusaha.required' => 'Jenis Usaha wajib dipilih.',
    'jenisusaha.in' => 'Jenis Usaha yang dipilih tidak valid.',

    'subklasifikasi_id.required' => 'Subklasifikasi wajib diisi.',
    'subklasifikasi_id.string' => 'Subklasifikasi harus berupa teks.',

    'nomorsertifikat.required' => 'Nomor Sertifikat wajib diisi.',
    'nomorsertifikat.string' => 'Nomor Sertifikat harus berupa teks.',
    'nomorsertifikat.wex' => 'Nomor Sertifikat maksimal 255 karakter.',

    'kesimpulan.required' => 'Kesimpulan wajib dipilih.',
    'kesimpulan.in' => 'Kesimpulan harus berupa Tertib atau Tidak Tertib.',

    'catatanpemeriksaan.required' => 'Catatan Pemeriksaan wajib diisi.',
    'catatanpemeriksaan.string' => 'Catatan Pemeriksaan harus berupa teks.',
    'catatanpemeriksaan.max' => 'Catatan Pemeriksaan maksimal 500 karakter.',

    'tandatangan1_id.string' => 'ID Tanda Tangan 1 harus berupa teks.',
    'tandatangan1_id.max' => 'ID Tanda Tangan 1 maksimal 255 karakter.',

    'tandatangan2_id.string' => 'ID Tanda Tangan 2 harus berupa teks.',
    'tandatangan2_id.max' => 'ID Tanda Tangan 2 maksimal 255 karakter.',

    'tandatangan3_id.string' => 'ID Tanda Tangan 3 harus berupa teks.',
    'tandatangan3_id.max' => 'ID Tanda Tangan 3 maksimal 255 karakter.',
]);

        try {
            // Buat record baru
                $surat = new surattertibjakonusaha3();

                $surat->tertibjasakonstruksi_id = $validatedData['tertibjasakonstruksi_id'] ?? null;
                $surat->tandatangan1_id = $validatedData['tandatangan1_id'] ?? null;
                $surat->tandatangan2_id = $validatedData['tandatangan2_id'] ?? null;
                $surat->tandatangan3_id = $validatedData['tandatangan3_id'] ?? null;

                $surat->namabadanusaha = $validatedData['namabadanusaha'] ?? null;
                $surat->waktupengawasan = $validatedData['waktupengawasan'] ?? null;
                $surat->waktupengawasanselesai = $validatedData['waktupengawasanselesai'] ?? null;

                $surat->namabujk = $validatedData['namabujk'] ?? null;
                $surat->nib = $validatedData['nib'] ?? null;
                $surat->pjbu = $validatedData['pjbu'] ?? null;

                $surat->jenisusaha = $validatedData['jenisusaha'] ?? null;
                $surat->subklasifikasi_id = $validatedData['subklasifikasi_id'] ?? null;
                $surat->nomorsertifikat = $validatedData['nomorsertifikat'] ?? null;
                $surat->kesimpulan = $validatedData['kesimpulan'] ?? null;
                $surat->catatanpemeriksaan = $validatedData['catatanpemeriksaan'] ?? null;

                $surat->save();


             // Ambil parentId dari object yang sudah disimpan
                    $parentId = $surat->tertibjasakonstruksi_id;

                    session()->flash('create', 'Surat Dukung Tertib Jakon Usaha berhasil Di Buat !');
                    return redirect()->route('betertibjakonusahapemenuhansyaratindex', ['id' => $parentId]);

                } catch (\Exception $e) {
                    return back()->withInput()
                        ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
                }
    }



public function betertibjakonusahapemenuhansyaratdelete($id)
{
    $entry = surattertibjakonusaha3::where('id', $id)->first();

    if ($entry) {
        // Hapus file jika perlu
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        // Ambil ID dari relasi tertibjasakonstruksi, misalnya:
        $parentId = $entry->tertibjasakonstruksi_id; // pastikan ini ada di tabel

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->route('betertibjakonusahapemenuhansyaratindex', ['id' => $parentId]);

    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}


public function betertibjakonusahapelaksana($id)
{
    // Ambil data tertibjasakonstruksi sesuai $id
    $datatertibjasakonstruksi = tertibjasakonstruksi::where('id', $id)->first();

    if (!$datatertibjasakonstruksi) {
        return redirect()->back()->with('error', 'Data Tertib Jasa Konstruksi tidak ditemukan.');
    }

    // Ambil data user saat ini
    $user = Auth::user();

    // Ambil data subklasifikasi dan tandatangan
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data surat sesuai tertibjasakonstruksi_id dan gunakan paginate
    $datasurattertibjakonusaha4 = surattertibjakonusaha4::where('tertibjasakonstruksi_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(50);

    // Kirim semua data ke view
    return view('backend.06_pengawasan.01_tertibjakonusaha.04_surat4.index', [
        'title' => 'Berkas Surat Pelaksana Pengembangan Usaha | Tertib Jakon Usaha ',
        'data' => $datatertibjasakonstruksi,
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat' => $datasurattertibjakonusaha4,
        'datasurat_id' => $datasurattertibjakonusaha4->first()?->id,
    ]);
}



public function betertibjakonusahapelaksanashow($id)
{
    // Ambil data surat
    $datasurat4 = surattertibjakonusaha4::with('tertibjasakonstruksi')->findOrFail($id);

    // Coba ambil data relasi
    $datatertib = $datasurat4->tertibjasakonstruksi;

    // Jika tidak ketemu lewat relasi, cari manual
    if (!$datatertib) {
        $datatertib = tertibjasakonstruksi::where('surattertibjakonusaha4_id', $datasurat4->id)->first();
    }

    // Data tambahan
    $namabadanusaha = $datatertib->namabadanusaha ?? '-';
    $namapekerjaan = $datatertib->namapekerjaan ?? 'Data Pekerjaan Masih Kosong';
    $idtertib = $datatertib->id ?? null;
    $nib = $datatertib->nib ?? '-';

    // Data lain
    $user = Auth::user();
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    return view('backend.06_pengawasan.01_tertibjakonusaha.04_surat4.showberkas', [
        'title' => 'Berkas Surat Pelaksana Pengembangan Usaha ',
        'data' => $datatertib,
        'user' => $user,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurat4' => $datasurat4,
        'datatertibjasakonstruksinamabadanusaha' => $namabadanusaha,
        'namabadanusaha' => $namabadanusaha,
        'namapekerjaan' => $namapekerjaan,
        'datatertibjasakonstruksi_id' => $idtertib,
        'datatertibjasakonstruksinib' => $nib,
    ]);
}




  public function betertibjakonusahapelaksanacreateberkas($id)
{
    // Ambil data tertibjasakonstruksi dengan relasi surattertibjakonusaha1
    $datatertibjasakonstruksi = tertibjasakonstruksi::with('surattertibjakonusaha4')->findOrFail($id);

    $user = Auth::user();
    $datasubklasifikasi = subklasifikasi::all();
    $datatandatangan = tandatangan::all();

    // Ambil data relasi surattertibjakonusaha1 jika ada
    $datasurattertibjakonusaha4 = $datatertibjasakonstruksi->surattertibjakonusaha3;

    return view('backend.06_pengawasan.01_tertibjakonusaha.04_surat4.buatberkasbaru', [
        'datatertibjasakonstruksi' => $datatertibjasakonstruksi->namapekerjaan,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasakonstruksi->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasakonstruksi->id,
        'datatertibjasakonstruksinib' => $datatertibjasakonstruksi->nib,
        'user' => $user,
        'data' => $datatertibjasakonstruksi,
        'datasubklasifikasi' => $datasubklasifikasi,
        'datatandatangan' => $datatandatangan,
        'datasurattertibjakonusaha4' => $datasurattertibjakonusaha4,
        'title' => 'Berkas Surat Pelaksana Pengembangan Usaha '
    ]);
}


 public function betertibjakonusahapelaksananewberkascreate(Request $request)
    {
        // Validasi data input dengan pesan custom
$validatedData = $request->validate([
    'tertibjasakonstruksi_id' => 'required|string',
    'status' => 'required|in:Tertib,Tidak Tertib',
], [
    'tertibjasakonstruksi_id.required' => 'ID Tertib Jasa Konstruksi wajib diisi.',
    'tertibjasakonstruksi_id.string' => 'ID Tertib Jasa Konstruksi harus berupa teks.',

    'status.required' => 'Status Pengembangan wajib dipilih.',
    'status.in' => 'Status Pengembangan yang dipilih tidak valid.',

]);

        try {
            // Buat record baru
                $surat = new surattertibjakonusaha4();

                $surat->tertibjasakonstruksi_id = $validatedData['tertibjasakonstruksi_id'] ?? null;
                $surat->status = $validatedData['status'] ?? null;

                $surat->save();


             // Ambil parentId dari object yang sudah disimpan
                    $parentId = $surat->tertibjasakonstruksi_id;

                    session()->flash('create', 'Surat Dukung Tertib Jakon Usaha berhasil Di Buat !');
                    return redirect()->route('betertibjakonusahapelaksanaindex', ['id' => $parentId]);

                } catch (\Exception $e) {
                    return back()->withInput()
                        ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
                }
    }




public function betertibjakonusahapelaksanadelete($id)
{
    $entry = surattertibjakonusaha4::where('id', $id)->first();

    if ($entry) {
        // Hapus file jika perlu
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        // Ambil ID dari relasi tertibjasakonstruksi, misalnya:
        $parentId = $entry->tertibjasakonstruksi_id; // pastikan ini ada di tabel

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->route('betertibjakonusahapelaksanaindex', ['id' => $parentId]);

    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}


// surat tertib jakon pemanfaatan

public function betertibjakonpemanfaatan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = tertibjakonpemanfaatan::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namapekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('namabangunan', 'LIKE', "%{$search}%")
              ->orWhere('nomorkontrak', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhereDate('tanggalpembangunan', $search)
              ->orWhereDate('tanggalpemanfaatan', $search)
              ->orWhere('umurbangunan', 'LIKE', "%{$search}%")
            //   ->orWhere('peruntukan_fungsi', 'LIKE', "%{$search}%")
            //   ->orWhere('peruntukan_lokasi', 'LIKE', "%{$search}%")
            //   ->orWhere('rencanaumur', 'LIKE', "%{$search}%")
            //   ->orWhere('kapasitasdanbeban', 'LIKE', "%{$search}%")
            //   ->orWhere('pemeliharaan_konstruksi', 'LIKE', "%{$search}%")
            //   ->orWhere('pemeliharaan_struktur', 'LIKE', "%{$search}%")
              ->orWhereHas('penyediastatustertibjakon', function ($r) use ($search) {
                  $r->where('penyedia', 'LIKE', "%{$search}%");
              });
        });
    }

    $data = $query->orderBy('updated_at', 'desc')
                  ->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.06_pengawasan.02_tertibjakonpemanfaatan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.06_pengawasan.02_tertibjakonpemanfaatan.index', [
        'title' => 'Data Tertib Jakon Pemanfaatan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function betertibjakonpemanfaatancreate()
{

// Ambil data user saat ini
$user = Auth::user();

$datapenyedia = penyediastatustertibjakon::all();

return view('backend.06_pengawasan.02_tertibjakonpemanfaatan.create', [
    'title' => 'Create Tertib Jakon Pemanfaatan ',
    // 'data' => $datatertibjakonusaha,
    'datapenyedia' => $datapenyedia,

    'user' => $user,
]);
}


        public function betertibjakonpemanfaatancreatenew(Request $request)
    {
        // Validasi input
         $validated = $request->validate([
        'penyediastatustertibjakon_id' => 'required|string', // text di DB = text max 65535 chars
        'namapekerjaan'       => 'required|string|max:65535', // text di DB = text max 65535 chars
        'namabangunan'        => 'required|string|max:65535',
        'nomorkontrak'        => 'required|string|max:255',
        'lokasi'              => 'required|string|max:255',
        'tanggalpembangunan'  => 'required|date',
        'tanggalpemanfaatan'  => 'required|date',
        'umurbangunan'        => 'required|string|max:255',
    ], [
        'namapekerjaan.required'       => 'Nama Pekerjaan Wajib Di Isi !.',
        'namabangunan.required'        => 'Nama Bangunan Wajib Di Isi !.',
        'nomorkontrak.required'        => 'Nomor Kontrak Wajib Di Isi !.',
        'lokasi.required'              => 'Lokasi Wajib Di Isi !.',
        'tanggalpembangunan.required'    => 'Tanggal Pembangunan Wajib Di Isi !.',
        'tanggalpemanfaatan.required'    => 'Tanggal Pemanfaatan Wajib Di Isi !.',
        'umurbangunan.required'        => 'Umur Bangunan Wajib Di Isi !.',
    ]);

    // Simpan data ke database
    // Pastikan model kamu sesuai, misal PekerjaanBangunan::create
    tertibjakonpemanfaatan::create($validated);

    // Flash message & redirect
        session()->flash('create', 'Data Tertib Jakon Pemanfataan Berhasil di Buat  !');
        return redirect('/betertibjakonpemanfaatan');
    }

public function betertibjakonpemanfaatanupdate($id)
{
    $datatertibjakonpemanfaatan = tertibjakonpemanfaatan::where('id', $id)->first();

// Ambil data user saat ini
$user = Auth::user();

$datapenyedia = penyediastatustertibjakon::all();

return view('backend.06_pengawasan.02_tertibjakonpemanfaatan.update', [
    'title' => 'Update Tertib Jakon Pemanfaatan ',
    'data' => $datatertibjakonpemanfaatan,
    'datapenyedia' => $datapenyedia,
    'user' => $user,
]);
}

public function betertibjakonpemanfaatanupdatecreate(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'penyediastatustertibjakon_id' => 'required|string',
        'namapekerjaan'       => 'required|string|max:65535',
        'namabangunan'        => 'required|string|max:65535',
        'nomorkontrak'        => 'required|string|max:255',
        'lokasi'              => 'required|string|max:255',
        'tanggalpembangunan'  => 'required|date',
        'tanggalpemanfaatan'  => 'required|date',
        'umurbangunan'        => 'required|string|max:255',
    ], [
        'penyediastatustertibjakon_id.required' => 'Status Penyedia Wajib Di Isi !.',
        'namapekerjaan.required'                => 'Nama Pekerjaan Wajib Di Isi !.',
        'namabangunan.required'                 => 'Nama Bangunan Wajib Di Isi !.',
        'nomorkontrak.required'                 => 'Nomor Kontrak Wajib Di Isi !.',
        'lokasi.required'                       => 'Lokasi Wajib Di Isi !.',
        'tanggalpembangunan.required'           => 'Tanggal Pembangunan Wajib Di Isi !.',
        'tanggalpemanfaatan.required'           => 'Tanggal Pemanfaatan Wajib Di Isi !.',
        'umurbangunan.required'                 => 'Umur Bangunan Wajib Di Isi !.',
    ]);

    // Cari data berdasarkan ID
    $data = tertibjakonpemanfaatan::findOrFail($id);

    // Update data
    $data->update($validated);

    // Flash message & redirect
    session()->flash('update', 'Data Tertib Jakon Pemanfaatan Berhasil di Update!');
    return redirect('/betertibjakonpemanfaatan');
}


public function betertibjakonpemanfataanjakonindex($id)
{
    // Ambil data utama berdasarkan ID
    $datatertibjakonpemanfaatan = tertibjakonpemanfaatan::find($id);

    if (!$datatertibjakonpemanfaatan) {
        return redirect()->back()->with('error', 'Data Tertib Jasa Konstruksi tidak ditemukan.');
    }

    $user = Auth::user();

    // Ambil semua surat terkait dengan paginate
    $datasurat = surattertibjakonpemanfaatan1::where('tertibjakonpemanfaatan_id', $id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(50);

    return view('backend.06_pengawasan.02_tertibjakonpemanfaatan.01_surat1.index', [
        'title' => 'Berkas Surat | Tertib Jakon Pemanfaatan',
        'user' => $user,
        'data' => $datasurat,
        'datasurat' => $datasurat,
        'datanamabangunan' => $datatertibjakonpemanfaatan->namabangunan,
        'datalokasi' => $datatertibjakonpemanfaatan->lokasi,
        'datasurat_id' => $datasurat->first()?->id,
        'id' => $id, // penting untuk route tombol "Buat Berkas"
    ]);
}

  public function betertibjakonpemanfataanjakoncreateberkas($id)
{
    // Ambil data tertibjasakonstruksi dengan relasi surattertibjakonusaha1
    $datatertibjasapemanfaatan = tertibjakonpemanfaatan::with('surattertibjakonpemanfaatan1')->findOrFail($id);

    $user = Auth::user();

    // Ambil data relasi surattertibjakonusaha1 jika ada
    $datasurattertibjakopemanfaatan1 = $datatertibjasapemanfaatan->surattertibjakonusaha3;

    return view('backend.06_pengawasan.02_tertibjakonpemanfaatan.01_surat1.buatberkasbaru', [
        'datanamabangunan' => $datatertibjasapemanfaatan->namabangunan,
        'datalokasi' => $datatertibjasapemanfaatan->lokasi,
        'datatertibjasakonstruksinamabadanusaha' => $datatertibjasapemanfaatan->namabadanusaha,
        'datatertibjasakonstruksi_id' => $datatertibjasapemanfaatan->id,
        // 'datatertibjasakonstruksinib' => $datatertibjasapemanfaatan->nib,
        'user' => $user,
        'data' => $datatertibjasapemanfaatan,

        'datasurattertibjakonusaha4' => $datasurattertibjakopemanfaatan1,
        'title' => 'Create Surat Tertib Jakon Pemanfaatan '
    ]);
}


public function betertibjakonmanfaatcreateberkasnew(Request $request)
{
    // Pastikan user masih login
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Sesi habis, silakan login kembali.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'tertibjakonpemanfaatan_id' => 'required|string',
        'lingkuppengawasan' => 'required|string',
        'indikator' => 'required|string',
        'dokumendiperiksa' => 'required|date',
        'carapemeriksaan' => 'required|date',
        'kesimpulanpemeriksaan' => 'required|in:Sesuai,Tidak_sesuai',
        'catatan' => 'required|in:Tersedia,Tidak_Tersedia',
    ], [
        'lingkuppengawasan.required' => 'Nama Pemilik Bangunan Wajib Diisi !.',
        'indikator.required' => 'Nama Pengelola Bangunan Wajib Diisi !.',
        'dokumendiperiksa.required' => 'Tanggal Mulai Pengawasan Wajib Diisi !.',
        'carapemeriksaan.required' => 'Tanggal Selesai Pengawasan Wajib Diisi !.',
        'kesimpulanpemeriksaan.required' => 'Kesimpulan Wajib Di Pilih !.',
        'catatan.required' => 'Kesimpulan Wajib Di Pilih !.',
    ]);

    try {
        $surat = new surattertibjakonpemanfaatan1();
        $surat->fill($validatedData)->save();

        return redirect()
            ->route('betertibjakonpemanfataansuratjasakonstruksiindex', [
                'id' => $surat->tertibjakonpemanfaatan_id ?? 'default_id'
            ])
            ->with('success', 'Berkas berhasil dibuat!');

    } catch (\Exception $e) {
        return back()
            ->withInput()
            ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
    }
}

}
