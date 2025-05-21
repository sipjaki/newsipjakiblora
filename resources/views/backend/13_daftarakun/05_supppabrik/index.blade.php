<style>
  /* Sembunyikan di layar dengan lebar max 767px (umumnya HP) */
  @media (max-width: 767px) {
    .hide-on-mobile {
      display: none !important;
    }
  }
</style>


<style>
  .btn-custom {
    background: linear-gradient(45deg, #FFD700, #008000);
    color: white;
    border: none;
    margin: 5px;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
  }

  .btn-custom:hover {
    background: white !important;
    color: black !important;
    transform: scale(1.05);
  }

  .button-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: start;
  }

  /* Optional: Responsive font-size atau padding */
  @media (max-width: 768px) {
    .btn-custom {
      font-size: 14px;
      padding: 8px 16px;
    }
  }

  @media (max-width: 480px) {
    .btn-custom {
      width: 100%;
      justify-content: center;
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
{{--
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
                            Status Adminstrator
                        </button>
                    </a>
                </div> --}}

<div class="button-container">


  <button class="btn-custom superadmin">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
      class="bi bi-person-workspace" viewBox="0 0 16 16">
      <path d="M6 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
      <path d="M1 14s1-1 4-1 4 1 4 1v1H1v-1z" />
      <path fill-rule="evenodd"
        d="M12.5 11a.5.5 0 0 0 0 1H13v1a1 1 0 0 0 1 1h.5a.5.5 0 0 0 0-1H14v-1a1 1 0 0 0-1-1h-.5z" />
    </svg>
    {{$jumlahStatus2}} Admin
  </button>

                </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Akun ........ " onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/allsupppabrik?search=${input}`)
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
<!-- Tombol Download Excel -->
<button onclick="exportTableToExcel('tabelSemuaakun', 'data_semuaakun')"
  class="hide-on-mobile"
  onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
  onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #4caf50)'; this.style.color='white'; this.style.transform='scale(1)'"
  style="background: linear-gradient(45deg, #d4af37, #4caf50); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 10px; font-size: 16px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
  <i class="bi bi-download"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/akuncreate" class="hide-on-mobile">
  <button onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
    onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #4caf50)'; this.style.color='white'; this.style.transform='scale(1)'"
    style="background: linear-gradient(45deg, #d4af37, #4caf50); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 10px; font-size: 16px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
    <i class="fa fa-plus"></i> Create
  </button>
</a>
                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelSemuaakun" class="zebra-table table-striped" >
 <thead>
     <tr>
        <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
        <th style="width: 300px; text-align:center;"><i class="bi bi-person-fill"></i> Nama Lengkap</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-person-fill-gear"></i> Status Admin</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-person-fill-gear"></i> Password</th>
        <th style="width: 250px; text-align:center;"><i class="bi bi-person-badge-fill"></i> Username</th>
        <th style="width: 400px; text-align:center;"><i class="bi bi-phone-fill"></i> No Telepon</th>
        <th style="width: 350px; text-align:center;"><i class="bi bi-envelope-fill"></i> Email</th>
        <th style="width: 150px; text-align:center;"><i class="bi bi-image-fill"></i> Foto Profil</th>
        <th style="width: 200px; text-align:center;"><i class="bi bi-gear-fill"></i> Aksi</th>
     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>

        <td style="text-align: left; text-transform:uppercase;">
            @if($item->name)
                {{ $item->name }}
            @else
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Di Update !
                </button>
            @endif
        </td>

        <td style="text-align: left;">
            @if($item->statusadmin->statusadmin)
                {{ $item->statusadmin->statusadmin }}
            @else
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Di Update !
                </button>
            @endif
        </td>

        <td>
    @if($item->password)
        <button onclick="showTempPassword({{ $item->id }})"
                style="background: #2196F3; color: white; padding: 5px 10px; border: none; border-radius: 4px;">
            Generate
        </button>
    @else
        <span style="color: red;">No password set</span>
    @endif
</td>

<script>
function showTempPassword(userId) {
    const tempPass = Math.random().toString(36).slice(-8);
    alert(`Temporary password for user ${userId}: ${tempPass}`);
    // Kirim tempPass ke backend untuk di-update
}
</script>

        <td style="text-align: left; text-transform:uppercase;">
            @if($item->username)
                {{ $item->username }}
            @else
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Di Update !
                </button>
            @endif
        </td>

        <td style="text-align: center;">
            @if($item->phone_number)
                {{ $item->phone_number }}
            @else
                <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; transition: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                    Data Belum Di Update !
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
                    Data Belum Di Update !
                </button>
            @endif
        </td>

            <td style="text-align: center;">
                    <button class="btn btn-secondary btn-sm"
                        style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                        data-bs-toggle="modal" data-bs-target="#modalKtp3">
                        <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                    </button>

                    <!-- Modal KTP -->
                    <div class="modal fade" id="modalKtp3" tabindex="-1" aria-labelledby="modalKtpLabel3" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                    <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                    <span>:</span>
                                    <h5 class="modal-title" id="modalKtpLabel3">Foto Profil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div style="margin-top: 10px;">
                                        @if($item->avatar && file_exists(public_path('storage/' . $item->avatar)))
                                            <!-- Menampilkan gambar dari storage -->
                                            <img src="{{ asset('storage/' . $item->avatar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @elseif($item->avatar)
                                            <!-- Menampilkan gambar dari path luar storage -->
                                            <img src="{{ asset($item->avatar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @else
                                            <!-- Placeholder jika tidak ada data -->
                                            <p>Data belum diupdate</p>
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </td>

        <td style="text-align: center; vertical-align: middle;">
            {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a> --}}
            <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->name }}"
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
                     var name = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = name;
                     var deleteUrl = "/allsemuaakun/delete/" + encodeURIComponent(name);
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
