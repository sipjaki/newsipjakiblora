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

                        <hr style="border: 1px solid black; margin-bottom: 20px;">

                        <table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 14px;">
                            <tr>
                                <td style="width: 40%; font-weight: bold; border: 1px solid black;">SURAT PERINTAH KERJA (SPK)</td>
                                <td style="border: 1px solid black;">
                                    SATUAN KERJA:<br> <b> {{ $data->spk->satuankerja }} </b>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;">
                                    NOMOR DAN TANGGAL SPK:<br>
                                    Nomor: <b> {{ $data->spk->nomorspk }} </b> <br>
                                    Tanggal: <b> {{ $data->spk->tanggalspk }} </b>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; border: 1px solid black;">NAMA PPK</td>
                                <td style="border: 1px solid black; text-align:justify;" >
                                    Nama: <b> {{ $data->spk->namalengkapspk }} </b><br>
                                    NIP: <b> {{ $data->spk->nipspk }} </b><br>
                                    Jabatan: Pejabat Pembuat Komitmen <b> {{ $data->spk->spkppk }} </b><br>
                                    Berkedudukan di: <b> {{ $data->spk->berkedudukanspk }} </b><br>
                                    Bertindak untuk dan atas nama Pemerintah <b> {{ $data->spk->spkpemerintah }} </b> Satuan Kerja <b> {{ $data->spk->satuankerjaspk }} </b><br>
                                    Berdasarkan Surat Keputusan <b> {{ $data->spk->spkkeputusan }} </b> Nomor <b> {{ $data->spk->spknomorkeputusan }} </b> Tanggal <b> {{ $data->spk->spktanggalkeputusan }} </b> Tentang Penunjukan Pejabat Pembuat Komitmen <b> {{ $data->spk->spktanggalppk }} </b> APBD-P Tahun <b> {{ $data->spk->tahunanggaran1 }} </b>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; border: 1px solid black;">NAMA PENYEDIA</td>
                                <td style="border: 1px solid black;">
                                    Nama: <b> {{ $data->spk->namapenyedia }} </b><br>
                                    Jabatan: <b> {{ $data->spk->jabatanpenyedia }} </b><br>
                                    Berkedudukan di: <b> {{ $data->spk->berkedudukanpenyedia }} </b><br>
                                    Akta Notaris:<br>
                                    Nomor: <b> {{ $data->spk->nomorpenyedia }} </b> <br>
                                    Tanggal: <b> {{ $data->spk->tanggalpenyedia }} </b> <br>
                                    Notaris: <b> {{ $data->spk->notarispenyedia }} </b> <br>
                                    Bertindak untuk dan atas nama : <b> {{ $data->spk->atasnamapenyedia }} </b>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; border: 1px solid black;">WAKIL SAH PPK</td>
                                <td style="border: 1px solid black;">
                                    Wakil Sah Para Pihak sebagai berikut:<br>
                                    Untuk PPK : <b> {{ $data->spk->ppk1 }} - {{ $data->spk->ppk2 }} </b> <br>
                                    (Pejabat Pelaksana Teknis Kegiatan (PPTK), Tim Teknis, Konsultan Pengawas)<br>
                                    Untuk Penyedia: <b> {{ $data->spk->spkuntukpenyedia }} </b> (Pelaksana Lapangan)
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; border: 1px solid black;">PAKET PEKERJAAN <br> {{$data->spk->paketpekerjaan1}} </td>
                                <td style="border: 1px solid black;">
                                    NOMOR BERITA ACARA HASIL PENGADAAN LANGSUNG: <br>
                                    Nomor : <b>  {{$data->spk->nomorpaketpekerjaan}} </b> <br>
                                    TANGGAL BERITA ACARA HASIL PENGADAAN LANGSUNG: <br>
                                    Tanggal: <b> {{$data->spk->hasilpaketpekerjaan}} </b> <br>
                                        <hr>
                                        NOMOR BERITA ACARA PENETAPAN PEMENANG : <br>
                                        Nomor : <b>  {{$data->spk->bapekerjaan}} </b> <br>
                                        TANGGAL BERITA ACARA PENETAPAN PEMENANG: <br>
                                        Tanggal : <b>  {{$data->spk->penetapanpemenangpekerjaan}} </b> <br>

                                </td>
                            </tr>
                        </table>

                            <hr>

                            <table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 14px; margin-top: 10px;">
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>SUMBER DANA</b><br>
                                     <b>   {{ $data->spk->sumberdana_id }} </b> DPA nomor: <b> {{ $data->spk->nomordpa }} </b> Tahun Anggaran <b> {{ $data->spk->tahunpilihan_id }} </b> untuk mata anggaran <b> {{ $data->spk->anggaran }} </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>WAKTU PELAKSANAAN</b><br>
                                       <b> {{ $data->spk->waktupelaksanaan }} ({{ $data->spk->terbilangpelaksanaan }}) </b> hari kalender dihitung sejak Tanggal Mulai Kerja yang tercantum dalam SPMK sampai dengan Tanggal Penyerahan Pertama Pekerjaan.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>WAKTU PEMELIHARAAN</b><br>
                                        <b>{{ $data->spk->waktupemeliharaan }} ({{ $data->spk->terbilangpemeliharaan }}) </b> hari kalender dihitung sejak Tanggal Penyerahan Pertama Pekerjaan sampai dengan Tanggal Penyerahan Akhir Pekerjaan.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>JENIS KONTRAK</b><br>
                                        HARGA SATUAN
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>DOKUMEN KONTRAK</b><br>
                                        Dokumen-dokumen berikut merupakan satu kesatuan dan jika terjadi pertentangan antara ketentuan dalam suatu dokumen dengan ketentuan dalam dokumen yang lain maka yang berlaku adalah ketentuan dalam dokumen yang lebih tinggi berdasarkan urutan hierarki sebagai berikut:
                                        <br><br>
                                        a. adendum Surat Perintah Kerja/SPK (apabila ada);<br>
                                        b. Surat Perintah Kerja;<br>
                                        c. Daftar Kuantitas dan Harga hasil negosiasi dan koreksi aritmatik;<br>
                                        d. Surat Penawaran;<br>
                                        e. Syarat-Syarat Umum SPK;<br>
                                        f. spesifikasi teknis;<br>
                                        g. gambar-gambar; dan<br>
                                        h. dokumen lainnya seperti: Surat Penunjukan Penyedia Barang/Jasa, Jadwal Pelaksanaan Pekerjaan, jaminan-jaminan, Berita Acara Rapat Persiapan Pelaksanaan Kontrak.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <b>HARGA KONTRAK</b><br>
                                        Harga Kontrak termasuk Pajak Pertambahan Nilai (PPN) adalah sebesar <b> Rp. {{ $data->spk->hargakontrak }} ({{ $data->spk->hargaterbilang }}) </b> yang diperoleh berdasarkan total harga penawaran terkoreksi aritmatik sebagaimana tercantum dalam Daftar Kuantitas dan Harga Penawaran. (Melalui koreksi aritmatik).
                                    </td>
                                </tr>
                            </table>


