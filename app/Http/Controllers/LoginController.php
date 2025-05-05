<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


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

        return view('register.index',[
            'title' => 'Register Mas Jaki !',
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



}
