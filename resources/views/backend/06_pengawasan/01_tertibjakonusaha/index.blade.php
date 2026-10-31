@include('backend.00_administrator.00_baganterpisah.01_header')
@include('button')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')
   @include('button')

   <!--begin::App Main-->
   <main class="app-main">
<section style="background: var(--bg-soft); width: 100%; min-height: 100vh; padding-bottom: 30px;">

    <!--begin::App Content Header-->
     <div class="app-content-header">
       <div class="container-fluid">
         <div class="row">
            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')
         </div>
       </div>
     </div>

     <div class="container-fluid">
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <div class="card mb-4">
                 <div class="card-header">

                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                    {{-- ============================================================ --}}
                    {{-- RADAR CHART PANEL                                            --}}
                    {{-- ============================================================ --}}
                    <div class="radar-chart-panel">
                        <div class="radar-chart-canvas-wrap">
                            <canvas id="radarChartMini"></canvas>
                        </div>
                        <div class="radar-chart-info">
                            <div class="radar-chart-title">
                                <i class="bi bi-bar-chart-line-fill" style="margin-right: 6px;"></i>
                                Distribusi Sektor Penyedia
                            </div>
                            <div class="radar-chart-legend">
                                @if(isset($datapenyedia))
                                    @foreach ($datapenyedia as $idx => $p)
                                        <div class="radar-legend-item"
                                             style="border-left: 4px solid
                                                @if($idx == 0) #16A34A
                                                @elseif($idx == 1) #4ADE80
                                                @elseif($idx == 2) #15803D
                                                @else #14532D
                                                @endif;">
                                            <span class="radar-legend-label">{{ $p->penyedia }}</span>
                                            <span class="radar-legend-value" data-stat-id="{{ $p->id }}">
                                                {{ $statistik[$p->id]['total'] ?? 0 }}
                                            </span>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="radar-legend-item radar-legend-total">
                                    <span class="radar-legend-label">Total</span>
                                    <span class="radar-legend-value" id="grandTotalValue">{{ $grandTotal ?? 0 }}</span>
                                </div>
                            </div>
                            <div class="radar-chart-action">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#radarChartModal" class="button-modern button-md">
                                    <i class="bi bi-arrows-fullscreen"></i> Perbesar Chart
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- ============================================================ --}}
                    {{-- FILTER BAR                                                    --}}
                    {{-- ============================================================ --}}
                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px; flex-wrap: wrap; gap: 6px; align-items: center;">

                    <form method="GET" action="/betertibjakonusaha" id="filterForm">

