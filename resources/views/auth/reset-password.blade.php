<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Reset Password | Sistem Informasi Pembina Jasa Konstruksi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    @include('components.style-login') {{-- Pastikan style-login.blade.php ada --}}
  </style>
</head>
<body>
  <div class="matrix-bg"></div>
  <div class="construction-animation">
    <div class="floating-element crane-icon" style="left: 10%; animation-delay: 0s"></div>
  </div>

  <div class="login-container">
    <div class="header-section">
      <img src="/assets/00_masjaki/images/maskotjakon.png" class="logo" alt="ABG Blora">
      <h1>Reset Password</h1>
    </div>

    @if (session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    {{-- <form method="POST" action="{{ route('password.update') }}"> --}}
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        @method('PUT') <!-- This is crucial -->

      <input type="hidden" name="token" value="{{ $token }}">

      <input type="hidden" name="email" value="{{ $email }}">

      <!-- Email -->
      <div class="input-group">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" name="email" class="input-field" placeholder="Masukkan Email Terdaftar" required value="{{ $email ?? old('email') }} " disabled>
      </div>
      {{-- <input type="email" class="input-field" value="{{ $email }}" disabled> --}}
      {{-- <input type="hidden" name="email" value="{{ $email }}" disabled> --}}


      <!-- Password -->
      <div class="input-group">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" name="password" class="input-field" placeholder="Password Baru" required>
      </div>

      <!-- Confirm Password -->
      <div class="input-group">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" name="password_confirmation" class="input-field" placeholder="Konfirmasi Password" required>
      </div>

      <button type="submit" class="btn-login">Reset Password</button>
    </form>

    <div class="footer-links">
      <a href="{{ route('login') }}">Kembali ke Login</a>
    </div>

    <div class="institutional-footer">
      <div class="footer-logos">
        <img src="/assets/icon/logokabupatenblora.png" alt="Kabupaten Blora">
        <img src="/assets/icon/pupr.png" alt="PUPR">
      </div>
      <p style="color: var(--primary); margin:0; font-size:0.9rem;">
        Dinas Pekerjaan Umum Dan Penataan Ruang<br>
        Kabupaten Blora Provinsi Jawa Tengah
      </p>
    </div>
  </div>

  <div class="safety-barrier"></div>
</body>
</html>
