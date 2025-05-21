<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\statusadmin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //

    public function loginmasuk()
    {

        return view('backend.00_loginakun.01_login.index',[
            'title' => 'Silahkan Login !',
        ]);
    }

    public function register()
    {
        $datastatusadmin = statusadmin::whereIn('id', [3, 4, 5, 6])->get();

        return view('register.index', [
            'statusadmin' => $datastatusadmin,
            'title' => 'Register Mas Jaki !',
        ]);
    }

    public function registernew(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'statusadmin_id' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Menyimpan data user baru
        $user = new User();
        $user->name = $validated['name'];
        $user->username = $validated['username'];
        $user->statusadmin_id = $validated['statusadmin_id'];
        $user->phone_number = $validated['phone_number'];
        $user->email = $validated['email'];
        $user->avatar = 'default.jpg'; // Default avatar, bisa diubah sesuai kebutuhan
        $user->password = Hash::make($validated['password']);
        $user->save();

        // Redirect atau beri notifikasi
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login!');
    }

    // public function authenticate(Request $request)
    // {
        // $credentials = $request->validate([
        //     'email' => 'required|email',  // PENGGUNAAN DNS UNTUK MENERIMA EMAIL YANG SANGAT BENAR VALID ,
        //     'password' => 'required'
        // ]);

        // $credentials = $request->validate([
        //     'email' => ['required|email anda salah !', 'email:crf',],
        //     'password' => 'required'
        // ]);

        // // Coba melakukan autentikasi pengguna
        // if (Auth::attempt($credentials)) {
        //     // Jika autentikasi berhasil, arahkan pengguna ke dashboard
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Jika autentikasi gagal, kembalikan pengguna ke halaman login dengan pesan kesalahan
        //     return back()->withErrors(['email' => 'Email atau kata sandi yang Anda masukkan salah.'])->withInput($request->only('email'));
        // }


        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboards');
        // }
        // return back()->with('loginError', 'Login Failed !');

        // dd('Berhasil Masuk Iqlima');
    // }
// =========================

public function authenticate(Request $request)
{
    // Validate the input data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Password harus diisi.',
    ]);

    // Attempt to authenticate with provided credentials
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Regenerate the session for security
        $request->session()->regenerate();

        // Redirect to intended page (default is /dashboard)
        return redirect()->intended('/dashboard');
    }

    // If authentication fails, throw a ValidationException with a custom message
    throw ValidationException::withMessages([
        'pesanlogin' => ['Email dan Password Anda salah.'], // Custom message
    ]);
}




    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }

    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Hapus session
        $request->session()->invalidate();

        // Regenerasi token CSRF
        $request->session()->regenerateToken();

        // Menambahkan pesan flash dengan nama 'logout'
        session()->flash('logout', 'Anda berhasil keluar.');

        // Redirect ke halaman utama
        return redirect('/');
    }


// DAFTAR AKUN MASUK MAS JAKI BLORA
public function allakun(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = User::query();

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user per statusadmin (berdasarkan id statusadmin dari 1 sampai 9)
    $jumlahStatus1 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    })->count();

    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 2);
    })->count();

    $jumlahStatus3 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 3);
    })->count();

    $jumlahStatus4 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 4);
    })->count();

    $jumlahStatus5 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 5);
    })->count();

    $jumlahStatus6 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 6);
    })->count();

    $jumlahStatus7 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 7);
    })->count();

    $jumlahStatus8 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 8);
    })->count();

    $jumlahStatus9 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 9);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.01_semuaakun.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.01_semuaakun.index', [
        'title' => 'Daftar Semua Akun',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus1' => $jumlahStatus1, // Super Admin
        'jumlahStatus2' => $jumlahStatus2, // Admin
        'jumlahStatus3' => $jumlahStatus3, // Pekerja
        'jumlahStatus4' => $jumlahStatus4, // Supp Pabrik
        'jumlahStatus5' => $jumlahStatus5, // Sup Peralatan
        'jumlahStatus6' => $jumlahStatus6, // Sup Toko Bangunan
        'jumlahStatus7' => $jumlahStatus7, // LSP Penerbit
        'jumlahStatus8' => $jumlahStatus8, // Operator
        'jumlahStatus9' => $jumlahStatus9, // Dinas
    ]);
}

