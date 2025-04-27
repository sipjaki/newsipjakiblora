<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjablora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SkktenagakerjabloraController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.index', [
            'title' => 'Tenaga Kerja Konstruksi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function listskktenagakerjablora(Request $request)
    // {
    //     $user = Auth::user();

    //     // $data = skktenagakerjablora::paginate(10);
    //     $datanamasekolah = namasekolah::all();
    //     $datajenjangpendidikan = jenjangpendidikan::all();
    //     $datajurusan = jurusan::all();
    //     $datajabatankerja = jabatankerja::all();
    //     $datajenjang = jenjang::all();
    //     $datalpspenerbit = lpspenerbit::all();

    //     $perPage = $request->input('perPage', 10);
    //         $search = $request->input('search');

    //         $query = skktenagakerjablora::query();

    //         if ($search) {
    //             $query->where('nama', 'LIKE', "%{$search}%")
    //                   ->orWhere('alamat', 'LIKE', "%{$search}%")
    //                   ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
    //                   ->orWhereHas('jabatankerja', function ($q) use ($search) {
    //                       $q->where('jabatankerja', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
    //                   })
    //                   ->orWhereHas('jenjang', function ($q) use ($search) {
    //                       $q->where('jenjang', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
    //                   });
    //         }

    //         $data = $query->paginate($perPage);

    //         if ($request->ajax()) {
    //             return response()->json([
    //                 'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
    //             ]);
    //         }

    //     return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksi', [
    //         'title' => 'SKK Tenaga Konstruksi Di Selenggarakan DPUPR Kab Blora',
    //         'user' => $user, // Mengirimkan data paginasi ke view

    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
    //         'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
    //         'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
    //         'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
    //         'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
    //         'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function listskktenagakerjablora(Request $request)
    {
        $perPage = $request->input('perPage', 15);
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
                'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksi', [
            'title' => 'TKK Di Selenggarakan DPUPR',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function listskktenagakerjablorashow($nama)
    {
        $dataskk = skktenagakerjablora::where('nama', $nama)->first();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();


        // Ambil data user saat ini
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksishow', [
            'title' => 'Data SKK Tenaga Konstruksi',

            'data' => $dataskk, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

    ]);


    }

// MENU BACKEND DATA SKK TENAGA KERJA KABUPATEN BLORA DI SELENGGARAKAN OLEH DPUPR KABUPATEN BLORA
// --------------------------------------------------------------------------------------------------------------------

