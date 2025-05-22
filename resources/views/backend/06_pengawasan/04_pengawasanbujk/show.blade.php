
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
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Perusahaan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/bepengawasanbujk?search=${input}`)
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
<button class="hide-on-mobile" onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_pengawasanbujk')"
    onmouseover="this.style.background='white'; this.style.color='black';"
    onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white';"
    style="
        background: linear-gradient(45deg, #d4af37, #228B22);
        color: white;
        border: none;
        margin-right: 10px;
        padding: 10px 20px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    "
>
    <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/bepengawasanbujk/create">
    <button class="hide-on-mobile"
        onmouseover="this.style.background='white'; this.style.color='black';"
        onmouseout="this.style.background='linear-gradient(45deg, #d4af37, #228B22)'; this.style.color='white';"
        style="
            background: linear-gradient(45deg, #d4af37, #228B22);
            color: white;
            border: none;
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        "
    >
        <i class="fa fa-plus" style="margin-right: 8px;"></i> Create
    </button>
</a>


                     </div>
                 </div>
                 <!-- /.card-header -->

                         {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form  method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">

<div class="row">
    <div class="col-md-6">
        <!-- Kode Proyek -->
        <div class="mb-3">
            <label class="form-label" for="kodeproyek">
                <i class="bi bi-hash" style="margin-right: 8px; color: navy;"></i> Kode Proyek
            </label>
            <input type="text" id="kodeproyek" class="form-control" value="{{ $data->kodeproyek }}" readonly />
        </div>

        <!-- Nama Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="namaperusahaan">
                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Nama Perusahaan
            </label>
            <input type="text" id="namaperusahaan" class="form-control" value="{{ $data->namaperusahaan }}" readonly />
        </div>

        <!-- Alamat Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="alamatperusahaan">
                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Alamat Perusahaan
            </label>
            <textarea id="alamatperusahaan" class="form-control" rows="2" readonly>{{ $data->alamatperusahaan }}</textarea>
        </div>

        <!-- Status Modal -->
        <div class="mb-3">
            <label class="form-label" for="statusmodal">
                <i class="bi bi-cash-stack" style="margin-right: 8px; color: navy;"></i> Status Modal
            </label>
            <input type="text" id="statusmodal" class="form-control" value="{{ $data->statusmodal }}" readonly />
        </div>

        <!-- Jenis Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="jenisperusahaan">
                <i class="bi bi-diagram-3" style="margin-right: 8px; color: navy;"></i> Jenis Perusahaan
            </label>
            <input type="text" id="jenisperusahaan" class="form-control" value="{{ $data->jenisperusahaan }}" readonly />
        </div>

        <!-- NIB -->
        <div class="mb-3">
            <label class="form-label" for="nib">
                <i class="bi bi-card-heading" style="margin-right: 8px; color: navy;"></i> NIB
            </label>
            <input type="text" id="nib" class="form-control" value="{{ $data->nib }}" readonly />
        </div>

        <!-- KBLI -->
        <div class="mb-3">
            <label class="form-label" for="kbli">
                <i class="bi bi-list-ol" style="margin-right: 8px; color: navy;"></i> KBLI
            </label>
            <input type="text" id="kbli" class="form-control" value="{{ $data->kbli }}" readonly />
        </div>

        <!-- Uraian KBLI -->
        <div class="mb-3">
            <label class="form-label" for="uraiankbli">
                <i class="bi bi-info-square" style="margin-right: 8px; color: navy;"></i> Uraian KBLI
            </label>
            <textarea id="uraiankbli" class="form-control" rows="2" readonly>{{ $data->uraiankbli }}</textarea>
        </div>

        <!-- Sektor -->
        <div class="mb-3">
            <label class="form-label" for="sektor">
                <i class="bi bi-diagram-2-fill" style="margin-right: 8px; color: navy;"></i> Sektor
            </label>
            <input type="text" id="sektor" class="form-control" value="{{ $data->sektor }}" readonly />
        </div>

        <!-- Alamat Proyek -->
        <div class="mb-3">
            <label class="form-label" for="alamatproyek">
                <i class="bi bi-geo" style="margin-right: 8px; color: navy;"></i> Alamat Proyek
            </label>
            <input type="text" id="alamatproyek" class="form-control" value="{{ $data->alamatproyek }}" readonly />
        </div>

        <!-- Wilayah -->
        <div class="mb-3">
            <label class="form-label" for="wilayah">
                <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Wilayah
            </label>
            <input type="text" id="wilayah" class="form-control" value="{{ $data->wilayah }}" readonly />
        </div>
    </div>

    <div class="col-md-6">
        <!-- Luas Tanah -->
        <div class="mb-3">
            <label class="form-label" for="luastanah">
                <i class="bi bi-square" style="margin-right: 8px; color: navy;"></i> Luas Tanah (m²)
            </label>
            <input type="text" id="luastanah" class="form-control" value="{{ $data->luastanah }}" readonly />
        </div>

        <!-- Jumlah TKI dan TKA -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKI Laki-laki
                </label>
                <input type="number" class="form-control" value="{{ $data->tki_lakilaki }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKI Perempuan
                </label>
                <input type="number" class="form-control" value="{{ $data->tki_perempuan }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKA Laki-laki
                </label>
                <input type="number" class="form-control" value="{{ $data->tka_lakilaki }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKA Perempuan
                </label>
                <input type="number" class="form-control" value="{{ $data->tka_perempuan }}" readonly />
            </div>
        </div>

        <!-- Risiko -->
        <div class="mb-3">
            <label class="form-label" for="resiko">
                <i class="bi bi-exclamation-triangle" style="margin-right: 8px; color: navy;"></i> Risiko
            </label>
            <input type="text" id="resiko" class="form-control" value="{{ $data->resiko }}" readonly />
        </div>

        <!-- Sumber Data -->
        <div class="mb-3">
            <label class="form-label" for="sumberdata">
                <i class="bi bi-database" style="margin-right: 8px; color: navy;"></i> Sumber Data
            </label>
            <input type="text" id="sumberdata" class="form-control" value="{{ $data->sumberdata }}" readonly />
        </div>

        <!-- Investasi -->
        <div class="mb-3">
            <label class="form-label" for="investasi">
                <i class="bi bi-currency-dollar" style="margin-right: 8px; color: navy;"></i> Investasi (Rp)
            </label>
            <input type="text" id="investasi" class="form-control" value="{{ number_format($data->investasi, 2, ',', '.') }}" readonly />
        </div>

        <!-- Skala Usaha Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="skalausahaperusahaan">
                <i class="bi bi-bar-chart-line" style="margin-right: 8px; color: navy;"></i> Skala Usaha Perusahaan
            </label>
            <input type="text" id="skalausahaperusahaan" class="form-control" value="{{ $data->skalausahaperusahaan }}" readonly />
        </div>

        <!-- Skala Usaha Proyek -->
        <div class="mb-3">
            <label class="form-label" for="skalausahaproyek">
                <i class="bi bi-pie-chart" style="margin-right: 8px; color: navy;"></i> Skala Usaha Proyek
            </label>
            <input type="text" id="skalausahaproyek" class="form-control" value="{{ $data->skalausahaproyek }}" readonly />
        </div>

        <!-- Kewenangan Koordinator -->
        <div class="mb-3">
            <label class="form-label" for="kewenangankoordinator">
                <i class="bi bi-person-gear" style="margin-right: 8px; color: navy;"></i> Kewenangan Koordinator
            </label>
            <input type="text" id="kewenangankoordinator" class="form-control" value="{{ $data->kewenangankoordinator }}" readonly />
        </div>

        <!-- Kewenangan Pengawas -->
        <div class="mb-3">
            <label class="form-label" for="kewenanganpengawas">
                <i class="bi bi-person-check-fill" style="margin-right: 8px; color: navy;"></i> Kewenangan Pengawas
            </label>
            <input type="text" id="kewenanganpengawas" class="form-control" value="{{ $data->kewenanganpengawas }}" readonly />
        </div>

        <!-- PSN -->
        <div class="mb-3">
            <label class="form-label" for="PSN">
                <i class="bi bi-flag" style="margin-right: 8px; color: navy;"></i> PSN (Proyek Strategis Nasional)
            </label>
            <input type="text" id="PSN" class="form-control" value="{{ $data->PSN }}" readonly />
        </div>
    </div>

                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->
                        </form>


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
                     var deleteUrl = "/bepengawasanbujk/delete/" + encodeURIComponent(id);
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
