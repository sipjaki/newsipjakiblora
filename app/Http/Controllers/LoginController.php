<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('login.index',[
            'title' => 'Silahkan Login !',
            
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
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
    // Validasi input dengan pesan kesalahan khusus
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Password harus diisi.',
    ]);

    // Coba autentikasi dengan kredensial yang diberikan
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        // Regenerasi session untuk keamanan
        $request->session()->regenerate();

        // Redirect ke halaman dashboard setelah login berhasil
        return redirect()->intended('/dashboard');
    }

    // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan kesalahan
    return back()->withErrors([
        'loginError' => 'Email atau password Anda salah!',
    ])->onlyInput('email'); // Hanya mengisi ulang input email
}




    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
