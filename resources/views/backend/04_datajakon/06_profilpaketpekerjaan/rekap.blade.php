@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══════════════════════════════════════════════════════════════
   TOKENS
   ═══════════════════════════════════════════════════════════════ */
:root {
    --green: #13A847;
    --green-dark: #0e7a33;
    --green-soft: #f0fdf4;
    --green-line: #d1fae5;
    --silver: #94a3b8;
    --silver-soft: #e2e8f0;
    --gray: #64748b;
    --gray-dark: #475569;
    --line: #e5e7eb;
    --bg-soft: #f8fafc;
}

.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}

body, .app-wrapper {
    font-family: 'Poppins','Segoe UI',Tahoma,sans-serif;
    font-size: 13px;
    line-height: 1.55;
    color: #000 !important;
}

/* ═══ CARD ═══ */
.card-3d {
    background: #fff;
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.5);
    box-shadow: 0 10px 25px -5px rgba(19,168,71,.15), 0 20px 40px -10px rgba(0,0,0,.1);
    margin-bottom: 30px;
}
.card-header-custom {
    background: #fff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
    border-radius: 20px 20px 0 0 !important;
}
.card-3d > .card-body:last-child { border-radius: 0 0 20px 20px; }

.card-3d, .card-3d * { color: #000 !important; }

/* ═══ TOOLBAR ═══ */
.toolbar-wrapper {
    display: flex; flex-wrap: wrap;
    align-items: center; justify-content: space-between;
    gap: 10px;
    padding: 14px 16px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 12px;
    margin-top: 12px;
}
.toolbar-left { display:flex; flex-wrap:wrap; align-items:center; gap:10px; flex:1 1 auto; min-width:280px; }
.toolbar-right { display:flex; flex-wrap:wrap; align-items:center; gap:8px; flex:0 0 auto; }

/* ═══ SEARCH ═══ */
.search-wrapper { position: relative; flex: 1 1 260px; min-width: 220px; max-width: 420px; }
.search-input {
    width: 100%;
    border: 1.5px solid #e2e8f0;
    padding: 10px 40px 10px 16px;
    font-size: 13px;
    border-radius: 10px;
    background: #fff;
    color: #000 !important;
    transition: all .25s ease;
}
.search-input:focus {
    border-color: #13A847;
    box-shadow: 0 0 0 4px rgba(19,168,71,.15);
    outline: none;
}
.search-input::placeholder { color: #64748b !important; opacity: 1; }
.search-icon {
    position: absolute; right: 14px; top: 50%;
    transform: translateY(-50%);
    font-size: 15px; color: #94a3b8;
    pointer-events: none;
}

/* ═══ FILTER ═══ */
.filter-inline { display:inline-flex; align-items:center; gap:6px; white-space:nowrap; }
.filter-inline-label { font-size:12px; font-weight:600; color:#000 !important; }
.filter-select {
    border: 1.5px solid #e2e8f0;
    padding: 9px 32px 9px 12px;
    font-size: 13px;
    border-radius: 10px;
    background: #fff;
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    color: #000 !important;
    min-width: 100px;
}
.filter-select:focus {
    border-color: #13A847;
    box-shadow: 0 0 0 4px rgba(19,168,71,.15);
    outline: none;
}

/* ═══ BADGE TOTAL ═══ */
.badge-total {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 8px 14px;
    background: #ecfdf5;
    border: 1.5px solid #a7f3d0;
    border-radius: 10px;
    font-size: 12px; font-weight: 700;
    color: #000 !important;
    white-space: nowrap;
    box-shadow: 0 2px 6px rgba(19,168,71,.1);
}
.badge-total i { color: #13A847; font-size: 14px; }
.badge-total .badge-total-number {
    background: #13A847;
    color: #fff !important;
    padding: 2px 8px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 800;
}

/* ═══ BUTTON BASE ═══ */
.button-modern, .button-baru, .button-berkas, .button-merah, .button-hijau, .button-data {
    font-size: 12px !important;
    font-weight: 600 !important;
    border-radius: 8px !important;
    padding: 8px 14px !important;
    border: 1.5px solid transparent !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 5px !important;
    transition: all .15s ease !important;
    cursor: pointer !important;
    text-decoration: none !important;
    color: #000 !important;
}
.button-modern { background: #fff !important; border-color: var(--green-line) !important; }
.button-modern:hover { background: var(--green-soft) !important; border-color: var(--green) !important; }
.button-baru { background: var(--green) !important; border-color: var(--green) !important; box-shadow: 0 2px 6px rgba(19,168,71,.25) !important; }
.button-baru:hover { background: var(--green-dark) !important; border-color: var(--green-dark) !important; }
.button-berkas { background: var(--silver-soft) !important; border-color: var(--silver) !important; }
.button-berkas:hover { background: var(--silver) !important; }
.button-merah { background: #fee2e2 !important; border-color: #fecaca !important; }
.button-merah:hover { background: #dc2626 !important; border-color: #dc2626 !important; }

/* ═══ TABLE ═══ */
#tablePaket,
#tablePaket > tbody,
#tablePaket > tbody > tr,
#tablePaket > tbody > tr > td,
#tablePaket > thead,
#tablePaket > thead > tr > th {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    --bs-table-hover-bg: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
}
#tablePaket {
    width: 100%;
    border-collapse: collapse;
    min-width: 900px;
    font-size: 13px;
    margin: 0;
}
#tablePaket > thead > tr > th {
    padding: 14px 12px !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    color: #000 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    background: linear-gradient(180deg, #f0fdf4 0%, #f8fafc 100%) !important;
    border-bottom: 2px solid #13A847 !important;
    white-space: nowrap;
    position: sticky;
    top: 0;
    z-index: 2;
}
#tablePaket > thead > tr > th i {
    color: #13A847;
    margin-right: 4px;
    font-size: 13px;
}
#tablePaket > tbody > tr > td {
    padding: 10px 14px;
    font-size: 13px;
    color: #000 !important;
    border-bottom: 1px solid #e5e7eb !important;
    vertical-align: middle;
    transition: background-color 0.18s ease;
}
#tablePaket > tbody > tr:nth-child(odd) > td { background-color: #ffffff !important; }
#tablePaket > tbody > tr:nth-child(even) > td { background-color: #f0fdf4 !important; }
#tablePaket > tbody > tr:hover > td {
    background-color: #bbf7d0 !important;
    color: #000 !important;
    border-bottom-color: #86efac !important;
}
#tablePaket > tbody > tr:hover > td:first-child {
    box-shadow: inset 4px 0 0 #13A847;
}
#tablePaket > tbody > tr.empty-row > td,
#tablePaket > tbody > tr.empty-row:hover > td {
    background-color: #ffffff !important;
    box-shadow: none !important;
}
#tablePaket > tbody > tr > td a.button-baru,
#tablePaket > tbody > tr > td a.button-berkas,
#tablePaket > tbody > tr > td a.button-merah {
    padding: 6px 10px !important;
    margin: 0 2px !important;
}

