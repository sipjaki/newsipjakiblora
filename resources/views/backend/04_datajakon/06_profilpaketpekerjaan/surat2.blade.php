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
    /* Container utama surat */
    .container-surat {
        border: 1px solid black;
        padding: 20px;
        font-family: 'Times New Roman', Times, serif;
        display: flex;
        flex-direction: column;
        height: auto;
    }

    /* Header surat */
    .header-surat {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .header-text h3 {
        margin: 5px 0;
    }

    /* Separator garis */
    .line-separator {
        border-top: 1px solid black;
        margin: 20px 0;
    }

    /* Bagian tubuh surat */
    .body-surat {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }

    /* Table info */
    .table-info {
        width: 100%;
        border-collapse: collapse;
    }

    .table-info td {
        padding: 5px 10px;
        vertical-align: top;
    }

    .table-info .label {
        width: 150px;
        font-weight: bold;
    }

    /* Tanda tangan di kanan dalam kotak */
    .tanda-tangan {
        display: flex;
        flex-direction: column;
        align-items: flex-end; /* Posisi kanan */
        margin-top: 30px;
        padding-left: 20px; /* Agar tidak terlalu rapat */
    }

    .tanda-tangan p {
        margin: 5px 0;
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

                            <a href="/bepekerjaandetailsupdate/{id}">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                style="background-color: #27c93c; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <!-- Ikon Kembali -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 384 512" fill="white" style="margin-right: 8px;">
                                    <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM384 121.9V128H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/>
                                </svg>
                                Update
                            </button>
                            </a>

                            <a href="/bepaketpekerjaan">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <!-- Ikon Kembali -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                            </svg>
                                Kembali
                            </button>
                            </a>
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

                        <div class="body-surat">
                            <table class="table-info">
                                <table class="table-info">
                                    <tr>
                                        <td class="label" style="width: 150px;">Nomor</td>
                                        <td style="width: 10px;">:</td>
                                        <td class="value">{{ $data->sppbj->nomor }}</td>
                                        <td class="right">Blora, {{ \Carbon\Carbon::parse($data->sppbj->koptanggal)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Lampiran</td>
                                        <td>:</td>
                                        <td colb="2">- {{ $data->sppbj->lampiran }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Kepada Yth.</td>
                                        <td>:</td>
                                        <td colb="2">{{ $data->sppbj->kepadayth }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">di</td>
                                        <td>:</td>
                                        <td colb="2">{{ $data->sppbj->alamatdi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Perihal</td>
                                        <td>:</td>
                                        <td colb="2">{{ $data->sppbj->perihal1 }}</td>
                                    </tr>
                                </table>

                            </table>

                            <p>
                                Dengan ini kami beritahukan bahwa penawaran Saudara nomor <b style="color: black">{{ $data->sppbj->nomorkontrak }}</b> tanggal <b style="color: black"> {{ \Carbon\Carbon::parse($data->sppbj->tanggal)->translatedFormat('d F Y') }} </b> perihal Nomor : <b style="color: black;"> {{ $data->sppbj->perihalnomor }} </b> Penawaran Pekerjaan <b style="color: black;">{{ $data->sppbj->penawaran }} </b> dengan [nilai penawaran/penawaran terkoreksi] sebesar <b style="color: black;"> Rp. {{ number_format((float)$data->sppbj->hargaterkoreksi, 0, ',', '.') }} ({{ $data->sppbj->hargaterbilang }}) </b> kami nyatakan diterima/disetujui.
                            </p>

                            <p>
                                Sebagai tindak lanjut dari Surat Penunjukan Penyedia Barang/Jasa (SPPBJ) ini Saudara diharuskan untuk menyerahkan Jaminan Pelaksanaan sebesar <b style="color: black"> Rp. {{ number_format((float)$data->sppbj->dp, 0, ',', '.') }} ({{ $data->sppbj->terbilang }}) </b> [5% dari nilai kontrak untuk nilai penawaran/terkoreksi antara 80% sampai dengan 100% HPS atau 5% dari nilai total HPS untuk nilai penawaran/terkoreksi di bawah 80% HPS] dengan masa berlaku selama <b style="color: black;"> {{ $data->sppbj->berlaku }} ({{ $data->sppbj->terbilangberlaku }}) </b> hari kalender [sekurang-kurangnya sama dengan jangka waktu pelaksanaan] dan menandatangani Surat Perjanjian paling lambat 14 (empat belas) hari kerja setelah diterbitkannya SPPBJ.
                            </p>

                            <p>
                                Kegagalan Saudara untuk menerima penunjukan ini yang disusun berdasarkan evaluasi terhadap penawaran Saudara, akan dikenakan sanksi sesuai ketentuan dalam Peraturan Perundangan terkait tentang Pengadaan Barang/Jasa Pemerintah beserta petunjuk teknisnya.
                            </p>

                            <br>

                            <p>
                                Kegiatan/Satuan Kerja: <b>{{ $data->sppbj->kegiatansatuan }}</b>
                            </p>
                            <div class="tanda-tangan">
                                <p>Pejabat Penandatangan Kontrak</p>
                                <br><br><br>
                                <p><b>{{ $data->sppbj->namalengkap }}</b></p>
                                <p>{{ $data->sppbj->jabatan }}</p>
                                <p>NIP. {{ $data->sppbj->nip }}</p>
                            </div>
                        </div>

                    </div>

                 <br><br>

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

