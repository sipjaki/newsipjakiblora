<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class BujkkonsultanController extends Controller
{
    //
    // public function bujkkonsultan(Request $request)
    // {

    //     $perPage = $request->input('perPage', 200); // Ambil jumlah data dari request, default 15
    //     $data = bujkkonsultan::paginate($perPage);
    //     $datasub = bujkkonsultansub::all();
    //     $user = Auth::user();

    //     return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultan', [
    //         'title' => 'BUJK Konstruksi',
    //         'user' => $user,
    //         'data' => $data,
    //         'datasub' => $datasub,
    //         'perPage' => $perPage // Kirim nilai perPage ke view
    //     ]);


    // }


    public function bujkkonsultan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkonsultan::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
            //   ->orWhere('no_telepon', 'LIKE', "%{$search}%")

              ;

            }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.03_masjaki_jakon.02_bujkkonsultan.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultan', [
        'title' => 'BUJK | Konsultasi Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkkonsultanshow($namalengkap)
    {
        $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

        if (!$databujkkonsultan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(15);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultanshow', [
        'title' => 'Data Bujk Konstruksi Konsultasi',
        'data' => $databujkkonsultan,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

// MENU BACKEND BUJK KONSTRUKSI KONSULTASI ----------------------------------

public function bebujkkonsultan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkonsultan::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
              ->orWhere('pju', 'LIKE', "%{$search}%")
              ->orWhere('no_akte', 'LIKE', "%{$search}%")
              ->orWhere('tanggal', 'LIKE', "%{$search}%")
              ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
              ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
              ->orWhereHas('bujkkonsultansub', function ($q) use ($search) {
                $q->where('nama_pengurus', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                $q->where('namaasosiasi', 'LIKE', "%{$search}%");
            });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.04_datajakon.02_bujkkonsultan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.02_bujkkonsultan.index', [
        'title' => 'BUJK Konsultasi Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}





// BUJKKONTRAKTOR SHOW

public function bebujkkonsultanshow($namalengkap)
{
    $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.02_bujkkonsultan.show', [
    'title' => 'Data Bujk Konsultasi Konstruksi',
    'data' => $databujkkonsultan,
]);
}


// DATA SHOW SUB KLASIFIKASI LAYANAN
public function bebujkkonsultanshowklasifikasi($namalengkap)
{
    $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

    if (!$databujkkonsultan) {
        return abort(404, 'Data sub-klasifikasi tidak ditemukan');
    }

        // Menggunakan paginate() untuk pagination
        $datasublayanan = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(50);

    return view('backend.04_datajakon.02_bujkkonsultan.showklasifikasi', [
        'title' => 'Data Klasifikasi Layanan',
        'subdata' => $datasublayanan,
        'data' => $databujkkonsultan,
        'user' => Auth::user()
    ]);
}


public function bebujkkonsultanshowdelete($namalengkap)
{
// Cari item berdasarkan judul
$entry = bujkkonsultan::where('namalengkap', $namalengkap)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/bebujkkonsultan')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}






// UPDATE BUJKKONSULTAN

public function bebujkkonsultanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonkonsultan = bujkkonsultan::where('id', $id)->firstOrFail();
    $asosiasimasjakiList = asosiasimasjaki::all(); // Ambil semua asosiasi

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.02_bujkkonsultan.update', [
        'data' => $jakonkonsultan,
        'user' => $user,
        'asosiasimasjakiList' => $asosiasimasjakiList,
        'title' => 'Update BUJK Konsultasi Konstruksi'
    ]);
}



