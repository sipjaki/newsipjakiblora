<?php

namespace App\Http\Controllers;

use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\jenjangpendidikan;
use App\Models\namasekolah;
use App\Models\profiljenispekerjaan;
use App\Models\subklasifikasi;
use App\Models\tandatangan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SettingDataController extends Controller
{

public function settingssekolah(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = namasekolah::query();

    if ($search) {
        $query->where('namasekolah', 'LIKE', "%{$search}%");
    }

    // Urutkan berdasarkan abjad A-Z
    $query->orderBy('namasekolah', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.16_settingsdata.01_sekolah.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.16_settingsdata.01_sekolah.index', [
        'title' => 'Daftar Universitas/Sekolah',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function settingssekolahcreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.01_sekolah.create', [
            'title' => 'Create Universitas/Sekolah',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }

  public function settingssekolahcreatenew(Request $request)
{
    $request->validate([
        'namasekolah' => 'required|string|max:255',
    ], [
        'namasekolah.required' => 'Nama sekolah tidak boleh kosong.',
        'namasekolah.string'   => 'Nama sekolah harus berupa teks.',
        'namasekolah.max'      => 'Nama sekolah tidak boleh lebih dari 255 karakter.',
        'namasekolah.unique'   => 'Nama sekolah ini sudah terdaftar.',
    ]);

    namasekolah::create([
        'namasekolah' => $request->namasekolah,
    ]);

    session()->flash('create', 'Data berhasil dibuat!');
    return redirect('/settingssekolah');
}


// SETTING TANDA TANGAN
public function settingstandatangan(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = tandatangan::query();

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('tandatangan', 'LIKE', "%{$search}%");
        });
    }

    // Urutkan berdasarkan abjad A-Z
    $query->orderBy('namalengkap', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.16_settingsdata.02_tandatangan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.16_settingsdata.02_tandatangan.index', [
        'title' => 'Daftar Tanda Tangan Bidang Bangunan Gedung',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

public function settingssubklasifikasi(Request $request)
{

    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = subklasifikasi::query();

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('kode', 'LIKE', "%{$search}%")
              ->orWhere('pekerjaan', 'LIKE', "%{$search}%");
        });
    }

    // Urutkan berdasarkan abjad A-Z sesuai kolom pekerjaan
    $query->orderBy('pekerjaan', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.16_settingsdata.02_tandatangan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.16_settingsdata.03_subklasifikasi.index', [
        'title' => 'Daftar Sub Klasifikasi Pekerjaan Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);

}

 public function settingstandatangancreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.02_tandatangan.create', [
            'title' => 'Create Tanda Tangan',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }


public function settingstandatangancreatenew(Request $request)
{
    $request->validate([
        'namalengkap' => 'required|string|max:255',
        'tandatangan' => 'required|image|mimes:jpeg,png,jpg|max:2048', // maksimal 2MB
    ], [
        'namalengkap.required' => 'Nama lengkap tidak boleh kosong.',
        'tandatangan.required' => 'Tanda tangan harus diunggah.',
        'tandatangan.image' => 'File harus berupa gambar.',
        'tandatangan.mimes' => 'Format gambar harus jpeg, png, atau jpg.',
        'tandatangan.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
    ]);

    // Simpan file langsung ke folder public/00_pengaturandata/01_tandatangan
    if ($request->hasFile('tandatangan')) {
        $file = $request->file('tandatangan');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('00_pengaturandata/01_tandatangan');

        // Buat folder jika belum ada
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $file->move($destinationPath, $filename);
    }

    // Simpan ke database
    tandatangan::create([
        'namalengkap' => $request->namalengkap,
        'tandatangan' => '00_pengaturandata/01_tandatangan/' . $filename, // path disimpan di DB
    ]);

    session()->flash('create', 'Data tanda tangan berhasil ditambahkan!');
    return redirect('/settingstandatangan');
}


