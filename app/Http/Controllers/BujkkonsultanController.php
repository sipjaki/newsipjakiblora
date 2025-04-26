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
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")

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

    $data = $query->paginate($perPage);

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


public function bebujkkonsultanshowklasifikasidelete($id)
{
// Cari item berdasarkan judul
$entry = bujkkonsultansub::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database

$parentId = $entry->bujkkontraktor_id; // Sesuaikan dengan nama kolom di database
$entry->delete();

return redirect()->route('bebujkkonstruksi.showsubklasifikasi', ['id' => $parentId])
    ->with('delete', 'Data Berhasil Dihapus!');

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
        'title' => 'Update BUJK Kontraktor'
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
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkonsultan = bujkkonsultan::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi

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
    ]);
    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bebujkkonsultan');
}


}