<div style="display: flex; justify-content: flex-end; margin-bottom: 5px; flex-wrap: wrap; gap: 6px; align-items: center;">

    <div style="display: flex; align-items: center; gap: 6px; margin-right:10px;">
        <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
        <select id="entries" name="perPage" onchange="document.getElementById('filterForm').submit()" style="padding: 6px 10px; border: 1px solid var(--border); border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
            <option value="10"   {{ ($perPage ?? 10) == 10   ? 'selected' : '' }}>10</option>
            <option value="25"   {{ ($perPage ?? 10) == 25   ? 'selected' : '' }}>25</option>
            <option value="50"   {{ ($perPage ?? 10) == 50   ? 'selected' : '' }}>50</option>
            <option value="75"   {{ ($perPage ?? 10) == 75   ? 'selected' : '' }}>75</option>
            <option value="100"  {{ ($perPage ?? 10) == 100  ? 'selected' : '' }}>100</option>
            <option value="150"  {{ ($perPage ?? 10) == 150  ? 'selected' : '' }}>150</option>
            <option value="200"  {{ ($perPage ?? 10) == 200  ? 'selected' : '' }}>200</option>
            <option value="500"  {{ ($perPage ?? 10) == 500  ? 'selected' : '' }}>500</option>
            <option value="1000" {{ ($perPage ?? 10) == 1000 ? 'selected' : '' }}>1000</option>
            <option value="2000" {{ ($perPage ?? 10) == 2000 ? 'selected' : '' }}>2000</option>
        </select>
    </div>

    <div style="position: relative; margin-right: 6px;">
        <select id="sektorSelect" name="sektor"
                style="border: 1px solid var(--border); padding: 8px 36px 8px 14px;
                       font-size: 14px; border-radius: 10px; width: 200px;
                       appearance: none; -webkit-appearance: none;
                       background:#fff; cursor:pointer; color:var(--text-dark);">
            <option value="">Semua Sektor</option>
            @if(isset($datapenyedia))
                @foreach ($datapenyedia as $p)
                    <option value="{{ $p->id }}" {{ ($sektor ?? '') == $p->id ? 'selected' : '' }}>
                        {{ $p->penyedia }}
                        @if(isset($statistik[$p->id]))
                            ({{ $statistik[$p->id]['total'] }})
                        @endif
                    </option>
                @endforeach
            @endif
        </select>
        <i class="bi bi-chevron-down"
           style="position:absolute; right:12px; top:50%; transform:translateY(-50%);
                  font-size:13px; color:var(--text-muted); pointer-events:none;"></i>
    </div>

        <div style="position: relative;">
        <select id="tahunSelect" name="tahun"
                style="border: 1px solid var(--border); padding: 8px 36px 8px 14px;
                       font-size: 14px; border-radius: 10px; width: 180px;
                       appearance: none; -webkit-appearance: none;
                       background:#fff; cursor:pointer; color:var(--text-dark);">
            <option value="">Semua Tahun</option>
            @foreach ($listTahun as $th)
                <option value="{{ $th }}" {{ ($tahun ?? '') == $th ? 'selected' : '' }}>
                    {{ $th }}
                </option>
            @endforeach
        </select>
        <i class="bi bi-chevron-down"
           style="position:absolute; right:12px; top:50%; transform:translateY(-50%);
                  font-size:13px; color:var(--text-muted); pointer-events:none;"></i>
    </div>

    <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" name="search" value="{{ $search ?? '' }}"
           placeholder="Cari Badan Usaha ...."
           style="border: 1px solid var(--border); padding: 8px 18px 8px 14px; font-size: 14px; border-radius: 10px; width: 280px;"
           autocomplete="off">
    <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 15px; color: var(--text-muted);"></i>
    </div>


    <button type="submit" class="button-baru button-md">
        <i class="bi bi-search"></i> Cari
    </button>

    <button type="button" class="button-berkas button-md" onclick="exportSelectedColumnsToExcel('tabeltertibjakonusaha', 'Data_TertibJakonUsaha')">
        <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
    </button>

    {{-- Tombol Buat Baru — BUKA MODAL --}}
    <button type="button" class="button-modern button-md"
            data-bs-toggle="modal" data-bs-target="#createTertibJakonModal">
        <i class="fa fa-plus" style="margin-right: 8px;"></i>
        Buat Baru
    </button>



</div>

