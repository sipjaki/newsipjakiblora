<style>
 .cert-wrapper {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Times New Roman", Times, serif;
            background: linear-gradient(135deg, #e8f5e9 0%, #d7e8d7 100%);
            overflow: hidden;
        }

        .cert-container {
            width: 297mm;
            height: 210mm;
            background: linear-gradient(to right, #f1f8e9 0%, #f9f5e8 100%);
            border: 15px double #2e7d32;
            border-image: linear-gradient(45deg, #2e7d32, #d4af37, #2e7d32) 1;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0,0,0,0.3);
            position: relative;
            box-sizing: border-box;
            overflow: hidden;
            margin-left: 200px;
        }

        /* Construction-themed decorative elements */
        .construction-decoration {
            position: absolute;
            opacity: 0.08;
            z-index: 0;
        }

        .blueprint-grid {
            background-image:
                linear-gradient(to right, #2e7d32 1px, transparent 1px),
                linear-gradient(to bottom, #2e7d32 1px, transparent 1px);
            background-size: 20px 20px;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .construction-icon {
            position: absolute;
            opacity: 0.1;
            z-index: 0;
        }

        /* Crane animation */
        @keyframes craneMove {
            0% { transform: translateX(0) rotate(0deg); }
            50% { transform: translateX(10px) rotate(2deg); }
            100% { transform: translateX(0) rotate(0deg); }
        }

        .crane-animation {
            position: absolute;
            right: 50px;
            bottom: 50px;
            animation: craneMove 4s infinite ease-in-out;
        }

        /* Worker animation */
        @keyframes workerHammer {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(-15deg); }
            100% { transform: rotate(0deg); }
        }

        .worker-animation {
            position: absolute;
            left: 50px;
            bottom: 50px;
        }
        .worker-animation svg {
            animation: workerHammer 1s infinite;
            transform-origin: top center;
        }

        /* Content styling (your existing styles) */
        .cert-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cert-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cert-logos {
            display: flex;
            justify-content: center; /* Center horizontally */
            gap: 20px;
            filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.2));
            width: 100%; /* Take full width */
            margin-bottom: 20px; /* Add some space below */
        }

        .cert-title {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .cert-content {
            margin: 30px 0;
            line-height: 1.6;
            position: relative;
            z-index: 1;
            padding: 0 50px;
        }

        .cert-signature {
            text-align: right;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }



        .cert-footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #2e7d32;
            position: relative;
            z-index: 1;
        }

        .cert-h1 {
            font-size: 32px;
            margin: 0;
            color: #1b5e20;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            letter-spacing: 1px;
        }

        .cert-h2 {
            font-size: 20px;
            margin: 10px 0;
            color: #2e7d32;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .cert-h3 {
            font-size: 16pt;
            margin: 5px 0;
            color: #1b5e20;
        }

        .cert-hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, transparent, #d4af37, #2e7d32, #d4af37, transparent);
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .cert-highlight {
            font-weight: bold;
            color: #1b5e20;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
        }

        .cert-border-decoration {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #d4af37;
            opacity: 0.2;
            z-index: 0;
        }

        .cert-border-decoration:nth-child(1) {
            top: 20px;
            left: 20px;
            border-radius: 50% 50% 0 50%;
        }

        .cert-border-decoration:nth-child(2) {
            top: 20px;
            right: 20px;
            border-radius: 50% 50% 50% 0;
        }

        .cert-border-decoration:nth-child(3) {
            bottom: 20px;
            left: 20px;
            border-radius: 50% 0 50% 50%;
        }

        .cert-border-decoration:nth-child(4) {
            bottom: 20px;
            right: 20px;
            border-radius: 0 50% 50% 50%;
        }

        @page {
            size: A4 landscape;
            margin: 0;
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

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <button
    onclick="history.back()"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
    <!-- Ikon Kembali -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
    </svg>
    Kembali
</button>

        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">


                        <div class="cert-container">
                            <div class="cert-header" style="text-align: center;">
                                <div class="blueprint-grid"></div>

                                <!-- Crane animation -->
                                <div class="crane-animation">
                                    <svg width="80" height="80" viewBox="0 0 24 24" fill="#2e7d32">
                                        <path d="M21 6l-5 5h-3l-2-2H9V8h2l2 2h3l5-5h-2V4h5v5h-2V6zM9 16h2v-2H9v2zm-5 0h2v-2H4v2zm3-5h2V9H7v2zm-3 0h2V9H4v2zm3-5h2V4H7v2z"/>
                                    </svg>
                                </div>

                                <!-- Worker animation -->
                                <div class="worker-animation">
                                    <svg width="80" height="80" viewBox="0 0 24 24" fill="#2e7d32">
                                        <path d="M19 11h-2V9h2v2zm-4 0h-2V9h2v2zm-4 0h-2V9h2v2zm-4 0H7V9h2v2zm-4 0H3V9h2v2zm16-6h-4V3h4v2zm-4 0H7V3h10v2zm4 8h-4v-2h4v2zm-4 0H7v-2h10v2z"/>
                                        <path d="M19 15h-2v-2h2v2zm-4 0h-2v-2h2v2zm-4 0h-2v-2h2v2zm-4 0H7v-2h2v2zm-4 0H3v-2h2v2z"/>
                                    </svg>
                                </div>

                                <!-- Logo di atas -->
                                <div class="cert-logos" style="margin-bottom: 10px;">
                                    <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                                    <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                                </div>

                                <!-- Teks di bawah logo -->
                                {{-- <div>
                                    <h3 class="cert-h3" style="margin: 5px 0;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA </h3>
                                    <h3 class="cert-h3" style="margin: 0;">PROVINSI JAWA TENGAH</h3>
                                </div> --}}
                            </div>
                            <hr class="cert-hr" style="margin-top: -5px;">

                            <div class="cert-title" style="margin-top: -10px;">
                                <h1 class="cert-h1">SURAT KETERANGAN</h1>
                                <h2 class="cert-h2">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
                            </div>

                            <div class="cert-content">
                                <p style="text-align: center;">diberikan kepada</p>

                                {{-- <h2 class="cert-h2" style="text-align: center; margin: 20px 0;">{{$data->namalengkap}}</h2> --}}
                                <h2 style="text-align: center; margin: 20px 0; font-size:28px;" >Miftahul Anam, S.E</h2>

                                <h3 class="cert-h3" style="text-align: center;">Sebagai</h3>
                                <h2 class="cert-h2" style="text-align: center; margin: 15px 0; font-weight:800;">PESERTA</h2>

                                <p style="text-align: justify; text-indent: 50px; margin: 0 50px;">
                                    Kegiatan <span class="cert-highlight"> {{$data->agendapelatihan->namakegiatan}}</span> yang diselenggarakan oleh {{$data->agendapelatihan->asosiasimasjaki->namaasosiasi}} pada tanggal {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                                    di {{$data->agendapelatihan->lokasi}} meliputi {{$data->jampelajaran}} jam pelajaran.
                                </p>
                            </div>

                            <div class="cert-signature">
                                <p style="margin: 0;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong> </p>
                                <p style="margin: 0;"><strong>KEPALA DINAS <br> PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                                <p style="margin: 0;"><strong>KABUPATEN BLORA</strong></p>

                                <div style="margin-right:80px;">
                                    <img src="/assets/icon/capblora.png" alt="" width="80px;">
                                </div>

                                <p style="margin: 0;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                                {{-- <p>PEKBINA UTAMA MADYA</p> --}}
                                <p>NIP. __________</p>
                            </div>
                        </div>

                    </div>
                        <!--end::Quick Example-->

                    </div>

                    <br><br>
                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

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
