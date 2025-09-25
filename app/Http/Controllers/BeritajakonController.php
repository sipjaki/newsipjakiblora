<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;

use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\beritajakon;
use App\Models\dokumentasijakon;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BeritajakonController extends Controller
{
    //

    // public function index()
    // {
    //     $user = Auth::user();
    //     $users = user::all();
    //     $databerita = beritajakon::paginate(20);


    //     return view('frontend.02_beritajakon.index', [
    //         'title' => 'Berita Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'users' => $users, // Mengirimkan data paginasi ke view
    //         'data' => $databerita, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index()
{
    $user = Auth::user();
    $users = user::all();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.02_beritajakon.index', [
        'title' => 'Berita Jasa Konstruksi',
        'user' => $user,
        'users' => $users,
        'data' => $databerita,
    ]);
}

    // public function artikeljakon()
    // {
    //     $user = Auth::user();
    //     $dataartikel = artikeljakonmasjaki::paginate(6);

    //     return view('frontend.02_beritajakon.artikeljakon', [
    //         'title' => 'Artikel Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $dataartikel, // Mengirimkan data paginasi ke view
    //     ]);
    // }


    public function artikeljakon()
{
    $user = Auth::user();
    $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->paginate(6);
    // atau kalau pakai id yang selalu naik
    // $dataartikel = artikeljakonmasjaki::orderBy('id', 'desc')->paginate(6);

    return view('frontend.02_beritajakon.artikeljakon', [
        'title' => 'Artikel Jasa Konstruksi',
        'user' => $user,
        'data' => $dataartikel,
    ]);
}

    // public function showjudulberita($judulberita)
    // {
    //     $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    //     $databerita = beritajakon::paginate(20);
    //     $user = Auth::user();

    // return view('frontend.02_beritajakon.showberita', [
    //     'title' => 'Berita Jasa Konstruksi',
    //     'data' => $databeritajakon,
    //     'databerita' => $databerita,
    //     // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
    //     'user' => $user,
    //     // 'start' => $start,
    // ]);
    // }

    public function showjudulberita($judulberita)
{
    $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();

    return view('frontend.02_beritajakon.showberita', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
    ]);
}

    public function artikeljakonshow($judul)
        {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikel = artikeljakonmasjaki::paginate(6);
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
        $perPage = $request->input('perPage', 15);  // Ambil jumlah data per halaman dari request
        $search = $request->input('search');  // Ambil query pencarian dari input

        $query = beritajakon::query();

        if ($search) {
            // Menambahkan kondisi pencarian pada berbagai kolom
            $query->where('judulberita', 'LIKE', "%{$search}%")
                ->orWhere('tanggal', 'LIKE', "%{$search}%")
                // ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhereHas('user', function ($q) use ($search) {
                    $q->where('name', 'LIKE', "%{$search}%");
                });
        }

        // Ambil data yang sesuai dengan pencarian dan pagination
        // $data = $query->paginate($perPage);
        $data = $query->orderBy('created_at', 'desc')  // Mengurutkan berdasarkan created_at (terbaru dulu)
        ->paginate($perPage);

        if ($request->ajax()) {
            // Kembalikan data dalam bentuk JSON untuk AJAX
            return response()->json([
                'html' => view('backend.03_beritajakon.01_beritajakon.partials.table', compact('data'))->render()
            ]);
        }

        // $users = User::all();  // Ambil semua pengguna
        $users = User::where('statusadmin_id', 1)->get();

        return view('backend.03_beritajakon.01_beritajakon.index', [
            'title' => 'Berita Jasa Konstruksi Kabupaten Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'users' => $users
        ]);
    }

    // MENU SHOW BERITA JASA KONSTRUKSI ------------------------------------------------------------------------------------

public function beberitajakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = beritajakon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Data Details Berita Jasa Konstruksi Kabupaten Blora'
    ]);
}


    // MENU UPDATE DAN UPDATE MENU BERITA JASA KONSTRUKSI    ----------------------------------------------------------------------------

public function beberitajakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = beritajakon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Update Berita Jasa Konstruksi'
    ]);
}

// -------------------- UPDATE DATA MENU JABATAN FUNGSIONAL  ----------------------

