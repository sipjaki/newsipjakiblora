@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}
.card-3d {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15), 0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    margin-bottom: 30px;
}
.card-3d:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25), 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}
.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
}
.table-responsive-custom {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    border-radius: 0 0 20px 20px;
}
.table-custom-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85rem;
    min-width: 1200px;
    white-space: nowrap;
}
.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 15px 12px !important;
    text-align: left;
    border-bottom: 2px solid #e2e8f0 !important;
    font-size: 0.8rem !important;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}
.table-custom-modern tbody td {
    padding: 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: middle;
}
.table-custom-modern tbody tr:nth-child(odd) td {
    background-color: #ffffff !important;
}
.table-custom-modern tbody tr:nth-child(even) td {
    background-color: #e2e8f0 !important;
}
.table-custom-modern tbody tr:hover td {
    background-color: #bbf7d0 !important;
    border-bottom-color: #86efac !important;
    cursor: pointer;
}
.table-custom-modern tbody tr.empty-row:hover td {
    background-color: #ffffff !important;
    cursor: default;
}
.modal-custom .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
.modal-custom .modal-header {
    background: #f8fafc;
    border-bottom: 1px solid #eaeaea;
    border-radius: 20px 20px 0 0;
    padding: 20px 25px;
}
.modal-custom .modal-body { padding: 25px; }
.modal-custom .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    border-radius: 0 0 20px 20px;
    padding: 15px 25px;
}
.search-full-wrapper {
    position: relative;
    width: 100%;
    margin-bottom: 14px;
}
.search-full-wrapper .search-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    font-size: 1.15rem;
    pointer-events: none;
}
.search-full-wrapper input[type="search"] {
    width: 100%;
    padding: 14px 52px;
    border: 2px solid #d8dde5;
    border-radius: 14px;
    font-size: 0.95rem;
    background: #fbfcfd;
    outline: none;
    transition: all 0.25s ease;
}
.search-full-wrapper input[type="search"]:focus {
    border-color: #13A847;
    background: #ffffff;
    box-shadow: 0 0 0 5px rgba(19, 168, 71, 0.18);
}
.search-full-wrapper .search-clear {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    background: #e9edf4;
    border: none;
    color: #6b7a93;
    width: 28px; height: 28px;
    border-radius: 50%;
    cursor: pointer;
    display: none;
    align-items: center;
    justify-content: center;
}
.search-full-wrapper .search-clear.show { display: flex; }
.toolbar-buttons-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    justify-content: flex-end;
    padding-bottom: 14px;
}
.toolbar-entries {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #f8fafc;
    border: 1px solid #e9edf4;
    border-radius: 10px;
    padding: 0.35rem 0.7rem;
}
.toolbar-entries label {
    font-size: 0.72rem;
    font-weight: 600;
    color: #6b7a93;
    text-transform: uppercase;
    margin: 0;
}
.toolbar-entries select {
    border: none;
    background: transparent;
    font-size: 0.8rem;
    color: #1a2b4a;
    outline: none;
    cursor: pointer;
    font-weight: 600;
    min-width: 140px;
}
.toolbar-buttons-row .spacer { flex: 1; }
@media (max-width: 768px) {
    .toolbar-buttons-row { justify-content: stretch; }
    .toolbar-buttons-row > * { width: 100%; justify-content: center; }
    .toolbar-buttons-row .spacer { display: none; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    @include('backend.00_administrator.00_baganterpisah.04_navbar')
    @include('button')
    @include('backend.00_administrator.00_baganterpisah.03_sidebar')

    <main class="app-main">
        <section class="bg-3d-pattern">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                        @include('backend.00_administrator.00_baganterpisah.11_alert')
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row" style="margin-right: 10px; margin-left: 10px;">
                    <div class="col-md-12">
                        <div class="card card-3d mb-4">
                            <div class="card-header card-header-custom">
                                <div class="header-title">
                                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                                </div>

                                <!-- SEARCH BOX -->
                                <div class="search-full-wrapper">
                                    <i class="bi bi-search search-icon"></i>
                                    <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja ...." value="{{ $search ?? '' }}" autocomplete="off">
                                    <span class="search-count" id="searchCount"></span>
                                    <button type="button" class="search-clear" id="searchClear" aria-label="Clear">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <!-- TOOLBAR -->
                                <div class="toolbar-buttons-row">
                                    <div class="toolbar-entries">
                                        <label for="entries">Tampilkan :</label>
                                        <select id="entries" onchange="updateEntries()">
                                            <option value="10" {{ ($perPage ?? 10) == 10 ? 'selected' : '' }}>10</option>
                                            <option value="25" {{ ($perPage ?? 10) == 25 ? 'selected' : '' }}>25</option>
                                            <option value="50" {{ ($perPage ?? 10) == 50 ? 'selected' : '' }}>50</option>
                                            <option value="75" {{ ($perPage ?? 10) == 75 ? 'selected' : '' }}>75</option>
                                            <option value="100" {{ ($perPage ?? 10) == 100 ? 'selected' : '' }}>100</option>
                                            <option value="150" {{ ($perPage ?? 10) == 150 ? 'selected' : '' }}>150</option>
                                            <option value="200" {{ ($perPage ?? 10) == 200 ? 'selected' : '' }}>200</option>
                                            <option value="500" {{ ($perPage ?? 10) == 500 ? 'selected' : '' }}>500</option>
                                            <option value="1000" {{ ($perPage ?? 10) == 1000 ? 'selected' : '' }}>1000</option>
                                            <option value="2000" {{ ($perPage ?? 10) == 2000 ? 'selected' : '' }}>2000</option>
                                        </select>
                                    </div>

                                    <!-- FILTER AGENDA SKK (dekorasi) -->
                                    <div class="toolbar-entries">
                                        <label for="filterAgenda">Agenda :</label>
                                        <select id="filterAgenda" onchange="filterAgenda()">
                                            <option value="">Semua Agenda</option>
                                            @foreach(($daftarAgenda ?? []) as $ag)
                                                <option value="{{ $ag->id }}" {{ ($agenda_id ?? '') == $ag->id ? 'selected' : '' }}>
                                                    {{ $ag->nama ?? $ag->judul ?? 'Agenda #' . $ag->id }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <span class="spacer"></span>

                                    <button type="button" onclick="exportTableToExcel('tablepeserta', 'data_semuatkkdpupr')" class="button-berkas button-md">
                                        <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive-custom">
                                    <table id="tablepeserta" class="table-custom-modern">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">No</th>
                                                <th style="text-align:center;">Nama Lengkap</th>
                                                <th style="text-align:center;">NIK</th>
                                                <th style="text-align:center;">Gender</th>
                                                <th style="text-align:center;">Tanggal Lahir</th>
                                                <th style="text-align:center;">Tahun Lulus</th>
                                                <th style="text-align:center;">Status Sertifikat</th>
                                                <th style="text-align:center;">Informasi</th>
                                                <th style="text-align:center;">Sertifikat</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            @forelse($data as $item)
                                            <tr class="align-middle">
                                                <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>
                                                <td style="text-align: left; text-transform: uppercase;">
                                                    @if(!empty($item->user->name))
                                                        {{ $item->user->name }}
                                                    @else
                                                        <span style="color: red;">Nama Lengkap Belum Diisi</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">{{ $item->nik ?? '-' }}</td>
                                                <td style="text-align: center;">{{ $item->jeniskelamin ?? '-' }}</td>
                                                <td style="text-align: center;">
                                                    {{ $item->ttl ? \Carbon\Carbon::parse($item->ttl)->translatedFormat('d F Y') : '-' }}
                                                </td>
                                                <td style="text-align: center;">{{ $item->tahunlulus ?? '-' }}</td>
                                                <td style="text-align: center;">
                                                    @if($item->sertifikat)
                                                        <span class="button-hijau" style="padding:4px 10px; border-radius:6px;">Terbit</span>
                                                    @else
                                                        <span class="button-merah" style="padding:4px 10px; border-radius:6px;">Belum Terbit</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    <a href="{{ url('/bepesertaskkshowberkas/show/' . $item->id) }}" class="button-baru" style="text-decoration: none;">
                                                        <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat Informasi
                                                    </a>
                                                </td>
                                                <td style="text-align: center;">
                                                    <button type="button"
                                                        class="button-berkas btn-lihat-sertifikat"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalSertifikat"
                                                        data-src="{{ $item->sertifikat ? asset('storage/' . $item->sertifikat) : '' }}"
                                                        data-nama="{{ $item->user->name ?? '-' }}">
                                                        <i class="bi bi-award-fill" style="margin-right: 5px;"></i> Sertifikat
                                                    </button>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr class="empty-row">
                                                <td colspan="9">
                                                    <div class="empty-state">
                                                        <div class="empty-icon">
                                                            <i class="bi bi-inbox"></i>
                                                        </div>
                                                        <h5 class="empty-title">Data Tidak Ditemukan !</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @include('backend.00_administrator.00_baganterpisah.07_paginations')

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- MODAL SERTIFIKAT (GLOBAL) -->
<div class="modal fade modal-custom" id="modalSertifikat" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                <span style="margin: 0 5px;">:</span>
                <h5 class="modal-title">
                    Sertifikat — <span id="sertifikatNama" style="color: #13A847;">-</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center" style="padding: 0;">
                <iframe id="sertifikatIframe" src="about:blank" frameborder="0" width="100%" height="700px" style="display:block;"></iframe>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {

        // ==========================================
        // FILTER AGENDA (submit GET)
        // ==========================================
        window.filterAgenda = function () {
            let selectedValue = document.getElementById("filterAgenda").value;
            let url = new URL(window.location.href);
            if (selectedValue) {
                url.searchParams.set("agendaskk_id", selectedValue);
            } else {
                url.searchParams.delete("agendaskk_id");
            }
            window.location.href = url.toString();
        };

        // ==========================================
        // MODAL SERTIFIKAT
        // ==========================================
        var modalSertifikat  = document.getElementById('modalSertifikat');
        var sertifikatIframe = document.getElementById('sertifikatIframe');
        var sertifikatNama   = document.getElementById('sertifikatNama');

        function bindSertifikat() {
            document.querySelectorAll('.btn-lihat-sertifikat').forEach(function(btn) {
                btn.onclick = function() {
                    var src  = this.getAttribute('data-src');
                    var nama = this.getAttribute('data-nama');
                    if (sertifikatNama) sertifikatNama.textContent = nama || '-';
                    if (sertifikatIframe) sertifikatIframe.src = src || 'about:blank';
                };
            });
        }
        bindSertifikat();

        if (modalSertifikat) {
            modalSertifikat.addEventListener('hidden.bs.modal', function () {
                if (sertifikatIframe) sertifikatIframe.src = 'about:blank';
                if (sertifikatNama) sertifikatNama.textContent = '-';
            });
        }

        // ==========================================
        // ENTRIES
        // ==========================================
        window.updateEntries = function() {
            let selectedValue = document.getElementById("entries").value;
            let url = new URL(window.location.href);
            url.searchParams.set("perPage", selectedValue);
            window.location.href = url.toString();
        };

        // ==========================================
        // SEARCH AJAX
        // ==========================================
        var searchInput = document.getElementById('searchInput');
        var searchClear = document.getElementById('searchClear');
        var searchCount = document.getElementById('searchCount');
        var debounceTimer = null;

        function toggleClearBtn() {
            if (searchInput.value.length > 0) {
                searchClear.classList.add('show');
            } else {
                searchClear.classList.remove('show');
            }
        }

        function doSearchFetch() {
            var input = searchInput.value || '';
            var agenda = document.getElementById('filterAgenda')?.value || '';

            fetch(`/beagendaskktkk2025?search=${encodeURIComponent(input)}&agendaskk_id=${encodeURIComponent(agenda)}`)
                .then(function(r){ return r.text(); })
                .then(function(html){
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(html, 'text/html');
                    var newTableBody = doc.querySelector('#tableBody');
                    var currentTableBody = document.querySelector('#tableBody');

                    if (newTableBody && currentTableBody) {
                        currentTableBody.innerHTML = newTableBody.innerHTML;
                        bindSertifikat();

                        var rows = currentTableBody.querySelectorAll('tr:not(.empty-row)');
                        if (searchCount) {
                            if (input.trim().length > 0) {
                                searchCount.textContent = rows.length + ' hasil';
                                searchCount.classList.add('show');
                            } else {
                                searchCount.classList.remove('show');
                            }
                        }
                    }
                })
                .catch(function(err){ console.error('Error fetching search results:', err); });
        }

        function searchDebounced() {
            toggleClearBtn();
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(doSearchFetch, 350);
        }

        if (searchInput) {
            searchInput.addEventListener('input', searchDebounced);
            searchInput.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    clearTimeout(debounceTimer);
                    doSearchFetch();
                }
            });
        }

        if (searchClear) {
            searchClear.addEventListener('click', function () {
                searchInput.value = '';
                toggleClearBtn();
                if (searchCount) searchCount.classList.remove('show');
                doSearchFetch();
                searchInput.focus();
            });
        }
        toggleClearBtn();
    });
})();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
<script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')