public function allsemuaakun($name)
{
// Cari item berdasarkan judul
$entry = User::where('name', $name)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/allakun')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}





public function akuncreate()
{

    $data = statusadmin::all();

    return view('backend.13_daftarakun.01_semuaakun.create',[
        'title' => 'Buat Akun !',
        'data' => $data,

    ]);
}

public function akuncreatenew(Request $request)
{
    $validatedData = $request->validate([
        'statusadmin_id' => 'required|string',
        'name'           => 'required|string|max:255',
        'username'       => 'required|string|max:255',
        'phone_number'   => 'required|string|max:255',
        'email'          => 'required|email|unique:users,email',
        'avatar'         => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'statusadmin_id.required' => 'Status Admin wajib dipilih!',
        'name.required'           => 'Nama wajib diisi!',
        'username.required'       => 'Username wajib diisi!',
        'phone_number.required'   => 'Nomor HP wajib diisi!',
        'email.required'          => 'Email wajib diisi!',
        'email.unique'            => 'Email sudah terdaftar!',
        'avatar.required'            => 'Avatar harus berupa gambar!',
        'avatar.image'            => 'Avatar harus berupa gambar!',
        'avatar.mimes'            => 'Avatar harus berupa file JPEG, JPG, atau PNG!',
    ]);

    // Default avatar jika tidak diunggah
    $avatarPath = 'assets/abgblora/logo/iconabgblora.png';

    // Simpan avatar jika diupload
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('00_user/akun');

        // Buat folder jika belum ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        // Pindahkan file ke direktori tujuan
        $file->move($tujuanPath, $namaFile);

        $avatarPath = '00_user/akun/' . $namaFile;
    }

    // Simpan user ke database
    User::create([
        'statusadmin_id' => $validatedData['statusadmin_id'],
        'name'           => $validatedData['name'],
        'username'       => $validatedData['username'],
        'phone_number'   => $validatedData['phone_number'],
        'email'          => $validatedData['email'],
        'avatar'         => $avatarPath,
        'password'       => bcrypt('password123'), // ganti dengan sistem password sesungguhnya
    ]);

    session()->flash('create', 'Data pengguna berhasil dibuat!');
    return redirect('/allakun'); // sesuaikan route tujuan
}


public function forgotpassword()
    {

        return view('register.forgotpassword',[
            'title' => 'Forgot Password !',
        ]);
    }


    // AKUN PEKERJA

 public function beprofileindex()
{
    // Ambil user yang sedang login
    $user = Auth::user();

    // Ambil ID dari user yang login
    $userId = $user->id;

    // (opsional) Kalau mau cek ID
    // dd($userId);

    return view('backend.15_hakakses.02_profile.index', [
        'title' => 'Akun Anda !',
        'user' => $user,
        'userId' => $userId, // Kirim juga ke view jika perlu
    ]);
}


public function beprofileupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $user = User::where('id', $id)->firstOrFail();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.15_hakakses.02_profile.update', [
        'user' => $user,
        'title' => 'Update Akun Anda !'
    ]);
}


// ========================


public function beprofileupdatecreate(Request $request, $id)
{
    $user = User::findOrFail($id);

   $validated = $request->validate([
    'name' => 'required|string|max:255',
    'username' => 'required|string|max:255|unique:users,username,' . $id,
    'email' => 'required|email|max:255|unique:users,email,' . $id,
    'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
], [
    'name.required' => 'Nama lengkap wajib diisi.',
    'name.string' => 'Nama lengkap harus berupa teks.',
    'name.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',

    'username.required' => 'Username wajib diisi.',
    'username.string' => 'Username harus berupa teks.',
    'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
    'username.unique' => 'Username ini sudah digunakan, silakan pilih yang lain.',

    'email.required' => 'Email wajib diisi.',
    'email.email' => 'Format email tidak valid.',
    'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
    'email.unique' => 'Email ini sudah digunakan, silakan gunakan email lain.',

    'avatar.image' => 'File harus berupa gambar.',
    'avatar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
    'avatar.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.',
]);


    // Simpan avatar baru jika ada file di-upload
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $avatarName = 'avatar_' . time() . '.' . $file->getClientOriginalExtension();
        $avatarPath = '00_akun/01_user/' . $avatarName; // relative path dari public

        // Buat folder jika belum ada
        if (!File::isDirectory(public_path('00_akun/01_user'))) {
            File::makeDirectory(public_path('00_akun/01_user'), 0755, true);
        }

        // Hapus avatar lama jika ada
        if ($user->avatar && file_exists(public_path($user->avatar))) {
            File::delete(public_path($user->avatar));
        }

        // Simpan file baru ke public path
        $file->move(public_path('00_akun/01_user'), $avatarName);

        // Simpan path ke database (pastikan sesuai)
        $user->avatar = $avatarPath;
    }

    // Simpan data lainnya
    $user->name = $validated['name'];
    $user->username = $validated['username'];
    $user->email = $validated['email'];
    $user->save();

    session()->flash('create', 'Profile Berhasil Di Update !.');

        // Redirect ke halaman utama
    return redirect('/beprofile');

}


// AKUN SUPER ADMIN

public function allsuperadmin(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus1 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.02_superadmin.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.02_superadmin.index', [
        'title' => 'Daftar Semua Akun Super Admin',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus1' => $jumlahStatus1, // Super Admin
    ]);
}


}
