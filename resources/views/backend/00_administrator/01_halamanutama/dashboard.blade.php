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
    padding: 20px;
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
    padding: 20px 0;
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
    padding: 20px;
    border-top: 1px solid #eee;
}

button {
    background-color: #00AA5B;
    color: white;
    border: none;
    padding: 10px 20px;
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
        margin-bottom: 20px;
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
        <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">


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

{{-- atas  --}}

@can('pekerja')

<div class="row">

    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bebujkkonstruksi">
            <div class="info-box"
                 style="transition: background-color 0.3s, color 0.3s; background: linear-gradient(45deg, #28a745, #f1c40f); color: white;"
                 onmouseover="this.style.background='linear-gradient(45deg, #27ae60, #f39c12)'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                 onmouseout="this.style.background='linear-gradient(45deg, #28a745, #f1c40f)'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
                <span class="info-box-icon">
                    <img src="/assets/icon/pupr.png" alt="" width="40">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Kegiatan Konstruksi</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    {{-- <span class="progress-description"> Pengaturan </span> --}}
                </div>
            </div>
        </a>
    </div>
    <!-- /.col -->

    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bebujkkonsultan">
            <div class="info-box"
                 style="transition: background-color 0.3s, color 0.3s; background: linear-gradient(45deg, #28a745, #f1c40f); color: white;"
                 onmouseover="this.style.background='linear-gradient(45deg, #27ae60, #f39c12)'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                 onmouseout="this.style.background='linear-gradient(45deg, #28a745, #f1c40f)'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
                <span class="info-box-icon">
                    <img src="/assets/icon/pupr.png" alt="" width="40">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">BUJK Konsultasi Konstruksi</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description"> Pengaturan </span>
                </div>
            </div>
        </a>
    </div>
    <!-- /.col -->

    <div class="col-md-3 col-sm-6 col-12">
        <a href="/beasosiasi">
            <div class="info-box"
                 style="transition: background-color 0.3s, color 0.3s; background: linear-gradient(45deg, #28a745, #f1c40f); color: white;"
                 onmouseover="this.style.background='linear-gradient(45deg, #27ae60, #f39c12)'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                 onmouseout="this.style.background='linear-gradient(45deg, #28a745, #f1c40f)'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
                <span class="info-box-icon">
                    <img src="/assets/icon/pupr.png" alt="" width="40">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Asosiasi Jasa Konstruksi</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description"> Pengaturan </span>
                </div>
            </div>
        </a>
    </div>
    <!-- /.col -->

</div>


@endcan

@can('super_admin')

{{-- -------------------------------------------------------- --}}
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Biru muda untuk berita -->
                      <i class="bi bi-newspaper"></i> <!-- Ikon koran -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Berita Jakon</span>
                      <span class="info-box-number">
                        10
                        <small>%</small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Oranye untuk artikel -->
                      <i class="bi bi-hand-thumbs-up-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Artikel Jakon</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk konstruksi -->
                      <i class="bi bi-hammer"></i> <!-- Ikon palu (konstruksi) -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">BUJK Konstruksi</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Kuning terang untuk konsultasi -->
                      <i class="bi bi-person-lines-fill"></i> <!-- Ikon orang (konsultasi) -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">BUJK Konstruksi Konsultasi</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              {{-- -------------------------------------------------------- --}}

{{-- -------------------------------------------------------- --}}
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm">
          <i class="bi bi-building"></i> <!-- Ikon bangunan untuk asosiasi konstruksi -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Asosiasi Konstruksi</span>
          <span class="info-box-number">
            10
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm">
          <i class="bi bi-person-fill"></i> <!-- Ikon orang untuk TKK Binaan DPUPR -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">TKK Binaan DPUPR</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm">
          <i class="bi bi-person-check-fill"></i> <!-- Ikon orang dengan centang untuk TKK Kabupaten Blora -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">TKK Kabupaten Blora</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm">
          <i class="bi bi-file-earmark"></i> <!-- Ikon file untuk Profil Paket Pekerjaan -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Profil Paket Pekerjaan</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

              {{-- -------------------------------------------------------- --}}

{{-- -------------------------------------------------------- --}}
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Biru untuk Agenda Pelatihan -->
          <i class="bi bi-calendar-event"></i> <!-- Ikon kalender untuk acara pelatihan -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Agenda Pelatihan, Workshop, Sosialisasi</span>
          <span class="info-box-number">
            10
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Oranye untuk Peserta -->
          <i class="bi bi-person-lines-fill"></i> <!-- Ikon orang sekelompok untuk peserta -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Peserta Pelatihan, Workshop, Sosialisasi</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Agenda SKK -->
          <i class="bi bi-journal-check"></i> <!-- Ikon jurnal untuk agenda SKK -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Agenda SKK</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Biru untuk Peserta SKK -->
          <i class="bi bi-person-check-fill"></i> <!-- Ikon orang centang untuk peserta SKK -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Peserta SKK</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

              {{-- -------------------------------------------------------- --}}

{{-- -------------------------------------------------------- --}}
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Tertib Jakon Usaha -->
          <i class="bi bi-briefcase"></i> <!-- Ikon tas kerja untuk usaha -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Tertib Jakon Usaha</span>
          <span class="info-box-number">
            10
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Tertib Jakon Pemanfaatan -->
          <i class="bi bi-house-door"></i> <!-- Ikon rumah untuk pemanfaatan -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Tertib Jakon Pemanfaatan</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Tertib Jakon Penyelenggaraan -->
          <i class="bi bi-gear"></i> <!-- Ikon roda gigi untuk penyelenggaraan -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Tertib Jakon Penyelenggaraan</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Pengawasan BUJK -->
          <i class="bi bi-eye"></i> <!-- Ikon mata untuk pengawasan -->
        </span>
        <div class="info-box-content">
          <span class="info-box-text">Pengawasan BUJK</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


              {{-- -------------------------------------------------------- --}}
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Asuransi Konstruksi -->
                      <i class="bi bi-shield-lock"></i> <!-- Ikon pelindung untuk asuransi -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Asuransi Konstruksi</span>
                      <span class="info-box-number">
                        10
                        <small>%</small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Material Bangunan/Supplier -->
                      <i class="bi bi-box"></i> <!-- Ikon kotak untuk material bangunan -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Material Bangunan/Supplier</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Supplier Peralatan Konstruksi -->
                      <i class="bi bi-tools"></i> <!-- Ikon peralatan untuk supplier peralatan konstruksi -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Supplier Peralatan Konstruksi</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm"> <!-- Hijau untuk Toko Bangunan Kab Blora -->
                      <i class="bi bi-shop"></i> <!-- Ikon toko untuk toko bangunan -->
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Toko Bangunan Kab Blora</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


              {{-- -------------------------------------------------------- --}}

              <!--begin::Row-->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->

        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Verifikasi Peserta</h3>
                        <a
                          href="javascript:void(0);"
                          class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                          >View Report</a
                        >
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="fw-bold fs-5">820</span> <span>Visitors Over Time</span>
                        </p>
                        <p class="ms-auto d-flex flex-column text-end">
                          <span class="text-success"> <i class="bi bi-arrow-up"></i> 12.5% </span>
                          <span class="text-secondary">Since last week</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="position-relative mb-4"><div id="visitors-chart"></div></div>
                      <div class="d-flex flex-row justify-content-end">
                        <span class="me-2">
                          <i class="bi bi-square-fill text-primary"></i> This Week
                        </span>
                        <span> <i class="bi bi-square-fill text-secondary"></i> Last Week </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                  <div class="card mb-4">
                    <div class="card-header border-0">
                      <h3 class="card-title">AHSP Konstruksi Umum</h3>
                      <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm"> <i class="bi bi-download"></i> </a>
                        <a href="#" class="btn btn-tool btn-sm"> <i class="bi bi-list"></i> </a>
                      </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-striped align-middle">
                        <thead>
                          <tr>
                            <th>Daftar AHSP Konstruksi Umum</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>
                              <img
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              Satuan Harga Material
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              Satuan Harga Upah Tenaga Kerja
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              Satuan Harga Peralatan
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              SHST Kabupaten Blora
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              Divisi I Persiapan Pekerjaan
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                          </tr>

                          <tr>
                              <td>
                                  <img
                                  src="../../assets/icon/pupr.png"
                                  {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                  alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi II Pekerjaan Struktur
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                src="../../assets/icon/pupr.png"
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                              />
                              Divisi III Pekerjaan Arsitektur
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                              Divisi IV Pekerjaan Lansekap
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi V Pekerjaan Mekanikal & Elektrikal
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi VI Pekerjaan Plumbing
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi VII Jalan Pada Permukiman
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi VIII Drainase Jalan
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                src="../../assets/icon/pupr.png"
                                {{-- src="../../assets/00_administrator/dist/assets/img/default-150x150.png" --}}
                                alt="Product 1"
                                class="rounded-circle img-size-32 me-2"
                                />
                                Divisi IX Pekerjaan Pipa di Luar Bangunan Gedung
                            </td>
                            <td>----</td>

                            <td>
                                <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a>
                            </td>
                        </tr>

                        {{-- src="../../assets/icon/logopupr.png" --}}

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>


                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Statistik Rantai Pasok</h3>
                        <a
                          href="javascript:void(0);"
                          class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                          >View Report</a
                        >
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="fw-bold fs-5">453</span>
                          {{-- <span>Sales Over Time</span> --}}
                        </p>
                        <p class="ms-auto d-flex flex-column text-end">
                          <span class="text-success"> <i class="bi bi-arrow-up"></i> 33.1% </span>
                          <span class="text-secondary">Since Past Year</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="position-relative mb-4"><div id="sales-chart"></div></div>
                      <div class="d-flex flex-row justify-content-end">
                        <span class="me-2">
                          <i class="bi bi-square-fill text-primary"></i> This year
                        </span>
                        <span> <i class="bi bi-square-fill text-secondary"></i> Last year </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header border-0">
                      <h3 class="card-title">Statistik Kunjungan Web Mas Jaki Blora</h3>
                      <div class="card-tools">
                        <a href="#" class="btn btn-sm btn-tool"> <i class="bi bi-download"></i> </a>
                        <a href="#" class="btn btn-sm btn-tool"> <i class="bi bi-list"></i> </a>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-success fs-2">
                          <svg height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"></path>
                          </svg>
                        </p>
                        <p class="d-flex flex-column text-end">
                          <span class="fw-bold">
                            <i class="bi bi-graph-up-arrow text-success"></i> {{ $conversionRate }}%
                          </span>
                          {{-- <span class="text-secondary">CONVERSION RATE</span> --}}
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-info fs-2">
                          <svg height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                          </svg>
                        </p>
                        <p class="d-flex flex-column text-end">
                          <span class="fw-bold">
                            <i class="bi bi-graph-up-arrow text-info"></i> {{ $visitCount }} Orang
                          </span>
                          {{-- <span class="text-secondary">SALES RATE</span> --}}
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="d-flex justify-content-between align-items-center mb-0">
                        <p class="text-danger fs-2">
                          <svg height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                          </svg>
                        </p>
                        <p class="d-flex flex-column text-end">
                          <span class="fw-bold">
                            <i class="bi bi-graph-down-arrow text-danger"></i> {{ $registrationRate }}%
                          </span>
                          {{-- <span class="text-secondary">REGISTRATION RATE</span> --}}
                        </p>
                      </div>
                      <!-- /.d-flex -->
                    </div>
                  </div>
                        <!-- /.d-flex -->
                    </div>
                  </div>
                </div>
                <!-- /.col-md-6 -->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
            @endcan
          </div>


          <!--end::App Content-->
            </section>
        </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
