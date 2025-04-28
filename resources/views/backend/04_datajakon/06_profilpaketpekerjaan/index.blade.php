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
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Paket Pekerjaan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/bepaketpekerjaan?search=${input}`)
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
        <th style="width: 75px; text-align:center;">
            <i class="bi bi-hash" style="margin-right: 5px;"></i>No
        </th>
        <th style="width: 175px; text-align:center;">
            <i class="bi bi-briefcase" style="margin-right: 5px;"></i>Jenis Pekerjaan
        </th>
        <th style="width: 400px; text-align:center;">
            <i class="bi bi-card-text" style="margin-right: 5px;"></i>Nama Pekerjaan
        </th>
        <th style="width: 400px; text-align:center;">
            <i class="bi bi-list-check" style="margin-right: 5px;"></i>Paket Status Pekerjaan
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-cash-stack" style="margin-right: 5px;"></i>Sumber Dana
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-calendar-week" style="margin-right: 5px;"></i>Pelaksanaan
        </th>
        <th style="width: 300px; text-align:center;">
            <i class="bi bi-building" style="margin-right: 5px;"></i>CV/PT
        </th>
        <th style="width: 300px; text-align:center;">
            <i class="bi bi-123" style="margin-right: 5px;"></i>NIB
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-currency-dollar" style="margin-right: 5px;"></i>Nilai Kontrak
        </th>
        <th style="width: 225px; text-align:center;">
            <i class="bi bi-file-earmark-text" style="margin-right: 5px;"></i>Jenis Kontrak
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-bar-chart" style="margin-right: 5px;"></i>Karakteristik
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-calendar-date" style="margin-right: 5px;"></i>Mulai
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-calendar-check" style="margin-right: 5px;"></i>Selesai
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Status
        </th>
        <th style="width: 200px; text-align:center;">
            <i class="bi bi-graph-up-arrow" style="margin-right: 5px;"></i>Progress
        </th>

        <th style="width: 400px; text-align:center;">
            <i class="bi bi-diagram-3" style="margin-right: 5px;"></i>Satuan Kerja
        </th>
        <th style="width: 150px; text-align:center;">
            <i class="bi bi-info-circle" style="margin-right: 5px;"></i>Details Pekerjaan
        </th>

        <th style="width: 150px; text-align:center;">
            <i class="bi bi-briefcase" style="margin-right: 5px;"></i>Paket Pekerjaan
        </th>

        <th style="width: 150px; text-align:center;">
            <i class="bi bi-file-earmark-check" style="margin-right: 5px;"></i>SPPBJ
        </th>

        <th style="width: 150px; text-align:center;">
            <i class="bi bi-journal-text" style="margin-right: 5px;"></i>SPK
        </th>

        <th style="width: 150px; text-align:center;">
            <i class="bi bi-card-checklist" style="margin-right: 5px;"></i>SSKK
        </th>

        <th style="width: 150px; text-align:center;">
            <i class="bi bi-receipt" style="margin-right: 5px;"></i>SPP
        </th>

        <th style="width: 200px; text-align:center;">
            <i class="bi bi-gear" style="margin-right: 5px;"></i>Aksi
        </th>

     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item)
     <tr class="align-middle">
         <td style="text-align: center;">{{$loop->iteration }}</td>
         <td style="text-align: left;">{{$item->profiljenispekerjaan->jenispekerjaan}}</td>
         <td style="text-align: left;">{{ ucfirst(strtolower($item->namapekerjaan)) }}</td>
         <td style="text-align: left;">{{$item->paketstatuspekerjaan->paketstatuspekerjaan}}</td>
         <td style="text-align: center;">{{$item->sumberdana->sumberdana}}</td>
         <td style="text-align: center;">{{$item->tahunpilihan->tahunpilihan}}</td>
         <td style="text-align: left;">{{$item->cvptpenyedia}}</td>
         <td style="text-align: center;">{{$item->nib}}</td>
         <td style="text-align: right;">
            <span style="float: left;">Rp.</span>{{ number_format($item->nilaikontrak, 0, ',', '.') }}
        </td>
           <td style="text-align: center;">{{$item->jeniskontrak}}</td>
         <td style="text-align: center;">{{$item->karakteristikkontrak}}</td>

         <td style="text-align: center;">
            {{ \Carbon\Carbon::createFromDate(null, $item->bulanmulai, 1)->translatedFormat('F Y') }}
        </td>
        <td style="text-align: center;">
            {{ \Carbon\Carbon::createFromDate(null, $item->bulanselesai, 1)->translatedFormat('F Y') }}
        </td>

        @php
        $bulanColors = [
            1 => '#FF6B6B',   // Januari
            2 => '#FFA94D',   // Februari
            3 => '#FFD43B',   // Maret
            4 => '#69DB7C',   // April
            5 => '#38D9A9',   // Mei
            6 => '#4DABF7',   // Juni
            7 => '#5C7CFA',   // Juli
            8 => '#9775FA',   // Agustus
            9 => '#DA77F2',   // September
            10 => '#F783AC',  // Oktober
            11 => '#FF922B',  // November
            12 => '#74C0FC',  // Desember
            13 => '#20C997',  // Selesai
        ];

        $id = $item->bulanrekap->id; // Pastikan ambil ID yang benar
        $bgColor = $bulanColors[$id] ?? '#6c757d'; // fallback warna abu
    @endphp

    <td style="text-align: center;">
        <button class="btn btn-sm"
            style="background-color: {{ $bgColor }}; color: white; border: none; transition: 0.3s;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='{{ $bgColor }}'; this.style.color='white';">
            {{ $item->bulanrekap->bulanrekap }}
        </button>
    </td>


<td style="text-align: left;">
    <div style="width: 100%; background-color: #ddd; border-radius: 10px; height: 20px; position: relative;">
        <!-- Progress bar -->
        <div
            style="width: {{$item->progress}}%;
                   background-color:
                   @if($item->progress < 25)
                       red;
                   @elseif($item->progress < 50)
                       orange;
                   @elseif($item->progress < 75)
                       lightblue;
                   @elseif($item->progress < 100)
                       lightgreen;
                   @else
                       green;
                   @endif
                   height: 100%;
                   border-radius: 10px;">
        </div>
        <!-- Text inside the progress bar -->
        <div style="position: absolute; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: black; font-weight: bold;">
            {{$item->progress}}%
        </div>
    </div>
</td>



<td style="text-align: left;">{{ ucwords(strtolower($item->user->name)) }}</td>

         <td style="text-align: center; vertical-align: middle;">
             <a href="/bepaketpekerjaan/show/{{$item->namapekerjaan}}" class="btn btn-sm btn-info me-2" title="Show">
                 <i class="bi bi-eye"></i>
             </a>
             <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                 <i class="bi bi-pencil-square"></i>
             </a>
             <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                   data-judul="{{ $item->namapekerjaan }}"
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

