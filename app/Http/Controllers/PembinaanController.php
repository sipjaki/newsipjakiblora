<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\asosiasimasjaki;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;
use App\Models\pesertapelatihan;
use App\Models\materipelatihan;
use App\Models\materipelatihanskk;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PembinaanController extends Controller
{
    //
    // public function index()
    // {
    //     $data = agendapelatihan::paginate(15);
    //     $user = Auth::user();
    //     $datasub = jenjang::all();
    //     $datasubkategori = kategoripelatihan::all();

    //     return view('frontend.04_pembinaan.01_agendapembinaan.index', [
    //         'title' => 'Agenda Pembinaan',
    //         'user' => $user,
    //         'data' => $data,
    //         'datasub' => $datasub,
    //         'datasubkategori' => $datasubkategori,
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        // Menambahkan orderBy untuk memastikan data diurutkan berdasarkan created_at (data terbaru yang muncul pertama)
        $query = agendapelatihan::orderBy('created_at', 'desc');

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });
        }

        // Lakukan paginasi dengan hasil query yang sudah terurut berdasarkan created_at
        $data = $query->paginate($perPage);

        // Jika request AJAX, kirimkan response dengan data terbaru
        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        // Mengambil data tambahan yang diperlukan
        $user = Auth::user();
        $datasub = jenjang::all();
        $datasubkategori = kategoripelatihan::all();

        return view('frontend.04_pembinaan.01_agendapembinaan.index', [
            'title' => 'Agenda Pelatihan Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'datasub' => $datasub,
            'datasubkategori' => $datasubkategori,
            'user' => $user
        ]);
    }


    public function namakegiatandaftar($namakegiatan)
    {
        $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;
     // Menggunakan paginate() untuk pagination
     $subdata = materipelatihan::where('agendapelatihan_id', $dataagendapelatihan->id)->paginate(50);


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.01_agendapembinaan.show', [
        'title' => 'Agenda Pelatihan',
        'data' => $dataagendapelatihan,
        'datamateripelatihan' => $subdata,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA PELATIHAN AGENDA PELATIHAN WORKSHOP DAN LAINLAIN

    public function daftarpesertapelatihan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.01_agendapembinaan.daftaragenda', [
            'title' => 'Daftar Peserta Pelatihan Jakon Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }

    public function daftarpesertapelatihanshow(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        // Cari agenda pelatihan berdasarkan nama kegiatan
        $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        if (!$agendapelatihan) {
            return abort(404, 'Agenda pelatihan tidak ditemukan');
        }

        // Query peserta pelatihan berdasarkan agendapelatihan_id
        $query = PesertaPelatihan::where('agendapelatihan_id', $agendapelatihan->id);

        // Jika ada keyword pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhere('namalengkap', 'LIKE', "%{$search}%");
            });
        }

        $datapesertapelatihan = $query->orderBy('id', 'desc')->paginate($perPage);

        // Jika request AJAX (misalnya untuk refresh tabel via JavaScript)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', [
                    'datapeserta' => $datapesertapelatihan
                ])->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.01_agendapembinaan.daftarpesertashow', [
            'title' => 'Daftar Peserta Agenda',
            'data' => $agendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user,
        ]);
    }


    // MENU BACKEND AGENDA PELATIHAN


    public function beagendapelatihan(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    // Query awal dengan relasi jumlah peserta
    $query = agendapelatihan::withCount('pesertapelatihan')
                ->orderBy('created_at', 'desc'); // Data terbaru

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('penutupan', 'LIKE', "%{$search}%")
              ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
              ->orWhere('jumlahpeserta', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%")
              ->orWhere('isiagenda', 'LIKE', "%{$search}%")
              ->orWhere('materi', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
            $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
            $q->where('namaasosiasi', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.05_agenda.01_agendapelatihan.index', [
        'title' => 'Agenda Pelatihan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    // TKK DPUPR BLORA SHOW

    public function beagendapelatihanshow($namakegiatan)
    {
            $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.05_agenda.01_agendapelatihan.show', [
            'title' => 'Data Details Agenda Pelatihan',
            'data' => $dataagendapelatihan,
        ]);
    }

    public function beagendapelatihanshowpeserta(Request $request, $id)
    {
        $perPage = $request->input('perPage', 50);
        $search = $request->input('search');

        // Pastikan agenda pelatihan dengan ID ini ada
        $agendapelatihan = agendapelatihan::findOrFail($id);

        // Ambil user login saat ini
        $user = Auth::user();

        // Ambil peserta yang hanya terkait dengan agenda pelatihan ini
        $query = pesertapelatihan::where('agendapelatihan_id', $id)
                    ->select(['id', 'namalengkap', 'jeniskelamin', 'instansi', 'jenjangpendidikan_id', 'nik', 'tanggallahir', 'notelepon', 'sertifikat', 'verifikasi']);

        // Filter pencarian (jika ada)
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhere('namalengkap', 'LIKE', "%{$search}%")
                //   ->orWhereHas('user', function ($sub) use ($search) {
                //       $sub->where('name', 'LIKE', "%{$search}%");
                //   })
                  ;
            });
        }

        $datapesertapelatihan = $query->orderBy('created_at', 'desc')->paginate($perPage);

        // Untuk request Ajax (misal filter dinamis via JS)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('datapesertapelatihan'))->render()
            ]);
        }

        return view('backend.05_agenda.01_agendapelatihan.showpeserta', [
            'title' => 'Daftar Peserta Agenda Pelatihan',
            'data' => $agendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }


        public function beagendapelatihanpesertadelete($id)
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

        public function beagendapelatihandelete($namakegiatan)
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




        // MATERI PELATIHAN

        public function beagendapelatihanmateri($id)
        {
                $dataagendapelatihan = agendapelatihan::where('id', $id)->first();
                // Ambil data user saat ini
                $user = Auth::user();

                if (!$dataagendapelatihan) {
                    // Tangani jika kegiatan tidak ditemukan
                    return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
                }

                // Menggunakan paginate() untuk pagination
                $subdata = materipelatihan::where('agendapelatihan_id', $dataagendapelatihan->id)->paginate(50);

            // Ambil data user saat ini
            $user = Auth::user();
            return view('backend.05_agenda.01_agendapelatihan.01_daftarmateri.index', [
                'title' => 'Daftar Materi Agenda Pelatihan',
                'data' => $dataagendapelatihan,
                'subdata' => $subdata,
                'user' => $user,
            ]);
        }

        public function beagendapelatihanmateridelete($id)
{
    $entry = materipelatihan::where('id', $id)->first();

    if ($entry) {
        // Kalau ada file yang mau dihapus, bisa aktifkan bagian ini
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $parentId = $entry->bujkkonsultan_id;
        $entry->delete();

        // Pakai session()->flash supaya konsisten dengan create
        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect('/beagendapelatihan');
    }

    // Kalau tidak ketemu, flash error
    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



public function beagendapelatihanupdate($namakegiatan)
{
    $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

// Ambil data user saat ini
$user = Auth::user();

$datakategoripelatihan = kategoripelatihan::all();
$datalsp = User::whereHas('statusadmin', function ($query) {
    $query->where('id', 7);
})->get();

$dataasosiasi = asosiasimasjaki::all();

return view('backend.05_agenda.01_agendapelatihan.update', [
    'title' => 'Update Agenda Pelatihan ',
    'data' => $dataagendapelatihan,
    'kategoriList' => $datakategoripelatihan,
    'lspList' => $datalsp,
    'dataasosiasi' => $dataasosiasi,
    'user' => $user,
]);
}





public function beagendapelatihanupdatecreate(Request $request, $id)
{
    // Validasi data input
    $validatedData = $request->validate([
        'kategoripelatihan_id' => 'required|string',
        'user_id'              => 'required|string',
        'namakegiatan'         => 'required|string|max:255',
        'asosiasimasjaki_id'              => 'required|string',
        // 'penyelenggara'        => 'nullable|string|max:255',
        'waktupelaksanaan'     => 'required|date',
        'penutupan'            => 'required|date|after_or_equal:waktupelaksanaan',
        'jumlahpeserta'        => 'required|string',
        'lokasi'               => 'required|string|max:255',
        'keterangan'           => 'required|string|max:255',
        'isiagenda'            => 'required|string',
        'foto'                 => 'required|image|mimes:jpg,jpeg,png|max:5048',
    ], [
        'kategoripelatihan_id.required' => 'Kategori pelatihan wajib dipilih.',
        'kategoripelatihan_id.exists' => 'Kategori pelatihan yang dipilih tidak valid.',
        'user_id.required' => 'ID pengguna wajib diisi.',
        'user_id.exists' => 'ID pengguna yang dipilih tidak valid.',
        'asosiasimasjaki_id.required' => 'ID pengguna wajib diisi.',
        'asosiasimasjaki_id.exists' => 'ID pengguna yang dipilih tidak valid.',
        'namakegiatan.required' => 'Nama kegiatan wajib diisi.',
        'namakegiatan.string' => 'Nama kegiatan harus berupa teks.',
        'namakegiatan.max' => 'Nama kegiatan maksimal 255 karakter.',
        // 'penyelenggara.string' => 'Penyelenggara harus berupa teks.',
        // 'penyelenggara.max' => 'Penyelenggara maksimal 255 karakter.',
        'waktupelaksanaan.required' => 'Tanggal pelaksanaan wajib diisi.',
        'waktupelaksanaan.date' => 'Tanggal pelaksanaan tidak valid.',
        'penutupan.required' => 'Tanggal penutupan wajib diisi.',
        'penutupan.date' => 'Tanggal penutupan tidak valid.',
        'penutupan.after_or_equal' => 'Tanggal penutupan harus lebih besar atau sama dengan tanggal pelaksanaan.',
        'jumlahpeserta.required' => 'Jumlah peserta harus berupa angka.',
        'jumlahpeserta.min' => 'Jumlah peserta minimal 1 orang.',
        'lokasi.required' => 'Lokasi harus berupa teks.',
        'lokasi.max' => 'Lokasi maksimal 255 karakter.',
        'keterangan.required' => 'Keterangan harus berupa teks.',
        'keterangan.max' => 'Keterangan maksimal 255 karakter.',
        'isiagenda.required' => 'Isi agenda harus berupa teks.',
        'foto.required' => 'File Gambar terbaru belum di upload.',
        'foto.mimes' => 'Foto harus berformat jpg, jpeg, atau png.',
        'foto.max' => 'Ukuran foto maksimal 5MB.',
    ]);
    // Ambil data agenda berdasarkan ID
    $agenda = agendapelatihan::findOrFail($id);

    // Proses file foto jika ada
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('04_datajakon/01_agendapelatihan');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        // Pindahkan file ke folder yang ditentukan
        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke dalam validated data
        $validatedData['foto'] = '04_datajakon/01_agendapelatihan/' . $namaFile;
    }

    // Update data agenda
    $agenda->update([
        'kategoripelatihan_id' => $validatedData['kategoripelatihan_id'] ?? $agenda->kategoripelatihan_id,
        'user_id'              => $validatedData['user_id'] ?? $agenda->user_id,
        'namakegiatan'         => $validatedData['namakegiatan'] ?? $agenda->namakegiatan,
        'asosiasimasjaki_id'              => $validatedData['asosiasimasjaki_id'] ?? $agenda->asosiasimasjaki_id,
        // 'penyelenggara'        => $validatedData['penyelenggara'] ?? $agenda->penyelenggara,
        'waktupelaksanaan'     => $validatedData['waktupelaksanaan'] ?? $agenda->waktupelaksanaan,
        'penutupan'            => $validatedData['penutupan'] ?? $agenda->penutupan,
        'jumlahpeserta'        => $validatedData['jumlahpeserta'] ?? $agenda->jumlahpeserta,
        'lokasi'               => $validatedData['lokasi'] ?? $agenda->lokasi,
        'keterangan'           => $validatedData['keterangan'] ?? $agenda->keterangan,
        'isiagenda'            => $validatedData['isiagenda'] ?? $agenda->isiagenda,
        'foto'                 => $validatedData['foto'] ?? $agenda->foto,
    ]);

    // Flash session dengan pesan sukses
    session()->flash('update', 'Agenda Pelatihan Berhasil Di Update!');

    // Redirect ke halaman agenda pelatihan
    return redirect('/beagendapelatihan');
}


public function beagendapelatihancreate()
{
    $user = Auth::user();

    $datakategoripelatihan = kategoripelatihan::all();
    $datalsp = User::whereHas('statusadmin', function ($query) {
        $query->where('id', 7);
    })->get();
    $dataasosiasi = asosiasimasjaki::all();

    return view('backend.05_agenda.01_agendapelatihan.create', [
        'title' => 'create Agenda Pelatihan ',
        'data' => null, // <<--- penting!
        'kategoriList' => $datakategoripelatihan,
        'lspList' => $datalsp,
        'dataasosiasi' => $dataasosiasi,
        'user' => $user,
    ]);
}


public function beagendapelatihancreatenew(Request $request)
{
    // Validasi data input
    $validatedData = $request->validate([
        'kategoripelatihan_id' => 'required|string',
        'user_id'              => 'required|string',
        'namakegiatan'         => 'required|string|max:255',
        'asosiasimasjaki_id'   => 'required|string',
        'waktupelaksanaan'     => 'required|date',
        'penutupan'            => 'required|date|after_or_equal:waktupelaksanaan',
        'jumlahpeserta'        => 'required|string',
        'lokasi'               => 'required|string|max:255',
        'keterangan'           => 'required|string|max:255',
        'isiagenda'            => 'required|string',
        'foto'                 => 'required|image|mimes:jpg,jpeg,png|max:5048',
    ], [
        'kategoripelatihan_id.required' => 'Kategori pelatihan wajib dipilih.',
        'user_id.required'              => 'LSP Penerbit wajib dipilih.',
        'namakegiatan.required'         => 'Nama kegiatan wajib diisi.',
        'asosiasimasjaki_id.required'   => 'Penyelenggara wajib dipilih.',
        'waktupelaksanaan.required'     => 'Tanggal pelaksanaan wajib diisi.',
        'penutupan.required'            => 'Tanggal penutupan wajib diisi.',
        'penutupan.after_or_equal'      => 'Tanggal penutupan harus setelah atau sama dengan tanggal pelaksanaan.',
        'jumlahpeserta.required'        => 'Jumlah peserta wajib diisi.',
        'lokasi.required'               => 'Lokasi wajib diisi.',
        'keterangan.required'           => 'Keterangan wajib diisi.',
        'isiagenda.required'            => 'Isi agenda wajib diisi.',
        'foto.required'                 => 'Foto kegiatan wajib diunggah.',
        'foto.image'                    => 'File harus berupa gambar atau foto.',
        'foto.mimes'                    => 'Foto harus berformat jpg, jpeg, atau png.',
        'foto.max'                      => 'Ukuran foto maksimal 5MB.',
    ]);

    // Proses file foto
    $file = $request->file('foto');
    $namaFile = time() . '_' . $file->getClientOriginalName();
    $tujuanPath = public_path('04_datajakon/01_agendapelatihan');

    if (!file_exists($tujuanPath)) {
        mkdir($tujuanPath, 0777, true);
    }

    $file->move($tujuanPath, $namaFile);
    $validatedData['foto'] = '04_datajakon/01_agendapelatihan/' . $namaFile;

    // Simpan data baru ke dalam database
    agendapelatihan::create($validatedData);

    // Flash pesan sukses
    session()->flash('create', 'Agenda Pelatihan Berhasil Dibuat!');

    // Redirect ke halaman agenda pelatihan
    return redirect('/beagendapelatihan');
}


// CREATE MATERI BARU AGENDA PELATIHAN
//

public function beagendapelatihanmatericreate($id)
{
    $agendapelatihan = agendapelatihan::findOrFail($id); // Cari 1 data sesuai ID
    $user = Auth::user();
    // $asosiasimasjaki = asosiasimasjaki::all();

    return view('backend.05_agenda.01_agendapelatihan.01_daftarmateri.createklasifikasi', [
        'agendapelatihan' => $agendapelatihan->namakegiatan, // Ini dikirim ke form
        'agendapelatihan_id' => $agendapelatihan->id, // Ini dikirim ke form
        'user' => $user,
        // 'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Tambahkan Materi Pelatihan'
    ]);
}

public function beagendapelatihanmatericreatenew(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'agendapelatihan_id'      => 'required|string',
        'judulmateripelatihan'    => 'required|string|max:255',
        'materipelatihan'         => 'required|file|mimes:pdf|max:20480',
    ], [
        'judulmateripelatihan.required' => 'Judul Materi Pelatihan harus diisi.',
        'materipelatihan.required'         => 'Materi belum di upload !.',
        'materipelatihan.mimes'         => 'File harus berupa PDF.',
        'materipelatihan.max'           => 'Ukuran file maksimal 20MB.',
    ]);

    // Proses upload file PDF jika ada
    if ($request->hasFile('materipelatihan')) {
        $file = $request->file('materipelatihan');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('04_pembinaan/02_materipelatihan');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        $file->move($destinationPath, $fileName);

        $validated['materipelatihan'] = '04_pembinaan/02_materipelatihan/' . $fileName;
    } else {
        $validated['materipelatihan'] = null;
    }

    // Simpan ke database
    $materi = materipelatihan::create($validated);

    // Flash message
    session()->flash('create', 'Materi Pelatihan berhasil ditambahkan!');

    // Redirect ke route dengan parameter 'id' (menggunakan agendapelatihan_id yang baru saja disimpan)
    return redirect()->route('beagendapelatihanmateri', ['id' => $materi->agendapelatihan_id]);
}




