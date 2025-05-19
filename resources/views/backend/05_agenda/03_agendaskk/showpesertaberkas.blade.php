<style>
    /* Gaya untuk tabel */
    .custom-table-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-radius: 20px;
    }

    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Membuat kolom lebih konsisten */
        min-width: 700px;
    }

    .custom-fl-table th,
    .custom-fl-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #998282;
        text-align: left;
        vertical-align: middle;
        height: 48px; /* Tinggi baris tetap */
        box-sizing: border-box;
    }

    .custom-fl-table th {
        background-color:#4ADE80;
        font-weight: 600;
        color: #2d3436;
        font-size: 14px;
        border-bottom: 2px solid #e0e0e0;
    }

    .custom-fl-table td {
        font-size: 14px;
        color: #000000;
        line-height: 1.5;
    }

    /* Zebra striping untuk baris */
    .custom-fl-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    /* Hover effect */
    .custom-fl-table tbody tr:hover {
        background-color: #f7f7f7;
    }

    /* Scrollbar styling */
    .custom-table-container::-webkit-scrollbar {
        height: 6px;
    }

    .custom-table-container::-webkit-scrollbar-thumb {
        background-color: #c0c0c0;
        border-radius: 4px;
    }

    .custom-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
</style>

<style>
    @media (max-width: 768px) {
        .hide-on-mobile {
            display: none !important;
        }
    }


     @media (max-width: 768px) {
        table.borderbaru {
            display: none !important;
        }
    }


    .table-responsive {
    width: 100%;
    overflow-x: auto;
}

/* Tabel tetap terlihat bagus */
.zebra-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px; /* Bisa kamu ubah sesuai banyaknya kolom */
}

.zebra-table th,
.zebra-table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

/* Tambahan untuk striping */
.zebra-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Responsif khusus untuk HP */
@media (max-width: 768px) {
    .zebra-table {
        min-width: 100%;
    }
}


    .btn-nama-peserta {
        display: block !important; /* Untuk override inline style */
    }

    @media (max-width: 768px) {
        .btn-nama-peserta {
            display: none !important;
        }
    }

     @media (max-width: 768px) {
        .halaman-pertamaku {
            display: none !important;
        }
    }

    .custom-radio {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
        color: black;
    }

    .custom-radio input[type="radio"] {
        display: none;
    }

    .custom-box {
        width: 20px;
        height: 20px;
        border: 2px solid #555;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: all 0.3s ease;
        font-weight: bold;
        font-size: 16px;
    }

    .custom-box::before {
        content: '';
        position: absolute;
        opacity: 0;
        transform: scale(0.6);
        color: red;
        transition: all 0.2s ease;
    }

    .custom-radio input[type="radio"]:checked + .custom-box::before {
        content: '✕'; /* Tanda X */
        opacity: 1;
        transform: scale(1);
    }

    /* Optional hover effect */
    .custom-radio:hover .custom-box {
        border-color: #000;
    }
</style>


<style>
    /* Reset dan Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 1000px;
    margin: 30px auto;
    padding: 16px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #2c3e50;
}

/* Timeline Container */
.timeline-container {
    padding: 16px 0;
    position: relative;
    overflow-x: auto;
}

.timeline {
    display: flex;
    justify-content: space-between;
    min-width: 800px;
    position: relative;
}

/* Checkpoint Styles */
.checkpoint {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    flex: 1;
    min-width: 150px;
}

/* Dot Indicator */
.dot {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    margin-bottom: 12px;
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 12px;
}

.checkpoint.completed .dot {
    background-color: #00AA5B; /* Hijau Tokopedia */
    box-shadow: 0 0 0 4px rgba(0, 170, 91, 0.2);
}

.checkpoint.current .dot {
    background-color: #00AA5B;
    box-shadow: 0 0 0 4px rgba(0, 170, 91, 0.5);
    animation: pulse 1.5s infinite;
}

.checkpoint.pending .dot {
    background-color: #E0E0E0;
    color: #999;
}

/* Connector Line */
.connector {
    position: absolute;
    height: 3px;
    top: 11px;
    left: 60%;
    right: -40%;
    background-color: #E0E0E0;
    z-index: 1;
    transition: background-color 0.3s ease;
}

.connector.active {
    background-color: #00AA5B;
}

/* Checkpoint Content */
.checkpoint-content {
    text-align: center;
    margin-top: 10px;
    padding: 0 5px;
}

.time {
    font-size: 12px;
    color: #666;
    margin-bottom: 5px;
    min-height: 18px;
}

.message {
    font-size: 14px;
    font-weight: 500;
    color: #2c3e50;
}

.checkpoint.completed .message,
.checkpoint.current .message {
    color: #00AA5B;
    font-weight: 600;
}

/* Control Panel */
.control-panel {
    margin-top: 40px;
    text-align: center;
    padding: 16px;
    border-top: 1px solid #eee;
}

button {
    background-color: #00AA5B;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #008a4a;
}

.status-info {
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

/* Animations */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 170, 91, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(0, 170, 91, 0); }
    100% { box-shadow: 0 0 0 0 rgba(0, 170, 91, 0); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .timeline {
        flex-direction: column;
        min-width: auto;
    }

    .checkpoint {
        flex-direction: row;
        align-items: center;
        margin-bottom: 16px;
        width: 100%;
    }

    .dot {
        margin-bottom: 0;
        margin-right: 15px;
    }

    .connector {
        display: none;
    }

    .checkpoint-content {
        text-align: left;
        margin-top: 0;
    }
}
</style>