public function beskkdpupr(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search', '');
    $page = $request->input('page', 1);

    // Cache key yang konsisten
    $cacheKey = "blora_dpupr_tkk_" . md5("page_{$page}_search_{$search}");

    if ($page == 1) {
        Cache::forget($cacheKey);
    }

    $allData = Cache::remember($cacheKey, 300, function () use ($search) {
        $query = skktenagakerjablora::query()
            ->where('asosiasimasjaki_id', 99); // <--- ini sudah fix

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('alamat', 'LIKE', "%{$search}%")
                  ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
                  ->orWhere('tanggalterbit', 'LIKE', "%{$search}%")
                  ->orWhere('tanggalhabis', 'LIKE', "%{$search}%")
                  ->orWhere('statusterbit', 'LIKE', "%{$search}%")
                  ->orWhereHas('namasekolah', function ($q) use ($search) {
                      $q->where('namasekolah', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('jenjangpendidikan', function ($q) use ($search) {
                      $q->where('jenjangpendidikan', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('jabatankerja', function ($q) use ($search) {
                      $q->where('jabatankerja', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('jenjang', function ($q) use ($search) {
                      $q->where('jenjang', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('lpspenerbit', function ($q) use ($search) {
                      $q->where('lpspenerbit', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('jurusan', function ($q) use ($search) {
                      $q->where('jurusan', 'LIKE', "%{$search}%");
                  });
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
            'html' => view('backend.04_datajakon.04_tkkdpupr.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.04_tkkdpupr.index', [
        'title' => 'TKK Diselenggarakan DPUPR Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

// TKK DPUPR BLORA SHOW

public function beskkdpuprshow($nama)
{
    $dataskkdpupr = skktenagakerjablora::where('nama', $nama)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.04_tkkdpupr.show', [
    'title' => 'Data TKK Di Selenggarakan DPUPR Kab Blora',
    'data' => $dataskkdpupr,
]);
}


public function beskkdpuprdelete($nama)
{
// Cari item berdasarkan judul
$entry = skktenagakerjablora::where('nama', $nama)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/beskkdpupr')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



// HAPUS DATA YANG LAMA

// BATAS MENU TKK DPUPR BLORA

    // =============================================================================



    public function datalistskktenagakerjablora(Request $request)
    {
        $perPage = $request->input('perPage', 15);
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
                'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksi', [
            'title' => 'TKK Kabupaten Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    // MENU BACKEND DATA ALL SKK TENAGA KERJA SELURUH KABUPATEN BLORA JAWA TENGAH
// --------------------------------------------------------------------------------------------------------------------

    public function beskkall(Request $request)
    {
            $perPage = $request->input('perPage', 15);
            $search = $request->input('search');

            $query = skktenagakerjablora::query();

            if ($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('alamat', 'LIKE', "%{$search}%")
                    ->orWhere('tahunlulus', 'LIKE', "%{$search}%")
                    ->orWhere('tanggalterbit', 'LIKE', "%{$search}%")
                    ->orWhere('tanggalhabis', 'LIKE', "%{$search}%")
                    ->orWhere('statusterbit', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('namasekolah', function ($q) use ($search) {
                        $q->where('namasekolah', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jenjangpendidikan', function ($q) use ($search) {
                        $q->where('jenjangpendidikan', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jabatankerja', function ($q) use ($search) {
                        $q->where('jabatankerja', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('jenjang', function ($q) use ($search) {
                        $q->where('jenjang', 'LIKE', "%{$search}%");
                    })

                    ->orWhereHas('lpspenerbit', function ($q) use ($search) {
                        $q->where('lpspenerbit', 'LIKE', "%{$search}%");
                    })

                    // ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                    //     $q->where('namaasosiasi', 'LIKE', "%{$search}%");
                    // })

                    ->orWhereHas('jurusan', function ($q) use ($search) {
                        $q->where('jurusan', 'LIKE', "%{$search}%");
                    });
            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.04_datajakon.05_alltkkblora.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.04_datajakon.05_alltkkblora.index', [
                'title' => 'Semua TKK Kabupaten Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function beskkdpuprupdate($nama)
    {
            $dataallskkblora = skktenagakerjablora::where('nama', $nama)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $dataasosiasi = asosiasimasjaki::all();
        $datalpspenerbit = lpspenerbit::all();


        return view('backend.04_datajakon.04_tkkdpupr.update', [
            'title' => 'Data TKK Di Selenggarakan DPUPR Kab Blora',
            'data' => $dataallskkblora,
            'namasekolahList' => $datanamasekolah,
            'jenjangpendidikanList' => $datajenjangpendidikan,
            'jurusanList' => $datajurusan,
            'jabatankerjaList' => $datajabatankerja,
            'jenjangList' => $datajenjang,
            'asosiasimasjakiList' => $dataasosiasi,
            'lpspenerbitList' => $datalpspenerbit,

        ]);
    }

    public function beskkallshow($nama)
    {
            $dataallskkblora = skktenagakerjablora::where('nama', $nama)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.05_alltkkblora.show', [
            'title' => 'Data TKK Di Selenggarakan DPUPR Kab Blora',
            'data' => $dataallskkblora,
        ]);
    }


        public function beskkalldelete($nama)
        {
        // Cari item berdasarkan judul
            $entry = skktenagakerjablora::where('nama', $nama)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/beskkallblora')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }



// BATAS MENU TKK DPUPR BLORA

public function beskkdpuprupdatecreate(Request $request, $nama)
{
    // Validasi inputan
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'tahunlulus' => 'required|string',
        'tahunbimtek' => 'required|string',
        'namasekolah_id' => 'required|integer',
        'jenjangpendidikan_id' => 'required|integer',
        'jurusan_id' => 'required|integer',
        'jabatankerja_id' => 'required|integer',
        'jenjang_id' => 'required|integer',
        'asosiasimasjaki_id' => 'required|integer',
        'lpspenerbit_id' => 'required|integer',
        'tanggalterbit' => 'required|date',
        'tanggalhabis' => 'required|date',
        'statusterbit' => 'required|date',
    ], [
        'nama.required' => 'Nama wajib diisi!',
        'nama.string' => 'Nama harus berupa teks!',
        'nama.max' => 'Nama tidak boleh lebih dari 255 karakter!',

        'alamat.required' => 'Alamat wajib diisi!',
        'alamat.string' => 'Alamat harus berupa teks!',

        'tahunlulus.required' => 'Tahun lulus wajib diisi!',
        'tahunlulus.integer' => 'Tahun lulus harus berupa angka!',
        'tahunlulus.min' => 'Tahun lulus tidak boleh kurang dari 1900!',
        'tahunlulus.max' => 'Tahun lulus tidak boleh lebih dari tahun ini!',

        'tahunbimtek.required' => 'Tahun bimtek wajib diisi!',
        'tahunbimtek.in' => 'Tahun bimtek harus salah satu dari 2024, 2025, atau 2026!',

        'namasekolah_id.required' => 'Nama sekolah wajib diisi!',
        'namasekolah_id.exists' => 'Nama sekolah tidak ditemukan di sistem!',

        'jenjangpendidikan_id.required' => 'Jenjang pendidikan wajib diisi!',
        'jenjangpendidikan_id.exists' => 'Jenjang pendidikan tidak ditemukan di sistem!',

        'jurusan_id.required' => 'Jurusan wajib diisi!',
        'jurusan_id.exists' => 'Jurusan tidak ditemukan di sistem!',

        'jabatankerja_id.required' => 'Jabatan kerja wajib diisi!',
        'jabatankerja_id.exists' => 'Jabatan kerja tidak ditemukan di sistem!',

        'jenjang_id.required' => 'Jenjang wajib diisi!',
        'jenjang_id.exists' => 'Jenjang tidak ditemukan di sistem!',

        'asosiasimasjaki_id.required' => 'Asosiasi Masjaki wajib diisi!',
        'asosiasimasjaki_id.exists' => 'Asosiasi Masjaki tidak ditemukan di sistem!',

        'lpspenerbit_id.required' => 'LPS Penerbit wajib diisi!',
        'lpspenerbit_id.exists' => 'LPS Penerbit tidak ditemukan di sistem!',

        'tanggalterbit.required' => 'Tanggal terbit wajib diisi!',
        'tanggalterbit.date' => 'Tanggal terbit harus berupa tanggal yang valid!',

        'tanggalhabis.required' => 'Tanggal habis wajib diisi!',
        'tanggalhabis.date' => 'Tanggal habis harus berupa tanggal yang valid!',
        'tanggalhabis.after_or_equal' => 'Tanggal habis tidak boleh lebih awal dari tanggal terbit!',

        'statusterbit.required' => 'Status terbit wajib diisi!',
        'statusterbit.in' => 'Status terbit harus salah satu dari "Terbit" atau "Belum Terbit"!',
    ]);
        // Cari datanya berdasarkan 'nama'
    $data = skktenagakerjablora::where('nama', $nama)->firstOrFail();

    // Update data
    $data->update($validatedData);

    // Flash success
    session()->flash('update', 'Data berhasil diperbarui!');

    return redirect()->back();
}


}

