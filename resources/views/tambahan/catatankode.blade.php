PERINTAH UNTUK MENCARI ARTISAN THINKER RELASI TABLE $QA


App\Models\Qa::first();




> $user->statusadmin

   WARNING  Undefined variable $user in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.


   WARNING  Attempt to read property "statusadmin" on null in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.

= null

> $user = App\Models\User::first();

= App\Models\User {#6182
    id: 1,
    statusadmin_id: 1,
    name: "Sigit Septiadi",
    username: "Sigit",
    phone_number: null,
    email: "sigitseptiadi1@gmail.com",
    avatar: null,
    email_verified_at: null,
    #password: "$2y$12$tataDPkWtGA6tWR0SMWAOOYGV2CNODupe2MgAVwF/15OAzEsklmqC",
    deleted_at: null,
    #remember_token: null,
    created_at: "2024-09-13 02:57:45",
    updated_at: "2024-09-13 02:57:45",
  }

> $user =$user->statusadmin
= App\Models\statusadmin {#6181
    id: 1,
    status: "super_admin",
    deleted_at: null,
    created_at: "2024-09-13 02:57:46",
    updated_at: "2024-09-13 02:57:46",
  }

> $qa = App\Models\qa::first();
= App\Models\qa {#6162
    id: 1,
    qasebagai_id: 2,
    qapertanyaan_id: 8,
    nama_lengkap: "Marina Stanton",
    email: "madaline.nicolas@example.org",
    telepon: "+1 (380) 439-2707",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }

> $qa->sebagai
= null

> $qa->qasebagai
= App\Models\qasebagai {#6193
    id: 2,
    sebagai: "Pengawas",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }



  {{-- untuk memilih berdasarkan seelct --}}

  
                {{-- <div class="form-group">
                    <div class="form-group-inner" style="width:800px;">
                        <label for="status" style="font-size:14px;">
                            <i class="fas fa-file me-2"></i> Status
                        </label>
                        <select id="status" name="status" required class="form-control" style="width: 500px;">
                            <!-- Ensure the value matches the expected status from your data source -->
                            <option value="AKTIF" {{$dataasosiasipengusaha->status}}>{{$dataasosiasipengusaha->status}}</option>
                            <option value="AKTIF">AKTIF</option>
                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                        </select>
                    </div>
                </div> --}}


                
public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk angka
        'metodepengadaan_id' => 'required|string|max:255',
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
     
        // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

    // Path folder penyimpanan
    $storagePath = storage_path('app/public/datajakon/paketpekerjaan');

    // Cek dan buat folder jika tidak ada
    if (!File::exists($storagePath)) {
        File::makeDirectory($storagePath, 0755, true);
    }

    // Simpan file foto_pekerjaan dan ambil path-nya
    $filePath = $datapaketpekerjaan->foto_pekerjaan; // Default ke foto yang ada jika tidak ada file baru
    if ($request->hasFile('foto_pekerjaan')) {
        $file = $request->file('foto_pekerjaan');
        $filePath = $file->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');

    // Hapus karakter non-numeric, misalnya "Rp." atau tanda titik ribuan
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);

    // Konversi ke integer
    $jumlahPagu = (int) $jumlahPagu;

    // Update data paketpekerjaan dengan data dari form
    $datapaketpekerjaan->update([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu, // Pastikan jumlah_pagu disimpan sebagai integer
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,
        
        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
}



{{-- ----------------- pengeluaran foto --}}

@if(Storage::disk('public')->exists($data->foto_pekerjaan))
<img src="{{ asset('storage/' . $data->foto_pekerjaan) }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@else
<img src="{{ $data->foto_pekerjaan }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@endif




FAKER BAHASA INDONESAI 
$faker = FakerFactory::create('id_ID'); // Menggunakan lokal Indonesia


use Faker\Factory as FakerFactory;

