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
@include('backend.00_style.01_cssdashboard.style')

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
                </div> --}}
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Agenda Pelatihan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/beagendapelatihan?search=${input}`)
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

                         <a href="/beagendapelatihan/create">
                             <button class="button-baru" class="hide-on-mobile">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-plus" style="margin-right: 8px;"></i>
                             Buat Agenda Pelatihan
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
        <th style="width: 75px; text-align:center; vertical-align: middle;">
            <i class="bi bi-hash"></i> No
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-building"></i> LSP Penerbit
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-award"></i> Kategori Pelatihan
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-journal-bookmark"></i> Nama Kegiatan
          </th>
          <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-people"></i> Penyelenggara
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-calendar-event"></i> Waktu Pelaksanaan
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-calendar-x"></i> Penutupan
          </th>
          <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-check-circle"></i> Status
          </th>
          <th style="width: 200px; text-align:center; vertical-align: middle;">
            <i class="bi bi-person-plus"></i> Jumlah Peserta
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-geo-alt"></i> Lokasi
          </th>
          <th style="width: 250px; text-align:center; vertical-align: middle;">
            <i class="bi bi-info-circle"></i> Keterangan
          </th>
          <th style="width: 600px; text-align:center; vertical-align: middle;">
            <i class="bi bi-card-text"></i> Isi Agenda
          </th>
          <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-image"></i> Foto
          </th>
          <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-list-ul"></i> Daftar Materi
          </th>
          <th style="width: 300px; text-align:center; vertical-align: middle;">
            <i class="bi bi-people-fill"></i> Peserta
          </th>
          <th style="width: 400px; text-align:center; vertical-align: middle;">
            <i class="bi bi-tools"></i> Aksi
          </th>

     </tr>
 </thead>
 <tbody id="tableBody">
     @foreach ($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: left;">{{$item->user->name ?? '-'}}</td>
         <td style="text-align: left;">{{$item->kategoripelatihan->kategoripelatihan ?? '-'}}</td>
         <td style="text-align: left;">{{$item->namakegiatan ?? '-'}}</td>
         <td style="text-align: left;">{{$item->asosiasimasjaki->namaasosiasi ?? '-'}}</td>
         {{-- <td style="text-align: center;">
            @if($item->asosiasimasjaki)
                {{ $item->asosiasimasjaki->namaasosiasi }}
            @else
                <button class="btn btn-danger btn-sm">Data Asosiasi Belum  Di Update</button>
            @endif
        </td> --}}
        {{-- <td style="text-align: left;">{{$item->penutupan}}</td> --}}
        <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->waktupelaksanaan)->translatedFormat('l, d F Y') }}</td>
        <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->penutupan)->translatedFormat('l, d F Y') }}</td>
        {{-- <td style="text-align: center;">{{$item->waktupelaksanaan}}</td> --}}

        <td style="text-align: center;">
            <button id="status-{{ $item->id }}" class="btn btn-sm"></button>
        </td>
<script>
    function updateStatus() {
        let now = new Date().getTime();
        let tanggalHabis = new Date("{{ \Carbon\Carbon::parse($item->penutupan)->format('Y-m-d H:i:s') }}").getTime();
        let statusButton = document.getElementById("status-{{ $item->id }}");

        if (now > tanggalHabis) {
            statusButton.innerHTML = '<i class="bi bi-lock-fill" style="margin-right:5px;"></i>DITUTUP';
            statusButton.className = "button-merah";
        } else {
            statusButton.innerHTML = '<i class="bi bi-unlock-fill" style="margin-right:5px;"></i>DIBUKA';
            statusButton.className = "button-hijau";
        }
    }

    // Jalankan pertama kali saat halaman dimuat
    updateStatus();

    // Update setiap 1 detik untuk realtime
    setInterval(updateStatus, 1000);
</script>

        <td style="text-align: center;">{{$item->jumlahpeserta}}</td>
         <td style="text-align: left;">{{$item->lokasi}}</td>
         <td style="text-align: left;">{{$item->keterangan}}</td>
         <td style="text-align: left;">{{$item->isiagenda}}</td>
         <td style="text-align: center; gap:10px;">
            <div style="margin-top: 10px;">
                @if($item->foto && file_exists(public_path('storage/' . $item->foto)))
                    <!-- Menampilkan gambar dari storage -->
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Peraturan" style="max-width: 150px; max-height: 150px; object-fit: contain;" loading="lazy">
                @elseif($item->foto)
                    <!-- Menampilkan gambar dari path luar storage -->
                    <img src="{{ asset($item->foto) }}" alt="Gambar Peraturan" style="max-width: 150px; max-height: 150px; object-fit: contain;" loading="lazy">
                @else
                    <!-- Placeholder jika tidak ada data -->
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </td>


        <td style="text-align: center; vertical-align: middle;">
            <a href="{{ url('/beagendapelatihanmateri/' . $item->id) }}" style="text-decoration: none;">
                <button class="button-baru">
             <i class="bi bi-eye"></i> Lihat
            </button>
            </a>
        </td>

        <td style="text-align: center; vertical-align: middle;">
            <a href="{{ url('/beagendapelatihanpeserta/show/' . $item->id) }}" style="text-decoration: none;">
                <button class="button-newvalidasi">
                    <span style="display: inline-flex; align-items: center;">
                        <i class="bi bi-people-fill" style="margin-right: 6px;"></i>
                        {{ $item->pesertapelatihan_count }} Peserta Dari / {{$item->jumlahpeserta}} Kuota
                    </span>
                </button>
            </a>
        </td>


         <td style="text-align: center; vertical-align: middle;">
             <a href="/beagendapelatihan/show/{{$item->namakegiatan}}" class="button-newvalidasi" title="Show">
                 <i class="bi bi-eye"></i>View
             </a>
             <a href="/beagendapelatihan/update/{{$item->namakegiatan}}" class="button-berkas" title="Update">
                 <i class="bi bi-pencil-square"></i>Update
             </a>
             <a href="javascript:void(0)" class="button-merah" title="Delete"
                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                   data-judul="{{ $item->namakegiatan }}"
                   onclick="setDeleteUrl(this)">
                    <i class="bi bi-trash"></i>Hapus
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
                     var namakegiatan = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namakegiatan;
                     var deleteUrl = "/beagendapelatihan/delete/" + encodeURIComponent(namakegiatan);
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

