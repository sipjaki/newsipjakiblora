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

@can('super_admin', 'admin')

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


@endcan

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


                <button
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#0044b1'; this.style.color='white';"
                style="background-color: #0044b1; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">

                <!-- Ikon Arah Kiri -->
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
    <div style="text-align: center; margin-bottom: 10px;">
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

    <br>

    <h5 style="color: navy; font-weight:800; font-size:16px;">II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
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
            <td style="text-align: center;">Pengalaman Kerja</td>
            <td style="text-align: center;">NPWP</td>
            <td style="text-align: center;">Daftar Riwayat Hidup</td>
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

    </table>
<br>

</div>


<div class="halaman-kedua">

    <h5 style="color: navy; font-weight:800; font-size:16px;">III. NAMA ASOSIASI DAN KESEDIAAN MENGIKUTI BIMBINGAN TEKNIS</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table class="zebra-table table-striped">
        <tr>
            <td style="text-align: center; font-size:16px;">Nama Utusan</td>
            <td style="text-align: center; font-size:16px;">{{$datapeserta->namaasosiasi}}</td>
        </tr>
    </table>

    <table class="zebra-table table-striped">
        <tr>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI SKK ?</td>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI AKUN SIKI/ E-SIMPAN ?</td>
            <td style="text-align: center; font-size:16px;">MEMPUNYAI PORTAL PUPR ?</td>
            <td style="text-align: center; font-size:16px;">BERSEDIA MEMATUHI PERATURAN</td>
        </tr>
        <tr>
           <td style="text-align: center;">
    @if(strtolower($datapeserta->punyaskk) == 'ya')
        <button class="badge-success" style="text-align: center;">YA</button>
    @elseif(strtolower($datapeserta->punyaskk) == 'tidak')
        <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
    @else
        <button class="btn btn-warning" disabled style="text-align: center;">DATA KOSONG</button>
    @endif
</td>

<td style="text-align: center;">
    @if(strtolower($datapeserta->punyasiki) == 'ya')
        <button class="badge-success" style="text-align: center;">YA</button>
    @elseif(strtolower($datapeserta->punyasiki) == 'tidak')
        <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
    @else
        <button class="btn btn-warning" disabled style="text-align: center;">DATA KOSONG</button>
    @endif
</td>

           <td style="text-align: center;">
    @if(strtolower($datapeserta->portalpupr) == 'ya')
        <button class="badge-success" style="text-align: center;">YA</button>
    @elseif(strtolower($datapeserta->portalpupr) == 'tidak')
        <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
    @else
        <button class="btn btn-warning" disabled style="text-align: center;">DATA KOSONG</button>
    @endif
</td>


<td style="text-align: center;">
    @if(strtolower($datapeserta->siappatuh) == 'ya')
        <button class="badge-success" style="text-align: center;">YA</button>
    @elseif(strtolower($datapeserta->siappatuh) == 'tidak')
        <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
    @else
        <button class="btn btn-warning" disabled style="text-align: center;">DATA KOSONG</button>
    @endif
</td>


        </tr>

    </table>

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
                    ANEX FACHRIAN, S.T., M.T
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

    <div style="display: flex; justify-content: flex-end; padding: 10px;">
                <!-- Tombol Download PDF -->
<button id="downloadPDF" class="download-btn font-size:16px;" >
    <i class="bi bi-download" style="margin-right: 10px;"></i> <span style="font-size: 16px;">Download PDF</span>
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


                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
