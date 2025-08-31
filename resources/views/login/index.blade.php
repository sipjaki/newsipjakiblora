<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silahkan Login! | Sistem Informasi Pembina Jasa Konstruksi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    @include('components.style-login') {{-- Pastikan file style-login.blade.php sudah ada --}}
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
      <h1>Mas Jaki Blora</h1>
    </div>

    {{-- Tampilkan pesan error khusus dari controller --}}
    @if ($errors->has('pesanlogin'))
    <div class="alert alert-danger">
      {{ $errors->first('pesanlogin') }}
    </div>
    @endif

    {{-- Jika ada alert terpisah dari include --}}
    @include('backend.00_administrator.00_baganterpisah.11_alert')

    <form action="/login" method="POST">
      @csrf
      <div class="input-group">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" class="input-field" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
        <div class="alert alert-danger">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="input-group">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" class="input-field" name="password" placeholder="Password" required>
        @error('password')
        <div class="alert alert-danger">
          {{ $message }}
        </div>
        @enderror
      </div>

      <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
          // Toggle the type attribute
          const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordField.setAttribute('type', type);

          // Toggle the eye / eye-slash icon
          this.classList.toggle('fa-eye');
          this.classList.toggle('fa-eye-slash');
        });
      </script>

      <div class="footer-links">
        {{-- <a href="/forgot-password">Lupa Password?</a> --}}
        <a href="{{ route('password.request') }}">Lupa Password ?</a>

        {{-- <a href="/forgot-password">Lupa Password?</a> --}}

      </div>
<br>
      <button type="submit" class="btn-login">Login</button>

      <div class="footer-links">
        <a href="/daftar">
          Belum punya akun ? <strong>Silahkan Daftar</strong>
        </a>
      </div>
    </form>

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
