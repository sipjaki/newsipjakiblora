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
@include('backend.00_style.00_cssdashboard.style')

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

                            <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">


<!-- Tombol Download Excel -->
<button class="hide-on-mobile" onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_shstkabupatenblora')"
    onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)';"
    onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white'; this.style.transform='scale(1)';"
    style="
      background: linear-gradient(45deg, #d4af37, #228B22);
      color: white;
      border: none;
      margin-right: 10px;
      padding: 10px 20px;
      border-radius: 15px;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      text-decoration: none;
    ">
    <i class="bi bi-download" style="font-size: 18px;"></i> Download Excel
</button>
@foreach ($data as $item)

<!-- Tombol Create -->
<a href="/beshstkabblora/update/{{$item->id}}" style="text-decoration: none;">
    <button class="hide-on-mobile"
        onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.background='linear-gradient(45deg, #228B22, #d4af37)'; this.style.color='white'; this.style.transform='scale(1)';"
        style="
          background: linear-gradient(45deg, #228B22, #d4af37);
          color: white;
          border: none;
          margin-right: 10px;
          padding: 10px 20px;
          border-radius: 15px;
          font-size: 16px;
          font-weight: 700;
          cursor: pointer;
          display: inline-flex;
          align-items: center;
          gap: 8px;
          transition: all 0.3s ease;
          text-decoration: none;
        ">
        <i class="bi bi-plus-lg" style="font-size: 18px;"></i> Update
    </button>
</a>


@endforeach
                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

{{-- <table id="tabelBujkkonstruksi" class="zebra-table table-striped" > --}}
<table id="tabelBujkkonstruksi" class="zebra-table table-striped" class="table table-bordered">
    <thead>
        <tr>
          <th style="width: 400px; text-align:center;">
                <i class="bi bi-hammer" style="margin-right: 6px;"></i> Pekerjaan
            </th>
            <th style="width: 35px; text-align:center;">
                <i class="bi bi-cash-coin" style="margin-right: 6px;"></i> Rp.
            </th>
            <th style="width: 150px; text-align:center;">
                <i class="bi bi-graph-up-arrow" style="margin-right: 6px;"></i> Besaran
            </th>
        </tr>
    </thead>
<tbody>
    @foreach ($data as $item)
        <tr>
            <td><i class="bi bi-building" style="margin-right: 6px; color: navy;"></i> Bangunan Kantor Tidak Sederhana</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->bangunankantortidaksederhana, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-building-fill" style="margin-right: 6px; color: navy;"></i> Bangunan Kantor Sederhana</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->bangunankantorsederhana, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-house-door" style="margin-right: 6px; color: navy;"></i> Rumah Negara Tipe A</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->rumahnegaratipea, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-house-heart" style="margin-right: 6px; color: navy;"></i> Rumah Negara Tipe B</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->rumahnegaratipeb, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-house" style="margin-right: 6px; color: navy;"></i> Rumah Negara Tipe C/D/E</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->rumahnegaratipecde, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-border" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Depan</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahdepan, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-border-style" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Belakang</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahbelakang, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-border-width" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Samping</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahsamping, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-border-width" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Negara Depan</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahnegaradepan, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-shield-lock" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Negara Belakang</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahnegarabelakang, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td><i class="bi bi-shield-check" style="margin-right: 6px; color: navy;"></i> Pagar Rumah Negara Samping</td>
            <td>Rp</td>
            <td style="text-align: right">{{ number_format($item->pagarrumahnegarasamping, 2, ',', '.') }}</td>
        </tr>
    @endforeach
</tbody>

</table>
<br><br>
<div style="text-align: center; margin: 20px 0;">
    <button
        style="
            background: linear-gradient(45deg, #d4af37, #228B22);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: default;
            transition: all 0.3s ease;
        "
    >
        {{ $title }}
    </button>
</div>
                     </div>
                 </div>

                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

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
                     var deleteUrl = "/besatuanhargaupahpekerjaan/delete/" + encodeURIComponent(id);
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