<thead style="font-size: 16px; background-color: green; color: white;">
                                    <tr>
                                        {{-- <th style="width: 25px; text-align:center;"><i class="bi bi-hash"></i> No</th> --}}
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Foto KTP </th>
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Pas Foto 3 x 4 </th>
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Ijazah </th>
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Pengalaman  </th>
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Surat Kebenaran Data  </th>
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> NPWP </th>
                                        {{-- <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Surat Kebenaran Data</th> --}}
                                        <th style="width: 400px; text-align:center; font-size: 16px; background-color: green; color: white;"><i class="bi bi-file-earmark-text-fill"></i> Riwayat Hidup </th>
                                        {{-- <th style="width: 300px; text-align:center;"><i class="bi bi-gear-fill"></i> Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach ($subdata as $datapeserta ) --}}
                                    <tr class="align-middle">
                                        {{-- <td style="text-align: center;">{{ $loop->iteration }}</td> --}}

                                        <td class="text-center">
                                            <button class="btn btn-secondary btn-sm"
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
                                                            @if($datapeserta->uploadktp && file_exists(public_path('storage/' . $datapeserta->uploadktp)))
                                                                <img src="{{ asset('storage/' . $datapeserta->uploadktp) }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset('storage/' . $datapeserta->uploadktp) }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                            @elseif($datapeserta->uploadktp)
                                                                <img src="{{ asset($datapeserta->uploadktp) }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset($datapeserta->uploadktp) }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                            @else
                                                                <p>Data belum diupdate</p>
                                                            @endif

                                                            <!-- Validasi KTP -->
                                                            <div class="mt-4">
                                                                <form action="{{ route('validasi.ktp', $datapeserta->id) }}" method="POST">
                                                                    @csrf
                                                                    <label class="me-3">Validasi Dokumen:</label>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="validasi_ktp" id="ktpSesuai{{ $datapeserta->id }}" value="sesuai" required>
                                                                        <label class="form-check-label" for="ktpSesuai{{ $datapeserta->id }}">✅ Sesuai</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="validasi_ktp" id="ktpTidakSesuai{{ $datapeserta->id }}" value="tidak_sesuai" required>
                                                                        <label class="form-check-label" for="ktpTidakSesuai{{ $datapeserta->id }}">❌ Tidak Sesuai</label>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success btn-sm mt-3">Simpan Validasi</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- berkas 2  --}}
                                        <td class="text-center">
                                            <button class="btn btn-secondary btn-sm"
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
                                        </td>


                                        {{-- berkas 3 ijazzah --}}
                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
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
                                            </td>


                                            {{-- berkas 4 pengalaman --}}
                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
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
                                            </td>