<hr>
<!-- RUANG LINGKUP, SISTEM PEMBAYARAN, BESARAN UANG MUKA -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 14px;">
    <tr>
        <td style="padding: 10px; border: 1px solid black;">
            <b>RUANG LINGKUP</b><br>
            Ruang lingkup pekerjaan utama terdiri dari:<br>
            1. Jenis pekerjaan {{ $data->ruanglingkup }}<br><br>

            <b>SISTEM PEMBAYARAN</b><br>
            Pembayaran untuk kontrak ini dilakukan ke Bank {{ $data->bank }} rekening nomor: {{ $data->rekening }} atas nama Penyedia Jasa: {{ $data->atasnamabank }}.<br><br>
            Pembayaran prestasi pekerjaan dilakukan dengan cara: Sertifikat Bulanan (MC).<br>
            Pembayaran berdasarkan cara tersebut dilakukan setelah dilakukan pengukuran bersama oleh Tim Teknis atas volume pekerjaan yang benar-benar telah dilaksanakan, yang dinyatakan dengan Berita Acara.<br><br>
            Tim Teknis dapat meminta bantuan pihak ketiga untuk melakukan pemeriksaan atas biaya penyedia jasa.
            Untuk pekerjaan yang tidak memenuhi spesifikasi teknis dan tidak dibayar akan menjadi milik pemerintah Kabupaten Blora.<br><br>

            Dokumen penunjang yang disyaratkan untuk mengajukan tagihan pembayaran prestasi pekerjaan:
            <ol>
                <li>Berita acara hasil pengukuran prestasi pekerjaan;</li>
                <li>Surat pengajuan tagihan pembayaran;</li>
                <li>Bukti pembayaran bulanan sebelumnya.</li>
            </ol><br>

            <b>BESARAN UANG MUKA</b><br>
            Pekerjaan Konstruksi ini dapat diberikan uang muka sebesar {{ $data->dp }} ({{ $data->terbilang }}) dari Nilai Kontrak.
        </td>
    </tr>
