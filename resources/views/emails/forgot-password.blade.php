<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #eeeeee;
            border-radius: 8px;
        }
        a.button {
            display: inline-block;
            background: #064420;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password Request</h2>
        <p>Hi, {{ $user->name }}.</p>
        <p>Kami menerima permintaan untuk mereset password akun Anda. Klik tombol di bawah untuk mereset password Anda:</p>
        <p>
            <a href="{{ url('reset-password', $token) }}" class="button">Reset Password</a>
        </p>
        <p>Jika Anda tidak merasa meminta reset password, abaikan email ini.</p>
        <p>Terima kasih,</p>
        <p>Tim Kami</p>
    </div>
</body>
</html>