public function beberitajakoncreateupdate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'user_id' => 'required|exists:users,id',
        'judulberita' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keterangan' => 'required|string',
        'foto' => 'nullable|image|max:15168',
        'foto1' => 'nullable|image|max:15168',
        'foto2' => 'nullable|image|max:15168',
    ], [
        'user_id.required' => 'Penulis harus dipilih!',
        'user_id.exists' => 'Penulis tidak ditemukan!',
        'judulberita.required' => 'Judul berita wajib diisi!',
        'tanggal.required' => 'Tanggal harus diisi!',
        'keterangan.required' => 'Keterangan wajib diisi!',
        'foto.image' => 'Foto harus berupa gambar!',
        'foto1.image' => 'Foto 1 harus berupa gambar!',
        'foto2.image' => 'Foto 2 harus berupa gambar!',
    ]);

    // Cari data berdasarkan ID
    $databeritajakon = beritajakon::where('id', $id)->firstOrFail();

    // Persiapkan data update
    $updateData = [
        'user_id' => $validatedData['user_id'] ?? $databeritajakon->user_id,
        'judulberita' => $validatedData['judulberita'] ?? $databeritajakon->judulberita,
        'tanggal' => $validatedData['tanggal'] ?? $databeritajakon->tanggal,
        'keterangan' => $validatedData['keterangan'] ?? $databeritajakon->keterangan,
    ];

    // Fungsi untuk menyimpan file langsung ke folder public
    $saveToPublic = function ($file, $pathFolder) {
        $path = public_path($pathFolder);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);
        return $pathFolder . '/' . $filename;
    };

    // Simpan foto jika ada
    if ($request->hasFile('foto')) {
        $updateData['foto'] = $saveToPublic($request->file('foto'), '02_berita/01_berita/01_foto1');
    }

    if ($request->hasFile('foto1')) {
        $updateData['foto1'] = $saveToPublic($request->file('foto1'), '02_berita/01_berita/02_foto2');
    }

    if ($request->hasFile('foto2')) {
        $updateData['foto2'] = $saveToPublic($request->file('foto2'), '02_berita/01_berita/03_foto2');
    }

    // Update data ke database
    $databeritajakon->update($updateData);

    // Pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    return redirect('/beberitajakon');
}


// MENU CREATE BERITA JAKON      ----------------------------------------------------------------------------

public function beberitajakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Create Berita Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function beberitajakoncreatenew(Request $request)
{
    // Cek apakah user login adalah super_admin (statusadmin_id = 1)
    $user_id = Auth::user()->statusadmin->id == 1 ? Auth::user()->id : null;

    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judulberita' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keterangan' => 'required|string',
        'foto' => 'required|image|max:17168',
        'foto1' => 'required|image|max:17168',
        'foto2' => 'required|image|max:17168',
    ], [
        'judulberita.required' => 'Judul berita wajib diisi!',
        'judulberita.string' => 'Judul berita harus berupa teks!',
        'judulberita.max' => 'Judul berita tidak boleh lebih dari 255 karakter!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid!',
        'keterangan.required' => 'Keterangan wajib diisi!',
        'keterangan.string' => 'Keterangan harus berupa teks!',
        'foto.required' => 'Foto wajib diisi!',
        'foto.image' => 'Foto harus berupa gambar!',
        'foto.max' => 'Foto maksimal 17MB!',
        'foto1.required' => 'Foto 1 wajib diisi!',
        'foto1.image' => 'Foto 1 harus berupa gambar!',
        'foto1.max' => 'Foto 1 maksimal 17MB!',
        'foto2.required' => 'Foto 2 wajib diisi!',
        'foto2.image' => 'Foto 2 harus berupa gambar!',
        'foto2.max' => 'Foto 2 maksimal 17MB!',
    ]);

    // Fungsi menyimpan file ke public
    $saveToPublic = function ($file, $folder) {
        $path = public_path($folder);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);
        return $folder . '/' . $filename;
    };

    // Simpan file langsung ke public
    $foto = $saveToPublic($request->file('foto'), '02_berita/01_berita/01_foto1');
    $foto1 = $saveToPublic($request->file('foto1'), '02_berita/01_berita/02_foto2');
    $foto2 = $saveToPublic($request->file('foto2'), '02_berita/01_berita/03_foto2');

    // Simpan ke database
    beritajakon::create([
        'user_id' => $user_id,
        'judulberita' => $validatedData['judulberita'],
        'tanggal' => $validatedData['tanggal'],
        'keterangan' => $validatedData['keterangan'],
        'foto' => $foto,
        'foto1' => $foto1,
        'foto2' => $foto2,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/beberitajakon');
}



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

        public function beartikeljakon(Request $request)
                {
                    $perPage = $request->input('perPage', 15);
                    $search = $request->input('search');

                    $query = artikeljakonmasjaki::query();

                    if ($search) {
                        $query->where('judul', 'LIKE', "%{$search}%")
                            ->orWhere('tanggal', 'LIKE', "%{$search}%")
                            // ->orWhere('keterangan', 'LIKE', "%{$search}%")
                            ->orWhereHas('user', function ($q) use ($search) {
                                $q->where('name', 'LIKE', "%{$search}%");
                            });
                    }

                    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

                    if ($request->ajax()) {
                        return response()->json([
                            'html' => view('backend.03_beritajakon.02_artikeljakon.partials.table', compact('data'))->render()
                        ]);
                    }

                    return view('backend.03_beritajakon.02_artikeljakon.index', [
                        'title' => 'Artikel Jasa Konstruksi',
                        'data' => $data,
                        'perPage' => $perPage,
                        'search' => $search
                    ]);
                }


                    // MENU SHOW ARTIKEL JASA KONSTRUKSI ------------------------------------------------------------------------------------

public function beartikeljakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Data Details Artikel Jasa Konstruksi Kabupaten Blora'
    ]);
}


    // MENU UPDATE DAN UPDATE MENU ARTIKLE JASA KONSTRUKSI    ----------------------------------------------------------------------------

