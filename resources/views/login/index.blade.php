    <!DOCTYPE html>
    <html lang="id">

    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>LOGIN | SIPJAKI Kabupaten Blora</title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/icon/logokabupatenblora.png" type="image/x-icon" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

    <!-- Google Fonts – Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        /* ============================================================
        VARIABEL – HIJAU KHAS BLORA
        ============================================================ */
        :root {
        --blora-green:        #16A34A;
        --blora-green-dark:   #15803D;
        --blora-green-deep:   #14532D;
        --blora-green-light:  #4ADE80;
        --blora-green-bright: #22C55E;
        --blora-green-soft:   #F0FDF4;
        --blora-green-mid:    #DCFCE7;
        --blora-green-glow:   rgba(22, 163, 74, 0.15);
        --blora-green-glow2:  rgba(22, 163, 74, 0.08);

        --white:        #FFFFFF;
        --bg-page:      #F1F4F9;
        --bg-soft:      #F8FAFC;
        --border:       #E9EDF4;
        --border-hover: #D0D8E3;

        --text-dark:    #1A2B4A;
        --text-medium:  #4A5A72;
        --text-muted:   #6B7A93;

        --danger:       #DC3545;
        --danger-soft:  #FEF2F2;
        --danger-mid:   #FECACA;
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
        BACKGROUND DECORATION
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
        WRAPPER
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
        LOGO SECTION (atas)
        ============================================================ */
        .logo-section {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 16px;
        margin-bottom: 8px;
        }

        .logo-section img {
        width: 100%;
        max-width: 50px;
        height: auto;
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
        box-shadow: 0 20px 60px rgba(22, 163, 74, 0.08);
        width: 100%;
        max-width: 420px;
        position: relative;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .login-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 4px; height: 100%;
        background: linear-gradient(180deg,
            var(--blora-green-deep)   0%,
            var(--blora-green)        25%,
            var(--blora-green-bright) 50%,
            var(--blora-green)        75%,
            var(--blora-green-deep)   100%);
        background-size: 100% 200%;
        animation: sidebarAccent 6s ease-in-out infinite;
        }

        @keyframes sidebarAccent {
        0%, 100% { background-position: 0% 0%; }
        50%      { background-position: 0% 100%; }
        }

        .login-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 24px 72px rgba(22, 163, 74, 0.12);
        }

        .login-title {
        font-size: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--blora-green-deep) 0%, var(--blora-green) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
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
        border-color: var(--blora-green);
        background: #FFFFFF;
        box-shadow: 0 0 0 3px var(--blora-green-glow2);
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
        background: var(--blora-green);
        color: #FFFFFF;
        border: none;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.3px;
        cursor: pointer;
        transition: all 0.2s ease;
        margin-top: 8px;
        box-shadow: 0 4px 14px var(--blora-green-glow);
        }

        .btn-login:hover {
        background: var(--blora-green-dark);
        transform: translateY(-1px);
        box-shadow: 0 6px 18px var(--blora-green-glow);
        color: #FFFFFF;
        }

        .btn-login:active {
        transform: translateY(0);
        box-shadow: 0 2px 8px var(--blora-green-glow);
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
        color: var(--blora-green);
        font-weight: 600;
        text-decoration: none;
        margin-left: 4px;
        transition: color 0.2s ease;
        }

        .register-link a:hover {
        color: var(--blora-green-dark);
        text-decoration: underline;
        }

        /* ============================================================
        FOOTER DI DALAM CARD – RAPI
        ============================================================ */
        .login-footer {
        margin-top: 24px;
        padding-top: 20px;
        border-top: 1px solid var(--border);
        text-align: center;
        }

        .login-footer .logo-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
        }

        .login-footer .logo-wrapper .logo-img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        filter: drop-shadow(0 2px 6px rgba(22, 163, 74, 0.10));
        transition: transform 0.3s ease;
        }

        .login-footer .logo-wrapper .logo-img:hover {
        transform: scale(1.05);
        }

        .login-footer p {
        font-size: 0.72rem;
        color: var(--text-muted);
        margin: 0;
        line-height: 1.6;
        font-weight: 400;
        }

        .login-footer p strong {
        color: var(--blora-green-deep);
        font-weight: 600;
        }

        .login-footer .login-copyright {
        margin-top: 8px;
        font-size: 0.68rem;
        color: #B0C4DE;
        font-weight: 400;
        letter-spacing: 0.2px;
        }

        /* ============================================================
        RESPONSIVE
        ============================================================ */
        @media (max-width: 576px) {
        body { padding: 12px; }

        .login-card {
            padding: 28px 20px 24px 20px;
            border-radius: 16px;
        }

        .login-title { font-size: 1.2rem; }

        .login-subtitle {
            font-size: 0.72rem;
            margin-bottom: 22px;
        }

        .logo-section img { max-width: 44px; }

        .form-control {
            padding: 10px 14px;
            font-size: 0.82rem;
        }

        .btn-login {
            padding: 11px 16px;
            font-size: 0.82rem;
        }

        .login-footer {
            margin-top: 20px;
            padding-top: 16px;
        }

        .login-footer .logo-wrapper .logo-img {
            width: 80px;
            height: 80px;
        }

        .login-footer p { font-size: 0.65rem; }

        .login-footer .login-copyright { font-size: 0.62rem; }
        }

        @media (max-width: 360px) {
        .login-title { font-size: 1rem; }

        .logo-section img { max-width: 36px; }

        .form-control {
            font-size: 0.75rem;
            padding: 8px 12px;
        }

        .btn-login {
            font-size: 0.75rem;
            padding: 10px 14px;
        }

        .login-footer .logo-wrapper .logo-img {
            width: 70px;
            height: 70px;
        }
        }
    </style>
    </head>

    <body>

    <!-- BACKGROUND DECORATION -->
    <div class="bg-decoration">
        <div class="bg-grid"></div>
        <div class="bg-blob bg-blob-1"></div>
        <div class="bg-blob bg-blob-2"></div>
        <div class="bg-blob bg-blob-3"></div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-wrapper">

        <!-- LOGIN CARD -->
        <div class="login-card">

        <!-- Logo Atas -->
        <div class="logo-section">
            <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
            {{-- <img src="/assets/icon/pupr.png" alt="Logo PUPR"> --}}
        </div>

        <!-- Title -->
        <h1 class="login-title">Mas Jaki</h1>
        <p class="login-subtitle">
            Sistem Informasi Pembina Jasa Konstruksi
        </p>

        <!-- Form -->
        {{-- <form action="/login" method="POST">
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

        </form> --}}


        <!-- Form -->
