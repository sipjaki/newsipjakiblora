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
    .container-surat {
        width: 80%;
        margin: auto;
        padding: 20px;
        border: 1px solid black;
    }

    /* Styling untuk kop surat */
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .header-surat img {
        width: 100px; /* Perbesar sedikit agar lebih proporsional */
        height: 100px;
        margin-right: 50px; /* Jarak antara logo dan teks */
        margin-bottom: 100px; /* Jarak antara logo dan teks */
    }

    .header-surat-text {
        flex: 1; /* Supaya teks mengisi sisa ruang */
    }

    .header-surat h3, .header-surat h4, .header-surat p {
        margin: 2px 0; /* Supaya tidak ada jarak berlebihan */
        font-size: 20px; /* Sesuaikan ukuran font */
    }

    .header-surat h4 {
        font-size: 14px;
        font-weight: normal;
    }

    /* Tambahkan font Poppins ke seluruh halaman */
    .container-surat {
        font-family: 'times new roman', sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        font-size: 20px; /* Sesuaikan ukuran teks */
    }

    th {
        background-color: #ddd;
        font-weight: 600; /* Lebih tebal agar judul tabel lebih jelas */
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
                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora" width="100px;">
                            <br>
                            <div class="header-text" style="font-family: 'Poppins', sans-serif;">
                                <h3 style="font-family: 'Poppins';">PEMERINTAH KABUPATEN BLORA</h3>
                                <h3 style="font-family: 'Poppins';">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
                                <p style="font-family: 'Poppins';">Jl. Nusantara No. 62 Telp. (0296) 531004</p>
                                <h3 style="font-family: 'Poppins';">BLORA 58214</h3>
                                <p>_____________________________________________________________</p>
                                <h3 style="font-family: 'Poppins';">PROFIL OPD JASA KONSTRUKSI</h3>
                                <h4 style="font-family: 'Poppins';">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h4>
                            </div>
                        </div>
                        <br>

                        <h4 style="font-family: 'Poppins', sans-serif; font-size: 18px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >I. IDENTITAS OPD</span></h4>

                        <table>
                                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">1.</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama OPD</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">2.</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Alamat OPD</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jl. Nusantara No. 62</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">RT / RW</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kode Pos</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">58214</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kelurahan</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jetis</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kecamatan</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Blora</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kota</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Blora</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Provinsi</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jawa Tengah</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Negara</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Indonesia</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">3.</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Posisi Geografis</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">-6.976853 Lintang, 111.410894 Bujur</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">4.</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tipe Dinas</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                                <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">B</td>
                            </tr>
                                        </table>

                        <br>

                    </div>

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                 <form id="deleteForm" method="POST" action="">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Hapus</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

                 <script>
                 function setDeleteUrl(button) {
                     var nama = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = nama;
                     var deleteUrl = "/bepaketpekerjaan/delete/" + encodeURIComponent(nama);
                     document.getElementById('deleteForm').action = deleteUrl;
                 }
                 </script>

                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

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

