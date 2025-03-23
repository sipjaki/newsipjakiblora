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
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">

           <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>
     {{-- ======================================================= --}}
     {{-- ALERT --}}

     @include('backend.00_administrator.00_baganterpisah.06_alert')

     {{-- ======================================================= --}}

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <div class="card-header">
                     <h2 style="color: black; font-weight:900;" class="card-title">Halaman Pengaturan : {{$title}} </h2>
                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                         <a href="/betupoksi/create">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#156f2a'; this.style.color='white';"
                             style="background-color: #156f2a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
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

<table class="table table-striped">
 <thead>
     <tr>
         <th style="width: 100px; text-align:center;">No</th>
         <th style="width: 200px; text-align:center;">Penulis</th>
         <th style="width: 300px; text-align:center;">Judul Berita</th>
         <th style="width: 200px; text-align:center;">Tanggal</th>
         <th style="width: 400px; text-align:center;">Foto Header</th>
         <th style="width: 400px; text-align:center;">Foto Isi 1</th>
         <th style="width: 400px; text-align:center;">Foto Isi 2</th>
         <th style="width: 400px; text-align:center;">Berkas</th>
         <th style="width: 400px; text-align:center;">Keterangan</th>
         <th style="width: 200px; text-align:center;">Aksi</th>
     </tr>
 </thead>
 <tbody>
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: center;">{{$item->user->name}}</td>
         <td style="text-align: left;">{{ $item->judul }}</td>
         <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</td>

         <td style="text-align: center;">
             <img src="{{ asset('storage/'. $item->foto1) }}" alt="Image" width="300" style="border-radius: 15px;">
         </td>
         <td style="text-align: center;">
             <img src="{{ asset('storage/'. $item->foto2) }}" alt="Image" width="300" style="border-radius: 15px;">
         </td>
         <td style="text-align: center;">
             <img src="{{ asset('storage/'. $item->foto3) }}" alt="Image" width="300" style="border-radius: 15px;">
         </td>

         <td style="text-align: center;">
            <object data="{{ asset('storage/' . $item->berkas) }}" type="application/pdf" width="300" height="200">
                <p>PDF cannot be displayed.</p>
            </object>
        </td>

         <td>
            <div class="isi-berita" style="text-align: justify;">
                {!! $item->keterangan !!}
            </div>
        </td>


         <td style="text-align: center;">
             <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                 <i class="bi bi-eye"></i>
             </a>
             <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                 <i class="bi bi-pencil-square"></i>
             </a>
             <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                data-judul="{{ $item->judul }}" onclick="setDeleteUrl(this)">
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
                     var judul = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = judul;
                     var deleteUrl = "/beartikeljakon/delete/" + encodeURIComponent(judul);
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
   </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')
