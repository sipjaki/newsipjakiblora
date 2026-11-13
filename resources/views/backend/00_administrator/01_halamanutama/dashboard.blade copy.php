
<style>
    /* Reset dan Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 1000px;
    margin: 30px auto;
    padding: 16px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #2c3e50;
}

/* Timeline Container */
.timeline-container {
    padding: 16px 0;
    position: relative;
    overflow-x: auto;
}

.timeline {
    display: flex;
    justify-content: space-between;
    min-width: 800px;
    position: relative;
}

/* Checkpoint Styles */
.checkpoint {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    flex: 1;
    min-width: 150px;
}

/* Dot Indicator */
.dot {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    margin-bottom: 12px;
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 12px;
}

.checkpoint.completed .dot {
    background-color: #00AA5B; /* Hijau Tokopedia */
    box-shadow: 0 0 0 4px rgba(0, 170, 91, 0.2);
}

.checkpoint.current .dot {
    background-color: #00AA5B;
    box-shadow: 0 0 0 4px rgba(0, 170, 91, 0.5);
    animation: pulse 1.5s infinite;
}

.checkpoint.pending .dot {
    background-color: #E0E0E0;
    color: #999;
}

/* Connector Line */
.connector {
    position: absolute;
    height: 3px;
    top: 11px;
    left: 60%;
    right: -40%;
    background-color: #E0E0E0;
    z-index: 1;
    transition: background-color 0.3s ease;
}

.connector.active {
    background-color: #00AA5B;
}

/* Checkpoint Content */
.checkpoint-content {
    text-align: center;
    margin-top: 10px;
    padding: 0 5px;
}

.time {
    font-size: 12px;
    color: #666;
    margin-bottom: 5px;
    min-height: 18px;
}

.message {
    font-size: 14px;
    font-weight: 500;
    color: #2c3e50;
}

.checkpoint.completed .message,
.checkpoint.current .message {
    color: #00AA5B;
    font-weight: 600;
}

/* Control Panel */
.control-panel {
    margin-top: 40px;
    text-align: center;
    padding: 16px;
    border-top: 1px solid #eee;
}

button {
    background-color: #00AA5B;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #008a4a;
}

.status-info {
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

/* Animations */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 170, 91, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(0, 170, 91, 0); }
    100% { box-shadow: 0 0 0 0 rgba(0, 170, 91, 0); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .timeline {
        flex-direction: column;
        min-width: auto;
    }

    .checkpoint {
        flex-direction: row;
        align-items: center;
        margin-bottom: 16px;
        width: 100%;
    }

    .dot {
        margin-bottom: 0;
        margin-right: 15px;
    }

    .connector {
        display: none;
    }

    .checkpoint-content {
        text-align: left;
        margin-top: 0;
    }
}
</style>


