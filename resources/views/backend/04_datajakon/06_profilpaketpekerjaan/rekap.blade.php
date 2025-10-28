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
        @include('backend.00_administrator.00_baganterpisah.04_navbar')
        @include('backend.00_administrator.00_baganterpisah.03_sidebar')
        @include('button')

        <!--begin::App Main-->
        <main class="app-main">
            <section style="background: linear-gradient(to bottom, #a8e6a1, #ffffff); width: 100%; min-height: 100vh;" loading="lazy">
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

                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="putih row" style="margin-right: 10px; margin-left:10px;">
                        <!-- /.card -->
                        {{-- <div class="card mb-4">
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-briefcase" style="margin-right: 8px;"></i>
                                        Jenis Pekerjaan
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-kanban" style="margin-right: 8px;"></i>
                                        Status Pekerjaan
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-cash-stack" style="margin-right: 8px;"></i>
                                        Sumber Dana
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-calendar-event" style="margin-right: 8px;"></i>
                                        Tahun Pelaksanaan
                                    </button>
                                </a>
                            </div>
                        </div> --}}

                        <div class="card-header">
                            @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

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

                                                <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/bepaketpekerjaanrekap?search=${input}`)
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


      <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Paket Pekerjaan ...."
           onkeyup="searchTable()"
           style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
    <i class="bi bi-search"
       style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
</div>
                                <a href="/bepaketpekerjaanrekap">
                                  <button class="button-modern">
                                    <i class="bi bi-clipboard-data" style="margin-right: 8px;"></i>
                                    Rekap
                                    </button>
                                </a>
                                <a href="/statistikprofilpekerjaan">
                                    <button class="button-modern">
                                    <i class="bi bi-bar-chart-line" style="margin-right: 8px;"></i>
                                    Statistik
                                    </button>
                                </a>

                                <a href="/bepaketpekerjaan">
                                    <button class="button-modern">
                                    <i class="bi bi-database" style="margin-right: 8px;"></i>
                                    Data Lengkap
                                    </button>
                                </a>

<button onclick="exportTableToExcel('tablePaket', 'data_profilpaketpekerjaan')" class="button-modern">
    <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
</button>

<script>

    function exportTableToExcel(tableID, filename = '') {
    let table = document.getElementById(tableID);
    let tableHTML = "<table>" + table.innerHTML + "</table>"; // hanya ambil isi thead+tbody

    filename = filename ? filename + '.xls' : 'excel_data.xls';

    let downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);

    downloadLink.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tableHTML);
    downloadLink.download = filename;
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

</script>



                                <a href="/bepaketpekerjaancreate">
                                    <button class="button-baru">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                        Buat Baru
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                                <table id="tablePaket" class="zebra-table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 75px; text-align:center;">
                                                <i class="bi bi-hash" style="margin-right: 5px;"></i>No
                                            </th>
                                            <th style="width: 175px; text-align:center;">
                                                <i class="bi bi-briefcase" style="margin-right: 5px;"></i>Jenis Pekerjaan
                                            </th>
                                            <th style="width: 400px; text-align:center;">
                                                <i class="bi bi-card-text" style="margin-right: 5px;"></i>Nama Pekerjaan
                                            </th>
                                            <th style="width: 400px; text-align:center;">
                                                <i class="bi bi-list-check" style="margin-right: 5px;"></i>Status Paket Pekerjaan
                                            </th>

                                            {{-- <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-cash-stack" style="margin-right: 5px;"></i>Sumber Dana
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-calendar-week" style="margin-right: 5px;"></i>Pelaksanaan
                                            </th>
                                            <th style="width: 300px; text-align:center;">
                                                <i class="bi bi-building" style="margin-right: 5px;"></i>CV/PT
                                            </th>
                                            <th style="width: 300px; text-align:center;">
                                                <i class="bi bi-123" style="margin-right: 5px;"></i>NIB
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-currency-dollar" style="margin-right: 5px;"></i>Nilai Kontrak
                                            </th>
                                            <th style="width: 225px; text-align:center;">
                                                <i class="bi bi-file-earmark-text" style="margin-right: 5px;"></i>Jenis Kontrak
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-bar-chart" style="margin-right: 5px;"></i>Karakteristik
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-calendar-date" style="margin-right: 5px;"></i>Mulai
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-calendar-check" style="margin-right: 5px;"></i>Selesai
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Status
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-graph-up-arrow" style="margin-right: 5px;"></i>Progress
                                            </th>
                                            <th style="width: 400px; text-align:center;">
                                                <i class="bi bi-diagram-3" style="margin-right: 5px;"></i>Satuan Kerja
                                            </th> --}}
                                            {{-- <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-file-earmark-text-fill" style="margin-right: 5px;"></i>Buat Draft SPK
                                            </th> --}}
                                            <th style="width: 300px; text-align:center;">
                                                <i class="bi bi-gear" style="margin-right: 5px;"></i>Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{$loop->iteration }}</td>
<td style="text-align: left;">
    @if(!empty($item->profiljenispekerjaan->jenispekerjaan))
        {{ $item->profiljenispekerjaan->jenispekerjaan }}
    @else
        <span class="button-berkas">Data Belum Di Update !</span>
    @endif
</td>
<td style="text-align: left; max-width: 380px; word-wrap: break-word; white-space: normal;">
    {!! $item->namapekerjaan
        ? ucfirst(strtolower($item->namapekerjaan))
        : '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>

<td style="text-align: center;">
    {!! $item->paketstatuspekerjaan->paketstatuspekerjaan
        ?? '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>

{{-- <td style="text-align: center;">
    {!! $item->sumberdana->sumberdana
        ?? '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>

<td style="text-align: center;">
    {!! $item->tahunpilihan->tahunpilihan
        ?? '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>

<td style="text-align: left;">
    {!! $item->cvptpenyedia
        ? $item->cvptpenyedia
        : '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>

<td style="text-align: center;">
    {!! $item->nib
        ? $item->nib
        : '<span class="button-berkas">Data Belum Di Update !</span>' !!}
</td>
                                            <td style="text-align: right;">
                                                <span style="float: left;">Rp.</span>{{ number_format($item->nilaikontrak, 0, ',', '.') }}
                                            </td>
                                            <td style="text-align: center;">{{$item->jeniskontrak}}</td>
                                            <td style="text-align: center;">{{$item->karakteristikkontrak}}</td>
@php
    $months = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
@endphp

<td style="text-align: center;">
    {{ $months[$item->bulanmulai] ?? '-' }}
</td>
<td style="text-align: center;">
    {{ $months[$item->bulanselesai] ?? '-' }}
</td>




                                            @php
                                            $bulanColors = [
                                                1 => '#FF6B6B',   // Januari
                                                2 => '#FFA94D',   // Februari
                                                3 => '#FFD43B',   // Maret
                                                4 => '#69DB7C',   // April
                                                5 => '#38D9A9',   // Mei
                                                6 => '#4DABF7',   // Juni
                                                7 => '#5C7CFA',   // Juli
                                                8 => '#9775FA',   // Agustus
                                                9 => '#DA77F2',   // September
                                                10 => '#F783AC',  // Oktober
                                                11 => '#FF922B',  // November
                                                12 => '#74C0FC',  // Desember
                                                13 => '#20C997',  // Selesai
                                            ];


                                            $id = $item->bulanrekap->id ?? 'Data Belum Di Update';
                                            $bgColor = $bulanColors[$id] ?? '#6c757d';
                                            @endphp

                                            <td style="text-align: center;">
                                                <button class="button-hijau"
                                                    style="background-color: {{ $bgColor }}; color: white; border: none; transition: 0.3s;"
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                    onmouseout="this.style.backgroundColor='{{ $bgColor }}'; this.style.color='white';">
                                                    {{ $item->bulanrekap->bulanrekap ?? 'Data Belum Di Update' }}
                                                </button>
                                            </td>

                                            <td style="text-align: left;">
                                                <div style="width: 100%; background-color: #ddd; border-radius: 10px; height: 20px; position: relative;">
                                                    <div
                                                        style="width: {{$item->progress }}%;
                                                            background-color:
                                                            @if($item->progress < 25)
                                                                red;
                                                            @elseif($item->progress < 50)
                                                                orange;
                                                            @elseif($item->progress < 75)
                                                                lightblue;
                                                            @elseif($item->progress < 100)
                                                                lightgreen;
                                                            @else
                                                                green;
                                                            @endif
                                                            height: 100%;
                                                            border-radius: 10px;">
                                                    </div>
                                                    <div style="position: absolute; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: black; font-weight: bold;">
                                                        {{$item->progress}}%
                                                    </div>
                                                </div>
                                            </td>
                                        <td style="text-align: left; max-width: 380px; word-wrap: break-word; white-space: normal;">
                                            {{ ucwords(strtolower($item->user->name ?? 'Data Belum Di Update'))  }}
                                            </td> --}}

                                            {{-- <td style="text-align: center;">
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                    <a href="/bepaketpekerjaan/showsurat/{{$item->id}}" class="button-baru">
                                                        <i class="bi bi-file-earmark-text-fill" style="margin-right: 6px;"></i> Buat Draft
                                                    </a>
                                                </div>
                                            </td> --}}
<td style="text-align: center; vertical-align: middle; white-space: nowrap;">
  <div style="display: inline-flex; gap: 0px; align-items: center; justify-content: center;">
 <a href="{{ url('/bepaketpekerjaan/view/' . $item->id) }}"
   class="button-modern"
   title="View">
  <i class="bi bi-eye"></i>
</a>
 <a href="{{ url('/bepaketpekerjaan/update/' . $item->id) }}"
   class="button-modern"
   title="Update">
  <i class="bi bi-pencil-square"></i>
</a>

    <a href="javascript:void(0)" class="button-merah" title="Delete"
       data-bs-toggle="modal" data-bs-target="#deleteModal"
       data-judul="{{ $item->id }}"
       onclick="setDeleteUrl(this)"
       {{-- style="display: inline-flex; align-items: center; gap: 4px; padding: 6px 12px; background-color: #f44336; color: white; border-radius: 4px; text-decoration: none; font-weight: 600; font-size: 14px;" --}}
       >
      <i class="bi bi-trash"></i>
    </a>
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
                    </div>
                </div>
            </section>
        </main>
        <!--end::App Main-->
    </div>

    @include('backend.00_administrator.00_baganterpisah.02_footer')

    <script>
        function setDeleteUrl(button) {
            var id = button.getAttribute('data-judul');
            document.getElementById('itemName').innerText = id;
            var deleteUrl = "/bepaketpekerjaan/delete/" + encodeURIComponent(id);
            document.getElementById('deleteForm').action = deleteUrl;
        }
    </script>
</body>
