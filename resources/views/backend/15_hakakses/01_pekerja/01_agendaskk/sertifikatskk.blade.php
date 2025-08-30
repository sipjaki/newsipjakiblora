<style>
.marquee-text {
    display: inline-block;
    white-space: nowrap;
    position: absolute;
    will-change: transform;
    animation: marquee-left 8s linear infinite;
    left: 0;
}

@keyframes marquee-left {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>


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
@include('button')
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
                 <div class="card-header">
{{-- <div style="
    font-weight: 900;
    font-size: 16px;
    text-align: center;
    background: linear-gradient(135deg, #00378a, #FFD700);
    color: white;
    padding: 8px 16px;
    border-radius: 10px;
    display: inline-block;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    cursor: pointer;
"
onmouseover="this.style.background='white'; this.style.color='black';"
onmouseout="this.style.background='linear-gradient(135deg, #00378a, #FFD700)'; this.style.color='white';">
    ⚙️ Setting Database
</div> --}}

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
<!-- Tombol Data Penyelenggara/Asosiasi -->
{{-- <a href="/404">
    <button
        onmouseover="this.style.background='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
        onmouseout="this.style.background='linear-gradient(to right, #006400, #000000)'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
        style="background: linear-gradient(to right, #006400, #000000); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: all 0.3s ease;">

        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px; fill: white; transition: fill 0.3s;" width="20" height="20" viewBox="0 0 24 24">
            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.07 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
        </svg>
        Data Penyelenggara/Asosiasi
    </button>
</a> --}}

<!-- Tombol Data LSP Pelaksana -->

{{-- <a href="/404">
    <button
        onmouseover="this.style.background='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
        onmouseout="this.style.background='linear-gradient(to right, #004d00, #000000)'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
        style="background: linear-gradient(to right, #004d00, #000000); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: all 0.3s ease;">

        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px; fill: white; transition: fill 0.3s;" width="20" height="20" viewBox="0 0 24 24">
            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.07 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
        </svg>
        Data LSP Pelaksana
    </button>
</a> --}}

                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Agenda Sertifikasi Saudara...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/downsertifikatskk?search=${input}`)
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



                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table class="zebra-table table-striped">
 <thead>
     <tr>
                <th style="width: 75px; text-align:center; vertical-align: middle;">
            <i class="bi bi-hash"></i> No
            </th>

            <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-person-lines-fill"></i> Nama Lengkap
            </th>

            <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-award"></i> Sertifikat
            </th>
     </tr>
 </thead>

 <tbody id="tableBody">
     @forelse ($data as $item)

     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: left;">{{$item->user->name}}</td>

         <td style="text-align: center; gap:10px;">
                      <div style="margin-top: 10px; overflow: auto;">
    @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
        @php
            $fileUrl = asset('storage/' . $item->sertifikat);
        @endphp
        <div style="transform: scale(0.75); transform-origin: top left; width: 133.33%;">
            <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="200px" style="border:1px solid #ccc;"></iframe>
        </div>
        <div class="mt-3">
            <a href="{{ $fileUrl }}" download class="button-berkas">
                <i class="bi bi-download"></i> Download Sertifikat
            </a>
        </div>

    @elseif($item->sertifikat)
        @php
            $fileUrl = asset($item->sertifikat);
        @endphp
        <div style="transform: scale(0.75); transform-origin: top left; width: 133.33%;">
            <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="200px" style="border:1px solid #ccc;"></iframe>
        </div>
        <div class="mt-3">
            <a href="{{ $fileUrl }}" download class="button-berkas">
                <i class="bi bi-download"></i> Download Sertifikat
            </a>
        </div>

    @else
        <p>Sertifikat Belum Terbit</p>)
    @endif
</div>

        </td>
        </tr>

        @empty
    <tr>
        <td colspan="100%"> {{-- Memenuhi semua kolom --}}
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
            ">
                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Sertifikat Belum Terbit !!
            </div>
        </td>
    </tr>
@endforelse

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

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
                     var namakegiatan = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namakegiatan;
                     var deleteUrl = "/beagendaskkmateri/delete/" + encodeURIComponent(namakegiatan);
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