</table>

<br>

<!-- TANDA TANGAN PPK DAN PENYEDIA -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 14px;">
    <tr>
        <!-- Kolom Kiri: PPK -->
        <td style="width: 50%; padding: 10px; border: 1px solid black; vertical-align: top;">
            Untuk dan atas nama :<br>
            <b>PEJABAT PEMBUAT KOMITMEN</b><br>
            {{ $data->namaselaku1 }}<br>
            SELAKU<br>
            PEJABAT PENANDATANGANAN KONTRAK<br><br><br><br>

            ………<b>{{ $data->namappk1 }}</b>____<br>
            NIP. {{ $data->nip1 }}
        </td>

        <!-- Kolom Kanan: Penyedia -->
        <td style="width: 50%; padding: 10px; border: 1px solid black; vertical-align: top;">
            Menerima dan menyetujui:<br>
            Untuk dan atas nama <b>{{ $data->namajabatan1 }}</b><br><br><br><br>

            <b>{{ $data->namamenyetujui1 }}</b>
        </td>
    </tr>
</table>
<hr>
<br>

<div class="header-surat">
    <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
    <div class="header-text">
        <h3>PEMERINTAH KABUPATEN BLORA</h3>
        <h3 style="text-transform: uppercase;">{{ $data->user->name }}</h3>
        <p>Alamat Otomatis</p>
        <h3>BLORA 58214</h3>
    </div>
</div>

<hr style="border: 1px solid black; margin-bottom: 20px;">


<div style="font-size: 14px; line-height: 1.8;">
    <div style="text-align: center; font-weight: bold;">
        SURAT PERINTAH MULAI KERJA (SPMK)<br>
        Nomor: {{ $data->spk->nomorspmk }}
    </div>
    <br>

    <strong>Paket Pekerjaan:</strong> {{ $data->spk->paketpekerjaanspmk }}<br><br>

    Yang bertanda tangan di bawah ini:<br>
    Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->spk->namaspmk }}</strong><br>
    Jabatan&nbsp;&nbsp;&nbsp;: <strong>{{ $data->spk->jabatanspmk }}</strong><br>
    Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->spk->alamatspmk }}</strong><br>
    selanjutnya disebut sebagai Pejabat Pembuat Komitmen;<br><br>

    Berdasarkan Surat Perintah Kerja nomor <strong>{{ $data->spk->nomorspmk }}</strong> tanggal <strong>{{ $data->spk->tanggalspmk }}</strong> Paket Pekerjaan, bersama ini memerintahkan:<br><br>

    Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->spk->namaspmkpenujukan }}</strong><br>
    Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->spk->alamatspmkpenunjukan }}</strong><br>
    selanjutnya disebut sebagai Penyedia Jasa Konstruksi;<br><br>

    untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagai berikut:<br><br>

    1. <strong>Lingkup Pekerjaan</strong> : Sesuai Nilai Pekerjaan;<br>
    2. <strong>Tanggal mulai kerja</strong> : {{ $data->spk->tanggalmulaispmk }};<br>
    3. <strong>Syarat-syarat pekerjaan</strong> : sesuai dengan persyaratan dan ketentuan SPK;<br>
    4. <strong>Waktu penyelesaian:</strong><br>
    &nbsp;&nbsp;&nbsp;&nbsp;- <strong>Waktu Pelaksanaan</strong> : Selama {{ $data->spk->waktuspmk }} ({{ $data->spk->jumlahhari }}) hari kalender dan pekerjaan harus sudah selesai pada tanggal {{ $data->spk->tanggalspmk }};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;- <strong>Waktu Pemeliharaan</strong> : Selama {{ $data->spk->waktupemeliharaan }} ({{ $data->spk->terbilangpemeliharaan }}) hari kalender dan pekerjaan harus sudah selesai pada tanggal {{ $data->spk->tanggalpemeliharaan }};<br>
    5. <strong>Denda</strong> : Terhadap setiap hari keterlambatan pelaksanaan/penyelesaian pekerjaan Penyedia akan dikenakan Denda Keterlambatan sebesar 1/1000 (satu per seribu) dari Nilai Kontrak atau bagian tertentu dari Nilai Kontrak sebelum PPN sesuai dengan Syarat-Syarat Umum SPK.<br><br>

    Blora, {{ $data->spk->tanggalsurat1 }}
