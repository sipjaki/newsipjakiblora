<style>
/* ============================================================
   DASHBOARD STYLE – PUTIH + HIJAU SOLID KHAS BLORA
   Compact version – Font base: 14px
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

    --white:      #FFFFFF;
    --bg-soft:    #F8FAFC;
    --border:     #E9EDF4;
    --border-hover: #D0D8E3;
    --text-dark:  #1A2B4A;
    --text-medium:#4A5A72;
    --text-muted: #6B7A93;
    --danger:     #DC3545;
    --danger-soft:#FEF2F2;
    --warning:    #F59E0B;
    --warning-soft:#FFFBEB;

    --font-base: 14px;
}

/* ============================================================
   DASHBOARD WRAPPER
   ============================================================ */
.dashboard-wrapper {
    padding: 0 4px;
    font-size: var(--font-base);
}

/* ============================================================
   SECTION TITLE – COMPACT
   ============================================================ */
.section-title {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 16px 0 10px 0;
    padding-bottom: 6px;
    border-bottom: 2px solid var(--blora-green-mid);
}
.section-title i {
    font-size: 13px;
    color: var(--blora-green);
    background: var(--blora-green-soft);
    width: 26px; height: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 7px;
}
.section-title h5 {
    font-size: var(--font-base);
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.6px;
}
.section-title .badge-count {
    margin-left: auto;
    background: var(--blora-green-soft);
    color: var(--blora-green-deep);
    font-size: var(--font-base);
    font-weight: 700;
    padding: 2px 8px;
    border-radius: 50px;
    border: 1px solid rgba(22, 163, 74, 0.15);
}

/* ============================================================
   DASHBOARD CARD – COMPACT
   ============================================================ */
.dashboard-card {
    background-color: var(--white);
    border-radius: 10px;
    box-shadow: 0 1px 4px rgba(22, 163, 74, 0.05);
    overflow: hidden;
    transition: all 0.25s ease;
    border: 1px solid var(--border);
    height: 100%;
    position: relative;
}
.dashboard-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 3px; height: 100%;
    background: var(--blora-green);
    opacity: 0;
    transition: opacity 0.25s ease;
}
.dashboard-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(22, 163, 74, 0.10);
    border-color: rgba(22, 163, 74, 0.25);
}
.dashboard-card:hover::before { opacity: 1; }

