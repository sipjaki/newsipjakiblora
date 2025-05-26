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

 .btn-hover-white:hover {
  background-color: white !important;
  color: black !important;
  border: 1px solid black;
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')

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
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                                <option value="10">10</option>
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

                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Paket Pekerjaan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                            fetch(`/betertibjakonpemanfaatan?search=${encodeURIComponent(input)}`, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                document.querySelector("#tableBody").innerHTML = data.html;
                            })
                            .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>


                                <button class="btn-create" onclick="exportSelectedColumnsToExcel('tabeltertibjakonusaha', 'Data_TertibJakonUsaha')">
                                    <i class="bi bi-download icon-create" style="margin-right: 5px" ></i> Download Excel
                                </button>

                                <a href="/betertibjakonusaha/create">
                                    <button class="btn-create";>
                                    <!-- Ikon Kembali -->
                                    <i class="fa fa-plus icon-create" style="margin-right: 8px;"></i>
                                    Create
                                </button>
                                </a>

                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

                    <div class="table-responsive" style="width: 100%; overflow-x: auto;">
                        <table id="tabeltertibjakonusaha" class="zebra-table table-bordered table-striped" style="white-space: nowrap;">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="text-align: center; width:75px;">
                                        <i class="bi bi-list-ol"></i> No
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:125px;">
                                        <i class="bi bi-people-fill"></i> Penyedia
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Nama Pekerjaan
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Nama Bangunan
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px;">
                                        <i class="bi bi-geo-alt-fill"></i> Nomor Kontrak
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Lokasi
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:225px;">
                                        <i class="bi bi-geo-alt-fill"></i> Tanggal Pembangunan
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:225px;">
                                        <i class="bi bi-geo-alt-fill"></i> Tanggal Pemanfaatan
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:100px;">
                                        <i class="bi bi-geo-alt-fill"></i> Umur Bangunan
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Status 1
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Status 2
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Status 3
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Status 4
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Status 5
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:200px;">
                                        <i class="bi bi-tools"></i> Aksi
                                    </th>

                                </tr>

                            </thead>

                          <tbody>
                            @foreach ($data as $item)
                            <tr>
                              <td style="text-align: center;">{{ $loop->iteration }}</td>
                              <td style="text-align: center;">
                                @if($item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat')
                                  {{ $item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat' }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

<td style="text-align: left;">
  @if($item->namapekerjaan)
    {{ $item->namapekerjaan }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>

<td style="text-align: left;">
  @if($item->namabangunan)
    {{ $item->namabangunan }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>

<td style="text-align: left;">
  @if($item->nomorkontrak)
    {{ $item->nomorkontrak }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>

<td style="text-align: left;">
  @if($item->lokasi)
    {{ $item->lokasi }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>

<td style="text-align: left;">
  @if($item->tanggalpembangunan)
    {{ \Carbon\Carbon::parse($item->tanggalpembangunan)->translatedFormat('j F Y') }}

    @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
    Data Belum Di Update
</button>
@endif
</td>

<td style="text-align: left;">
    @if($item->tanggalpemanfaatan)
    {{ \Carbon\Carbon::parse($item->tanggalpemanfaatan)->translatedFormat('j F Y') }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>


<td style="text-align: left;">
  @if($item->umurbangunan)
    {{ $item->umurbangunan }}
  @else
    <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
      Data Belum Di Update
    </button>
  @endif
</td>




                             <td style="text-align: center; vertical-align: middle;">
                                    <a href="/betertibjakonusahasuratpercobaan/create/{{$item->id}}" style="text-decoration: none;">
                                        <button class="button-abuabu">
                                        <i class="bi bi-file-earmark-text icon-create"></i> Lihat Surat
                                        </button>
                                    </a>
                                </td>

                               <td style="text-align: center; vertical-align: middle;">
                                    <a href="{{ url('/betertibjakonusahasegmentasipasar/index/' . $item->id) }}" style="text-decoration: none;">
                                        <button class="button-abuabu">
                                        <i class="bi bi-file-earmark-text icon-create"></i> Lihat Surat
                                        </button>
                                    </a>
                                </td>


                               <td style="text-align: center; vertical-align: middle;">
                                    <a href="{{ url('/betertibjakonusahapemenuhansyarat/index/' . $item->id) }}" style="text-decoration: none;">
                                        <button class="button-abuabu">
                                        <i class="bi bi-file-earmark-text icon-create"></i> Lihat Surat
                                        </button>
                                    </a>
                                </td>

                                <td style="text-align: center; vertical-align: middle;">
                                    <a href="{{ url('/betertibjakonusahapelaksana/index/' . $item->id) }}" style="text-decoration: none;">
                                        <button class="button-abuabu">
                                        <i class="bi bi-file-earmark-text icon-create"></i> Lihat Surat
                                        </button>
                                    </a>
                                </td>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>


                              <td style="text-align: center;">
                                <!-- Tombol Aksi -->
                                {{-- <a href="/bebujkkonsultan/show/{{$item->namalengkap}}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a> --}}
                                <a href="/betertibjakonusaha/update/{{$item->id}}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                  <i class="bi bi-trash"></i>
                                </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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
                                <p>Apakah Anda Ingin Menghapus Data ini?</p>
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
                    var deleteUrl = "/betertibjakonusaha/delete/" + encodeURIComponent(id);
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
    function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
        const originalTable = document.getElementById(originalTableId);
        const selectedColumns = [
            0,  // No
            1,  // Penyedia
            2,  // NIB
            3,  // Nama Pekerjaan
            4,  // Tahun Pelaksanaan
            5,  // Badan Usaha
            6,  // PJBU
            7,  // Sesuai Jenis
            8,  // Sesuai Sifat
            9,  // Sesuai Klasifikasi
            10, // Sesuai Layanan
            11, // Sesuai Bentuk
            12, // Sesuai Kualifikasi
            13, // Pemenuhan Syarat
            14  // Pelaksanaan Pengembangan Usaha
        ];

        const nibColumnIndexInExport = selectedColumns.indexOf(2); // NIB akan berada di kolom ini dalam tabel hasil export

        const tempTable = document.createElement('table');
        for (const row of originalTable.rows) {
            const newRow = tempTable.insertRow();
            selectedColumns.forEach(i => {
                const cell = row.cells[i];
                if (cell) {
                    const newCell = cell.cloneNode(true);
                    newRow.appendChild(newCell);
                }
            });
        }

        const worksheet = XLSX.utils.table_to_sheet(tempTable);

        const range = XLSX.utils.decode_range(worksheet['!ref']);
        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_address = { c: C, r: R };
                const cell_ref = XLSX.utils.encode_cell(cell_address);
                const cell = worksheet[cell_ref];
                if (!cell) continue;
                if (!cell.s) cell.s = {};

                // Set style border
                cell.s.border = {
                    top: { style: "thin", color: { auto: 1 } },
                    right: { style: "thin", color: { auto: 1 } },
                    bottom: { style: "thin", color: { auto: 1 } },
                    left: { style: "thin", color: { auto: 1 } }
                };

                // Set alignment
                cell.s.alignment = {
                    vertical: "center",
                    horizontal: "center",
                    wrapText: true
                };

                // Pastikan kolom NIB disimpan sebagai teks (hindari notasi eksponensial)
                if (C === nibColumnIndexInExport && R > 0) {
                    cell.z = '@'; // Format text
                    cell.t = 's'; // Tipe string
                    cell.v = "'" + cell.v; // Tambah apostrof untuk paksa teks
                }
            }
        }

        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Kolom Terpilih");

        XLSX.writeFile(workbook, filename + ".xlsx");
    }
    </script>


<script>
    function printModalContent(id) {
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat2(id) {
        const modalContent = document.querySelector(`#modalSurat2${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat3(id) {
        const modalContent = document.querySelector(`#modalSurat3${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>
