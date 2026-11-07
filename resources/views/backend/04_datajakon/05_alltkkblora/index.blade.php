@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ══════════════════════════════════════════════════════════
   BACKGROUND 3D PATTERN & FLOATING CARD
   ══════════════════════════════════════════════════════════ */
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
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15),
                0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    margin-bottom: 30px;
}
.card-3d:hover {
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25),
                0 25px 50px -12px rgba(0, 0, 0, 0.15);
}
body.modal-open .card-3d,
body.modal-open .card-3d:hover { transform: none !important; }

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
    border-radius: 20px 20px 0 0 !important;
}
.card-3d > .card-body:last-child { border-radius: 0 0 20px 20px; }
@media (max-width: 768px) {
    .card-header-custom { padding: 16px 18px !important; }
    .card-3d { border-radius: 16px; margin-bottom: 20px; }
}

/* ══════════════════════════════════════════════════════════
   TIPOGRAFI GLOBAL
   ══════════════════════════════════════════════════════════ */
body, .app-wrapper, .card-3d {
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    line-height: 1.55;
    color: #1a2b4a;
}

/* ══════════════════════════════════════════════════════════
   TOOLBAR — Search & Filter
   ══════════════════════════════════════════════════════════ */
.toolbar-search { width: 100%; margin-bottom: 12px; }
.search-wrapper { position: relative; width: 100%; }
.search-input {
    width: 100%;
    border: 1.5px solid #e2e8f0;
    padding: 12px 44px 12px 18px;
    font-size: 13px;
    border-radius: 12px;
    background: #f8fafc;
    transition: all 0.25s ease;
}
.search-input:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.search-icon {
    position: absolute;
    right: 16px; top: 50%;
    transform: translateY(-50%);
    font-size: 16px; color: #94a3b8;
    pointer-events: none;
}
.search-clear {
    position: absolute;
    right: 42px; top: 50%;
    transform: translateY(-50%);
    background: #e2e8f0;
    color: #64748b;
    border: none;
    border-radius: 50%;
    width: 22px; height: 22px;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s ease;
}
.search-clear:hover { background: #dc2626; color: #fff; }

.toolbar-filter {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    gap: 12px;
    padding: 16px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 12px;
    margin-bottom: 12px;
}
.filter-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
    flex: 1 1 160px;
    min-width: 140px;
}
.filter-label {
    font-size: 12px;
    font-weight: 600;
    color: #4a5a72;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}
.filter-label i { color: #13A847; }
.filter-select {
    border: 1.5px solid #e2e8f0;
    padding: 10px 34px 10px 12px;
    font-size: 13px;
    border-radius: 10px;
    background: #ffffff;
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    transition: all 0.25s ease;
}
.filter-select:focus {
    border-color: #13A847;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.filter-reset {
    font-size: 12px;
    padding: 10px 16px;
    border-radius: 10px;
    background: #fef2f2;
    color: #dc2626;
    border: 1.5px solid #fecaca;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s ease;
    white-space: nowrap;
    align-self: flex-end;
}
.filter-reset:hover {
    background: #dc2626;
    color: #fff;
    border-color: #dc2626;
}

/* ══════════════════════════════════════════════════════════
   TOOLBAR — Info + Aksi
   ══════════════════════════════════════════════════════════ */
.toolbar-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    padding: 12px 16px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 12px;
    margin-bottom: 0;
}
.toolbar-actions .button-data {
    margin: 0;
    background: #ffffff;
    border: 1px solid #a7f3d0;
    color: #065f46;
}
.toolbar-actions .button-data i { color: #13A847; }

.action-buttons-group {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
}

.btn-download {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px !important;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 10px;
    border: 1.5px solid #0ea5e9;
    background: #ffffff;
    color: #0369a1;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
}
.btn-download:hover {
    background: #0ea5e9;
    color: #fff;
    border-color: #0ea5e9;
    box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);
}
.btn-download:active { transform: scale(0.97); }
.btn-download i { font-size: 14px; }

/* ══════════════════════════════════════════════════════════
   ZEBRA TABLE
   ══════════════════════════════════════════════════════════ */
#dataTable,
#dataTable > tbody,
#dataTable > tbody > tr,
#dataTable > tbody > tr > td,
#dataTable > thead,
#dataTable > thead > tr > th {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    --bs-table-hover-bg: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
}
#dataTable {
    width: 100%;
    border-collapse: collapse;
    min-width: 1400px;
    font-size: 13px;
}
#dataTable > thead > tr > th {
    padding: 14px 12px !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    color: #166534 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    vertical-align: middle !important;
    background: linear-gradient(180deg, #f0fdf4 0%, #f8fafc 100%) !important;
    border-bottom: 2px solid #13A847 !important;
    white-space: nowrap;
    line-height: 1.4;
    position: sticky;
    top: 0;
    z-index: 2;
}
#dataTable > thead > tr > th i {
    color: #13A847;
    margin-right: 4px;
    font-size: 13px;
    vertical-align: middle;
}
#dataTable > tbody > tr > td {
    padding: 10px 14px;
    font-size: 13px;
    color: #1a2b4a;
    border-bottom: 1px solid #e5e7eb !important;
    vertical-align: middle;
    line-height: 1.5;
    transition: background-color 0.18s ease;
}
#dataTable > tbody > tr:nth-child(odd) > td { background-color: #ffffff !important; }
#dataTable > tbody > tr:nth-child(even) > td { background-color: #f0fdf4 !important; }
#dataTable > tbody > tr:hover > td {
    background-color: #bbf7d0 !important;
    color: #065f46 !important;
    border-bottom-color: #86efac !important;
    cursor: pointer;
}
#dataTable > tbody > tr:hover > td:first-child {
    box-shadow: inset 4px 0 0 #13A847;
}
#dataTable > tbody > tr.empty-row > td,
#dataTable > tbody > tr.empty-row:hover > td {
    background-color: #ffffff !important;
    cursor: default;
    box-shadow: none !important;
}
@media (max-width: 768px) {
    #dataTable { min-width: 100%; }
    #dataTable > thead > tr > th,
    #dataTable > tbody > tr > td { padding: 8px 10px; font-size: 12px; }
}
.table-responsive {
    max-width: 100%;
    overflow-x: auto;
    border-radius: 0 0 20px 20px;
}

