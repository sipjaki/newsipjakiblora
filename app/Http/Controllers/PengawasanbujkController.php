<?php

namespace App\Http\Controllers;

use App\Models\pengawasanbujk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use Illuminate\Support\Facades\Auth;

class PengawasanbujkController extends Controller
{
    //


    // public function index()
    // {
    //     $user = Auth::user();
    //     $data = pengawasanbujk::paginate(10);

    //     return view('frontend.05_pengawasan.01_bujk.01_bujk', [
    //         'title' => 'Pengawasan BUJK',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
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
            'html' => view('frontend.05_pengawasan.01_bujk.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.05_pengawasan.01_bujk.01_bujk', [
        'title' => 'Pengawasan BUJK',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkpengwasanshowmasjaki($namaperusahaan)
    {
        $datashow = pengawasanbujk::where('namaperusahaan', $namaperusahaan)->first();

        // $subdata = prosespaketkonsultasi::all();
        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(10);

          // Menghitung nomor urut mulai
            // $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.01_bujk.01_bujkshow', [
        'title' => 'PENGAWASAN BUJK ',
        'data' => $datashow,
        'user' => $user,

    ]);
    }


    public function bepengawasanbujk(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = pengawasanbujk::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('kodeproyek', 'LIKE', "%{$search}%")
              ->orWhere('namaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('alamatperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('statusmodal', 'LIKE', "%{$search}%")
              ->orWhere('jenisperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('kbli', 'LIKE', "%{$search}%")
              ->orWhere('uraiankbli', 'LIKE', "%{$search}%")
              ->orWhere('sektor', 'LIKE', "%{$search}%")
              ->orWhere('alamatproyek', 'LIKE', "%{$search}%")
              ->orWhere('wilayah', 'LIKE', "%{$search}%")
              ->orWhere('resiko', 'LIKE', "%{$search}%")
              ->orWhere('sumberdata', 'LIKE', "%{$search}%")
              ->orWhere('skalausahaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('skalausahaproyek', 'LIKE', "%{$search}%")
              ->orWhere('kewenangankoordinator', 'LIKE', "%{$search}%")
              ->orWhere('kewenanganpengawas', 'LIKE', "%{$search}%")
              ->orWhere('PSN', 'LIKE', "%{$search}%");
        });
    }

    // Urut berdasarkan nama perusahaan
    $query->orderBy('namaperusahaan', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.06_pengawasan.04_pengawasanbujk.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.06_pengawasan.04_pengawasanbujk.index', [
        'title' => 'Daftar Pengawasan Badan Usaha Jasa Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function bepengawasanbujkshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datapengawasanbujk = pengawasanbujk::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.06_pengawasan.04_pengawasanbujk.show', [
        'data' => $datapengawasanbujk,
        'user' => $user,
        'title' => 'Show Data Pengawasan BUJK'
    ]);
}

public function bepengawasanbujkupdatecreate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datapengawasanbujk = pengawasanbujk::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.06_pengawasan.04_pengawasanbujk.update', [
        'data' => $datapengawasanbujk,
        'user' => $user,
        'title' => 'Show Data Pengawasan BUJK'
    ]);
}