public function beartikeljakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Update Artikel Jasa Konstruksi'
    ]);
}

// -------------------- UPDATE DATA MENU ARTIKLE JASA KONSTRUKSI  ----------------------

public function beartikeljakoncreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'user_id' => 'required|exists:users,id',
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keterangan' => 'required|string',
        'foto1' => 'nullable|image|max:7168',
        'foto2' => 'nullable|image|max:7168',
        'foto3' => 'nullable|image|max:7168',
   'berkas' => 'required|file|mimes:pdf',
 ], [
        'user_id.required' => 'Penulis harus dipilih!',
        'user_id.exists' => 'Penulis tidak ditemukan!',
        'judul.required' => 'Judul berita wajib diisi!',
        'tanggal.required' => 'Tanggal harus diisi!',
        'keterangan.required' => 'Keterangan wajib diisi!',
        'foto1.image' => 'Foto/Brosur 1 harus berupa gambar!',
        'foto2.image' => 'Foto/Brosur 2 harus berupa gambar!',
        'foto3.image' => 'Foto/Brosur 3 harus berupa gambar!',
        'berkas.required' => 'Berkas wajib diisi!',
    ]);

    // Cari data berdasarkan ID
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();

    // Persiapkan data update
    $updateData = [
        'user_id' => $validatedData['user_id'],
        'judul' => $validatedData['judul'],
        'tanggal' => $validatedData['tanggal'],
        'keterangan' => $validatedData['keterangan'],
    ];

    // Fungsi penyimpanan langsung ke folder public
    $saveToPublic = function ($file, $folderPath) {
        $destination = public_path($folderPath);
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0777, true, true);
        }
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $fileName);
        return $folderPath . '/' . $fileName;
    };

    // Simpan gambar jika ada
    if ($request->hasFile('foto1')) {
        $updateData['foto1'] = $saveToPublic($request->file('foto1'), '02_berita/02_artikel/01_foto1');
    }

    if ($request->hasFile('foto2')) {
        $updateData['foto2'] = $saveToPublic($request->file('foto2'), '02_berita/02_artikel/02_foto2');
    }

    if ($request->hasFile('foto3')) {
        $updateData['foto3'] = $saveToPublic($request->file('foto3'), '02_berita/02_artikel/03_foto3');
    }

    if ($request->hasFile('berkas')) {
        $updateData['berkas'] = $saveToPublic($request->file('berkas'), '02_berita/02_artikel/04_berkas01');
    }

    // Simpan perubahan ke database
    $databeritajakon->update($updateData);

    // Flash message
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect
    return redirect('/beartikeljakon');
}


