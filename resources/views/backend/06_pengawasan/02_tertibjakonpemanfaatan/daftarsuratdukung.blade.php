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
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                 {{-- <a href="/beagendaskk">
                        <button
                            onmouseover="this.style.background='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                            onmouseout="this.style.background='linear-gradient(to right, #004d00, #000000)'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
                            style="background: linear-gradient(to right, #004d00, #000000); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s; text-decoration: none;">

                            <!-- Ikon Calendar SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 24 24" style="margin-right: 8px; transition: fill 0.3s;">
                                <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/>
                            </svg>

                            Agenda SKK
                        </button>
                    </a> --}}


                </div>

                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/betertibjakonpemanfaatan">
                    <button class="btn-kembali">
                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                    Kembali
                </button>
            </a>
        </div>


                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelBujkkonstruksi" class="zebra-table table-striped" >
 <thead>
     <tr>
        <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-people-fill"></i> Pengawasan Pemanfataan</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-people-fill"></i> Pengawasan Rencana Umur <br> Konstruksi & Kapasitas Beban</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-people-fill"></i> Pengawasan Pemeliharaan <br> Konstruksi & Struktur</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-tools"></i> Aksi</th>
     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: left;">

              <div style="margin-top: 10px;">
                                @if($item->lingkuppengawasan && file_exists(public_path('storage/' . $item->lingkuppengawasan)))
                                <!-- Display the default iframe when the file exists in the storage -->
                                <iframe src="{{ asset('storage/' . $item->lingkuppengawasan) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @elseif($item->lingkuppengawasan)
                                <!-- Display the iframe with the updated file -->
                                <iframe src="{{ asset($item->lingkuppengawasan) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @else
                                <!-- Optional: Show a placeholder if there's no file available -->
                                <p>Data belum diupdate</p>
                            @endif

                    </div>
         </td>
         <td style="text-align: left;">

              <div style="margin-top: 10px;">
                                @if($item->indikator && file_exists(public_path('storage/' . $item->indikator)))
                                <!-- Display the default iframe when the file exists in the storage -->
                                <iframe src="{{ asset('storage/' . $item->indikator) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @elseif($item->indikator)
                                <!-- Display the iframe with the updated file -->
                                <iframe src="{{ asset($item->indikator) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @else
                                <!-- Optional: Show a placeholder if there's no file available -->
                                <p>Data belum diupdate</p>
                            @endif

                    </div>
         </td>
         <td style="text-align: left;">

              <div style="margin-top: 10px;">
                                @if($item->dokumendiperiksa && file_exists(public_path('storage/' . $item->dokumendiperiksa)))
                                <!-- Display the default iframe when the file exists in the storage -->
                                <iframe src="{{ asset('storage/' . $item->dokumendiperiksa) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @elseif($item->dokumendiperiksa)
                                <!-- Display the iframe with the updated file -->
                                <iframe src="{{ asset($item->dokumendiperiksa) }}" frameborder="0" width="100%" height="300px"></iframe>
                            @else
                                <!-- Optional: Show a placeholder if there's no file available -->
                                <p>Data belum diupdate</p>
                            @endif

                    </div>
         </td>

        <td style="text-align: center; vertical-align: middle;">
            {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a> --}}
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
                     var deleteUrl = "/buktidukungindex/delete/" + encodeURIComponent(id);
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