// MENU AGENDA SKK

public function beagendaskk(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    // Query awal dengan relasi jumlah peserta
    $query = agendaskk::withCount('allskktenagakerjablora')
                ->orderBy('created_at', 'desc'); // Data terbaru

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('penutupan', 'LIKE', "%{$search}%")
              ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
              ->orWhere('jumlahpeserta', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%")
              ->orWhere('isiagenda', 'LIKE', "%{$search}%")
              ->orWhere('foto', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
            $q->where('namaasosiasi', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.03_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.05_agenda.03_agendaskk.index', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi Kabupaten Blora',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function beagendaskkmateri($id)
{
        $dataagendaskk = agendaskk::where('id', $id)->first();
        // Ambil data user saat ini
        $user = Auth::user();

        if (!$dataagendaskk) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = materipelatihanskk::where('agendaskk_id', $dataagendaskk->id)->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();
    return view('backend.05_agenda.03_agendaskk.01_daftarmateri.index', [
        'title' => 'Daftar Materi Agenda Sertifikasi Tenaga Kerja Konstruksi Kabupaten Blora',
        'data' => $dataagendaskk,
        'subdata' => $subdata,
        'user' => $user,
    ]);
}



public function beagendaskkmateridelete($namakegiatan)
{
// Cari item berdasarkan judul
    $entry = agendaskk::where('namakegiatan', $namakegiatan)->first();

    if ($entry) {
    // Jika ada file header yang terdaftar, hapus dari storage
    // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
    // }

    // Hapus entri dari database
    $entry->delete();

    // Redirect atau memberi respons sesuai kebutuhan
    return redirect('/beagendaskk')->with('delete', 'Data Berhasil Di Hapus !');

    }

return redirect()->back()->with('error', 'Item not found');
}


public function beagendaskkshow($namakegiatan)
{
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // Ambil data user saat ini
        $user = Auth::user();

    return view('backend.05_agenda.03_agendaskk.show', [
        'title' => 'Data Details Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
    ]);
}




public function beagendaskkupdate($namakegiatan)
{
    $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

// Ambil data user saat ini
$user = Auth::user();

$dataasosiasimasjaki = asosiasimasjaki::all();
$datalsp = User::whereHas('statusadmin', function ($query) {
    $query->where('id', 7);
})->get();

return view('backend.05_agenda.03_agendaskk.update', [
    'title' => 'Update Agenda Sertifikasi Tenaga Kerja Konstruksi ',
    'data' => $dataagendaskk,
    'dataasosiasi' => $dataasosiasimasjaki,
    'lspList' => $datalsp,
    'user' => $user,
]);
}





public function beagendaskkupdatecreate(Request $request, $id)
{
    // Validasi data input
    $validatedData = $request->validate([
        'user_id'              => 'required|string',
        'namakegiatan'         => 'required|string|max:255',
        'asosiasimasjaki_id'   => 'required|string',
        'waktupelaksanaan'     => 'required|date',
        'penutupan'            => 'required|date|after_or_equal:waktupelaksanaan',
        'jumlahpeserta'        => 'required|string',
        'lokasi'               => 'required|string|max:255',
        'keterangan'           => 'required|string|max:255',
        'isiagenda'            => 'required|string',
        'foto'                 => 'required|image|mimes:jpg,jpeg,png|max:5048',
    ], [
        'user_id.required' => 'ID pengguna wajib diisi.',
        'user_id.exists' => 'ID pengguna yang dipilih tidak valid.',
        'namakegiatan.required' => 'Nama kegiatan wajib diisi.',
        'namakegiatan.string' => 'Nama kegiatan harus berupa teks.',
        'namakegiatan.max' => 'Nama kegiatan maksimal 255 karakter.',
        'asosiasimasjaki_id.required' => 'ID pengguna wajib diisi.',
        'asosiasimasjaki_id.exists' => 'ID pengguna yang dipilih tidak valid.',
        'waktupelaksanaan.required' => 'Tanggal pelaksanaan wajib diisi.',
        'waktupelaksanaan.date' => 'Tanggal pelaksanaan tidak valid.',
        'penutupan.required' => 'Tanggal penutupan wajib diisi.',
        'penutupan.date' => 'Tanggal penutupan tidak valid.',
        'penutupan.after_or_equal' => 'Tanggal penutupan harus lebih besar atau sama dengan tanggal pelaksanaan.',
        'jumlahpeserta.required' => 'Jumlah peserta harus berupa angka.',
        'jumlahpeserta.min' => 'Jumlah peserta minimal 1 orang.',
        'lokasi.required' => 'Lokasi harus berupa teks.',
        'lokasi.max' => 'Lokasi maksimal 255 karakter.',
        'keterangan.required' => 'Keterangan harus berupa teks.',
        'keterangan.max' => 'Keterangan maksimal 255 karakter.',
        'isiagenda.required' => 'Isi agenda harus berupa teks.',
        'foto.required' => 'File Gambar terbaru belum di upload.',
        'foto.mimes' => 'Foto harus berformat jpg, jpeg, atau png.',
        'foto.max' => 'Ukuran foto maksimal 5MB.',
    ]);
    // Ambil data agenda berdasarkan ID
    $agenda = agendaskk::findOrFail($id);

    // Proses file foto jika ada
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('04_pembinaan/01_kegiatansertifikasi');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        // Pindahkan file ke folder yang ditentukan
        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke dalam validated data
        $validatedData['foto'] = '04_pembinaan/01_kegiatansertifikasi/' . $namaFile;
    }

    // Update data agenda
    $agenda->update([
        'asosiasimasjaki_id'              => $validatedData['asosiasimasjaki_id'] ?? $agenda->asosiasimasjaki_id,
        'user_id'              => $validatedData['user_id'] ?? $agenda->user_id,
        'namakegiatan'         => $validatedData['namakegiatan'] ?? $agenda->namakegiatan,
        'waktupelaksanaan'     => $validatedData['waktupelaksanaan'] ?? $agenda->waktupelaksanaan,
        'penutupan'            => $validatedData['penutupan'] ?? $agenda->penutupan,
        'jumlahpeserta'        => $validatedData['jumlahpeserta'] ?? $agenda->jumlahpeserta,
        'lokasi'               => $validatedData['lokasi'] ?? $agenda->lokasi,
        'keterangan'           => $validatedData['keterangan'] ?? $agenda->keterangan,
        'isiagenda'            => $validatedData['isiagenda'] ?? $agenda->isiagenda,
        'foto'                 => $validatedData['foto'] ?? $agenda->foto,
    ]);

    // Flash session dengan pesan sukses
    session()->flash('update', 'Agenda Sertifikasi Berhasil Di Update!');

    // Redirect ke halaman agenda pelatihan
    return redirect('/beagendaskk');
}


public function beagendaskkcreate()
{
    $user = Auth::user();

    $datalsp = User::whereHas('statusadmin', function ($query) {
        $query->where('id', 7);
    })->get();
    $dataasosiasi = asosiasimasjaki::all();

    return view('backend.05_agenda.03_agendaskk.create', [
        'title' => 'Create Agenda Sertifikasi TKK Kabupaten Blora ',
        'data' => null, // <<--- penting!
        'lspList' => $datalsp,
        'dataasosiasi' => $dataasosiasi,
        'user' => $user,
    ]);
}


public function beagendaskkcreatenew(Request $request)
{
    // Validasi data input
    $validatedData = $request->validate([
        'asosiasimasjaki_id'   => 'required|string',
        'namakegiatan'         => 'required|string|max:255',
        'user_id'              => 'required|string',
        'waktupelaksanaan'     => 'required|date',
        'penutupan'            => 'required|date|after_or_equal:waktupelaksanaan',
        'jumlahpeserta'        => 'required|string',
        'lokasi'               => 'required|string|max:255',
        'keterangan'           => 'required|string|max:255',
        'isiagenda'            => 'required|string',
        'foto'                 => 'required|image|mimes:jpg,jpeg,png|max:5048',
    ], [
        'user_id.required'              => 'LSP Penerbit wajib dipilih.',
        'namakegiatan.required'         => 'Nama kegiatan wajib diisi.',
        'asosiasimasjaki_id.required'   => 'Penyelenggara wajib dipilih.',
        'waktupelaksanaan.required'     => 'Tanggal pelaksanaan wajib diisi.',
        'penutupan.required'            => 'Tanggal penutupan wajib diisi.',
        'penutupan.after_or_equal'      => 'Tanggal penutupan harus setelah atau sama dengan tanggal pelaksanaan.',
        'jumlahpeserta.required'        => 'Jumlah peserta wajib diisi.',
        'lokasi.required'               => 'Lokasi wajib diisi.',
        'keterangan.required'           => 'Keterangan wajib diisi.',
        'isiagenda.required'            => 'Isi agenda wajib diisi.',
        'foto.required'                 => 'Foto kegiatan wajib diunggah.',
        'foto.image'                    => 'File harus berupa gambar atau foto.',
        'foto.mimes'                    => 'Foto harus berformat jpg, jpeg, atau png.',
        'foto.max'                      => 'Ukuran foto maksimal 5MB.',
    ]);

    // Proses file foto
    $file = $request->file('foto');
    $namaFile = time() . '_' . $file->getClientOriginalName();
    $tujuanPath = public_path('04_pembinaan/01_kegiatansertifikasi');

    if (!file_exists($tujuanPath)) {
        mkdir($tujuanPath, 0777, true);
    }

    $file->move($tujuanPath, $namaFile);
    $validatedData['foto'] = '04_pembinaan/01_kegiatansertifikasi/' . $namaFile;

    // Simpan data baru ke dalam database
    agendaskk::create($validatedData);

    // Flash pesan sukses
    session()->flash('create', 'Agenda Sertifikasi Berhasil Dibuat!');

    // Redirect ke halaman agenda pelatihan
    return redirect('/beagendaskk');
}

public function beagendaskkmatericreate($id)
{
    $dataagendaskk = agendaskk::findOrFail($id); // Cari 1 data sesuai ID
    $user = Auth::user();
    // $asosiasimasjaki = asosiasimasjaki::all();

    return view('backend.05_agenda.03_agendaskk.01_daftarmateri.createklasifikasi', [
        'agendaskk' => $dataagendaskk->namakegiatan, // Ini dikirim ke form
        'agendaskk_id' => $dataagendaskk->id, // Ini dikirim ke form
        'user' => $user,
        // 'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Tambahkan Materi Sertifikasi TKK'
    ]);
}





public function beagendaskkmatericreatenew(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'agendaskk_id'      => 'required|string',
        'judulskk'              => 'required|string|max:255',
        'materipelatihanskk'         => 'required|file|mimes:pdf|max:20480',
    ], [
        'judulskk.required' => 'Judul Materi Sertifikasi harus diisi.',
        'materipelatihanskk.required'         => 'Materi Sertifikasi belum di upload !.',
        'materipelatihanskk.mimes'         => 'File harus berupa PDF.',
        'materipelatihanskk.max'           => 'Ukuran file maksimal 20MB.',
    ]);

    // Proses upload file PDF jika ada
    if ($request->hasFile('materipelatihanskk')) {
        $file = $request->file('materipelatihanskk');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('04_pembinaan/02_materisertifikasi');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        $file->move($destinationPath, $fileName);

        $validated['materipelatihanskk'] = '04_pembinaan/02_materisertifikasi/' . $fileName;
    } else {
        $validated['materipelatihanskk'] = null;
    }

    // Simpan ke database
    $materi = materipelatihanskk::create($validated);

    // Flash message
    session()->flash('create', 'Materi Sertifikasi TKK berhasil ditambahkan!');

    // Redirect ke route dengan parameter 'id' (menggunakan agendapelatihan_id yang baru saja disimpan)
    return redirect()->route('beagendaskkmateri', ['id' => $materi->agendaskk_id]);
}


public function beagendaskkmaterideleteskk($id)
{
    $entry = materipelatihanskk::find($id); // Lebih singkat pakai find()

    if ($entry) {
        $agendaskkId = $entry->agendaskk_id;

        // Hapus file jika ada (opsional)
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect('/beagendaskk');
    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}

}


