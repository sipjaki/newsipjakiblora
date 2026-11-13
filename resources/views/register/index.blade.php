<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun | SIPJAKI Kabupaten Blora</title>

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ============================================================
           VARIABEL – HIJAU KHAS BLORA + SILVER
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

            /* === SILVER PALETTE === */
            --silver-100:   #F5F7FA;
            --silver-200:   #E8ECF1;
            --silver-300:   #D5DBE3;
            --silver-400:   #B8C0CC;
            --silver-500:   #A0AAB8;
            --silver-600:   #8892A0;
            --silver-hover: #C5CCD6;

            --text-dark:    #1A2B4A;
            --text-medium:  #4A5A72;
            --text-muted:   #6B7A93;

            --danger:       #DC3545;
            --danger-soft:  #FEF2F2;
            --danger-mid:   #FECACA;
        }

        /* ============================================================
           GLOBAL FONT – PAKSA SEMUA PAKAI POPPINS
           ============================================================ */
        *,
        *::before,
        *::after {
            font-family: 'Poppins', sans-serif !important;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body,
        div,
        span,
        p,
        a,
        h1, h2, h3, h4, h5, h6,
        label,
        strong,
        small,
        ul, ol, li,
        form,
        fieldset,
        legend,
        button,
        input,
        select,
        textarea,
        optgroup,
        option {
            font-family: 'Poppins', sans-serif !important;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        button,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="search"],
        input[type="number"],
        input[type="date"],
        select,
        textarea {
            font-family: 'Poppins', sans-serif !important;
            font-size: inherit;
            line-height: inherit;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        select option,
        select optgroup,
        datalist option {
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.85rem !important;
            font-weight: 500 !important;
        }

        /* ============================================================
           KEMBALIKAN FONT FONTAWESOME (WAJIB)
           ============================================================ */
        .fa,
        .fas,
        .far,
        .fal,
        .fab,
        .fa-solid,
        .fa-regular,
        .fa-brands,
        .fa::before,
        .fas::before,
        .far::before,
        .fal::before,
        .fab::before,
        .fa-solid::before,
        .fa-regular::before,
        .fa-brands::before,
        [class^="fa-"],
        [class*=" fa-"] {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
            font-weight: 900;
        }

        /* ============================================================
           BODY
           ============================================================ */
        html, body { min-height: 100%; }

        body {
            background: linear-gradient(135deg, #F1F9F3 0%, #E8F5EC 50%, #F0FDF4 100%);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
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

        .bg-blob { position: absolute; border-radius: 50%; filter: blur(2px); }
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
           REGISTER WRAPPER
           ============================================================ */
        .register-wrapper {
            width: 100%;
            max-width: 520px;
            z-index: 1;
        }

        /* ============================================================
           REGISTER CARD – BORDER SILVER TEBAL
           ============================================================ */
        .register-card {
            background: #FFFFFF;
            border: 2px solid var(--silver-300);
            border-radius: 20px;
            padding: 32px 32px 28px 32px;
            box-shadow:
                0 20px 60px rgba(22, 163, 74, 0.08),
                0 0 0 4px rgba(213, 219, 227, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            position: relative;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        .register-card::before {
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
            z-index: 1;
        }

        @keyframes sidebarAccent {
            0%, 100% { background-position: 0% 0%; }
            50%      { background-position: 0% 100%; }
        }

        .register-card:hover {
            transform: translateY(-2px);
            border-color: var(--silver-400);
            box-shadow:
                0 24px 72px rgba(22, 163, 74, 0.12),
                0 0 0 4px rgba(184, 192, 204, 0.40);
        }

        /* --- Header --- */
        .register-header {
            text-align: center;
            margin-bottom: 26px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--silver-200);
        }

        .logo-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 14px;
            margin-bottom: 14px;
        }

        .logo-section img {
            height: 50px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 6px rgba(22, 163, 74, 0.15));
        }

        .register-title {
            font-size: 1.35rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--blora-green-deep) 0%, var(--blora-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 4px;
            letter-spacing: -0.3px;
        }

        .register-subtitle {
            font-size: 0.78rem;
            color: var(--text-muted);
            font-weight: 400;
            line-height: 1.5;
        }

        /* ============================================================
           ALERT
           ============================================================ */
        .alert-register {
            background: var(--danger-soft);
            border: 2px solid var(--danger-mid);
            border-left: 4px solid var(--danger);
            color: #991B1B;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.78rem;
            font-weight: 500;
            margin-bottom: 18px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            animation: shakeAlert 0.4s ease;
        }

        .alert-register i {
            color: var(--danger);
            font-size: 1rem;
            margin-top: 1px;
        }

        .alert-register ul { margin: 0; padding-left: 18px; }
        .alert-register ul li { margin-bottom: 2px; }

        @keyframes shakeAlert {
            0%, 100% { transform: translateX(0); }
            25%      { transform: translateX(-5px); }
            75%      { transform: translateX(5px); }
        }

        .alert-success {
            background: #F0FDF4;
            border: 2px solid var(--silver-300);
            border-left: 4px solid var(--blora-green);
            color: #166534;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.78rem;
            font-weight: 500;
            margin-bottom: 18px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .alert-success i { color: var(--blora-green); font-size: 1rem; }

        /* ============================================================
           FORM
           ============================================================ */
        .form-group { margin-bottom: 16px; position: relative; }

        .form-label {
            display: block;
            font-size: 0.68rem;
            font-weight: 600;
            color: var(--text-medium);
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin-bottom: 5px;
        }

        .input-wrapper { position: relative; }

        .input-wrapper .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--silver-500);
            font-size: 0.9rem;
            pointer-events: none;
            transition: color 0.2s ease;
            z-index: 2;
        }

        .input-wrapper:focus-within .input-icon { color: var(--blora-green); }

        .form-control {
            width: 100%;
            padding: 10px 14px 10px 40px;
            border: 2px solid var(--silver-300);
            border-radius: 10px;
            background: #FFFFFF;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-dark);
            transition: all 0.2s ease;
            outline: none;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.03);
        }

        .form-control::placeholder { color: var(--silver-500); font-weight: 400; }
        .form-control:hover { border-color: var(--silver-400); }

        .form-control:focus {
            border-color: var(--blora-green);
            background: #FFFFFF;
            box-shadow:
                0 0 0 3px var(--blora-green-glow2),
                inset 0 1px 2px rgba(0, 0, 0, 0.03);
        }

        select.form-control {
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%238892A0' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 12px;
            padding-right: 36px;
        }

        select.form-control option {
            font-family: 'Poppins', sans-serif !important;
            font-size: 0.85rem !important;
            font-weight: 500 !important;
            padding: 10px 12px;
            color: var(--text-dark);
            background: #FFFFFF;
            line-height: 1.5;
        }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--silver-500);
            font-size: 0.9rem;
            z-index: 3;
            transition: color 0.2s ease;
        }

        .toggle-password:hover { color: var(--blora-green); }

        .hint-text {
            display: block;
            font-size: 0.65rem;
            color: var(--text-muted);
            margin-top: 4px;
            font-weight: 400;
            line-height: 1.4;
        }

        .error-text {
            display: block;
            font-size: 0.68rem;
            color: var(--danger);
            margin-top: 4px;
            font-weight: 500;
        }

        .form-control.is-invalid {
            border-color: var(--danger);
            background: #FFF5F5;
        }

        /* ============================================================
           BUTTON
           ============================================================ */
        .btn-register {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            background: var(--blora-green);
            color: #FFFFFF;
            border: 2px solid var(--blora-green);
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 12px;
            box-shadow:
                0 4px 14px var(--blora-green-glow),
                inset 0 1px 0 rgba(255, 255, 255, 0.20);
        }

        .btn-register:hover {
            background: var(--blora-green-dark);
            border-color: var(--blora-green-dark);
            transform: translateY(-1px);
            box-shadow:
                0 6px 18px var(--blora-green-glow),
                inset 0 1px 0 rgba(255, 255, 255, 0.20);
            color: #FFFFFF;
        }

        .btn-register:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px var(--blora-green-glow);
        }

        /* ============================================================
           FOOTER
           ============================================================ */
        .footer-links {
            text-align: center;
            margin-top: 18px;
            padding-top: 16px;
            border-top: 2px solid var(--silver-200);
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        .footer-links a {
            color: var(--blora-green);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--blora-green-dark);
            text-decoration: underline;
        }

        .login-footer {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 2px solid var(--silver-200);
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

        .login-footer .logo-wrapper .logo-img:hover { transform: scale(1.05); }

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
            color: var(--silver-500);
            font-weight: 400;
            letter-spacing: 0.2px;
        }

        /* ============================================================
           RESPONSIVE
           ============================================================ */
        @media (max-width: 576px) {
            body { padding: 12px; }
            .register-card { padding: 22px 18px 20px 18px; border-radius: 16px; }
            .register-title { font-size: 1.1rem; }
            .register-subtitle { font-size: 0.7rem; }
            .logo-section img { height: 40px; }
            .form-control { padding: 9px 12px 9px 36px; font-size: 0.8rem; }
            .input-wrapper .input-icon { left: 12px; font-size: 0.82rem; }
            .toggle-password { right: 12px; font-size: 0.82rem; }
            .btn-register { padding: 10px 16px; font-size: 0.82rem; }
            .hint-text { font-size: 0.6rem; }
            .login-footer { margin-top: 20px; padding-top: 16px; }
            .login-footer .logo-wrapper .logo-img { width: 80px; height: 80px; }
            .login-footer p { font-size: 0.65rem; }
            .login-footer .login-copyright { font-size: 0.62rem; }
        }

        @media (max-width: 360px) {
            .register-title { font-size: 0.95rem; }
            .logo-section img { height: 34px; }
            .form-control { font-size: 0.75rem; padding: 8px 10px 8px 34px; }
            .btn-register { font-size: 0.75rem; padding: 9px 14px; }
            .login-footer .logo-wrapper .logo-img { width: 70px; height: 70px; }
        }
    </style>
