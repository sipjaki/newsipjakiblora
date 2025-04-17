<style>
    /* file: resources/css/custom.css atau langsung di style tag */
.full-width-container {
  max-width: 80% !important;
  width: 80%;
  margin-top: 10px;
}

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.zebra-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.zebra-table th,
.zebra-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.zebra-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }

        body {
          font-family: 'Poppins', sans-serif;
        }


        .btn-navy {
        background-color: #001f3f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        cursor: default;
        transition: all 0.3s ease;
    }

    .btn-navy:hover {
        background-color: white;
        color: black;
        border: 1px solid #001f3f;
    }

</style>
{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

<!-- Wrapper Background Section -->
<section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; " >

<!-- Breadcrumb + Search Bar -->
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins" sty>
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

      <!-- KIRI: Gambar + Breadcrumb -->
      <div class="flex items-center gap-4">
        <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" />
        <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
          <span>/</span>
          <a href="/datajakon/bujkkontraktor" class="font-medium text-blue-600" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
          {{-- <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px;">
            Data Statistik
          </a> --}}
        </div>
      </div>


      <!-- KANAN: Search Bar -->
   <!-- Search Bar Wrapper -->


    </div>
  </div>

    <!-- Konten Data -->
    <div class="full-width-container mx-auto px-4 pb-10">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
            <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                <div style="width: 100%; max-width: 500px;"> <!-- Optional max-width buat tampilan elegan -->
                    <button type="button" style="
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        gap: 10px;
                        padding: 12px 20px;
                        font-size: 16px;
                        font-family: 'Poppins', sans-serif;
                        border: 1px solid #28a745;
                        background-color: #28a745;
                        color: white;
                        border-radius: 6px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        width: 100%;
                    "
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                    >
                        <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                        {{ $title }}
                    </button>
                </div>
            </div>

            <section class="portfolio-details" style="margin-top: -125px;">
                <div class="container">


        {{-- ==================================================== --}}
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


        <div class="container-surat">
            <div class="header-surat">
                <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
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
                @foreach ($dataidentitasopd as $item)
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">1.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama OPD</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->namaopd}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">2.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Alamat OPD</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->alamatopd}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">RT / RW</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->rtrw}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kode Pos</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->kodepos}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kelurahan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->kelurahan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kecamatan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->kecamatan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Kota</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->kota}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Provinsi</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->provinsi}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Negara</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->negara}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">3.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Posisi Geografis</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->posisigeografis}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">4.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tipe Dinas</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->tipedinas}}</td>
                </tr>
                @endforeach
            </table>

            <br>

            {{-- <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;">II. PROFIL PIMPINAN OPD</h4> --}}
            <h4 style="font-family: 'Poppins', sans-serif; font-size: 18px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >II. PROFIL PIMPINAN OPD</span></h4>

            <table>
                @foreach ($datakepaladinas as $item)
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">1.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Lengkap</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->namalengkap}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">2.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">NIP</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->nip}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">3.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tempat, Tanggal Lahir</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->ttl}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">4.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pangkat / Golongan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pangkatgolongan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">5.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jabatan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->jabatan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">6.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Perangkat Daerah</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->perangkatdaerah}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">7.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pendidikan Terakhir</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pendidikanterakhir}}</td>
                </tr>
                @endforeach
            </table>

            <br>

            {{-- <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px;">KEPALA BIDANG BANGUNAN GEDUNG</h5> --}}
            <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >KEPALA BIDANG BANGUNAN GEDUNG</span></h5>
            <table>
                @foreach ($datakabid as $item)
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">1.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Lengkap</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->namalengkap}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">2.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">NIP</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->nip}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">3.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tempat, Tanggal Lahir</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->ttl}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">4.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pangkat / Golongan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pangkatgolongan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">5.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jabatan</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->jabatan}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">6.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Perangkat Daerah</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->perangkatdaerah}}</td>
                </tr>
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">7.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pendidikan Terakhir</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pendidikanterakhir}}</td>
                </tr>
                @endforeach
            </table>

            <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >SUB KOORDINATOR BINA JASA KONSTRUKSI</span></h5>
            {{-- <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px;">SUBKOORDINATOR BINA JASA KONSTRUKSI</h5> --}}
            <table>
                @foreach ($datasubkoordinator as $item)
                <tr>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">1.</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Lengkap</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
                    <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->namalengkap}}</td>
                </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">2.</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">NIP</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->nip}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">3.</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tempat, Tanggal Lahir</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->ttl}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">4.</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pangkat/Golongan</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pangkatgolongan}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">5.</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Jabatan</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->jabatan}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">6.</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Pendidikan Terakhir</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->pendidikanterakhir}}</td>
    </tr>
    @endforeach
</table>
<br>

{{-- <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;">III. OPD Jakon</h4> --}}
<h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >III. OPD Jasa Konstruksi</span></h4>
<table>
    @foreach ($datainformasi as $item)
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{!!$item->informasiopd!!}</td>
    </tr>
    @endforeach
</table>
<br>

{{-- <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;">IV. Kontak OPD</h4> --}}
<h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >IV. Kontak OPD</span></h4>

<table>
    @foreach ($datainformasi as $item)
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px; text-align:center;">1</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nomor Telepon</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->notelepon}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px; text-align:center;">2</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Instagram</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">@ {{$item->instagram}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px; text-align:center;">3</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Tiktok</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->tiktok}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px; text-align:center;">4</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Email</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->email}}</td>
    </tr>
    @endforeach
</table>
<br>

{{-- <h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;">V. SK SIPJAKI</h4> --}}
<h4 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >V. SK SIPJAKI</span></h4>
<table>
    @foreach ($datasipjaki as $item)
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nomor</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->nomor}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Operator SIPJAKI</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->operator1}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Operator SIPJAKI</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->operator2}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Operator SIPJAKI</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->operator3}}</td>
    </tr>
    <tr>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;"></td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">Nama Operator SIPJAKI</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">:</td>
        <td style="font-family: 'Poppins', sans-serif; font-size: 15px;">{{$item->operator4}}</td>
    </tr>
    @endforeach
</table>


        @foreach ($data as $item)


        <div class="portfolio-details-content">
            <div class="portfolio-details-content-title">
                <h4 style="font-family: 'Poppins', sans-serif; font-size:18px;" class="font-bold">{{$item->judul}}</h4>
            </div><!-- portfolio-details-content-title -->
            <div class="portfolio-details-content-text">
                <p style="text-align: justify" ><span style="font-family: 'Poppins', sans-serif;">
                    {{$item->keterangan}}
                </span>
                </p>
            </div><!-- portfolio-details-content-text -->
        </div><!-- portfolio-details-content -->
        @endforeach
    </div><!-- container -->
</section><!-- portfolio-details -->






</div>
</div>
<br><br><br>

</section>


<div class="progress-wrap">
          <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
      </div>
      <!-- back to top end -->

    </div>



    @include('frontend.00_approve.01_cssterpisah.footer1')
    @include('frontend.00_approve.01_cssterpisah.footer')

    {{-- <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px;"><span style="font-family: 'Poppins', sans-serif; font-size: 18px; color:black;" >KEPALA BIDANG BANGUNAN GEDUNG</span></h5> --}}
