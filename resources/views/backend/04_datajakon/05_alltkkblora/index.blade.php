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
     {{-- ======================================================= --}}
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
                            <!-- Ikon Database (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M12 2C6.48 2 2 5.58 2 10s4.48 8 10 8 10-3.58 10-8-4.48-8-10-8zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-8c4.42 0 8 3.58 8 8s-3.58 8-8 8-8-3.58-8-8 3.58-8 8-8z"/>
                            </svg>
                            Universitas/Sekolah/Instansi
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Pendidikan (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M12 2L2 6v4l10 4 10-4V6l-10-4zm0 10l-8-3v6l8 3 8-3v-6l-8 3zm-1 4v4h2v-4h-2z"/>
                            </svg>
                            Jenjang Pendidikan
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Pekerjaan (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M12 2C7.03 2 3 5.58 3 10s4.03 8 9 8 9-3.58 9-8-4.03-8-9-8zm0 14c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                            Jabatan Kerja
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Level (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M19 3h-2V2h-2v1h-4V2H9v1H7V2H5v1H4v18h16V3h-1zm-1 16H6v-8h12v8z"/>
                            </svg>
                            Jenjang
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon LPS (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M12 2L2 6v4l10 4 10-4V6l-10-4zm0 10l-8-3v6l8 3 8-3v-6l-8 3zm-1 4v4h2v-4h-2z"/>
                            </svg>
                            LSP Penerbit
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Jurusan (SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="margin-right: 8px;">
                                <path fill="white" d="M12 2L2 6v4l10 4 10-4V6l-10-4zm0 10l-8-3v6l8 3 8-3v-6l-8 3zm-1 4v4h2v-4h-2z"/>
                            </svg>
                            Jurusan
                        </button>
                    </a>
                </div>

                 </div>
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

                            fetch(`/beskkallblora?search=${input}`)
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

                                <button
                                style="margin-right:20px; background-color: #2da010; color: white; padding: 10px 20px; border: none; border-radius: 8px; font-size: 16px; cursor: default;"
                                onmouseover="this.style.backgroundColor='white'; this.style.color='navy';"
                                onmouseout="this.style.backgroundColor='#2da010'; this.style.color='white';">

                                    <i class="bi bi-people-fill"></i>
                                    Data Tenaga Kerja {{ $datajumlah }} Orang
                                    <i class="bi bi-award-fill ms-3"></i>
                                    {{ $datajumlahsertifikat }} Buah Sertifikat
                                </button>

                         <a href="/beskkallblora/create">
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
        <th style="width: 75px; text-align:center;">
            <i class="bi bi-hash"></i> No
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-person-lines-fill"></i> Nama Lengkap
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-geo-alt-fill"></i> Alamat
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-check-fill"></i> Tahun Lulus Sekolah
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-cash-stack"></i> Tahun Anggaran
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-building"></i> Penyelenggara
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-mortarboard-fill"></i> Universitas/Sekolah/Instansi
          </th>
          <th style="width: 225px; text-align:center;">
            <i class="bi bi-book"></i> Pendidikan
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-briefcase-fill"></i> Jabatan Kerja
          </th>
          <th style="width: 150px; text-align:center;">
            <i class="bi bi-bar-chart-fill"></i> Jenjang
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-patch-check-fill"></i> LSP Penerbit
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-journal-bookmark-fill"></i> Jurusan
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-event-fill"></i> Tanggal Terbit
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-x-fill"></i> Tanggal Habis
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-hourglass-split"></i> Masa Berlaku
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-check2-circle"></i> Status Terbit
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-file-earmark-check-fill"></i> Sertifikat
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-gear-fill"></i> Aksi
          </th>

     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
        <td style="text-align: center;">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
        <td style="text-align: left;">{{$item->nama}}</td>
         <td style="text-align: left;">
            @if(empty($item->alamat))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->alamat}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->tahunlulus))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->tahunlulus}}
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
                <button class="btn btn-danger btn-sm" style="font-size: 15px;">Data Asosiasi Belum  Di Update</button>
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->namasekolah->namasekolah))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->namasekolah->namasekolah}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->jenjangpendidikan->jenjangpendidikan))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jenjangpendidikan->jenjangpendidikan}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->jabatankerja->jabatankerja))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jabatankerja->jabatankerja}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->jenjang->jenjang))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jenjang->jenjang}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->lpspenerbit->lpspenerbit))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->lpspenerbit->lpspenerbit}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->jurusan->jurusan))
                <button class="btn btn-navy" style="background-color: navy; color: white; border-radius: 5px; font-size: 15px; padding: 5px 10px; border: none;">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jurusan->jurusan}}
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

<td style="text-align: center; text-transform: uppercase;">{{$item->statusterbit}}</td>
         <td style="text-align: center;">
            <button class="btn btn-secondary btn-sm"
                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                data-bs-toggle="modal" data-bs-target="#modalKtp3">
                <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat

            </button>

            <!-- Modal KTP -->
            <div class="modal fade" id="modalKtp3" tabindex="-1" aria-labelledby="modalKtpLabel3" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                            <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                            <span>:</span>
                            <h5 class="modal-title" id="modalKtpLabel3">Sertifikat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <div style="margin-top: 10px;">
                                @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                                <!-- Display the default iframe when the file exists in the storage -->
                                <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                            @elseif($item->sertifikat)
                                <!-- Display the iframe with the updated file -->
                                <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
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


        <td style="text-align: center; vertical-align: middle;">
            <a href="/beskkallblora/show/{{$item->nama}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/beskkallblora/update/{{$item->nama}}" class="btn btn-sm btn-warning me-2" title="Update">
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
                     var deleteUrl = "/beskkallblora/delete/" + encodeURIComponent(nama);
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

