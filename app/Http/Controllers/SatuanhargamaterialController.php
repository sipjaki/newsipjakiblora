<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\Models\bujkkontraktorsub;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaperalatan;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\hspkonstruksiumum;
use App\Models\hspkonstruksiumum2;
use App\Models\hspkonstruksiumum3;
use App\Models\hspkonstruksiumum4;
use App\Models\hspkonstruksiumum5;
use App\Models\hspkonstruksiumum6;
use App\Models\hspkonstruksiumum7;
use App\Models\hspkonstruksiumum8;
use App\Models\hspkonstruksiumum9;
// use App\Models\hspkonstruksiumum2;
// DIVISI 1
use App\Models\subhargadiv1;
use App\Models\subhargadiv1bahan;
use App\Models\subhargadiv1peralatan;
// DIVISI 2
use App\Models\subhargadiv2;
use App\Models\subhargadiv2bahan;
use App\Models\subhargadiv2peralatan;
// DIVISI 3
use App\Models\subhargadiv3;
use App\Models\subhargadiv3bahan;
use App\Models\subhargadiv3peralatan;
// DIVISI 4
use App\Models\subhargadiv4;
use App\Models\subhargadiv4bahan;
use App\Models\subhargadiv4peralatan;
// DIVISI 5
use App\Models\subhargadiv5;
use App\Models\subhargadiv5bahan;
use App\Models\subhargadiv5peralatan;
// DIVISI 6
use App\Models\subhargadiv6;
use App\Models\subhargadiv6bahan;
use App\Models\subhargadiv6peralatan;
// DIVISI 7
use App\Models\subhargadiv7;
use App\Models\subhargadiv7bahan;
use App\Models\subhargadiv7peralatan;
// DIVISI 8
use App\Models\subhargadiv8;
use App\Models\subhargadiv8bahan;
use App\Models\subhargadiv8peralatan;
// DIVISI 9
use App\Models\subhargadiv9;
use App\Models\subhargadiv9bahan;
use App\Models\subhargadiv9peralatan;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SatuanhargamaterialController extends Controller
{
    // //
    // public function index()
    // {
    //     $user = Auth::user();
    //     $data = satuanhargamaterial::paginate();

    //     return view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.index', [
    //         'title' => 'Satuan Harga Dasar',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         // 'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargamaterial::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.index', [
            'title' => 'Satuan Harga Dasar Material',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function satuanhargaupah(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaupahtenagakerja::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%")
                  ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.02_hargasatuanupah.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.02_hargasatuanupah.newindex', [
            'title' => 'Satuan Harga Dasar Upah Tenaga Kerja',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function satuanhargaperalatan(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaperalatan::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.03_hargasatuanperalatan.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.03_hargasatuanperalatan.index', [
            'title' => 'Satuan Harga Dasar Peralatan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    // HSP DIVISI 1

    public function hspdivisi1(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket', function ($q) use ($search) {
                      $q->where('hsppaket', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.01_divisi1', [
            'title' => 'Harga Satuan Pekerjaan Divisi I Persiapan Pekerjaan',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function hspdivisi1show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi1 = hspkonstruksiumum::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi1) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv1::where('hspkonstruksiumum_id', $datadivisi1->id)->paginate(50);
        $subdatamaterial = subhargadiv1bahan::where('hspkonstruksiumum_id', $datadivisi1->id)->paginate(50);
        $subdataperatalan = subhargadiv1peralatan::where('hspkonstruksiumum_id', $datadivisi1->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv1::where('hspkonstruksiumum_id', $datadivisi1->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv1bahan::where('hspkonstruksiumum_id', $datadivisi1->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv1peralatan::where('hspkonstruksiumum_id', $datadivisi1->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.ahspdivisi1', [
            'title' => 'AHSP Divisi I Persiapan Pekerjaan',
            'data' => $datadivisi1,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }




// DIVISI 2


    public function hspdivisi2(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum2::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket2', function ($q) use ($search) {
                      $q->where('hsppaket2', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan2', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.02_divisi2.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.02_divisi2.02_divisi2', [
            'title' => 'Harga Satuan Pekerjaan Divisi II Pekerjaan Struktur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi2show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi2 = hspkonstruksiumum2::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi2) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv2::where('hspkonstruksiumum2_id', $datadivisi2->id)->paginate(50);
        $subdatamaterial = subhargadiv2bahan::where('hspkonstruksiumum2_id', $datadivisi2->id)->paginate(50);
        $subdataperatalan = subhargadiv2peralatan::where('hspkonstruksiumum2_id', $datadivisi2->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv2::where('hspkonstruksiumum2_id', $datadivisi2->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv2bahan::where('hspkonstruksiumum2_id', $datadivisi2->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv2peralatan::where('hspkonstruksiumum2_id', $datadivisi2->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.02_divisi2.ahspdivisi2', [
            'title' => 'AHSP Divisi II Pekerjaan Struktur',
            'data' => $datadivisi2,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }



// DIVISI 3


    public function hspdivisi3(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum3::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket3', function ($q) use ($search) {
                      $q->where('hsppaket3', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan3', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.03_divisi3.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.03_divisi3.03_divisi3', [
            'title' => 'Harga Satuan Pekerjaan Divisi III Pekerjaan Arsitektur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi3show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi3 = hspkonstruksiumum3::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi3) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv3::where('hspkonstruksiumum3_id', $datadivisi3->id)->paginate(50);
        $subdatamaterial = subhargadiv3bahan::where('hspkonstruksiumum3_id', $datadivisi3->id)->paginate(50);
        $subdataperatalan = subhargadiv3peralatan::where('hspkonstruksiumum3_id', $datadivisi3->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv3::where('hspkonstruksiumum3_id', $datadivisi3->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv3bahan::where('hspkonstruksiumum3_id', $datadivisi3->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv3peralatan::where('hspkonstruksiumum3_id', $datadivisi3->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.03_divisi3.ahspdivisi3', [
            'title' => 'AHSP Divisi III Pekerjaan Arsitektur',
            'data' => $datadivisi3,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }



// DIVISI 4


    public function hspdivisi4(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum4::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket4', function ($q) use ($search) {
                      $q->where('hsppaket4', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan4', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.04_divisi4.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.04_divisi4.04_divisi4', [
            'title' => 'Harga Satuan Pekerjaan Divisi IV Pekerjaan Lansekap',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function hspdivisi4show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi4 = hspkonstruksiumum4::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi4) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv4::where('hspkonstruksiumum4_id', $datadivisi4->id)->paginate(50);
        $subdatamaterial = subhargadiv4bahan::where('hspkonstruksiumum4_id', $datadivisi4->id)->paginate(50);
        $subdataperatalan = subhargadiv4peralatan::where('hspkonstruksiumum4_id', $datadivisi4->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv4::where('hspkonstruksiumum4_id', $datadivisi4->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv4bahan::where('hspkonstruksiumum4_id', $datadivisi4->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv4peralatan::where('hspkonstruksiumum4_id', $datadivisi4->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.04_divisi4.ahspdivisi4', [
            'title' => 'AHSP Divisi IV Pekerjaan Lansekap ',
            'data' => $datadivisi4,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }




// DIVISI 5


    public function hspdivisi5(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum5::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket5', function ($q) use ($search) {
                      $q->where('hsppaket5', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan5', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.05_divisi5.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.05_divisi5.05_divisi5', [
            'title' => 'Harga Satuan Pekerjaan Divisi V Pekerjaan Mekanikal dan Elektrikal',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi5show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi5 = hspkonstruksiumum5::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi5) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv5::where('hspkonstruksiumum5_id', $datadivisi5->id)->paginate(50);
        $subdatamaterial = subhargadiv5bahan::where('hspkonstruksiumum5_id', $datadivisi5->id)->paginate(50);
        $subdataperatalan = subhargadiv5peralatan::where('hspkonstruksiumum5_id', $datadivisi5->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv5::where('hspkonstruksiumum5_id', $datadivisi5->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv5bahan::where('hspkonstruksiumum5_id', $datadivisi5->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv5peralatan::where('hspkonstruksiumum5_id', $datadivisi5->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.05_divisi5.ahspdivisi5', [
            'title' => 'AHSP Divisi V Pekerjaan Mekanikal & Elektrikal ',
            'data' => $datadivisi5,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }




// DIVISI 6


    public function hspdivisi6(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum6::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket6', function ($q) use ($search) {
                      $q->where('hsppaket6', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan6', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.06_divisi6.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.06_divisi6.06_divisi6', [
            'title' => 'Harga Satuan Pekerjaan Divisi VI Pekerjaan Plambing',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi6show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi6 = hspkonstruksiumum6::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi6) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv6::where('hspkonstruksiumum6_id', $datadivisi6->id)->paginate(50);
        $subdatamaterial = subhargadiv6bahan::where('hspkonstruksiumum6_id', $datadivisi6->id)->paginate(50);
        $subdataperatalan = subhargadiv6peralatan::where('hspkonstruksiumum6_id', $datadivisi6->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv6::where('hspkonstruksiumum6_id', $datadivisi6->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv6bahan::where('hspkonstruksiumum6_id', $datadivisi6->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv6peralatan::where('hspkonstruksiumum6_id', $datadivisi6->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.06_divisi6.ahspdivisi6', [
            'title' => 'AHSP Divisi VI Pekerjaan Plambing ',
            'data' => $datadivisi6,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }


// DIVISI 7


    public function hspdivisi7(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum7::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket7', function ($q) use ($search) {
                      $q->where('hsppaket7', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan7', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.07_divisi7.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.07_divisi7.07_divisi7', [
            'title' => 'Harga Satuan Pekerjaan Divisi VII Pekerjaan Pada Permukiman',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi7show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi7 = hspkonstruksiumum7::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi7) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv7::where('hspkonstruksiumum7_id', $datadivisi7->id)->paginate(50);
        $subdatamaterial = subhargadiv7bahan::where('hspkonstruksiumum7_id', $datadivisi7->id)->paginate(50);
        $subdataperatalan = subhargadiv7peralatan::where('hspkonstruksiumum7_id', $datadivisi7->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv7::where('hspkonstruksiumum7_id', $datadivisi7->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv7bahan::where('hspkonstruksiumum7_id', $datadivisi7->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv7peralatan::where('hspkonstruksiumum7_id', $datadivisi7->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.07_divisi7.ahspdivisi7', [
            'title' => 'AHSP Divisi VII Jalan Pada Permukiman ',
            'data' => $datadivisi7,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }


// DIVISI 8


    public function hspdivisi8(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum8::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")


                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket8', function ($q) use ($search) {
                      $q->where('hsppaket8', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan8', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.08_divisi8.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.08_divisi8.08_divisi8', [
            'title' => 'Harga Satuan Pekerjaan Divisi VIII Pekerjaan Pada Drainase Jalan',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function hspdivisi8show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi8 = hspkonstruksiumum8::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi8) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv8::where('hspkonstruksiumum8_id', $datadivisi8->id)->paginate(50);
        $subdatamaterial = subhargadiv8bahan::where('hspkonstruksiumum8_id', $datadivisi8->id)->paginate(50);
        $subdataperatalan = subhargadiv8peralatan::where('hspkonstruksiumum8_id', $datadivisi8->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv8::where('hspkonstruksiumum8_id', $datadivisi8->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv8bahan::where('hspkonstruksiumum8_id', $datadivisi8->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv8peralatan::where('hspkonstruksiumum8_id', $datadivisi8->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.08_divisi8.ahspdivisi8', [
            'title' => 'AHSP Divisi VIII Drainase Jalan',
            'data' => $datadivisi8,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }



// DIVISI 9


    public function hspdivisi9(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum9::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket9', function ($q) use ($search) {
                      $q->where('hsppaket9', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan9', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.09_divisi9.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.09_divisi9.09_divisi9', [
            'title' => 'Harga Satuan Pekerjaan Divisi VIII Pekerjaan Jaringan Pipa Di Luar Bangunan Gedung',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function hspdivisi9show($id)
    {
        // Ambil data berdasarkan UUID
        $datadivisi9 = hspkonstruksiumum9::where('id', $id)->firstOrFail();

        // Ambil data user saat ini
        $user = Auth::user();

        if (!$datadivisi9) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv9::where('hspkonstruksiumum9_id', $datadivisi9->id)->paginate(50);
        $subdatamaterial = subhargadiv9bahan::where('hspkonstruksiumum9_id', $datadivisi9->id)->paginate(50);
        $subdataperatalan = subhargadiv9peralatan::where('hspkonstruksiumum9_id', $datadivisi9->id)->paginate(50);

        $totalJumlahtenagakerja = subhargadiv9::where('hspkonstruksiumum9_id', $datadivisi9->id)->sum('jumlah_pagu');
        $totalJumlahbahanmaterial = subhargadiv9bahan::where('hspkonstruksiumum9_id', $datadivisi9->id)->sum('jumlah_pagu');
        $totalJumlahperalatan = subhargadiv9peralatan::where('hspkonstruksiumum9_id', $datadivisi9->id)->sum('jumlah_pagu');

        $totalabc = $totalJumlahtenagakerja + $totalJumlahbahanmaterial + $totalJumlahperalatan;
        $totalpersen = $totalabc * 0.1; // atau bisa juga $totalabc + ($totalabc * 0.1);

        $totalkeuntungan = $totalabc + $totalpersen;


        return view('frontend.07_ahsp.03_hspkonstruksiumum.09_divisi9.ahspdivisi9', [
            'title' => 'AHSP Divisi IX Pekerjaan Jaringan Pipa di Luar Bangunan Gedung ',
            'data' => $datadivisi9,
            'datatenagakerja' => $subdata,
            'databahanmaterial' => $subdatamaterial,
            'dataperalatan' => $subdataperatalan,
            'user' => $user,
            'totaltenagakerja' => $totalJumlahtenagakerja,
            'totalbahanmaterial' => $totalJumlahbahanmaterial,
            'totalperalatan' => $totalJumlahperalatan,
            'totalabc' => $totalabc,
            'totalpersen' => $totalpersen,
            'totalkeuntungan' => $totalkeuntungan,
        ]);
    }


    // ==================================================================================================================================
    // FE ANDROID SATUAN HARGA MATERIAL

    public function satuanhargamaterial()
    {
        $user = Auth::user();
        // $datamaterial = satuanhargamaterial::paginate(10);

        return view('frontend.00_android.02_satuanhargadasar.index', [
            'title' => 'Satuan Harga Dasar',
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'data' => $datamaterial, // Mengirimkan data paginasi ke view
        ]);
    }

    public function satuanhargamaterialshow(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargamaterial::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.01_satuanhargamaterial', [
            'title' => 'Satuan Harga Dasar Material',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function ressatuanhargaupah(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaupahtenagakerja::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%")
                  ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_satuanhargaupah', [
            'title' => 'Satuan Harga Dasar Upah Tenaga Kerja',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function ressatuanhargaperalatan(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaperalatan::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.03_satuanhargaperalatan', [
            'title' => 'Satuan Harga Dasar Peralatan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

// AHSP KONSTRUKSI 9 DIVISI

    public function resahspkonstruksi()
    {
        $user = Auth::user();
        // $datamaterial = satuanhargamaterial::paginate(10);

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.index', [
            'title' => 'AHSP Konstruksi Umum',
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'data' => $datamaterial, // Mengirimkan data paginasi ke view
        ]);
    }

    public function resahspdiv1(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket', function ($q) use ($search) {
                      $q->where('hsppaket', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.01_divisi1.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.01_divisi1.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi I Persiapan Pekerjaan',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function resahspdiv2(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum2::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket2', function ($q) use ($search) {
                      $q->where('hsppaket2', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan2', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.02_divisi2.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.02_divisi2.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi II Pekerjaan Struktur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function resahspdiv3(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum3::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket3', function ($q) use ($search) {
                      $q->where('hsppaket3', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan3', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.03_divisi3.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.03_divisi3.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi III Pekerjaan Arsitektur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function resahspdiv4(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum4::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket4', function ($q) use ($search) {
                      $q->where('hsppaket4', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan4', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.04_divisi4.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.04_divisi4.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi IV Pekerjaan Lansekap',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



    public function resahspdiv5(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum5::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket5', function ($q) use ($search) {
                      $q->where('hsppaket5', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan5', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.05_divisi5.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.05_divisi5.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi V Pekerjaan Mekanikal Elektrikal',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function resahspdiv6(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum6::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket6', function ($q) use ($search) {
                      $q->where('hsppaket6', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan6', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.06_divisi6.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.06_divisi6.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi VI Pekerjaan Plumbing',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function resahspdiv7(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum7::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket7', function ($q) use ($search) {
                      $q->where('hsppaket7', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan7', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.07_divisi7.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.07_divisi7.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi VII Pekerjaan Jalan Pada Permukiman',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function resahspdiv8(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum8::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket8', function ($q) use ($search) {
                      $q->where('hsppaket8', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan8', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.08_divisi8.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.08_divisi8.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi VIII Drainase Jalan',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function resahspdiv9(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum9::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")
                  ->orWhere('satuanmaterial', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket9', function ($q) use ($search) {
                      $q->where('hsppaket9', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan9', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.09_divisi9.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.00_android.02_satuanhargadasar.02_ahspkonstruksiumum.09_divisi9.index', [
            'title' => 'Harga Satuan Pekerjaan Divisi IX Pekerjaan Pipa di Luar Bangunan Gedung',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

// MENU BACKEND SATUAN HARGA MERTIAL

public function besatuanhargamaterial(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = satuanhargamaterial::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('uraian', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('besaran', 'LIKE', "%{$search}%");
        });
    }

    // Urut berdasarkan kolom 'uraian' dari A-Z
    $query->orderBy('uraian', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.01_satuanhargamaterial.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_satuanharga.01_satuanhargamaterial.index', [
        'title' => 'Daftar Satuan Harga Material',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}



public function besatuanhargamaterialdelete($id)
{
// Cari item berdasarkan judul
$entry = satuanhargamaterial::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/besatuanhargamaterial')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function satuanhargamaterialcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_satuanharga.01_satuanhargamaterial.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Create Satuan Harga Material'
    ]);
}

public function satuanhargamaterialcreatenew(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'uraian' => 'required|string|max:255',
        'satuan' => 'required|string|max:100',
        'besaran' => 'required|numeric|min:0',
    ], [
        'uraian.required' => 'Uraian bahan material wajib diisi.',
        'satuan.required' => 'Satuan wajib diisi.',
        'besaran.required' => 'Besaran wajib diisi.',
        'besaran.numeric' => 'Besaran harus berupa angka.',
        'besaran.min' => 'Besaran tidak boleh negatif.',
    ]);

    // Simpan ke database
    satuanhargamaterial::create([
        'uraian' => $validatedData['uraian'],
        'satuan' => $validatedData['satuan'],
        'besaran' => $validatedData['besaran'],
    ]);

    session()->flash('create', 'Data Satuan Harga Material Berhasil Dibuat!');
    return redirect('/besatuanhargamaterial');
}


public function besatuanhargamaterialupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datasatuanhargamaterial = satuanhargamaterial::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_satuanharga.01_satuanhargamaterial.update', [
        'data' => $datasatuanhargamaterial,
        'user' => $user,
        'title' => 'Update Daftar Harga Material'
    ]);
}

public function besatuanhargamaterialupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'uraian' => 'required|string|max:255',
        'satuan' => 'required|string|max:100',
        'besaran' => 'required|numeric|min:0',
    ], [
        'uraian.required' => 'Uraian bahan material wajib diisi.',
        'satuan.required' => 'Satuan wajib diisi.',
        'besaran.required' => 'Besaran wajib diisi.',
        'besaran.numeric' => 'Besaran harus berupa angka.',
        'besaran.min' => 'Besaran tidak boleh negatif.',
    ]);

    // Ambil data berdasarkan ID
    $data = satuanhargamaterial::findOrFail($id);

    // Update data
    $data->update([
        'uraian' => $validatedData['uraian'],
        'satuan' => $validatedData['satuan'],
        'besaran' => $validatedData['besaran'],
    ]);

    // Redirect atau response sukses
    session()->flash('update', 'Data Satuan Harga Material Berhasil Diperbarui!');
    return redirect('/besatuanhargamaterial');
}


// SATUAN HARGA UPAH PERALATAN

public function besatuanhargaupahpekerjaan(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = satuanhargaupahtenagakerja::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('uraian', 'LIKE', "%{$search}%")
              ->orWhere('kode', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('besaran', 'LIKE', "%{$search}%")
              ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
        });
    }

    // Urut berdasarkan kolom 'uraian' dari A-Z
    $query->orderBy('uraian', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.02_satuanhargaupah.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_satuanharga.02_satuanhargaupah.index', [
        'title' => 'Daftar Satuan Harga Upah Pekerjaan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}



public function besatuanhargaupahpekerjaandelete($id)
{
// Cari item berdasarkan judul
$entry = satuanhargaupahtenagakerja::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/besatuanhargaupahpekerjaan')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function besatuanhargaupahpekerjaancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_satuanharga.02_satuanhargaupah.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Create Satuan Harga Upah Pekerjaan'
    ]);
}


public function besatuanhargaupahpekerjaancreatenew(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'uraian' => 'required|string|max:255',
        'kode' => 'required|string|max:255',
        'satuan' => 'required|string|max:100',
        'besaran' => 'required|numeric|min:0',
        'besaranperjam' => 'required|numeric|min:0',
    ], [
        'uraian.required' => 'Uraian bahan material wajib diisi.',
        'satuan.required' => 'Satuan wajib diisi.',
        'kode.required' => 'Kode wajib diisi.',
        'besaran.required' => 'Besaran wajib diisi.',
        'besaran.numeric' => 'Besaran harus berupa angka.',
        'besaran.min' => 'Besaran tidak boleh negatif.',
        'besaranperjam.required' => 'Besaran Per/Jam wajib diisi.',
        'besaranperjam.numeric' => 'Besaran Per/Jam harus berupa angka.',
        'besaranperjam.min' => 'Besaran Per/Jam  tidak boleh negatif.',
    ]);

    // Simpan ke database
    satuanhargaupahtenagakerja::create([
        'uraian' => $validatedData['uraian'],
        'kode' => $validatedData['kode'],
        'satuan' => $validatedData['satuan'],
        'besaran' => $validatedData['besaran'],
        'besaranperjam' => $validatedData['besaranperjam'],
    ]);

    session()->flash('create', 'Data Satuan Harga Upah Pekerjaan Berhasil Dibuat!');
    return redirect('/besatuanhargaupahpekerjaan');
}


public function besatuanhargaupahpekerjaanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datasatuanhargaupahtenagakerja = satuanhargaupahtenagakerja::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_satuanharga.02_satuanhargaupah.update', [
        'data' => $datasatuanhargaupahtenagakerja,
        'user' => $user,
        'title' => 'Update Daftar Harga Satuan Upah Pekerjaan'
    ]);
}


public function besatuanhargaupahpekerjaanupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'uraian' => 'required|string|max:255',
        'kode' => 'required|string|max:255',
        'satuan' => 'required|string|max:100',
        'besaran' => 'required|numeric|min:0',
        'besaranperjam' => 'required|numeric|min:0',
    ], [
        'uraian.required' => 'Uraian bahan material wajib diisi.',
        'satuan.required' => 'Satuan wajib diisi.',
        'besaran.required' => 'Besaran wajib diisi.',
        'besaran.numeric' => 'Besaran harus berupa angka.',
        'besaran.min' => 'Besaran tidak boleh negatif.',
        'besaranperjam.required' => 'Besaran Per/Jam wajib diisi.',
        'besaranperjam.numeric' => 'Besaran Per/Jam harus berupa angka.',
        'besaranperjam.min' => 'Besaran Per/Jam tidak boleh negatif.',
    ]);

    // Ambil data berdasarkan ID
    $data = satuanhargaupahtenagakerja::findOrFail($id);

    // Update data
    $data->update([
        'uraian' => $validatedData['uraian'],
        'kode' => $validatedData['kode'],
        'satuan' => $validatedData['satuan'],
        'besaran' => $validatedData['besaran'],
        'besaranperjam' => $validatedData['besaranperjam'],
    ]);

    // Redirect atau response sukses
    session()->flash('update', 'Data Satuan Harga Material Berhasil Diperbarui!');
    return redirect('/besatuanhargaupahpekerjaan');
}



}