public function bebujkkonsultancreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        // 'bujkkontraktorsub_id' => 'required|string|max:255', // Validasi untuk ID kontraktor
        'asosiasimasjaki_id' => 'required|integer', // Validasi untuk ID asosiasi
        'namalengkap' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'alamat' => 'required|string', // Validasi untuk Alamat
        'no_telepon' => 'required|string|max:255', // Validasi untuk No Telepon
        'email' => 'required|email', // Validasi untuk Email
        'nomorindukberusaha' => 'required|string|max:255', // Validasi untuk Nomor Induk Berusaha
        'pju' => 'required|string|max:255', // Validasi untuk PJU
        'no_akte' => 'required|string|max:255', // Validasi untuk No Akte
        'tanggal' => 'required|date', // Validasi untuk Tanggal
        'nama_notaris' => 'required|string|max:255', // Validasi untuk Nama Notaris
        'no_pengesahan' => 'required|string|max:255', // Validasi untuk No Pengesahan
        'uploadberkas' => 'required|mimes:pdf',
    ], [

        'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'alamat.required' => 'Alamat wajib diisi!',
        'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email tidak valid!',
        'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        'pju.required' => 'PJU wajib diisi!',
        'no_akte.required' => 'No Akte wajib diisi!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Format Tanggal tidak valid!',
        'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
        'uploadberkas.required' => 'Berkas wajib diunggah!',
        'uploadberkas.mimes' => 'Berkas harus berupa file PDF!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkonsultan = bujkkonsultan::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi

    if ($request->hasFile('uploadberkas')) {
        $file = $request->file('uploadberkas');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('03_datajakon/01_sertifikasi');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke database
        $validatedData['uploadberkas'] = '03_datajakon/01_sertifikasi/' . $namaFile;
    }
    // Proses update setelah data tervalidasi
    $jakonkonsultan->update([
        'asosiasimasjaki_id' => $validatedData['asosiasimasjaki_id'] ?? $jakonkonsultan->asosiasimasjaki_id, // Jika asosiasimasjaki_id tidak ada, gunakan data sebelumnya
        'namalengkap' => $validatedData['namalengkap'] ?? $jakonkonsultan->namalengkap, // Jika namalengkap tidak ada, gunakan data sebelumnya
        'alamat' => $validatedData['alamat'] ?? $jakonkonsultan->alamat, // Jika alamat tidak ada, gunakan data sebelumnya
        'no_telepon' => $validatedData['no_telepon'] ?? $jakonkonsultan->no_telepon, // Jika no_telepon tidak ada, gunakan data sebelumnya
        'email' => $validatedData['email'] ?? $jakonkonsultan->email, // Jika email tidak ada, gunakan data sebelumnya
        'nomorindukberusaha' => $validatedData['nomorindukberusaha'] ?? $jakonkonsultan->nomorindukberusaha, // Jika nomorindukberusaha tidak ada, gunakan data sebelumnya
        'pju' => $validatedData['pju'] ?? $jakonkonsultan->pju, // Jika pju tidak ada, gunakan data sebelumnya
        'no_akte' => $validatedData['no_akte'] ?? $jakonkonsultan->no_akte, // Jika no_akte tidak ada, gunakan data sebelumnya
        'tanggal' => $validatedData['tanggal'] ?? $jakonkonsultan->tanggal, // Jika tanggal tidak ada, gunakan data sebelumnya
        'nama_notaris' => $validatedData['nama_notaris'] ?? $jakonkonsultan->nama_notaris, // Jika nama_notaris tidak ada, gunakan data sebelumnya
        'no_pengesahan' => $validatedData['no_pengesahan'] ?? $jakonkonsultan->no_pengesahan, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
        'uploadberkas' => $validatedData['uploadberkas'] ?? $jakonkonsultan->uploadberkas, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
    ]);
    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bebujkkonsultan');
}


public function bebujkkonsultancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.02_bujkkonsultan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Create BUJK Konsultasi Konstruksi'
    ]);
}