{{-- berkas 5 kebenaran daa  --}}

                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
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
                                            </td>



                                                <!-- Modal NPWP -->
                                                <td class="text-center">
                                                    <button class="btn btn-secondary btn-sm"
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
                                                                    @if($datapeserta->uploadnpwp && file_exists(public_path('storage/' . $datapeserta->uploadnpwp)))
                                                                        <!-- Menampilkan gambar dari storage -->
                                                                        <img src="{{ asset('storage/' . $datapeserta->uploadnpwp) }}" alt="Dokumen NPWP" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                                    @elseif($datapeserta->uploadnpwp)
                                                                        <!-- Menampilkan gambar dari path luar storage -->
                                                                        <img src="{{ asset($datapeserta->uploadnpwp) }}" alt="Dokumen NPWP" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                                    @else
                                                                        <!-- Placeholder jika tidak ada data -->
                                                                        <p>Data belum diupdate</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
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
                                            </td>

                                                       {{-- <td style="text-align: center;"> --}}
                                            <!-- Show Icon -->
                                         {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Update Icon --> --}}
                                            {{-- <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> --}}
                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $datapeserta->id }}" onclick="setDeleteUrl(this)">
                                             <i class="bi bi-trash"></i>
                                         </a> --}}

                                         <!-- Modal -->
                                         {{-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                                         <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <p>Apakah Anda yakin ingin menghapus data ini?</p>
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
                                         </div> --}}

                                         <!-- Script untuk set action form -->
                                         {{-- <script>
                                         function setDeleteUrl(button) {
                                             var id = button.getAttribute('data-id');
                                             var deleteUrl = "{{ route('beagendapelatihanmateridelete', ':id') }}";
                                             deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));

                                             document.getElementById('deleteForm').action = deleteUrl;
                                         }
                                         </script>

                                            <style>
                                                /* Hover effect */
                                                .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                                                    background-color: #fff !important; /* Keep the background white on hover */
                                                    color: black !important; /* Change text color to black on hover */
                                                }

                                                 .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                                                    color: black !important; /* Ensure the icon color changes to black */
                                                }
                                            </style>
                                        </td> --}}

                                    </tr>
                                        {{-- @endforeach --}}

                                </tbody>
                            </table>
                            <br><br><br>
                        </div>
                    </div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4><i class="bi bi-file-earmark-check"></i> Validasi Dokumen Peserta</h4>
                </div>
                <div class="card-body">
                    {{-- <form action="{{ route('/404', $datapeserta->id) }}" method="POST"> --}}
                        @csrf
                        @method('PUT')

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 30%">Dokumen</th>
                                        <th style="width: 20%">Berkas</th>
                                        <th style="width: 25%">Sesuai</th>
                                        <th style="width: 25%">Tidak Sesuai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- KTP -->
                                    <tr>
                                        <td>KTP</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalKTP">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_ktp" value="1"
                                                {{ $datapeserta->validasi_ktp == 1 ? 'checked' : '' }} required>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_ktp" value="0"
                                                {{ $datapeserta->validasi_ktp == 0 ? 'checked' : '' }}>
                                        </td>
                                    </tr>

                                    <!-- Pas Foto -->
                                    <tr>
                                        <td>Pas Foto 3x4</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalFoto">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_foto" value="1"
                                                {{ $datapeserta->validasi_foto == 1 ? 'checked' : '' }} required>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_foto" value="0"
                                                {{ $datapeserta->validasi_foto == 0 ? 'checked' : '' }}>
                                        </td>
                                    </tr>

                                    <!-- Ijazah -->
                                    <tr>
                                        <td>Ijazah</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalIjazah">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_ijazah" value="1"
                                                {{ $datapeserta->validasi_ijazah == 1 ? 'checked' : '' }} required>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_ijazah" value="0"
                                                {{ $datapeserta->validasi_ijazah == 0 ? 'checked' : '' }}>
                                        </td>
                                    </tr>

                                    <!-- Pengalaman Kerja -->
                                    <tr>
                                        <td>Pengalaman Kerja</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalPengalaman">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_pengalaman" value="1"
                                                {{ $datapeserta->validasi_pengalaman == 1 ? 'checked' : '' }} required>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_pengalaman" value="0"
                                                {{ $datapeserta->validasi_pengalaman == 0 ? 'checked' : '' }}>
                                        </td>
                                    </tr>

                                    <!-- NPWP -->
                                    <tr>
                                        <td>NPWP</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalNPWP">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_npwp" value="1"
                                                {{ $datapeserta->validasi_npwp == 1 ? 'checked' : '' }} required>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="validasi_npwp" value="0"
                                                {{ $datapeserta->validasi_npwp == 0 ? 'checked' : '' }}>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group mt-4">
                            <label for="catatan">Catatan Validasi:</label>
                            <textarea name="catatan" id="catatan" class="form-control" rows="3">{{ $datapeserta->catatan_validasi }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            {{-- <a href="{{ route('admin.peserta.index') }}" class="btn btn-secondary"> --}}
                                <i class="bi bi-arrow-left"></i> <span>Kembali</span>
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i><span> Simpan Validasi</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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

      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date(); // Dapatkan tanggal hari ini
            const masaBerlakuElements = document.querySelectorAll('.masa-berlaku'); // Pilih semua td yang memiliki kelas masa-berlaku

            masaBerlakuElements.forEach(function (element) {
                const masaBerlaku = element.getAttribute('data-masaberlaku'); // Ambil data masa berlaku
                const button = element.querySelector('.btn-masa-berlaku'); // Ambil tombol di dalam td

                // Cek jika masa berlaku kosong
                if (!masaBerlaku || masaBerlaku === '') {
                    button.classList.add('btn-suspend'); // Tambahkan class untuk suspend
                    button.textContent = 'SUSPEND';
                } else {
                    const masaBerlakuDate = new Date(masaBerlaku); // Jika ada, ubah menjadi tanggal

                    // Cek jika masa berlaku sudah lewat
                    if (masaBerlakuDate < today) {
                        button.classList.add('btn-expired'); // Warna merah jika tidak berlaku
                        button.textContent = 'TIDAK BERLAKU';
                    } else {
                        button.classList.add('btn-active'); // Warna hijau jika masih berlaku
                        button.textContent = 'BERLAKU';
                    }
                }
            });
        });
    </script>
