<?php

namespace App\Http\Controllers;

use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\beritajakon;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BeritajakonController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $databerita = beritajakon::paginate(6);


        return view('frontend.02_beritajakon.index', [
            'title' => 'Berita Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function artikeljakon()
    {
        $user = Auth::user();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        return view('frontend.02_beritajakon.artikeljakon', [
            'title' => 'Artikel Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $dataartikel, // Mengirimkan data paginasi ke view
        ]);
    }

//     public function asosiasimasjaki(Request $request)
//     {

//         $databujkkontraktor = bujkkontraktor::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $databujkkonsultan = bujkkonsultan::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $perPage = $request->input('perPage', 10);
//         $search = $request->input('search');

//         $user = Auth::user();
//         // $data = asosiasimasjaki::paginate(15);

//         $query = bujkkonsultan::query();
//         $query = bujkkontraktor::query();

//         if ($search) {
//             $query->where('namaasosiasi', 'LIKE', "%{$search}%");
//                 //   ->orWhere('alamat', 'LIKE', "%{$search}%")
//                 //   ->orWhere('email', 'LIKE', "%{$search}%")
//                 //   ->orWhere('nib', 'LIKE', "%{$search}%");
//         }

//         $data = $query->paginate($perPage);

//         if ($request->ajax()) {
//             return response()->json([
//                 'html' => view('frontend.03_masjaki_jakon.05_asosiasimasjaki.partials.table', compact('data'))->render()
//             ]);
//         }

//         return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
//             'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
//             'user' => $user, // Mengirimkan data paginasi ke view
//             'data' => $data, // Mengirimkan data paginasi ke view
//             'perPage' => $perPage,
//             'search' => $search,
//             'databujkkontraktor' => $databujkkontraktor,
//             'databujkkonsultan' => $databujkkonsultan,
//         ]);
//     }


//     public function bujkkontraktor(Request $request)
// {
//     $perPage = $request->input('perPage', 10);
//     $search = $request->input('search');

//     $query = bujkkontraktor::query();

//     if ($search) {
//         $query->where('namalengkap', 'LIKE', "%{$search}%")
//               ->orWhere('alamat', 'LIKE', "%{$search}%")
//               ->orWhere('email', 'LIKE', "%{$search}%")
//               ->orWhere('nib', 'LIKE', "%{$search}%");
//     }

//     $data = $query->paginate($perPage);

//     if ($request->ajax()) {
//         return response()->json([
//             'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
//         ]);
//     }

//     return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
//         'title' => 'BUJK Konstruksi',
//         'data' => $data,
//         'perPage' => $perPage,
//         'search' => $search
//     ]);
// }

    public function showjudulberita($judulberita)
    {
        $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
        $databerita = beritajakon::paginate(6);

        // if (!$databeritajakon) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.02_beritajakon.showberita', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

    public function artikeljakonshow($judul)
        {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        // if (!$databeritajakon) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
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
        $perPage = $request->input('perPage', 5);  // Ambil jumlah data per halaman dari request
        $search = $request->input('search');  // Ambil query pencarian dari input

        $query = beritajakon::query();

        if ($search) {
            // Menambahkan kondisi pencarian pada berbagai kolom
            $query->where('judulberita', 'LIKE', "%{$search}%")
                ->orWhere('tanggal', 'LIKE', "%{$search}%")
                ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhere('foto', 'LIKE', "%{$search}%")
                ->orWhere('foto1', 'LIKE', "%{$search}%")
                ->orWhere('foto2', 'LIKE', "%{$search}%")
                ->orWhereHas('users', function ($q) use ($search) {
                    $q->where('name', 'LIKE', "%{$search}%");
                });
        }

        // Ambil data yang sesuai dengan pencarian dan pagination
        $data = $query->paginate($perPage);

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
                // Validasi input dengan pesan kustom
               // Validasi input dengan pesan kustom
                    $validatedData = $request->validate([
                        'user_id' => 'required|exists:users,id',  // Pastikan user_id harus ada
                        'judulberita' => 'required|string|max:255',  // Judul wajib diisi
                        'tanggal' => 'required|date',  // Tanggal wajib diisi
                        'keterangan' => 'required|string',  // Keterangan wajib diisi
                        'foto' => 'nullable|image|max:7168', // Foto tetap bisa null tapi jika ada harus image
                        'foto1' => 'nullable|image|max:7168',
                        'foto2' => 'nullable|image|max:7168',
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
                    'user_id' => $validatedData['user_id'] ?? $databeritajakon->user_id, // Jika user_id tidak ada, gunakan data sebelumnya
                    'judulberita' => $validatedData['judulberita'] ?? $databeritajakon->judulberita, // Jika judulberita tidak ada, gunakan data sebelumnya
                    'tanggal' => $validatedData['tanggal'] ?? $databeritajakon->tanggal, // Jika tanggal tidak ada, gunakan data sebelumnya
                    'keterangan' => $validatedData['keterangan'] ?? $databeritajakon->keterangan, // Jika keterangan tidak ada, gunakan data sebelumnya
                ];

                // Memeriksa apakah foto, foto1, dan foto2 ada dalam request dan jika ada di-upload
                if ($request->hasFile('foto')) {
                    $updateData['foto'] = $request->file('foto')->store('02_beritajakon/berita', 'public'); // Menyimpan foto dan mengambil path-nya
                }

                if ($request->hasFile('foto1')) {
                    $updateData['foto1'] = $request->file('foto1')->store('02_beritajakon/berita', 'public'); // Menyimpan foto1 dan mengambil path-nya
                }

                if ($request->hasFile('foto2')) {
                    $updateData['foto2'] = $request->file('foto2')->store('02_beritajakon/berita', 'public'); // Menyimpan foto2 dan mengambil path-nya
                }

                // Update data berita berdasarkan data yang sudah tervalidasi
                $databeritajakon->update($updateData);

                // Flash session untuk menampilkan pesan sukses
                session()->flash('update', 'Data Berhasil Diupdate!');

                // Redirect ke halaman yang sesuai
                return redirect('/beberitajakon');
            }

// MENU CREATE JABATAN FUNGSIONAL     ----------------------------------------------------------------------------

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
        'title' => 'Create Jabatan Fungsional Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function beberitajakoncreatenew(Request $request)
{
    // Pastikan user yang sedang login adalah super_admin (id = 1)
    $user_id = Auth::user()->statusadmin->id == 1 ? Auth::user()->id : null;

    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judulberita' => 'required|string|max:255', // judulberita wajib diisi, harus string, dan panjangnya maksimal 255 karakter
        'tanggal' => 'required|date', // tanggal wajib diisi dan harus dalam format tanggal
        'keterangan' => 'required|string', // keterangan wajib diisi dan harus berupa string
        'foto' => 'required|image|max:7168', // foto wajib diisi, harus image dan maksimal 7MB (7168KB)
        'foto1' => 'required|image|max:7168', // foto1 wajib diisi, harus image dan maksimal 7MB (7168KB)
        'foto2' => 'required|image|max:7168', // foto2 wajib diisi, harus image dan maksimal 7MB (7168KB)
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
        'foto.max' => 'Foto maksimal 7MB!',
        'foto1.required' => 'Foto 1 wajib diisi!',
        'foto1.image' => 'Foto 1 harus berupa gambar!',
        'foto1.max' => 'Foto 1 maksimal 7MB!',
        'foto2.required' => 'Foto 2 wajib diisi!',
        'foto2.image' => 'Foto 2 harus berupa gambar!',
        'foto2.max' => 'Foto 2 maksimal 7MB!',
    ]);

    // Menyimpan file gambar jika ada
    $foto = $request->file('foto')->store('public/02_beritajakon/berita');
    $foto1 = $request->file('foto1')->store('public/02_beritajakon/berita');
    $foto2 = $request->file('foto2')->store('public/02_beritajakon/berita');

    // Membuat data baru di tabel beritajakon
    beritajakon::create([
        'user_id' => $user_id,  // Menyimpan user_id yang sudah diatur otomatis
        'judulberita' => $validatedData['judulberita'],
        'tanggal' => $validatedData['tanggal'],
        'keterangan' => $validatedData['keterangan'],
        'foto' => $foto,
        'foto1' => $foto1,
        'foto2' => $foto2,
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('create', 'Data Berhasil Dibuat!');

    // Redirect ke halaman yang sesuai
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

        public function beartikeljakon()
        {
            $data = artikeljakonmasjaki::paginate(5); // Menggunakan paginate() untuk pagination
            $user = Auth::user();

            return view('backend.03_beritajakon.02_artikeljakon.index', [
                'title' => 'Artikel Jasa Konstruksi',
                'data' => $data, // Mengirimkan data paginasi ke view
                'user' => $user, // Mengirimkan data paginasi ke view

            ]);
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

}