// CREATE DATA BUJK KONSULTAN
public function bebujkkonsultancreatenew(Request $request)
{
    // Validasi input form
    $validatedData = $request->validate([
        'asosiasimasjaki_id' => 'required|integer',
        'namalengkap' => 'required|string|max:255',
        'alamat' => 'required|string',
        'no_telepon' => 'required|string|max:255',
        'email' => 'required|email',
        'nomorindukberusaha' => 'required|string|max:255',
        'pju' => 'required|string|max:255',
        'no_akte' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'nama_notaris' => 'required|string|max:255',
        'no_pengesahan' => 'required|string|max:255',
    ], [
        'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'alamat.required' => 'Alamat wajib diisi!',
        'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email.required' => 'Email wajib diisi!',
        'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        'pju.required' => 'PJU wajib diisi!',
        'no_akte.required' => 'No Akte wajib diisi!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
    ]);

    // Ambil ID default dari sub kontraktor (pastikan tidak null di DB!)
    $bujkkonsultansub_id = bujkkonsultansub::first()->id;

    // Ambil ID user yang sedang login
    $user_id = Auth::user()->id;

    // Simpan ke DB
    bujkkonsultan::create([
        'user_id' => $user_id, // Menyimpan user_id berdasarkan login
        'bujkkonsultansub_id' => $bujkkonsultansub_id,
        'asosiasimasjaki_id' => $validatedData['asosiasimasjaki_id'],
        'namalengkap' => $validatedData['namalengkap'],
        'alamat' => $validatedData['alamat'],
        'no_telepon' => $validatedData['no_telepon'],
        'email' => $validatedData['email'],
        'nomorindukberusaha' => $validatedData['nomorindukberusaha'],
        'pju' => $validatedData['pju'],
        'no_akte' => $validatedData['no_akte'],
        'tanggal' => $validatedData['tanggal'],
        'nama_notaris' => $validatedData['nama_notaris'],
        'no_pengesahan' => $validatedData['no_pengesahan'],
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/bebujkkonsultan');
}


public function bebujkkonsultancreateklasifikasi($namalengkap)
{
    $bujkkonsultan = bujkkonsultan::findOrFail($namalengkap); // Cari 1 data sesuai ID
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();

    return view('backend.04_datajakon.02_bujkkonsultan.createklasifikasi', [
        'bujkkontraktornamalengkap' => $bujkkonsultan->namalengkap, // Ini dikirim ke form
        'bujkkontraktor_id' => $bujkkonsultan->id, // Ini dikirim ke form
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Create BUJK Sub Klasifikasi'
    ]);
}



public function bebujkkonsultancreateklasifikasicreate(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama_pengurus' => 'required|string|max:255',
        'sub_klasifikasi_layanan' => 'required|string|max:255',
        'kode' => 'required|string|max:50',
        'kualifikasi' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'nama_psjk' => 'required|string|max:255',
        'sub_kualifikasi_bu' => 'required|string|max:255',
        'tanggal_terbit' => 'required|date',
        'tanggal_berlaku' => 'required|date',
    ], [
        // Pesan kesalahan custom
        'nama_pengurus.required' => 'Nama Pengurus harus diisi.',
        'sub_klasifikasi_layanan.required' => 'Sub Klasifikasi Layanan harus diisi.',
        'kode.required' => 'Kode Sub Klasifikasi harus diisi.',
        'kualifikasi.required' => 'Kualifikasi harus diisi.',
        'sub_kualifikasi_bu.required' => 'Sub Bidang harus diisi.',
        'penerbit.required' => 'Penerbit harus diisi.',
        'nama_psjk.required' => 'Nama PSJK harus diisi.',
        'tanggal_terbit.required' => 'Tanggal Terbit harus diisi.',
        'tanggal_berlaku.required' => 'Tanggal Berlaku harus diisi.',
    ]);

    // Menyimpan data ke tabel BujkKontraktorSub
    $bujkkonsultanSub = bujkkonsultansub::create([
        'bujkkonsultan_id' => $request->bujkkonsultan_id,
        'nama_pengurus' => $validated['nama_pengurus'],
        'sub_klasifikasi_layanan' => $validated['sub_klasifikasi_layanan'],
        'kode' => $validated['kode'],
        'kualifikasi' => $validated['kualifikasi'],
        'sub_kualifikasi_bu' => $validated['sub_kualifikasi_bu'],
        'penerbit' => $validated['penerbit'],
        'nama_psjk' => $validated['nama_psjk'],
        'tanggal_terbit' => $validated['tanggal_terbit'],
        'tanggal_berlaku' => $validated['tanggal_berlaku'],
    ]);

    // Ambil bujkkontraktor_id yang baru saja disimpan
    $bujkkonsultanId = $bujkkonsultanSub->bujkkonsultan_id;

    // Flash message untuk memberi tahu pengguna bahwa data berhasil disimpan
    session()->flash('create', 'Data Sub Klasifikasi Layanan berhasil di buat.');

    // Redirect ke route 'bebujkkonstruksi.showsubklasifikasi' dengan parameter bujkkontraktor_id
    return redirect('bebujkkonsultan');
}


public function bebujkkonsultanshowklasifikasidelete($id)
{
    $entry = bujkkonsultansub::where('id', $id)->first();

    if ($entry) {
        // Kalau ada file yang mau dihapus, bisa aktifkan bagian ini
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $parentId = $entry->bujkkonsultan_id;
        $entry->delete();

        // Pakai session()->flash supaya konsisten dengan create
        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect('/bebujkkonsultan');
    }

    // Kalau tidak ketemu, flash error
    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



}