.card-content {
    padding: 10px 12px;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* ============================================================
   ICON BOX – COMPACT PUTIH + AKSEN HIJAU
   ============================================================ */
.number-container {
    background: var(--white);
    border-radius: 9px;
    width: 42px;
    height: 42px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    position: relative;
    border: 1.5px solid var(--blora-green);
    box-shadow: 0 0 0 3px var(--blora-green-soft);
    transition: all 0.25s ease;
}
.dashboard-card:hover .number-container {
    transform: scale(1.05);
    box-shadow: 0 0 0 4px var(--blora-green-mid);
    background: var(--blora-green);
}
.number-container img {
    width: 22px;
    height: 22px;
    object-fit: contain;
    transition: transform 0.25s ease, filter 0.25s ease;
}
.dashboard-card:hover .number-container img {
    transform: scale(1.08);
    filter: brightness(0) invert(1);
}
.number-container .roman-num {
    font-size: 13px;
    font-weight: 800;
    color: var(--blora-green-deep);
    letter-spacing: -0.3px;
    transition: color 0.25s ease;
}
.dashboard-card:hover .number-container .roman-num {
    color: #FFFFFF;
}

/* ============================================================
   INFO CONTENT – COMPACT
   ============================================================ */
.info-content { flex-grow: 1; min-width: 0; }

.info-text {
    font-size: var(--font-base);
    font-weight: 600;
    color: var(--text-dark);
    margin: 0;
    display: flex;
    align-items: center;
    gap: 5px;
    line-height: 1.25;
}
.info-text i {
    font-size: var(--font-base);
    color: var(--blora-green);
    flex-shrink: 0;
}
.info-text .info-number {
    font-size: 15px;
    font-weight: 800;
    color: var(--blora-green-deep);
    letter-spacing: -0.4px;
    line-height: 1;
}
.small-text {
    font-size: var(--font-base);
    color: var(--text-muted);
    margin: 2px 0 0 0;
    line-height: 1.25;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ============================================================
   GRID SPACING
   ============================================================ */
.dashboard-wrapper .row.g-3 {
    --bs-gutter-x: 0.6rem;
    --bs-gutter-y: 0.6rem;
}

/* ============================================================
   HORIZONTAL SCROLL ROW – COMPACT
   ============================================================ */
.scroll-row {
    display: flex;
    gap: 8px;
    overflow-x: auto;
    padding: 2px 2px 8px 2px;
    scrollbar-width: thin;
    scrollbar-color: var(--blora-green) var(--blora-green-soft);
}
.scroll-row::-webkit-scrollbar { height: 5px; }
.scroll-row::-webkit-scrollbar-track {
    background: var(--blora-green-soft);
    border-radius: 10px;
}
.scroll-row::-webkit-scrollbar-thumb {
    background: var(--blora-green);
    border-radius: 10px;
}
.scroll-row .scroll-item {
    flex: 0 0 200px;
    min-width: 200px;
}

/* ============================================================
   TIMELINE MODERN – COMPACT
   ============================================================ */
.timeline-modern {
    display: flex;
    justify-content: space-between;
    position: relative;
    padding: 14px 0;
    min-width: 640px;
}
.timeline-modern::before {
    content: '';
    position: absolute;
    top: 30px; left: 5%; right: 5%;
    height: 2px;
    background: var(--border);
    z-index: 0;
}
.timeline-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    position: relative;
    z-index: 1;
}
.timeline-dot {
    width: 30px; height: 30px;
    border-radius: 50%;
    background: var(--white);
    border: 2px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    color: var(--text-muted);
    font-weight: 700;
    transition: all 0.25s ease;
    margin-bottom: 6px;
}
.timeline-step.done .timeline-dot {
    background: var(--blora-green);
    border-color: var(--blora-green);
    color: #FFFFFF;
    box-shadow: 0 0 0 3px var(--blora-green-soft);
}
.timeline-step.active .timeline-dot {
    background: var(--blora-green);
    border-color: var(--blora-green);
    color: #FFFFFF;
    box-shadow: 0 0 0 4px var(--blora-green-glow);
    animation: pulseGreen 2s infinite;
}
@keyframes pulseGreen {
    0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.4); }
    70% { box-shadow: 0 0 0 12px rgba(22, 163, 74, 0); }
    100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
}
.timeline-label {
    font-size: var(--font-base);
    font-weight: 600;
    color: var(--text-dark);
    text-align: center;
    margin: 0;
    line-height: 1.2;
}
.timeline-step.done .timeline-label,
.timeline-step.active .timeline-label {
    color: var(--blora-green-deep);
}
.timeline-time {
    font-size: 13px;
    color: var(--text-muted);
    margin: 2px 0 0 0;
    text-align: center;
    line-height: 1.2;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 768px) {
    .welcome-banner { padding: 14px 16px; }
    .welcome-text h2 { font-size: 15px; }
    .welcome-text p { font-size: 13px; }
    .section-title h5 { font-size: 13px; }
    .section-title i { width: 24px; height: 24px; font-size: 12px; }
    .card-content { padding: 9px 10px; gap: 8px; }
    .number-container { width: 38px; height: 38px; border-radius: 8px; }
    .number-container img { width: 20px; height: 20px; }
    .number-container .roman-num { font-size: 12px; }
    .info-text { font-size: 13px; }
    .info-text .info-number { font-size: 14px; }
    .small-text { font-size: 13px; }
    .scroll-row .scroll-item { flex: 0 0 180px; min-width: 180px; }
}