public function bepengawasanbujkupdatecreatenew(Request $request, $id)
{
    $validated = $request->validate([
        'kodeproyek' => 'required|string|max:100',
        'namaperusahaan' => 'required|string|max:255',
        'alamatperusahaan' => 'required|string',
        'statusmodal' => 'required|string|max:50',
        'jenisperusahaan' => 'required|string|max:100',
        'nib' => 'required|string|max:100',
        'kbli' => 'required|string|max:20',
        'uraiankbli' => 'required|string',
        'sektor' => 'required|string|max:100',
        'alamatproyek' => 'required|string|max:255',
        'wilayah' => 'required|string|max:100',
        'luastanah' => 'required|numeric|min:0',
        'tki_lakilaki' => 'nullable|integer|min:0',
        'tki_perempuan' => 'nullable|integer|min:0',
        'tka_lakilaki' => 'nullable|integer|min:0',
        'tka_perempuan' => 'nullable|integer|min:0',
        'resiko' => 'required|string|max:50',
        'sumberdata' => 'required|string|max:100',
        'investasi' => 'required|numeric|min:0',
        'skalausahaperusahaan' => 'required|string|max:100',
        'skalausahaproyek' => 'required|string|max:100',
        'kewenangankoordinator' => 'required|string|max:100',
        'kewenanganpengawas' => 'required|string|max:100',
        'PSN' => 'required|string|max:100',
    ], [
        'kodeproyek.max' => 'Kode proyek maksimal 100 karakter.',
        'namaperusahaan.max' => 'Nama perusahaan maksimal 255 karakter.',
        'alamatperusahaan.string' => 'Alamat perusahaan harus berupa teks.',
        'luastanah.numeric' => 'Luas tanah harus berupa angka.',
        'luastanah.min' => 'Luas tanah tidak boleh negatif.',
        'investasi.numeric' => 'Investasi harus berupa angka.',
        'tki_lakilaki.integer' => 'TKI Laki-laki harus berupa angka.',
        'tka_lakilaki.integer' => 'TKA Laki-laki harus berupa angka.',
        'PSN.required' => 'Field PSN wajib diisi.',
    ]);

    // Temukan data berdasarkan ID
    $data = pengawasanbujk::findOrFail($id);

    // Update data
    $data->update($validated);

    session()->flash('update', 'Data Pengawasan BUJK Berhasil Di Update!');
    return redirect('/bepengawasanbujk');

}



public function bepengawasanbujkcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.06_pengawasan.04_pengawasanbujk.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Create Pengawasan BUJk '
    ]);
}


public function bepengawasanbujkcreatenew(Request $request)
{
    $validated = $request->validate([
        'kodeproyek' => 'required|string|max:100',
        'namaperusahaan' => 'required|string|max:255',
        'alamatperusahaan' => 'required|string',
        'statusmodal' => 'required|string|max:50',
        'jenisperusahaan' => 'required|string|max:100',
        'nib' => 'required|string|max:100',
        'kbli' => 'required|string|max:20',
        'uraiankbli' => 'required|string',
        'sektor' => 'required|string|max:100',
        'alamatproyek' => 'required|string|max:255',
        'wilayah' => 'required|string|max:100',
        'luastanah' => 'required|numeric|min:0',
        'tki_lakilaki' => 'nullable|integer|min:0',
        'tki_perempuan' => 'nullable|integer|min:0',
        'tka_lakilaki' => 'nullable|integer|min:0',
        'tka_perempuan' => 'nullable|integer|min:0',
        'resiko' => 'required|string|max:50',
        'sumberdata' => 'required|string|max:100',
        'investasi' => 'required|numeric|min:0',
        'skalausahaperusahaan' => 'required|string|max:100',
        'skalausahaproyek' => 'required|string|max:100',
        'kewenangankoordinator' => 'required|string|max:100',
        'kewenanganpengawas' => 'required|string|max:100',
        'PSN' => 'required|string|max:100',
    ], [
        'kodeproyek.max' => 'Kode proyek maksimal 100 karakter.',
        'namaperusahaan.max' => 'Nama perusahaan maksimal 255 karakter.',
        'alamatperusahaan.string' => 'Alamat perusahaan harus berupa teks.',
        'luastanah.numeric' => 'Luas tanah harus berupa angka.',
        'luastanah.min' => 'Luas tanah tidak boleh negatif.',
        'investasi.numeric' => 'Investasi harus berupa angka.',
        'tki_lakilaki.integer' => 'TKI Laki-laki harus berupa angka.',
        'tka_lakilaki.integer' => 'TKA Laki-laki harus berupa angka.',
        'PSN.required' => 'Field PSN wajib diisi.',
    ]);

    // Simpan data baru
    pengawasanbujk::create($validated);

    session()->flash('create', 'Data Pengawasan BUJK Berhasil Di Buat!');
    return redirect('/bepengawasanbujk');
}

}
