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
    body {
        font-family: 'Poppins', 'Times New Roman', serif;
        background-color: #fff;
        margin: 0;
        padding: 0;
    }

    .container-surat {
        width: 800px;
        margin: 30px auto;
        padding: 40px;
        border: 1px solid black;
        background-color: #fff;
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

    h4 {
        margin-top: 20px;
        font-size: 16px;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    table td {
        padding: 6px 4px;
        vertical-align: top;
        font-size: 15px;
        border-bottom: 1px solid #ccc;
    }

    table td:nth-child(1),
    table td:nth-child(2),
    table td:nth-child(3) {
        width: 5%;
    }

    table td:nth-child(4) {
        width: 80%;
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
                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
                            <div class="header-text">
                                <h3>PEMERINTAH KABUPATEN BLORA</h3>
                                <h3 style="text-transform: uppercase;">{{$data->user->name}}</h3>
                                {{-- <p>{{$data->user->alamat}}</p> --}}
                                <p>Alamat Otomatis</p>
                                <h3>BLORA 58214</h3>
                            </div>
                        </div>

                        <div class="line-separator"></div>

                        <h5 style="text-align:center; margin-bottom: 10px;"><span style="font-size: 14px;">INFORMASI PROFIL PAKET PEKERJAAN</span></h5>

                        <table>
                            <tr>
                                <td style="width: 25px;">1.</td><td style="width: 300px;">Nama Paket Pekerjaan</td><td>:</td><td>{{$data->detailsnamapaketpekerjaan->namapaket}}</td>
                            </tr>
                            <tr>
                                <td>2.</td><td>Lokasi </td><td>:</td><td>{{$data->detailsnamapaketpekerjaan->kecamatanblora->kecamatanblora ?? ' Belum Di Update'}}</td>
                            </tr>
                            <tr>
                                <td>3.</td><td>Nilai Kontrak</td><td>:</td><td>{{$data->detailsnamapaketpekerjaan->nilaikontrak}}</td>
                            </tr>
                            <tr>
                                <td>4.</td><td>Nomor/Tanggal Kontrak</td><td>:</td><td>{{$data->detailsnamapaketpekerjaan->tanggalkontrak}}</td>
                            </tr>

                            <tr>
                                <td></td><td>Terbilang </td><td>:</td>
                                <td>{{ terbilang($data->detailsnamapaketpekerjaan->waktupelaksanaan) }} Hari Kalender</td>
                            </tr>

                            <script>
                                // app/Helpers/Helper.php

                        if (!function_exists('terbilang')) {
                            function terbilang($angka)
                            {
                                $angka = (int) $angka;
                                $huruf = [
                                    '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan',
                                    'sepuluh', 'sebelas'
                                ];

                                if ($angka < 12) {
                                    return $huruf[$angka];
                                } elseif ($angka < 20) {
                                    return 'se' . $huruf[$angka - 10];
                                } elseif ($angka < 100) {
                                    return $huruf[(int)($angka / 10)] . ' puluh ' . $huruf[$angka % 10];
                                } elseif ($angka < 200) {
                                    return 'seratus ' . terbilang($angka - 100);
                                } elseif ($angka < 1000) {
                                    return $huruf[(int)($angka / 100)] . ' ratus ' . terbilang($angka % 100);
                                } elseif ($angka < 1000000) {
                                    return terbilang($angka / 1000) . ' ribu ' . terbilang($angka % 1000);
                                } elseif ($angka < 1000000000) {
                                    return terbilang($angka / 1000000) . ' juta ' . terbilang($angka % 1000000);
                                }
                                return $angka;
                            }
                        }

                            </script>

                            <tr>
                                <td></td><td>Terbilang </td><td>:</td><td>... isian data otomatis ... Hari Kalender </td>
                            </tr>
                            <tr>
                                <td></td><td>Kecamatan</td><td>:</td><td>Blora</td>
                            </tr>
                            <tr>
                                <td></td><td>Kota</td><td>:</td><td>Blora</td>
                            </tr>
                            <tr>
                                <td></td><td>Provinsi</td><td>:</td><td>Jawa Tengah</td>
                            </tr>
                            <tr>
                                <td></td><td>Negara</td><td>:</td><td>Indonesia</td>
                            </tr>
                            <tr>
                                <td>3.</td><td>Posisi Geografis</td><td>:</td><td>-6.976853 Lintang, 111.410894 Bujur</td>
                            </tr>
                            <tr>
                                <td>4.</td><td>Tipe Dinas</td><td>:</td><td>B</td>
                            </tr>
                        </table>
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