<style>
    .halaman-pertama {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    .halaman-kedua {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    /* Styling untuk kop surat */
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
        margin-top:-50px;
    }

    .header-surat img {
        width: 300px; /* Perbesar sedikit agar lebih proporsional */
        height: 300px;
        margin-right: 50px; /* Jarak antara logo dan teks */
        margin-bottom: 300px; /* Jarak antara logo dan teks */
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

<style>
    .btn-suspend {
        background-color: orange;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-suspend:hover {
        background-color: white;
        color: black;
        border: 1px solid orange;
    }

    .btn-expired {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-expired:hover {
        background-color: white;
        color: black;
        border: 1px solid red;
    }

    .btn-active {
        background-color: green;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-active:hover {
        background-color: white;
        color: black;
        border: 1px solid green;
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
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">


@canany(['super_admin', 'admin'])
           <a href="{{ url()->previous() }}">
    <button
        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16" style="margin-right: 8px;">
            <path fill-rule="evenodd"
                d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
        </svg>
        Kembali
    </button>
</a>

@endcanany

@canany(['super_admin', 'admin', 'lsppenerbit'])

<form action="{{ route('peserta.downloadSemua', $datapeserta->id) }}" method="POST">
    @csrf
    <button type="submit"
    onmouseover="this.style.background='linear-gradient(135deg, white, #c8ffc8)'; this.style.color='black';"
    onmouseout="this.style.background='linear-gradient(135deg, #d4af37, #4CAF50)'; this.style.color='white';"
    style="background: linear-gradient(135deg, #d4af37, #4CAF50); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s;">

    <!-- Ikon Download -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
    viewBox="0 0 16 16" style="margin-right: 8px;">
    <path d="M.5 9.9v2.6c0 .6.5 1 1 1h13c.6 0 1-.4 1-1V9.9c0-.5-.4-1-1-1s-1 .5-1 1v1.6H2.5V9.9c0-.5-.5-1-1-1s-1 .5-1 1z"/>
    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3.182-3.182a.5.5 0 1 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.172 7.964a.5.5 0 1 0-.708.708l3.182 3.182z"/>
</svg>
Download Berkas .zip/.rar Peserta
</button>
</form>

@endcanany


@can('pekerja')

           <a href="/hakaksespekerjaberkas">
    <button
        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
        style="background-color: #1d54ad; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16" style="margin-right: 8px;">
            <path fill-rule="evenodd"
                d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
        </svg>
        Kembali
    </button>
</a>


@endcan

@can('lsppenerbit')
   <button
    onclick="history.back();"
    onmouseover="this.style.background = 'white'; this.style.color = 'black';"
    onmouseout="this.style.background = 'linear-gradient(to right, black, white)'; this.style.color = 'white';"
    style="background: linear-gradient(to right, black, white); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
    </svg>
    Kembali
</button>

@endcan



<button class="btn-nama-peserta"
    onmouseover="this.style.background='linear-gradient(135deg, white, #c8ffc8)'; this.style.color='black';"
    onmouseout="this.style.background='linear-gradient(135deg, #d4af37, #4CAF50)'; this.style.color='white';"
    style="background: linear-gradient(135deg, #d4af37, #4CAF50); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s;">

    <!-- Ikon User -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd"
            d="M14 14s-1-1.5-6-1.5S2 14 2 14s1-4 6-4 6 4 6 4z"/>
    </svg>
    Nama Peserta : {{ $datapeserta->user->name }}
</button>


                     {{-- <a href="/beagendapelatihanmateri/createmateri/{{$datapeserta->id}}">
                        <button
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';"
                         style="background-color: #166534; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                         <!-- Ikon Kembali -->
                         <i class="fa fa-plus" style="margin-right: 8px;"></i>
                         Create
                     </button>
                     </a> --}}
                 </div>

                    </div>
<hr>

<div class="halaman-pertama">
    <div class="halaman-pertamaku" style="text-align: center; margin-bottom: 10px;">
    <div style="display: flex; align-items: center; justify-content: center;">
        <!-- Logo -->
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora"
             style="width: 100px; height: auto; margin-right: 20px; margin-top: 10px;">
        <img src="/assets/icon/pupr.png" alt="Logo Kabupaten Blora"
             style="width: 100px; height: auto; margin-right: 20px; margin-top: 10px;">

        <!-- Teks Kop -->
        <div style="text-align: center; margin-left:50px;">
            <h3 style="margin: 0;">PEMERINTAH KABUPATEN BLORA</h3>
            <h3 style="margin: 0;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
            <p style="margin: 0;">Jl. Nusantara No. 62 Telp. (0296) 531004</p>
            <h3 style="margin: 0;">KABUPATEN BLORA 58214 PROVINSI JAWA TENGAH</h3>
        </div>
    </div>

    <!-- Garis dan Judul -->
    <div style="margin-top: 10px;">
        <hr style="border: 3px solid black; width: 100%; margin: 10px 0;">
        <h5 style="margin: 0;">DATA PESERTA SKK TENAGA KONSTRUKSI</h5>
        <h5 style="margin: 0;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h5>
    </div>
</div>

    <br>

    <h5 style="color: navy; font-weight:800; font-size:16px;">I. IDENTITAS PESERTA</h4>

        <div class="table-responsive">
            <table class="zebra-table table-striped">

                <tr>
                    <td style="width:50px; text-align:center; font-size:16px;">1</td>
                    <td style="width:200px; text-align:center; font-size:16px;">Nama Lengkap</td>
                    <td style="width:50px; text-align:center; font-size:16px;" >:</td>
                    <td style="width:200px; text-align:center; font-size:16px;">{{ ucwords(strtolower($datapeserta->user->name)) }}</td>
            <td style="width:500px; text-align:center; font-size:16px;">

                <div style="margin-top: 10px;">
                    @if($datapeserta->uploadfoto && file_exists(public_path('storage/' . $datapeserta->uploadfoto)))
                        <!-- Menampilkan gambar dari storage -->
                        <img src="{{ asset('storage/' . $datapeserta->uploadfoto) }}" alt="Pas Foto 4 x 6 " style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                        @elseif($datapeserta->uploadfoto)
                        <!-- Menampilkan gambar dari path luar storage -->
                        <img src="{{ asset($datapeserta->uploadfoto) }}" alt="Pas Foto 4 x 6 " style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                    @else
                        <!-- Placeholder jika tidak ada data -->
                        <p>Data belum diupdate</p>
                    @endif
                </div>
            </td>
        </tr>

    </table>
</div>

<div class="table-responsive">
    <table class="zebra-table table-striped">

        <tr>
            <td style="text-align: center; font-size:16px;">2</td>
            <td style="font-size:16px;">Jabatan Kerja </td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->jabatankerja->jabatankerja}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">3</td>
            <td style="font-size:16px;">Tempat Lahir </td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->tempatlahir}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">4</td>
            <td style="font-size:16px;">Jenis Kelamin </td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->jeniskelamin}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">5</td>
            <td style="font-size:16px;">KTP/KITAS</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->nik}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;" >6</td>
            <td style="font-size:16px;">Alamat</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->alamat}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">7</td>
            <td style="font-size:16px;">Telepon</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->notelepon}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">8</td>
            <td style="font-size:16px;">Email</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->email}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">9</td>
            <td style="font-size:16px;">Jenjang Pendidikan</td>
            <td style="font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->jenjangpendidikan->jenjangpendidikan}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">10</td>
            <td style="font-size:16px;">Sekolah/Universitas</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->namasekolah->namasekolah}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">11</td>
            <td style="font-size:16px;">Tahun Lulus</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->tahunlulus}}</td>
        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">12</td>
            <td style="font-size:16px;">Tahun Bimtek</td>
            <td style="text-align: center; font-size:16px;">:</td>
            <td style="font-size:16px;">{{$datapeserta->tahunpilihan->tahunpilihan}}</td>
        </tr>

    </table>
