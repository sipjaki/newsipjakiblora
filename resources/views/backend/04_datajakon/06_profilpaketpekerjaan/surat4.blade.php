<style>
    table {
     table-layout: fixed;
     width: 100%;
 }

 td {
     padding: 10px;
     vertical-align: top;
     word-wrap: break-word;
 }

 .isi-berita {
     max-width: 600px;
     word-wrap: break-word;
     white-space: normal;
     overflow-wrap: break-word;
 }
</style>


<style>

.download-btn {
    background-color: #dc3545;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 2px solid #dc3545;
}

.download-btn:hover {
    background-color: white;
    color: black;
}

    .container-surat {
        width: 800px;
        margin: 30px auto;
        padding: 40px;
        border: 1px solid black;
        background-color: #fff;
        font-family: 'Times New Roman', Times, serif;
        font-size: 15px;
    }

    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .header-surat img {
        width: 90px;
        height: 90px;
        margin-right: 20px;
    }

    .header-text {
        text-align: center;
        flex: 1;
    }

    .header-text h3 {
        margin: 3px 0;
        font-size: 18px;
    }

    .header-text p {
        margin: 2px 0;
        font-size: 14px;
    }

    .line-separator {
        border-top: 3px solid black;
        margin: 10px 0 20px 0;
    }

    .body-surat {
        margin-top: 20px;
    }

    .table-info {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    .table-info td {
        vertical-align: top;
        padding: 4px;
    }

    h4 {
        margin-top: 20px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: underline;
    }

    .body-surat p {
        text-align: justify;
        margin-bottom: 10px;
    }
    .tanda-tangan {
    width: 300px;
    margin-top: 40px;
    margin-left: auto; /* Ini kunci biar div "nempel" ke kanan */

    text-align: left;
    font-family: 'Times New Roman', Times, serif;

    display: flex;
    flex-direction: column;
    justify-content: center; /* Vertikal tengah dalam flexbox */
    align-items: flex-start; /* Teks di kiri dalam box */
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

     <!-- Menampilkan pesan sukses -->
<br>

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <div class="card-header">
                    <div style="
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #00378a, #00378a);
                    color: white;
                    padding: 8px 16px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    transition: all 0.3s ease;
                    cursor: pointer;
                "
                onmouseover="this.style.background='white'; this.style.color='black';"
                onmouseout="this.style.background='linear-gradient(135deg, #00378a, #00378a)'; this.style.color='white';">
                    ⚙️ Setting Database
                </div>

                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Jenis Pekerjaan -->
                            <i class="bi bi-briefcase" style="margin-right: 8px;"></i>
                            Jenis Pekerjaan
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Status Pekerjaan -->
                            <i class="bi bi-kanban" style="margin-right: 8px;"></i>
                            Status Pekerjaan
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Sumber Dana -->
                            <i class="bi bi-cash-stack" style="margin-right: 8px;"></i>
                            Sumber Dana
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Tahun Pelaksanaan -->
                            <i class="bi bi-calendar-event" style="margin-right: 8px;"></i>
                            Tahun Pelaksanaan
                        </button>
                    </a>

                </div>
                                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                                            <!-- Button to Download -->
                                            <a href="#">
                                                <button
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                                    onmouseout="this.style.backgroundColor='#ff0000'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
                                                    style="background-color: #ff0000; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                                    <!-- New Icon (Back Arrow) -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 512 512" fill="white" style="margin-right: 8px;">
                                                        <path d="M177.4 85.1L41.4 221.1C34.2 228.4 32 238.9 35.5 247.1C39.1 256.1 45.7 263.8 54.8 267.4C63.9 271 74.4 268.7 81.7 261.5L188.7 149.9V376c0 13.3 10.7 24 24 24H304c13.3 0 24-10.7 24-24V149.9L430.3 261.5c7.3 7.2 17.8 9.5 26.9 5.9C466.3 263.8 472.9 256.1 476.5 247.1C480 238.9 477.8 228.4 470.6 221.1L334.6 85.1C327.4 77.8 318.9 75.6 310.6 78.2C302.4 80.8 294.8 89.5 288 98.8V24C288 10.7 277.3 0 264 0H248C234.7 0 224 10.7 224 24V98.8L177.4 85.1z"/>
                                                    </svg>
                                                    Pengesahan
                                                </button>
                                            </a>


                                    <!-- Tombol Download -->
                                    <button onclick="generatePDF()"  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#e49e07'; this.style.color='white';"
                                    style="background-color: #e49e07; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                        <path d="M5.5 0h5A1.5 1.5 0 0 1 12 1.5v13A1.5 1.5 0 0 1 10.5 16h-5A1.5 1.5 0 0 1 4 14.5V1.5A1.5 1.5 0 0 1 5.5 0zM10 1v14H6V1h4z"/>
                                    </svg>
                                    Download PDF
                                    </button>

                                    <a href="#">
                                        <button
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                            onmouseout="this.style.backgroundColor='#27c93c'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
                                            style="background-color: #27c93c; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                            <!-- Ikon Kembali -->
                                            <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 384 512" fill="white" style="margin-right: 8px;">
                                                <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM384 121.9V128H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/>
                                            </svg>
                                            Update
                                        </button>
                                    </a>

                                    <button
                                    onclick="history.back();"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <!-- Ikon Kembali -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" style="margin-right: 8px;">
                                        <path fill-rule="evenodd"
                                            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
                                    </svg>
                                    Kembali
                                </button>


                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

                    <div class="container-surat">
                        <div class="header-surat">
                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
                            <div class="header-text">
                                <h3>PEMERINTAH KABUPATEN BLORA</h3>
                                <h3 style="text-transform: uppercase;">{{ $data->user->name }}</h3>
                                <p>Alamat Otomatis</p>
                                <h3>BLORA 58214</h3>
                            </div>
                        </div>

                        <div class="line-separator"></div>

                        <div class="sskk">
                            <h5 style="text-align: center;">BAB XI. SYARAT-SYARAT KHUSUS KONTRAK (SSKK)</h5>

                            <table>
                                <thead>
                                    <tr>
                                        <th style="width: 20%;">Pasal dalam SSUK</th>
                                        <th style="width: 20%;">Ketentuan</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <br>
                                <tbody>
                                    <tr>
                                        <td>4.1 & 4.2</td>
                                        <td>Korespondensi</td>
                                        <td>
                                            Alamat Para Pihak sebagai berikut:<br>
                                            <strong>Satuan Kerja Pejabat Pembuat Komitmen</strong> {{$data->satuankerja}}<br>
                                            Nama: {{$data->nama1}}<br>
                                            Alamat: {{$data->alamat1}}<br>
                                            Telepon: {{$data->telepon1}}<br>
                                            Website: {{$data->website1}}<br>
                                            e-mail: {{$data->email1}}<br><br>
                                            <strong>Penyedia</strong> {{$data->penyedia}}<br>
                                            Nama: {{$data->nama2}}<br>
                                            Alamat: {{$data->alamat2}}<br>
                                            Telepon: {{$data->telepon2}}<br>
                                            e-mail: {{$data->email2}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.2 & 5.1</td>
                                        <td>Wakil Sah Para Pihak</td>
                                        <td>
                                            Wakil Sah Para Pihak sebagai berikut:<br>
                                            Untuk PPK: Pejabat Pelaksana Teknis Kegiatan (PPTK), Tim Teknis, dan Konsultan Pengawas<br>
                                            Untuk Penyedia: Pelaksana Lapangan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.3.b & 6.3.c 44.4 & 44.6</td>
                                        <td>Pencairan Jaminan</td>
                                        <td>Jaminan dicairkan dan disetorkan pada Kas Daerah.</td>
                                    </tr>
                                    <tr>
                                        <td>27.1</td>
                                        <td>Masa Pelaksanaan</td>
                                        <td>
                                            Masa Pelaksanaan selama: {{$data->pelaksanaan1}} ({{$data->haripelaksanaan1}}) hari kalender<br>
                                            terhitung sejak tanggal mulai kerja yang tercantum dalam SPMK.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>33.8</td>
                                        <td>Masa Pemeliharaan</td>
                                        <td>
                                            Masa Pemeliharaan berlaku selama: {{$data->pelaksanaan2}} ({{$data->haripelaksanaan2}}) hari kalender<br>
                                            terhitung sejak tanggal penyerahan pertama (PHO).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>35.1</td>
                                        <td>Gambar As Built dan Pedoman Pengoperasian dan Perawatan/Pemeliharaan</td>
                                        <td>
                                            Gambar "As built" diserahkan paling lambat 7 (tujuh) hari kalender dan/atau pedoman pengoperasian<br>
                                            dan perawatan/pemeliharaan harus diserahkan paling lambat 7 (tujuh) hari kalender setelah Tanggal<br>
                                            Penyerahan Pertama Pekerjaan.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>45.b</td>
                                        <td>Pembayaran Tagihan</td>
                                        <td>
                                            Batas akhir waktu yang disepakati untuk penerbitan SPP oleh Pejabat yang berwenang untuk menandatangani<br>
                                            Kontrak untuk pembayaran tagihan angsuran adalah 7 (tujuh) hari kerja terhitung sejak tagihan dan kelengkapan<br>
                                            dokumen penunjang yang tidak diperselisihkan diterima oleh Pejabat yang berwenang untuk menandatangani Kontrak.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>49.(i)</td>
                                        <td>Hak dan Kewajiban Penyedia</td>
                                        <td>
                                            Penyedia jasa bertanggung jawab atas pelaksanaan kontrak, kesesuaian kualitas barang/jasa, ketepatan perhitungan jumlah atau volume, ketepatan waktu penyerahan, ketepatan tempat penyerahan dan penerapan keselamatan konstruksi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>56.3</td>
                                        <td>Tindakan Penyedia yang Mensyaratkan Persetujuan Pejabat yang berwenang untuk menandatangani Kontrak</td>
                                        <td>
                                            Tindakan lain oleh Penyedia yang memerlukan persetujuan PPK adalah:<br>
                                            - Perpanjangan waktu kontrak pekerjaan<br>
                                            - Pencairan Jaminan<br>
                                            - Perintah perubahan, yang menyangkut :<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;- Penambahan atau pengurangan pekerjaan dan perubahan atau penambahan atau pengurangan spesifikasi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>56.3</td>
                                        <td>Tindakan Penyedia yang Mensyaratkan Persetujuan Pengawas Pekerjaan</td>
                                        <td>
                                            Tindakan Penyedia yang memerlukan persetujuan Pengawas Pekerjaan adalah: Tentang Pelaksanaan Teknis Pekerjaan dilapangan.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>58</td>
                                        <td>Kepemilikan Dokumen</td>
                                        <td>
                                            Penyedia diperbolehkan menggunakan salinan dokumen dan piranti lunak yang dihasilkan dari Pekerjaan Konstruksi ini dengan pembatasan sebagai berikut:<br>
                                            Sampai dengan jangka waktu pelaksanaan dan jangka waktu pemeliharaan berakhir.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>65</td>
                                        <td>Fasilitas</td>
                                        <td>
                                            Pejabat Pembuat Komitmen akan memberikan fasilitas berupa:<br>
                                            1. Tim Pendukung/Tim Teknis;<br>
                                            2. Penyusun dan Peneliti Kontrak;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>66.1.(h)</td>
                                        <td>Peristiwa Kompensasi</td>
                                        <td>
                                            Ketentuan selain yang diatur dalam SSUK mengenai pemberian peristiwa kompensasi adalah:<br>
                                            1) PPK mengubah jadwal yang dapat mempengaruhi pelaksanaan pekerjaan;<br>
                                            2) Keterlambatan pembayaran kepada penyedia;<br>
                                            3) PPK tidak memberikan gambar-gambar, spesifikasi dan/atau instruksi sesuai jadwal yang dibutuhkan;<br>
                                            4) Penyedia belum bisa masuk ke lokasi sesuai jadwal;<br>
                                            5) PPK menginstruksikan kepada pihak penyedia untuk melakukan pengujian tambahan yang setelah dilaksanakan pengujian ternyata tidak ditemukan kerusakan/kegagalan/penyimpangan;<br>
                                            6) PPK memerintahkan penundaan pelaksanaan pekerjaan;<br>
                                            7) PPK memerintahkan untuk mengatasi kondisi tertentu yang tidak dapat diduga sebelumnya dan disebabkan oleh PPK;<br>
                                            8) Ketentuan lain dalam SPK.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>70.1.(e)</td>
                                        <td>Besaran Uang Muka</td>
                                        <td>
                                            Pekerjaan Konstruksi ini dapat diberikan uang muka sebesar {{$data->pelaksanaan3}} ({{$data->haripelaksanaan3}}) dari Nilai Kontrak.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>70.2.(d)</td>
                                        <td>Pembayaran Prestasi Pekerjaan</td>
                                        <td>
                                            Pembayaran prestasi pekerjaan dilakukan dengan cara: Sertifikat Bulanan (MC), Pembayaran berdasarkan cara tersebut di atas dilakukan dengan ketentuan sebagai berikut: setelah dilakukan pengukuran bersama oleh Tim Teknis atas volume pekerjaan yang benar-benar telah dilaksanakan, yang dinyatakan dengan Berita Acara.<br>
                                            Tim Teknis dapat meminta bantuan pihak ketiga untuk melakukan pemeriksaan atas biaya penyedia jasa. Untuk pekerjaan yang tidak memenuhi spesifikasi teknis dan tidak dibayar akan menjadi milik pemerintah Kabupaten Blora.<br>
                                            <strong>Dokumen penunjang yang disyaratkan untuk mengajukan tagihan pembayaran prestasi pekerjaan:</strong><br>
                                            - Berita acara hasil pengukuran prestasi pekerjaan;<br>
                                            - Surat pengajuan tagihan pembayaran;<br>
                                            - Bukti pembayaran bulanan sebelumnya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>70.4.(c)</td>
                                        <td>Denda akibat Keterlambatan</td>
                                        <td>
                                            Untuk pekerjaan ini besar denda keterlambatan untuk setiap hari keterlambatan adalah 1/1000 dari total nilai kontrak. (sebelum PPN).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>78</td>
                                        <td>Umur Konstruksi dan Pertanggungan terhadap Kegagalan Bangunan</td>
                                        <td>
                                            a. Bangunan Hasil Pekerjaan memiliki umur konstruksi selama 10 (Sepuluh) tahun sejak tanggal penyerahan akhir pekerjaan;<br>
                                            b. Pertanggungan terhadap kegagalan bangunan ditetapkan selama 10 (Sepuluh) tahun sejak tanggal penyerahan akhir pekerjaan;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>78.2</td>
                                        <td>Sanksi</td>
                                        <td>
                                            Pelanggaran terhadap ketentuan Pengalihan dan/atau SubSPK dikenakan sanksi Pemutusan SPK dimasukkan dalam Daftar Hitam.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>79</td>
                                        <td>Penyelesaian Perselisihan</td>
                                        <td>
                                            Dalam hal terjadi perselisihan/sengketa diantara para pihak, para pihak terlebih dahulu menyelesaikan perselisihan tersebut melalui musyawarah untuk mufakat.<br>
                                            Dalam hal musyawarah untuk mufakat tidak tercapai, maka para pihak sepakat menyelesaikan perselisihan/sengketa melalui Layanan Penyelesaian Sengketa Pengadaan LKPP-RI.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>

                 <br><br>
<!-- Tombol Download -->

<!-- Tambahkan di bagian head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>



<script>
    function generatePDF() {
        // Ambil element container
        const element = document.querySelector('.container-surat');

        html2canvas(element, {
            scale: 2, // Tingkat kualitas gambar
            logging: true,
            useCORS: true
        }).then(canvas => {
            // Konfigurasi PDF
            const imgData = canvas.toDataURL('image/png');
            const pdf = new jspdf.jsPDF({
                orientation: 'portrait',
                unit: 'mm',
                format: 'a4'
            });

            // Hitung dimensi halaman A4
            const pageWidth = pdf.internal.pageSize.getWidth();
            const pageHeight = pdf.internal.pageSize.getHeight();

            // Tambahkan gambar ke PDF
            pdf.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);

            // Download PDF
            pdf.save('surat-sppbj.pdf');
        }).catch(error => {
            console.error('Error generating PDF:', error);
        });
    }
    </script>

</div>
             <!-- /.card -->
         </div>
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

