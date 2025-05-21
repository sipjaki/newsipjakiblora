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

                            <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

<!-- Tombol Create -->
<a href="/beprofile/update/{{ $userId }}">
    <button
        onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
        onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white'; this.style.transform='scale(1)'"
        style="
            background: linear-gradient(45deg, #d4af37, #228B22);
            color: white;
            border: none;
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        "
    >
    <i class="bi bi-pencil-square"></i>

        Update Profile
    </button>
</a>


                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
<div class="admin-profile-container" style="
    max-width: 800px;
    margin: 30px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border: 2px solid;
    border-image: linear-gradient(45deg, #D4AF37, #2ECC71) 1;
    position: relative;
    overflow: hidden;
">
    <!-- Hiasan sudut -->
    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        top: 0;
        right: 0;
        border-top: 2px solid #D4AF37;
        border-right: 2px solid #D4AF37;
        border-top-right-radius: 10px;
    "></div>

    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        bottom: 0;
        left: 0;
        border-bottom: 2px solid #2ECC71;
        border-left: 2px solid #2ECC71;
        border-bottom-left-radius: 10px;
    "></div>

    <h4 style="
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-family: 'Arial', sans-serif;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    ">Akun Anda</h4>

    <div class="admin-avatar" style="
        text-align: center;
        margin-bottom: 20px;
    ">
      <div style="margin-top: 10px;">
    @if($user->avatar && file_exists(public_path($user->avatar)))
        {{-- Jika avatar ada di folder public --}}
        <img src="{{ asset($user->avatar) }}" alt="Admin Avatar" style="
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #D4AF37;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        ">
    @elseif($user->avatar)
        {{-- Jika avatar adalah link/path dari luar public folder --}}
        <img src="{{ $user->avatar }}" alt="Admin Avatar" style="
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #D4AF37;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        ">
    @else
        {{-- Jika avatar tidak ada, tampilkan placeholder --}}
        <img src="https://via.placeholder.com/150" alt="Admin Avatar" style="
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #D4AF37;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        ">
    @endif
</div>

    </div>

    <div class="form-group" style="
        margin-bottom: 20px;
        padding: 15px;
        background: linear-gradient(to right, #f9f9f9, #fff);
        border-left: 4px solid #D4AF37;
        border-radius: 5px;
    ">
        <label style="
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        ">Status Admin</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $user->statusadmin->statusadmin ?? 'N/A' }}</div>
    </div>

    <div class="form-group" style="
        margin-bottom: 20px;
        padding: 15px;
        background: linear-gradient(to right, #f9f9f9, #fff);
        border-left: 4px solid #2ECC71;
        border-radius: 5px;
    ">
        <label style="
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        ">Nama Lengkap</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $user->name ?? 'N/A' }}</div>
    </div>

    <div class="form-group" style="
        margin-bottom: 20px;
        padding: 15px;
        background: linear-gradient(to right, #f9f9f9, #fff);
        border-left: 4px solid #D4AF37;
        border-radius: 5px;
    ">
        <label style="
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        ">Username</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $user->username ?? 'N/A' }}</div>
    </div>
    <div class="form-group" style="
        margin-bottom: 20px;
        padding: 15px;
        background: linear-gradient(to right, #f9f9f9, #fff);
        border-left: 4px solid #2ECC71;
        border-radius: 5px;
    ">
        <label style="
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        ">Email</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $user->email ?? 'N/A' }}</div>
    </div>
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
                     var namasekolah = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namasekolah;
                     var deleteUrl = "/namasekolah/delete/" + encodeURIComponent(namasekolah);
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
