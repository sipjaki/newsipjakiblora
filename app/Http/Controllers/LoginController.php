<?php

namespace App\Http\Controllers;

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
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%")
              ->orWhereHas('statusadmin', function ($q) use ($search) {
                  $q->where('statusadmin', 'LIKE', "%{$search}%");
              });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.01_semuaakun.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.01_semuaakun.index', [
        'title' => 'Daftar Semua Akun',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
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

    $data = User::all();

    return view('backend.13_daftarakun.01_semuaakun.index',[
        'title' => 'Buat AKun !',
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
        'avatar'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'statusadmin_id.required' => 'Status Admin wajib dipilih!',
        'name.required'           => 'Nama wajib diisi!',
        'username.required'       => 'Username wajib diisi!',
        'phone_number.required'   => 'Nomor HP wajib diisi!',
        'email.required'          => 'Email wajib diisi!',
        'email.unique'            => 'Email sudah terdaftar!',
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



}