@media (max-width: 480px) {
    .welcome-banner { padding: 12px 14px; border-radius: 10px; }
    .welcome-text h2 { font-size: 14px; }
    .welcome-badge { font-size: 13px; padding: 4px 10px; }
    .scroll-row .scroll-item { flex: 0 0 165px; min-width: 165px; }
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
        <section style="background: var(--bg-soft); width: 100%; min-height: 100vh; padding-bottom: 30px;">

        <!--begin::App Content Header-->
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">
            <div class="dashboard-wrapper">

            @can('super_admin')

            {{-- WELCOME BANNER --}}
            <div class="welcome-banner">
                <div class="welcome-banner-content">
                    <div class="welcome-text">
                        <h2><i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i>Dashboard Statistik Jasa Konstruksi</h2>
                        <p>Master Data Mas Jaki DPUPR Kabupaten Blora</p>
                    </div>
                    <div class="welcome-badge">
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>{{ date('d F Y') }}</span>
                    </div>
                </div>
            </div>

            {{-- SECTION 1 --}}
            <div class="section-title">
                <i class="bi bi-newspaper"></i>
                <h5>Konten & Informasi</h5>
                <span class="badge-count">4 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_berita }}</span> Berita Jakon
                                    </p>
                                    <p class="small-text">Informasi terkini jasa konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_artikel }}</span> Artikel Jakon
                                    </p>
                                    <p class="small-text">Kumpulan tulisan dan opini</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_dokumentasijakon }}</span> Dokumentasi
                                    </p>
                                    <p class="small-text">Kegiatan dan arsip dokumentasi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_bujk }}</span> BUJK
                                    </p>
                                    <p class="small-text">Konsultasi & Konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 2 --}}
            <div class="section-title">
                <i class="bi bi-people-fill"></i>
                <h5>Data Tenaga Kerja Kontrak (TKK)</h5>
                <span class="badge-count">3 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_2024 }}</span> TKK DPUPR 2024
                                    </p>
                                    <p class="small-text">Data tenaga kerja kontrak tahun 2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_2025 }}</span> TKK DPUPR 2025
                                    </p>
                                    <p class="small-text">Data tenaga kerja kontrak tahun 2025</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_semuatkk }}</span> Semua TKK
                                    </p>
                                    <p class="small-text">Gabungan seluruh tenaga kerja kontrak</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 3 --}}
            <div class="section-title">
                <i class="bi bi-folder2-open"></i>
                <h5>Paket Pekerjaan Konstruksi</h5>
                <span class="badge-count">1 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_paketpekerjaan }}</span> Paket Pekerjaan
                                    </p>
                                    <p class="small-text">Informasi detail pekerjaan konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 4 --}}
            <div class="section-title">
                <i class="bi bi-mortarboard-fill"></i>
                <h5>Pelatihan & Sertifikasi SKK</h5>
                <span class="badge-count">4 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_agendapelatihan }}</span> Agenda Pelatihan
                                    </p>
                                    <p class="small-text">Jadwal kegiatan pelatihan</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_pesertapelatihan }}</span> Peserta Pelatihan
                                    </p>
                                    <p class="small-text">Data peserta pelatihan</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_agendaskk }}</span> Agenda SKK
                                    </p>
                                    <p class="small-text">Kegiatan sertifikasi kompetensi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_2025 }}</span> Peserta SKK
                                    </p>
                                    <p class="small-text">Data peserta sertifikasi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 5 --}}
            <div class="section-title">
                <i class="bi bi-clipboard-check-fill"></i>
                <h5>Tertib Jasa Konstruksi</h5>
                <span class="badge-count">4 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_jakontertibusaha }}</span> Tertib Usaha
                                    </p>
                                    <p class="small-text">Pembinaan badan usaha jasa konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_tertibjakonpemanfaatan }}</span> Tertib Pemanfaatan
                                    </p>
                                    <p class="small-text">Tata kelola pengguna jasa konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_tertibjakonpenyelenggaraan }}</span> Tertib Penyelenggaraan
                                    </p>
                                    <p class="small-text">Ketertiban pelaksanaan konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_pengawasanbujk }}</span> Pengawasan BUJK
                                    </p>
                                    <p class="small-text">Monitoring kepatuhan BUJK</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 6 --}}
            <div class="section-title">
                <i class="bi bi-shield-check"></i>
                <h5>K3 & Harga Satuan</h5>
                <span class="badge-count">4 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">{{ $data_kecelakaankerja }}</span> Kecelakaan Kerja
                                    </p>
                                    <p class="small-text">Laporan & analisis kecelakaan kerja</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">45</span> Harga Material
                                    </p>
                                    <p class="small-text">Daftar harga bahan & material</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">30</span> Harga Upah
                                    </p>
                                    <p class="small-text">Standar biaya tenaga kerja</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="info-number">18</span> Harga Peralatan
                                    </p>
                                    <p class="small-text">Referensi harga alat konstruksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- SECTION 7: DIVISI PEKERJAAN --}}
            <div class="section-title">
                <i class="bi bi-card-checklist"></i>
                <h5>Daftar Harga Divisi Pekerjaan</h5>
                <span class="badge-count">9 Divisi</span>
            </div>

            <div class="scroll-row">
                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">I</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Persiapan Pekerjaan</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">II</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Pekerjaan Struktur</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">III</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Pekerjaan Arsitektur</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">IV</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Pekerjaan Lansekap</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">V</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Mekanikal & Elektrikal</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">VI</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Pekerjaan Plumbing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">VII</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Jalan Pada Permukiman</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">VIII</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Drainase Jalan</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="scroll-item">
                    <a href="#" style="text-decoration: none;">
                        <div class="dashboard-card">
                            <div class="card-content">
                                <div class="number-container">
                                    <img src="/assets/icon/pupr.png" alt="icon">
                                </div>
                                <div class="info-content">
                                    <p class="info-text">
                                        <span class="roman-num" style="color:var(--blora-green-deep); font-weight:800;">IX</span>
                                        Divisi Pekerjaan
                                    </p>
                                    <p class="small-text">Jaringan Pipa Luar Gedung</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            @endcan

            {{-- ============================================================ --}}
            {{-- PEKERJA DASHBOARD --}}
            {{-- ============================================================ --}}
            @can('pekerja')

            <div class="welcome-banner">
                <div class="welcome-banner-content">
                    <div class="welcome-text">
                        <h2><i class="bi bi-person-badge-fill" style="margin-right: 6px;"></i>Dashboard Pekerja</h2>
                        <p>Ringkasan aktivitas dan status verifikasi Anda</p>
                    </div>
                    <div class="welcome-badge">
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>{{ date('d F Y') }}</span>
                    </div>
                </div>
            </div>

            <div class="section-title">
                <i class="bi bi-speedometer2"></i>
                <h5>Ringkasan Statistik</h5>
                <span class="badge-count">5 Item</span>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-card">
                        <div class="card-content">
                            <div class="number-container">
                                <img src="/assets/icon/pupr.png" alt="icon">
                            </div>
                            <div class="info-content">
                                <p class="info-text">
                                    <span class="info-number">{{ $jumlahKegiatan }}</span> Kegiatan Konstruksi
                                </p>
                                <p class="small-text">Total kegiatan yang diajukan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-card">
                        <div class="card-content">
                            <div class="number-container">
                                <img src="/assets/icon/pupr.png" alt="icon">
                            </div>
                            <div class="info-content">
                                <p class="info-text">
                                    <span class="info-number">{{ $jumlahDikembalikan }}</span> Berkas Dikembalikan
                                </p>
                                <p class="small-text">Perlu perbaikan berkas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-card">
                        <div class="card-content">
                            <div class="number-container">
                                <img src="/assets/icon/pupr.png" alt="icon">
                            </div>
                            <div class="info-content">
                                <p class="info-text">
                                    <span class="info-number">{{ $jumlahLolos }}</span> Verifikasi DPUPR
                                </p>
                                <p class="small-text">Lolos verifikasi DPUPR</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="dashboard-card">
                        <div class="card-content">
                            <div class="number-container">
                                <img src="/assets/icon/pupr.png" alt="icon">
                            </div>
                            <div class="info-content">
                                <p class="info-text">
                                    <span class="info-number">{{ $jumlahVerifikasiLps }}</span> Lolos LSP
                                </p>
                                <p class="small-text">Lolos verifikasi LSP</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="dashboard-card">
                        <div class="card-content">
                            <div class="number-container">
                                <img src="/assets/icon/pupr.png" alt="icon">
                            </div>
                            <div class="info-content">
                                <p class="info-text">
                                    <span class="info-number">{{ $jumlahDenganSertifikat }}</span> Sertifikat Terbit
                                </p>
                                <p class="small-text">Sertifikat sudah diterbitkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title" style="margin-top: 16px;">
                <i class="bi bi-diagram-3-fill"></i>
                <h5>Alur Proses Verifikasi</h5>
            </div>

            <div class="dashboard-card" style="padding: 14px;">
                <div style="overflow-x: auto;">
                    <div class="timeline-modern">
                        <div class="timeline-step done">
                            <div class="timeline-dot"><i class="bi bi-check-lg"></i></div>
                            <p class="timeline-label">Pengajuan</p>
                            <p class="timeline-time">{{ $jumlahKegiatan }} kegiatan</p>
                        </div>
                        <div class="timeline-step {{ $jumlahDikembalikan > 0 ? 'active' : 'done' }}">
                            <div class="timeline-dot"><i class="bi bi-arrow-repeat"></i></div>
                            <p class="timeline-label">Verifikasi Berkas</p>
                            <p class="timeline-time">{{ $jumlahDikembalikan }} dikembalikan</p>
                        </div>
                        <div class="timeline-step {{ $jumlahLolos > 0 ? 'done' : '' }}">
                            <div class="timeline-dot"><i class="bi bi-check-circle"></i></div>
                            <p class="timeline-label">Verifikasi DPUPR</p>
                            <p class="timeline-time">{{ $jumlahLolos }} lolos</p>
                        </div>
                        <div class="timeline-step {{ $jumlahVerifikasiLps > 0 ? 'done' : '' }}">
                            <div class="timeline-dot"><i class="bi bi-check2-circle"></i></div>
                            <p class="timeline-label">Verifikasi LSP</p>
                            <p class="timeline-time">{{ $jumlahVerifikasiLps }} lolos</p>
                        </div>
                        <div class="timeline-step {{ $jumlahDenganSertifikat > 0 ? 'done' : '' }}">
                            <div class="timeline-dot"><i class="bi bi-file-earmark-check"></i></div>
                            <p class="timeline-label">Sertifikat</p>
                            <p class="timeline-time">{{ $jumlahDenganSertifikat }} terbit</p>
                        </div>
                    </div>
                </div>
            </div>

            @endcan

            </div>
          </div>
        </div>
        <!--end::App Content-->
        </section>
      </main>
      <!--end::App Main-->

      @include('backend.00_administrator.00_baganterpisah.02_footer')