// MENU CREATE ARTIKEL JAKON     ----------------------------------------------------------------------------

public function beartikeljakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Create Artikel Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function beartikeljakoncreatenew(Request $request)
{
    // Pastikan user yang sedang login adalah super_admin (id = 1)
    $user_id = Auth::user()->statusadmin->id == 1 ? Auth::user()->id : null;

    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keterangan' => 'required|string',
        'foto1' => 'required|image|max:7168',
        'foto2' => 'required|image|max:7168',
        'foto3' => 'required|image|max:7168',
        'berkas' => 'required|mimes:pdf|max:8192',
    ], [
        'judul.required' => 'Judul berita wajib diisi!',
        'judul.string' => 'Judul berita harus berupa teks!',
        'judul.max' => 'Judul berita tidak boleh lebih dari 255 karakter!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid!',
        'keterangan.required' => 'Keterangan wajib diisi!',
        'keterangan.string' => 'Keterangan harus berupa teks!',
        'berkas.required' => 'Berkas wajib diisi!',
        'foto1.required' => 'Foto/Brosur 1 wajib diisi!',
        'foto1.image' => 'Foto/Brosur 1 harus berupa gambar!',
        'foto1.max' => 'Foto/Brosur 1 maksimal 7MB!',
        'foto2.required' => 'Foto/Brosur 2 wajib diisi!',
        'foto2.image' => 'Foto/Brosur 2 harus berupa gambar!',
        'foto2.max' => 'Foto/Brosur 2 maksimal 7MB!',
        'foto3.required' => 'Foto/Brosur 3 wajib diisi!',
        'foto3.image' => 'Foto/Brosur 3 harus berupa gambar!',
        'foto3.max' => 'Foto/Brosur 3 maksimal 7MB!',
    ]);

    // Function kecil untuk menyimpan file ke public/
    $saveToPublic = function($file, $path) {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path($path), $filename);
        return $path . '/' . $filename;
    };

    // Simpan gambar dan berkas ke public/
    $foto1 = $saveToPublic($request->file('foto1'), '02_berita/02_artikel/01_foto1');
    $foto2 = $saveToPublic($request->file('foto2'), '02_berita/02_artikel/02_foto2');
    $foto3 = $saveToPublic($request->file('foto3'), '02_berita/02_artikel/03_foto3');
    $berkas = $saveToPublic($request->file('berkas'), '02_berita/02_artikel/04_berkas01');

    // Membuat data baru di tabel beritajakon
    artikeljakonmasjaki::create([
        'user_id' => $user_id,
        'judul' => $validatedData['judul'],
        'tanggal' => $validatedData['tanggal'],
        'keterangan' => $validatedData['keterangan'],
        'foto1' => $foto1,
        'foto2' => $foto2,
        'foto3' => $foto3,
        'berkas' => $berkas,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/beartikeljakon');
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



    // ================================================================= MENU FRONTEND ANDROID =================================================================


    // public function androidberita()
    // {
    //     $user = Auth::user();
    //     $databerita = beritajakon::paginate(20);

    //     return view('frontend.00_android.01_berita.index', [
    //         'title' => 'Berita Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $databerita, // Mengirimkan data paginasi ke view
    //     ]);
    // }

public function androidberita()
{
    $user = Auth::user();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.00_android.01_berita.index', [
        'title' => 'Berita Jasa Konstruksi',
        'user' => $user,
        'data' => $databerita,
    ]);
}
    // public function androidberitashow($judulberita)
    // {
    //     $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    //     $databerita = beritajakon::paginate(20);
    //     $user = Auth::user();
    //     $users = user::all();

    //     return view('frontend.00_android.01_berita.show', [
    //     'title' => 'Berita Jasa Konstruksi',
    //     'data' => $databeritajakon,
    //     'databerita' => $databerita,
    //     // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
    //     'user' => $user,
    //     'users' => $users,
    //     // 'start' => $start,
    // ]);
    // }

    public function androidberitashow($judulberita)
{
    $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();
    $users = user::all();

    return view('frontend.00_android.01_berita.show', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
        'users' => $users,
    ]);
}


    public function androidartikeljakon()
    {
        $user = Auth::user();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        return view('frontend.00_android.01_artikeljakon.index', [
            'title' => 'Artikel Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $dataartikel, // Mengirimkan data paginasi ke view
        ]);
    }

    public function androidartikeljakonshow($judul)
    {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikeljakons = artikeljakonmasjaki::paginate(6);
        $user = Auth::user();
        $users = user::all();

        return view('frontend.00_android.01_artikeljakon.show', [
        'title' => 'Artikel Jasa Konstruksi',
        'data' => $dataartikeljakon,
        'dataartikeljakon' => $dataartikeljakons,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'users' => $users,
        // 'start' => $start,
    ]);
    }


    public function bedokumentasijakon(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = dokumentasijakon::query();

    if ($search) {
        $query->where('judul', 'LIKE', "%{$search}%");
        // Jika nanti ada kolom lain, bisa ditambahkan di sini
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.03_beritajakon.03_dokumentasijakon.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.03_beritajakon.03_dokumentasijakon.index', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function bedokumentasijakoncreateupdate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'fotokegiatan1' => 'nullable|image|max:20480',
        'fotokegiatan2' => 'nullable|image|max:20480',
        'fotokegiatan3' => 'nullable|image|max:20480',
        'fotokegiatan4' => 'nullable|image|max:20480',
        'fotokegiatan5' => 'nullable|image|max:20480',
        'fotokegiatan6' => 'nullable|image|max:20480',
        'fotokegiatan7' => 'nullable|image|max:20480',
        'fotokegiatan8' => 'nullable|image|max:20480',
        'fotokegiatan9' => 'nullable|image|max:20480',
        'fotokegiatan10' => 'nullable|image|max:20480',
        'fotokegiatan11' => 'nullable|image|max:20480',
        'fotokegiatan12' => 'nullable|image|max:20480',
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'fotokegiatan1.image' => 'Foto kegiatan 1 harus berupa gambar!',
        'fotokegiatan2.image' => 'Foto kegiatan 2 harus berupa gambar!',
        'fotokegiatan3.image' => 'Foto kegiatan 3 harus berupa gambar!',
        'fotokegiatan4.image' => 'Foto kegiatan 4 harus berupa gambar!',
        'fotokegiatan5.image' => 'Foto kegiatan 5 harus berupa gambar!',
        'fotokegiatan6.image' => 'Foto kegiatan 6 harus berupa gambar!',
        'fotokegiatan7.image' => 'Foto kegiatan 7 harus berupa gambar!',
        'fotokegiatan8.image' => 'Foto kegiatan 8 harus berupa gambar!',
        'fotokegiatan9.image' => 'Foto kegiatan 9 harus berupa gambar!',
        'fotokegiatan10.image' => 'Foto kegiatan 10 harus berupa gambar!',
        'fotokegiatan11.image' => 'Foto kegiatan 11 harus berupa gambar!',
        'fotokegiatan12.image' => 'Foto kegiatan 12 harus berupa gambar!',
    ]);

    // Cari data berdasarkan ID
    $dokumentasi = dokumentasijakon::findOrFail($id);

    // Data update
    $updateData = [
        'judul' => $validatedData['judul'],
    ];

    // Fungsi simpan ke folder public
    $saveToPublic = function ($file, $folderPath) {
        $destination = public_path($folderPath);
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0777, true, true);
        }
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $fileName);
        return $folderPath . '/' . $fileName;
    };

    // Simpan foto satu per satu
    if ($request->hasFile('fotokegiatan1')) {
        $updateData['fotokegiatan1'] = $saveToPublic($request->file('fotokegiatan1'), 'dokumentasijakon/foto1');
    }
    if ($request->hasFile('fotokegiatan2')) {
        $updateData['fotokegiatan2'] = $saveToPublic($request->file('fotokegiatan2'), 'dokumentasijakon/foto2');
    }
    if ($request->hasFile('fotokegiatan3')) {
        $updateData['fotokegiatan3'] = $saveToPublic($request->file('fotokegiatan3'), 'dokumentasijakon/foto3');
    }
    if ($request->hasFile('fotokegiatan4')) {
        $updateData['fotokegiatan4'] = $saveToPublic($request->file('fotokegiatan4'), 'dokumentasijakon/foto4');
    }
    if ($request->hasFile('fotokegiatan5')) {
        $updateData['fotokegiatan5'] = $saveToPublic($request->file('fotokegiatan5'), 'dokumentasijakon/foto5');
    }
    if ($request->hasFile('fotokegiatan6')) {
        $updateData['fotokegiatan6'] = $saveToPublic($request->file('fotokegiatan6'), 'dokumentasijakon/foto6');
    }
    if ($request->hasFile('fotokegiatan7')) {
        $updateData['fotokegiatan7'] = $saveToPublic($request->file('fotokegiatan7'), 'dokumentasijakon/foto7');
    }
    if ($request->hasFile('fotokegiatan8')) {
        $updateData['fotokegiatan8'] = $saveToPublic($request->file('fotokegiatan8'), 'dokumentasijakon/foto8');
    }
    if ($request->hasFile('fotokegiatan9')) {
        $updateData['fotokegiatan9'] = $saveToPublic($request->file('fotokegiatan9'), 'dokumentasijakon/foto9');
    }
    if ($request->hasFile('fotokegiatan10')) {
        $updateData['fotokegiatan10'] = $saveToPublic($request->file('fotokegiatan10'), 'dokumentasijakon/foto10');
    }
    if ($request->hasFile('fotokegiatan11')) {
        $updateData['fotokegiatan11'] = $saveToPublic($request->file('fotokegiatan11'), 'dokumentasijakon/foto11');
    }
    if ($request->hasFile('fotokegiatan12')) {
        $updateData['fotokegiatan12'] = $saveToPublic($request->file('fotokegiatan12'), 'dokumentasijakon/foto12');
    }

    // Update database
    $dokumentasi->update($updateData);

    // Flash message
    session()->flash('update', 'Data Dokumentasi Berhasil Diupdate!');

    // Redirect
    return redirect('/bedokumentasijakon');
}


