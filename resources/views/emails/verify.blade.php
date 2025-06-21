<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
        }
        .header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
        .social-icons {
            margin: 10px 0;
        }
        .social-icons img {
            width: 24px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Verifikasi Email</h2>
        </div>
        <div class="content">
            <p>Halo {{ $user->name }},</p>
            <p>
                Silakan verifikasi email Anda dengan mengklik tombol di bawah ini.<br>
                Dengan email yang terverifikasi, kami dapat dengan mudah menghubungi Anda apabila diperlukan.
            </p>
            <a href="{{ url('/verify/' . $user->verification_token) }}" class="button">Verifikasi Email Anda</a>
            <p>
                Jika tombol di atas tidak berfungsi, silakan klik tautan berikut atau salin dan tempel ke peramban Anda:
            </p>
            <p>
                <a href="{{ url('/verify/' . $user->verification_token) }}">{{ url('/verify/' . $user->verification_token) }}</a>
            </p>
            <p>Email ini dibuat secara otomatis. Mohon jangan membalas pesan ini.</p>
            <div class="footer">
                <p>
                    Harap waspada terhadap pihak ketiga yang menggunakan nama kami untuk menawarkan penawaran palsu atau meminta informasi pribadi.
                    Kami tidak pernah meminta kata sandi atau data sensitif lainnya melalui email atau pesan.
                </p>
                <div class="social-icons">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
                <p>
                    Punya pertanyaan? Hubungi kami di: <a href="mailto:customerservice@example.com">customerservice@example.com</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>

