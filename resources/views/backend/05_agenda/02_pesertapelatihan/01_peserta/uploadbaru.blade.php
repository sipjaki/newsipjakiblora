<style>
.cert-wrapper {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "Times New Roman", Times, serif;
}

.cert-container {
    width: 297mm; /* A4 landscape width */
    height: 210mm; /* A4 landscape height */
    background-color: #f1f8e9;
    border: 15px solid #2e7d32;
    padding: 30px;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
    position: relative;
    box-sizing: border-box;
}

.cert-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.cert-logos {
    display: flex;
    gap: 10px; /* jarak sedikit antar logo */
}

.cert-title {
    text-align: center;
    margin-bottom: 30px;
}

.cert-content {
    margin: 30px 0;
    line-height: 1.6;
}

.cert-signature {
    text-align: right;
    margin-top: 40px;
}

.cert-signature-line {
    border-top: 1px solid #000;
    width: 200px;
    margin-left: auto;
    margin-top: 60px;
}

.cert-footer {
    text-align: center;
    margin-top: 20px;
    font-size: 0.9em;
}

/* Heading styles */
.cert-h1 {
    font-size: 20px;
    margin: 0;
    color: #1b5e20;
}

.cert-h2 {
    font-size: 18pt;
    margin: 10px 0;
    color: #2e7d32;
}

.cert-h3 {
    font-size: 14pt;
    margin: 5px 0;
}

.cert-hr {
    border: 1px solid #2e7d32;
    margin: 20px 0;
}

.cert-highlight {
    font-weight: bold;
    color: #1b5e20;
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
                        <!--begin::Quick Example-->

                        <div class="cert-container">
                            <div class="cert-header" style="text-align: center;">
                                <!-- Logo di atas -->
                                <div class="cert-logos" style="margin-bottom: 10px;">
                                    <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                                    <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                                </div>

                                <!-- Teks di bawah logo -->
                                <div>
                                    <h3 class="cert-h3" style="margin: 5px 0;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA </h3>
                                    <h3 class="cert-h3" style="margin: 0;">PROVINSI JAWA TENGAH</h3>
                                </div>
                            </div>
                            <hr class="cert-hr">

                            <div class="cert-title">
                                <h1 class="cert-h1">SURAT KETERANGAN</h1>
                                <h2 class="cert-h2">Nomor : 700.1/7002.35</h2>
                            </div>

                            <div class="cert-content">
                                <p style="text-align: center;">diberikan kepada</p>

                                <h2 class="cert-h2" style="text-align: center; margin: 20px 0;">Muhammad Yusuf Zaqi Efendi, S.E</h2>

                                <h3 class="cert-h3" style="text-align: center;">Sebagai</h3>
                                <h2 class="cert-h2" style="text-align: center; margin: 15px 0;">PESERTA</h2>

                                <p style="text-align: justify; text-indent: 50px; margin: 0 50px;">
                                    Kegiatan <span class="cert-highlight">Workshop Pengelolaan Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI)</span> yang diselenggarakan oleh Balai Jasa Konstruksi Dinas PU Bina Marga dan Cipta Karya Provinsi Jawa Tengah pada tanggal 25 September 2024 di Kota Surakarta meliputi 6 jam pelajaran.
                                </p>
                            </div>

                            <div class="cert-signature">
                                <p>Surakarta, 25 September 2024</p>
                                <p>KEPALA DINAS PEKERJAAN UMUM BINA MARGA DAN CIPTA KARYA</p>
                                <p>PROVINSI JAWA TENGAH</p>

                                <div class="cert-signature-line"></div>

                                <p><strong>DR. IR. AR HANUNG TRIVONO, M.SI</strong></p>
                                <p>PEKBINA UTAMA MADYA</p>
                                <p>NIP. 19661129 199203 1005</p>
                            </div>

                            <div class="cert-footer">
                                <p>Dokumen ini diterbitkan secara resmi oleh Dinas PU Bina Marga dan Cipta Karya Provinsi Jawa Tengah</p>
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
