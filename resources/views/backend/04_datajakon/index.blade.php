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
        <br>

        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

        <div class="container-fluid">
            <!--begin::Row-->
  <!-- =========================================================== -->
  {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}
  <!--begin::Row-->



            <div class="row">

  <div class="col-md-3 col-sm-6 col-12">
    <a href="/bebujkkonstruksi" style="text-decoration: none;">
      <div class="dashboard-card card-1">
        <div class="card-content">
          <div class="number-container">
            <img src="/assets/icon/pupr.png" alt="icon" width="40">
          </div>
          <div class="info-content">
            <i class="bi bi-building-gear info-icon"></i>
            <p class="info-text">BUJK Konstruksi</p>
            <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
              <div class="progress-bar" style="width: 70%; background-color: var(--primary-green);"></div>
            </div>
            <small class="text-muted">Pengaturan</small>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <a href="/bebujkkonsultan" style="text-decoration: none;">
      <div class="dashboard-card card-2">
        <div class="card-content">
          <div class="number-container">
            <img src="/assets/icon/pupr.png" alt="icon" width="40">
          </div>
          <div class="info-content">
            <i class="bi bi-file-earmark-text info-icon"></i>
            <p class="info-text">BUJK Konsultasi Konstruksi</p>
            <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
              <div class="progress-bar" style="width: 60%; background-color: #3fa845;"></div>
            </div>
            <small class="text-muted">Pengaturan</small>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <a href="/beasosiasi" style="text-decoration: none;">
      <div class="dashboard-card card-3">
        <div class="card-content">
          <div class="number-container">
            <img src="/assets/icon/pupr.png" alt="icon" width="40">
          </div>
          <div class="info-content">
            <i class="bi bi-people info-icon"></i>
            <p class="info-text">Asosiasi Jasa Konstruksi</p>
            <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
              <div class="progress-bar" style="width: 75%; background-color: #3b9a40;"></div>
            </div>
            <small class="text-muted">Pengaturan</small>
          </div>
        </div>
      </div>
    </a>
  </div>

</div>

                <!-- /.col -->


            </div>

                  {{-- ================================================================================================= --}}


  {{-- ================================================================================== --}}
            <!-- /.col -->
        </div>
        <!--end::Row-->
        </div>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
</section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
