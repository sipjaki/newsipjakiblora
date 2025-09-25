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

       <!--begin::App Content Header-->
       {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}
<section style="background: linear-gradient(to bottom, #a8f0c6, #ffffff); width: 100%; min-height: 100vh;">

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

                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')



                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                             <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                            </select>
                        </div>
<!-- Tombol Download -->
<button onclick="exportTableToExcel('tabelAsosiasi', 'data_tkkdpupr2024')" class="button-baru">
    <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
</button>


                        <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja Konstruksi ...."
           onkeyup="searchTable()"
           style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
    <i class="bi bi-search"
       style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
</div>

                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/beskkdpupr?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>

                         {{-- <a href="/404">
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
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelAsosiasi" class="zebra-table table-striped">
 <thead>
     <tr>
         <th style="width: 75px; text-align:center;">No</th>
         <th style="width: 400px; text-align:center;">Nama Lengkap</th>
         <th style="width: 400px; text-align:center;">Alamat </th>
         <th style="width: 250px; text-align:center;">Tahun Lulus Sekolah</th>
         <th style="width: 250px; text-align:center;">Tahun Anggaran</th>
         <th style="width: 300px; text-align:center;">Penyelenggara</th>
         <th style="width: 400px; text-align:center;">Universitas/Sekolah/Instansi</th>
         <th style="width: 150px; text-align:center;">Pendidikan</th>
         <th style="width: 400px; text-align:center;">Jabatan Kerja</th>
         <th style="width: 100px; text-align:center;">Jenjang</th>
         <th style="width: 400px; text-align:center;">LSP Penerbit</th>
         <th style="width: 200px; text-align:center;">Jurusan</th>
         <th style="width: 200px; text-align:center;">Tanggal Terbit</th>
         <th style="width: 200px; text-align:center;">Tanggal Habis</th>
         <th style="width: 200px; text-align:center;">Masa Berlaku</th>
         <th style="width: 200px; text-align:center;">Status Terbit</th>
         <th style="width: 200px; text-align:center;">Sertifikat</th>
         <th style="width: 400px; text-align:center;">Aksi</th>
     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: left;">
            @if($item->nama)
                {{$item->nama}}
            @else
                <button class="button-berkas">

                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: left;">
            @if($item->alamat)
                {{$item->alamat}}
            @else
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: center;">
            @if($item->tahunlulus)
                {{$item->tahunlulus}}
            @else
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: center;">
            @if($item->tahunbimtek)
                {{$item->tahunbimtek}}
            @else
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if($item->asosiasimasjaki)
                {{ $item->asosiasimasjaki->namaasosiasi }}
            @else
                <button class="button-berkas">Data Asosiasi Belum  Di Update</button>
            @endif
        </td>
        <td style="text-align: left;">
            @if (!empty($item->namasekolah?->namasekolah))
                {{ $item->namasekolah->namasekolah }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if (!empty($item->jenjangpendidikan?->jenjangpendidikan))
                {{ $item->jenjangpendidikan->jenjangpendidikan }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->jabatankerja?->jabatankerja))
                {{ $item->jabatankerja->jabatankerja }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if (!empty($item->jenjang?->jenjang))
                {{ $item->jenjang->jenjang }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->lpspenerbit?->lpspenerbit))
                {{ $item->lpspenerbit->lpspenerbit }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->jurusan?->jurusan))
                {{ $item->jurusan->jurusan }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>
         <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggalterbit)->translatedFormat('l, d F Y') }}</td>
         <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggalhabis)->translatedFormat('l, d F Y') }}</td>

         <td style="text-align: center;">
            <button id="status-{{ $item->id }}" class="btn btn-sm"></button>
        </td>

        <script>
            function updateStatus() {
                let now = new Date().getTime();
                let tanggalHabis = new Date("{{ \Carbon\Carbon::parse($item->tanggalhabis)->format('Y-m-d H:i:s') }}").getTime();
                let statusButton = document.getElementById("status-{{ $item->id }}");

                if (now > tanggalHabis) {
                    statusButton.innerText = "TIDAK BERLAKU";
                    statusButton.className = "button-merah";
                } else {
                    statusButton.innerText = "BERLAKU";
                    statusButton.className = "button-hijau";
                }
            }

            // Jalankan pertama kali saat halaman dimuat
            updateStatus();

            // Update setiap 1 detik untuk realtime
            setInterval(updateStatus, 1000);
        </script>

<td style="text-align: center; text-transform: uppercase;">{{$item->statusterbit}}</td>

<td style="text-align: center;">
    <button class="button-baru"
        data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
        <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
    </button>

    <!-- Modal KTP khusus untuk item ini -->
    <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <span>:</span>
                    <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Sertifikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div style="margin-top: 10px;">
                        @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                            <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                        @elseif($item->sertifikat)
                            <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                        @else
                            <p>Data belum diupdate</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</td>


         <td style="text-align: center; vertical-align: middle;">
             <a href="/beskkdpupr/show/{{$item->nama}}" class="button-baru" title="Show">
                 <i class="bi bi-eye"></i>View
             </a>
             <a href="/beskkdpupr/update/{{$item->nama}}" class="button-berkas" title="Update">
                 <i class="bi bi-pencil-square"></i>Update
             </a>
             <a href="javascript:void(0)" class="button-merah" title="Delete"
                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                   data-judul="{{ $item->nama }}"
                   onclick="setDeleteUrl(this)">
                    <i class="bi bi-trash"></i>Hapus
            </a>
         </td>

        </tr>

     @endforeach
 </tbody>
</table>
                     </div>
                 </div>

                 @include('backend.00_administrator.00_baganterpisah.07_paginations')

                 <br><br>
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
                     var deleteUrl = "/beskkdpupr/delete/" + encodeURIComponent(nama);
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
</section>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
    </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