</form>



                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

                    <div style="width: 100%; overflow-x: auto;">
                        <table id="tabeltertibjakonusaha" class="zebra-table table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="text-align: center; width:75px;">
                                        <i class="bi bi-list-ol"></i> No
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:125px;">
                                        <i class="bi bi-people-fill"></i> Sektor
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:200px;">
                                        <i class="bi bi-building"></i> NIB
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Nama Pekerjaan
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:200px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:400px;">
                                        <i class="bi bi-building-fill"></i> Badan Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:400px;">
                                        <i class="bi bi-building-fill"></i> PJBU
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:260px;">
                                        <i class="bi bi-building-fill"></i> Kesesuaian Kegiatan Konstruksi
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:260px;">
                                        <i class="bi bi-building-fill"></i> Segmentasi Pasar
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:260px;">
                                        <i class="bi bi-building-fill"></i> Pemenuhan Syarat
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:260px;">
                                        <i class="bi bi-building-fill"></i> Pelaksana Pengembangan Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:300px;">
                                        <i class="bi bi-tools"></i> Aksi
                                    </th>

                                </tr>

                            </thead>

                          <tbody id="tabeltertibjakonusahasearc">
                            @forelse  ($data as $item)
                            <tr>

                              <td style="text-align: center;">{{ $data->firstItem() + $loop->index }}</td>
    <td style="text-align: center;">
        @if($item->penyediastatustertibjakon && $item->penyediastatustertibjakon->penyedia)
            {{ $item->penyediastatustertibjakon->penyedia }}
        @else
            <button class="button-berkas">Data Belum Di Update</button>
        @endif
    </td>
    <td>{{ $item->nib ?? 'Data Belum Di Update' }}</td>
    <td>
        @if($item->namapekerjaan)
            <span style="white-space: pre-line;">
                {{ preg_replace('/((?:\S+\s+){10})/', "$1\n", $item->namapekerjaan) }}
            </span>
        @else
            <button class="button-berkas">Data Belum Di Update</button>
        @endif
    </td>
    <td style="text-align: center;">{{ $item->tahunpelaksanaan ?? 'Data Belum Di Update' }}</td>
    <td>{{ $item->namabadanusaha ?? 'Data Belum Di Update' }}</td>
    <td style="text-transform: uppercase;">{{ $item->pjbu ?? 'Data Belum Di Update' }}</td>

    {{-- Kesesuaian Kegiatan Konstruksi — VERTIKAL --}}
    <td class="td-action-vertical">
        <a href="/betertibjakonusahasuratpercobaan/create/{{ $item->id }}" class="td-action-link td-action-top">
            <button class="button-modern"><i class="bi bi-file-earmark-text"></i> Lihat Surat</button>
        </a>
        <a href="{{ url('/beuploadberkasusaha1/upload/' . $item->id) }}" class="td-action-link td-action-bottom">
            @if(!empty($item->cadangan1))
                <button class="button-berkas"><i class="bi bi-check-circle"></i> Berkas Ada</button>
            @else
                <button class="button-newvalidasi"><i class="bi bi-file-earmark-text"></i> Upload Berkas</button>
            @endif
        </a>
    </td>

    {{-- Segmentasi Pasar — VERTIKAL --}}
    <td class="td-action-vertical">
        <a href="{{ url('/betertibjakonusahasegmentasipasar/index/' . $item->id) }}" class="td-action-link td-action-top">
            <button class="button-modern"><i class="bi bi-file-earmark-text"></i> Lihat Surat</button>
        </a>
        <a href="{{ url('/beuploadberkasusaha2/upload/' . $item->id) }}" class="td-action-link td-action-bottom">
            @if(!empty($item->cadangan2))
                <button class="button-berkas"><i class="bi bi-check-circle"></i> Berkas Ada</button>
            @else
                <button class="button-newvalidasi"><i class="bi bi-file-earmark-text"></i> Upload Berkas</button>
            @endif
        </a>
    </td>

    {{-- Pemenuhan Syarat — VERTIKAL --}}
    <td class="td-action-vertical">
        <a href="{{ url('/betertibjakonusahapemenuhansyarat/index/' . $item->id) }}" class="td-action-link td-action-top">
            <button class="button-modern"><i class="bi bi-file-earmark-text"></i> Lihat Surat</button>
        </a>
        <a href="{{ url('/beuploadberkasusaha3/upload/' . $item->id) }}" class="td-action-link td-action-bottom">
            @if(!empty($item->cadangan3))
                <button class="button-berkas"><i class="bi bi-check-circle"></i> Berkas Ada</button>
            @else
                <button class="button-newvalidasi"><i class="bi bi-file-earmark-text"></i> Upload Berkas</button>
            @endif
        </a>
    </td>

    {{-- Pelaksana Pengembangan Usaha — VERTIKAL --}}
    <td class="td-action-vertical">
        <a href="{{ url('/betertibjakonusahapelaksana/index/' . $item->id) }}" class="td-action-link td-action-top">
            <button class="button-modern"><i class="bi bi-file-earmark-text"></i> Lihat Surat</button>
        </a>
        <a href="{{ url('/beuploadberkasusaha4/upload/' . $item->id) }}" class="td-action-link td-action-bottom">
            @if(!empty($item->cadangan4))
                <button class="button-berkas"><i class="bi bi-check-circle"></i> Berkas Ada</button>
            @else
                <button class="button-newvalidasi"><i class="bi bi-file-earmark-text"></i> Upload Berkas</button>
            @endif
        </a>
    </td>

                              <td style="text-align: center;">
                                <a href="/betertibjakonusaha/update/{{$item->id}}" class="button-berkas"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="javascript:void(0)" class="button-merah" data-bs-toggle="modal" data-bs-target="#deleteModal" data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                  <i class="bi bi-trash"></i> Hapus
                                </a>
                              </td>
                            </tr>
                          @empty
                                <tr class="empty-row">
                                    <td colspan="12">
                                        <div class="empty-state">
                                            <div class="empty-icon">
                                                <i class="bi bi-inbox"></i>
                                            </div>
                                            <h6 class="empty-title">Data Tidak Di Temukan !</h6>

                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>

                 <div id="paginationWrapper">
                    @include('backend.00_administrator.00_baganterpisah.07_paginations')
                 </div>

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
                     .table-responsive { max-width: 100%; overflow-x: auto; }

                     /* Tombol vertikal: Lihat Surat di atas, Upload di bawah */
                     .td-action-vertical {
                         text-align: center;
                         vertical-align: middle;
                         padding: 8px 6px !important;
                     }
                     .td-action-vertical .td-action-link {
                         display: block;
                         text-decoration: none;
                         width: 100%;
                     }
                     .td-action-vertical .td-action-top    { margin-bottom: 6px; }
                     .td-action-vertical .td-action-bottom { margin-top: 6px; }
                     .td-action-vertical .td-action-link button {
                         width: 100%;
                         display: inline-flex;
                         align-items: center;
                         justify-content: center;
                         gap: 4px;
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

{{-- ============================================================ --}}
{{-- MODAL: Radar Chart                                            --}}
{{-- ============================================================ --}}
<div class="modal fade" id="radarChartModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-bar-chart-line-fill" style="color:var(--blora-green); margin-right:6px;"></i>
                    Distribusi Sektor Penyedia
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 20px;">
                <div style="width: 100%; height: 400px; position: relative;">
                    <canvas id="radarChartFull"></canvas>
                </div>
                <div style="margin-top: 15px; text-align: center; font-size: 13px; color: var(--text-muted);">
                    Total: <strong id="grandTotalModal">{{ $grandTotal ?? 0 }}</strong> penyedia
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
   @include('backend.06_pengawasan.01_tertibjakonusaha.modalcreate')

   @include('backend.00_administrator.00_baganterpisah.02_footer')

   <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

   {{-- ============================================================ --}}
   {{-- SCRIPT: Export Excel                                          --}}
   {{-- ============================================================ --}}
   <script>
    function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
        const originalTable = document.getElementById(originalTableId);
        const selectedColumns = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
        const nibColumnIndexInExport = selectedColumns.indexOf(2);

        const tempTable = document.createElement('table');
        for (const row of originalTable.rows) {
            const newRow = tempTable.insertRow();
            selectedColumns.forEach(i => {
                const cell = row.cells[i];
                if (cell) newRow.appendChild(cell.cloneNode(true));
            });
        }

        const worksheet = XLSX.utils.table_to_sheet(tempTable);
        const range = XLSX.utils.decode_range(worksheet['!ref']);
        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_ref = XLSX.utils.encode_cell({ c: C, r: R });
                const cell = worksheet[cell_ref];
                if (!cell) continue;
                if (!cell.s) cell.s = {};
                cell.s.border = {
                    top:    { style: "thin", color: { auto: 1 } },
                    right:  { style: "thin", color: { auto: 1 } },
                    bottom: { style: "thin", color: { auto: 1 } },
                    left:   { style: "thin", color: { auto: 1 } }
                };
                cell.s.alignment = { vertical: "center", horizontal: "center", wrapText: true };
                if (C === nibColumnIndexInExport && R > 0) {
                    cell.z = '@'; cell.t = 's'; cell.v = "'" + cell.v;
                }
            }
        }

        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Kolom Terpilih");
        XLSX.writeFile(workbook, filename + ".xlsx");
    }
   </script>

   {{-- ============================================================ --}}
   {{-- SCRIPT: Live Search + Filter + Pagination                     --}}
   {{-- ============================================================ --}}
   <script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput  = document.getElementById('searchInput');
    const tahunSelect  = document.getElementById('tahunSelect');
    const sektorSelect = document.getElementById('sektorSelect');
    const perPageSel   = document.getElementById('entries');
    const tbody        = document.getElementById('tabeltertibjakonusahasearc');
    const paginationW  = document.getElementById('paginationWrapper');

    if (!searchInput || !tbody) return;

    let debounceTimer  = null;
    let currentRequest = null;

    function buildUrl(overrides = {}) {
        const url = new URL(window.location.origin + '/betertibjakonusaha');
        const params = {
            search:  searchInput  ? searchInput.value.trim()  : '',
            tahun:   tahunSelect  ? tahunSelect.value         : '',
            sektor:  sektorSelect ? sektorSelect.value        : '',
            perPage: perPageSel   ? perPageSel.value          : 10,
            page:    null,
            ...overrides
        };
        if (params.search)  url.searchParams.set('search', params.search);
        if (params.tahun)   url.searchParams.set('tahun', params.tahun);
        if (params.sektor)  url.searchParams.set('sektor', params.sektor);
        if (params.perPage) url.searchParams.set('perPage', params.perPage);
        if (params.page)    url.searchParams.set('page', params.page);
        return url.toString();
    }

    function fetchData(url = null) {
        if (currentRequest) currentRequest.abort();

        const fetchUrl = url || buildUrl();

        tbody.style.opacity = '0.5';
        tbody.style.transition = 'opacity 0.15s ease';

        currentRequest = fetch(fetchUrl, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.rows !== undefined) {
                tbody.innerHTML = data.rows;
            } else if (data.html !== undefined) {
                tbody.innerHTML = data.html;
            }

            if (data.pagination && paginationW) {
                paginationW.innerHTML = data.pagination;
            }

            if (data.statistik) {
                Object.keys(data.statistik).forEach(function (id) {
                    const el = document.querySelector(`[data-stat-id="${id}"]`);
                    if (el) el.textContent = data.statistik[id].total;
                });

                if (sektorSelect) {
                    Array.from(sektorSelect.options).forEach(function (opt) {
                        if (opt.value && data.statistik[opt.value]) {
                            opt.textContent = data.statistik[opt.value].penyedia + ' (' + data.statistik[opt.value].total + ')';
                        }
                    });
                }
            }

            if (data.grandTotal !== undefined) {
                const gt  = document.getElementById('grandTotalValue');
                const gtm = document.getElementById('grandTotalModal');
                if (gt)  gt.textContent  = data.grandTotal;
                if (gtm) gtm.textContent = data.grandTotal;
            }

            tbody.style.opacity = '1';
            window.history.replaceState({}, '', fetchUrl);
        })
        .catch(err => {
            if (err.name !== 'AbortError') {
                console.error('Fetch error:', err);
                tbody.style.opacity = '1';
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(fetchData, 400);
        });
        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') { e.preventDefault(); clearTimeout(debounceTimer); fetchData(); }
        });
    }
    if (tahunSelect)  tahunSelect.addEventListener('change',  function () { clearTimeout(debounceTimer); fetchData(); });
    if (sektorSelect) sektorSelect.addEventListener('change', function () { clearTimeout(debounceTimer); fetchData(); });
    if (perPageSel)   perPageSel.addEventListener('change',   function () { clearTimeout(debounceTimer); fetchData(); });

    document.addEventListener('click', function (e) {
        const link = e.target.closest('#paginationWrapper .pagination a, .pagination a');
        if (!link) return;
        e.preventDefault();
        fetchData(link.href);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('popstate', function () {
        fetchData(window.location.href);
    });
});
   </script>

   {{-- ============================================================ --}}
   {{-- SCRIPT: Radar Chart                                            --}}
   {{-- ============================================================ --}}
   <script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Chart === 'undefined') return;

    @php
        $statValues  = [];
        $statLabels  = [];
        if (isset($statistik)) {
            foreach ($statistik as $s) {
                $statValues[] = (int) $s['total'];
                $statLabels[] = $s['penyedia'];
            }
        }
    @endphp

    const dataValues = @json($statValues);
    const labels     = @json($statLabels);
    const maxValue   = Math.max(...dataValues, 1);

    const chartData = {
        labels: labels,
        datasets: [{
            label: 'Jumlah Penyedia',
            data: dataValues,
            backgroundColor: 'rgba(22, 163, 74, 0.20)',
            borderColor: 'rgba(22, 163, 74, 1)',
            borderWidth: 2,
            pointBackgroundColor: 'rgba(22, 163, 74, 1)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 4,
            pointHoverRadius: 6,
        }]
    };

    const miniCtx = document.getElementById('radarChartMini');
    if (miniCtx) {
        new Chart(miniCtx, {
            type: 'radar', data: chartData,
            options: {
                responsive: true, maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { r: {
                    beginAtZero: true,
                    grid: { color: 'rgba(22, 163, 74, 0.15)' },
                    angleLines: { color: 'rgba(22, 163, 74, 0.20)' },
                    ticks: { display: false },
                    pointLabels: { color: '#1A2B4A', font: { size: 11, weight: '700' } }
                }}
            }
        });
    }

    const fullCtx = document.getElementById('radarChartFull');
    if (fullCtx) {
        new Chart(fullCtx, {
            type: 'radar', data: chartData,
            options: {
                responsive: true, maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { callbacks: { label: c => c.label + ': ' + c.parsed.r + ' penyedia' } }
                },
                scales: { r: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: Math.ceil(maxValue / 5) || 1,
                        backdropColor: 'transparent',
                        color: '#6B7A93', font: { size: 10 }
                    },
                    grid: { color: 'rgba(22, 163, 74, 0.15)' },
                    angleLines: { color: 'rgba(22, 163, 74, 0.20)' },
                    pointLabels: { color: '#1A2B4A', font: { size: 13, weight: '600' } }
                }}
            }
        });
    }
});
   </script>

   {{-- ============================================================ --}}
   {{-- SCRIPT: Modal Create + Konfirmasi Simpan                       --}}
   {{-- ============================================================ --}}
   <script>
function openConfirmCreateModal() {
    const modal = document.getElementById('confirmCreateModal');
    if (modal) modal.style.display = 'flex';
}

function closeConfirmCreateModal() {
    const modal = document.getElementById('confirmCreateModal');
    if (modal) modal.style.display = 'none';
}

function submitCreateForm() {
    const form = document.getElementById('formCreateTertibJakon');
    if (form) form.submit();
}

// Auto-open modal kalau ada error validasi dari server
document.addEventListener('DOMContentLoaded', function () {
    const hasError = {{ $errors->any() ? 'true' : 'false' }};
    if (hasError) {
        const modalEl = document.getElementById('createTertibJakonModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    }
});
   </script>

</body>
</html>