</div>

<br>

    <h5 style="color: navy; font-weight:800; font-size:16px;">II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <div class="table-responsive">
    <table class="zebra-table table-striped">
        <tr>
            <td style="text-align: center; font-size:16px;">KTP/KITAS*</td>
            <td style="text-align: center; font-size:16px;">Foto</td>
            <td style="text-align: center; font-size:16px;">Ijazah</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                 <div style="margin-top: 10px;">
    @if($datapeserta->uploadktp && file_exists(public_path('storage/' . $datapeserta->uploadktp)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadktp) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadktp)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadktp) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>

            </td>

            <td style="text-align: center;">
                    <div style="margin-top: 10px;">
    @if($datapeserta->uploadfoto && file_exists(public_path('storage/' . $datapeserta->uploadfoto)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadfoto) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadfoto)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadfoto) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>

            <td style="text-align: center;">
                        <div style="margin-top: 10px;">
    @if($datapeserta->uploadijazah && file_exists(public_path('storage/' . $datapeserta->uploadijazah)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadijazah) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadijazah)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadijazah) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>

        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">Pengalaman Kerja</td>
            <td style="text-align: center; font-size:16px;">NPWP</td>
            <td style="text-align: center; font-size:16px;">Daftar Riwayat Hidup</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="margin-top: 10px;">
    @if($datapeserta->uploadpengalaman && file_exists(public_path('storage/' . $datapeserta->uploadpengalaman)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadpengalaman) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadpengalaman)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadpengalaman) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>
            <td style="text-align: center;">
                 <div style="margin-top: 10px;">
    @if($datapeserta->uploadnpwp && file_exists(public_path('storage/' . $datapeserta->uploadnpwp)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadnpwp) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadnpwp)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadnpwp) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>
            <td style="text-align: center;">
                <div style="margin-top: 10px;">
    @if($datapeserta->uploaddaftarriwayathidup && file_exists(public_path('storage/' . $datapeserta->uploaddaftarriwayathidup)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploaddaftarriwayathidup) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploaddaftarriwayathidup)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploaddaftarriwayathidup) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>

        </tr>

        <tr>
            <td style="text-align: center; font-size:16px;">Surat Kebenaran Data</td>
        </tr>
        <tr>
                      <td style="text-align: center;">
                <div style="margin-top: 10px;">
    @if($datapeserta->uploadkebenarandata && file_exists(public_path('storage/' . $datapeserta->uploadkebenarandata)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $datapeserta->uploadkebenarandata) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @elseif($datapeserta->uploadkebenarandata)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($datapeserta->uploadkebenarandata) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 250px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>

        </tr>


    </table>
    <br>
</div>

</div>


<div class="halaman-kedua">

    <h5 style="color: navy; font-weight:800; font-size:16px;">III. NAMA ASOSIASI DAN KESEDIAAN MENGIKUTI BIMBINGAN TEKNIS</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}

<div class="table-responsive">

    <table class="zebra-table table-striped">
        <tr>
            <td style="text-align: center; font-size:16px;">Nama Utusan</td>
            <td style="text-align: center; font-size:16px;">{{$datapeserta->namaasosiasi}}</td>
        </tr>
    </table>

</div>

<div class="table-responsive">
<table class="zebra-table table-striped">
        <tr>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI SKK ?</td>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI AKUN SIKI/ E-SIMPAN ?</td>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI PORTAL PUPR ?</td>
            <td style="text-align: center; font-size:16px;">BERSEDIA MEMATUHI PERATURAN</td>
        </tr>
        <tr>
           <td style="text-align: center; font-size:16px;">
            {{$datapeserta->punyaskk}}
        </td>
           <td style="text-align: center; font-size:16px;">
            {{$datapeserta->punyasiki}}
        </td>
           <td style="text-align: center; font-size:16px;">
            {{$datapeserta->portalpupr}}
        </td>
           <td style="text-align: center; font-size:16px;">
            {{$datapeserta->siappatuh}}
        </td>

        </tr>

    </table>
</div>
    <br>

    <style>

        .borderbaru, .borderbaru tr, .borderbaru td {
    border: none !important;
}

    </style>

