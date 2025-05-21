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
                 <a href="/beagendaskk">
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
                    </a>


                </div>

                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                            <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                {{-- <option value="10">10</option> --}}
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


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Universitas ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/settingssekolah?search=${input}`)
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
<button onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_universitas_sekolah')"
    onmouseover="this.style.background='white'; this.style.color='black';"
    onmouseout="this.style.background='linear-gradient(to right, #d4af37, #228B22)'; this.style.color='white';"
    style="background: linear-gradient(to right, #d4af37, #228B22); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s; text-decoration: none;">
    <i class="bi bi-download" style="margin-right: 5px;"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/settingssekolah/create">
    <button
        onmouseover="this.style.background='white'; this.style.color='black';"
        onmouseout="this.style.background='linear-gradient(to right, #228B22, #d4af37)'; this.style.color='white';"
        style="background: linear-gradient(to right, #228B22, #d4af37); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s; text-decoration: none;">
        <i class="fa fa-plus" style="margin-right: 8px;"></i> Create
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

    <h2 style="
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-family: 'Arial', sans-serif;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    ">Detail Admin</h2>

    <div class="admin-avatar" style="
        text-align: center;
        margin-bottom: 20px;
    ">
        <img src="{{ $admin->avatar ?? 'https://via.placeholder.com/150' }}" alt="Admin Avatar" style="
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #D4AF37;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        ">
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
        ">{{ $admin->statusadmin->name ?? 'N/A' }}</div>
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
        ">{{ $admin->name ?? 'N/A' }}</div>
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
        ">{{ $admin->username ?? 'N/A' }}</div>
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
        ">Nomor Telepon</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $admin->phone_number ?? 'N/A' }}</div>
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
        ">Email</label>
        <div class="form-control" style="
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        ">{{ $admin->email ?? 'N/A' }}</div>
    </div>
</div>


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