</head>

<body>

    <!-- Background Decoration -->
    <div class="bg-decoration">
        <div class="bg-grid"></div>
        <div class="bg-blob bg-blob-1"></div>
        <div class="bg-blob bg-blob-2"></div>
        <div class="bg-blob bg-blob-3"></div>
    </div>

    <!-- Register Card -->
    <div class="register-wrapper">
        <div class="register-card">

            <!-- Header -->
            <div class="register-header">
                <div class="logo-section">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Kabupaten Blora">
                </div>
                <h1 class="register-title">Daftar Akun Mas Jaki Blora</h1>
                <p class="register-subtitle">
                    Sistem Informasi Pembina Jasa Konstruksi
                </p>
            </div>

            {{-- ================= ALERT SUCCESS ================= --}}
            @if (session('success'))
                <div class="alert-success">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- ================= ALERT ERROR GLOBAL ================= --}}
            @if ($errors->any())
                <div class="alert-register">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <strong>Terjadi kesalahan:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <!-- Form - pakai route('registernew') -->
            <form action="{{ route('registernew') }}" method="POST" autocomplete="off">
                @csrf

                {{-- Nama Lengkap --}}
                <div class="form-group">
                    <label class="form-label" for="name">Nama Lengkap</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            style="text-transform: uppercase;"
                            placeholder="Sesuai KTP"
                            value="{{ old('name') }}"
                            required
                        >
                    </div>
                    <span class="hint-text">Nama lengkap sesuai dengan KTP</span>
                    @error('name') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Username --}}
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user-tag input-icon"></i>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="form-control @error('username') is-invalid @enderror"
                            placeholder="TKK-NIK Anda"
                            value="{{ old('username') }}"
                            required
                        >
                    </div>
                    <span class="hint-text">Contoh: TKK-331611XXXXXX</span>
                    @error('username') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Pilih Akun --}}
                <div class="form-group">
                    <label class="form-label" for="statusadmin_id">Pilih Jenis Akun</label>
                    <div class="input-wrapper">
                        <i class="fas fa-users input-icon"></i>
                        <select
                            name="statusadmin_id"
                            id="statusadmin_id"
                            class="form-control @error('statusadmin_id') is-invalid @enderror"
                            required
                        >
                            <option value="">-- Pilih Akun --</option>
                            @foreach($statusadmin as $status)
                                <option value="{{ $status->id }}" {{ old('statusadmin_id') == $status->id ? 'selected' : '' }}>
                                    @switch($status->id)
                                        @case(3)
                                            Peserta SKK
                                            @break
                                        @case(4)
                                            Supplier Bahan Bangunan
                                            @break
                                        @case(5)
                                            Supplier Peralatan
                                            @break
                                        @case(6)
                                            Toko Bangunan
                                            @break
                                        @default
                                            {{ $status->nama_status }}
                                    @endswitch
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('statusadmin_id') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Nomor HP --}}
                <div class="form-group">
                    <label class="form-label" for="phone_number">Nomor HP</label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input
                            type="text"
                            id="phone_number"
                            name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror"
                            placeholder="08XXXXXXXXXX"
                            value="{{ old('phone_number') }}"
                            required
                        >
                    </div>
                    @error('phone_number') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="nama@email.com"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>
                    @error('email') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Masukkan password"
                            required
                        >
                        <i class="fas fa-eye toggle-password" data-target="#password"></i>
                    </div>
                    <span class="hint-text">Minimal 8 karakter</span>
                    @error('password') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Ulangi password"
                            required
                        >
                        <i class="fas fa-eye toggle-password" data-target="#password_confirmation"></i>
                    </div>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn-register">
                    <i class="fas fa-user-plus"></i>
                    <span>Daftar Sekarang</span>
                </button>

                {{-- Login Link --}}
                <div class="footer-links">
                    Sudah punya akun?
                    <a href="{{ url('/login') }}">Login di sini</a>
                </div>

            </form>

            <!-- Institutional Footer -->
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

    <!-- Toggle Password Script -->
    <script>
        document.querySelectorAll('.toggle-password').forEach(function (icon) {
            icon.addEventListener('click', function () {
                const target = this.getAttribute('data-target');
                const input  = document.querySelector(target);
                if (!input) return;

                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });
    </script>

</body>
</html>