</div>

<table style="width: 100%; font-size: 14px; margin-top: 30px;">
    <tr>
        <td style="width: 50%; vertical-align: top; text-align: center;">
            Untuk dan atas nama :<br>
            <strong>PEJABAT PEMBUAT KOMITMEN</strong><br><br>
            <strong>{{ $data->namaselaku2 }}</strong><br>
            SELAKU<br>
            <strong>PEJABAT PENANDATANGANAN KONTRAK</strong><br><br><br><br>

            <strong>{{ $data->namappk2 }}</strong><br>
            NIP. <strong>{{ $data->nip2 }}</strong>
        </td>
        <td style="width: 50%; vertical-align: top; text-align: center;">
            Menerima dan menyetujui:<br>
            Untuk dan atas nama<br>
            <strong>{{ $data->namajabatan2 }}</strong><br><br><br><br>

            <strong>{{ $data->namamenyetujui2 }}</strong>
        </td>
    </tr>
</table>

<hr>
<br>
<div class="header-surat">
    <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
    <div class="header-text">
        <h3>PEMERINTAH KABUPATEN BLORA</h3>
        <h3 style="text-transform: uppercase;">{{ $data->user->name }}</h3>
        <p>Alamat Otomatis</p>
        <h3>BLORA 58214</h3>
    </div>
</div>


<hr style="border: 1px solid black; margin-bottom: 20px;">


<div style="font-size: 14px; line-height: 1.8;">
    <div style="text-align: center; font-weight: bold;">
        BERITA ACARA PENYERAHAN LOKASI KERJA<br>
        Nomor: {{ $data->nomorlokasikerja }}
    </div>
    <br>

    Pada hari ini <strong>{{ $data->kerjahari }}</strong> tanggal <strong>{{ $data->kerjatanggal }}</strong> bulan <strong>{{ $data->kerjabulan }}</strong> tahun <strong>{{ $data->kerjatahun }}</strong>, Kepala <strong>{{ $data->kerjakepala }}</strong> selaku Pejabat Pembuat Komitmen paket pekerjaan <strong>{{ $data->kerjapaketpekerjaan }}</strong> Kecamatan <strong>{{ $data->kecamatanblora_id }}</strong> Tahun Anggaran <strong>{{ $data->tahunpilihan_id }}</strong> menyerahkan lapangan kepada Penyedia Jasa Konstruksi:<br><br>

    Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->kerjanama }}</strong><br>
    Jabatan&nbsp;&nbsp;&nbsp;: <strong>{{ $data->kerjajabatan }}</strong><br>
    Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->kerjaalamat }}</strong><br>
    Sebagai Penyedia Jasa Konstruksi;<br><br>

    Untuk melaksanakan Pembangunan Fisik di <strong>{{ $data->kerjafisik }}</strong> Tahun Anggaran <strong>{{ $data->tahunpilihan_id }}</strong> pada Sub Kegiatan:<br><br>

    Nama Paket&nbsp;&nbsp;&nbsp;&nbsp;: <strong>{{ $data->kerjapaket }}</strong><br>
    Pembiayaan&nbsp;&nbsp;&nbsp;&nbsp;: DPA-SKPD No. <strong>{{ $data->kerjanomor }}</strong> tanggal <strong>{{ $data->kerjatanggal }}</strong><br>
    Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kecamatan <strong>{{ $data->kerjakecamatan }}</strong><br><br>

    Dengan ketentuan sebagai berikut:<br><br>

    1. Penyedia Jasa Konstruksi bertanggung jawab terhadap segala penyelesaian hak milik tanah serta ganti rugi tanaman dan bangunan di atasnya.<br>
    2. Penyedia Jasa Konstruksi harus melakukan pengamanan seluruh lapangan termasuk bangunan yang ada di dalamnya selama masa pelaksanaan dan masa pemeliharaan pekerjaan.<br>
    3. Penyedia Jasa Konstruksi harus segera mengamankan dan melaporkan kepada Kuasa Pengguna Anggaran / Pengguna Anggaran apabila ditemukan di lapangan barang-barang berupa fosil, mata uang, benda-benda berharga atau benda-benda kuno, bangunan dan peninggalan-peninggalan lain atau benda-benda yang menyangkut kepentingan geologi dan kepurbakalaan.<br>
    4. Penyedia Jasa harus selalu menjaga kebersihan dan kerapian lapangan dan pekerjaan selama masa pelaksanaan dan pemeliharaan, serta menyingkirkan peralatan konstruksi, sisa bahan/material, sampah, dan segala macam bangunan sementara setelah pekerjaan selesai dilaksanakan.<br><br>

    Demikian untuk menjadikan maklum dan dapat dipergunakan sebagaimana mestinya.

    <p>Blora, <strong> {{$data->tanggalsurat2}}</strong></p>
