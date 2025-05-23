
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
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Perusahaan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
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

                            fetch(`/bepengawasanbujk?search=${input}`)
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


<!-- Tombol Download Excel -->
<button class="hide-on-mobile" onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_pengawasanbujk')"
    onmouseover="this.style.background='white'; this.style.color='black';"
    onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white';"
    style="
        background: linear-gradient(45deg, #d4af37, #228B22);
        color: white;
        border: none;
        margin-right: 10px;
        padding: 10px 20px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    "
>
    <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/bepengawasanbujk/create">
    <button class="hide-on-mobile"
        onmouseover="this.style.background='white'; this.style.color='black';"
        onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white';"
        style="
            background: linear-gradient(45deg, #d4af37, #228B22);
            color: white;
            border: none;
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        "
    >
        <i class="fa fa-plus" style="margin-right: 8px;"></i> Create
    </button>
</a>


                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelBujkkonstruksi" class="zebra-table table-striped" >
 <thead>
     <tr>
       <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
        <th style="width: 350px; text-align:center;"><i class="bi bi-upc-scan"></i> Kode Proyek</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-building"></i> Nama Perusahaan</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-geo-alt-fill"></i> Alamat Perusahaan</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-cash-coin"></i> Status Modal</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-briefcase-fill"></i> Jenis Perusahaan</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-credit-card-2-front"></i> NIB</th>
        <th style="width: 150px; text-align:center;"><i class="bi bi-tags-fill"></i> KBLI</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text"></i> Uraian KBLI</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-diagram-3-fill"></i> Sektor</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-geo-fill"></i> Alamat Proyek</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-globe-americas"></i> Wilayah</th>
        <th style="width: 150px; text-align:center;"><i class="bi bi-exclamation-triangle-fill"></i> Resiko</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-database-fill"></i> Sumber Data</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-bar-chart-steps"></i> Skala Usaha Perusahaan</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-bar-chart-fill"></i> Skala Usaha Proyek</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-person-workspace"></i> Kewenangan Koordinator</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-person-check-fill"></i> Kewenangan Pengawas</th>
        <th style="width: 100px; text-align:center;"><i class="bi bi-star-fill"></i> PSN</th>
        <th style="width: 150px; text-align:center;"><i class="bi bi-tools"></i> Aksi</th>
     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>

          <td style="text-align: center;">{{ $item->kodeproyek ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->namaperusahaan ?? '-' }}</td>
            <td>{{ $item->alamatperusahaan ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->statusmodal ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->jenisperusahaan ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->nib ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->kbli ?? '-' }}</td>
            <td>{{ $item->uraiankbli ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->sektor ?? '-' }}</td>
            <td>{{ $item->alamatproyek ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->wilayah ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->resiko ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->sumberdata ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->skalausahaperusahaan ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->skalausahaproyek ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->kewenangankoordinator ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->kewenanganpengawas ?? '-' }}</td>
            <td style="text-align: center;">{{ $item->PSN ?? '-' }}</td>


        <td style="text-align: center; vertical-align: middle;">
            <a href="/bepengawasanbujk/show/{{$item->id}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/bepengawasanbujk/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->id }}"
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
                     var id = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = id;
                     var deleteUrl = "/bepengawasanbujk/delete/" + encodeURIComponent(id);
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
