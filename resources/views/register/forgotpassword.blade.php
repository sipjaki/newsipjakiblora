

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title }}! | Sistem Informasi Pembina Jasa Konstruksi </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="/assets/icon/logokabupatenblora.png" type="image/x-icon">
    <style>

.toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #666;
    z-index: 2;
}

        :root {
            --primary: #064420;
            --accent: #8EBE6B;
            --safety: #FFD700;
            --matrix: #00FF00;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(45deg, #022B1A, #064420);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Matrix Animation */
        .matrix-bg {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background:
                linear-gradient(90deg, rgba(0,255,0,0.05) 1px, transparent 1px),
                linear-gradient(180deg, rgba(0,255,0,0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: gridMove 40s linear infinite;
            opacity: 0.3;
        }

        @keyframes gridMove {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 1000px; }
        }

        .construction-animation {
            position: fixed;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            z-index: 0;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); }
            100% { transform: translateY(-100%) rotate(360deg); }
        }

        .crane-icon {
            width: 80px;
            height: 80px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="%238EBE6B" d="M21 6h-5V4h1a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2h1v2H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zm-1 10H4V8h16z"/></svg>');
        }

        /* Login Container */
        .login-container {
            position: relative;
            width: 90%;
            max-width: 450px;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.97);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            backdrop-filter: blur(15px);
            border: 2px solid var(--accent);
            z-index: 2;
            margin: 20px;
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .header-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 120px;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        h1 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .input-group {
        position: relative;
        margin-bottom: 1.5rem;
        width: 100%;
    }

    .input-field {
        width: 100%;
        padding: 1rem 1rem 1rem 3.5rem; /* Tambah padding kiri */
        border: 2px solid #D7E4D3;
        border-radius: 10px;
        font-size: 1rem;
        background: rgba(255,255,255,0.9);
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box; /* Pastikan padding tidak nambah width */
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
        z-index: 2;
        font-size: 1.2rem;
    }

    .footer-links {
        margin-top: 1.5rem;
        text-align: right;
    }

    .footer-links a {
        color: var(--primary);
        text-decoration: none;
        font-size: 0.9rem;
    }

    @media (max-width: 480px) {
        .input-field {
            padding: 0.8rem 0.8rem 0.8rem 3rem;
        }

        .input-icon {
            left: 0.8rem;
            font-size: 1rem;
        }
    }




        .btn-login {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            background: linear-gradient(45deg, var(--accent), var(--primary));
            box-shadow: 0 5px 20px rgba(142,190,107,0.4);
        }

        /* Footer Section */
        .institutional-footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        .footer-logos {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-logos img {
            height: 40px;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .logo {
                width: 100px;
            }

            .footer-logos img {
                height: 35px;
            }
        }

        /* Construction Elements */
        .safety-barrier {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 40px;
            background: repeating-linear-gradient(
                45deg,
                var(--safety),
                var(--safety) 20px,
                #000 20px,
                #000 40px
            );
            animation: barrierGlow 2s ease-in-out infinite;
        }

        @keyframes barrierGlow {
            50% { opacity: 0.8; }
        }
    </style>
</head>
<body>
    <div class="matrix-bg"></div>

    <div class="construction-animation">
        <div class="floating-element crane-icon" style="left: 10%; animation-delay: 0s"></div>
    </div>

    <div class="login-container">
            <p style="text-align: center; color:black;">Forgot Password</p>
            <form action="/forgot-password" method="POST">
                @csrf

                <h2 class="form-title">Lupa Kata Sandi ?</h2>
                <p class="form-subtitle">Masukkan email akun Anda, kami akan mengirimkan tautan reset password.</p>

                <div class="input-group">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn-login">Kirim Tautan Reset</button>

                <div class="footer-links">
                    <a href="/login">Kembali ke <strong>Login</strong></a>
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


@push('scripts')
<script>
    $(document).on('click', '.toggle-password', function () {
        const input = $($(this).attr('toggle'));
        const type = input.attr('type') === 'password' ? 'text' : 'password';
        input.attr('type', type);
        $(this).toggleClass('fa-eye fa-eye-slash');
    });
</script>
@endpush
<script>
    document.querySelectorAll('.toggle-password').forEach(function (icon) {
        icon.addEventListener('click', function () {
            const input = document.querySelector(this.getAttribute('toggle'));
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
