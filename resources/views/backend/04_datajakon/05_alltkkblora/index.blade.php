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
    {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}
<section style="background: linear-gradient(to bottom, #ffffff, #ffffff); width: 100%; min-height: 100vh;">

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
     {{-- ======================================================= --}}
     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja Konstruksi ...."
        onkeyup="searchTable()"
        style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/beskkallblora?search=${input}`)
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

                                <button class="button-data">

                                    <i class="bi bi-people-fill"></i>
                                    Data Tenaga Kerja {{ $datajumlah }} Orang
                                    <i class="bi bi-award-fill ms-3"></i>
                                    {{ $datajumlahsertifikat }} Buah Sertifikat
                                </button>

                         <a href="/beskkallblora/create">
                             <button class="button-baru">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-plus" style="margin-right: 8px;"></i>
                             Tambah Baru
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
            <i class="bi bi-hash"></i> No
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-person-lines-fill"></i> Nama Lengkap
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-geo-alt-fill"></i> Alamat
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-check-fill"></i> Tahun Lulus Sekolah
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-cash-stack"></i> Tahun Anggaran
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-building"></i> Penyelenggara
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-mortarboard-fill"></i> Universitas/Sekolah/Instansi
          </th>
          <th style="width: 225px; text-align:center;">
            <i class="bi bi-book"></i> Pendidikan
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-briefcase-fill"></i> Jabatan Kerja
          </th>
          <th style="width: 150px; text-align:center;">
            <i class="bi bi-bar-chart-fill"></i> Jenjang
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-patch-check-fill"></i> LSP Penerbit
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-journal-bookmark-fill"></i> Jurusan
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-event-fill"></i> Tanggal Terbit
          </th>
          <th style="width: 300px; text-align:center;">
            <i class="bi bi-calendar-x-fill"></i> Tanggal Habis
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-hourglass-split"></i> Masa Berlaku
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-check2-circle"></i> Status Terbit
          </th>
          <th style="width: 200px; text-align:center;">
            <i class="bi bi-file-earmark-check-fill"></i> Sertifikat
          </th>
          <th style="width: 400px; text-align:center;">
            <i class="bi bi-gear-fill"></i> Aksi
          </th>

     </tr>
 </thead>
 <tbody id="tableBody">
     @forelse ($data as $item )
     <tr class="align-middle">
        <td style="text-align: center;">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
        <td style="text-align: left;">
         @if(empty($item->nama))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->nama}}
            @endif
        </td>
         <td style="text-align: left;">
            @if(empty($item->alamat))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->alamat}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->tahunlulus))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->tahunlulus}}
            @endif
        </td>

        <td style="text-align: center;">
            @if($item->tahunbimtek)
                {{$item->tahunbimtek}}
            @else
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @endif
        </td>
         <td style="text-align: center;">
            @if($item->asosiasimasjaki)
                {{ $item->asosiasimasjaki->namaasosiasi }}
            @else
                <button class="button-berkas">Data Asosiasi Belum  Di Update</button>
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->namasekolah->namasekolah))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->namasekolah->namasekolah}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->jenjangpendidikan->jenjangpendidikan))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jenjangpendidikan->jenjangpendidikan}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->jabatankerja->jabatankerja))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jabatankerja->jabatankerja}}
            @endif
        </td>
        <td style="text-align: center;">
            @if(empty($item->jenjang->jenjang))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jenjang->jenjang}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->lpspenerbit->lpspenerbit))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->lpspenerbit->lpspenerbit}}
            @endif
        </td>
        <td style="text-align: left;">
            @if(empty($item->jurusan->jurusan))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->jurusan->jurusan}}
            @endif
        </td>
                 <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggalterbit)->translatedFormat('l, d F Y') }}</td>
         <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggalhabis)->translatedFormat('l, d F Y') }}</td>

         <td style="text-align: center;">
            <button id="status-{{ $item->id }}" class="btn btn-sm"></button>
        </td>

        <script>
            function updateStatus() {
                let now = new Date().getTime();
                let tanggalHabis = new Date("{{ \Carbon\Carbon::parse($item->tanggalhabis)->format('Y-m-d H:i:s') }}").getTime();
                let statusButton = document.getElementById("status-{{ $item->id }}");

                if (now > tanggalHabis) {
                    statusButton.innerText = "TIDAK BERLAKU";
                    statusButton.className = "button-merah";
                } else {
                    statusButton.innerText = "BERLAKU";
                    statusButton.className = "button-hijau";
                }
            }

            // Jalankan pertama kali saat halaman dimuat
            updateStatus();

            // Update setiap 1 detik untuk realtime
            setInterval(updateStatus, 1000);
        </script>

<td style="text-align: center; text-transform: uppercase;">
    @if(empty($item->statusterbit))
                <button class="button-berkas">
                    Data Belum Di Update
                </button>
            @else
                {{$item->statusterbit}}
            @endif</td>
<td style="text-align: center;">
    <button class="button-berkas"
        data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
        <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
    </button>

    <!-- Modal KTP -->
    <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <span>:</span>
                    <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Sertifikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div style="margin-top: 10px;">
                        @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                            <!-- Jika file ada di storage -->
                            <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                        @elseif($item->sertifikat)
                            <!-- Jika file ada tapi path sudah diperbarui -->
                            <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                        @else
                            <!-- Jika tidak ada file -->
                            <p><span class="badge bg-danger">Data Belum Diupdate</span></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</td>


        <td style="text-align: center; vertical-align: middle;">
            <a href="/beskkallblora/show/{{$item->nama}}" class="button-baru" title="Show">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/beskkallblora/update/{{$item->nama}}" class="button-berkas" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="javascript:void(0)" class="button-merah" title="Delete"
                  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  data-judul="{{ $item->nama }}"
                  onclick="setDeleteUrl(this)">
                   <i class="bi bi-trash"></i>
           </a>
        </td>

        </tr>

         @empty
    <tr>
        <td colspan="100%">
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
                Data Tidak Ditemukan !!
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
                     var nama = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = nama;
                     var deleteUrl = "/beskkallblora/delete/" + encodeURIComponent(nama);
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