</div>

<div style="text-align: center; margin-top: 50px;">
    <table style="width: 80%; margin: auto; font-size: 14px;">
        <tr>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                Untuk dan atas nama:<br>
                <strong>PEJABAT PEMBUAT KOMITMEN</strong><br><br>
                {{ $data->namaselaku3 }}<br>
                SELAKU<br>
                PEJABAT PENANDATANGANAN KONTRAK<br><br><br><br>

                <strong>{{ $data->namappk3 }}</strong><br>
                NIP. {{ $data->nip3 }}
            </td>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                Menerima dan menyetujui:<br>
                Untuk dan atas nama<br>
                <strong>{{ $data->namajabatan3 }}</strong><br><br><br><br>

                <strong>{{ $data->namamenyetujui3 }}</strong>
            </td>
        </tr>
    </table>
</div>

<br><br>
<hr>
<br><br>

<div style="width: 180mm; min-height: 297mm; padding: 20mm; border: 2px solid black; margin: auto; font-family: 'Times New Roman', Times, serif; font-size: 14px; box-sizing: border-box;">
    <div style="text-align: center;">
        <strong style="font-size: 16px;">PEMERINTAH KABUPATEN BLORA<br>
        DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</strong><br>
        Jl. Nusantara No. 62 Telp. (0296) 531004<br>
        <strong>B L O R A, 58214</strong><br><br>

        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora" style="width: 100px; margin: 20px 0;"><br><br>

        <div style="border-top: 2px solid black; border-bottom: 2px solid black; padding: 10px; margin-top: 20px;">
            <strong style="font-size: 16px;">SURAT PERINTAH KERJA</strong><br><br>
            <table style="margin: auto;">
                <tr>
                    <td><strong>Nomor SPK</strong></td>
                    <td style="padding: 0 10px;">:</td>
                    <td>{{ $data->nomorspkcover }}</td>
                </tr>
                <tr>
                    <td><strong>Tanggal SPK</strong></td>
                    <td style="padding: 0 10px;">:</td>
                    <td>{{ $data->tanggalspkcover }}</td>
                </tr>
            </table>
        </div>

        <div style="border-top: 2px solid black; border-bottom: 2px solid black; padding: 20px; margin-top: 20px;">
            <strong style="font-size: 16px;">PAKET PEKERJAAN:</strong><br><br>
            {{ $data->paketpekerjaancover }}
        </div>

        <div style="margin-top: 50px;">
            <strong>TAHUN ANGGARAN {{ $data->tahunanggarancover }}</strong>
        </div>
    </div>
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
            pdf.save('surat-spk.pdf');
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