/* Badge "Data Belum Update" */
span.button-berkas {
    background: #fef3c7 !important;
    color: #000 !important;
    border-color: #fde68a !important;
    font-size: 11px !important;
    padding: 3px 8px !important;
    border-radius: 4px !important;
    font-weight: 600 !important;
    display: inline-block !important;
}

.table-responsive { max-width: 100%; overflow-x: auto; border-radius: 0 0 20px 20px; }

/* ═══ PAGINATION ═══ */
.pagination {
    gap: 4px !important; flex-wrap: wrap !important;
    justify-content: center !important; margin-top: 12px !important;
}
.pagination .page-link,
.pagination .page-item a,
.pagination .page-item span {
    font-size: 12px !important;
    padding: 6px 10px !important;
    border-radius: 6px !important;
    border: 1px solid var(--line) !important;
    color: #000 !important;
    background: #fff !important;
    transition: all .15s ease !important;
}
.pagination .page-link:hover,
.pagination .page-item a:hover {
    background: var(--green-soft) !important;
    border-color: var(--green) !important;
}
.pagination .page-item.active .page-link,
.pagination .page-item.active span {
    background: var(--green) !important;
    border-color: var(--green) !important;
    color: #000 !important;
}

/* ═══ MODAL DELETE ═══ */
.modal-confirm-delete .modal-content {
    border-radius: 16px; border: none;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
    overflow: hidden;
}
.modal-confirm-delete .modal-header {
    background: #fef2f2; border-bottom: 1px solid #fecaca;
    padding: 16px 22px;
}
.modal-confirm-delete .modal-title {
    font-size: 15px; font-weight: 700; color: #000 !important;
}
.modal-confirm-delete .modal-body { padding: 26px 22px; text-align: center; }
.modal-confirm-delete .modal-footer {
    background: var(--bg-soft);
    border-top: 1px solid var(--line);
    padding: 14px 22px;
    justify-content: center; gap: 10px;
}
.confirm-icon {
    width: 72px; height: 72px;
    background: #fee2e2; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
    box-shadow: 0 8px 20px -6px rgba(239,68,68,.3);
}
.confirm-icon i { font-size: 2rem; color: #ef4444; }
.confirm-title { font-size: 15px; font-weight: 700; color: #000 !important; margin-bottom: 6px; }
.confirm-text { font-size: 13px; color: #000 !important; margin: 0; line-height: 1.6; }
.confirm-text strong { color: #dc2626 !important; }

/* ═══ MODAL SHOW & EDIT — 75% layar ═══ */
.modal-dialog-75 { max-width: 75%; width: 75%; margin: 1.75rem auto; }
@media (max-width: 991.98px) { .modal-dialog-75 { max-width: 95%; width: 95%; } }

.modal-show-data .modal-content,
.modal-form-data .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
    overflow: hidden;
}
.modal-show-data .modal-header,
.modal-form-data .modal-header {
    background: #fff;
    border-bottom: 1px solid #eaeaea;
    padding: 18px 26px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}
.modal-show-data .modal-title,
.modal-form-data .modal-title {
    margin: 0 !important;
    font-weight: 700;
    font-size: 15px;
    color: #000 !important;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-show-data .modal-title i,
.modal-form-data .modal-title i { color: var(--green) !important; font-size: 18px; }
.modal-show-data .modal-body,
.modal-form-data .modal-body {
    padding: 22px 26px;
    max-height: 72vh;
    overflow-y: auto;
}
.modal-show-data .modal-footer,
.modal-form-data .modal-footer {
    background: var(--bg-soft);
    border-top: 1px solid #eaeaea;
    padding: 14px 26px;
    justify-content: flex-end;
    gap: 8px;
}

/* Form controls inside modal */
.form-label {
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #000 !important;
    margin-bottom: 5px !important;
    display: flex;
    align-items: center;
    gap: 6px;
}
.form-label i { color: var(--green) !important; font-size: 13px !important; width: 16px; text-align: center; }
.form-control, .form-select {
    font-size: 12px !important;
    line-height: 1.5 !important;
    border: 1px solid var(--line) !important;
    border-radius: 6px !important;
    padding: 8px 12px !important;
    background: #fff !important;
    color: #000 !important;
    transition: all .15s ease !important;
    width: 100%;
}
.form-control:focus, .form-select:focus {
    border-color: var(--green) !important;
    box-shadow: 0 0 0 2px var(--green-line) !important;
    outline: none !important;
}
.form-control[readonly] { background: var(--bg-soft) !important; cursor: default; }
.form-control::placeholder { color: var(--silver) !important; opacity: 1; }

.badge-progress {
    display: inline-flex; align-items: center; gap: 4px;
    padding: 4px 10px; border-radius: 4px;
    font-size: 11px; font-weight: 700;
    background: var(--green-soft);
    border: 1px solid var(--green-line);
    color: #000 !important;
}
.modal-body hr { border-top: 1px solid var(--line) !important; margin: 16px 0 !important; }

@media (max-width: 768px) {
    .button-modern, .button-baru, .button-berkas, .button-merah,
    .button-hijau, .button-data { font-size: 11px !important; padding: 6px 10px !important; }
    .toolbar-wrapper { flex-direction: column; align-items: stretch; }
    .toolbar-left, .toolbar-right { width: 100%; }
    .toolbar-right > * { flex: 1 1 auto; justify-content: center; }
    .search-wrapper { max-width: 100%; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    @include('backend.00_administrator.00_baganterpisah.04_navbar')
    @include('backend.00_administrator.00_baganterpisah.03_sidebar')
    @include('button')

    <main class="app-main">
        <section class="bg-3d-pattern" loading="lazy">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                        @include('backend.00_administrator.00_baganterpisah.11_alert')
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row" style="margin-right:10px; margin-left:10px;">
                    <div class="card card-3d mb-4">
                        <div class="card-header card-header-custom">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                            <div class="toolbar-wrapper">
                                <div class="toolbar-left">
                                    <div class="search-wrapper">
                                        <input type="search" id="searchInput"
                                               placeholder="Cari Paket Pekerjaan..."
                                               onkeyup="searchTable()"
                                               class="search-input">
                                        <i class="bi bi-search search-icon"></i>
                                    </div>

                                    <div class="filter-inline">
                                        <span class="filter-inline-label">Tampilkan:</span>
                                        <select id="entries" onchange="updateEntries()" class="filter-select">
                                            @foreach([10,25,50,75,100,150,200,250,500,1000,1500,2000,2500,5000] as $opt)
                                                <option value="{{ $opt }}" {{ (int)($perPage ?? 10) === $opt ? 'selected' : '' }}>{{ number_format($opt, 0, ',', '.') }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="badge-total">
                                        <i class="bi bi-box-seam"></i>
                                        Total
                                        <span class="badge-total-number">{{ $data->total() ?? 0 }}</span>
                                        Paket
                                    </div>
                                </div>

                                <div class="toolbar-right">
                                    <a href="/bepaketpekerjaanrekap">
                                        <button class="button-modern"><i class="bi bi-clipboard-data"></i> Rekap</button>
                                    </a>
                                    <a href="/statistikprofilpekerjaan">
                                        <button class="button-modern"><i class="bi bi-bar-chart-line"></i> Statistik</button>
                                    </a>
                                    <a href="/bepaketpekerjaan">
                                        <button class="button-modern"><i class="bi bi-database"></i> Data Lengkap</button>
                                    </a>
                                    <button onclick="exportTableToExcel('tablePaket', 'data_profilpaketpekerjaan')" class="button-berkas">
                                        <i class="bi bi-download"></i> Download Excel
                                    </button>
                                    <a href="/bepaketpekerjaancreate">
                                        <button class="button-baru"><i class="fa fa-plus"></i> Tambah Data</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                                <table id="tablePaket" class="zebra-table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 75px; text-align:center;"><i class="bi bi-hash"></i>No</th>
                                            <th style="width: 175px; text-align:center;"><i class="bi bi-briefcase"></i>Jenis Pekerjaan</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-card-text"></i>Nama Pekerjaan</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-list-check"></i>Status Paket Pekerjaan</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-gear"></i>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{ $loop->iteration }}</td>
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
                                            <td style="text-align: center; vertical-align: middle; white-space: nowrap;">
                                                <div style="display: inline-flex; gap: 4px; align-items: center; justify-content: center;">
                                                    {{-- SHOW --}}
                                                    <button type="button" class="button-baru" title="View"
                                                            onclick="openShowModal({{ $item->id }})">
                                                        <i class="bi bi-eye"></i>
                                                    </button>

                                                    {{-- EDIT --}}
                                                    <button type="button" class="button-berkas" title="Update"
                                                            onclick="openEditModal({{ $item->id }})">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>

                                                    {{-- DELETE --}}
                                                    <a href="javascript:void(0)" class="button-merah" title="Delete"
                                                       data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                       data-judul="{{ $item->id }}"
                                                       onclick="setDeleteUrl(this)">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="empty-row">
                                            <td colspan="100%">
                                                <div style="
                                                    width: 100%; display: flex; flex-direction: column;
                                                    justify-content: center; align-items: center;
                                                    padding: 40px 20px; gap: 12px;
                                                    font-weight: 600; color: #000 !important;
                                                    background-color: #f8fafc;
                                                    border: 2px dashed #cbd5e1;
                                                    border-radius: 12px; font-size: 14px;
                                                ">
                                                    <i class="bi bi-folder-x" style="font-size: 40px; color: #94a3b8;"></i>
                                                    <span>Data Tidak Ditemukan !!</span>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div style="padding: 12px 18px;">
                            @include('backend.00_administrator.00_baganterpisah.07_paginations')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL SHOW DATA                                                --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-show-data" id="modalShowData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-file-earmark-text"></i>
                    Profil Paket Pekerjaan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div style="background: var(--green-soft); border:1px solid var(--green-line); border-radius:6px; padding: 14px 18px; margin-bottom: 20px;">
                    <div style="font-size:11px; font-weight:700; color:var(--gray-dark); text-transform:uppercase; letter-spacing:.5px; margin-bottom:4px;">
                        Nama Paket Pekerjaan
                    </div>
                    <div id="show_namapekerjaan" style="font-size:15px; font-weight:700; color:#000;">—</div>
                    <div style="margin-top:8px;">
                        <span class="badge-progress">
                            <i class="bi bi-bar-chart-fill"></i>
                            Progress: <span id="show_progress">0</span>%
                        </span>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-tools"></i> Jenis Pekerjaan</label>
                            <input class="form-control" id="show_jenis" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-check-circle-fill"></i> Status Pekerjaan</label>
                            <input class="form-control" id="show_status" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-bank"></i> Sumber Dana</label>
                            <input class="form-control" id="show_sumberdana" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-calendar-date"></i> Tahun Pelaksanaan</label>
                            <input class="form-control" id="show_tahun" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-building"></i> CV/PT</label>
                            <input class="form-control" id="show_cvpt" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-person-badge"></i> NIB</label>
                            <input class="form-control" id="show_nib" readonly/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-file-earmark-ruled"></i> Nilai Kontrak</label>
                            <input class="form-control" id="show_nilaikontrak" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Jenis Kontrak</label>
                            <input class="form-control" id="show_jeniskontrak" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-file-earmark-lock-fill"></i> Karakteristik Kontrak</label>
                            <input class="form-control" id="show_karakteristik" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-calendar-month-fill"></i> Bulan Rekap</label>
                            <input class="form-control" id="show_bulanrekap" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-house-door-fill"></i> Dinas / Satuan Kerja</label>
                            <input class="form-control" id="show_user" readonly/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="button-berkas" id="btnToEdit">
                    <i class="bi bi-pencil-square"></i> Update
                </button>
                <button type="button" class="button-modern" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Kembali
                </button>
            </div>

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL EDIT DATA                                                --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-form-data" id="modalEditData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-pencil-square"></i>
                    Update Paket Pekerjaan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-briefcase-fill"></i> Jenis Pekerjaan</label>
                            <select name="profiljenispekerjaan_id" id="edit_profiljenispekerjaan_id" class="form-select">
                                <option value="">-- Pilih Jenis Pekerjaan --</option>
                                @foreach ($profiljenispekerjaanList as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->jenispekerjaan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-clipboard-check-fill"></i> Status Pekerjaan</label>
                            <select name="paketstatuspekerjaan_id" id="edit_paketstatuspekerjaan_id" class="form-select">
                                <option value="">-- Pilih Status Pekerjaan --</option>
                                @foreach ($paketstatuspekerjaanList as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->paketstatuspekerjaan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-cash-stack"></i> Sumber Dana</label>
                            <select name="sumberdana_id" id="edit_sumberdana_id" class="form-select">
                                <option value="">-- Pilih Sumber Dana --</option>
                                @foreach ($sumberdanaList as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->sumberdana }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-calendar-event-fill"></i> Tahun Anggaran</label>
                            <select name="tahunpilihan_id" id="edit_tahunpilihan_id" class="form-select">
                                <option value="">-- Pilih Tahun --</option>
                                @foreach ($tahunpilihanList as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->tahunpilihan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-calendar-month-fill"></i> Bulan Rekap</label>
                            <select name="bulanrekap_id" id="edit_bulanrekap_id" class="form-select">
                                <option value="">-- Pilih Bulan --</option>
                                @foreach ($bulanrekapList as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->bulanrekap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-person-fill"></i> Satuan Kerja</label>
                            <input type="text" class="form-control" id="edit_user_name" readonly>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label"><i class="bi bi-building-fill"></i> Nama Pekerjaan</label>
                            <input type="text" name="namapekerjaan" id="edit_namapekerjaan" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-building-gear"></i> CV/PT Penyedia</label>
                            <input type="text" name="cvptpenyedia" id="edit_cvptpenyedia" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-upc-scan"></i> NIB</label>
                            <input type="text" name="nib" id="edit_nib" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-currency-dollar"></i> Nilai Kontrak (Rp)</label>
                            <input type="number" step="0.01" name="nilaikontrak" id="edit_nilaikontrak" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Jenis Kontrak</label>
                            <input type="text" name="jeniskontrak" id="edit_jeniskontrak" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-file-earmark-diff-fill"></i> Karakteristik Kontrak</label>
                            <input type="text" name="karakteristikkontrak" id="edit_karakteristikkontrak" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-calendar2-plus-fill"></i> Bulan Mulai</label>
                            <input type="text" name="bulanmulai" id="edit_bulanmulai" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-calendar2-check-fill"></i> Bulan Selesai</label>
                            <input type="text" name="bulanselesai" id="edit_bulanselesai" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><i class="bi bi-bar-chart-fill"></i> Progress (%)</label>
                            <input type="number" name="progress" id="edit_progress" class="form-control" min="0" max="100">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i> Batal
                    </button>
                    <button type="submit" class="button-baru">
                        <i class="bi bi-save"></i> Update Data
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL DELETE                                                   --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-confirm-delete" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle" style="margin-right:8px; color:#ef4444;"></i>
                    Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon"><i class="bi bi-trash"></i></div>
                <h5 class="confirm-title">Yakin Ingin Menghapus?</h5>
                <p class="confirm-text">Data <strong id="itemName"></strong> akan dihapus permanen.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" style="margin:0;">
                    @csrf @method('DELETE')
                    <button type="submit" class="button-merah">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script>
// ═══ UPDATE PER PAGE ═══
function updateEntries() {
    let selectedValue = document.getElementById("entries").value;
    let url = new URL(window.location.href);
    url.searchParams.set("perPage", selectedValue);
    window.location.href = url.toString();
}

// ═══ SEARCH (fetch AJAX) ═══
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

// ═══ EXPORT EXCEL ═══
function exportTableToExcel(tableID, filename = '') {
    let table = document.getElementById(tableID);
    let tableHTML = "<table>" + table.innerHTML + "</table>";
    filename = filename ? filename + '.xls' : 'excel_data.xls';
    let downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);
    downloadLink.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tableHTML);
    downloadLink.download = filename;
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

// ═══ DELETE ═══
function setDeleteUrl(button) {
    var id = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = id;
    var deleteUrl = "/bepaketpekerjaan/delete/" + encodeURIComponent(id);
    document.getElementById('deleteForm').action = deleteUrl;
}

// ═══════════════════════════════════════════════════════════════
// SHOW MODAL — Fetch detail via AJAX lalu tampilkan
// ═══════════════════════════════════════════════════════════════
let currentShowId = null;

function openShowModal(id) {
    currentShowId = id;
    fetch(`/bepaketpekerjaan/detail/${id}`, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(r => r.json())
    .then(d => {
        document.getElementById('show_namapekerjaan').innerText = d.namapekerjaan ?? '—';
        document.getElementById('show_jenis').value        = d.jenispekerjaan ?? '—';
        document.getElementById('show_status').value       = d.statuspekerjaan ?? '—';
        document.getElementById('show_sumberdana').value   = d.sumberdana ?? '—';
        document.getElementById('show_tahun').value        = d.tahunpilihan ?? '—';
        document.getElementById('show_cvpt').value         = d.cvptpenyedia ?? '—';
        document.getElementById('show_nib').value          = d.nib ?? '—';
        document.getElementById('show_nilaikontrak').value = 'Rp ' + formatRupiah(d.nilaikontrak) + ',00';
        document.getElementById('show_jeniskontrak').value = d.jeniskontrak ?? '—';
        document.getElementById('show_karakteristik').value= d.karakteristikkontrak ?? '—';
        document.getElementById('show_bulanrekap').value   = d.bulanrekap ?? '—';
        document.getElementById('show_user').value         = d.user_name ?? '—';
        document.getElementById('show_progress').innerText = d.progress ?? 0;

        // Tombol "Update" di footer modal show → buka modal edit
        document.getElementById('btnToEdit').onclick = function () {
            bootstrap.Modal.getInstance(document.getElementById('modalShowData')).hide();
            setTimeout(() => openEditModal(id), 300);
        };

        new bootstrap.Modal(document.getElementById('modalShowData')).show();
    })
    .catch(err => {
        console.error(err);
        alert('Gagal memuat detail paket.');
    });
}

// ═══════════════════════════════════════════════════════════════
// EDIT MODAL — Fetch detail lalu isi form
// ═══════════════════════════════════════════════════════════════
function openEditModal(id) {
    fetch(`/bepaketpekerjaan/detail/${id}`, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(r => r.json())
    .then(d => {
        document.getElementById('edit_profiljenispekerjaan_id').value = d.profiljenispekerjaan_id ?? '';
        document.getElementById('edit_paketstatuspekerjaan_id').value = d.paketstatuspekerjaan_id ?? '';
        document.getElementById('edit_sumberdana_id').value           = d.sumberdana_id ?? '';
        document.getElementById('edit_tahunpilihan_id').value         = d.tahunpilihan_id ?? '';
        document.getElementById('edit_bulanrekap_id').value           = d.bulanrekap_id ?? '';
        document.getElementById('edit_user_name').value               = d.user_name ?? '';
        document.getElementById('edit_namapekerjaan').value           = d.namapekerjaan ?? '';
        document.getElementById('edit_cvptpenyedia').value            = d.cvptpenyedia ?? '';
        document.getElementById('edit_nib').value                     = d.nib ?? '';
        document.getElementById('edit_nilaikontrak').value            = d.nilaikontrak ?? '';
        document.getElementById('edit_jeniskontrak').value            = d.jeniskontrak ?? '';
        document.getElementById('edit_karakteristikkontrak').value    = d.karakteristikkontrak ?? '';
        document.getElementById('edit_bulanmulai').value              = d.bulanmulai ?? '';
        document.getElementById('edit_bulanselesai').value            = d.bulanselesai ?? '';
        document.getElementById('edit_progress').value                = d.progress ?? 0;

        // Set action form
        document.getElementById('editForm').action = `/bepaketpekerjaan/update/${id}`;

        new bootstrap.Modal(document.getElementById('modalEditData')).show();
    })
    .catch(err => {
        console.error(err);
        alert('Gagal memuat data untuk edit.');
    });
}

// ═══ HELPER — Format Rupiah ═══
function formatRupiah(angka) {
    if (!angka) return '0';
    return parseInt(angka).toLocaleString('id-ID');
}
</script>
</body>