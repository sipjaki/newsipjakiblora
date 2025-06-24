<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
    * Display the login view.
    */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
    * Handle an incoming authentication request.
    */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email'    => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'pesanlogin' => ['Email tidak ditemukan.'],
            ]);
        }

        if (!$user->is_email_verified) {
            throw ValidationException::withMessages([
                'pesanlogin' => ['Email belum diverifikasi! Silakan cek inbox dan verifikasi terlebih dahulu.'],
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'pesanlogin' => ['Username atau password salah.'],
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
    * Destroy an authenticated session.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
