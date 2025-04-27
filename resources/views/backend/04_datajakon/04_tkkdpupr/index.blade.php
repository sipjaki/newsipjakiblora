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
       <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">
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
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja Konstruksi ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
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

                         <a href="/404">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';"
                             style="background-color: #166534; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-plus" style="margin-right: 8px;"></i>
                             Create
                         </button>
                         </a>
                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table class="zebra-table table-striped">
 <thead>
     <tr>
         <th style="width: 75px; text-align:center;">No</th>
         <th style="width: 400px; text-align:center;">Nama Lengkap</th>
         <th style="width: 400px; text-align:center;">Alamat </th>
         <th style="width: 200px; text-align:center;">Tahun Lulus</th>
         <th style="width: 200px; text-align:center;">Tahun Bimtek</th>
         <th style="width: 300px; text-align:center;">Asosiasi</th>
         <th style="width: 400px; text-align:center;">Universitas/Sekolah/Instansi</th>
         <th style="width: 100px; text-align:center;">Pendidikan</th>
         <th style="width: 400px; text-align:center;">Jabatan Kerja</th>
         <th style="width: 100px; text-align:center;">Jenjang</th>
         <th style="width: 400px; text-align:center;">LPS Penerbit</th>
         <th style="width: 200px; text-align:center;">Jurusan</th>
         <th style="width: 200px; text-align:center;">Tanggal Terbit</th>
         <th style="width: 200px; text-align:center;">Tanggal Habis</th>
         <th style="width: 200px; text-align:center;">Masa Berlaku</th>
         <th style="width: 200px; text-align:center;">Status Terbit</th>
         <th style="width: 200px; text-align:center;">Aksi</th>
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
                <button class="btn btn-navy" style="background-color: navy; color: white; border: none; padding: 5px 10px; font-size: 15px;" onmouseover="this.style.backgroundColor='white'; this.style.color='black'" onmouseout="this.style.backgroundColor='navy'; this.style.color='white'">
                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: left;">
            @if($item->alamat)
                {{$item->alamat}}
            @else
                <button class="btn btn-navy" style="background-color: navy; color: white; border: none; padding: 5px 10px; font-size: 15px;" onmouseover="this.style.backgroundColor='white'; this.style.color='black'" onmouseout="this.style.backgroundColor='navy'; this.style.color='white'">
                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: center;">
            @if($item->tahunlulus)
                {{$item->tahunlulus}}
            @else
                <button class="btn btn-navy" style="background-color: navy; color: white; border: none; padding: 5px 10px; font-size: 15px;" onmouseover="this.style.backgroundColor='white'; this.style.color='black'" onmouseout="this.style.backgroundColor='navy'; this.style.color='white'">
                    Data Belum Di Update
                </button>
            @endif
        </td>
        <td style="text-align: center;">
            @if($item->tahunbimtek)
                {{$item->tahunbimtek}}
            @else
                <button class="btn btn-navy" style="background-color: navy; color: white; border: none; padding: 5px 10px; font-size: 15px;" onmouseover="this.style.backgroundColor='white'; this.style.color='black'" onmouseout="this.style.backgroundColor='navy'; this.style.color='white'">
                    Data Belum Di Update
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if($item->asosiasimasjaki)
                {{ $item->asosiasimasjaki->namaasosiasi }}
            @else
                <button class="btn btn-danger btn-sm">Data Asosiasi Belum  Di Update</button>
            @endif
        </td>
        <td style="text-align: left;">
            @if (!empty($item->namasekolah?->namasekolah))
                {{ $item->namasekolah->namasekolah }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if (!empty($item->jenjangpendidikan?->jenjangpendidikan))
                {{ $item->jenjangpendidikan->jenjangpendidikan }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->jabatankerja?->jabatankerja))
                {{ $item->jabatankerja->jabatankerja }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if (!empty($item->jenjang?->jenjang))
                {{ $item->jenjang->jenjang }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->lpspenerbit?->lpspenerbit))
                {{ $item->lpspenerbit->lpspenerbit }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if (!empty($item->jurusan?->jurusan))
                {{ $item->jurusan->jurusan }}
            @else
                <button style="background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
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
                    statusButton.className = "btn btn-danger btn-sm";
                } else {
                    statusButton.innerText = "BERLAKU";
                    statusButton.className = "btn btn-success btn-sm";
                }
            }

            // Jalankan pertama kali saat halaman dimuat
            updateStatus();

            // Update setiap 1 detik untuk realtime
            setInterval(updateStatus, 1000);
        </script>

         <td style="text-align: center;">{{$item->statusterbit}}</td>

         <td style="text-align: center; vertical-align: middle;">
             <a href="/beskkdpupr/show/{{$item->nama}}" class="btn btn-sm btn-info me-2" title="Show">
                 <i class="bi bi-eye"></i>
             </a>
             <a href="/beskkdpupr/update/{{$item->nama}}" class="btn btn-sm btn-warning me-2" title="Update">
                 <i class="bi bi-pencil-square"></i>
             </a>
             <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                   data-judul="{{ $item->nama }}"
                   onclick="setDeleteUrl(this)">
                    <i class="bi bi-trash"></i>
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

