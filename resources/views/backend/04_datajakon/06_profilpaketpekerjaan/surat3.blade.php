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

                                    <!-- Tombol Download -->
                                    <button onclick="generatePDF()"  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#e49e07'; this.style.color='white';"
                                    style="background-color: #e49e07; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                        <path d="M5.5 0h5A1.5 1.5 0 0 1 12 1.5v13A1.5 1.5 0 0 1 10.5 16h-5A1.5 1.5 0 0 1 4 14.5V1.5A1.5 1.5 0 0 1 5.5 0zM10 1v14H6V1h4z"/>
                                    </svg>
                                    Download PDF
                                    </button>

                        <a href="/bepekerjaandetailsupdate/{id}">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#27c93c'; this.style.color='white';"
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
                                    NOMOR BERITA ACARA HASIL PENGADAAN LANGSUNG::<br>
                                    nOMOR BERITA <br>
                                    TANGGAL BERITA ACARA HASIL PENGADAAN LANGSUNG: <br>
                                    TANGGAL BERITA ACARA
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; border: 1px solid black;">PAKET PEKERJAAN </td>
                                <td style="border: 1px solid black;">
                                    NOMOR BERITA ACARA HASIL PENGADAAN LANGSUNG:<br>
                                    nOMOR BERITA <br>
                                    TANGGAL BERITA ACARA HASIL PENGADAAN LANGSUNG: <br>
                                    TANGGAL BERITA ACARA <br>
                                    NOMOR BERITA ACARA HASIL PENGADAAN LANGSUNG:<br>
                                    nOMOR BERITA <br>
                                    TANGGAL BERITA ACARA HASIL PENGADAAN LANGSUNG: <br>
                                    TANGGAL BERITA ACARA
                                </td>
                            </tr>
                        </table>

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

