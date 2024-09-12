<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\statusadmin;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdministratorController extends Controller
{
    //

    public function index()
    {
        $datauser = user::paginate(15);
        $datastatusadmin = statusadmin::all();
        
        return view('backend.15_administrator.user.index', [
            'title' => 'Daftar User Admin Sipjaki ',
            'datauser' => $datauser,  
            'datastatusadmin' => $datastatusadmin,  
           
        ]);
    }

    
        public function administratorshowbyname($name)
        {
            $datauser = user::where('name', $name)->firstOrFail();

            return view('backend.15_administrator.user.show', [
                'data' => $datauser,
                'title' => 'Details Admin Sipjaki',
            ]);
        }

        
                // -------------------- UPDATE DATA ADMINISTRATOR ----------------------
                public function updateadministrator($name)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $user = user::where('name', $name)->firstOrFail();
                    $statusadminList = statusadmin::all(); 
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.15_administrator.user.update', [
                        'datauser' => $user,
                        'datalistadmin' => $statusadminList,
                        'title' => 'Update Data Administrator'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            
                public function createupdateadministrator(Request $request, $name)
                {
                    // Validasi input
                    $request->validate([
                        'name' => 'required|string|max:255',
                        'statusadmin' => 'required|exists:statusadmins,id',
                        'username' => 'required|string|max:255|unique:users,username,' . $name . ',name',
                        'phone_number' => 'required|string|max:15',
                        'email' => 'required|email|max:255|unique:users,email,' . $name . ',name',
                        'password' => 'nullable|string|min:6|confirmed', // Konfirmasi password opsional
                        'avatar' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
                    ]);

                    // Cari data administrator berdasarkan nama
                    $user = User::where('name', $name)->firstOrFail();

                    // Path folder penyimpanan
                    $storagePath = storage_path('app/public/user/avatar');

                    // Cek dan buat folder jika tidak ada
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }

                    // Simpan file avatar dan ambil path-nya
                    if ($request->hasFile('avatar')) {
                        $file = $request->file('avatar');
                        $filePath = $file->store('user/avatar', 'public');
                    } else {
                        $filePath = $user->avatar; // Default ke avatar yang ada jika tidak ada file baru
                    }

                    // Update data administrator dengan data dari form
                    $user->update([
                        'name' => $request->input('name'),
                        'statusadmin_id' => $request->input('statusadmin'),
                        'username' => $request->input('username'),
                        'phone_number' => $request->input('phone_number'),
                        'email' => $request->input('email'),
                        'password' => $request->input('password') ? bcrypt($request->input('password')) : $user->password,
                        'avatar' => $filePath, // Menggunakan variabel filePath yang benar
                    ]);

                    // Flash pesan session
                    session()->flash('update', 'Data Administrator Berhasil Diupdate!');

                    // Redirect ke halaman yang sesuai
                    return redirect('/administrator');
                }
                    
}
