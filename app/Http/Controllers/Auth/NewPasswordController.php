<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    public function create(Request $request): View
    {
        return view('auth.reset-password', [
            'request' => $request,
            'token' => $request->route('token'),
            'email' => $request->email,
        ]);
    }


    //   public function store(Request $request): RedirectResponse
    //   {
    //     $validated = $request->validate([
    //       'token' => ['required'],
    //     //   'email' => ['required', 'email'],
    //       'password' => [
    //         'required',
    //         'confirmed',
    //         Rules\Password::defaults()
    //       ],
    //     ], [
    //       'password.confirmed' => 'Konfirmasi password tidak sesuai.',
    //       'password.required' => 'Password wajib diisi.',
    //     //   'email.required' => 'Email wajib diisi.',
    //       'token.required' => 'Token tidak ditemukan.',
    //     ]);

    //     // dd($request->email);

    //     // Cek manual jika perlu (optional debugging)
    //     if ($request->password !== $request->password_confirmation) {
    //       return back()->withErrors([
    //         'password_confirmation' => 'Konfirmasi password tidak cocok.'
    //       ]);
    //     }

    //     $status = Password::reset(
    //     //   $request->only('email', 'password', 'password_confirmation', 'token'),
    //       $request->only('password', 'password_confirmation', 'token'),
    //       function ($user) use ($request) {
    //         $user->forceFill([
    //           'password' => Hash::make($request->password),
    //           'remember_token' => Str::random(60),
    //           ])->save();

    //           event(new PasswordReset($user));
    //         }
    //       );

    //       return $status === Password::PASSWORD_RESET
    //       ? redirect()->route('login')->with('status', 'Password berhasil direset.')
    //       : back()->withInput($request->only('email'))
    //       ->withErrors(['email' => 'Reset password gagal. Pastikan token dan email valid.']);
    //     }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
            'password.required' => 'Password wajib diisi.',
            'token.required' => 'Token tidak ditemukan.',
        ]);

        $status = Password::reset(
            $validated,
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    ])->save();
                }
            );

            return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
        }
    }
