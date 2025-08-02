<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
	public function create(): View
	{
		return view('auth.forgot-password');
	}

	//   public function store(Request $request): RedirectResponse
	//   {
	//     $request->validate([
	//       'email' => ['required', 'email'],
	//     ]);

	//     $status = Password::sendResetLink(
	//       $request->only('email')
	//     );

	//     return $status == Password::RESET_LINK_SENT
	//     ? back()->with('status', __($status))
	//     : back()->withInput($request->only('email'))
	//     ->withErrors(['email' => __($status)]);
	//   }
	public function store(Request $request): RedirectResponse
	{
		$request->validate([
			'email' => ['required', 'email'],
		]);

		$status = Password::sendResetLink(
			$request->only('email')
		);

		return $status == Password::RESET_LINK_SENT
		? back()->with('status', __('Link reset password sudah dikirim ke email Anda.'))
		: back()->withInput($request->only('email'))
		->withErrors(['email' => 'Email tidak ditemukan. Pastikan Anda memasukkan email yang terdaftar.']);
	}
}
