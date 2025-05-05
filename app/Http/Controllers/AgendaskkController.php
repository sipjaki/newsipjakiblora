<?php

namespace App\Http\Controllers;

use App\Models\agendaskk;
use App\Models\pesertapelatihan;
use App\Models\materipelatihanskk;
use App\Models\agendapelatihan;
use App\Models\allskktenagakerjablora;
use App\Models\jabatankerja;
use App\Models\jenjangpendidikan;
use App\Models\namasekolah;
use App\Models\tahunlulus;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaskkController extends Controller
{
    //
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendaskk::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%");
                //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                //   }
                // );

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.02_agendaskk.01_daftaragendaskk', [
            'title' => 'Agenda SKK Tenaga Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }


    public function daftaragendaskk($namakegiatan)
    {
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();


        if (!$dataagendaskk) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = materipelatihanskk::where('agendaskk_id', $dataagendaskk->id)->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.02_agendaskkshow', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        'datamateripelatihanskk' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA SKK TENAGA KERJA KONSTRUKSI

public function daftarpesertaskk(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = agendaskk::query();

    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
            //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
            //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
            //   }
            // );

    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.03_daftaragendaskk', [
        'title' => 'Daftar Peserta SKK Tenaga Kerja Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}

public function daftarpesertaskkshow(Request $request, $namakegiatan)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('jabatankerja', 'LIKE', "%{$search}%")
              ->orWhere('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
              ->orWhere('namaasosiasi', 'LIKE', "%{$search}%")
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('user', 'LIKE', "%{$search}%");
              });
    }

    $datapesertapelatihan = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $agendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$agendaskk) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();

        $datapesertaskk = allskktenagakerjablora::where('agendaskk_id', $agendaskk->id)
                    ->select(['id', 'user_id', 'jeniskelamin', 'namaasosiasi', 'tahunpilihan_id', 'nik'])
                    ->paginate(25);

    $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // $datauser = user::all();

    // Ambil data user saat ini
    $user = Auth::user();


    return view('frontend.04_pembinaan.02_agendaskk.04_daftarpesertaskkshow', [
        'title' => 'Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        'datapeserta' => $datapesertaskk,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user,
        // 'datapeserta' => $datauser
    ]);
}


// ======================================================= MENU BACKEND AGENDA SKK =================================================


public function beagendaskk(Request $request)
{
        $perPage = $request->input('perPage', 5);
        $search = $request->input('search');

        $query = agendaskk::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                ->orWhere('penutupan', 'LIKE', "%{$search}%")
                ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
                ->orWhere('jumlahpeserta', 'LIKE', "%{$search}%")
                ->orWhere('lokasi', 'LIKE', "%{$search}%")
                ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhere('isiagenda', 'LIKE', "%{$search}%")
                ->orWhere('foto', 'LIKE', "%{$search}%")
                ->orWhere('materi', 'LIKE', "%{$search}%");
    // -------------------------------------------------------------------------------
                // ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                //     $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                // });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('backend.05_agenda.03_agendaskk.partials.table', compact('data'))->render()
            ]);
        }

        return view('backend.05_agenda.03_agendaskk.index', [
            'title' => 'Agenda Pelatihan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
}

// TKK DPUPR BLORA SHOW

public function beagendaskkshow($namakegiatan)
{
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // Ambil data user saat ini
        $user = Auth::user();

    return view('backend.05_agenda.03_agendaskk.show', [
        'title' => 'Data Details Agenda SKK ',
        'data' => $dataagendaskk,
    ]);
}


public function beagendaskkpeserta(Request $request, $namakegiatan)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('jabatankerja', 'LIKE', "%{$search}%")
              ->orWhere('tempatlahir', 'LIKE', "%{$search}%")
              ->orWhere('ttl', 'LIKE', "%{$search}%")
            //   ===============================================
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('user', 'LIKE', "%{$search}%");
              });

    }

    $datapesertapelatihan = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('data'))->render()
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


    return view('backend.05_agenda.01_agendapelatihan.showpeserta', [
        'title' => 'Daftar Peserta Agenda',
        'data' => $dataagendapelatihan,
        'datapeserta' => $datapesertapelatihan,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user,
        // 'datapeserta' => $datauser
    ]);
}


    public function beagendaskkdeletepeserta($id)
    {
    // Cari item berdasarkan judul
        $entry = pesertapelatihan::where('id', $id)->first();

        if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beagendapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

        }

    return redirect()->back()->with('error', 'Item not found');
    }

    public function beagendaskkdelete($namakegiatan)
    {
    // Cari item berdasarkan judul
        $entry = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beagendapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

        }

    return redirect()->back()->with('error', 'Item not found');
    }



    public function daftarpesertasertifikasiskknew($id)
{
    $dataagendaskk = agendaskk::findOrFail($id); // Cari 1 data sesuai ID
    $datajenjangpendidikan = jenjangpendidikan::orderBy('jenjangpendidikan', 'asc')->get();
    $datajabatankerja = jabatankerja::orderBy('jabatankerja', 'asc')->get();
    $datasekolah = namasekolah::orderBy('namasekolah', 'asc')->get();
    $datatahunbimtek = tahunpilihan::orderBy('tahunpilihan', 'asc')->get();
    $user = Auth::user();
    $namalengkap = $allskktenagakerjablora->user->name ?? '';


    return view('frontend.04_pembinaan.02_agendaskk.01_daftar.index', [
        'agendapelatihannamakegiatan' => $dataagendaskk->namakegiatan, // Ini dikirim ke form
        'agendapelatihan_id' => $dataagendaskk->id, // Ini dikirim ke form
        'user' => $user,
        'jenjangpendidikan' => $datajenjangpendidikan,
        'jabatankerja' => $datajabatankerja,
        'sekolah' => $datasekolah,
        'tahunbimtek' => $datatahunbimtek,
        'namalengkap' => $namalengkap,
        'title' => 'Form Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi'
    ]);
}


}