/* ══════════════════════════════════════════════════════════
   Tombol umum
   ══════════════════════════════════════════════════════════ */
.button-modern,
.button-baru,
.button-berkas,
.button-merah,
.button-hijau,
.button-data { font-size: 13px !important; line-height: 1.4; }

/* ══════════════════════════════════════════════════════════
   MODAL TAMBAH / EDIT / SHOW — 75% layar
   ══════════════════════════════════════════════════════════ */
.modal-dialog-75 {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}
@media (max-width: 991.98px) {
    .modal-dialog-75 { max-width: 95%; width: 95%; }
}
.modal-tambah-data .modal-content,
.modal-edit-data .modal-content,
.modal-show-data .modal-content {
    border-radius: 20px; border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-tambah-data .modal-header,
.modal-edit-data .modal-header,
.modal-show-data .modal-header {
    background: #ffffff;
    border-bottom: 1px solid #eaeaea;
    padding: 20px 28px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    text-align: left !important;
}
.modal-tambah-data .modal-header .modal-title,
.modal-edit-data .modal-header .modal-title,
.modal-show-data .modal-header .modal-title {
    text-align: left !important;
    margin: 0 !important;
    font-weight: 700;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-tambah-data .modal-header .modal-title i { color: #13A847; font-size: 20px; }
.modal-edit-data .modal-header .modal-title i { color: #f59e0b; font-size: 20px; }
.modal-show-data .modal-header .modal-title i { color: #0ea5e9; font-size: 20px; }

.modal-tambah-data .modal-body,
.modal-edit-data .modal-body,
.modal-show-data .modal-body {
    padding: 24px 28px;
    max-height: 70vh;
    overflow-y: auto;
}
.modal-tambah-data .modal-footer,
.modal-edit-data .modal-footer,
.modal-show-data .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    padding: 16px 28px;
    justify-content: flex-end;
    gap: 10px;
}
.modal-tambah-data .form-label-modern,
.modal-edit-data .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-tambah-data .form-label-modern i { color: #13A847; font-size: 15px; width: 18px; text-align: center; }
.modal-edit-data .form-label-modern i { color: #f59e0b; font-size: 15px; width: 18px; text-align: center; }

.modal-tambah-data .form-control,
.modal-edit-data .form-control {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
}
.modal-tambah-data .form-control:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.modal-edit-data .form-control:focus {
    border-color: #f59e0b;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.15);
    outline: none;
}
.modal-tambah-data .mb-3,
.modal-edit-data .mb-3 { margin-bottom: 16px; }

/* Preview file */
.modal-tambah-data #previewContainer,
.modal-edit-data #editPreviewContainer {
    margin-top: 10px;
    padding: 12px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 10px;
    text-align: center;
    display: none;
}
.modal-tambah-data #previewContainer.has-file,
.modal-edit-data #editPreviewContainer.has-file { display: block; }

.modal-tambah-data #previewFoto,
.modal-tambah-data #pdfPreview,
.modal-edit-data #editPreviewFoto,
.modal-edit-data #editPdfPreview {
    max-width: 100%;
    max-height: 250px;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
}

.edit-current-file {
    margin-top: 8px;
    padding: 10px 12px;
    background: #fffbeb;
    border: 1px dashed #fcd34d;
    border-radius: 8px;
    font-size: 12px;
    color: #92400e;
    display: flex;
    align-items: center;
    gap: 8px;
}
.edit-current-file i { color: #f59e0b; font-size: 16px; }
.edit-current-file a {
    color: #0369a1;
    font-weight: 600;
    text-decoration: underline;
    margin-left: auto;
}

/* ══════════════════════════════════════════════════════════
   MODAL SHOW — detail read-only
   ══════════════════════════════════════════════════════════ */
.show-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}
@media (max-width: 768px) {
    .show-grid { grid-template-columns: 1fr; }
}
.show-item {
    padding: 12px 14px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    transition: all 0.2s ease;
}
.show-item:hover {
    background: #f0fdf4;
    border-color: #86efac;
}
.show-item.full { grid-column: 1 / -1; }
.show-label {
    font-size: 11px;
    font-weight: 700;
    color: #13A847;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.show-label i { font-size: 13px; }
.show-value {
    font-size: 13px;
    color: #1a2b4a;
    line-height: 1.5;
    word-break: break-word;
    font-weight: 500;
}
.show-value.mono {
    font-family: 'Courier New', monospace;
    font-size: 12px;
    background: #fff;
    padding: 4px 8px;
    border-radius: 6px;
    display: inline-block;
    border: 1px solid #e5e7eb;
}
.show-value.badge-tk {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
}
.show-value.badge-tk.terbit { background: #d1fae5; color: #065f46; }
.show-value.badge-tk.belum  { background: #fef3c7; color: #b45309; }

.show-section-title {
    grid-column: 1 / -1;
    font-size: 13px;
    font-weight: 800;
    color: #03157e;
    padding: 8px 0 4px;
    border-bottom: 2px dashed #cbd5e1;
    margin-top: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.show-section-title i { color: #13A847; }

/* ── Modal Hapus ── */
.modal-confirm-delete .modal-content {
    border-radius: 16px; border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-confirm-delete .modal-header {
    background: #fef2f2; border-bottom: 1px solid #fecaca;
    padding: 18px 24px;
}
.modal-confirm-delete .modal-body { padding: 30px 24px; text-align: center; }
.modal-confirm-delete .modal-footer {
    background: #f8fafc; border-top: 1px solid #eaeaea;
    padding: 16px 24px; justify-content: center; gap: 12px;
}
.confirm-icon {
    width: 80px; height: 80px;
    background: #fee2e2; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
}
.confirm-icon i { font-size: 2.5rem; color: #ef4444; }
.confirm-title {
    font-size: 16px; font-weight: 700; color: #1a2b4a; margin-bottom: 8px;
}
.confirm-text {
    font-size: 13px; color: #4a5a72; margin: 0; line-height: 1.6;
}
.confirm-text strong { color: #dc2626; }

@media (max-width: 768px) {
    .button-modern, .button-baru, .button-berkas, .button-merah,
    .button-hijau, .button-data, .btn-download { font-size: 12px !important; }
    .toolbar-filter { flex-direction: column; align-items: stretch; }
    .filter-group { flex: 1 1 auto; min-width: 100%; }
    .filter-reset { align-self: stretch; justify-content: center; }
    .toolbar-actions { flex-direction: column; align-items: stretch; }
    .toolbar-actions .button-data { width: 100%; justify-content: center; }
    .action-buttons-group { width: 100%; }
    .action-buttons-group .btn-download,
    .action-buttons-group .button-baru { width: 100%; justify-content: center; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    @include('backend.00_administrator.00_baganterpisah.04_navbar')
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
                <div class="row" style="margin-right:10px; margin-left:10px;">
                    <div class="card card-3d mb-4">
                        <div class="card-header card-header-custom">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                            <form method="GET" action="{{ url('/beskkallblora') }}" id="filterForm" autocomplete="off">

                                {{-- BARIS 1: SEARCH --}}
                                <div class="toolbar-search">
                                    <div class="search-wrapper">
                                        <input type="search" name="search" id="searchInput"
                                               placeholder="Cari Nama, Alamat, Sekolah, Jabatan, LSP, Jurusan, dll..."
                                               value="{{ $search }}"
                                               class="search-input">
                                        @if($search)
                                            <a href="{{ url('/beskkallblora') . '?' . http_build_query(array_filter([
                                                    'tahun_input'  => $tahunInput,
                                                    'tahun_bimtek' => $tahunBimtek,
                                                    'perPage'      => $perPage,
                                                ])) }}"
                                               class="search-clear" title="Hapus pencarian">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        @endif
                                        <i class="bi bi-search search-icon"></i>
                                    </div>
                                </div>

                                {{-- BARIS 2: FILTER --}}
                                <div class="toolbar-filter">
                                    <div class="filter-group">
                                        <label class="filter-label" for="filterPerPage">
                                            <i class="bi bi-list-ol"></i> Tampilkan
                                        </label>
                                        <select name="perPage" id="filterPerPage"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            @foreach([10, 25, 100, 500, 1000, 2000] as $opt)
                                                <option value="{{ $opt }}" {{ (int)$perPage === $opt ? 'selected' : '' }}>
                                                    {{ $opt }} data
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label class="filter-label" for="filterTahunInput">
                                            <i class="bi bi-calendar-plus"></i> Tahun Input Data
                                        </label>
                                        <select name="tahun_input" id="filterTahunInput"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            <option value="">Semua Tahun</option>
                                            @foreach($listTahunInput as $thn)
                                                <option value="{{ $thn }}" {{ (string)$tahunInput === (string)$thn ? 'selected' : '' }}>
                                                    {{ $thn }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label class="filter-label" for="filterTahunBimtek">
                                            <i class="bi bi-calendar-event"></i> Tahun Bimtek
                                        </label>
                                        <select name="tahun_bimtek" id="filterTahunBimtek"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            <option value="">Semua Tahun</option>
                                            @foreach($listTahunBimtek as $thn)
                                                <option value="{{ $thn }}" {{ (string)$tahunBimtek === (string)$thn ? 'selected' : '' }}>
                                                    {{ $thn }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @if($tahunInput || $tahunBimtek || $search || $perPage != 10)
                                        <a href="{{ url('/beskkallblora') }}" class="filter-reset">
                                            <i class="bi bi-x-circle"></i> Reset Filter
                                        </a>
                                    @endif
                                </div>

                            </form>

                            {{-- BARIS 3: INFO + AKSI --}}
                            <div class="toolbar-actions">
                                <button class="button-data">
                                    <i class="bi bi-people-fill"></i>
                                    Data Tenaga Kerja {{ $datajumlah }} Orang
                                    <i class="bi bi-award-fill" style="margin-left:12px;"></i>
                                    {{ $datajumlahsertifikat }} Buah Sertifikat
                                </button>

                                <div class="action-buttons-group">
                                    <button type="button" class="button-berkas button-md" onclick="downloadExcel()">
                                        <i class="bi bi-file-earmark-excel"></i>
                                        Download Excel
                                    </button>

                                    <button type="button" class="button-baru button-md"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalTambahData">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                        Tambah Baru
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 75px;  text-align:center;"><i class="bi bi-hash"></i> No</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-person-lines-fill"></i> Nama Lengkap</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-geo-alt-fill"></i> Alamat</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-calendar-check-fill"></i> Tahun Lulus Sekolah</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-cash-stack"></i> Tahun Anggaran</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-building"></i> Penyelenggara</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-mortarboard-fill"></i> Universitas/Sekolah/Instansi</th>
                                            <th style="width: 225px; text-align:center;"><i class="bi bi-book"></i> Pendidikan</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-briefcase-fill"></i> Jabatan Kerja</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-bar-chart-fill"></i> Jenjang</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-patch-check-fill"></i> LSP Penerbit</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-journal-bookmark-fill"></i> Jurusan</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-calendar-event-fill"></i> Tanggal Terbit</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-calendar-x-fill"></i> Tanggal Habis</th>
                                            <th style="width: 200px; text-align:center;"><i class="bi bi-hourglass-split"></i> Masa Berlaku</th>
                                            <th style="width: 200px; text-align:center;"><i class="bi bi-check2-circle"></i> Status Terbit</th>
                                            <th style="width: 200px; text-align:center;"><i class="bi bi-file-earmark-check-fill"></i> Sertifikat</th>
                                            <th style="width: 400px; text-align:center;"><i class="bi bi-gear-fill"></i> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>

                                            {{-- ═══ KOLOM DATA — fallback "Data Belum Update" ═══ --}}
                                            <td style="text-align: left;">
                                                @if(!empty($item->nama))
                                                    {{ $item->nama }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                @if(!empty($item->alamat))
                                                    {{ $item->alamat }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if(!empty($item->tahunlulus))
                                                    {{ $item->tahunlulus }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if(!empty($item->tahunbimtek))
                                                    {{ $item->tahunbimtek }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->asosiasimasjaki && !empty($item->asosiasimasjaki->namaasosiasi))
                                                    {{ $item->asosiasimasjaki->namaasosiasi }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                @if($item->namasekolah && !empty($item->namasekolah->namasekolah))
                                                    {{ $item->namasekolah->namasekolah }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->jenjangpendidikan && !empty($item->jenjangpendidikan->jenjangpendidikan))
                                                    {{ $item->jenjangpendidikan->jenjangpendidikan }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                @if($item->jabatankerja && !empty($item->jabatankerja->jabatankerja))
                                                    {{ $item->jabatankerja->jabatankerja }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->jenjang && !empty($item->jenjang->jenjang))
                                                    {{ $item->jenjang->jenjang }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                @if($item->lpspenerbit && !empty($item->lpspenerbit->lpspenerbit))
                                                    {{ $item->lpspenerbit->lpspenerbit }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                @if($item->jurusan && !empty($item->jurusan->jurusan))
                                                    {{ $item->jurusan->jurusan }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>

                                            <td style="text-align: center;">
                                                @if($item->tanggalterbit)
                                                    {{ \Carbon\Carbon::parse($item->tanggalterbit)->translatedFormat('l, d F Y') }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->tanggalhabis)
                                                    {{ \Carbon\Carbon::parse($item->tanggalhabis)->translatedFormat('l, d F Y') }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>

                                            <td style="text-align: center;">
                                                @if($item->tanggalhabis)
                                                    <button class="masa-berlaku-btn" data-tanggal="{{ \Carbon\Carbon::parse($item->tanggalhabis)->format('Y-m-d H:i:s') }}"></button>
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>

                                            <td style="text-align: center; text-transform: uppercase;">
                                                @if(!empty($item->statusterbit))
                                                    {{ $item->statusterbit }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>

                                            <td style="text-align: center;">
                                                @if($item->sertifikat)
                                                    <button class="button-berkas"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalSertifikat{{ $item->id }}">
                                                        <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                    </button>
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>

                                            {{-- ═══ AKSI ═══ --}}
                                            <td style="text-align: center; vertical-align: middle;">
                                                <div style="display:flex; gap:5px; justify-content:center;">
                                                    {{-- Show — buka MODAL detail --}}
                                                    <button type="button" class="button-baru" title="Show"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalShowData"
                                                            data-item='@json($item)'>
                                                        <i class="bi bi-eye"></i>
                                                    </button>

                                                    {{-- Update — buka MODAL edit --}}
                                                    <button type="button" class="button-berkas" title="Update"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalEditData"
                                                            data-item='@json($item)'>
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>

                                                    {{-- Delete --}}
                                                    <a href="javascript:void(0)" class="button-merah" title="Delete"
                                                       data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                       data-judul="{{ $item->nama }}"
                                                       onclick="setDeleteUrl(this)">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="empty-row">
                                            <td colspan="100%">
                                                <div style="width:100%; display:flex; justify-content:center; align-items:center; padding:30px; font-weight:600; color:#6c757d; background-color:#f8f9fa; border:2px dashed #ced4da; border-radius:12px; font-size:14px;">
                                                    <i class="bi bi-folder-x" style="margin-right:8px; font-size:20px; color:#dc3545;"></i>
                                                    Data Tidak Ditemukan !!
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
        </section>
    </main>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL SHOW DATA — Detail Read-Only                            --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-show-data" id="modalShowData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-eye-fill"></i>
                    Detail Tenaga Kerja Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="show-grid">

                    {{-- IDENTITAS --}}
                    <div class="show-section-title">
                        <i class="bi bi-person-badge-fill"></i> Identitas Peserta
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-person"></i> Nama Lengkap</div>
                        <div class="show-value" id="show_nama">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-geo-alt"></i> Alamat</div>
                        <div class="show-value" id="show_alamat">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-calendar-check"></i> Tahun Lulus Sekolah</div>
                        <div class="show-value" id="show_tahunlulus">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-cash-stack"></i> Tahun Anggaran / Bimtek</div>
                        <div class="show-value" id="show_tahunbimtek">-</div>
                    </div>

                    {{-- PENDIDIKAN --}}
                    <div class="show-section-title">
                        <i class="bi bi-mortarboard-fill"></i> Pendidikan
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-building"></i> Sekolah / Universitas</div>
                        <div class="show-value" id="show_namasekolah">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-book"></i> Jenjang Pendidikan</div>
                        <div class="show-value" id="show_jenjangpendidikan">-</div>
                    </div>

                    <div class="show-item full">
                        <div class="show-label"><i class="bi bi-journal-bookmark"></i> Jurusan</div>
                        <div class="show-value" id="show_jurusan">-</div>
                    </div>

                    {{-- PEKERJAAN --}}
                    <div class="show-section-title">
                        <i class="bi bi-briefcase-fill"></i> Pekerjaan & Sertifikasi
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-person-badge"></i> Jabatan Kerja</div>
                        <div class="show-value" id="show_jabatankerja">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-bar-chart"></i> Jenjang</div>
                        <div class="show-value" id="show_jenjang">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-people"></i> Penyelenggara</div>
                        <div class="show-value" id="show_penyelenggara">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-patch-check"></i> LSP Penerbit</div>
                        <div class="show-value" id="show_lpspenerbit">-</div>
                    </div>

                    {{-- MASA BERLAKU --}}
                    <div class="show-section-title">
                        <i class="bi bi-calendar-event-fill"></i> Masa Berlaku Sertifikat
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-calendar-check"></i> Tanggal Terbit</div>
                        <div class="show-value" id="show_tanggalterbit">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-calendar-x"></i> Tanggal Habis</div>
                        <div class="show-value" id="show_tanggalhabis">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-check2-circle"></i> Status Terbit</div>
                        <div class="show-value" id="show_statusterbit">-</div>
                    </div>

                    <div class="show-item">
                        <div class="show-label"><i class="bi bi-hourglass-split"></i> Masa Berlaku</div>
                        <div class="show-value" id="show_masaberlaku">-</div>
                    </div>

                    {{-- FILE --}}
                    <div class="show-section-title">
                        <i class="bi bi-file-earmark-check-fill"></i> Berkas Sertifikat
                    </div>

                    <div class="show-item full">
                        <div class="show-label"><i class="bi bi-file-earmark-pdf"></i> File Sertifikat</div>
                        <div class="show-value" id="show_sertifikat">-</div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg" style="margin-right:4px;"></i> Tutup
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL TAMBAH DATA — 75% layar                                 --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-tambah-data" id="modalTambahData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data Tenaga Kerja Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('create.beallskkcreate') }}" method="POST" enctype="multipart/form-data" id="formTambahData">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="nama">
                                    <i class="bi bi-person"></i> Nama Lengkap
                                </label>
                                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
                                @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="alamat">
                                    <i class="bi bi-house-door"></i> Alamat
                                </label>
                                <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ old('alamat') }}</textarea>
                                @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="tahunlulus">
                                    <i class="bi bi-calendar-check"></i> Tahun Lulus
                                </label>
                                <input type="number" id="tahunlulus" name="tahunlulus" class="form-control @error('tahunlulus') is-invalid @enderror" value="{{ old('tahunlulus') }}" />
                                @error('tahunlulus')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="tahunbimtek">
                                    <i class="bi bi-calendar-event"></i> Tahun Bimtek
                                </label>
                                <select id="tahunbimtek" name="tahunbimtek" class="form-control @error('tahunbimtek') is-invalid @enderror">
                                    <option value="" disabled selected>-</option>
                                    <option value="2024" {{ old('tahunbimtek') == '2024' ? 'selected' : '' }}>2024</option>
                                    <option value="2025" {{ old('tahunbimtek') == '2025' ? 'selected' : '' }}>2025</option>
                                    <option value="2026" {{ old('tahunbimtek') == '2026' ? 'selected' : '' }}>2026</option>
                                </select>
                                @error('tahunbimtek')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="namasekolah_id">
                                    <i class="bi bi-building"></i> Nama Sekolah
                                </label>
                                <select id="namasekolah_id" name="namasekolah_id" class="form-control @error('namasekolah_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($namasekolahList as $sekolah)
                                        <option value="{{ $sekolah->id }}" {{ old('namasekolah_id') == $sekolah->id ? 'selected' : '' }}>
                                            {{ $sekolah->namasekolah }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('namasekolah_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="jenjangpendidikan_id">
                                    <i class="bi bi-person-check"></i> Jenjang Pendidikan
                                </label>
                                <select id="jenjangpendidikan_id" name="jenjangpendidikan_id" class="form-control @error('jenjangpendidikan_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($jenjangpendidikanList as $jenjang)
                                        <option value="{{ $jenjang->id }}" {{ old('jenjangpendidikan_id') == $jenjang->id ? 'selected' : '' }}>
                                            {{ $jenjang->jenjangpendidikan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jenjangpendidikan_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="jurusan_id">
                                    <i class="bi bi-bookmark"></i> Jurusan
                                </label>
                                <select id="jurusan_id" name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($jurusanList as $jurusan)
                                        <option value="{{ $jurusan->id }}" {{ old('jurusan_id') == $jurusan->id ? 'selected' : '' }}>
                                            {{ $jurusan->jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jurusan_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="jabatankerja_id">
                                    <i class="bi bi-person-badge"></i> Jabatan Kerja
                                </label>
                                <select id="jabatankerja_id" name="jabatankerja_id" class="form-control @error('jabatankerja_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($jabatankerjaList as $jabatan)
                                        <option value="{{ $jabatan->id }}" {{ old('jabatankerja_id') == $jabatan->id ? 'selected' : '' }}>
                                            {{ $jabatan->jabatankerja }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jabatankerja_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="jenjang_id">
                                    <i class="bi bi-briefcase"></i> Jenjang
                                </label>
                                <select id="jenjang_id" name="jenjang_id" class="form-control @error('jenjang_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($jenjangList as $jenjang)
                                        <option value="{{ $jenjang->id }}" {{ old('jenjang_id') == $jenjang->id ? 'selected' : '' }}>
                                            {{ $jenjang->jenjang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jenjang_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="asosiasimasjaki_id">
                                    <i class="bi bi-people"></i> Penyelenggara
                                </label>
                                <select id="asosiasimasjaki_id" name="asosiasimasjaki_id" class="form-control @error('asosiasimasjaki_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($asosiasimasjakiList as $asosiasi)
                                        <option value="{{ $asosiasi->id }}" {{ old('asosiasimasjaki_id') == $asosiasi->id ? 'selected' : '' }}>
                                            {{ $asosiasi->namaasosiasi }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('asosiasimasjaki_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="lpspenerbit_id">
                                    <i class="bi bi-card-text"></i> Lembaga Penerbit
                                </label>
                                <select id="lpspenerbit_id" name="lpspenerbit_id" class="form-control @error('lpspenerbit_id') is-invalid @enderror">
                                    <option value="">-</option>
                                    @foreach($lpspenerbitList as $penerbit)
                                        <option value="{{ $penerbit->id }}" {{ old('lpspenerbit_id') == $penerbit->id ? 'selected' : '' }}>
                                            {{ $penerbit->lpspenerbit }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lpspenerbit_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="tanggalterbit">
                                    <i class="bi bi-calendar-check"></i> Tanggal Terbit
                                </label>
                                <input type="date" id="tanggalterbit" name="tanggalterbit" class="form-control @error('tanggalterbit') is-invalid @enderror" value="{{ old('tanggalterbit') }}" />
                                @error('tanggalterbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="tanggalhabis">
                                    <i class="bi bi-calendar-x"></i> Tanggal Habis
                                </label>
                                <input type="date" id="tanggalhabis" name="tanggalhabis" class="form-control @error('tanggalhabis') is-invalid @enderror" value="{{ old('tanggalhabis') }}" />
                                @error('tanggalhabis')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="statusterbit">
                                    <i class="bi bi-check-circle"></i> Status Terbit
                                </label>
                                <select id="statusterbit" name="statusterbit" class="form-control @error('statusterbit') is-invalid @enderror">
                                    <option value="" disabled selected>-</option>
                                    <option value="Terbit" {{ old('statusterbit') == 'Terbit' ? 'selected' : '' }}>Terbit</option>
                                    <option value="Belum Terbit" {{ old('statusterbit') == 'Belum Terbit' ? 'selected' : '' }}>Belum Terbit</option>
                                </select>
                                @error('statusterbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="sertifikat">
                                    <i class="bi bi-file-earmark-pdf"></i> Upload Berkas
                                </label>
                                <input type="file" id="sertifikat" name="sertifikat"
                                       class="form-control @error('sertifikat') is-invalid @enderror"
                                       onchange="previewFile('sertifikat', 'previewFoto', 'previewContainer', 'pdfPreview')" />

                                <div id="previewContainer">
                                    <img id="previewFoto" style="max-width:100%; max-height:200px; margin-top:10px; display:none;" />
                                    <canvas id="pdfPreview" style="display:none; max-width:100%; max-height:200px; margin-top:10px;"></canvas>
                                </div>

                                @error('sertifikat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="submitFormTambah()">
                        <i class="bi bi-plus-lg" style="margin-right:4px;"></i> Tambah Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL EDIT DATA — 75% layar                                   --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-edit-data" id="modalEditData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-pencil-square"></i>
                    Edit Data Tenaga Kerja Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="formEditData">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_nama">
                                    <i class="bi bi-person"></i> Nama Lengkap
                                </label>
                                <input type="text" id="edit_nama" name="nama" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_alamat">
                                    <i class="bi bi-house-door"></i> Alamat
                                </label>
                                <textarea id="edit_alamat" name="alamat" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_tahunlulus">
                                    <i class="bi bi-calendar-check"></i> Tahun Lulus
                                </label>
                                <input type="number" id="edit_tahunlulus" name="tahunlulus" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_tahunbimtek">
                                    <i class="bi bi-calendar-event"></i> Tahun Bimtek
                                </label>
                                <select id="edit_tahunbimtek" name="tahunbimtek" class="form-control">
                                    <option value="">-</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_namasekolah_id">
                                    <i class="bi bi-building"></i> Nama Sekolah
                                </label>
                                <select id="edit_namasekolah_id" name="namasekolah_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($namasekolahList as $sekolah)
                                        <option value="{{ $sekolah->id }}">{{ $sekolah->namasekolah }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_jenjangpendidikan_id">
                                    <i class="bi bi-person-check"></i> Jenjang Pendidikan
                                </label>
                                <select id="edit_jenjangpendidikan_id" name="jenjangpendidikan_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($jenjangpendidikanList as $jenjang)
                                        <option value="{{ $jenjang->id }}">{{ $jenjang->jenjangpendidikan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_jurusan_id">
                                    <i class="bi bi-bookmark"></i> Jurusan
                                </label>
                                <select id="edit_jurusan_id" name="jurusan_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($jurusanList as $jurusan)
                                        <option value="{{ $jurusan->id }}">{{ $jurusan->jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_jabatankerja_id">
                                    <i class="bi bi-person-badge"></i> Jabatan Kerja
                                </label>
                                <select id="edit_jabatankerja_id" name="jabatankerja_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($jabatankerjaList as $jabatan)
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->jabatankerja }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_jenjang_id">
                                    <i class="bi bi-briefcase"></i> Jenjang
                                </label>
                                <select id="edit_jenjang_id" name="jenjang_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($jenjangList as $jenjang)
                                        <option value="{{ $jenjang->id }}">{{ $jenjang->jenjang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_asosiasimasjaki_id">
                                    <i class="bi bi-people"></i> Penyelenggara
                                </label>
                                <select id="edit_asosiasimasjaki_id" name="asosiasimasjaki_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($asosiasimasjakiList as $asosiasi)
                                        <option value="{{ $asosiasi->id }}">{{ $asosiasi->namaasosiasi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_lpspenerbit_id">
                                    <i class="bi bi-card-text"></i> Lembaga Penerbit
                                </label>
                                <select id="edit_lpspenerbit_id" name="lpspenerbit_id" class="form-control">
                                    <option value="">-</option>
                                    @foreach($lpspenerbitList as $penerbit)
                                        <option value="{{ $penerbit->id }}">{{ $penerbit->lpspenerbit }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_tanggalterbit">
                                    <i class="bi bi-calendar-check"></i> Tanggal Terbit
                                </label>
                                <input type="date" id="edit_tanggalterbit" name="tanggalterbit" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_tanggalhabis">
                                    <i class="bi bi-calendar-x"></i> Tanggal Habis
                                </label>
                                <input type="date" id="edit_tanggalhabis" name="tanggalhabis" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_statusterbit">
                                    <i class="bi bi-check-circle"></i> Status Terbit
                                </label>
                                <select id="edit_statusterbit" name="statusterbit" class="form-control">
                                    <option value="">-</option>
                                    <option value="Terbit">Terbit</option>
                                    <option value="Belum Terbit">Belum Terbit</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_sertifikat">
                                    <i class="bi bi-file-earmark-pdf"></i> Upload Berkas Baru (opsional)
                                </label>
                                <input type="file" id="edit_sertifikat" name="sertifikat"
                                       class="form-control"
                                       onchange="previewFile('edit_sertifikat', 'editPreviewFoto', 'editPreviewContainer', 'editPdfPreview')" />

                                <div id="editPreviewContainer">
                                    <img id="editPreviewFoto" style="max-width:100%; max-height:200px; margin-top:10px; display:none;" />
                                    <canvas id="editPdfPreview" style="display:none; max-width:100%; max-height:200px; margin-top:10px;"></canvas>
                                </div>

                                <div id="editCurrentFile" class="edit-current-file" style="display:none;">
                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                    <span>File saat ini:</span>
                                    <a href="#" id="editCurrentFileLink" target="_blank">Lihat File Lama</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="submitFormEdit()">
                        <i class="bi bi-save" style="margin-right:4px;"></i> Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL SERTIFIKAT — loop                                     --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
@foreach ($data as $item)
<div class="modal fade" id="modalSertifikat{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                <h5 class="modal-title">Sertifikat — {{ $item->nama ?? '-' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                    <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                @elseif($item->sertifikat)
                    <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                @else
                    <p><span class="badge bg-danger">-</span></p>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL HAPUS                                                    --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-confirm-delete" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle" style="margin-right:8px; color:#ef4444;"></i>
                    Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon">
                    <i class="bi bi-trash"></i>
                </div>
                <h5 class="confirm-title">Yakin Ingin Menghapus?</h5>
                <p class="confirm-text">
                    Data <strong id="itemName"></strong> akan dihapus permanen.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" style="margin:0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-merah">
                        <i class="bi bi-trash" style="margin-right:4px;"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

<script>
// ══════════════════════════════════════════════════════════
// SEARCH — form submit + debounce
// ══════════════════════════════════════════════════════════
(function () {
    const input  = document.getElementById('searchInput');
    const form   = document.getElementById('filterForm');
    if (!input || !form) return;

    let timer = null;

    input.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(function () { form.submit(); }, 600);
    });

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            clearTimeout(timer);
            form.submit();
        }
    });
})();

// ══════════════════════════════════════════════════════════
// DOWNLOAD EXCEL
// ══════════════════════════════════════════════════════════
function downloadExcel() {
    const table = document.getElementById('dataTable');
    if (!table) { alert('Tabel tidak ditemukan.'); return; }

    const csvData = [];
    const skipIndexes = [16, 17];

    const headerCells = table.querySelectorAll('thead th');
    const headerRow = [];
    headerCells.forEach(function (th, idx) {
        if (skipIndexes.includes(idx)) return;
        let text = th.innerText.replace(/\s+/g, ' ').trim();
        text = text.replace(/[\u{1F300}-\u{1F9FF}]/gu, '').trim();
        headerRow.push(text);
    });
    csvData.push(headerRow);

    const bodyRows = table.querySelectorAll('tbody tr');
    bodyRows.forEach(function (tr) {
        if (tr.querySelector('td[colspan]')) return;
        const cells = tr.querySelectorAll('td');
        const row = [];
        cells.forEach(function (td, idx) {
            if (skipIndexes.includes(idx)) return;
            row.push(td.innerText.replace(/\s+/g, ' ').trim());
        });
        csvData.push(row);
    });

    let csvContent = '\uFEFF';
    csvData.forEach(function (row) {
        const escaped = row.map(function (cell) {
            let c = String(cell).replace(/"/g, '""');
            if (/[",\n;]/.test(c)) c = '"' + c + '"';
            return c;
        });
        csvContent += escaped.join(';') + '\n';
    });

    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm   = String(today.getMonth() + 1).padStart(2, '0');
    const dd   = String(today.getDate()).padStart(2, '0');
    const filename = 'Data_TKK_Blora_' + yyyy + '-' + mm + '-' + dd + '.csv';

    if (navigator.msSaveBlob) {
        navigator.msSaveBlob(blob, filename);
    } else {
        const link = document.createElement('a');
        const url = URL.createObjectURL(blob);
        link.setAttribute('href', url);
        link.setAttribute('download', filename);
        link.style.visibility = 'hidden';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    }
}

// ══════════════════════════════════════════════════════════
// MASA BERLAKU
// ══════════════════════════════════════════════════════════
function initMasaBerlaku() {
    const now = new Date().getTime();
    document.querySelectorAll('.masa-berlaku-btn').forEach(function (btn) {
        const tanggal = btn.getAttribute('data-tanggal');
        if (!tanggal) return;
        const habis = new Date(tanggal).getTime();
        if (isNaN(habis)) return;
        if (now > habis) {
            btn.innerText = 'TIDAK BERLAKU';
            btn.className = 'masa-berlaku-btn button-merah';
        } else {
            btn.innerText = 'BERLAKU';
            btn.className = 'masa-berlaku-btn button-hijau';
        }
    });
}

// ══════════════════════════════════════════════════════════
// DELETE
// ══════════════════════════════════════════════════════════
function setDeleteUrl(button) {
    const nama = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = nama;
    document.getElementById('deleteForm').action = "/beskkallblora/delete/" + encodeURIComponent(nama);
}

// ══════════════════════════════════════════════════════════
// SUBMIT FORM
// ══════════════════════════════════════════════════════════
function submitFormTambah() { document.getElementById('formTambahData').submit(); }
function submitFormEdit()   { document.getElementById('formEditData').submit(); }

// ══════════════════════════════════════════════════════════
// MODAL EDIT — ISI DATA SAAT DIBUKA
// ══════════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function () {
    const modalEdit = document.getElementById('modalEditData');
    if (!modalEdit) return;

    modalEdit.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        if (!trigger) return;

        const item = JSON.parse(trigger.getAttribute('data-item') || '{}');

        document.getElementById('formEditData').action =
            "{{ route('update.beallskkupdate', ':nama') }}".replace(':nama', encodeURIComponent(item.nama || ''));

        const safe = function (val) {
            if (val === null || val === undefined || val === '') return '-';
            return val;
        };

        const setVal = function (id, val) {
            const el = document.getElementById(id);
            if (el) el.value = safe(val);
        };

        setVal('edit_nama',         item.nama);
        setVal('edit_alamat',       item.alamat);
        setVal('edit_tahunlulus',   item.tahunlulus);
        setVal('edit_tahunbimtek',  item.tahunbimtek);
        setVal('edit_tanggalterbit', item.tanggalterbit);
        setVal('edit_tanggalhabis',  item.tanggalhabis);

        const setSelect = function (id, val) {
            const el = document.getElementById(id);
            if (!el) return;
            if (val === null || val === undefined || val === '') {
                el.value = '';
            } else {
                el.value = String(val);
            }
            if (el.value === '' && val && String(val) !== '') {
                let matched = false;
                for (let opt of el.options) {
                    if (opt.value === String(val)) { matched = true; break; }
                }
                if (!matched) el.value = '';
            }
        };

        setSelect('edit_namasekolah_id',       item.namasekolah_id);
        setSelect('edit_jenjangpendidikan_id', item.jenjangpendidikan_id);
        setSelect('edit_jurusan_id',           item.jurusan_id);
        setSelect('edit_jabatankerja_id',      item.jabatankerja_id);
        setSelect('edit_jenjang_id',           item.jenjang_id);
        setSelect('edit_asosiasimasjaki_id',   item.asosiasimasjaki_id);
        setSelect('edit_lpspenerbit_id',       item.lpspenerbit_id);
        setSelect('edit_statusterbit',         item.statusterbit);

        const currentFile = document.getElementById('editCurrentFile');
        const currentLink = document.getElementById('editCurrentFileLink');
        if (item.sertifikat) {
            currentFile.style.display = 'flex';
            currentLink.href = "{{ asset('storage/') }}" + "/" + item.sertifikat;
        } else {
            currentFile.style.display = 'none';
            currentLink.href = '#';
        }

        const editFileInput = document.getElementById('edit_sertifikat');
        if (editFileInput) editFileInput.value = '';
        const previewContainer = document.getElementById('editPreviewContainer');
        if (previewContainer) {
            previewContainer.classList.remove('has-file');
            previewContainer.style.display = 'none';
        }
    });
});

// ══════════════════════════════════════════════════════════
// MODAL SHOW — ISI DATA SAAT DIBUKA
// ══════════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function () {
    const modalShow = document.getElementById('modalShowData');
    if (!modalShow) return;

    modalShow.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        if (!trigger) return;

        const item = JSON.parse(trigger.getAttribute('data-item') || '{}');

        // Helper: kalau kosong → tampilkan badge 'Data Belum Update'
        const setText = function (id, val) {
            const el = document.getElementById(id);
            if (!el) return;
            if (val === null || val === undefined || val === '') {
                el.innerHTML = '<button class="button-berkas" style="font-size:11px;">Data Belum Update</button>';
            } else {
                el.textContent = val;
            }
        };

        // Helper untuk tanggal
        const setDate = function (id, val) {
            const el = document.getElementById(id);
            if (!el) return;
            if (!val) {
                el.innerHTML = '<button class="button-berkas" style="font-size:11px;">Data Belum Update</button>';
            } else {
                try {
                    const d = new Date(val);
                    const opts = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
                    el.textContent = d.toLocaleDateString('id-ID', opts);
                } catch (e) {
                    el.textContent = val;
                }
            }
        };

        setText('show_nama',      item.nama);
        setText('show_alamat',    item.alamat);
        setText('show_tahunlulus', item.tahunlulus);
        setText('show_tahunbimtek', item.tahunbimtek);
        setText('show_jurusan',   item.jurusan ? item.jurusan.jurusan : '');

        // Relasi
        setText('show_namasekolah',       item.namasekolah ? item.namasekolah.namasekolah : '');
        setText('show_jenjangpendidikan', item.jenjangpendidikan ? item.jenjangpendidikan.jenjangpendidikan : '');
        setText('show_jabatankerja',      item.jabatankerja ? item.jabatankerja.jabatankerja : '');
        setText('show_jenjang',           item.jenjang ? item.jenjang.jenjang : '');
        setText('show_penyelenggara',     item.asosiasimasjaki ? item.asosiasimasjaki.namaasosiasi : '');
        setText('show_lpspenerbit',       item.lpspenerbit ? item.lpspenerbit.lpspenerbit : '');

        // Tanggal
        setDate('show_tanggalterbit', item.tanggalterbit);
        setDate('show_tanggalhabis',  item.tanggalhabis);

        // Status terbit dengan badge warna
        const statEl = document.getElementById('show_statusterbit');
        if (statEl) {
            if (!item.statusterbit) {
                statEl.innerHTML = '<button class="button-berkas" style="font-size:11px;">Data Belum Update</button>';
            } else {
                const cls = (item.statusterbit === 'Terbit') ? 'terbit' : 'belum';
                statEl.innerHTML = '<span class="show-value badge-tk ' + cls + '">' + item.statusterbit + '</span>';
            }
        }

        // Masa berlaku
        const masaEl = document.getElementById('show_masaberlaku');
        if (masaEl) {
            if (!item.tanggalhabis) {
                masaEl.innerHTML = '<button class="button-berkas" style="font-size:11px;">Data Belum Update</button>';
            } else {
                const now = new Date().getTime();
                const habis = new Date(item.tanggalhabis).getTime();
                if (now > habis) {
                    masaEl.innerHTML = '<span class="show-value badge-tk belum">TIDAK BERLAKU</span>';
                } else {
                    masaEl.innerHTML = '<span class="show-value badge-tk terbit">BERLAKU</span>';
                }
            }
        }

        // Sertifikat
        const sertEl = document.getElementById('show_sertifikat');
        if (sertEl) {
            if (item.sertifikat) {
                sertEl.innerHTML =
                    '<a href="{{ asset("storage") }}/' + item.sertifikat + '" target="_blank" class="button-berkas" style="font-size:11px; text-decoration:none;">' +
                        '<i class="bi bi-file-earmark-pdf-fill" style="margin-right:4px;"></i> Lihat Sertifikat' +
                    '</a>';
            } else {
                sertEl.innerHTML = '<button class="button-berkas" style="font-size:11px;">Data Belum Update</button>';
            }
        }
    });
});

// ══════════════════════════════════════════════════════════
// PREVIEW FILE
// ══════════════════════════════════════════════════════════
function previewFile(inputId, imgId, containerId, pdfId) {
    const fileInput = document.getElementById(inputId);
    if (!fileInput) return;

    const file = fileInput.files[0];
    const previewContainer = document.getElementById(containerId);
    const imgPreview = document.getElementById(imgId);
    const pdfPreview = document.getElementById(pdfId);

    imgPreview.style.display = 'none';
    pdfPreview.style.display = 'none';
    previewContainer.classList.remove('has-file');

    if (!file) return;

    const reader = new FileReader();

    if (file.type === 'application/pdf') {
        reader.onload = function(e) {
            const pdfData = e.target.result;
            pdfjsLib.getDocument({ data: pdfData }).promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    const canvas = pdfPreview;
                    const context = canvas.getContext('2d');
                    const a4WidthPx  = 210 * 3.7795275591;
                    const a4HeightPx = 297 * 3.7795275591;
                    const scale = Math.min(
                        a4WidthPx  / page.getViewport({ scale: 1 }).width,
                        a4HeightPx / page.getViewport({ scale: 1 }).height
                    );
                    const viewport = page.getViewport({ scale: scale });
                    canvas.height = viewport.height;
                    canvas.width  = viewport.width;

                    page.render({ canvasContext: context, viewport: viewport }).promise.then(function() {
                        pdfPreview.style.display = 'block';
                        previewContainer.classList.add('has-file');
                    });
                });
            });
        };
        reader.readAsArrayBuffer(file);
    } else {
        reader.onloadend = function() {
            imgPreview.src = reader.result;
            imgPreview.style.display = 'block';
            previewContainer.classList.add('has-file');
        };
        reader.readAsDataURL(file);
    }
}

// ══════════════════════════════════════════════════════════
// INIT
// ══════════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function () {
    initMasaBerlaku();
    setInterval(initMasaBerlaku, 60000);

    @if ($errors->any())
        new bootstrap.Modal(document.getElementById('modalTambahData')).show();
    @endif
});
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')