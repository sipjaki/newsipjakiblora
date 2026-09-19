<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Under Maintenance | DPUPR Kabupaten Blora</title>

  <link rel="icon" href="/assets/icon/logokabupatenblora.png" type="image/x-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* ============================================================
       VARIABEL HIJAU BLORA
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
      --border:       #E9EDF4;
      --text-dark:    #1A2B4A;
      --text-medium:  #4A5A72;
      --text-muted:   #6B7A93;
    }

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      min-height: 100%;
      height: 100%;
    }

    body {
      background: var(--blora-green-soft);
      color: var(--text-dark);
      display: flex;
      align-items: stretch;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }

    /* ============================================================
       BACKGROUND DECORATION
       ============================================================ */
    .bg-decoration {
      position: fixed;
      inset: 0;
      z-index: 0;
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
       LAYOUT
       ============================================================ */
    .main-container {
      position: relative;
      z-index: 1;
      width: 100%;
      display: flex;
      min-height: 100vh;
      padding: 24px;
    }

    /* ============================================================
       KIRI – PANEL HIJAU SOLID BLORA
       ============================================================ */
    .panel-left {
      width: 45%;
      background: var(--blora-green);
      border-radius: 24px;
      padding: 40px 36px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(22, 163, 74, 0.25);
      margin-right: 24px;
    }

    /* dekorasi lingkaran di panel hijau */
    .panel-left::before {
      content: '';
      position: absolute;
      width: 380px; height: 380px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      top: -140px; right: -140px;
    }

    .panel-left::after {
      content: '';
      position: absolute;
      width: 260px; height: 260px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      bottom: -100px; left: -80px;
    }

    /* Logo */
    .brand-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      position: relative;
      z-index: 2;
    }

    .brand-logo img {
      width: 48px;
      height: 48px;
      object-fit: contain;
      background: #FFFFFF;
      padding: 4px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
    }

    .brand-logo-text {
      color: #FFFFFF;
      font-weight: 700;
      font-size: 1rem;
      letter-spacing: 0.3px;
      line-height: 1.2;
    }

    .brand-logo-text small {
      display: block;
      font-size: 0.68rem;
      font-weight: 500;
      opacity: 0.85;
      letter-spacing: 0.4px;
      margin-top: 2px;
    }

    /* Judul Coming Soon */
    .coming-title {
      font-family: 'Comforter Brush', cursive;
      font-size: 4.5rem;
      font-weight: 700;
      color: #FFFFFF;
      margin: 0;
      line-height: 1;
      letter-spacing: 1px;
      position: relative;
      z-index: 2;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.10);
    }

    .coming-subtitle {
      display: inline-block;
      margin-top: 12px;
      padding: 8px 18px;
      background: rgba(255, 255, 255, 0.18);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 30px;
      font-size: 0.72rem;
      font-weight: 600;
      color: #FFFFFF;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      position: relative;
      z-index: 2;
    }

    .panel-left-middle {
      margin: 30px 0;
      position: relative;
      z-index: 2;
    }

    .panel-left-desc {
      color: rgba(255, 255, 255, 0.92);
      font-size: 0.88rem;
      line-height: 1.7;
      font-weight: 400;
      margin-top: 18px;
      max-width: 380px;
    }

    /* Footer panel kiri */
    .panel-left-footer {
      color: rgba(255, 255, 255, 0.85);
      font-size: 0.7rem;
      font-weight: 400;
      letter-spacing: 0.3px;
      position: relative;
      z-index: 2;
      line-height: 1.6;
    }

    .panel-left-footer strong {
      color: #FFFFFF;
      font-weight: 700;
    }

    /* ============================================================
       KANAN – KONTEN PUTIH
       ============================================================ */
    .panel-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px 30px;
      position: relative;
    }

    .content-box {
      width: 100%;
      max-width: 480px;
      background: #FFFFFF;
      border: 1px solid var(--border);
      border-radius: 20px;
      padding: 40px 32px 32px 32px;
      box-shadow: 0 20px 60px rgba(22, 163, 74, 0.08);
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    /* garis aksen atas */
    .content-box::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 4px;
      background: linear-gradient(90deg,
        var(--blora-green-deep)   0%,
        var(--blora-green)        25%,
        var(--blora-green-bright) 50%,
        var(--blora-green)        75%,
        var(--blora-green-deep)   100%);
      background-size: 200% 100%;
      animation: accentSlide 5s ease-in-out infinite;
    }

    @keyframes accentSlide {
      0%, 100% { background-position: 0% 0%; }
      50%      { background-position: 100% 0%; }
    }

    /* Icon maintenance bulat */
    .maintenance-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px auto;
      border-radius: 20px;
      background: var(--blora-green-soft);
      border: 2px solid var(--blora-green-mid);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--blora-green);
      font-size: 2rem;
      position: relative;
      animation: iconPulse 2.5s ease-in-out infinite;
    }

    @keyframes iconPulse {
      0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 var(--blora-green-glow); }
      50%      { transform: scale(1.04); box-shadow: 0 0 0 12px rgba(22, 163, 74, 0); }
    }

    .content-title {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 8px;
      letter-spacing: -0.2px;
    }

    .content-subtitle {
      font-size: 0.8rem;
      color: var(--text-muted);
      line-height: 1.6;
      margin-bottom: 24px;
      font-weight: 400;
    }

    .content-subtitle strong {
      color: var(--blora-green-deep);
      font-weight: 600;
    }

    /* Info box */
    .info-box {
      background: var(--blora-green-soft);
      border: 1px solid rgba(22, 163, 74, 0.15);
      border-radius: 12px;
      padding: 14px 18px;
      margin-bottom: 22px;
      text-align: left;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .info-box i {
      color: var(--blora-green);
      font-size: 1rem;
      margin-top: 2px;
      flex-shrink: 0;
    }

    .info-box p {
      margin: 0;
      font-size: 0.78rem;
      color: var(--text-medium);
      line-height: 1.5;
      font-weight: 500;
    }

    .info-box p strong {
      color: var(--blora-green-deep);
      font-weight: 600;
    }

    /* Tombol Kembali */
    .btn-back {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      padding: 12px 24px;
      background: var(--blora-green);
      color: #FFFFFF;
      border: none;
      border-radius: 10px;
      font-size: 0.88rem;
      font-weight: 600;
      letter-spacing: 0.3px;
      cursor: pointer;
      transition: all 0.2s ease;
      box-shadow: 0 4px 14px var(--blora-green-glow);
      font-family: inherit;
    }

    .btn-back:hover {
      background: var(--blora-green-dark);
      transform: translateY(-1px);
      box-shadow: 0 6px 18px var(--blora-green-glow);
      color: #FFFFFF;
    }

    .btn-back:active {
      transform: translateY(0);
    }

    .btn-back i {
      font-size: 0.9rem;
    }

    /* mini footer */
    .mini-footer {
      margin-top: 20px;
      padding-top: 16px;
      border-top: 1px solid #F0F0F0;
      font-size: 0.68rem;
      color: var(--text-muted);
      letter-spacing: 0.2px;
      line-height: 1.5;
    }

    .mini-footer strong {
      color: var(--blora-green-deep);
      font-weight: 600;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 992px) {
      .main-container { flex-direction: column; padding: 16px; }
      .panel-left {
        width: 100%;
        margin-right: 0;
        margin-bottom: 16px;
        padding: 32px 28px;
        min-height: 280px;
      }
      .coming-title { font-size: 3.5rem; }
      .panel-right { padding: 20px 10px; }
    }

    @media (max-width: 576px) {
      .main-container { padding: 12px; }
      .panel-left {
        padding: 24px 20px;
        border-radius: 18px;
      }
      .coming-title { font-size: 2.6rem; }
      .coming-subtitle { font-size: 0.62rem; padding: 6px 14px; }
      .panel-left-desc { font-size: 0.78rem; }
      .content-box { padding: 30px 22px 24px 22px; border-radius: 16px; }
      .content-title { font-size: 1.1rem; }
      .maintenance-icon { width: 64px; height: 64px; font-size: 1.5rem; }
      .btn-back { font-size: 0.8rem; padding: 11px 20px; }
    }

    @media (max-width: 360px) {
      .coming-title { font-size: 2rem; }
      .content-title { font-size: 1rem; }
    }
  </style>

  <!-- Font Comforter Brush untuk judul -->
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Background Decoration -->
  <div class="bg-decoration">
    <div class="bg-grid"></div>
    <div class="bg-blob bg-blob-1"></div>
    <div class="bg-blob bg-blob-2"></div>
    <div class="bg-blob bg-blob-3"></div>
  </div>

  <!-- MAIN -->
  <div class="main-container">

    <!-- ============================================================
         PANEL KIRI – HIJAU SOLID BLORA
         ============================================================ -->
    <div class="panel-left">

      <!-- Logo -->
      <div class="brand-logo">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Blora">
        <div class="brand-logo-text">
          Mas Jaki
          <small>DPUPR Kabupaten Blora</small>
        </div>
      </div>

      <!-- Judul Coming Soon -->
      <div class="panel-left-middle">
        <h1 class="coming-title">Coming Soon</h1>
        <span class="coming-subtitle">
          <i class="fas fa-tools me-1"></i> Under Maintenance
        </span>

        <p class="panel-left-desc">
          Website sedang dalam proses perawatan dan pengembangan.
          Kami akan segera kembali dengan tampilan yang lebih baik.
        </p>
      </div>

      <!-- Footer -->
      <div class="panel-left-footer">
        <strong>Dinas Pekerjaan Umum dan Penataan Ruang</strong><br>
        Kabupaten Blora · Provinsi Jawa Tengah
      </div>

    </div>

    <!-- ============================================================
         PANEL KANAN – KONTEN PUTIH
         ============================================================ -->
    <div class="panel-right">

      <div class="content-box">

        <!-- Icon Maintenance -->
        <div class="maintenance-icon">
          <i class="fas fa-tools"></i>
        </div>

        <!-- Judul -->
        <h2 class="content-title">Under Maintenance</h2>
           <!-- Info Box -->

        <!-- Tombol Kembali -->
        <button class="btn-back" onclick="goBack()">
          <i class="fas fa-arrow-left"></i>
          <span>Kembali</span>
        </button>

        <!-- Mini Footer -->
        <div class="mini-footer">
          &copy; {{ date('Y') }} <strong>Mas Jaki · DPUPR Kabupaten Blora</strong>
        </div>

      </div>

    </div>

  </div>

  <!-- Script -->
  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</body>
</html>
