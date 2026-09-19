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
                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                             <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer; text-align:right;">
                                <option value="10">10 </option>
                                <option value="25">25 </option>
                                <option value="50">50 </option>
                                <option value="75">75 </option>
                                <option value="100">100 </option>
                                <option value="150">150 </option>
                                <option value="200">200 </option>
                                <option value="250">250 </option>
                                <option value="500">500 </option>
                                <option value="1000">1.000 </option>
                                <option value="1500">1.500 </option>
                                <option value="2000">2.000 </option>
                                <option value="2500">2.500 </option>
                                <option value="5000">5.000 </option>
                            </select>
                        </div>

                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Agenda Pelatihan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

    fetch(`/beagendapelatihan?search=${encodeURIComponent(input)}`, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("tableBody").innerHTML = data.html;
        updateAllStatus(); // 🔥 WAJIB
    })
    .catch(err => console.error(err));
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
          <th style="width: 800px; text-align:center; vertical-align: middle;">
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
     @forelse($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: left;">{{$item->user->name ?? '-'}}</td>
         <td style="text-align: left;">{{$item->kategoripelatihan->kategoripelatihan ?? '-'}}</td>
<td style="
    text-align: left;
    white-space: normal;
    word-break: break-word;
">
    {{ $item->namakegiatan ?? '-' }}
</td>
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
       <button
    class="btn btn-sm status-btn"
    data-penutupan="{{ \Carbon\Carbon::parse($item->penutupan)->format('Y-m-d H:i:s') }}">
</button>

        </td>
<script>
function updateAllStatus() {
    document.querySelectorAll('.status-btn').forEach(btn => {
        let now = new Date().getTime();
        let tanggalHabis = new Date(btn.dataset.penutupan).getTime();

        if (now > tanggalHabis) {
            btn.innerHTML = '<i class="bi bi-lock-fill me-1"></i>DITUTUP';
            btn.className = 'button-merah btn btn-sm status-btn';
        } else {
            btn.innerHTML = '<i class="bi bi-unlock-fill me-1"></i>DIBUKA';
            btn.className = 'button-hijau btn btn-sm status-btn';
        }
    });
}

// pertama kali load
updateAllStatus();

// realtime
setInterval(updateAllStatus, 1000);
</script>


        <td style="text-align: center;">{{$item->jumlahpeserta}}</td>
         <td style="text-align: left;">{{$item->lokasi}}</td>
<td style="
    width: 1200px;
    max-width: 1200px;
    white-space: normal;
    word-break: break-word;
    overflow-wrap: break-word;
    vertical-align: top;
">
    <span
        class="toggle-text"
        data-full="{{ $item->keterangan }}"
        onclick="toggleText(this)">
    </span>
</td>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.toggle-text').forEach(el => {
        let fullText = el.dataset.full || '-';
        el.dataset.short = fullText.substring(0, 100) + (fullText.length > 100 ? '...' : '');
        el.dataset.open = "false";
        el.innerText = el.dataset.short;
        el.style.color = 'navy';
        el.style.cursor = 'pointer';
    });
});

function toggleText(el) {
    if (el.dataset.open === "false") {
        el.innerText = el.dataset.full;
        el.dataset.open = "true";
    } else {
        el.innerText = el.dataset.short;
        el.dataset.open = "false";
    }
}

/* 🔥 BUKA SEMUA */
function openAllText() {
    document.querySelectorAll('.toggle-text').forEach(el => {
        el.innerText = el.dataset.full;
        el.dataset.open = "true";
    });
}

/* 🔥 TUTUP SEMUA */
function closeAllText() {
    document.querySelectorAll('.toggle-text').forEach(el => {
        el.innerText = el.dataset.short;
        el.dataset.open = "false";
    });
}
</script>


         <td style="
    width: 420px;
    max-width: 420px;
    white-space: normal;
    word-break: break-word;
    overflow-wrap: break-word;
    vertical-align: top;
">
    {{ $item->isiagenda }}
</td>

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
                <button class="button-berkas">
             <i class="bi bi-eye"></i> Lihat
            </button>
            </a>
        </td>

        <td style="text-align: center; vertical-align: middle;">
            <a href="{{ url('/beagendapelatihanpeserta/show/' . $item->id) }}" style="text-decoration: none;">
                <button class="button-baru">
                    <span style="display: inline-flex; align-items: center;">
                        <i class="bi bi-people-fill" style="margin-right: 6px;"></i>
                        {{ $item->pesertapelatihan_count }} Peserta Dari / {{$item->jumlahpeserta}} Kuota
                    </span>
                </button>
            </a>
        </td>


         <td style="text-align: center; vertical-align: middle;">
             <a href="/beagendapelatihan/show/{{$item->namakegiatan}}" class="button-baru" title="Show">
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