public function settingstandatangandelete($id)
{
// Cari item berdasarkan judul
$entry =tandatangan::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/settingstandatangan')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}

 public function settingssubklasifikasicreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.03_subklasifikasi.create', [
            'title' => 'Buat Data Sub Klasifikasi Layanan',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }

    public function settingssubklasifikasinewcreate(Request $request)
{
    $request->validate([
        'kode' => 'required|string|max:50',
        'pekerjaan' => 'required|string|max:255',
    ], [
        'kode.required' => 'Kode tidak boleh kosong.',
        'pekerjaan.required' => 'Pekerjaan tidak boleh kosong.',
    ]);

    // Simpan ke database
    subklasifikasi::create([
        'kode' => $request->kode,
        'pekerjaan' => $request->pekerjaan,
    ]);

    session()->flash('create', 'Data sub klasifikasi berhasil ditambahkan!');
    return redirect('/settingssubklasifikasi');
}



public function settingssubklasifikasidelete($id)
{
// Cari item berdasarkan judul
$entry = subklasifikasi::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/settingssubklasifikasi')->with('delete', 'Data Berhasil Di Hapus !');

}
}

public function settingspendidikan(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search  = $request->input('search');

    $query = jenjangpendidikan::query();

    if ($search) {
        $query->where('jenjangpendidikan', 'LIKE', "%{$search}%");
    }

    // Urutkan berdasarkan abjad A-Z
    $query->orderBy('jenjangpendidikan', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view(
                'backend.16_settingsdata.04_jenjangpendidikan.partials.table',
                compact('data')
            )->render()
        ]);
    }

    return view('backend.16_settingsdata.04_jenjangpendidikan.index', [
        'title'   => 'Daftar Jenjang Pendidikan',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search
    ]);
}


    public function settingspendidikancreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.04_jenjangpendidikan.create', [
            'title' => 'Tambah Jenjang Pendidikan',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }


    public function settingsjenjangpencreatenew(Request $request)
{
    $request->validate([
        'jenjangpendidikan' => 'required|string|max:50|unique:jenjangpendidikans,jenjangpendidikan',
    ], [
        'jenjangpendidikan.required' => 'Jenjang pendidikan tidak boleh kosong.',
        'jenjangpendidikan.string'   => 'Jenjang pendidikan harus berupa teks.',
        'jenjangpendidikan.max'      => 'Jenjang pendidikan tidak boleh lebih dari 50 karakter.',
        'jenjangpendidikan.unique'   => 'Jenjang pendidikan ini sudah terdaftar.',
    ]);

jenjangpendidikan::create([
        'jenjangpendidikan' => $request->jenjangpendidikan,
    ]);

    session()->flash('create', 'Data berhasil dibuat!');
    return redirect('/settingsjenjangpendidikan');
}


public function settingspendidikandelete($id)
{
// Cari item berdasarkan judul
$entry = jenjangpendidikan::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/settingsjenjangpendidikan')->with('delete', 'Data Berhasil Di Hapus !');

}
}

public function jenispekerjaandelete($id)
{
// Cari item berdasarkan judul
$entry = profiljenispekerjaan::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/settingsjenispekerjaan')->with('delete', 'Data Berhasil Di Hapus !');

}
}


public function settingsjenispekerjaan(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search  = $request->input('search');

    $query = profiljenispekerjaan::query();

    if ($search) {
        $query->where('jenispekerjaan', 'LIKE', "%{$search}%");
    }

    // Urutkan berdasarkan data terbaru
    $query->orderBy('created_at', 'desc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view(
                'backend.16_settingsdata.05_jenispekerjaan.partials.table',
                compact('data')
            )->render()
        ]);
    }

    return view('backend.16_settingsdata.05_jenispekerjaan.index', [
        'title'   => 'Daftar Jenis Pekerjaan',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search
    ]);
}

   public function settingsjenispekerjaancreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.05_jenispekerjaan.create', [
            'title' => 'Tambah Jenis Pekerjaan',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }


        public function settingsjenispekerjaannew(Request $request)
{
    $request->validate([
        'jenispekerjaan' => 'required|string|max:100',
    ], [
        'jenjangpendidikan.required' => 'Jenjang pendidikan tidak boleh kosong.',
        'jenjangpendidikan.string'   => 'Jenjang pendidikan harus berupa teks.',
        'jenjangpendidikan.max'      => 'Jenjang pendidikan tidak boleh lebih dari 50 karakter.',
        'jenjangpendidikan.unique'   => 'Jenjang pendidikan ini sudah terdaftar.',
    ]);

profiljenispekerjaan::create([
        'jenispekerjaan' => $request->jenispekerjaan,
    ]);

    session()->flash('create', 'Data berhasil dibuat!');
    return redirect('/settingsjenispekerjaan');
}


}
