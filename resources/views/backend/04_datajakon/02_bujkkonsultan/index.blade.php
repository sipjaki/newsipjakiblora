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
    {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}
<section style="background: linear-gradient(to bottom, #a8f0c6, #ffffff); width: 100%; min-height: 100vh;">

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
                        <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Badan Usaha ...."
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

                            fetch(`/bebujkkonsultan?search=${input}`)
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


                        <a href="/bebujkjakon">
                             <button class="button-newvalidasi">
                             <!-- Ikon Kembali -->
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                             Kembali

                         </button>
                         </a>

                         <button onclick="exportTableToExcel('tabelBujkkonsultan', 'data_bujkkonsultan')" class="button-baru">
                         <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                         </button>

                         <a href="/bebujkkonsultan/create">
                             <button class="button-baru">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-plus" style="margin-right: 8px;"></i>
                             Tambah Baru
                         </button>
                         </a>
                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelBujkkonsultan" class="zebra-table table-striped">
 <thead>
     <tr>
        <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-people-fill"></i> Asosiasi</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-building"></i> Badan Usaha</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-geo-alt-fill"></i> Alamat</th>
        <th style="width: 350px; text-align:center;"><i class="bi bi-telephone-fill"></i> No Telepon</th>
        <th style="width: 350px; text-align:center;"><i class="bi bi-envelope-fill"></i> Email</th>
        <th style="width: 150px; text-align:center;"><i class="bi bi-credit-card-2-front"></i> NIB</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-person-badge-fill"></i> PJU</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-file-earmark-text"></i> No Akte</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-calendar-date"></i> Tanggal</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-person-lines-fill"></i> Notaris</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-patch-check-fill"></i> Pengesahan</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-tags-fill"></i> Sub Klasifikasi</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-tags-fill"></i> Berkas</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-tags-fill"></i> Di Buat Oleh</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-tools"></i> Aksi</th>
     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: center;">
            @if($item->asosiasimasjaki && $item->asosiasimasjaki->namaasosiasi)
                {{ $item->asosiasimasjaki->namaasosiasi }}
            @else
                <button class="button-berkas">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if($item->namalengkap)
                {{ $item->namalengkap }}
            @else
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @endif
        </td>
            <td style="text-align: left;">
                @if($item->alamat)
                    {{ $item->alamat }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->no_telepon)
                    {{ $item->no_telepon }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: left;">
                @if($item->email)
                    {{ $item->email }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->nomorindukberusaha)
                    {{ $item->nomorindukberusaha }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: left;">
                @if($item->pju)
                    {{ $item->pju }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->no_akte)
                    {{ $item->no_akte }}
                @else
                    <button class="button-berkas">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
                 <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</td>
                    <td style="text-align: left;">
                        @if($item->nama_notaris)
                            {{ $item->nama_notaris }}
                        @else
                            <button class="button-berkas">
                                Data Belum Di Update
                            </button>
                        @endif
                    </td>

                    <td style="text-align: left;">
                        @if($item->no_pengesahan)
                            {{ $item->no_pengesahan }}
                        @else
                            <button class="button-berkas">
                                Data Belum Di Update
                            </button>
                        @endif
                    </td>


                    <td style="text-align: center; vertical-align: middle; width: 100%; display: flex; justify-content: center; align-items: center;">
                        <a href="{{ url('/bebujkkonsultan/showsubklasifikasi/' . $item->namalengkap) }}" style="text-decoration: none;">
                            <button class="button-baru">
                                            <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                            </button>
                        </a>
                    </td>

<td style="text-align: center;">
    @if($item->uploadberkas && file_exists(public_path('storage/' . $item->uploadberkas)))
        <!-- Button jika file ada di storage -->
        <button class="button-baru"
            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
            <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
        </button>

        <!-- Modal KTP -->
        <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                        <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                        <span style="margin: 0 5px;">:</span>
                        <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas Sertifikasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <iframe src="{{ asset('storage/' . $item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                    </div>
                </div>
            </div>
        </div>

    @elseif($item->uploadberkas)
        <!-- Button jika file path luar storage -->
        <button class="button-baru"
            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
            <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
        </button>

        <!-- Modal KTP -->
        <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                        <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                        <span style="margin: 0 5px;">:</span>
                        <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas Sertifikasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <iframe src="{{ asset($item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- Button merah jika kosong -->
        <button class="button-merah" disabled>
            <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Tidak Ada Berkas
        </button>
    @endif
</td>

                    <td style="text-align: center;">
                        @if($item->user?->name)
                            {{ $item->user?->name }}
                        @else
                            <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                Admin Tidak Ada
                            </button>
                        @endif
                    </td>


        <td style="text-align: center; vertical-align: middle;">
            <a href="/bebujkkonsultan/show/{{$item->namalengkap}}" class="button-baru" title="Show">
                <i class="bi bi-eye"></i>View
            </a>
            <a href="/bebujkkonsultan/update/{{$item->id}}" class="button-berkas" title="Update">
                <i class="bi bi-pencil-square"></i>Update
            </a>
            <a href="javascript:void(0)" class="button-merah" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->namalengkap }}"
               onclick="setDeleteUrl(this)">
                <i class="bi bi-trash"></i>Hapus
            </a>
        </td>

        <!-- CSS untuk Hover -->
        <style>
            .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                background-color: white !important; /* Ganti background menjadi putih */
                color: white !important; /* Ganti warna teks menjadi putih */
                border-color: transparent !important; /* Menyembunyikan border saat hover */
            }

            /* Ganti warna ikon untuk tombol hover agar tetap terlihat */
            .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                color: navy !important; /* Ganti ikon menjadi navy atau warna lain yang diinginkan */
            }
        </style>

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
                     var namalengkap = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namalengkap;
                     var deleteUrl = "/bebujkkonsultan/delete/" + encodeURIComponent(namalengkap);
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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