<table class="borderbaru" style="border-collapse: collapse; border: none;">

        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%; font-size:16px;">DI TETAPKAN DI KABUPATEN BLORA</td>
        </tr>

        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%; font-size:16px;">PADA TANGGAL {{$data->waktupelaksanaan}}</td>
        </tr>
        <br>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%; font-size:16px;">DINAS PEKERJAAN UMUM DAN PENAATAAN RUANG <br> SUB KOORDINATOR BIDANG BANGUNAN GEDUNG </td>
        </tr>

        <br><br>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%; border-bottom: 2px solid black; text-align: center; font-size:16px;">
                    MOHAMAD ARIF HIDAYAT, ST
                </td>
            </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>   <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>

    </table>

    </div>

  <div class="hide-on-mobile" style="display: flex; justify-content: flex-end; padding: 10px;">
    <!-- Tombol Download PDF -->
    <button id="downloadPDF" class="download-btn font-size:16px;">
        <i class="bi bi-download" style="margin-right: 10px;"></i>
        <span style="font-size: 16px;">Download PDF</span>
    </button>
</div>


    <style>
        .download-btn {
            background-color: #001f3f;
            color: white;
            border: 2px solid #001f3f;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Efek Hover */
        .download-btn:hover {
            background-color: white !important;
            color: #001f3f !important;
            border: 2px solid #001f3f !important;
        }
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    document.getElementById("downloadPDF").addEventListener("click", function () {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF("p", "mm", "a4");

        const margin = 20; // 2 cm margin di semua sisi
        const pdfWidth = 210 - 2 * margin; // Lebar A4 dikurangi margin kiri & kanan
        const pdfHeight = 297 - 1 * margin; // Tinggi A4 dikurangi margin atas & bawah

        const page1 = document.querySelector(".halaman-pertama");
        const page2 = document.querySelector(".halaman-kedua");

        function addPageContent(element, yOffset, addNewPage = false) {
            return new Promise((resolve) => {
                html2canvas(element, { scale: 2, scrollY: -window.scrollY }).then((canvas) => {
                    if (addNewPage) pdf.addPage();
                    const imgData = canvas.toDataURL("image/png");
                    const imgWidth = pdfWidth;
                    const imgHeight = (canvas.height * imgWidth) / canvas.width;
                    pdf.addImage(imgData, "PNG", margin, yOffset, imgWidth, imgHeight);
                    resolve();
                });
            });
        }

        addPageContent(page1, margin).then(() => {
            addPageContent(page2, margin, true).then(() => {
                pdf.save("{{$datapeserta->user->name}}");
            });
        });
    });
</script>
<hr>


                    <div class="container">
                        <h5>Status Verifikasi Berkas Anda !</h5>
                        <div id="checkpoint-container" class="timeline-container"></div>

                        <div class="control-panel">
                             <button id="simulate-btn" style="display: none;"></button>

                            <div class="status-info" id="current-status"></div>
                        </div>
                    </div>

<script>
    // Data checkpoint - akan diupdate berdasarkan data PHP
    const checkpointData = [
        {
            id: 1,
            name: 'Dokumen Masuk',
            status: 'completed',
            time: '<?php echo isset($datapeserta->created_at) ? $datapeserta->created_at : date("Y-m-d H:i:s") ?>',
            message: ''
        },
        {
            id: 2,
            name: 'Verifikasi Berkas',
            status: 'pending',
            time: '<?php echo isset($datapeserta->verifikasipu_time) ? $datapeserta->verifikasipu_time : "" ?>',
            message: 'Menunggu verifikasi DPUPR'
        },
        {
            id: 3,
            name: 'Verifikasi DPUPR',
            status: 'pending',
            time: '<?php echo isset($datapeserta->verifikasipu_time) ? $datapeserta->verifikasipu_time : "" ?>',
            message: 'Menunggu verifikasi DPUPR'
        },
        {
            id: 4,
            name: 'Verifikasi LSP',
            status: 'pending',
            time: '<?php echo isset($datapeserta->verifikasilps_time) ? $datapeserta->verifikasilps_time : "" ?>',
            message: 'Menunggu Verifikasi LSP'
        },
        {
            id: 5,
            name: 'Sertifikat Terbit',
            status: 'pending',
            time: '<?php echo isset($datapeserta->verifikasihadirsertifikasi_time) ? $datapeserta->verifikasihadirsertifikasi_time : "" ?>',
            message: 'Terbit'
        }
    ];

    // Fungsi untuk mengupdate status berdasarkan data PHP
    function updateCheckpointStatus() {
        // Step 1 otomatis completed (hijau)
        checkpointData[0].status = 'completed';
        checkpointData[0].message = '';

        // Step 2: Verifikasi Berkas berdasarkan verifikasipu
        if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'lolos') {
            checkpointData[1].status = 'completed';
            checkpointData[1].message = 'Berkas lolos';
        } else if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'dikembalikan') {
            checkpointData[1].status = 'rejected';
            checkpointData[1].message = 'Berkas dikembalikan';
        }

        // Step 3: Verifikasi DPUPR hanya jika verifikasipu 'lolos'
        if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'lolos') {
            checkpointData[2].status = 'completed';
            checkpointData[2].message = 'Telah diverifikasi oleh DPUPR';
        }

        // Step 4: Verifikasi LSP berdasarkan verifikasilps
        if ('<?php echo isset($datapeserta->verifikasilps) ? $datapeserta->verifikasilps : "" ?>' === '1' ||
            '<?php echo isset($datapeserta->verifikasilps) ? $datapeserta->verifikasilps : "" ?>' === 'true') {
            checkpointData[3].status = 'completed';
            checkpointData[3].message = 'Telah diverifikasi oleh LSP';
        }

        // Step 5: Sertifikat Terbit berdasarkan verifikasihadirsertifikasi
        if ('<?php echo isset($datapeserta->verifikasihadirsertifikasi) ? $datapeserta->verifikasihadirsertifikasi : "" ?>' === '1' ||
            '<?php echo isset($datapeserta->verifikasihadirsertifikasi) ? $datapeserta->verifikasihadirsertifikasi : "" ?>' === 'true') {
            checkpointData[4].status = 'completed';
            checkpointData[4].message = 'Sertifikat telah diterbitkan';
        }
    }

    // Render checkpoint
    function renderCheckpoints() {
        const container = document.getElementById('checkpoint-container');
        container.innerHTML = '';

        const timeline = document.createElement('div');
        timeline.className = 'timeline-horizontal';

        checkpointData.forEach((checkpoint, index) => {
            const checkpointWrapper = document.createElement('div');
            checkpointWrapper.className = 'checkpoint-wrapper';

            // Dot and connector container
            const dotConnectorContainer = document.createElement('div');
            dotConnectorContainer.className = 'dot-connector-container';

            // Dot indicator
            const dot = document.createElement('div');
            dot.className = `dot ${checkpoint.status}`;
            dot.textContent = checkpoint.id;
            dotConnectorContainer.appendChild(dot);

            // Connector line (except for last item)
            if (index < checkpointData.length - 1) {
                const connector = document.createElement('div');
                connector.className = `connector ${checkpoint.status === 'completed' ? 'active' : ''}`;
                dotConnectorContainer.appendChild(connector);
            }

            // Content container
            const content = document.createElement('div');
            content.className = 'checkpoint-content';

            const name = document.createElement('div');
            name.className = 'checkpoint-name';
            name.textContent = checkpoint.name;
            content.appendChild(name);

            // Add status message
            const message = document.createElement('div');
            message.className = 'message';
            message.textContent = checkpoint.message;
            content.appendChild(message);

            // Format time if available
            if (checkpoint.time && checkpoint.time.trim() !== '' && checkpoint.time !== '0000-00-00 00:00:00') {
                const formattedTime = formatTime(checkpoint.time);
                if (formattedTime) {
                    const time = document.createElement('div');
                    time.className = 'time';

                    if (checkpoint.status === 'completed') {
                        time.textContent = `Selesai: ${formattedTime}`;
                    } else if (checkpoint.status === 'rejected') {
                        time.textContent = `Dikembalikan: ${formattedTime}`;
                    } else {
                        time.textContent = `Terakhir diperbarui: ${formattedTime}`;
                    }

                    content.appendChild(time);
                }
            }

            checkpointWrapper.appendChild(dotConnectorContainer);
            checkpointWrapper.appendChild(content);
            timeline.appendChild(checkpointWrapper);
        });

        container.appendChild(timeline);
        updateCurrentStatus();
    }

    // Format waktu dengan validasi yang lebih robust
    function formatTime(dateString) {
        try {
            if (!dateString || dateString.trim() === '' || dateString === '0000-00-00 00:00:00') {
                return null;
            }

            // Coba parse sebagai Date object
            const date = new Date(dateString);

            // Jika hasilnya invalid date
            if (isNaN(date.getTime())) {
                // Coba format MySQL (YYYY-MM-DD HH:MM:SS)
                const mysqlPattern = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
                const match = dateString.match(mysqlPattern);

                if (match) {
                    const [_, year, month, day, hours, minutes, seconds] = match;
                    const newDate = new Date(year, month - 1, day, hours, minutes, seconds);
                    if (!isNaN(newDate.getTime())) {
                        return newDate.toLocaleDateString('id-ID', {
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                    }
                }
                return null;
            }

            return date.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        } catch (e) {
            console.error('Error formatting time:', e);
            return null;
        }
    }

    // Update status teks
    function updateCurrentStatus() {
        const statusInfo = document.getElementById('current-status');
        let currentStatus = '';
        let currentMessage = '';

        // Cari tahap terakhir yang completed atau rejected
        for (let i = checkpointData.length - 1; i >= 0; i--) {
            if (checkpointData[i].status === 'completed' || checkpointData[i].status === 'rejected') {
                currentStatus = checkpointData[i].name;
                currentMessage = checkpointData[i].message;
                break;
            }
        }

        // Jika tidak ada yang completed/rejected, ambil tahap pertama yang pending
        if (!currentStatus) {
            for (let i = 0; i < checkpointData.length; i++) {
                if (checkpointData[i].status === 'pending') {
                    currentStatus = checkpointData[i].name;
                    currentMessage = checkpointData[i].message;
                    break;
                }
            }
        }

        if (currentStatus) {
            statusInfo.innerHTML = `<strong>Status saat ini:</strong> ${currentStatus}<br>
                                  <em>${currentMessage}</em>`;
        }
    }

    // Inisialisasi awal
    document.addEventListener('DOMContentLoaded', () => {
        updateCheckpointStatus();
        renderCheckpoints();
    });
</script>
 <style>
    /* Main Timeline Container */
    .timeline-horizontal {
        display: flex;
        width: 100%;
        padding: 20px 0;
        position: relative;
        flex-wrap: wrap;
    }

    /* Each Checkpoint Wrapper */
    .checkpoint-wrapper {
        display: flex;
        flex: 1;
        min-width: 150px;
        position: relative;
        flex-direction: column;
        align-items: center;
    }

    /* Container for dot and connector */
    .dot-connector-container {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: center;
        position: relative;
    }

    /* Dot Styling */
    .dot {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        z-index: 2;
        position: relative;
        flex-shrink: 0;
    }

    /* Dot Status Colors */
    .dot.completed {
        background-color: #4CAF50;
        color: white;
    }
    .dot.rejected {
        background-color: #f44336;
        color: white;
    }
    .dot.pending {
        background-color: #e0e0e0;
        color: #666;
        border: 2px solid #999;
    }

    /* Connector Line */
    .connector {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 4px;
        width: 100%;
        transform: translateY(-50%);
        background-color: #e0e0e0;
        z-index: 1;
    }
    .connector.active {
        background-color: #4CAF50;
    }

    /* Checkpoint Content */
    .checkpoint-content {
        margin-top: 10px;
        text-align: center;
        padding: 0 10px;
        word-wrap: break-word;
        max-width: 140px;
        font-size: 14px;
    }

    /* Remove connector for last item */
    .checkpoint-wrapper:last-child .connector {
        display: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .timeline-horizontal {
            flex-direction: column;
            align-items: flex-start;
        }

        .checkpoint-wrapper {
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        .dot-connector-container {
            width: auto;
            margin-right: 10px;
        }

        .connector {
            position: static;
            width: 50px;
            height: 4px;
            margin: 0 10px;
            transform: none;
        }

        .checkpoint-content {
            margin-top: 0;
            margin-left: 10px;
            max-width: none;
            text-align: left;
        }
    }
  </style>
<hr>

<form action="{{ route('validasidokumenpesertaskk', $datapeserta->id) }}" method="POST">
    @csrf
    @method('PUT')
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
<thead style="font-size: 16px; background-color: green; color: white;">
                                    <tr>
                                        {{-- <th style="width: 25px; text-align:center;"><i class="bi bi-hash"></i> No</th> --}}
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> SKK Saudara  </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalSKK{{ $datapeserta->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal KTP -->
                                            <div class="modal fade" id="modalSKK{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalSKKLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalSKKLbl{{ $datapeserta->id }}">Dokumen SKK</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                         <div style="margin-top: 10px;">
                                                            @if($datapeserta->skkanda && file_exists(public_path('storage/' . $datapeserta->skkanda)))
                                                                <!-- Display the default iframe when the file exists in the storage -->
                                                                <iframe src="{{ asset('storage/' . $datapeserta->skkanda) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                            @elseif($datapeserta->skkanda)
                                                                <!-- Display the iframe with the updated file -->
                                                                <iframe src="{{ asset($datapeserta->skkanda) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                            @else
                                                                <!-- Show a message if there's no file available -->
                                                                <p style="color: red; font-weight: bold;">Peserta Belum Memiliki SKK !!</p>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                            <p style="font-size: 16px; color:black;">Berkas SKK Screenshoot</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        {{-- <th style="width: 25px; text-align:center;"><i class="bi bi-hash"></i> No</th> --}}
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Foto KTP </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalKTP{{ $datapeserta->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal KTP -->
                                            <div class="modal fade" id="modalKTP{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalKTPLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalKTPLbl{{ $datapeserta->id }}">Dokumen KTP</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                      <div class="modal-body text-center">
                                                            @if ($datapeserta->uploadktp)
                                                                @php
                                                                    $filePath = public_path('storage/' . $datapeserta->uploadktp);
                                                                    $fileUrl = asset('storage/' . $datapeserta->uploadktp);
                                                                    $fallbackUrl = asset($datapeserta->uploadktp); // Jika bukan dari storage
                                                                    $isStorageFile = file_exists($filePath);
                                                                    $extension = strtolower(pathinfo($datapeserta->uploadktp, PATHINFO_EXTENSION));
                                                                @endphp

                                                                @if ($isStorageFile)
                                                                    @if ($extension === 'pdf')
                                                                        <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="500px"></iframe>
                                                                        <a href="{{ $fileUrl }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                                    @else
                                                                        <img src="{{ $fileUrl }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                        <a href="{{ $fileUrl }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                                    @endif
                                                                @else
                                                                    @if ($extension === 'pdf')
                                                                        <iframe src="{{ $fallbackUrl }}" frameborder="0" width="100%" height="500px"></iframe>
                                                                        <a href="{{ $fallbackUrl }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                                    @else
                                                                        <img src="{{ $fallbackUrl }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                        <a href="{{ $fallbackUrl }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                                    @endif
                                                                @endif
                                                            @else
                                                                <p style="color: red; font-weight: bold;">Data belum diupdate</p>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </th>

                                        @canany(['pekerja', 'lsppenerbit'])
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                            <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                            @if ($datapeserta->validasi_ktp === 'tidak_sesuai')
                                            <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                            @elseif ($datapeserta->validasi_ktp === 'sesuai')
                                                <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                            @else
                                                <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                @endif
                                            </div>
                                        </th>
                                        @endcanany

                                        @canany(['super_admin', 'admin'])
                                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <div style="display: flex; justify-content: center; gap: 20px;">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_ktp" value="sesuai"
                                                            {{ $datapeserta->validasi_ktp == 'sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Sesuai
                                                    </label>

                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_ktp" value="tidak_sesuai"
                                                            {{ $datapeserta->validasi_ktp == 'tidak_sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Tidak Sesuai
                                                    </label>
                                                </div>
                                            </th>
                                        @endcanany

                                    </tr>
                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Pas Foto 3 x 4 </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalFoto{{ $datapeserta->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="modalFoto{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalFotoLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalFotoLbl{{ $datapeserta->id }}">Dokumen Foto</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            @if($datapeserta->uploadfoto && file_exists(public_path('storage/' . $datapeserta->uploadfoto)))
                                                                <img src="{{ asset('storage/' . $datapeserta->uploadfoto) }}" alt="Foto" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset('storage/' . $datapeserta->uploadfoto) }}" class="btn btn-primary mt-2" download>Download Foto</a>
                                                            @elseif($datapeserta->uploadfoto)
                                                                <img src="{{ asset($datapeserta->uploadfoto) }}" alt="Foto" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset($datapeserta->uploadfoto) }}" class="btn btn-primary mt-2" download>Download Foto</a>
                                                            @else
                                                                <p>Data belum diupdate</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>


                                            @canany(['pekerja', 'lsppenerbit'])
                                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                        @if ($datapeserta->validasi_foto === 'tidak_sesuai')
                                                            <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                        @elseif ($datapeserta->validasi_foto === 'sesuai')
                                                            <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                        @else
                                                            <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                        @endif
                                                    </div>
                                                </th>
                                            @endcanany

                                            @canany(['super_admin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_foto" value="sesuai"
                                                                {{ $datapeserta->validasi_foto == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_foto" value="tidak_sesuai"
                                                                {{ $datapeserta->validasi_foto == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                    </tr>
                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Ijazah  </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">

                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalIjazah{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Ijazah -->
                                                <div class="modal fade" id="modalIjazah{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalIjazahLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalIjazahLbl{{ $datapeserta->id }}">Dokumen Ijazah</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadijazah && file_exists(public_path('storage/' . $datapeserta->uploadijazah)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadijazah) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadijazah)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadijazah) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </th>

                                              @canany(['pekerja', 'lsppenerbit'])
                                          <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                        @if ($datapeserta->validasi_ijazah === 'tidak_sesuai')
                                                            <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                        @elseif ($datapeserta->validasi_ijazah === 'sesuai')
                                                            <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                        @else
                                                            <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                        @endif
                                                    </div>
                                                </th>
                                            @endcanany

                                            @canany(['super_admin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_ijazah" value="sesuai"
                                                                {{ $datapeserta->validasi_ijazah == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_ijazah" value="tidak_sesuai"
                                                                {{ $datapeserta->validasi_ijazah == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                    </tr>
                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Pengalaman  </th>
                                       <th class="text-center align-middle" style="background-color: #e2e8f0; color: black;">

                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalPengalaman{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Pengalaman Kerja -->
                                                <div class="modal fade" id="modalPengalaman{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalPengalamanLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalPengalamanLbl{{ $datapeserta->id }}">Dokumen Pengalaman Kerja</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadpengalaman && file_exists(public_path('storage/' . $datapeserta->uploadpengalaman)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadpengalaman) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadpengalaman)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadpengalaman) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                        </th>
                                                  @canany(['pekerja', 'lsppenerbit'])
                                                  <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                        @if ($datapeserta->validasi_pengalaman === 'tidak_sesuai')
                                                            <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                        @elseif ($datapeserta->validasi_pengalaman === 'sesuai')
                                                            <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                        @else
                                                            <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                        @endif
                                                    </div>
                                                    </th>
                                                @endcanany

                                            @canany(['super_admin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_pengalaman" value="sesuai"
                                                                {{ $datapeserta->validasi_pengalaman == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_pengalaman" value="tidak_sesuai"
                                                                {{ $datapeserta->validasi_pengalaman == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                    </tr>
                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Surat Kebenaran Data  </th>
                                        <th class="text-center align-middle" style="background-color: #e2e8f0; color: black;">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalKebenaranData{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Pernyataan Kebenaran Data -->
                                                <div class="modal fade" id="modalKebenaranData{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalKebenaranDataLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalKebenaranDataLbl{{ $datapeserta->id }}">Dokumen Pernyataan Kebenaran Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadkebenarandata && file_exists(public_path('storage/' . $datapeserta->uploadkebenarandata)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadkebenarandata)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </th>
                                       @canany(['pekerja', 'lsppenerbit'])
                                             <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                    @if ($datapeserta->validasi_kebenarandata === 'tidak_sesuai')
                                                        <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                    @elseif ($datapeserta->validasi_kebenarandata === 'sesuai')
                                                        <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                    @else
                                                        <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                    @endif
                                                </div>
                                            </th>
                                        @endcanany

                                        @canany(['super_admin', 'admin'])
                                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <div style="display: flex; justify-content: center; gap: 20px;">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_kebenarandata" value="sesuai"
                                                            {{ $datapeserta->validasi_kebenarandata == 'sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Sesuai
                                                    </label>

                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_kebenarandata" value="tidak_sesuai"
                                                            {{ $datapeserta->validasi_kebenarandata == 'tidak_sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Tidak Sesuai
                                                    </label>
                                                </div>
                                            </th>
                                        @endcanany

                                    </tr>

                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> NPWP </th>
                                        <th class="text-center align-middle" style="background-color: #e2e8f0; color: black;">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                        style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                        data-bs-toggle="modal" data-bs-target="#modalNPWP{{ $datapeserta->id }}">
                                                        <i class="bi bi-eye"></i> Lihat
                                                    </button>
                                                </td>

                                                <!-- Modal NPWP -->
                                                <div class="modal fade" id="modalNPWP{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalNPWPLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalNPWPLbl{{ $datapeserta->id }}">Dokumen NPWP</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                              <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadnpwp)
                                                                        @php
                                                                            $filePath = public_path('storage/' . $datapeserta->uploadnpwp);
                                                                            $fileUrl = asset('storage/' . $datapeserta->uploadnpwp);
                                                                            $fallbackUrl = asset($datapeserta->uploadnpwp); // Jika bukan dari storage
                                                                            $isStorageFile = file_exists($filePath);
                                                                            $extension = strtolower(pathinfo($datapeserta->uploadnpwp, PATHINFO_EXTENSION));
                                                                        @endphp

                                                                        @if($isStorageFile)
                                                                            @if($extension === 'pdf')
                                                                                <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                            @else
                                                                                <img src="{{ $fileUrl }}" alt="Dokumen NPWP" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                                            @endif
                                                                        @else
                                                                            @if($extension === 'pdf')
                                                                                <iframe src="{{ $fallbackUrl }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                            @else
                                                                                <img src="{{ $fallbackUrl }}" alt="Dokumen NPWP" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                                            @endif
                                                                        @endif
                                                                    @else
                                                                        <p style="color: red; font-weight: bold;">Data belum diupdate</p>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </th>

                                        @canany(['pekerja', 'lsppenerbit'])
                                                       <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                    @if ($datapeserta->validasi_npwp === 'tidak_sesuai')
                                                        <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                    @elseif ($datapeserta->validasi_npwp === 'sesuai')
                                                        <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                    @else
                                                        <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                    @endif
                                                </div>
                                            </th>
                                        @endcanany

                                        @canany(['super_admin', 'admin'])
                                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <div style="display: flex; justify-content: center; gap: 20px;">
                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_npwp" value="sesuai"
                                                            {{ $datapeserta->validasi_npwp == 'sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Sesuai
                                                    </label>

                                                    <label class="custom-radio">
                                                        <input type="radio" name="validasi_npwp" value="tidak_sesuai"
                                                            {{ $datapeserta->validasi_npwp == 'tidak_sesuai' ? 'checked' : '' }}>
                                                        <span class="custom-box"></span>
                                                        Tidak Sesuai
                                                    </label>
                                                </div>
                                            </th>
                                        @endcanany

                                    </tr>
                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Riwayat Hidup </th>
                                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalDaftarRiwayatHidup{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Daftar Riwayat Hidup -->
                                                <div class="modal fade" id="modalDaftarRiwayatHidup{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalDaftarRiwayatHidupLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalDaftarRiwayatHidupLbl{{ $datapeserta->id }}">Dokumen Daftar Riwayat Hidup</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    <!-- Menampilkan iframe Daftar Riwayat Hidup -->
                                                                    @if($datapeserta->uploaddaftarriwayathidup && file_exists(public_path('storage/' . $datapeserta->uploaddaftarriwayathidup)))
                                                                        <iframe src="{{ asset('storage/' . $datapeserta->uploaddaftarriwayathidup) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                    @elseif($datapeserta->uploaddaftarriwayathidup)
                                                                        <iframe src="{{ asset($datapeserta->uploaddaftarriwayathidup) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                    @else
                                                                        <p>Data belum diupdate</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>

                                         @canany(['pekerja', 'lsppenerbit'])
                                               <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="margin-top: 10px; font-weight: bold; color: #333; font-size: 16px; border: 1px solid black; padding: 8px; border-radius: 5px;">
                                                        @if ($datapeserta->validasi_daftarriwayathidup === 'tidak_sesuai')
                                                            <span style="color: red; font-size:16px;">Silahkan Lakukan Perbaikan</span>
                                                        @elseif ($datapeserta->validasi_daftarriwayathidup === 'sesuai')
                                                            <span style="color: green; font-size:16px;">Berkas Anda Sudah Sesuai</span>
                                                        @else
                                                            <span style="color: orange; font-size:16px;">Sedang Di Verifikasi DPUPR</span>
                                                        @endif
                                                    </div>
                                                </th>
                                            @endcanany

                                            @canany(['super_admin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_daftarriwayathidup" value="sesuai"
                                                                {{ $datapeserta->validasi_daftarriwayathidup == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasi_daftarriwayathidup" value="tidak_sesuai"
                                                                {{ $datapeserta->validasi_daftarriwayathidup == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                            <tr>

                                </thead>
                            </table>
                            <br><br><br>
                        </div>
                    </div>

                    @can('pekerja')


                    <div class="mb-3" style="margin-top: -50px;">
                    <label for="catatanvalidasi" class="form-label">
                                    <i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas
                                </label>
                                <div class="form-control" style="min-height: 120px; white-space: pre-wrap; background-color: #f8f9fa;">
                            {{ $datapeserta->catatanvalidasi ?? '-' }}
                        </div>
                    </div>

                    @endcan

                    @canany(['super_admin', 'admin'])


                    <div class="mb-3" style="margin-top: -50px;">
                        <label for="catatanvalidasi" class="form-label">
                            <i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas
                        </label>

                        <textarea name="catatanvalidasi" id="catatanvalidasi" class="form-control"
                        rows="4" style="resize: vertical; width: 100%;"
                        placeholder="Tulis catatan jika diperlukan...">{{ old('catatanvalidasi', $datapeserta->catatanvalidasi ?? '') }}</textarea>
                    </div>

                    @endcanany

                </td>

                @canany(['super_admin', 'admin'])

                <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                        <button type="button" onclick="openModal()"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                        style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                        <!-- Ikon SVG Pensil -->
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
     class="bi bi-save" viewBox="0 0 16 16" style="margin-right: 8px;">
  <path d="M8.5 1.5v5h-1v-5H5v5H4V1.5A1.5 1.5 0 0 1 5.5 0h5A1.5 1.5 0 0 1 12 1.5v5h-1v-5h-2.5z"/>
  <path d="M1 4.5V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4.5L13.5 3h-11L1 4.5zM3 4h10l.5.5V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4.5L3 4z"/>
</svg>
<span style="font-family: 'Poppins', sans-serif;">Simpan Validasi</span>

                                    </button>
                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin memvalidasi berkas peserta skk ini?
                                        </p>

                                          <!-- Tombol -->
                                          <div style="display: flex; justify-content: center; gap: 12px;">
                                            <button id="confirmSubmitBtn"
                                            onclick="submitForm()"
                                            style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                            onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                        <!-- Telegram SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                            <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                        </svg>
                                        Ya
                                    </button>

                                    <!-- Tombol Batal dengan ikon X (SVG) -->
                                    <button type="button"
                                            onclick="closeModal()"
                                            style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                            onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                            <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                        </svg>
                                        Batal
                                    </button>

                                          </div>
                                        </div>
                                    </div>

                                    <!-- Script -->
                                    <script>
                                    function openModal() {
                                        const modal = document.getElementById("confirmModal");
                                        if (modal) modal.style.display = "flex";
                                    }

                                    function closeModal() {
                                        const modal = document.getElementById("confirmModal");
                                        if (modal) modal.style.display = "none";
                                    }

                                    </script>


                @endcanany

</form>


<!-- Modal untuk preview dokumen -->

<script>
    // Script untuk menangani preview dokumen
    $(document).ready(function() {
        // Inisialisasi tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Validasi form sebelum submit
        $('form').submit(function(e) {
            let isValid = true;

            // Cek setiap radio group
            $('input[type="radio"]').each(function() {
                const name = $(this).attr('name');
                if (!$('input[name="'+name+'"]:checked').length) {
                    isValid = false;
                    return false;
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Harap memilih status validasi untuk semua dokumen!');
            }
        });
    });
</script>
                    <!-- /.card-body -->
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