@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
            <section style="background: linear-gradient(to bottom, #ffffff); width: 100%; min-height: 100vh;">

        {{-- <section style="background-image: url('/assets/00_android/iconmenu/halamanhijau3.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}


        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!-- Info boxes -->

              @can('super_admin')

<!-- Tambahkan ini di dalam <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
    :root {
        --primary-green: #42b549; /* Hijau Tokopedia */
        --dark-green: #2c9e32;
        --light-green: #e8f5e9;
        --accent-green: #c8e6c9;
    }

    .dashboard-card {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        height: 100%;
        position: relative;
    }

    .dashboard-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background-color: var(--primary-green);
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .card-content {
        padding: 25px 20px;
        display: flex;
        align-items: center;
    }

    .number-container {
        background-color: var(--primary-green);
        border-radius: 14px;
        width: 80px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px;
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(66, 181, 73, 0.3);
    }

    .info-icon {
        font-size: 36px;
        color: white;
    }

    .info-content {
        flex-grow: 1;
    }

    .info-text {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        color: #333;
        letter-spacing: 0.3px;
    }

    .small-text {
        font-size: 13px;
        color: #777;
    }

    /* Warna khusus untuk setiap kartu */
    .card-1 .number-container { background-color: #42b549; }
    .card-2 .number-container { background-color: #3fa845; }
    .card-3 .number-container { background-color: #3b9a40; }
    .card-4 .number-container { background-color: #378d3c; }

    .card-1::before { background-color: #42b549; }
    .card-2::before { background-color: #3fa845; }
    .card-3::before { background-color: #3b9a40; }
    .card-4::before { background-color: #378d3c; }

    @media (max-width: 576px) {
        .number-container {
            width: 60px;
            height: 60px;
        }

        .info-icon {
            font-size: 26px;
        }

        .info-text {
            font-size: 14px;
        }

        .card-content {
            padding: 20px 15px;
        }
    }

    .info-text {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
        display: flex;
        align-items: baseline;
        gap: 6px;
    }

    .info-number {
        font-size: 20px;
        font-weight: 800;
        color: var(--primary-green);
        text-shadow: 0 1px 3px rgba(66, 181, 73, 0.3);
        letter-spacing: -0.5px;
        background: linear-gradient(to bottom right, #4caf50, #66bb6a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .info-text span {
        font-weight: 600;
        color: #333;
    }
</style>
<div class="row">
    <!-- 1. Berita Jakon -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-newspaper" style="margin-right: 5px;"></i>
                            <span class="info-number">{{$data_berita}}</span> Berita Jakon
                        </p>
                        <p class="small-text">Informasi terkini seputar jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 2. Artikel Jakon -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-journal-text" style="margin-right: 5px;"></i>
                            <span class="info-number">{{$data_artikel}}</span> Artikel Jakon
                        </p>
                        <p class="small-text">Kumpulan tulisan dan opini</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 3. Dokumentasi Jakon -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-camera-reels" style="margin-right: 5px;"></i>
                            <span class="info-number">{{$data_dokumentasijakon}}</span> Dokumentasi Kegiatan
                        </p>
                        <p class="small-text">Kegiatan dan arsip dokumentasi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 4. BUJK Konsultasi & Konstruksi -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-building" style="margin-right: 5px;"></i>
                            <span class="info-number">{{$data_bujk}}</span> BUJK Konsultasi & Konstruksi
                        </p>
                        <p class="small-text">Data dan pengelolaan perusahaan</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

{{-- /====================================== --}}
<div class="row" style="margin-top: 10px;">
    <!-- 1. TKK DPUPR 2024 -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-people-fill" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_2024}}</span> TKK DPUPR 2024
                        </p>
                        <p class="small-text">Data tenaga kerja kontrak tahun 2024</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 2. TKK DPUPR 2025 -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-person-workspace" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_2025}}</span> TKK DPUPR 2025
                        </p>
                        <p class="small-text">Data tenaga kerja kontrak tahun 2025</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 3. SEMUA TKK -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-people" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_semuatkk}}</span> Semua TKK
                        </p>
                        <p class="small-text">Gabungan seluruh tenaga kerja kontrak</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 4. PROFIL PAKET PEKERJAAN -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-folder2-open" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_paketpekerjaan}}</span> Profil Paket Pekerjaan
                        </p>
                        <p class="small-text">Informasi detail pekerjaan konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <!-- 1. Agenda Pelatihan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-calendar-event" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_agendapelatihan}}</span> Agenda Pelatihan
                        </p>
                        <p class="small-text">Jadwal dan kegiatan pelatihan jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 2. Peserta Pelatihan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-person-badge" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_pesertapelatihan}}</span> Peserta Pelatihan
                        </p>
                        <p class="small-text">Data peserta yang mengikuti pelatihan</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 3. Agenda SKK -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-calendar-check" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_agendaskk}}</span> Agenda SKK
                        </p>
                        <p class="small-text">Agenda kegiatan sertifikasi kompetensi kerja</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 4. Peserta SKK -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-person-lines-fill" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_2025}}</span> Peserta SKK
                        </p>
                        <p class="small-text">Data peserta sertifikasi kompetensi kerja</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <!-- 1. Tertib Jakon Usaha -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-briefcase-fill" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_jakontertibusaha}}</span> Tertib Usaha
                        </p>
                        <p class="small-text">Pengawasan dan pembinaan badan usaha jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 2. Tertib Jakon Pemanfaatan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-people-fill" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_tertibjakonpemanfaatan}}</span> Tertib Pemanfaatan
                        </p>
                        <p class="small-text">Tata kelola pelaku dan pengguna jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 3. Tertib Jakon Penyelenggaraan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-gear-wide-connected" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_tertibjakonpenyelenggaraan}}</span> Tertib Penyelenggaraan
                        </p>
                        <p class="small-text">Ketertiban dalam pelaksanaan konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 4. Pengawasan BUJK -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">

                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-building-check" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_pengawasanbujk}}</span> Pengawasan BUJK
                        </p>
                        <p class="small-text">Monitoring kepatuhan badan usaha jasa konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <!-- 1. Kecelakaan Kerja -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">

                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-exclamation-triangle-fill" style="margin-right: 6px;"></i>
                            <span class="info-number">{{$data_kecelakaankerja}}</span> Kecelakaan Kerja
                        </p>
                        <p class="small-text">Data laporan dan analisis kecelakaan kerja konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 2. Satuan Harga Material -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
      <img src="/assets/icon/pupr.png" alt="icon" width="40">

                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-box-seam" style="margin-right: 6px;"></i>
                            <span class="info-number">45</span> Satuan Harga Material
                        </p>
                        <p class="small-text">Daftar harga bahan dan material konstruksi terkini</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 3. Satuan Harga Upah Pekerjaan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">

                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-person-workspace" style="margin-right: 6px;"></i>
                            <span class="info-number">30</span> Satuan Harga Upah Pekerjaan
                        </p>
                        <p class="small-text">Standar biaya tenaga kerja dan jasa pelaksanaan proyek</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- 4. Satuan Harga Peralatan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">

                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <i class="bi bi-tools" style="margin-right: 6px;"></i>
                            <span class="info-number">18</span> Satuan Harga Peralatan
                        </p>
                        <p class="small-text">Referensi harga sewa dan kepemilikan alat konstruksi</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Judul Bagian -->
<div style="text-align: center; margin-bottom: 20px; margin-top: 20px">
    <h4 style="font-weight: bold; color: #ffffff; border-bottom: 3px solid #ffcc00; display: inline-block; padding-bottom: 5px;">
        <i class="bi bi-card-checklist" style="margin-right: 8px; color: #ffb703;"></i>
        Daftar Harga Divisi Pekerjaan
    </h4>
</div>

<div class="row" style="margin-top: 10px;">
    <!-- Divisi Pekerjaan I -->
    <div class="col-md-3 col-sm-6 col-12" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">I</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Persiapan Pekerjaan</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan II -->
    <div class="col-md-3 col-sm-6 col-12" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">II</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Struktur</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan III -->
    <div class="col-md-3 col-sm-6 col-12" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">III</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Arsitektur</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan IV -->
    <div class="col-md-3 col-sm-6 col-12" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">IV</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Lansekap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan V -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">V</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Mekanikal & Elektrikal</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan VI -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">VI</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Plumbing</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan VII -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">VII</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Jalan Pada Permukiman</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan VIII -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">VIII</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Drainase Jalan</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Divisi Pekerjaan IX -->
    <div class="col-md-3 col-sm-6 col-12" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="#" style="text-decoration: none;">
            <div class="dashboard-card card-1">
                <div class="card-content">
                    <div class="number-container">
                        <img src="/assets/icon/pupr.png" alt="icon" width="40">
                    </div>
                    <div class="info-content">
                        <p class="info-text">
                            <span class="info-number">IX</span> Divisi Pekerjaan
                        </p>
                        <p class="small-text">Pekerjaan Jaringan Pipa Di Luar Bangunan Gedung</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


@endcan

{{-- atas  --}}

@can('pekerja')

<style>
        :root {
            --primary-green: #42b549; /* Hijau Tokopedia */
            --dark-green: #2c9e32;
            --light-green: #e8f5e9;
            --accent-green: #c8e6c9;
        }


        .dashboard-card {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            height: 100%;
            position: relative;
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background-color: var(--primary-green);
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .card-content {
            padding: 25px 20px;
            display: flex;
            align-items: center;
        }

        .number-container {
            background-color: var(--primary-green);
            border-radius: 14px;
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(66, 181, 73, 0.3);
        }

        .animated-number {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            color: white;
        }

        .info-content {
            flex-grow: 1;
        }

        .info-icon {
            font-size: 28px;
            margin-bottom: 8px;
            color: var(--primary-green);
        }

        .info-text {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
            color: #333;
            letter-spacing: 0.5px;
        }

        /* Warna khusus untuk setiap kartu */
        .card-1 .number-container {
            background-color: #42b549;
        }

        .card-2 .number-container {
            background-color: #3fa845;
        }

        .card-3 .number-container {
            background-color: #3b9a40;
        }

        .card-4 .number-container {
            background-color: #378d3c;
        }

        .card-5 .number-container {
            background-color: #338037;
        }

        .card-1 .info-icon {
            color: #42b549;
        }

        .card-2 .info-icon {
            color: #3fa845;
        }

        .card-3 .info-icon {
            color: #3b9a40;
        }

        .card-4 .info-icon {
            color: #378d3c;
        }

        .card-5 .info-icon {
            color: #338037;
        }

        @media (max-width: 576px) {
            .number-container {
                width: 60px;
                height: 60px;
            }

            .animated-number {
                font-size: 1.5rem;
            }

            .info-icon {
                font-size: 22px;
            }

            .info-text {
                font-size: 14px;
            }

            .card-content {
                padding: 20px 15px;
            }
        }
    </style>

    <div class="container my-5">
        <div class="row">
            <!-- Baris 1: 3 kolom -->
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="dashboard-card card-1">
                    <div class="card-content">
                        <div class="number-container">
                            <h4 class="animated-number">{{$jumlahKegiatan}}</h4>
                        </div>
                        <div class="info-content">
                            <div class="info-icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <p class="info-text">Kegiatan Konstruksi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="dashboard-card card-2">
                    <div class="card-content">
                        <div class="number-container">
                            <h4 class="animated-number">{{$jumlahDikembalikan}}</h4>
                        </div>
                        <div class="info-content">
                            <div class="info-icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <p class="info-text">Berkas Di Kembalikan</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="dashboard-card card-3">
                    <div class="card-content">
                        <div class="number-container">
                            <h4 class="animated-number">{{$jumlahLolos}}</h4>
                        </div>
                        <div class="info-content">
                            <div class="info-icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <p class="info-text">Verifikasi DPUPR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Baris 2: 2 kolom -->
            <div class="col-md-6 col-sm-6 col-12 mb-4">
                <div class="dashboard-card card-4">
                    <div class="card-content">
                        <div class="number-container">
                            <h4 class="animated-number">{{$jumlahVerifikasiLps}}</h4>
                        </div>
                        <div class="info-content">
                            <div class="info-icon">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <p class="info-text">LOLOS LSP</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-12 mb-4">
                <div class="dashboard-card card-5">
                    <div class="card-content">
                        <div class="number-container">
                            <h4 class="animated-number">{{$jumlahDenganSertifikat}}</h4>
                        </div>
                        <div class="info-content">
                            <div class="info-icon">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <p class="info-text">Sertifikat Terbit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endcan

          </div>


          <!--end::App Content-->
            </section>
        </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