<form action="{{ route('login') }}" method="POST">
    @csrf

    {{-- Pesan error login --}}
    @if ($errors->has('pesanlogin'))
        <div class="alert alert-danger" style="border-radius:10px; font-size:0.82rem; padding:10px 14px;">
            <i class="fas fa-exclamation-circle"></i>
            {{ $errors->first('pesanlogin') }}
        </div>
    @endif

    <!-- Email -->
    <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <input
            type="email"
            name="email"
            id="email"
            class="form-control @error('email') is-invalid @enderror"
            placeholder="Masukkan email"
            value="{{ old('email') }}"
            required
            autocomplete="email"
        >
        @error('email')
            <small style="color:var(--danger); font-size:0.72rem;">{{ $message }}</small>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            class="form-control @error('password') is-invalid @enderror"
            placeholder="Masukkan password"
            required
            autocomplete="current-password"
        >
        @error('password')
            <small style="color:var(--danger); font-size:0.72rem;">{{ $message }}</small>
        @enderror
    </div>

    <!-- Submit -->
    <button type="submit" class="btn-login">
        <i class="fas fa-sign-in-alt"></i>
        <span>Masuk</span>
    </button>

    <!-- Register -->
    <div class="register-link">
        Belum punya akun? <a href="{{ url('/daftar') }}">Daftar Sekarang</a>
    </div>
</form>


        <!-- FOOTER DI DALAM CARD -->
        <div class="login-footer">
            <div class="logo-wrapper">
            <img
                src="{{ asset('assets/icon/dpuprblora.png') }}"
                alt="Logo DPUPR Blora"
                class="logo-img"
            >
            </div>
            <p>
            <strong>Dinas Pekerjaan Umum dan Penataan Ruang</strong><br>
            Kabupaten Blora, Provinsi Jawa Tengah
            </p>
            <p class="login-copyright">
            &copy; {{ date('Y') }} SIPJAKI KABUPATEN BLORA
            </p>
        </div>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
