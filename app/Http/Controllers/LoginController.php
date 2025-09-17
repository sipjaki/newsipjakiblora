<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginConfirmationMail;
use App\Models\statusadmin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

use App\Mail\VerifyEmail;

use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
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
        ], [
        // Pesan untuk field name
        'name.required' => 'Nama lengkap wajib diisi.',
        'name.string' => 'Nama lengkap harus berupa teks.',
        'name.max' => 'Nama lengkap maksimal 255 karakter.',

        // Pesan untuk field username
        'username.required' => 'Username wajib diisi.',
        'username.string' => 'Username harus berupa teks.',
        'username.max' => 'Username maksimal 255 karakter.',
        'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',

        // Pesan untuk statusadmin_id
        'statusadmin_id.required' => 'Silahkan Pilih Akun Anda !.',
        'statusadmin_id.string' => 'Status admin harus berupa teks.',

        // Pesan untuk nomor telepon
        'phone_number.required' => 'Nomor telepon wajib diisi.',
        'phone_number.string' => 'Nomor telepon harus berupa teks.',
        'phone_number.max' => 'Nomor telepon maksimal 15 digit.',

        // Pesan untuk email
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',

        // Pesan untuk password
        'password.required' => 'Password wajib diisi.',
        'password.string' => 'Password harus berupa teks.',
        'password.min' => 'Password minimal 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak sesuai.',
    ]);

        // Buat user baru
        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'statusadmin_id' => $validated['statusadmin_id'],
            'phone_number' => $validated['phone_number'],
            'avatar' => 'default.jpg', // Default avatar, bisa diubah sesuai kebutuhan
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'verification_token' => Str::random(50),
            'is_email_verified' => 1,
        ]);

        //Mail::to($user->email)->send(new VerifyEmail($user));

        // Redirect atau beri notifikasi
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login!');
    }


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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Regenerate the session for security
            $request->session()->regenerate();

            // Send confirmation email
            // Mail::to('umam.eleven@gmail.com')->send(new LoginConfirmationMail(Auth::user()));

            // Redirect to intended page (default is /dashboard)
            return redirect()->intended('/dashboard');
        }

        // // If authentication fails, throw a ValidationException with a custom message
        throw ValidationException::withMessages([
            'pesanlogin' => ['Email dan Password Anda salah.'], // Custom message
        ]);
    }


    public function verifyEmail($token)
    {
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Token tidak valid.');
        }

        $user->is_email_verified = true;
        $user->verification_token = null;
        $user->save();

        return redirect('/login')->with('success', 'Email berhasil diverifikasi!');
    }

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

    public function showForgotPasswordForm()
    {
        dd("test");
        // return view('backend.00_loginakun.01_login.forgot-password', [
        //     'title' => 'Reset Password',
        // ]);
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('backend.00_loginakun.01_login.reset-password', [
            'token' => $token,
            'title' => 'Buat Password Baru',
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
        ? redirect('/login')->with('success', 'Password berhasil direset!')
        : back()->withErrors(['email' => [__($status)]]);
    }


}
