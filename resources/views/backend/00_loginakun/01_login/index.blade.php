<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login | DPUPR Kabupaten Blora</title>

  <!-- Favicon -->
  <link rel="icon" href="/assets/icon/logokabupatenblora.png" type="image/x-icon" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

  <!-- Google Fonts – Poppins (konsisten dengan SIPD) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    /* ============================================================
       RESET & VARIABEL – SIPD STYLE
       ============================================================ */
    :root {
      --primary:        #16A34A;
      --primary-dark:   #15803D;
      --primary-deep:   #14532D;
      --primary-light:  #4ADE80;
      --primary-bright: #22C55E;
      --primary-soft:   #F0FDF4;
      --primary-mid:    #DCFCE7;
      --primary-glow:   rgba(22, 163, 74, 0.15);

      --white:      #FFFFFF;
      --bg-page:    #F1F4F9;
      --bg-soft:    #F8FAFC;
      --border:     #E9EDF4;
      --border-hover: #D0D8E3;

      --text-dark:   #1A2B4A;
      --text-medium: #4A5A72;
      --text-muted:  #6B7A93;
    }

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
    }

    body {
      background: var(--bg-page);
      color: var(--text-dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
      position: relative;
      overflow-x: hidden;
    }

    /* ============================================================
       BACKGROUND DECORATION – HIJAU KHAS BLORA
       ============================================================ */
    .bg-decoration {
      position: fixed;
      inset: 0;
      z-index: -1;
      overflow: hidden;
      pointer-events: none;
      background: linear-gradient(135deg, #F1F9F3 0%, #E8F5EC 50%, #F0FDF4 100%);
    }

    .bg-grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(22, 163, 74, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(22, 163, 74, 0.05) 1px, transparent 1px);
      background-size: 40px 40px;
      mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
      -webkit-mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
    }

    .bg-blob {
      position: absolute;
      border-radius: 50%;
      filter: blur(2px);
    }

    .bg-blob-1 {
      width: 500px; height: 500px;
      top: -220px; right: -180px;
      background: radial-gradient(circle, rgba(22, 163, 74, 0.18) 0%, rgba(22, 163, 74, 0.02) 60%, transparent 80%);
    }

    .bg-blob-2 {
      width: 420px; height: 420px;
      bottom: -180px; left: -140px;
      background: radial-gradient(circle, rgba(74, 222, 128, 0.15) 0%, transparent 70%);
    }

    .bg-blob-3 {
      width: 280px; height: 280px;
      top: 45%; left: 8%;
      background: radial-gradient(circle, rgba(22, 163, 74, 0.10) 0%, transparent 70%);
    }

    /* ============================================================
       WRAPPER – MAIN SECTION
       ============================================================ */
    .main-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 20px;
      gap: 24px;
    }

    /* ============================================================
       LOGO SECTION
       ============================================================ */
    .logo-section {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 16px;
      margin-bottom: 8px;
    }

    .logo-section img {
      height: 60px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 2px 6px rgba(22, 163, 74, 0.15));
    }

    /* ============================================================
       LOGIN CARD
       ============================================================ */
    .login-card {
      background: #FFFFFF;
      border: 1px solid var(--border);
      border-radius: 20px;
      padding: 36px 32px 32px 32px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.06);
      width: 100%;
      max-width: 420px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .login-card:hover {
      box-shadow: 0 24px 72px rgba(0, 0, 0, 0.08);
    }

    .login-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-dark);
      text-align: center;
      margin-bottom: 6px;
      letter-spacing: -0.3px;
    }

    .login-subtitle {
      font-size: 0.8rem;
      color: var(--text-muted);
      text-align: center;
      margin-bottom: 28px;
      font-weight: 400;
      line-height: 1.5;
    }

    /* ============================================================
       FORM
       ============================================================ */
    .form-group {
      margin-bottom: 18px;
      position: relative;
    }

    .form-label {
      display: block;
      font-size: 0.7rem;
      font-weight: 600;
      color: var(--text-medium);
      text-transform: uppercase;
      letter-spacing: 0.4px;
      margin-bottom: 6px;
    }

    .form-control {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid var(--border);
      border-radius: 10px;
      background: var(--bg-soft);
      font-size: 0.88rem;
      font-weight: 500;
      color: var(--text-dark);
      transition: all 0.2s ease;
      outline: none;
    }

    .form-control::placeholder {
      color: #94A3B8;
      font-weight: 400;
    }

    .form-control:focus {
      border-color: var(--primary);
      background: #FFFFFF;
      box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.10);
    }

    /* ============================================================
       BUTTON LOGIN
       ============================================================ */
    .btn-login {
      width: 100%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 20px;
      background: var(--primary);
      color: #FFFFFF;
      border: none;
      border-radius: 10px;
      font-size: 0.9rem;
      font-weight: 600;
      letter-spacing: 0.3px;
      cursor: pointer;
      transition: all 0.2s ease;
      margin-top: 8px;
    }

    .btn-login:hover {
      background: var(--primary-dark);
      transform: translateY(-1px);
      box-shadow: 0 6px 18px rgba(22, 163, 74, 0.25);
      color: #FFFFFF;
    }

    .btn-login:active {
      transform: translateY(0);
      box-shadow: 0 2px 8px rgba(22, 163, 74, 0.20);
    }

    .btn-login i {
      font-size: 0.95rem;
    }

    /* ============================================================
       REGISTER LINK
       ============================================================ */
    .register-link {
      text-align: center;
      margin-top: 20px;
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .register-link a {
      color: var(--primary);
      font-weight: 600;
      text-decoration: none;
      margin-left: 4px;
      transition: color 0.2s ease;
    }

    .register-link a:hover {
      color: var(--primary-dark);
      text-decoration: underline;
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .login-footer {
      width: 100%;
      max-width: 420px;
      text-align: center;
      padding: 16px 20px;
      background: #FFFFFF;
      border: 1px solid var(--border);
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    .login-footer .footer-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
    }

    .login-footer .footer-logos img {
      height: 22px;
      width: auto;
      opacity: 0.85;
    }

    .login-footer p {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin: 0;
      line-height: 1.6;
      font-weight: 400;
    }

    .login-footer p strong {
      color: var(--primary-deep);
      font-weight: 600;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 576px) {
      body {
        padding: 12px;
      }

      .login-card {
        padding: 28px 20px 24px 20px;
        border-radius: 16px;
      }

      .login-title {
        font-size: 1.2rem;
      }

      .login-subtitle {
        font-size: 0.72rem;
        margin-bottom: 22px;
      }

      .logo-section img {
        height: 48px;
      }

      .form-control {
        padding: 10px 14px;
        font-size: 0.82rem;
      }

      .btn-login {
        padding: 11px 16px;
        font-size: 0.82rem;
      }

      .login-footer {
        padding: 12px 16px;
      }

      .login-footer p {
        font-size: 0.65rem;
      }
    }

    @media (max-width: 360px) {
      .login-title {
        font-size: 1rem;
      }

      .logo-section img {
        height: 40px;
      }

      .form-control {
        font-size: 0.75rem;
        padding: 8px 12px;
      }

      .btn-login {
        font-size: 0.75rem;
        padding: 10px 14px;
      }
    }
  </style>
</head>

<body>

  <!-- ============================================================
       BACKGROUND DECORATION
       ============================================================ -->
  <div class="bg-decoration">
    <div class="bg-grid"></div>
    <div class="bg-blob bg-blob-1"></div>
    <div class="bg-blob bg-blob-2"></div>
    <div class="bg-blob bg-blob-3"></div>
  </div>

  <!-- ============================================================
       MAIN CONTENT
       ============================================================ -->
  <div class="main-wrapper">

    <!-- LOGIN CARD -->
    <div class="login-card">

      <!-- Logo -->
      <div class="logo-section">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
        <img src="/assets/icon/pupr.png" alt="Logo PUPR">
      </div>

      <!-- Title -->
      <h1 class="login-title">Selamat Datang</h1>
      <p class="login-subtitle">
        Dinas Pekerjaan Umum dan Penataan Ruang<br>
        Kabupaten Blora
      </p>

      <!-- Form -->
      <form action="/login" method="POST">
        @csrf

        <!-- Email -->
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input
            type="text"
            name="email"
            id="email"
            class="form-control"
            placeholder="Masukkan email atau username"
            required
            autocomplete="email"
          >
        </div>

        <!-- Password -->
        <div class="form-group">
          <label class="form-label" for="password">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            class="form-control"
            placeholder="Masukkan password"
            required
            autocomplete="current-password"
          >
        </div>

        <!-- Submit -->
        <button type="submit" class="btn-login">
          <i class="fas fa-sign-in-alt"></i>
          <span>Masuk</span>
        </button>

        <!-- Register -->
        <div class="register-link">
          Belum punya akun? <a href="/daftar">Daftar Sekarang</a>
        </div>

      </form>
    </div>

    <!-- FOOTER -->
    <div class="login-footer">
      <div class="footer-logos">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
        <img src="/assets/icon/pupr.png" alt="Logo PUPR">
      </div>
      <p>
        <strong>DPUPR Kabupaten Blora</strong><br>
        Provinsi Jawa Tengah
      </p>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
