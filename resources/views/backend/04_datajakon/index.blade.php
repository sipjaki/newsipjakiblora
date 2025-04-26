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
                    <a href="/bebujkkonstruksi">
                        <div class="info-box"
                             style="transition: background-color 0.3s, color 0.3s; background-color: #156f2a; color: white;"
                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                             onmouseout="this.style.backgroundColor='#156f2a'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
                            <span class="info-box-icon">
                                <img src="/assets/icon/pupr.png" alt="" width="40">
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">BUJK Konstruksi</span>
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
                    <a href="/bebujkkonsultan">
                        <div class="info-box"
                             style="transition: background-color 0.3s, color 0.3s; background-color: #156f2a; color: white;"
                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                             onmouseout="this.style.backgroundColor='#156f2a'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
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
                             style="transition: background-color 0.3s, color 0.3s; background-color: #156f2a; color: white;"
                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                             onmouseout="this.style.backgroundColor='#156f2a'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
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

                <div class="col-md-3 col-sm-6 col-12">
                    <a href="/404">
                        <div class="info-box"
                             style="transition: background-color 0.3s, color 0.3s; background-color: #156f2a; color: white;"
                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.progress-description').style.color='black';"
                             onmouseout="this.style.backgroundColor='#156f2a'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.progress-description').style.color='white';">
                            <span class="info-box-icon">
                                <img src="/assets/icon/pupr.png" alt="" width="40">
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Data Statistik BUJK</span>
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

                <!-- /.col -->


            </div>

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