public function bedokumentasijakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Buat Dokumentasi Kegiatan Jakon Kab Blora'
    ]);
}

public function bedokumentasijakoncreatenew(Request $request)
{
    // Validasi
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'fotokegiatan1' => 'nullable|image|max:15168',
        'fotokegiatan2' => 'nullable|image|max:15168',
        'fotokegiatan3' => 'nullable|image|max:15168',
        'fotokegiatan4' => 'nullable|image|max:15168',
        'fotokegiatan5' => 'nullable|image|max:15168',
        'fotokegiatan6' => 'nullable|image|max:15168',
        'fotokegiatan7' => 'nullable|image|max:15168',
        'fotokegiatan8' => 'nullable|image|max:15168',
        'fotokegiatan9' => 'nullable|image|max:15168',
        'fotokegiatan10' => 'nullable|image|max:15168',
        'fotokegiatan11' => 'nullable|image|max:15168',
        'fotokegiatan12' => 'nullable|image|max:15168',
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'judul.max' => 'Judul maksimal 255 karakter!',
        'fotokegiatan1.image' => 'Foto Kegiatan 1 harus berupa gambar!',
        'fotokegiatan1.max' => 'Foto Kegiatan 1 maksimal 15 MB!',
        // (Kalau mau bikin pesan custom sampai foto12 tinggal duplikat aja bro)
    ]);

    // Function simpan ke folder public/dokumentasijakon/fotoX
    $saveToPublic = function ($file, $folder) {
        if (!$file) return null;
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path($folder), $filename);
        return $folder . '/' . $filename;
    };

    // Simpan satu-satu (tanpa loop)
    $fotokegiatan1 = $saveToPublic($request->file('fotokegiatan1'), 'dokumentasijakon/foto1');
    $fotokegiatan2 = $saveToPublic($request->file('fotokegiatan2'), 'dokumentasijakon/foto2');
    $fotokegiatan3 = $saveToPublic($request->file('fotokegiatan3'), 'dokumentasijakon/foto3');
    $fotokegiatan4 = $saveToPublic($request->file('fotokegiatan4'), 'dokumentasijakon/foto4');
    $fotokegiatan5 = $saveToPublic($request->file('fotokegiatan5'), 'dokumentasijakon/foto5');
    $fotokegiatan6 = $saveToPublic($request->file('fotokegiatan6'), 'dokumentasijakon/foto6');
    $fotokegiatan7 = $saveToPublic($request->file('fotokegiatan7'), 'dokumentasijakon/foto7');
    $fotokegiatan8 = $saveToPublic($request->file('fotokegiatan8'), 'dokumentasijakon/foto8');
    $fotokegiatan9 = $saveToPublic($request->file('fotokegiatan9'), 'dokumentasijakon/foto9');
    $fotokegiatan10 = $saveToPublic($request->file('fotokegiatan10'), 'dokumentasijakon/foto10');
    $fotokegiatan11 = $saveToPublic($request->file('fotokegiatan11'), 'dokumentasijakon/foto11');
    $fotokegiatan12 = $saveToPublic($request->file('fotokegiatan12'), 'dokumentasijakon/foto12');

    // Simpan ke database
    dokumentasijakon::create([
        'judul' => $validatedData['judul'],
        'fotokegiatan1' => $fotokegiatan1,
        'fotokegiatan2' => $fotokegiatan2,
        'fotokegiatan3' => $fotokegiatan3,
        'fotokegiatan4' => $fotokegiatan4,
        'fotokegiatan5' => $fotokegiatan5,
        'fotokegiatan6' => $fotokegiatan6,
        'fotokegiatan7' => $fotokegiatan7,
        'fotokegiatan8' => $fotokegiatan8,
        'fotokegiatan9' => $fotokegiatan9,
        'fotokegiatan10' => $fotokegiatan10,
        'fotokegiatan11' => $fotokegiatan11,
        'fotokegiatan12' => $fotokegiatan12,
    ]);

    session()->flash('create', 'Kegiatan Dokumentasi Berhasil Disimpan!');
    return redirect('/bedokumentasijakon');

}


       public function bedokumentasijakondelete($judul)
{
    // Cari item berdasarkan judul
    $entry = dokumentasijakon::where('judul', $judul)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/bedokumentasijakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }


    public function bedokumentasijakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = dokumentasijakon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Data Informasi Dokumentasi Kegiatan Konstruksi'
    ]);
}


