<style>
/* Menambahkan font kaligrafi atau aksara sambung */
/* Menambahkan font kaligrafi */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

.nama-sertifikat {
    font-family: 'Great Vibes', cursive;
    font-size: 16px;
    text-align: center;
    color: #bfa144; /* Warna emas klasik */
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    margin: 30px 0;
    letter-spacing: 1px;
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

/* Ornamen latar belakang */
.cert-container::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path fill="%23d4af3780" d="M30,10 Q50,5 70,10 Q95,15 90,40 Q85,65 70,80 Q50,95 30,80 Q15,65 10,40 Q5,15 30,10 Z"/></svg>');
    opacity: 0.1;
    z-index: 0;
}

/* Pita kiri bawah */
.cert-container .ribbon-left {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #d4af37, #2e7d32);
clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
 z-index: 2;
}

.ribbon-left {
    position: relative;
    background-color: #ffcc00; /* Warna pita */
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: flex-end; /* Memindahkan teks ke bawah */
    justify-content: flex-start; /* Menempatkan pita di kiri */
}

.ribbon-text {
    margin-left: 20px; /* Memberikan jarak antara pita dan teks */
    text-align: left;
    font-size: 16px;
    font-weight: 800; /* Menambahkan font-weight 800 */
}

/* Pita kanan bawah */
.cert-container .ribbon-right {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #b71c1c, #e53935);
    clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
    z-index: 2;
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
                                <!-- Logo di atas -->
                                <div class="cert-logos" style="margin-bottom: 10px;">
                                    <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                                    <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                                </div>
                            </div>

                            <hr class="cert-hr" style="margin-top: -5px;">

                            <div class="cert-title" style="margin-top: -10px;">
                                <h1 class="cert-h1">SERTIFIKAT</h1>
                                <h2 class="cert-h2">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
                            </div>

                            <div class="cert-content">
                                <p style="text-align: center;">diberikan kepada</p>

                                <h2 class="cert-h2" style="text-align: center; margin: 20px 0;">{{ strtoupper($data->namalengkap) }}</h2>
                                {{-- <h2 style="text-align: center; margin: 20px 0; font-size:28px;" >Miftahunnuril Anam, S.E</h2> --}}

                                <h3 class="cert-h3" style="text-align: center;">Sebagai</h3>
                                <h2 class="cert-h2" style="text-align: center; margin: 15px 0; font-weight:800;">PESERTA</h2>
                                @php
                                    $totalJam = 0;
                                    foreach ($datapelajaran as $pelajaran) {
                                        $totalJam += (int) ($pelajaran->jampelajaran ?? 0);
                                    }
                                @endphp

                                <p style="text-align: justify; text-indent: 50px; margin: 0 50px;">
                                    Kegiatan <span class="cert-highlight">{{ $data->agendapelatihan->namakegiatan }}</span>
                                    yang diselenggarakan oleh {{ $data->agendapelatihan->asosiasimasjaki->namaasosiasi }}
                                    pada tanggal {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                                    di {{ $data->agendapelatihan->lokasi }} meliputi {{ $totalJam }} jam pelajaran.
                                </p>

                            </div>

                            <div class="cert-signature" style="margin-top: -10px;">
                                <p style="margin: 0;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong> </p>
                                <p style="margin: 0;"><strong>Plt. KEPALA DINAS <br> PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                                <p style="margin: 0;"><strong>KABUPATEN BLORA</strong></p>

                                <div style="display: flex; justify-content: flex-end; margin-right: -125px;"> <!-- Tambah ini -->
                                    <div style="position: relative; width: 400px; height: 100px;">
                                        <img src="/assets/icon/ttdpahuda.png" alt="" width="250px;" style="position: absolute; top: 0; left: 0; z-index: 1;">
                                        <img src="/assets/icon/ttdkabblora.png" alt="" width="115px;" style="position: absolute; top: 0; left: 50px; z-index: 2;">
                                    </div>
                                </div>



                                <p style="margin: 0;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                                {{-- <p>PEKBINA UTAMA MADYA</p> --}}
                                <p style="margin: 0;">NIP. 19720326 200604 1 005</p>
                            </div>
                            <div class="ribbon-left"></div>
                            {{-- <div class="ribbon-right"></div> --}}
                        </div>
                    </div>
                        <!--end::Quick Example-->
<br><br>

                                {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <div class="cert-container">
                            <div class="cert-header" style="text-align: center;">
                                <!-- Logo di atas -->
                                <div class="cert-logos" style="margin-bottom: 10px;">
                                    <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                                    <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                                </div>
                            </div>

                            <hr class="cert-hr" style="margin-top: -5px;">

                            <div class="cert-title" style="margin-top: -10px;">
                                <h2 class="cert-h2" style="text-align: center; margin: 15px 0; font-weight:800;">Agenda Pelatihan : <br>{{$data->agendapelatihan->namakegiatan}}</h2>
                            </div>

                            <div class="cert-content">
                                <div class="table-container">
                                    <table class="custom-table">
                                        <thead>
                                            <tr>
                                                <th style="font-size: 15px;" width="10%">No</th>
                                                <th style="font-size: 15px;" width="40%">Materi</th>
                                                <th style="font-size: 15px;" width="30%">Narasumber</th>
                                                <th style="font-size: 15px;" width="20%">Jam Pelajaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $totalJam = 0; // Menyimpan total jam pelajaran
                                            @endphp
                                            @forelse ($datapelajaran as $key => $pelajaran)
                                            <tr class="table-row-hover">
                                                <td style="font-size: 15px;">{{ $key + 1 }}</td>
                                                <td style="font-size: 15px;">{{ $pelajaran->materi ?? 'Data Tidak Tersedia' }}</td>
                                                <td style="font-size: 15px;">{{ $pelajaran->narasumber ?? 'Data Tidak Tersedia' }}</td>
                                                <td style="font-size: 15px; text-align:center;">
                                                    {{ $pelajaran->jampelajaran ?? 'Data Tidak Tersedia' }} Jam
                                                </td>
                                            </tr>
                                            @php
                                                $totalJam += (int) ($pelajaran->jampelajaran ?? 0); // Menambahkan jam pelajaran ke total
                                            @endphp
                                            @empty
                                            <tr>
                                                <td colspan="4">Data tidak tersedia.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                        <!-- Baris penjumlahan total jam pelajaran -->
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" style="font-size: 15px; text-align: right; font-weight: bold;">
                                                    <i class="bi bi-calendar" style="margin-right: 8px;"></i>Total Jam Pelajaran :
                                                </td>
                                                <td style="font-size: 15px; text-align:center; font-weight: bold;">
                                                    {{ $totalJam }} Jam
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <style>
                                        /* Styling untuk tabel */
                                        .custom-table {
                                            width: 100%;
                                            border-collapse: collapse;
                                            margin-top: 20px;
                                            font-size: 16px;
                                            border: 1px solid #ddd;
                                            border-radius: 10px; /* Border radius pada luar tabel */
                                            overflow: hidden; /* Supaya border-radius terlihat di sudut luar */
                                        }

                                        .custom-table th,
                                        .custom-table td {
                                            padding: 10px 20px;
                                            text-align: left;
                                            font-size: 16px;
                                        }

                                        /* Gradasi hijau dan emas untuk header */
                                        .custom-table thead tr th {
                                            background: linear-gradient(135deg, #4caf50, #ffb300); /* Gradasi hijau ke emas */
                                            color: white;
                                        }

                                        /* Hover effect pada row */
                                        .table-row-hover:hover {
                                            background-color: #f7fafc;
                                            transition: background-color 0.3s ease;
                                        }

                                        /* Styling row ganjil dan genap */
                                        .custom-table tr:nth-child(even) {
                                            background-color: #f9fafb;
                                        }

                                        .custom-table tr:nth-child(odd) {
                                            background-color: #ffffff;
                                        }

                                        .custom-table td {
                                            color: #333;
                                        }
                                    </style>
                                </div>

                            </div>


                            <div class="ribbon-left">

                            </div>
                            <div class="ribbon-text">
                                <h4 style="text-transform: uppercase;">{{ strtoupper($data->namalengkap) }}</h4>
                                                                {{-- <h4 class="carved-text">Miftahunnuril Anam, S.E</h4> --}}

                                <p> Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                                <br> Diterbitkan Pada : {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </p>
                            </div>

                            {{-- <div class="ribbon-right"></div> --}}
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
