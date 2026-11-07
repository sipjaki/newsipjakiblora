@include('backend.00_administrator.00_baganterpisah.01_header')


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

                                    <!-- FILTER AGENDA SKK -->
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

                                    {{-- ✅ TOTAL DATA --}}
                                    <a class="button-modern button-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                        </svg>
                                        <span class="badge-count">Total {{ $data->total() }} Tenaga Kerja</span>
                                    </a>

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
            url.searchParams.delete("page");
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
            url.searchParams.delete("page");
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