public function bedokumentasijakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = dokumentasijakon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    // $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        // 'users' => $users,
        'title' => 'Update Dokumentasi Kegiatan Jasa Konstruksi'
    ]);
}


public function bedokumentasijakoncreaupdate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'fotokegiatan1' => 'nullable|image|max:20168',
        'fotokegiatan2' => 'nullable|image|max:20168',
        'fotokegiatan3' => 'nullable|image|max:20168',
        'fotokegiatan4' => 'nullable|image|max:20168',
        'fotokegiatan5' => 'nullable|image|max:20168',
        'fotokegiatan6' => 'nullable|image|max:20168',
        'fotokegiatan7' => 'nullable|image|max:20168',
        'fotokegiatan8' => 'nullable|image|max:20168',
        'fotokegiatan9' => 'nullable|image|max:20168',
        'fotokegiatan10' => 'nullable|image|max:20168',
        'fotokegiatan11' => 'nullable|image|max:20168',
        'fotokegiatan12' => 'nullable|image|max:20168',
    ], [
        'judul.required' => 'Judul dokumentasi wajib diisi!',
        'fotokegiatan1.image' => 'Foto Kegiatan 1 harus berupa gambar!',
        'fotokegiatan2.image' => 'Foto Kegiatan 2 harus berupa gambar!',
        'fotokegiatan3.image' => 'Foto Kegiatan 3 harus berupa gambar!',
        'fotokegiatan4.image' => 'Foto Kegiatan 4 harus berupa gambar!',
        'fotokegiatan5.image' => 'Foto Kegiatan 5 harus berupa gambar!',
        'fotokegiatan6.image' => 'Foto Kegiatan 6 harus berupa gambar!',
        'fotokegiatan7.image' => 'Foto Kegiatan 7 harus berupa gambar!',
        'fotokegiatan8.image' => 'Foto Kegiatan 8 harus berupa gambar!',
        'fotokegiatan9.image' => 'Foto Kegiatan 9 harus berupa gambar!',
        'fotokegiatan10.image' => 'Foto Kegiatan 10 harus berupa gambar!',
        'fotokegiatan11.image' => 'Foto Kegiatan 11 harus berupa gambar!',
        'fotokegiatan12.image' => 'Foto Kegiatan 12 harus berupa gambar!',
    ]);

    // Cari data
    $dokumentasi = dokumentasijakon::findOrFail($id);

    // Helper simpan file
    $saveToPublic = function ($file, $folder) {
        if (!$file) return null;
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path($folder), $filename);
        return $folder . '/' . $filename;
    };

    // Upload satu-satu (tanpa loop)
    $fotokegiatan1  = $saveToPublic($request->file('fotokegiatan1'), 'dokumentasijakon/foto1');
    $fotokegiatan2  = $saveToPublic($request->file('fotokegiatan2'), 'dokumentasijakon/foto2');
    $fotokegiatan3  = $saveToPublic($request->file('fotokegiatan3'), 'dokumentasijakon/foto3');
    $fotokegiatan4  = $saveToPublic($request->file('fotokegiatan4'), 'dokumentasijakon/foto4');
    $fotokegiatan5  = $saveToPublic($request->file('fotokegiatan5'), 'dokumentasijakon/foto5');
    $fotokegiatan6  = $saveToPublic($request->file('fotokegiatan6'), 'dokumentasijakon/foto6');
    $fotokegiatan7  = $saveToPublic($request->file('fotokegiatan7'), 'dokumentasijakon/foto7');
    $fotokegiatan8  = $saveToPublic($request->file('fotokegiatan8'), 'dokumentasijakon/foto8');
    $fotokegiatan9  = $saveToPublic($request->file('fotokegiatan9'), 'dokumentasijakon/foto9');
    $fotokegiatan10 = $saveToPublic($request->file('fotokegiatan10'), 'dokumentasijakon/foto10');
    $fotokegiatan11 = $saveToPublic($request->file('fotokegiatan11'), 'dokumentasijakon/foto11');
    $fotokegiatan12 = $saveToPublic($request->file('fotokegiatan12'), 'dokumentasijakon/foto12');

    // Data yang diupdate
    $updateData = [
        'judul' => $validatedData['judul'],
    ];

    if ($fotokegiatan1)  $updateData['fotokegiatan1']  = $fotokegiatan1;
    if ($fotokegiatan2)  $updateData['fotokegiatan2']  = $fotokegiatan2;
    if ($fotokegiatan3)  $updateData['fotokegiatan3']  = $fotokegiatan3;
    if ($fotokegiatan4)  $updateData['fotokegiatan4']  = $fotokegiatan4;
    if ($fotokegiatan5)  $updateData['fotokegiatan5']  = $fotokegiatan5;
    if ($fotokegiatan6)  $updateData['fotokegiatan6']  = $fotokegiatan6;
    if ($fotokegiatan7)  $updateData['fotokegiatan7']  = $fotokegiatan7;
    if ($fotokegiatan8)  $updateData['fotokegiatan8']  = $fotokegiatan8;
    if ($fotokegiatan9)  $updateData['fotokegiatan9']  = $fotokegiatan9;
    if ($fotokegiatan10) $updateData['fotokegiatan10'] = $fotokegiatan10;
    if ($fotokegiatan11) $updateData['fotokegiatan11'] = $fotokegiatan11;
    if ($fotokegiatan12) $updateData['fotokegiatan12'] = $fotokegiatan12;

    // Update ke DB
    $dokumentasi->update($updateData);

    // Flash message
session()->flash('update', 'Dokumentasi berhasil diperbarui!');

// Redirect ke route update dengan id
return redirect()->route('bedokumentasijakon.update', ['id' => $id]);

}
// DATA KEGIATAN KONSTRUKSI JASA KONSTRUKSI KABUPATEN BLORA


public function resdokumentasi()
{
    $user = Auth::user();
    $databerita = dokumentasijakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.02_dokumentasijakon.index', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'user' => $user,
        'data' => $databerita,
    ]);
}


public function resdokumentasishow($id)
{
    $databeritajakon = dokumentasijakon::where('id', $id)->first();
    $databerita = dokumentasijakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();
    $users = user::all();

    return view('frontend.02_dokumentasijakon.show', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
        'users' => $users,
    ]);
}

}






