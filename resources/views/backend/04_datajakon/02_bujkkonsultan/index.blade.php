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
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                            onmouseout="this.style.backgroundColor='#00378a'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
                            style="background-color: #00378a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                            <!-- Ikon Database SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 24 24" style="margin-right: 8px;">
                                <path d="M12 2C6.48 2 2 3.79 2 6v12c0 2.21 4.48 4 10 4s10-1.79 10-4V6c0-2.21-4.48-4-10-4zm0 2c5.05 0 8 .97 8 2s-2.95 2-8 2-8-.97-8-2 2.95-2 8-2zm0 16c-5.05 0-8-.97-8-2v-1.09c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V18c0 1.03-2.95 2-8 2zm0-4c-5.05 0-8-.97-8-2v-1.09c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V14c0 1.03-2.95 2-8 2zm0-4c-5.05 0-8-.97-8-2V8.91c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V10c0 1.03-2.95 2-8 2z"/>
                            </svg>
                            Asosiasi
                        </button>
                    </a>
                </div>

                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Badan Usaha ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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
                         <a href="/bebujkkonsultan/create">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#007bff'; this.style.color='white';"
                             style="background-color: #007bff; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
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
        <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-people-fill"></i> Asosiasi</th>
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
        <th style="width: 300px; text-align:center;"><i class="bi bi-tags-fill"></i> Di Buat Oleh</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-tools"></i> Aksi</th>
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
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 4px 8px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Diupdate
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if($item->namalengkap)
                {{ $item->namalengkap }}
            @else
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Di Update
                </button>
            @endif
        </td>
            <td style="text-align: left;">
                @if($item->alamat)
                    {{ $item->alamat }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->no_telepon)
                    {{ $item->no_telepon }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: left;">
                @if($item->email)
                    {{ $item->email }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->nomorindukberusaha)
                    {{ $item->nomorindukberusaha }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: left;">
                @if($item->pju)
                    {{ $item->pju }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($item->no_akte)
                    {{ $item->no_akte }}
                @else
                    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                        Data Belum Di Update
                    </button>
                @endif
            </td>
                 <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</td>
                    <td style="text-align: left;">
                        @if($item->nama_notaris)
                            {{ $item->nama_notaris }}
                        @else
                            <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                Data Belum Di Update
                            </button>
                        @endif
                    </td>

                    <td style="text-align: left;">
                        @if($item->no_pengesahan)
                            {{ $item->no_pengesahan }}
                        @else
                            <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                Data Belum Di Update
                            </button>
                        @endif
                    </td>


                    <td style="text-align: center; vertical-align: middle; width: 100%; display: flex; justify-content: center; align-items: center;">
                        <a href="{{ url('/bebujkkonsultan/showsubklasifikasi/' . $item->namalengkap) }}" style="text-decoration: none;">
                            <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#6B7280'; this.style.color='white';"
                                style="background-color:#6B7280; color: white; border: none; padding: 10px 25px;
                                       border-radius: 15px; font-size: 14px; cursor: pointer;
                                       display: flex; align-items: center; justify-content: center;
                                       transition: background-color 0.3s, color 0.3s;">
                                Lihat
                            </button>
                        </a>
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
            <a href="/bebujkkonsultan/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/bebujkkonsultan/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->namalengkap }}"
               onclick="setDeleteUrl(this)">
                <i class="bi bi-trash"></i>
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

